<div class="top-page-header">
    <div class="page-title">
        <h2 align="center" style="text-shadow: 0 1px 0 #000, 0 2px 0 #000, 0 3px 0 #444444, 0 4px 0 #ddd, 0 5px 0 #aaa, 0 6px 1px rgba(0,0,0,.1), 0 0 5px rgba(0,0,0,.1);
    color: #9B59B6;">BIENVENIDO AL SISTEMA DE ADMINISTRACION</h2><br>
    </div>
    <div class="page-breadcrumb">
        <nav class="c_breadcrumbs">
           
        </nav>
    </div>
</div>

    
<!--======== Transaction Summary Start ========-->
<div class="row">

    <div class="col-md-12">

        <div class="widget">
            <div class="widget-header bg-white">
                <h3 class="fg-gray" align="center">MI CALENDARIO DEL MES</h3>

               <div class="card bg-gradient-primary">
                <?php date_default_timezone_set('America/La_Paz');
                  # definimos los valores iniciales para nuestro calendario
                  $month=date("n");
                  $year=date("Y");
                  $diaActual=date("j");
                   
                  # Obtenemos el dia de la semana del primer dia
                  # Devuelve 0 para domingo, 6 para sabado
                  $diaSemana=date("w",mktime(0,0,0,$month,1,$year))+7;
                  # Obtenemos el ultimo dia del mes
                  $ultimoDiaMes=date("d",(mktime(0,0,0,$month+1,1,$year)-1));
                   
                  $meses=array(1=>"Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
                  "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
                  ?>
                  <style>
                    #calendar {
                      font-family:Arial;
                      font-size:12px;
                    }
                    #calendar caption {
                      text-align:center;
                      padding:5px 10px;
                      background-color:#9b59b6;
                      color:#fff;
                      font-weight:bold;
                    }
                    #calendar th {
                      background-color:#9b59b6;
                      color:#fff;
                      width:40px;
                      text-align:center;
                    }
                    #calendar td {
                      color: #000;
                      text-align:center;
                      padding:6px 8px;
                      background-color:#fff;
                      box-shadow: -1px -1px 5px #000;
                    }
                    #calendar .hoy {
                      background-color:#9b59b6;
                    }
                  </style>
                  <table id="calendar" class="table table-bordered table-striped">
                  <caption><?php echo $meses[$month]." ".$year?></caption>
                  <tr>
                    <th>Lun</th><th>Mar</th><th>Mie</th><th>Jue</th>
                    <th>Vie</th><th>Sab</th><th>Dom</th>
                  </tr>
                  <tr bgcolor="silver">
                    <?php
                    $last_cell=$diaSemana+$ultimoDiaMes;
                    // hacemos un bucle hasta 42, que es el máximo de valores que puede
                    // haber... 6 columnas de 7 dias
                    for($i=1;$i<=42;$i++)
                    {
                      if($i==$diaSemana)
                      {
                        // determinamos en que dia empieza
                        $day=1;
                      }
                      if($i<$diaSemana || $i>=$last_cell)
                      {
                        // celca vacia
                        echo "<td>&nbsp;</td>";
                      }else{
                        // mostramos el dia
                        if($day==$diaActual)
                          echo "<td class='hoy'>$day</td>";
                        else
                          echo "<td>$day</td>";
                        $day++;
                      }
                      // cuando llega al final de la semana, iniciamos una columna nueva
                      if($i%7==0)
                      {
                        echo "</tr><tr>\n";
                      }
                    }
                  ?>
                  </tr>
                </table>
                </div>
            </div>
            
        </div>
    </div>
</div>

