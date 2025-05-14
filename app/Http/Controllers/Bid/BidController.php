<?php

namespace App\Http\Controllers\Bid;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class BidController extends Controller
{
    public function index()
    {
        return view('bids.index');
    }

    public function create()
    {
        return view('bids.create');
    }

    public function show($id)
    {
        return view('bids.show', compact('id'));
    }

    public function edit($id)
    {
        return view('bids.edit', compact('id'));
    }
}
