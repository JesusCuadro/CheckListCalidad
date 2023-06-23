<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/styles.css">
    <title>CheckList</title>
</head>

<body>

    <div class="arriba">
        <h1>Lista de verificación de control de calidad del software</h1>

        <button class="btn btn-primary" id="anteriorBtn" onclick="mostrarDivAnterior()"><- Anterior</button>
        <button class="btn btn-secondary" id="siguienteBtn" onclick="mostrarDivSiguiente()">Siguiente -></button>
    </div>


    <form action="">

    <div class="form-group container" id="requerimientos" style="display: block;">

        <h1>1. Requerimientos:</h1>

        <label for="check1">1. ¿Los requerimientos son claros, completos y consistentes?</label>
        <select class="form-control aspect-value" id="check1">
            <option value="YES">YES</option>
            <option value="NO">NO</option>
            <option value="NA">N.A</option>
            <textarea class="form-control mt-2 aspect-observations" id="check1Observations" placeholder="Escribe tus observaciones" rows="3"
                style="display: none;"></textarea>
        </select>

        <label for="check2">2. ¿Los requerimientos son verificables y medibles?</label>
        <select class="form-control aspect-value" id="check2">
            <option value="YES">YES</option>
            <option value="NO">NO</option>
            <option value="NA">N.A.</option>
            <textarea class="form-control mt-2 aspect-observations" id="check2Observations" placeholder="Escribe tus observaciones" rows="3"
                style="display: none;"></textarea>
        </select>

        <label for="check3">3. ¿Se han identificado y documentado los objetivos y restricciones del proyecto?</label>
        <select class="form-control" id="check3">
            <option value="YES">YES</option>
            <option value="NO">NO</option>
            <option value="NA">N.A.</option>
            <textarea class="form-control mt-2" id="check3Observations" placeholder="Escribe tus observaciones" rows="3"
                style="display: none;"></textarea>
        </select>

        <label for="check4">4. ¿Se ha realizado un análisis de viabilidad para evaluar la factibilidad de los
            requerimientos?</label>
        <select class="form-control" id="check4">
            <option value="YES">YES</option>
            <option value="NO">NO</option>
            <option value="NA">N.A.</option>
            <textarea class="form-control mt-2" id="check4Observations" placeholder="Escribe tus observaciones" rows="3"
                style="display: none;"></textarea>
        </select>

        <label for="check5">5. ¿Se han involucrado y consultado a los stakeholders relevantes en la definición de los
            requerimientos?</label>
        <select class="form-control" id="check5">
            <option value="YES">YES</option>
            <option value="NO">NO</option>
            <option value="NA">N.A.</option>
            <textarea class="form-control mt-2" id="check5Observations" placeholder="Escribe tus observaciones" rows="3"
                style="display: none;"></textarea>
        </select>

    </div>

    <div class="form-group container" id="diseño" style="display: none;">

        <h1>2. Diseño:</h1>

        <label for="check6">6. ¿El diseño cumple con los requerimientos establecidos?</label>
        <select class="form-control" id="check6">
            <option value="YES">YES</option>
            <option value="NO">NO</option>
            <option value="NA">N.A</option>
            <textarea class="form-control mt-2" id="check6Observations" placeholder="Escribe tus observaciones" rows="3"
                style="display: none;"></textarea>
        </select>

        <label for="check7">7. ¿Se han utilizado principios y patrones de diseño adecuados?</label>
        <select class="form-control" id="check7">
            <option value="YES">YES</option>
            <option value="NO">NO</option>
            <option value="NA">N.A.</option>
            <textarea class="form-control mt-2" id="check7Observations" placeholder="Escribe tus observaciones" rows="3"
                style="display: none;"></textarea>
        </select>

        <label for="check8">8. ¿El diseño es modular, flexible y escalable?</label>
        <select class="form-control" id="check8">
            <option value="YES">YES</option>
            <option value="NO">NO</option>
            <option value="NA">N.A.</option>
            <textarea class="form-control mt-2" id="check8Observations" placeholder="Escribe tus observaciones" rows="3"
                style="display: none;"></textarea>
        </select>

        <label for="check9">9. ¿Se han considerado los aspectos de seguridad y rendimiento en el diseño?</label>
        <select class="form-control" id="check9">
            <option value="YES">YES</option>
            <option value="NO">NO</option>
            <option value="NA">N.A.</option>
            <textarea class="form-control mt-2" id="check9Observations" placeholder="Escribe tus observaciones" rows="3"
                style="display: none;"></textarea>
        </select>

        <label for="check10">10. ¿El diseño es coherente y sigue las convenciones y estándares establecidos?</label>
        <select class="form-control" id="check10">
            <option value="YES">YES</option>
            <option value="NO">NO</option>
            <option value="NA">N.A.</option>
            <textarea class="form-control mt-2" id="check10Observations" placeholder="Escribe tus observaciones"
                rows="3" style="display: none;"></textarea>
        </select>

    </div>

    <div class="form-group container" id="analisis" style="display: none;">

        <h1>3. Analisis:</h1>

        <label for="check11">11. ¿Se ha realizado un análisis exhaustivo de los requerimientos?</label>
        <select class="form-control" id="check11">
            <option value="YES">YES</option>
            <option value="NO">NO</option>
            <option value="NA">N.A</option>
            <textarea class="form-control mt-2" id="check11Observations" placeholder="Escribe tus observaciones"
                rows="3" style="display: none;"></textarea>
        </select>

        <label for="check12">12. ¿Se han identificado los casos de uso y escenarios relevantes?
        </label>
        <select class="form-control" id="check12">
            <option value="YES">YES</option>
            <option value="NO">NO</option>
            <option value="NA">N.A.</option>
            <textarea class="form-control mt-2" id="check12Observations" placeholder="Escribe tus observaciones"
                rows="3" style="display: none;"></textarea>
        </select>

        <label for="check13">13. ¿Se han identificado y documentado los riesgos y problemas potenciales?</label>
        <select class="form-control" id="check13">
            <option value="YES">YES</option>
            <option value="NO">NO</option>
            <option value="NA">N.A.</option>
            <textarea class="form-control mt-2" id="check13Observations" placeholder="Escribe tus observaciones"
                rows="3" style="display: none;"></textarea>
        </select>

        <label for="check14">14. ¿Se ha llevado a cabo un análisis de impacto para evaluar las consecuencias de posibles
            cambios o modificaciones?</label>
        <select class="form-control" id="check14">
            <option value="YES">YES</option>
            <option value="NO">NO</option>
            <option value="NA">N.A.</option>
            <textarea class="form-control mt-2" id="check14Observations" placeholder="Escribe tus observaciones"
                rows="3" style="display: none;"></textarea>
        </select>

        <label for="check15">15. ¿Se han realizado pruebas de validación y verificación para garantizar la corrección
            del análisis realizado?</label>
        <select class="form-control" id="check15">
            <option value="YES">YES</option>
            <option value="NO">NO</option>
            <option value="NA">N.A.</option>
            <textarea class="form-control mt-2" id="check15Observations" placeholder="Escribe tus observaciones"
                rows="3" style="display: none;"></textarea>
        </select>

    </div>

    <div class="form-group container" id="desarrollo" style="display: none;">

        <h1>4. Desarrollo:</h1>

        <label for="check16">16. ¿El código cumple con los estándares y convenciones establecidos?</label>
        <select class="form-control" id="check16">
            <option value="YES">YES</option>
            <option value="NO">NO</option>
            <option value="NA">N.A</option>
            <textarea class="form-control mt-2" id="check16Observations" placeholder="Escribe tus observaciones"
                rows="3" style="display: none;"></textarea>
        </select>

        <label for="check17">17. ¿El código cumple con los estándares y convenciones establecidos?</label>
        <select class="form-control" id="check17">
            <option value="YES">YES</option>
            <option value="NO">NO</option>
            <option value="NA">N.A.</option>
            <textarea class="form-control mt-2" id="check17Observations" placeholder="Escribe tus observaciones"
                rows="3" style="display: none;"></textarea>
        </select>

        <label for="check18">18. ¿Se han aplicado las mejores prácticas de desarrollo de software?</label>
        <select class="form-control" id="check18">
            <option value="YES">YES</option>
            <option value="NO">NO</option>
            <option value="NA">N.A.</option>
            <textarea class="form-control mt-2" id="check18Observations" placeholder="Escribe tus observaciones"
                rows="3" style="display: none;"></textarea>
        </select>

        <label for="check19">19. ¿Se han realizado pruebas unitarias exhaustivas para garantizar la calidad del
            código?</label>
        <select class="form-control" id="check19">
            <option value="YES">YES</option>
            <option value="NO">NO</option>
            <option value="NA">N.A.</option>
            <textarea class="form-control mt-2" id="check19Observations" placeholder="Escribe tus observaciones"
                rows="3" style="display: none;"></textarea>
        </select>

        <label for="check20">20. ¿Se han documentado y comentado adecuadamente las partes críticas del código?</label>
        <select class="form-control" id="check20">
            <option value="YES">YES</option>
            <option value="NO">NO</option>
            <option value="NA">N.A.</option>
            <textarea class="form-control mt-2" id="check20Observations" placeholder="Escribe tus observaciones"
                rows="3" style="display: none;"></textarea>
        </select>

    </div>

    <div class="form-group container" id="producto" style="display: none;">

        <h1>5. Producto:</h1>

        <label for="check21">21. ¿El producto final cumple con todos los requerimientos y especificaciones establecidos?</label>
        <select class="form-control" id="check21">
            <option value="YES">YES</option>
            <option value="NO">NO</option>
            <option value="NA">N.A</option>
            <textarea class="form-control mt-2" id="check21Observations" placeholder="Escribe tus observaciones"
                rows="3" style="display: none;"></textarea>
        </select>

        <label for="check22">22. ¿El producto es intuitivo, fácil de usar y cumple con las expectativas de los usuarios?
        </label>
        <select class="form-control" id="check22">
            <option value="YES">YES</option>
            <option value="NO">NO</option>
            <option value="NA">N.A.</option>
            <textarea class="form-control mt-2" id="check22Observations" placeholder="Escribe tus observaciones"
                rows="3" style="display: none;"></textarea>
        </select>

        <label for="check23">23. ¿Se ha realizado una prueba exhaustiva del producto para identificar y corregir posibles errores o fallos?</label>
        <select class="form-control" id="check23">
            <option value="YES">YES</option>
            <option value="NO">NO</option>
            <option value="NA">N.A.</option>
            <textarea class="form-control mt-2" id="check23Observations" placeholder="Escribe tus observaciones"
                rows="3" style="display: none;"></textarea>
        </select>

        <label for="check24">24. ¿El producto cumple con los estándares de calidad y seguridad establecidos?</label>
        <select class="form-control" id="check24">
            <option value="YES">YES</option>
            <option value="NO">NO</option>
            <option value="NA">N.A.</option>
            <textarea class="form-control mt-2" id="check24Observations" placeholder="Escribe tus observaciones"
                rows="3" style="display: none;"></textarea>
        </select>

        <label for="check25">25. ¿Se ha proporcionado documentación completa y clara para el uso y mantenimiento del producto?</label>
        <select class="form-control" id="check25">
            <option value="YES">YES</option>
            <option value="NO">NO</option>
            <option value="NA">N.A.</option>
            <textarea class="form-control mt-2" id="check25Observations" placeholder="Escribe tus observaciones"
                rows="3" style="display: none;"></textarea>
        </select>

    </div>

    <button type="submit" class="btn btn-success">Enviar</button></form>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="scripts/mostrar_u_ocultar.js"></script>
    <script src="scripts/anterior_u_siguiente.js"></script>
</body>

</html>