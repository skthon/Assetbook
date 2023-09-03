<?php

namespace Skthon\Assetbook\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static array getImages(string $path)
 * @method static array getDirectories(string $path)
 */
class Assetbook extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'assetbook';
    }
}
