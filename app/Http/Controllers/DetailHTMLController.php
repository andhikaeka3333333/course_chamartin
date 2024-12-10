<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;

class DetailHTMLController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('materis.materihtml', [
            'title' => 'Materi HTML',
        ]);
    }


}
