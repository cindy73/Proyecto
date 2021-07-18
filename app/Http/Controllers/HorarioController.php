<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use Illuminate\Http\Request;
use App\Models\Encuentro;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=Horario::all();
        if($datos!=null){
           return view('paginas.horarios',compact('datos'));
        }else
            return view('paginas.horarios');

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
        $validar=Horario::where('horario_inicio',$request->inicioH)->where('horario_fin',$request->finH)->get();
        $canti = count($validar);
        if($canti!=0){
            return back()->with("mensaje","repetido");
        }else{
            $datos=new Horario();
            $datos->horario_inicio=$request->inicioH;
            $datos->horario_fin=$request->finH;
           if($datos->save()){
                return back()->with("mensaje","guardados");
            }else 
                return back()->with("mensaje","error");
        }
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function show(Horario $horario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function edit(Horario $horario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $datos=Horario::find($request->idHorario);
        if($datos->horario_inicio === $request->inicio && $datos->horario_fin === $request->fin){
            return back()->with("mensaje","repetido");
        }else{
            $hora=Horario::where('horario_inicio',$request->inicio)->where('horario_fin',$request->fin)->get();
            $cont=count($hora);
            if($cont!=0){
                return back()->with("mensaje","repetido");
            }else{
                $datos->horario_inicio=$request->inicio;
                $datos->horario_fin=$request->fin;
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
     * @param  \App\Models\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminarH = Encuentro::where("id_horario", $id)->get();
        $cont= count($eliminarH);
        if($cont!=0){
            return back()->with("mensaje","NoEli");
        }else{
            $datos=Horario::find($id);
            if($datos->delete()){
                return back()->with("mensaje","eliminado");
            }else
                return back()->with("mensaje","Noeliminado");
        }

        
    }
}
