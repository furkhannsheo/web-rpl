<?php

namespace App\Services;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ImageUploader
{
    public static function upload(
        $file,
        string $folder = 'uploads',
        int $maxWidth = 1920,
        int $targetKb = 200
    ): string {
        $manager = new ImageManager(new Driver());

        $filename = Str::uuid().'.webp';
        $directory = storage_path("app/public/{$folder}");
        $path = "{$directory}/{$filename}";

        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0755, true);
        }

        $image = $manager->read($file)
            ->scaleDown($maxWidth)
            ->sharpen(8)
            ->toWebp(65);

        if (strlen($image) > $targetKb * 1024) {
            $image = $manager->read($file)
                ->scaleDown($maxWidth)
                ->sharpen(8)
                ->toWebp(60);
        }

        if (strlen($image) > $targetKb * 1024) {
            $image = $manager->read($file)
                ->scaleDown($maxWidth)
                ->sharpen(8)
                ->toWebp(55);
        }

        file_put_contents($path, $image);

        return "{$folder}/{$filename}";
    }
}
