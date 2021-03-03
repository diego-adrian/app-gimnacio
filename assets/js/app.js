document.addEventListener('load', function () {
  var btnEmpezar = document.querySelector('#btn-empezar');
  btnEmpezar.addEventListener('click', function () {
    window.scrollTo({
      top: 50,
      behavior: 'smooth',
    });
  }, true)
}, true);