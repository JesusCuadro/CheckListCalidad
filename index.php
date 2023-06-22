<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Lista de verificación de control de calidad del software</title>
</head>

<body>
    <div class="container">
        <br>
        <center><h1>Lista de verificación de control de calidad del software</h1></center><br>
        <form>
            <div class="form-group" id="requerimientos" style="display: block;">

                <h1>Requerimientos:</h1>

                <label for="check1">1. ¿Los requerimientos son claros, completos y consistentes?</label>
                <select class="form-control" id="check1">
                    <option value="YES">YES</option>
                    <option value="NO">NO</option>
                    <option value="NA">N.A</option>
                    <textarea class="form-control mt-2" id="check1Observations" placeholder="Escribe tus observaciones" rows="3" style="display: none;"></textarea>
                </select>

                <label for="check2">2. ¿Los requerimientos son verificables y medibles?</label>
                <select class="form-control" id="check2">
                    <option value="YES">YES</option>
                    <option value="NO">NO</option>
                    <option value="NA">N.A.</option>
                    <textarea class="form-control mt-2" id="check2Observations" placeholder="Escribe tus observaciones" rows="3" style="display: none;"></textarea>
                </select>

                <label for="check3">3. ¿Se han identificado y documentado los objetivos y restricciones del proyecto?</label>
                <select class="form-control" id="check3">
                    <option value="YES">YES</option>
                    <option value="NO">NO</option>
                    <option value="NA">N.A.</option>
                    <textarea class="form-control mt-2" id="check3Observations" placeholder="Escribe tus observaciones" rows="3" style="display: none;"></textarea>
                </select>

                <label for="check4">4. ¿Se ha realizado un análisis de viabilidad para evaluar la factibilidad de los requerimientos?</label>
                <select class="form-control" id="check4">
                    <option value="YES">YES</option>
                    <option value="NO">NO</option>
                    <option value="NA">N.A.</option>
                    <textarea class="form-control mt-2" id="check4Observations" placeholder="Escribe tus observaciones" rows="3" style="display: none;"></textarea>
                </select>

                <label for="check5">5. ¿Se han involucrado y consultado a los stakeholders relevantes en la definición de los requerimientos?</label>
                <select class="form-control" id="check5">
                    <option value="YES">YES</option>
                    <option value="NO">NO</option>
                    <option value="NA">N.A.</option>
                    <textarea class="form-control mt-2" id="check5Observations" placeholder="Escribe tus observaciones" rows="3" style="display: none;"></textarea>
                </select>
            </div>

            <div class="form-group" id="diseño" style="display: none;">

                <h1>Diseño:</h1>

                <label for="check6">6. ¿Los requerimientos son claros, completos y consistentes?</label>
                <select class="form-control" id="check6">
                    <option value="YES">YES</option>
                    <option value="NO">NO</option>
                    <option value="NA">N.A</option>
                    <textarea class="form-control mt-2" id="check6Observations" placeholder="Escribe tus observaciones" rows="3" style="display: none;"></textarea>
                </select>

                <label for="check7">2. ¿Los requerimientos son verificables y medibles?</label>
                <select class="form-control" id="check7">
                    <option value="YES">YES</option>
                    <option value="NO">NO</option>
                    <option value="NA">N.A.</option>
                    <textarea class="form-control mt-2" id="check7Observations" placeholder="Escribe tus observaciones" rows="3" style="display: none;"></textarea>
                </select>

                <label for="check8">3. ¿Se han identificado y documentado los objetivos y restricciones del proyecto?</label>
                <select class="form-control" id="check8">
                    <option value="YES">YES</option>
                    <option value="NO">NO</option>
                    <option value="NA">N.A.</option>
                    <textarea class="form-control mt-2" id="check8Observations" placeholder="Escribe tus observaciones" rows="3" style="display: none;"></textarea>
                </select>

                <label for="check9">4. ¿Se ha realizado un análisis de viabilidad para evaluar la factibilidad de los requerimientos?</label>
                <select class="form-control" id="check9">
                    <option value="YES">YES</option>
                    <option value="NO">NO</option>
                    <option value="NA">N.A.</option>
                    <textarea class="form-control mt-2" id="check9Observations" placeholder="Escribe tus observaciones" rows="3" style="display: none;"></textarea>
                </select>

                <label for="check10">5. ¿Se han involucrado y consultado a los stakeholders relevantes en la definición de los requerimientos?</label>
                <select class="form-control" id="check10">
                    <option value="YES">YES</option>
                    <option value="NO">NO</option>
                    <option value="NA">N.A.</option>
                    <textarea class="form-control mt-2" id="check10Observations" placeholder="Escribe tus observaciones" rows="3" style="display: none;"></textarea>
                </select>

            </div>

            <button id="siguienteBtn" onclick="mostrarSiguienteDiv()">Siguiente</button>
            <button id="anteriorBtn" onclick="mostrarAnteriorDiv()">Anterior</button>

            <!-- Agrega más checks según sea necesario -->

            <center><button type="submit" class="btn btn-success">Enviar</button></center> 

        </form>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>

        $(document).ready(function() {
        // Mostrar u ocultar el campo de observaciones según la selección del usuario
                $('#check1').change(function() {
                    let selectedValue = $(this).val();
                    if (selectedValue === 'NA' || selectedValue === 'NO') {
                    $('#check1Observations' || '#check2Observations').show();
                    } else {
                    $('#check1Observations' || '#check2Observations').hide();
                }
            });

                $('#check2').change(function() {
                    let selectedValue = $(this).val();
                    if (selectedValue === 'NA' || selectedValue === 'NO') {
                    $('#check2Observations').show();
                    } else {
                    $('#check2Observations').hide();
                }   
            });

                $('#check3').change(function() {
                    let selectedValue = $(this).val();
                    if (selectedValue === 'NA' || selectedValue === 'NO') {
                    $('#check3Observations').show();
                    } else {
                    $('#check3Observations').hide();
                }
            });

            $('#check4').change(function() {
                    let selectedValue = $(this).val();
                    if (selectedValue === 'NA' || selectedValue === 'NO') {
                    $('#check4Observations').show();
                    } else {
                    $('#check4Observations').hide();
                }
            });

            $('#check5').change(function() {
                    let selectedValue = $(this).val();
                    if (selectedValue === 'NA' || selectedValue === 'NO') {
                    $('#check5Observations').show();
                    } else {
                    $('#check5Observations').hide();
                }
            });

            
            $('#check6').change(function() {
                    let selectedValue = $(this).val();
                    if (selectedValue === 'NA' || selectedValue === 'NO') {
                    $('#check6Observations').show();
                    } else {
                    $('#check6Observations').show();
                }
            });

            
            $('#check7').change(function() {
                    let selectedValue = $(this).val();
                    if (selectedValue === 'NA' || selectedValue === 'NO') {
                    $('#check7Observations').show();
                    } else {
                    $('#check7Observations').show();
                }
            });

            
            $('#check8').change(function() {
                    let selectedValue = $(this).val();
                    if (selectedValue === 'NA' || selectedValue === 'NO') {
                    $('#check8Observations').show();
                    } else {
                    $('#check8Observations').show();
                }
            });

            
            $('#check9').change(function() {
                    let selectedValue = $(this).val();
                    if (selectedValue === 'NA' || selectedValue === 'NO') {
                    $('#check9Observations').show();
                    } else {
                    $('#check9Observations').show();
                }
            });

            
            $('#check10').change(function() {
                    let selectedValue = $(this).val();
                    if (selectedValue === 'NA' || selectedValue === 'NO') {
                    $('#check10Observations').show();
                    } else {
                    $('#check10Observations').show();
                }
            });
});

function mostrarSiguienteDiv() {
    let requerimientos = document.getElementById("requerimientos");
    let diseño = document.getElementById("diseño");

    requerimientos.style.display = "none";
    diseño.style.display = "block";
  }

  function mostrarAnteriorDiv() {
    var requerimientos = document.getElementById("requerimientos");
    var diseño = document.getElementById("diseño");

    requerimientos.style.display = "block";
    diseño.style.display = "none";
  }


    </script>
</body>

</html>