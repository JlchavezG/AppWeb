// funcion solo numeros
function VNumeros(e){
    key = e.keyCode || e.which;
    teclado = String.fromCharCode(key);
    numero = "1234567890";
    especiales = "8-37-38-46";
    teclado_especial = false;
    for(var i in especiales){
        if(key == especiales[i]){
            teclado_especial = true;
        }
    } 
    if(numero.indexOf(teclado) == -1 && !teclado_especial){
        return false;

    }
}
// verificar conexion a internet 
function showAlert(message, type) {
    const alertContainer = document.getElementById('alert-container');
    alertContainer.innerHTML = `
        <div class="alert alert-${type} alert-dismissible fade show" role="alert">
            ${message}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    `;
}
function checkInternetConnection() {
    if (navigator.onLine) {
        showAlert('Tu Conexión a internet es estable.', 'info');
    } else {
        showAlert('No tienes conexión a internet.', 'danger');
    }
}
// Evento cuando se pierde la conexión
window.addEventListener('offline', () => {
    showAlert('No tienes conexión a internet.', 'danger');
});
// Evento cuando se recupera la conexión
window.addEventListener('online', () => {
    showAlert('Conexión a internet restablecida.', 'success');
});
// Verifica la conexión al cargar la página
window.onload = checkInternetConnection;