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
            document.getElementById('nombreLocalidad').value = '';
            document.getElementById('codigoPostal').value = '';
            document.getElementById('nombreProvincia').value = '';
            document.getElementById('telefono').value = '';
            document.getElementById('dni').value = '';
            alert('El usuario se registro correctamente.');
        } else {
            console.log(data);
        }
    });

});
