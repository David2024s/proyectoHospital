<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        // Ruta correcta: carpeta pages -> carpeta roles
        return view('pages.roles.index', compact('roles'));
    }

    public function create()
    {
        return view('pages.roles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|unique:roles|max:255',
            'descripcion' => 'nullable|max:500',
        ]);

        Role::create($request->all());

        return redirect()->route('roles.index')->with('success', 'Rol creado correctamente.');
    }

    public function edit(Role $role)
    {
        return view('pages.roles.edit', compact('role'));
    }

    public function update(Request $request, Role $role)
    {
        $request->validate([
            'nombre' => 'required|max:255|unique:roles,nombre,' . $role->id,
            'descripcion' => 'nullable|max:500',
        ]);

        $role->update($request->all());

        return redirect()->route('roles.index')->with('success', 'Rol actualizado correctamente.');
    }

    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('roles.index')->with('success', 'Rol eliminado correctamente.');
    }
}