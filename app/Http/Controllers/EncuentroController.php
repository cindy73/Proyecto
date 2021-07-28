<?php

namespace App\Http\Controllers;

use App\Models\Encuentro;
use App\Models\Equipo;
use App\Models\Horario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EncuentroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $equipos = Equipo::all();
       $horarios = Horario::all();
       if($equipos!=null && $horarios!=null){
        return view('paginas.encuentros', compact('equipos', 'horarios'));
    }else
        return view('paginas.encuentros');

        
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
        $encuentro = Encuentro::where("id_equipo1",$request->local)
                                ->where("id_equipo2",$request->visitante)
                                ->where("fecha",$request->fechaencuentro)
                                ->get();
        $encuentroReves = Encuentro::where("id_equipo1",$request->visitante)
                                ->where("id_equipo2",$request->local)
                                ->where("fecha",$request->fechaencuentro)
                                ->get();
        $local = Encuentro::where("id_equipo1",$request->local)
                                ->where("fecha",$request->fechaencuentro)
                                ->get();
        $localReves = Encuentro::where("id_equipo1",$request->visitante)
                                ->where("fecha",$request->fechaencuentro)
                                ->get();
        $visitante = Encuentro::where("id_equipo2",$request->visitante)
                                ->where("fecha",$request->fechaencuentro)
                                ->get();
        $visitanteReves = Encuentro::where("id_equipo2",$request->local)
                                ->where("fecha",$request->fechaencuentro)
                                ->get();
       $cont=count($encuentro);
       $cont1=count($encuentroReves);
       $cont2=count($local);
       $cont3=count($visitante);
       $cont4=count($localReves);
       $cont5=count($visitanteReves);
       if($cont!=0){
        return back()->with("mensaje","repetido");
       }else if($cont1 != 0){
        return back()->with("mensaje","repetido");
       }else if($cont2 != 0 ||  $cont5 != 0){
        return back()->with("mensaje","localR");
       }else if($cont3 != 0 ||  $cont4 != 0){
        return back()->with("mensaje","visitanteR");
       }else{
        if($request->local==$request->visitante){
            return back()->with("mensaje","iguales");
        }else{
            $datos = new Encuentro();
            $datos->id_horario=$request->horario;
            $datos->id_equipo1=$request->local;
            $datos->id_equipo2=$request->visitante;
            $datos->estado=1;
            $datos->fecha=$request->fechaencuentro;
            $datos->save();
            return back()->with("mensaje", "ok");

        }
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Encuentro  $encuentro
     * @return \Illuminate\Http\Response
     */
    public function show($fecha)
    {
        $result = Encuentro::where('fecha', $fecha)->with("Local", "Visitante", "Horario")->get();
        return $result;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Encuentro  $encuentro
     * @return \Illuminate\Http\Response
     */
    public function edit(Encuentro $encuentro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Encuentro  $encuentro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $encuentro = Encuentro::where("id_equipo1",$request->localE)
                                ->where("id_equipo2",$request->visitanteE)
                                ->where("fecha",$request->fechaencuentroE)
                                ->where("id_horario",$request->horarioE)
                                ->get();
        $cont=count($encuentro);
        if($cont!=0){

            return back()->with("mensaje","repetido");

        }else{
                if($request->localE==$request->visitanteE){
                    return back()->with("mensaje","iguales");
                }else{
                    $datos=Encuentro::find($request->idEncuentroEdit);
                    $datos->id_horario=$request->horarioE;
                    $datos->id_equipo1=$request->localE;
                    $datos->id_equipo2=$request->visitanteE;
                    $datos->estado=$datos->estado;
                    $datos->fecha=$request->fechaencuentroE;
                    $datos->update();
                    return back()->with("mensaje", "actualizado");

                }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Encuentro  $encuentro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Encuentro $encuentro)
    {
        
    }

    public function FinalizarEncuentro($idL, $idV){
        $comboL = DB::table('equipos')
        ->join('jugadors', "equipos.id_equipo", "=", "jugadors.id_equipo")
        ->select('equipos.*', "jugadors.*")
        ->where("equipos.id_equipo", $idL) 
        ->get();
        $comboV = DB::table('equipos')
        ->join('jugadors', "equipos.id_equipo", "=", "jugadors.id_equipo")
        ->select('equipos.*', "jugadors.*")
        ->where("equipos.id_equipo", $idV) 
        ->get();

        return compact('comboL', 'comboV');
    }

    public function EliminarEncuentro($id){
            $datos=Encuentro::find($id);
            $datos->delete();
            return 1;
    }

    public function CargarDatosModal($id){
        $datos=Encuentro::find($id);
        return $datos;
    }

}
