<template>
<div>
  <nav class="navbar navbar-expand-lg letra">
    <div class="container">
      <div class="row col-md-12 ">
        <a class="navbar-brand col-md-3 float-left" href=""> <img src="logo.png" class="logo-brand" alt="logo"></a>
        <div class="collapse navbar-collapse col-md-8" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#" id="inicio">Inicio</a>
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
  
  <section id="hero" class='hero'>
      <div class="container">
    
      </div>


  </section>
  </div>
  </template>
  
  


<script>
export default {
  layout: null,
  data() {
    return {
      opciones: ['Opcion1', 'Opcion2', 'Opcion3', 'Opcion4', 'Opcion5'],
    }
  },
}
</script>

<style>
.letra {
  font-family: 'Titillium Web', sans-serif;
}
.navbar{
    background-color: #ffff;
    box-shadow: 0 2px 4px 0 rgba(0,0,0,.05);
    min-height: 55px;
}
.nav-link{
    color: #1a1a1a;
}
.nav-link:hover{
    color:#1a1a1a;
    font-weight: 700;
}
.logo-brand{
    min-width: 50px;
    max-width: 55px;
}
.hero{
    background-image: url('/hero.jpg');
    background-size: cover;
    padding-top: 90px;
    min-height: 1000px;
    color: #ffff;
}
</style>