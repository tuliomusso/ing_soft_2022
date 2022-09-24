document.getElementById('formularioServicio').addEventListener('submit', function(e) {
    
    e.preventDefault();

    let formularioServicio = new FormData(document.getElementById('formularioServicio'));

    fetch('ofrecerServicios.php', {
        method: 'POST',
        body: formularioServicio
    })
    .then(res => res.json())
    .then(data => {
        if(data == 'true') {
            document.getElementById('idCategoria').value = '';
            document.getElementById('idUsuario').value = '';
            document.getElementById('nombre').value = '';
            document.getElementById('imagen').value = '';
            document.getElementById('cantidadReservas').value = '';
            document.getElementById('descripcionContacto').value = '';
            document.getElementById('provinciaOferente').value = '';
            document.getElementById('departamentoOferente').value = '';
            document.getElementById('localidadOferente').value = '';
            alert('El servicio se registro correctamente.');
        } else {
            console.log(data);
        }
    });

});