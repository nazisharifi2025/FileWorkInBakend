<?php

namespace App\Http\Controllers;
use App\Models\Files;
use Illuminate\Http\Request;

class FilesController extends Controller
{
    public function insert(){
        $file = new Files();
        return view('insert', compact('file'));
    }
}
