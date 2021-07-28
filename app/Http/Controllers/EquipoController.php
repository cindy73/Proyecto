<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Jugador;
use App\Models\Encuentro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=Equipo::all();
        if($datos!=null){
           return view('paginas.equipo',compact('datos'));
        }else
            return view('paginas.equipo');

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
        $v=Equipo::where('nombre_equipo',$request->nombredelequipo)->get();
        $cont= count($v);

        if($cont!=0){
            return back()->with("mensaje","existe");
        }else{
            $datos=new Equipo();
            $datos->nombre_equipo=$request->nombredelequipo;
            $datos->fecha_creacion=$request->fechacreacion;
            if($datos->save()){
                return back()->with("mensaje","ok");
            }else
                return back()->with("mensaje","no");
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function show(equipo $equipo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function edit(equipo $equipo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $datos=Equipo::find($request->idEquipo);

        if($datos->nombre_equipo === $request->nombredelequipoE && $datos->fecha_creacion===$request->fechacreacionE){
            return back()->with("mensaje","existe");
        }else{
            if($datos->nombre_equipo != $request->nombredelequipoE){
                $v=Equipo::where('nombre_equipo',$request->nombredelequipoE)->get();
                $cont= count($v);
                if($cont!=0){
                    return back()->with("mensaje","existe");
                }else{
                    $datos->nombre_equipo=$request->nombredelequipoE;
                    $datos->fecha_creacion=$request->fechacreacionE;
                    if($datos->update()){
                        return back()->with("mensaje","editado");
                    }else{
                        return back()->with("mensaje","Noeditado");
                    }
                }
            }else{
                    $datos->nombre_equipo=$request->nombredelequipoE;
                    $datos->fecha_creacion=$request->fechacreacionE;
                    if($datos->update()){
                        return back()->with("mensaje","editado");
                    }else{
                        return back()->with("mensaje","Noeditado");
                    }
                }
            
        }
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $eliminarJ = Jugador::where("id_equipo", $id)->get();
        $eliminarEL = Encuentro::where("id_equipo1", $id)->get();$eliminarEV = Encuentro::where("id_equipo2", $id)->get();

        $cont= count($eliminarJ);$cont1= count($eliminarEL);$cont2= count($eliminarEV);
        if($cont!=0||$cont1!=0||$cont2!=0){
            return back()->with("mensaje","NoEli");
        }else{
            $datos=Equipo::find($id);
            if($datos->delete()){
                return back()->with("mensaje","eliminado");
            }else
                return back()->with("mensaje","eliminadoNo");
        }

        
    }

    public function mostrarjugadores($id){
        $equiposT = DB::table('equipos')
            ->join('jugadors', "equipos.id_equipo", "=", "jugadors.id_equipo")
            ->select('equipos.*', "jugadors.*")
            ->where("equipos.id_equipo", $id) 
            ->get();
            dd($equiposT);
    }
}
