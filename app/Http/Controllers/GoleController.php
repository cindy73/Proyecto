<?php

namespace App\Http\Controllers;

use App\Models\Gole;
use App\Models\Punto;
use App\Models\Equipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Tabla de posiciones
        $Posiciones = Punto::with('Equipo')->get();
        $tabla = [];
        $cont = count($tabla);

        foreach($Posiciones as $item){
            if($cont === 0){
                $arrayL = ['id_equipo'=>$item['id_equipo'],
                           'Nombre'=>$item->Equipo['nombre_equipo'],
                           'Puntos'=>$item['puntos']
                          ];
                array_push($tabla, $arrayL);
                $cont ++;
            }else{
                $pase=0;
                $index = 0;
                foreach($tabla as $t){

                    if($item['id_equipo'] != $t['id_equipo'] ){
                        $pase=1;
                    }else{

                        $tabla[$index]['Puntos'] += $item['puntos'];
                        $pase=0;
                        break;
                    }
                    $index ++;
                }

                if($pase === 1){
                    $arrayL = ['id_equipo'=>$item['id_equipo'],
                           'Nombre'=>$item->Equipo['nombre_equipo'],
                           'Puntos'=>$item['puntos']
                          ];
                    array_push($tabla, $arrayL);
                }
            }



        }
        if($tabla!=null){
            foreach ($tabla as $key => $row) {
                $aux1[$key] = $row['Puntos'];
                }

            array_multisort($aux1, SORT_DESC, $tabla);
        }




        // Tabla de Goleadores
        $Goles = Gole::with('Goles', 'Encuentro')->get();
        $tablaGoles = [];
        $contG = count($tablaGoles);
        foreach($Goles as $item){
            if($contG === 0 ){
                $arrayG = ['id_jugador'=>$item['id_jugador'],
                           'Nombre'=>$item->Goles['nombres'],
                           'Goles'=>$item['total_goles']
                          ];
                array_push($tablaGoles, $arrayG);
                $contG ++;
            }else{
                $paseG=0;
                $indexG = 0;
                foreach($tablaGoles as $t){

                    if($item['id_jugador'] != $t['id_jugador'] ){
                        $paseG=1;
                    }else{

                        $tablaGoles[$indexG]['Goles'] += $item['total_goles'];
                        $paseG=0;
                        break;
                    }
                    $indexG ++;
                }


                if($paseG === 1){
                    $arrayG = [ 'id_jugador'=>$item['id_jugador'],
                                'Nombre'=>$item->Goles['nombres'],
                                'Goles'=>$item['total_goles']
                            ];
                    array_push($tablaGoles, $arrayG);
                }

            }



        }
        if($tablaGoles!=null){
            foreach ($tablaGoles as $key => $row) {
                $aux2[$key] = $row['Goles'];
                }

            array_multisort($aux2, SORT_DESC, $tablaGoles);

            $tablaGoles = array_slice($tablaGoles, 0, 8);
        }

        //Equipo con mas goles
        $EquipoGoles = [];
        $EquipoGoleado = [];
        $a2 = [];
        $contGE = count($EquipoGoles);
        foreach($Goles as $item){
            if( $contGE === 0 ){
                $arrayEG = ['id_equipo'=>$item->Goles['id_equipo'],
                          'GolesE'=>$item['total_goles']
                         ];
                array_push($EquipoGoles, $arrayEG);
                $contGE ++;


                if($item->Encuentro['id_equipo1']===$item->Goles['id_equipo']){
                    $Goleado = ['id_equipo'=>$item->Encuentro['id_equipo2'],
                          'GolesE'=>$item['total_goles']
                         ];
                    array_push($EquipoGoleado, $Goleado);
                }else{
                    $Goleado = ['id_equipo'=>$item->Encuentro['id_equipo1'],
                          'GolesE'=>$item['total_goles']
                         ];
                    array_push($EquipoGoleado, $Goleado);
                }

            }else{
                $paseGE=0;
                $indexGE = 0;
                foreach($EquipoGoles as $EG){
                    if($item->Goles['id_equipo'] != $EG['id_equipo'] ){
                        $paseGE=1;
                    }else{
                        $EquipoGoles[$indexGE]['GolesE'] += $item['total_goles'];
                        $paseGE=0;
                        break;
                    }

                    $indexGE ++;
                }


                $indexI = 0;
                $paseI=0;
                $id_goleado=0;
                foreach($EquipoGoleado as $i){

                    if($item->Encuentro['id_equipo1']===$item->Goles['id_equipo']){
                        $id_goleado=$item->Encuentro['id_equipo2'];
                    }else{
                        $id_goleado=$item->Encuentro['id_equipo1'];
                    }


                    if($id_goleado != $i['id_equipo'] ){
                        $paseI=1;
                    }else{
                        $EquipoGoleado[$indexI]['GolesE'] += $item['total_goles'];
                        $paseI=0;
                        break;
                    }

                    $indexI ++;
                }



                if($paseGE === 1){
                    $arrayEG = ['id_equipo'=>$item->Goles['id_equipo'],
                          'GolesE'=>$item['total_goles']
                         ];
                    array_push($EquipoGoles, $arrayEG);
                }

                if($paseI === 1){

                    $Nuevo = ['id_equipo'=>$id_goleado,
                          'GolesE'=>$item['total_goles']
                         ];
                    array_push($EquipoGoleado, $Nuevo);
                }
            }



        }
        if($EquipoGoles!=null){
            foreach ($EquipoGoles as $key => $row) {
                $aux3[$key] = $row['GolesE'];
                }
            array_multisort($aux3, SORT_DESC, $EquipoGoles);
        }
        if($EquipoGoleado!=null){
            foreach ($EquipoGoleado as $key => $row) {
                $aux4[$key] = $row['GolesE'];
                }
            array_multisort($aux4, SORT_DESC, $EquipoGoleado);
        }

        //Equipo mas goleado
        $ArrayGoleador =[];
        $ArrayMasGoleado =[];
        if($EquipoGoles!=null){
            $Egoleador = Equipo::find($EquipoGoles[0]['id_equipo']);
            $Emasgoleado = Equipo::find($EquipoGoleado[0]['id_equipo']);

            $ArrayGoleador =[   'nombre'=>$Egoleador['nombre_equipo'],
                                'Ngoles'=>$EquipoGoles[0]['GolesE']
                            ];

            $ArrayMasGoleado =[  'nombre'=>$Emasgoleado['nombre_equipo'],
                                'Ngoles'=>$EquipoGoleado[0]['GolesE']
                            ];
        }
        //return $EquipoGoleado;
        return view('paginas.estadisticas', compact('tabla', 'tablaGoles', 'ArrayGoleador', 'ArrayMasGoleado'));
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
        return 1;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gole  $gole
     * @return \Illuminate\Http\Response
     */
    public function show(Gole $gole)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gole  $gole
     * @return \Illuminate\Http\Response
     */
    public function edit(Gole $gole)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gole  $gole
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gole $gole)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gole  $gole
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gole $gole)
    {
        //
    }

    public function guardarGoles(Request $request)
    {
        $cont =count($request->GolesLG);
        for($i=0;$i < $cont; $i++){
            $datos = new Gole();
            $datos->id_jugador	= $request->GolesLG[$i]['id_jugador'];
            $datos->id_encuentro = $request->GolesLG[$i]['id_encuentro'];
            $datos->total_goles	= $request->GolesLG[$i]['goles'];
            $datos->save();
        }
        return 1;
    }

}
