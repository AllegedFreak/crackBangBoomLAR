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
<?php echo ( $_COOKIE['theme'] == 'dark') ? " Modo Claro " : " Modo Oscuro ";?>
</button>

<script>

  function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0)==' ') c = c.substring(1);
      if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    }
  }

  function checkTheme() {

    var theme = document.querySelector(".themes");
    var boton = document.querySelector(".changetheme-btn");
    var cookieTheme = getCookie('theme');

    //console.log(cookieTheme);
    if ( cookieTheme == "dark" ) {
      theme.setAttribute("href", "/css/theme-dark.css");
      boton.innerText = ' Modo Claro ';
      document.cookie = "theme=dark";
    } else {
      theme.setAttribute("href", "/css/theme-light.css");
      boton.innerText = ' Modo Oscuro ';
      document.cookie = "theme=light";
    }

  }

  checkTheme(); //Verifica cuál tema está activo

  function changeTheme() {

    var theme = document.querySelector(".themes");
    var boton = document.querySelector(".changetheme-btn");

    if ( theme.getAttribute("href") == "/css/theme-light.css" ) {
      theme.setAttribute("href", "/css/theme-dark.css");
      boton.innerText = ' Modo Claro ';
      document.cookie = "theme=dark";
    } else {
      theme.setAttribute("href", "/css/theme-light.css");
      boton.innerText = ' Modo Oscuro ';
      document.cookie = "theme=light";
    }

  }

</script>
