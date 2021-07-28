<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gole;
use App\Models\Punto;
use App\Models\Equipo;
use PDF;

class PDFController extends Controller
{
    public function tablaGoleadores(){
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
    	return \PDF::loadView('reportes.tablaGoleadores',compact('tablaGoles'))->setPaper('a4', 'landscape')->stream('TablaGoleadores.pdf');

    }
    public function tablaPosiciones(){
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

    	return \PDF::loadView('reportes.tablaPosiciones',compact('tabla'))->setPaper('a4', 'landscape')->stream('TablaPosiciones.pdf');

    }

}
