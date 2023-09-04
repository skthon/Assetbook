<?php

namespace Skthon\Assetbook\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Skthon\Assetbook\Facades\Assetbook;

class AssetbookController extends Controller
{
    public function index(): View
    {
        return view('assetbook::index', [
            'files' => Assetbook::getImages(public_path()),
        ]);
    }

    public function videos(): View
    {
        return view('assetbook::index', [
            'files' => Assetbook::getVideos(public_path())
        ]);
    }

    public function optimize(): string
    {
        return '';
    }

    public function search(Request $request): string
    {
        return '';
    }
}