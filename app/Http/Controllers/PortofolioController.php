<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyek;

class PortofolioController extends Controller
{
    public function index()
    {
        $perPage = request('per_page', 6); // Ambil parameter per_page atau default 6
        $sortBy = request('sort_by', 'created_at'); // Ambil parameter sort_by atau default created_at
        $sortOrder = request('sort_order', 'desc'); // Ambil parameter sort_order atau default desc
        $search = request('search'); // Ambil parameter search

        $query = Proyek::query();
        

        // Tambahkan pencarian jika ada parameter search
        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('nama_proyek', 'like', '%'.$search.'%')
                  ->orWhere('description', 'like', '%'.$search.'%')
                  ->orWhere('location', 'like', '%'.$search.'%');
            });
        }

       // Handle sorting
        $sortOption = request('sort_by', 'created_at_desc');
        switch ($sortOption) {
            case 'created_at_asc':
                $query->orderBy('created_at', 'asc');
                break;
            case 'nama_proyek_asc':
                $query->orderBy('nama_proyek', 'asc');
                break;
            case 'nama_proyek_desc':
                $query->orderBy('nama_proyek', 'desc');
                break;
            case 'duration_asc':
                $query->orderBy('duration', 'asc');
                break;
            case 'duration_desc':
                $query->orderBy('duration', 'desc');
                break;
            default: // created_at_desc
                $query->orderBy('created_at', 'desc');
        }

        // Pagination dengan menyertakan parameter query yang ada
        $proyeks = $query->paginate($perPage)
                        ->appends(request()->query());

        return view('portofolio.index', compact('proyeks'));
    }




    public function admin(Request $request)
    {
        $query = Proyek::query();

        // Search filter
        if ($request->has('search')) {
            $query->where(function($q) use ($request) {
                $q->where('nama_proyek', 'like', '%'.$request->search.'%')
                ->orWhere('description', 'like', '%'.$request->search.'%');
            });
        }
        
        // Location filter
        if ($request->has('location') && $request->location != '') {
            $query->where('location', $request->location);
        }
        
        // Duration range filter
        if ($request->has('duration_range') && $request->duration_range != '') {
            $range = explode('-', $request->duration_range);
            if (count($range) == 2) {
                $query->whereBetween('duration', [(int)$range[0], (int)$range[1]]);
            } elseif (str_contains($request->duration_range, '+')) {
                $min = (int)str_replace('+', '', $request->duration_range);
                $query->where('duration', '>=', $min);
            }
        }
        
        // Sorting
        $sortOptions = [
            'created_at_asc' => ['created_at', 'asc'],
            'nama_proyek_asc' => ['nama_proyek', 'asc'],
            'nama_proyek_desc' => ['nama_proyek', 'desc'],
            'duration_asc' => ['duration', 'asc'],
            'duration_desc' => ['duration', 'desc']
        ];
        
        $sortBy = $request->sort_by ?? 'created_at_desc';
        $sortField = $sortOptions[$sortBy] ?? ['created_at', 'desc'];
        $query->orderBy($sortField[0], $sortField[1]);
        
        // Get unique locations and durations for filter dropdowns
        $locations = Proyek::select('location')
                    ->distinct()
                    ->orderBy('location')
                    ->pluck('location');
        
        // Pagination
        $perPage = $request->per_page ?? 6;
        $proyeks = $query->paginate($perPage)
                    ->appends($request->except('page'));
        
        return view('portofolio.admin', compact('proyeks', 'locations'));
    }
    }