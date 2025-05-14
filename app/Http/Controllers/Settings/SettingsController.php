<?php

namespace App\Http\Controllers\Settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//! ver como pasar informacion a las vistas

class SettingsController extends Controller
{
    public function index()
    {
        return view('settings.index');
    }
    public function profile()
    {
        return view('settings.partials.profile');
    }
    public function notification()
    {
        return view('settings.partials.notification');
    }
    public function system()
    {
        return view('settings.partials.system');
    }
}
