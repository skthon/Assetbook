<?php

namespace Skthon\Assetbook\Controllers;

use Illuminate\Routing\Controller;
use Skthon\Assetbook\Facades\Assetbook;

class AssetbookController extends Controller
{
    public function index()
    {
        return view('assetbook::index', [
            'files'       => Assetbook::getImages(public_path()),
            'directories' => Assetbook::getDirectories(public_path() . '/images'),
        ]);
    }
}