<?php

namespace App\Http\Controllers\Evaluation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EvaluationController extends Controller
{
     public function index()
    {
        return view('evaluations.index');
    }

    public function create()
    {
        return view('evaluations.create');
    }

    public function show($id)
    {
        return view('evaluations.show', compact('id'));
    }

    public function edit($id)
    {
        return view('evaluations.edit', compact('id'));
    }
}
