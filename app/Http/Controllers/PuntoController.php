<?php

namespace App\Http\Controllers;

use App\Models\Punto;
use App\Models\Encuentro;
use Illuminate\Http\Request;

class PuntoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $encuentro = Encuentro::find($request->idEncuentro);
        $encuentro->estado=0;
        $encuentro->update();
        if($request->localJE===$request->visitanteJE){
            
            for($i=0;$i<2;$i++){
                $datos2 = new Punto();
                $datos2->id_encuentro=$request->idEncuentro;
                $datos2->puntos =1;
                if($i==0){
                    $datos2->id_equipo =$request->idLocal;
                }else{
                    $datos2->id_equipo =$request->idVisitante;
                }
                $datos2->save();
            }
        }else{
            $datos = new Punto();
            $datos->id_encuentro=$request->idEncuentro;
            if($request->localJE > $request->visitanteJE){
                $datos->id_equipo =$request->idLocal;
                $datos->puntos = 3;
                $datos->save();
            }else if($request->localJE < $request->visitanteJE){
                $datos->id_equipo =$request->idVisitante;
                $datos->puntos =3;
                $datos->save();
            }
        }

        return back()->with("mensaje","guardados");
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Punto  $punto
     * @return \Illuminate\Http\Response
     */
    public function show(Punto $punto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Punto  $punto
     * @return \Illuminate\Http\Response
     */
    public function edit(Punto $punto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Punto  $punto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Punto $punto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Punto  $punto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Punto $punto)
    {
        //
    }
}
