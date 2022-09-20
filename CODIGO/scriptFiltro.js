const $d = document;
const $selectProvincias = $d.getElementById("selectProvincias");
const $selectDepartamentos = $d.getElementById("selectDepartamentos");
const $selectLocalidades = $d.getElementById("selectLocalidades");

function provincia() {
    fetch("https://apis.datos.gob.ar/georef/api/provincias")
    .then(res => res.ok ? res.json() : Promise.reject(res))
    .then(json => {
        let $options = `<option value="Elige una provincia">Elige una provincia</option>`;

        json.provincias.forEach(el => $options += `<option value="${el.nombre}">${el.nombre}</option>`);

        $selectProvincias.innerHTML = $options;
    })
    .catch(error => {
        let message = error.statusText || "Ocurrió un error";

        $selectProvincias.nextElementSibling.innerHTML = `Error: ${error.status}: ${message}`;
    })
}

$d.addEventListener("DOMContentLoaded", provincia)

function departamento(provincia) {
    fetch(`https://apis.datos.gob.ar/georef/api/departamentos?provincia=${provincia}&max=200`)
    .then(res => res.ok ? res.json() : Promise.reject(res))
    .then(json => {
        let $options = `<option value="Elige un departamento">Elige un departamento</option>`;

        json.departamentos.forEach(el => $options += `<option value="${el.id}">${el.nombre}</option>`);

        $selectDepartamentos.innerHTML = $options;
    })
    .catch(error => {
        let message = error.statusText || "Ocurrió un error";

        $selectDepartamentos.nextElementSibling.innerHTML = `Error: ${error.status}: ${message}`;
    })
}

$selectProvincias.addEventListener("change", e => {
    departamento(e.target.value);
    console.log(e.target.value)
})

function localidad(departamento) {
    fetch(`https://apis.datos.gob.ar/georef/api/localidades?departamento=${departamento}&max=200`)
    .then(res => res.ok ? res.json() : Promise.reject(res))
    .then(json => {
        let $options = `<option value="Elige una localidad">Elige una localidad</option>`;

        json.localidades.forEach(el => $options += `<option value="${el.id}">${el.nombre}</option>`);

        $selectLocalidades.innerHTML = $options;
    })
    .catch(error => {
        let message = error.statusText || "Ocurrió un error";

        $selectLocalidades.nextElementSibling.innerHTML = `Error: ${error.status}: ${message}`;
    })
}

$selectDepartamentos.addEventListener("change", e => {
    localidad(e.target.value);
    console.log(e.target.value)
})