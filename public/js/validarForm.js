function validarFormulario() {
    var time = document.getElementById('time');
    var barber = document.getElementById('barber')
    if (time.value === '' && barber === '') {
      alert('Por favor, selecione uma opção válida.');
      return false;
    }
    return true; 
}