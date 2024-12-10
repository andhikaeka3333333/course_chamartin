<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;

class DetailCSSController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('materis.matericss', [
            'title' => 'Materi CSS',
        ]);
    }


}
