var form = document.querySelector('#validform');


var inputName = form.querySelector('input#name');
if ( inputName != null ) {
  var textErrorName = document.querySelector('span.name');
  inputName.onblur = function(){
    if (inputName.value == '') {
      inputName.classList.add('is-invalid');
      textErrorName.innerText = "Este campo es requerido.";
      textErrorName.style.display = "block";
      // event.preventDefault();
    } else {
      inputName.classList.remove('is-invalid');
      textErrorName.style.display = "none";
      // event.preventDefault();
    };
  };
}


var inputEmail = form.querySelector('input#email');
if ( inputEmail != null ) {
  var textErrorEmail = document.querySelector('span.email');
  inputEmail.onblur = function(){
    if (inputEmail.value == '') {
      inputEmail.classList.add('is-invalid');
      textErrorEmail.innerText = "Este campo es requerido.";
      textErrorEmail.style.display = "block";
      // event.preventDefault();
    } else {
      inputEmail.classList.remove('is-invalid');
      textErrorEmail.style.display = "none";
      // event.preventDefault();
    };
  };
}


var inputPass = form.querySelector('input#password');
if ( inputPass != null ) {
  var textErrorPass = document.querySelector('span.password');
  inputPass.onblur = function(){
    if (inputEmail.value == '') {
      console.log('hahahah');
      inputPass.classList.add('is-invalid');
      textErrorPass.innerText = "Este campo es requerido.";
      textErrorPass.style.display = "block";
      // event.preventDefault();
    } else {
      inputPass.classList.remove('is-invalid');
      textErrorPass.style.display = "none";
      // event.preventDefault();
    };
  };
}


var inputPassConf = form.querySelector('input#password-confirm');
if ( inputPassConf != null ) {
  var textErrorPassConf = document.querySelector('span.password-confirm');
  inputPassConf.onblur = function(){
    if (inputEmail.value == '') {
      console.log('hahahah');
      inputPassConf.classList.add('is-invalid');
      textErrorPassConf.innerText = "Este campo es requerido.";
      textErrorPassConf.style.display = "block";
      // event.preventDefault();
    } else if (inputEmail.value != '') {
      inputPassConf.classList.remove('is-invalid');
      textErrorPassConf.style.display = "none";
      // event.preventDefault();
    };
  };
}
