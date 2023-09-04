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
            $this->isImageFile($basePath) && $files[] = $this->getImageInfo($basePath);
            return $files;
        }

        foreach (glob($basePath . '/*') as $filePath) {
            if (File::isDirectory($filePath)) {
                $dirFiles = self::getImages($filePath);
                $files = array_merge($files, $dirFiles);
            } else {
                $this->isImageFile($filePath) && $files[] = $this->getImageInfo($filePath);
            }
        }

        return $files;
    }

    public function getVideos(string $basePath): array
    {
        $files = [];

        if (! File::isDirectory($basePath)) {
            $this->isVideoFile($basePath) && $files[] = $this->getVideoInfo($basePath);
            return $files;
        }

        foreach (glob($basePath . '/*') as $filePath) {
            if (File::isDirectory($filePath)) {
                $dirFiles = self::getVideos($filePath);
                $files = array_merge($files, $dirFiles);
            } else {
                $this->isVideoFile($filePath) && $files[] = $this->getVideoInfo($filePath);
            }
        }

        return $files;
    }

    public function isImageFile(string $path): bool
    {
        return in_array(File::extension($path), $this->allowedExtensions);
    }

    private function isVideoFile(string $path): bool
    {
        return in_array(File::extension($path), ['mp4', 'mov']);
    }

    private function getImageInfo(string $path): array
    {
        return [
            'path'      => str_replace(public_path(), '', $path),
            'size'      => ceil(File::size($path)/1000),
            'mime_type' => File::mimeType($path),
        ];
    }

    private function getVideoInfo(string $path): array
    {
        return [
            'path'      => str_replace(public_path(), '', $path),
            'size'      => ceil(File::size($path)/1000),
        ];
    }
}