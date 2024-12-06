<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materi = Materi::all();
        return view('materis.index', [
            'materi' => $materi,
            'title' => 'Materi Web Development',
        ]);
    }
}
