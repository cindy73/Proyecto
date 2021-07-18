<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Jugador;
use App\Models\Equipo;
use App\Models\Gole;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipos = Equipo::all();
        if($equipos!=null){
            return view('paginas.jugadores', compact('equipos'));
        }else
            return view('paginas.jugadores');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $v=Jugador::where('cedula',$request->cedulaJ)->get();
        $cont= count($v);

        if($cont!=0){
            return back()->with("mensaje","repetido");
        }else{
            if($request->capitanJ==""){
                $request->capitanJ=0;
            }
            $datos= new Jugador();
            $datos->id_equipo=$request->idEquipo;
            $datos->nombres=$request->nombresJ;
            $datos->apellidos=$request->apellidoJ;
            $datos->cedula=$request->cedulaJ;
            $datos->capitan=$request->capitanJ;
            if($datos->save()){
                return back()->with("mensaje","ok");
            }else{
                return back()->with("mensaje","no");
            }
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jugador = DB::table('equipos')
            ->join('jugadors', "equipos.id_equipo", "=", "jugadors.id_equipo")
            ->select('equipos.*', "jugadors.*")
            ->where("jugadors.id_jugador", $id) 
            ->get();

            return $jugador;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function edit(Jugador $jugador)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if($request->capitanJE==="" || $request->capitanJE===null){
            $request->capitanJE=0;
        }

        $datos=Jugador::find($request->idjugador);

        if($datos->id_equipo != $request->idEquipo){
            $request->capitanJE=0;
        }
        
        if( $datos->id_equipo == $request->idEquipo && $datos->nombres === $request->nombredeljugadorE &&
            $datos->apellidos === $request->apellidodeljugadorE && $datos->cedula === $request->ceduladeljugadorE &&
            $datos->capitan == $request->capitanJE)
            {
            return back()->with("mensaje","repetidoUP");
        }else{
            if($datos->cedula != $request->ceduladeljugadorE){
                $v=Jugador::where('cedula',$request->ceduladeljugadorE)->get();
                $cont= count($v);
                if($cont!=0){
                    return back()->with("mensaje","repetidoUP2");
                }
            }else{
                $datos->id_equipo=$request->idEquipo;
                $datos->nombres=$request->nombredeljugadorE;
                $datos->apellidos=$request->apellidodeljugadorE;
                $datos->cedula=$request->ceduladeljugadorE;
                $datos->capitan=$request->capitanJE;
                if($datos->update()){
                    return back()->with("mensaje","editado");
                }else{
                    return back()->with("mensaje","no-editado");
                }
            }
            
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function Eliminar($id)
    {
        $EliminarJ = Gole::where("id_jugador", $id)->get();
        $cont = count($EliminarJ);
        if($cont!=0){
            return 0;
        }else{
            $datos=Jugador::find($id);
            $datos->delete();
            return 1;
        }
        
    }
    
    public function mostrarjugadores($id){
        $equiposT = DB::table('equipos')
            ->join('jugadors', "equipos.id_equipo", "=", "jugadors.id_equipo")
            ->select('equipos.*', "jugadors.*")
            ->where("equipos.id_equipo", $id) 
            ->get();

            return $equiposT;
    }

    public function capitan($id){
        $validar=0;
        $equiposT = DB::table('equipos')
            ->join('jugadors', "equipos.id_equipo", "=", "jugadors.id_equipo")
            ->select('equipos.*', "jugadors.*")
            ->where("equipos.id_equipo", $id) 
            ->get();
        $result = json_decode($equiposT, true);
            foreach ($result as $cap){
                if($cap['capitan']==1){
                    $validar++;
                }
            }
            return $validar;
    }
}
