<style >
  .changetheme-btn{
    color:white;
    width: 120px;
    padding: 5px;
    position: fixed;
    bottom: 20px;
    right: 20px;
    /* border: 1px solid white; */
  }
  .changetheme-btn:hover{
    color:white;
    background-color: #E52328;
  }
</style>

<button type="button" class="changetheme-btn" name="button" onclick="changeTheme()">
   Modo Claro
</button>

<script>

  //Esta funcion verifica si existe la cookie.
  function findCookie(name) {
    var dc = document.cookie;
    var prefix = name + "=";
    var begin = dc.indexOf("; " + prefix);
    if (begin == -1) {
        begin = dc.indexOf(prefix);
        if (begin != 0) return null;
    }
    else
    {
        begin += 2;
        var end = document.cookie.indexOf(";", begin);
        if (end == -1) {
        end = dc.length;
        }
    }
    return decodeURI(dc.substring(begin + prefix.length, end));
  }

  //Si no exite, la crea.
  function ifExist() {
    var myCookie = findCookie("theme");
    var boton = document.querySelector(".changetheme-btn");

    if (myCookie == null) {
        document.cookie = "theme=light;path=/";
        boton.innerText = ' Modo Oscuro ';
    }

    else {

      function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i=0; i<ca.length; i++) {
          var c = ca[i];
          while (c.charAt(0)==' ') c = c.substring(1);
          if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
        }
      }

      //esta funcion se fija si el tema activo es dark o light
      function checkTheme() {
        var theme = document.querySelector(".themes");
        var boton = document.querySelector(".changetheme-btn");
        var cookieTheme = getCookie('theme');

        //console.log(cookieTheme);
        if ( cookieTheme == "dark" ) {
          theme.setAttribute("href", "/css/theme-dark.css");
          boton.innerText = ' Modo Claro ';
          document.cookie = "theme=dark;path=/";
        } else if ( cookieTheme == "light" ) {
          theme.setAttribute("href", "/css/theme-light.css");
          boton.innerText = ' Modo Oscuro ';
          document.cookie = "theme=light;path=/";
        }
      }

      checkTheme(); //Lo ejecuta

    }
  }

  ifExist(); //Lo ejecuta


  //Funcion para el boton:
  function changeTheme() {
    var theme = document.querySelector(".themes");
    var boton = document.querySelector(".changetheme-btn");
    // var cookieTheme = getCookie('theme');

    if ( theme.getAttribute("href") == "/css/theme-light.css" ) {
      theme.setAttribute("href", "/css/theme-dark.css");
      boton.innerText = ' Modo Claro ';
      document.cookie = "theme=dark;path=/";
    } else if ( theme.getAttribute("href") == "/css/theme-dark.css" ){
      theme.setAttribute("href", "/css/theme-light.css");
      boton.innerText = ' Modo Oscuro ';
      document.cookie = "theme=light;path=/";
    }
  }

</script>
