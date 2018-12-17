function validateForm() {

  console.log('validateForm inició');

  var inputName = form.querySelector('input#name');
  if ( inputName != null ) {
    var textErrorName = document.querySelector('span.name');
    inputName.onblur = function(){
      var input = inputName.value.trim();
      if (input == '') {
        inputName.classList.add('is-invalid');
        textErrorName.innerText = "Este campo es requerido.";
        textErrorName.style.display = "block";
        return false;
        event.preventDefault();
      } else if ( input.length < 3 ) {
        inputName.classList.add('is-invalid');
        textErrorName.innerText = "Este campo debe tener al menos 3 caracteres.";
        textErrorName.style.display = "block";
        return false;
        event.preventDefault();
      } else if ( input.match( /^-?\d*$/ ) ) {
        inputName.classList.add('is-invalid');
        textErrorName.innerText = "Este campo no admite números.";
        textErrorName.style.display = "block";
        return false;
        event.preventDefault();
      }
      else {
        inputName.classList.remove('is-invalid');
        textErrorName.style.display = "none";
        //return true;
        event.preventDefault();
      };
    };
  }


  var inputEmail = form.querySelector('input#email');
  if ( inputEmail != null ) {
    var textErrorEmail = document.querySelector('span.email');
    inputEmail.onblur = function(){
      if (inputEmail.value.trim() == '') {
        inputEmail.classList.add('is-invalid');
        textErrorEmail.innerText = "Este campo es requerido.";
        textErrorEmail.style.display = "block";
        return false;
        event.preventDefault();
      } else if ( !(inputEmail.value.match( /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/ )) ) {
        inputEmail.classList.add('is-invalid');
        textErrorEmail.innerText = "Este email es invalido.";
        textErrorEmail.style.display = "block";
        return false;
        event.preventDefault();
      }
      else {
        inputEmail.classList.remove('is-invalid');
        textErrorEmail.style.display = "none";
        //return true;
        event.preventDefault();
      };
    };
  }

  //var validPassword = false;

  var inputPass = form.querySelector('input#password');
  if ( inputPass != null ) {
    var textErrorPass = document.querySelector('span.password');
    inputPass.onblur = function(){
      var input = inputPass.value.trim();
      if (input == '') {
        inputPass.classList.add('is-invalid');
        textErrorPass.innerText = "Este campo es requerido.";
        textErrorPass.style.display = "block";
        return false;
        //var validPassword = false;
        //console.log('false'.validPassword);
        event.preventDefault();
      } else if ( input.length < 3 ) {
        inputPass.classList.add('is-invalid');
        textErrorPass.innerText = "Este campo debe tener al menos 3 caracteres.";
        textErrorPass.style.display = "block";
        return false;
        //var validPassword = false;
        //console.log('false'.validPassword);
        event.preventDefault();
      }
      else {
        inputPass.classList.remove('is-invalid');
        textErrorPass.style.display = "none";
        //return true;
        //var validPassword = true;
        //console.log('true'.validPassword);
        event.preventDefault();
      };
    }
  };


  var inputPassConf = form.querySelector('input#password-confirm');
  if ( inputPassConf != null ) {
    var textErrorPassConf = document.querySelector('span.passconf');
    inputPassConf.onblur = function(){
      //console.log(validPassword);
      var input = inputPassConf.value.trim();
      var preinput = form.querySelector('input#password').value.trim();
      if (input == '') {
        inputPassConf.classList.add('is-invalid');
        textErrorPassConf.innerText = "Este campo es requerido.";
        textErrorPassConf.style.display = "block";
        return false;
        event.preventDefault();
      } else if ( input.length < 3 ) {
        inputPassConf.classList.add('is-invalid');
        textErrorPassConf.innerText = "Este campo debe tener al menos 3 caracteres.";
        textErrorPassConf.style.display = "block";
        return false;
        event.preventDefault();
      } else if ( input != preinput ) {
          inputPassConf.classList.add('is-invalid');
          inputPass.classList.add('is-invalid');
          textErrorPassConf.innerText = "Las contraseñas no coinciden.";
          textErrorPassConf.style.display = "block";
          return false;
          event.preventDefault();
        } else {
          inputPassConf.classList.remove('is-invalid');
          inputPass.classList.remove('is-invalid');
          textErrorPassConf.style.display = "none";
          //return true;
          event.preventDefault();
        };
    };
  } else {
    console.log('TODO ESTA PERFECTO');
  }
}
