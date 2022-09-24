document.getElementById('formulario').addEventListener('submit', function(e) {

    e.preventDefault();

    let formulario = new FormData(document.getElementById('formulario'));

    fetch('registro.php', {
        method: 'POST',
        body: formulario
    })
    .then(res => res.json())
    .then(data => {
        if(data == 'true') {
            document.getElementById('email').value = '';
            document.getElementById('password').value = '';
            document.getElementById('nombreApellido').value = '';
            document.getElementById('domicilio').value = '';
            document.getElementById('selectProvincias').value = '';
            document.getElementById('selectDepartamentos').value = '';
            document.getElementById('selectLocalidades').value = '';
            document.getElementById('telefono').value = '';
            document.getElementById('dni').value = '';
            alert('El usuario se insertó correctamente.');
        } else {
            console.log(data);
        }
    });

});
