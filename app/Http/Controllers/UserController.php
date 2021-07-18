<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        return view('users.index', ['users' => $model->paginate(15)]);
    }

    public function vlogin()
    {
        return view('auth.login');
    }
    public function vregister()
    {
        return view('auth.register');
    }

    public function nuevoUsuario(Request $request)
    {
        $datos=new User();
        $datos->name=$request->name;
        $datos->email=$request->email;
        $datos->password=$request->password;
        $datos->save();
        return redirect('/equipo');
    }
    public function ValidarUsuario(Request $request)
    {
        $datos=User::where('email', $request->email)->where('password', $request->password)->get();

        $num_rows = count($datos);
        if($num_rows != 0){
            return redirect('/equipo')->with("mensaje","ingreso");
            //return view('paginas.equipo');
        }else{
            return back()->with("mensaje","no");
        }
    }
}
