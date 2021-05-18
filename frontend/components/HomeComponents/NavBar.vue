<template >
      <nav class="navbar navbar-expand-lg letra fixed-top">
      <div class="container">
        <div class="row col-md-12">
          <a class="navbar-brand col-md-3 float-left" href="">
            <img src="\logo.png" class="logo-brand" alt="logo"
          /></a>
          <div
            class="collapse navbar-collapse col-md-8"
            id="navbarSupportedContent"
          >
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a
                  class="nav-link active"
                  aria-current="page"
                  href="#"
                  id="inicio"
                  >Inicio</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" id="home">Sobre nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" id="contacto">Contactanos</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
</template>
<script>
export default {
  name:'NavBar'
}
</script>

<style scoped>
.navbar {
  background-color: rgb(20, 13, 13);
  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.05);
  min-height: 55px;
  
  
}
.nav-link {
  color: #ffffff;
}
.nav-link:hover {
  color: #1bac91;
  font-weight: 700;
}
</style>
