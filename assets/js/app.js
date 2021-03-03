document.addEventListener('load', function () {
  // Volviedo a la parte donde estan los botones para hombres y mujeres
  var btnEmpezar = document.getElementById('btn-empezar');
  btnEmpezar.addEventListener('click', function () {
    window.scrollTo({
      top: 250,
      behavior: 'smooth',
    });
  }, true)
  // Agregando el evento inicial (HOMBRES)
  var btnHombre = document.getElementById('btnHombre');
  btnHombre.addEventListener('click', function () {
    console.log('Hombre')
  });
  // Agregando el evento inicial (MUJERES)
  var btnMujer = document.getElementById('btnMujer');
  btnMujer.addEventListener('click', function () {
    console.log('Mujer')
  });
}, true);