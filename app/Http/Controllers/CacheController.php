<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class CacheController extends Controller
{

    public function clear(Request $request)
    {
        Cache::flush();
        return 'Cache cleared successfully.';
    }
}
