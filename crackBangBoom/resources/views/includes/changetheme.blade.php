<style >
  .changetheme-btn{
    color:blue;
    position: fixed;
    bottom: 20px;
    right: 20px;
  }
</style>

<button type="button" class="changetheme-btn" name="button" onclick="changeTheme()">Modo Oscuro</button>

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

  //var cookieTheme;

  function checkTheme() {
    var theme = document.querySelector(".mainTheme");
    var cookieTheme = getCookie('theme');
    //console.log(cookieTheme);
    if ( cookieTheme == "dark" ) {
      theme.setAttribute("href", "/css/main-style-dark.css");
      boton.innerText = 'Modo Claro';
      document.cookie = "theme=dark";
    } else {
      theme.setAttribute("href", "/css/main-style.css");
      boton.innerText = 'Modo Oscuro';
      document.cookie = "theme=light";
    }
  }

  checkTheme();

  function changeTheme() {
    var theme = document.querySelector(".mainTheme");
    var boton = document.querySelector(".changetheme-btn");
    if ( theme.getAttribute("href") == "/css/main-style.css" ) {
      theme.setAttribute("href", "/css/main-style-dark.css");
      boton.innerText = 'Modo Claro';
      document.cookie = "theme=dark";
    } else {
      theme.setAttribute("href", "/css/main-style.css");
      boton.innerText = 'Modo Oscuro';
      document.cookie = "theme=light";
    }
  }

</script>
