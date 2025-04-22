<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyek;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class ProyekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $proyeks = Proyek::paginate(10);
        return view('proyek.index', compact('proyeks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proyek.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_proyek' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'manpower' => 'required|integer',
            'duration' => 'required|integer',
            'description' => 'required|string',
            'documentation' => 'nullable|file|mimes:jpg,jpeg,png,pdf,rar,zip,doc,docx'
        ]);

        $data = $request->all();

        if ($request->hasFile('documentation')) {
            $uploadedFileUrl = Cloudinary::upload($request->file('documentation')->getRealPath())->getSecurePath();
            $data['documentation'] = $uploadedFileUrl;
        }

        Proyek::create($data);

        return redirect()->route('proyek.index')->with('success', 'Proyek berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Proyek $proyek)
    {
        return view('proyek.show', compact('proyek'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proyek $proyek)
    {
        return view('proyek.edit', compact('proyek'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proyek $proyek)
    {
        $request->validate([
            'nama_proyek' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'manpower' => 'required|integer',
            'duration' => 'nullable|integer',
            'description' => 'nullable|string',
            'documentation' => 'nullable|file|mimes:jpg,jpeg,png,pdf,rar,zip,doc,docx|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('documentation')) {
            $uploadedFileUrl = Cloudinary::upload($request->file('documentation')->getRealPath())->getSecurePath();
            $data['documentation'] = $uploadedFileUrl;
        }

        $proyek->update($data);

        return redirect()->route('proyek.index')->with('success', 'Proyek berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proyek $proyek)
    {
        $proyek->delete();
        return redirect()->route('proyek.index')->with('success', 'Proyek berhasil dihapus.');
    }
}
