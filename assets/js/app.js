document.addEventListener('load', function () {
  // Volviedo a la parte donde estan los botones para hombres y mujeres
  var btnEmpezar = document.getElementById('btn-empezar');
  btnEmpezar.addEventListener('click', function () {
    window.scrollTo({
      top: 250,
      behavior: 'smooth',
    });
  }, true)
}, true);

function selectMen () {
  console.log('------------------------------------');
  console.log('Hombre');
  console.log('------------------------------------');
}

function selectWomen () {
  console.log('------------------------------------');
  console.log('Mujer');
  console.log('------------------------------------');
}