function verifCountry() {
  //esto lo q va a hacer es verificar si el pais seleccionado es argentina
  var selectedCountry = document.querySelector('#country-list').value;
  //console.log(selectedCountry);
  if (selectedCountry == 'AR') {
    console.log('ARGENTINA!');
    var select = document.querySelector('#provincias-list');
    select.setAttribute("style", "display:block;" );
  } else if (selectedCountry != 'AR') {
    var select = document.querySelector('#provincias-list');
    select.setAttribute("style", "display:none;" );
  }
}

fetch('https://dev.digitalhouse.com/api/getProvincias')
  .then (function(data) {
    return data.json();
  })
  .then (function(response) {
    //console.log(response);
    var select = document.querySelector('#provincias-list');
    //console.log(select);
    for (var i = 0; i < response.length; i++) {

      //console.log(select);
      //console.log(response[i].state);

      var option = document.createElement('option');
      option.innerText = response[i].state;
      //option.setAttribute("value", response[i].alpha2Code );
      select.appendChild(option);

    }
  })
  .catch ( function (error) {
    console.log('Error al cargar paises.');
  })
