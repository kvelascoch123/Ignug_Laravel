<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona; //import model
use Illuminate\Support\Facades\DB;  //


class PersonaController extends Controller
{

  
    //
    public function index(){
        $users = DB::select('select * from login');
        return $users;
    }

    //
    public function show($id){
        return Persona::find($id);
    }

    public function store(Request $request){
        return Persona::create($request->all());
    }

    public function update(Request $request, $id){
        $persona = Persona::findOrFail($id);
        $persona->update($request->all());

        return $persona;
    }

    public function delete(Request $request, $id){
        $persona=Persona::findOrFail($id);
        $persona->delete();

        return 204;
    }
}
