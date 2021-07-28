<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de la tabla de posiciones</title>
    <link rel="stylesheet" href="../style.css">
    <style>

        @page {
            margin: 0cm 0cm;
        }

        *{
            
        }
        img{
            padding-top:75px;
            padding:0px;
            margin:0px;
        }
        .contenedor{
            padding:0px;
            padding-top: 0px !important;
            margin-top: 0px !important;
        }
        .encabezado{
            position:absolute; 
            height:120px;
            padding:0px !important;
            margin:0px !important;
            width: 1200px;
            background-color:#2a5788;
        }
        .textoEncabezado{
            margin-top:10px !important;
            position:relative;
            color:#fff;
            


        }
        .textoEncabezado h4{
            margin:0px;
            padding:0px;
            font-size:30px;

        }
        .campeonato{
             font-size:40px !important;
            font: oblique bold 120% cursive;
        }
        .letra{

            font-family: "Latin Modern Roman 10";
            

        }

        table{
            padding-top:10px;
            padding-left:245px;
            border-collapse: collapse;
            text-align: center;
        }
        th,td {
                min-width: 100px;
                width: 220px;
                min-height: 20px;
                height: 25px;
                padding: 5px;
                font-size: 12.5px;
                font-weight: bold;
                text-align: center;
                border: solid 1px black;
            }
        .azul td{
            color: rgb(0, 112, 192);
        }
        .th, .td {

                width: 80px !important;
                height: 6px !important;
                padding: 1px;
                text-align: center;
                border: solid 1px black;
            }
        h4 {
            text-align: center;
            padding:20px ;
            padding-top: 0px;
        }
        .logoE{
            height:100px;
            weight:150px;
        }
        .logo{
            float:right;
            margin-top:-38px !important;
            height:150px;
            weight:160px;
        }
        .bandera{
            padding-left: 230px;
            height:100px;
            weight:600px;
        }
        .separador{
            height:25px;
        }
        .nombre{
            color: blue;
        }
        .goles{
            color: red;
        }
        .fondo{
            position:absolute;
            margin-top:200px;
            margin-left:200px;
            opacity:0.2;
        }
        .fondo2{
            position:absolute;
            margin-top:200px;
            margin-left:500px;
            opacity:0.1;
        }
        .tabla{
            position:relative;
            margin-top:100px;
            margin-left:90px;
        }

        thead tr td{
            font-size:18px;
        }

        tbody tr td{
            font-size:20px;
        }
        table{
            border: 1px dashed #660000;
            
        }

    </style>
</head>
<body>


    <div class="contenedor">

        <div class="encabezado">
            
        </div>

        <div class="textoEncabezado">
            <h4 class="campeonato">CAMPEONATO DE FULBITO</h4>
            <h4 class="letra">TABLA DE POSICIONES</h4>
        </div>

        <img src="imagenesReporte/futbol.jpg" class="fondo">
        <img src="imagenesReporte/arco.jpg" class="fondo2">
        <div class="tabla">
            <table>
                <thead>
                    <tr>
                        <td>NOMBRE DEL EQUIPO</td>
                        <td>PUNTOS</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tabla as $posiciones )
                        <tr>
                            <td class="nombre">
                            {{$posiciones['Nombre']}}
                            </td>
                            <td class="goles">
                            {{$posiciones['Puntos']}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>


</body>
</html>