<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="http://localhost/hojaFCT/css/estilo-2.css" />
    <title>Document</title>
  </head>
  <body>
    <br />

      <table class="cabecera">
        <tr>
          <td><h5 class="junta">JUNTA DE ANDALUCÍA</h5></td>
          <td></td>
          <td><h5 class="consejeria">CONSEJERÍA DE EDUCACIÓN</h5></td>
        </tr>
        <tr>
          <td colspan="3">
            <p class="hoja-numero">(Hoja ..... de ..... )</p>
          </td>
        </tr>
        <tr>
          <td colspan="3">
            <h6>
              FORMACIÓN EN CENTRO DE TRABAJO, FICHA SEMANAL DEL ALUMNA/ALUMNA
            </h6>
          </td>
        </tr>
      </table>
   

    <br />
    <form action="" method="">
      <!-- datos centro y alumno.
     -->
      <table class="datos">
        <tr>
          <td>
            <label for="fecha">Semana del:</label>
            <input type="text" name="fecha" id="fecha" 
            value="<?php echo isset($fecha) ? $fecha : ''; ?>" />
          </td>
          <td></td>
        </tr>
        <tr>
          <td>
            <p>
              CENTRO DOCENTE: <br />
              IES Aguadulce <br />
              PROFESOR/PROFESORA RESPONSABLE SEGUIMIENTO: <br />
              Manzano Fernández Eliana Yemina
            </p>
          </td>
          <td>
            <p>
              CENTRO DE TRABAJO COLABORADOR: <br />
              Pyramica Online Services S. L <br />
              TUTOR/TUTORA DEL CENTRO DE TRABAJO: <br />
              Pablo García
            </p>
          </td>
        </tr>
        <tr>
          <td><p>ALUMNO/ALUMNA: Natalia Narváez Anguita</p></td>
          <td>
            <p>
              CICLO FORMATIVO: DAW
              <span class="blanco">Soy un texto blanco no visi</span>
              GRADO: Superior
            </p>
          </td>
        </tr>
      </table>
      <br />

      <!-- dia, hora, activdad y observaciones -->
      <table class="actividad">
        <tr>
          <th class="chico">DÍA</th>
          <th class="grande">ACTIVIDAD DESARROLLADA/PUESTO FORMATIVO</th>
          <th class="chico">TIEMPO EMPLEADO</th>
          <th class="grande">OBSERVACIONES</th>
        </tr>
        <tr>
          <td class="chico">Lunes</td>
          <td class="grande">
            <textarea
              name="actividadLunes"
              id="actividadLunes"
              rows="10"
            >
            <?php echo isset($actividadLunes) ? $actividadLunes : ''; ?>
          </textarea>
          </td>
          <td class="chico">
            <input type="number" name="tiempoLunes" id="tiempoLunes" 
            value="<?php echo isset($tiempoLunes) ? $tiempoLunes : ''; ?>"/>
            <label for="tiempoLunes">/H</label>
          </td>
          <td class="grande">
            <textarea
              name="observacionesLunes"
              id="observacionesLunes"
              rows="10"
            >
            <?php echo isset($observacionesLunes) ? $observacionesLunes : ''; ?>
          </textarea>
          </td>
        </tr>
        <tr>
          <td class="chico">Martes</td>
          <td class="grande">
            <textarea
              name="actividadMartes"
              id="actividadMartes"
              rows="10"
            >
            <?php echo isset($actividadMartes) ? $actividadMartes : ''; ?>
          </textarea>
          </td>
          <td class="chico">
            <input type="number" name="tiempoMartes" id="tiempoMartes" 
            value="<?php echo isset($tiempoMartes) ? $tiempoMartes : ''; ?>"/>
            <label for="tiempoMartes">/H</label>
          </td>
          <td class="grande">
            <textarea
              name="observacionesMartes"
              id="observacionesMartes"
              rows="10"
            >
            <?php echo isset($observacionesMartes) ? $observacionesMartes : ''; ?>
          </textarea>
          </td>
        </tr>
        <tr>
          <td class="chico">Miércoles</td>
          <td class="grande">
            <textarea
              name="actividadMiercoles"
              id="actividadMiercoles"
              rows="10"
            >
            <?php echo isset($actividadMiercoles) ? $actividadMiercoles : ''; ?>
          </textarea>
          </td>
          <td class="chico">
            <input type="number" name="tiempoMiercoles" id="tiempoMiercoles"
            value="<?php echo isset($tiempoMiercoles) ? $tiempoMiercoles : ''; ?>" />
            <label for="tiempoMiercoles">/H</label>
          </td>
          <td class="grande">
            <textarea
              name="observacionesMiercoles"
              id="observacionesMiercoles"
              rows="10"
            >
            <?php echo isset($observacionesMiercoles) ? $observacionesMiercoles : ''; ?>
          </textarea>
          </td>
        </tr>
        <tr>
          <td class="chico">Jueves</td>
          <td class="grande">
            <textarea
              name="actividadJueves"
              id="actividadJueves"
              rows="10"
            >
            <?php echo isset($actividadJueves) ? $actividadJueves : ''; ?>
          </textarea>
          </td>
          <td class="chico">
            <input type="number" name="tiempoJueves" id="tiempoJueves"
            value="<?php echo isset($tiempoJueves) ? $tiempoJueves : ''; ?>" />
            <label for="tiempoJueves">/H</label>
          </td>
          <td class="grande">
            <textarea
              name="observacionesJueves"
              id="observacionesJueves"
              rows="10"
            >
            <?php echo isset($observacionesJueves) ? $observacionesJueves : ''; ?>
          </textarea>
          </td>
        </tr>
        <tr>
          <td class="chico">Viernes</td>
          <td class="grande">
            <textarea
              name="actividadViernes"
              id="actividadViernes"
              rows="10"
            >
            <?php echo isset($actividadViernes) ? $actividadViernes : ''; ?>
          </textarea>
          </td>
          <td class="chico">
            <input type="number" name="tiempoViernes" id="tiempoVierness"
            value="<?php echo isset($tiempoViernes) ? $tiempoViernes : ''; ?>" />
            <label for="tiempoViernes">/H</label>
          </td>
          <td class="grande">
            <textarea
              name="observacionesViernes"
              id="observacionesViernes"
              rows="10"
            >
            <?php echo isset($observacionesViernes) ? $observacionesViernes : ''; ?>
          </textarea>
          </td>
        </tr>
      </table>
      <br />

      <!-- Firmas -->
      <table class="firmas">
        <tr>
          <td><p>EL/LA ALUMNO/ALUMNA</p></td>
          <td><p>Vº Bº EL/LA PROFESOR/A. RESPONSABLE DEL SEGUIMIENTO</p></td>
          <td><p>Vº Bº EL/LA TUTOR/A DEL CENTRO DE TRABAJO</p></td>
        </tr>
        <tr>
          <td>
            <img src="http://localhost/hojaFCT/img/firmaNNA.png" alt="" />
          </td>
          <td></td>
          <td><img src="http://localhost/hojaFCT/img/firmaPablo.png" alt="" /></td>
        </tr>
        <tr>
          <td><p>Fdo.: Natalia Narváez Anguita</p></td>
          <td>
            <label for="firmadoP">Fdo.:</label>
            <input type="text" />
          </td>
          <td><p>Fdo.: Pablo García Gallardo</p></td>
        </tr>
      </table>
      <br />
      <table class="boton">
        <tr>
          <td>
            <?php
              if(!isset($aPDF)){
            ?>
            <div class="centro">
              <!--
              <input type="submit" value="A PDF" name="aPDF"/>
              -->
            </div>
            <?php
            }else{
              echo '<div></div>';
            }?>
          </td>
        </tr>
      </table>
      <br>
    </form>
  </body>
</html>
