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

    public function getData()
    {
        $users = User::query();
        return DataTables::of($users)
            ->addColumn('name', function ($user) {
                return trim("{$user->firstname} {$user->middlename} {$user->lastname}");
            })
            ->addColumn('role', function ($user) {
                return $user->type ?? 'Sin rol'; // Ajusta según el campo 'type'
            })
            ->addColumn('actions', function ($user) {
                return view('components.dropdown-action', [
                    'id' => $user->id,
                    'editRoute' => route('users.edit', $user->id),
                    'deleteRoute' => route('users.destroy', $user->id),
                ]);
            })
            ->rawColumns(['actions']) // Permite HTML en la columna de acciones
            ->make(true);
    }

    public function create()
    {
        return view('users.create');
    }

    //  public function store(Request $request)
    // {
    //     $validated = $request->validate([
    //         'firstname' => 'required|string|max:255',
    //         'lastname' => 'required|string|max:255',
    //         'email' => 'required|email|unique:users,email',
    //         'type' => 'required|string',
    //     ]);

    //     User::create($validated);
    //     return redirect()->route('users.index')->with('success', 'Usuario creado correctamente.');
    // }


    public function show($id)
    {
        return view('users.show', compact('id'));
    }

    public function edit($id)
    {

        //  $user = User::findOrFail($id);
        // return view('users.edit', compact('user')); // Vista para editar un usuario

        return view('users.edit', compact('id'));
    }

    // 

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json(['success' => 'Usuario eliminado correctamente.']);
    }
}
