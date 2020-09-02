<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    
    public function index()
    {
        $roles = Role::all();
        return view('roles.index',['roles' => $roles]);
    }
    
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('verified');
    }
   
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        $role = new Role();
        $role ->name = request('name');

        $role->save();

        return redirect('roles');
    }

   
    public function show($id)
    {
        //
    }

    function edit($id)
    {
        //
    }

 
    public function update(Request $request, $id)
    {
        //
    }

 
    public function destroy($id)
    {
        //
    }
}
