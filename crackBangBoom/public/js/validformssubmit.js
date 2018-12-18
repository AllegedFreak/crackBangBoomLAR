function validateForm() {

  //console.log('validateForm inició');

  var form = document.querySelector('#validform');

  var inputName = form.querySelector('input#name');
  //var inputName = document.forms["validform"]["name"];
  if ( inputName != null ) {
    var textErrorName = document.querySelector('span.name');
    var input = inputName.value.trim();

    function evaluar(string) {
      for ( char of string.split("") ) {
        console.log(char);
        if ( char.match( /^-?\d*$/ ) || char.match( /[^a-z\d]+/i ) ) {
          return false;
          break;
        }
      }
    }

    if (input == '') {
      event.preventDefault();
      inputName.classList.add('is-invalid');
      textErrorName.innerText = "Este campo es requerido.";
      textErrorName.style.display = "block";
      return false;

    } else if ( input.length < 6 ) {
      event.preventDefault();
      inputName.classList.add('is-invalid');
      textErrorName.innerText = "Este campo debe tener al menos 6 caracteres.";
      textErrorName.style.display = "block";
      return false;

    } else if ( evaluar(input) == false ) {
      event.preventDefault();
      inputName.classList.add('is-invalid');
      textErrorName.innerText = "Este campo no admite números ni caracteres especiales.";
      textErrorName.style.display = "block";
      return false;
    }
    else {
      inputName.classList.remove('is-invalid');
      textErrorName.style.display = "none";
      return true;
    }
  };


  var inputEmail = form.querySelector('input#email');
  //var inputEmail = document.forms["validform"]["email"];
  if ( inputEmail != null ) {
    var textErrorEmail = document.querySelector('span.email');
    if (inputEmail.value.trim() == '') {
      event.preventDefault();
      inputEmail.classList.add('is-invalid');
      textErrorEmail.innerText = "Este campo es requerido.";
      textErrorEmail.style.display = "block";
      return false;

    } else if ( !(inputEmail.value.match( /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/ )) ) {
      event.preventDefault();
      inputEmail.classList.add('is-invalid');
      textErrorEmail.innerText = "Este email es invalido.";
      textErrorEmail.style.display = "block";
      return false;

    }
    else {
      inputEmail.classList.remove('is-invalid');
      textErrorEmail.style.display = "none";
    }
  };

  var inputPass = form.querySelector('input#password');
  //var inputPass = document.forms["validform"]["password"];
  if ( inputPass != null ) {
    var textErrorPass = document.querySelector('span.password');
    var input = inputPass.value.trim();
    if (input == '') {
      event.preventDefault();
      inputPass.classList.add('is-invalid');
      textErrorPass.innerText = "Este campo es requerido.";
      textErrorPass.style.display = "block";
      return false;
    } else if ( input.length < 6 ) {
      event.preventDefault();
      inputPass.classList.add('is-invalid');
      textErrorPass.innerText = "Este campo debe tener al menos 6 caracteres.";
      textErrorPass.style.display = "block";
      return false;
    }
    else {
      inputPass.classList.remove('is-invalid');
      textErrorPass.style.display = "none";
    }
  };


  var inputPassConf = form.querySelector('input#password-confirm');
  //var inputPassConf = document.forms["validform"]["password_confirmation"];
  if ( inputPassConf != null ) {
    var textErrorPassConf = document.querySelector('span.passconf');
    var input = inputPassConf.value.trim();
    var preinput = form.querySelector('input#password').value.trim();
    if (input == '') {
      event.preventDefault();
      inputPassConf.classList.add('is-invalid');
      textErrorPassConf.innerText = "Este campo es requerido.";
      textErrorPassConf.style.display = "block";
      return false;
    } else if ( input.length < 6 ) {
      event.preventDefault();
      inputPassConf.classList.add('is-invalid');
      textErrorPassConf.innerText = "Este campo debe tener al menos 6 caracteres.";
      textErrorPassConf.style.display = "block";
      return false;
    } else if ( input != preinput ) {
        event.preventDefault();
        inputPassConf.classList.add('is-invalid');
        inputPass.classList.add('is-invalid');
        textErrorPassConf.innerText = "Las contraseñas no coinciden.";
        textErrorPassConf.style.display = "block";
        return false;
      }
      else {
        inputPassConf.classList.remove('is-invalid');
        inputPass.classList.remove('is-invalid');
        textErrorPassConf.style.display = "none";
      }
  };

}; //end of validateForm
