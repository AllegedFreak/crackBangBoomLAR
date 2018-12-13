windows.addEventListener('load', function() {

  var form = document.querySelector('#validform');
  form.onsubmit = function(event) {

    var inputEmail = document.querSelector('input[name="email"]');
    if (inputEmail.value == '') {
      inputEmail.classList.add('is-invalid');
      event.preventDefault();
    }

    var inputPass = document.querSelector('input[name="password"]');
    if (inputPass.value == '') {
      inputPass.classList.add('is-invalid');
      event.preventDefault();
    }

    var inputPassConf = document.querSelector('input[name="password_confirmation"]');
    if (inputPassConf.value == '') {
      inputPassConf.classList.add('is-invalid');
      event.preventDefault();
    }

  }

});
