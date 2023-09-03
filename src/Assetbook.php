<?php

namespace Skthon\Assetbook;

use Illuminate\Support\Facades\File;

class Assetbook
{
    public array $allowedExtensions = ['png', 'jpg', 'jpeg', 'svg', 'webp', 'ico'];

    public function getImages(string $basePath): array
    {
        $files = [];

        if (! File::isDirectory($basePath)) {
            $this->isFileAllowed($basePath) && $files[] = $this->getImageInfo($basePath);
            return $files;
        }

        foreach (glob($basePath . '/*') as $filePath) {
            if (File::isDirectory($filePath)) {
                $dirFiles = self::getImages($filePath);
                $files = array_merge($files, $dirFiles);
            } else {
                $this->isFileAllowed($filePath) && $files[] = $this->getImageInfo($filePath);
            }
        }

        return $files;
    }

    public function getDirectories(string $path): array
    {
        $directories = [];
        foreach (glob($path . '/*') as $filePath) {
            if (File::isDirectory($filePath)) {
                $directories[] = $filePath;
            }
        }

        return $directories;
    }

    private function isFileAllowed(string $path): bool
    {
        return in_array(File::extension($path), $this->allowedExtensions);
    }

    private function getImageInfo(string $path): array
    {
        return [
            'path'      => str_replace(public_path(), '', $path),
            'size'      => ceil(File::size($path)/1000),
            'mime_type' => File::mimeType($path),
        ];
    }
}