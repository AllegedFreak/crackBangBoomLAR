windows.addEventListener('load', function() {

  var form = document.querySelector('#validform');

  form.onsubmit = function(event) {

    var inputEmail = document.querSelector('input[name="email"]').value;
    if (inputEmail == '') {
      inputEmail.classList.add('is-invalid');
      var textError = document.querySelector('span[class="email"]');
      textError.innerText = "Este campo es requerido.";
      event.preventDefault();
    }

    var inputPass = document.querSelector('input[name="password"]').value;
    if (inputPass == '') {
      inputPass.classList.add('is-invalid');
      var textError = document.querySelector('span[class="pass"]');
      textError.innerText = "Este campo es requerido.";
      event.preventDefault();
    }

    var inputPassConf = document.querSelector('input[name="password_confirmation"]').value;
    if (inputPassConf == '') {
      inputPassConf.classList.add('is-invalid');
      var textError = document.querySelector('span[class="passconf"]');
      textError.innerText = "Este campo es requerido.";
      event.preventDefault();
    }

  }

});
