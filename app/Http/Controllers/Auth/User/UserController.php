<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index');
    }

    public function create()
    {
        return view('users.create');
    }

    public function show($id)
    {
        return view('users.show', compact('id'));
    }

    public function edit($id)
    {
        return view('users.edit', compact('id'));
    }

    public function getData()
    {
        $users = User::query(); // Obtén los datos de los usuarios
        return DataTables::of($users)
            ->addColumn('role', function ($user) {
                return $user->role->name ?? 'Sin rol'; // Ajusta según tu relación
            })
            ->addColumn('actions', function ($user) {
                return '<a href="/users/' . $user->id . '/edit" class="btn btn-sm btn-primary">Editar</a>';
            })
            ->rawColumns(['actions']) // Permite HTML en la columna de acciones
            ->make(true);
    }
}
