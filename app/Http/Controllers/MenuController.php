<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function create()
    {
        return view('pages.users.create');
    }
    public function date()
    {
        return view('pages.users.edit');
    }
    public function Status()
    {
        return view('pages.users.status');
    }
    public function Role()
    {
        return view('pages.users.role');
    }

    public function delete()
    {
        return view('pages.users.confirm-delete');
    }
}

#Crear nuevo usuario
#Editar datos de usuario
#Activar / Desactivar usuario
#Cambiar rol de usuario
#Eliminar usuario