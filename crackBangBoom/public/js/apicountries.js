fetch('https://restcountries.eu/rest/v2/all')
  .then (function(data) {
    return data.json();
  })
  .then (function(response) {
    //console.log(response);
    var select = document.querySelector('#country-list');
    //console.log(select);
    for (var i = 0; i < response.length; i++) {

      //console.log(select);
      //console.log(response[i].alpha2Code); //esto funciona bien (trae nombre de pais)

      var option = document.createElement('option');
      option.innerText = response[i].name;
      option.setAttribute("value", response[i].alpha2Code );
      select.appendChild(option);

    }
  })
  .catch ( function (error) {
    console.log('Error al cargar paises.');
  })
