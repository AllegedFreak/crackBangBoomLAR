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

  // function changeTheme() {
  //   var theme = document.querySelector(".mainTheme");
  //   if ( theme.getAttribute("href") == "/css/main-style.css" ) {
  //     theme.setAttribute("href", "/css/main-style-dark.css");
  //   } else {
  //     theme.setAttribute("href", "/css/main-style.css");
  //   }
  // }

  function changeTheme() {
    var theme = document.querySelector(".mainTheme");
    if ( theme.getAttribute("href") == "/css/main-style.css" ) {
      theme.setAttribute("href", "/css/main-style-dark.css");
    } else {
      theme.setAttribute("href", "/css/main-style.css");
    }
  }


  // function del_style() {
  //   document.getElementById("styles").disabled=true;
  // }
  //
  // function add_style() {
  //   document.getElementById("styles").disabled=false;
  // }

</script>
