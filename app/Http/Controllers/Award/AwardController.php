<?php

namespace App\Http\Controllers\Award;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AwardController extends Controller
{
    public function index()
    {
        return view('awards.index');
    }

    public function create()
    {
        return view('awards.create');
    }

    public function show($id)
    {
        return view('awards.show', compact('id'));
    }

    public function edit($id)
    {
        return view('awards.edit', compact('id'));
    }
}
