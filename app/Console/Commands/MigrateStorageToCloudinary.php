<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Proyek;
use Illuminate\Support\Facades\Storage;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class MigrateStorageToCloudinary extends Command
{
    protected $signature = 'migrate:storage-to-cloudinary';
    protected $description = 'Migrasi file dokumentasi dari storage lokal ke Cloudinary';

    public function handle()
    {
        $proyeks = Proyek::whereNotNull('documentation')->get();

        foreach ($proyeks as $proyek) {
            $oldPath = $proyek->documentation;

            if (Storage::disk('public')->exists($oldPath)) {
                $filePath = Storage::disk('public')->path($oldPath);
                $uploaded = Cloudinary::upload($filePath)->getSecurePath();

                $proyek->documentation = $uploaded;
                $proyek->save();

                $this->info("Migrated: {$proyek->nama_proyek}");
            } else {
                $this->warn("File not found: {$oldPath}");
            }
        }

        $this->info("Migrasi selesai!");
    }
}
