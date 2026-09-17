<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function coolIndex()
    {
        $title = 'Master';
        $subtitle = 'Cools';
        $mainTitle = 'Cools';
        return view('areas.master.cools.index', compact('title', 'subtitle', 'mainTitle'));
    }
}
