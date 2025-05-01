<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Document</title>
</head>

<body>
    <br>
    <div class="container">
        <div class="row ">
            <div class="col ">

                <form action="pasarApdf.php" method="post" >
                    <!-- cabecera -->
                    <div class="container">
                        <div class="row ">
                            <div class="col d-flex justify-content-start">
                                <h5>JUNTA DE ANDALUCÍA</h5>
                            </div>
                            <div class="col d-flex justify-content-end">
                                <h5>CONSEJERÍA DE EDUCACIÓN</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col d-flex justify-content-end">
                                <p class="hoja-numero">(Hoja ..... de ..... )</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col d-flex justify-content-center">
                                <h6>FORMACIÓN EN CENTRO DE TRABAJO, FICHA SEMANAL DEL ALUMNA/ALUMNA</h6>
                            </div>
                        </div>
                    </div>
                    <!-- datos centro y alumnos y semana -->


                    <div class="container ">
                        <div class="row">
                            <div class="col border border-black">
                                <label for="fecha">Semana del:</label>
                                <input type="text" name="fecha" id="fecha">
                            </div>
                            <div class="col border border-black"></div>
                        </div>
                        <div class="row">
                            <div class="col border border-black">
                                <p>CENTRO DOCENTE: <br>
                                    IES Aguadulce <br>
                                    PROFESOR/PROFESORA RESPONSABLE SEGUIMIENTO: <br>
                                    Manzano Fernández Eliana Yemina</p>

                            </div>
                            <div class="col border border-black">
                                <p>
                                    CENTRO DE TRABAJO COLABORADOR: <br>
                                    Pyramica Online Services S. L <br>
                                    TUTOR/TUTORA DEL CENTRO DE TRABAJO: <br>
                                    Pablo García
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col border border-black d-flex align-items-center">
                                <p>ALUMNO/ALUMNA: Natalia Narváez Anguita</p>
                            </div>
                            <div class="col border border-black">
                                <div class="row">
                                    <div class="col d-flex justify-content-start align-items-center">
                                        <p>CICLO FORMATIVO: DAW </p>
                                    </div>
                                    <div class="col d-flex justify-content-end align-items-center">
                                        <p> GRADO: Superior</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Días, horas, tareas y observaciones -->
                    <br>
                    <div class="container">
                        <div class="row border border-black">
                            <div class="col-1 border border-black">
                                <p>DÍA</p>
                            </div>
                            <div class="col-5 border border-black">
                                <p>ACTIVIDAD DESARROLLADA/PUESTO FORMATIVO</p>
                            </div>
                            <div class="col-1 border border-black">
                                <p>TIEMPO EMPLEADO</p>
                            </div>
                            <div class="col-5 border border-black">
                                <p>OBSERVACIONES</p>
                            </div>
                        </div>
                        <div class="row border border-black">
                            <div class="col-1 border border-black">
                                <p>Lunes</p>
                            </div>
                            <div class="col-5 border border-black">
                                <textarea name="actividadLunes" id="actividadLunes" rows="10"></textarea>
                            </div>
                            <div class="col-1 border border-black">
                                <div class="d-flex justify-content-between">
                                    <input type="number" name="tiempoLunes" id="tiempoLunes">
                                    <label for="tiempoLunes">Horas</label>
                                </div>
                            </div>
                            <div class="col-5 border border-black">
                                <textarea name="observacionesLunes" id="observacionesLunes" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="row border border-black">
                            <div class="col-1 border border-black">
                                <p>Martes</p>
                            </div>
                            <div class="col-5 border border-black">
                                <textarea name="actividadMartes" id="actividadMartes" rows="10"></textarea>
                            </div>
                            <div class="col-1 border border-black">
                                <div class="d-flex justify-content-between">
                                    <input type="number" name="tiempoMartes" id="tiempoMartes">
                                    <label for="tiempoMartes">Horas</label>
                                </div>
                            </div>
                            <div class="col-5 border border-black">
                                <textarea name="observacionesMartes" id="observacionesMartes" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="row border border-black">
                            <div class="col-1 border border-black">
                                <p>Miércoles</p>
                            </div>
                            <div class="col-5 border border-black">
                                <textarea name="actividadMiercoles" id="actividadMiercoles" rows="10"></textarea>
                            </div>
                            <div class="col-1 border border-black">
                                <div class="d-flex justify-content-between">
                                    <input type="number" name="tiempoMiercoles" id="tiempoMiercoles">
                                    <label for="tiempoMiercoles">Horas</label>
                                </div>
                            </div>
                            <div class="col-5 border border-black">
                                <textarea name="observacionesMiercoles" id="observacionesMiercoles" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="row border border-black">
                            <div class="col-1 border border-black">
                                <p>Jueves</p>
                            </div>
                            <div class="col-5 border border-black">
                                <textarea name="actividadJueves" id="actividadJueves" rows="10"></textarea>
                            </div>
                            <div class="col-1 border border-black">
                                <div class="d-flex justify-content-between">
                                    <input type="number" name="tiempoJueves" id="tiempoJueves">
                                    <label for="tiempoJueves">Horas</label>
                                </div>
                            </div>
                            <div class="col-5 border border-black">
                                <textarea name="observacionesJueves" id="observacionesJueves" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="row border border-black">
                            <div class="col-1 border border-black">
                                <p>Viernes</p>
                            </div>
                            <div class="col-5 border border-black">
                                <textarea name="actividadViernes" id="actividadViernes" rows="10"></textarea>
                            </div>
                            <div class="col-1 border border-black">
                                <div class="d-flex justify-content-between">
                                    <input type="number" name="tiempoViernes" id="tiempoVierness">
                                    <label for="tiempoViernes">Horas</label>
                                </div>
                            </div>
                            <div class="col-5 border border-black">
                                <textarea name="observacionesViernes" id="observacionesViernes" rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <p>EL/LA ALUMNO/ALUMNA</p>
                            </div>
                            <div class="col">
                                <p>Vº Bº EL/LA PROFESOR/A. RESPONSABLE DEL SEGUIMIENTO </p>
                            </div>
                            <div class="col">
                                <p>Vº Bº EL/LA TUTOR/A DEL CENTRO DE TRABAJO</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div>
                                    <img src="img/firmaNNA.png" alt="">
                                </div>
                            </div>
                            <div class="col"></div>
                            <div class="col">
                                <div>
                                    <img src="img/firmaPablo.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>Fdo.: Natalia Narváez Anguita</p>
                            </div>
                            <div class="col">
                                <label for="firmadoP">Fdo.:</label>
                                <input type="text">
                            </div>
                            <div class="col">
                                <p>Fdo.: Pablo García Gallardo</p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="container">
                        <div class="row">
                            <div class="col d-flex justify-content-center">
                                <input type="submit" value="A PDF">
                            </div>
                        </div>
                    </div>
                    <br>
                </form>


            </div>
        </div>
    </div>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>