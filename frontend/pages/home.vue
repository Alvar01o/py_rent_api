<template>
  <div>
    <nav class="navbar navbar-expand-lg letra fixed-top">
      <div class="container">
        <div class="row col-md-12">
          <a class="navbar-brand col-md-3 float-left" href="">
            <img src="logo.png" class="logo-brand" alt="logo"
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

    <section id="hero" class="hero">
      <div class="container">
        <div class="content-center topmargin-lg letra">
          <h1>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec
            odio. Quisque volutpat mattis eros.
          </h1>
          <p>
            Praesent dapibus, neque id cursus faucibus, tortor neque egestas
            auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam
            dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.
          </p>
          <a href="#" class="btn btn-light topmargin-sm"
            >QUIERO ALQUILAR<ion-icon
              name="arrow-forward-circle-outline"
            ></ion-icon
          ></a>
        </div>
      </div>
    </section>
    <section id="portafolio">
      <div class="container fluid letra">
        <div class="content-center">
          <h2>Morbi in sem quis dui placerat ornare.</h2>
          <p>
            Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae
            luctus metus libero eu augue. Morbi purus libero, faucibus
            adipiscing, commodo quis, gravida id, est. Sed lectus
          </p>
        </div>
        <div class="row">
          <div class="col-md-6 letra">
            <div class="portfolio-container">
              <div class="portfolio-details">
                <a href="#">
                  <h2>Phasellus ultrices nulla</h2>
                </a>
                <a href="#">
                  <p>
                    Donec consectetuer ligula vulputate sem tristique cursus.
                  </p>
                </a>
              </div>
              <img src="portfolio1.jpg" class="img-fluid" alt="portfolio1" />
            </div>
          </div>
          <div class="col-md-6 letra">
            <div class="portfolio-container">
              <div class="portfolio-details">
                <a href="#">
                  <h2>Phasellus ultrices nulla</h2>
                </a>
                <a href="#">
                  <p>
                    Donec consectetuer ligula vulputate sem tristique cursus.
                  </p>
                </a>
              </div>
              <img src="portfolio2.jpeg" class="img-fluid" alt="portfolio2" />
            </div>
          </div>
          <div class="col-md-6 letra">
            <div class="portfolio-container">
              <div class="portfolio-details">
                <a href="#">
                  <h2>Phasellus ultrices nulla</h2>
                </a>
                <a href="#">
                  <p>
                    Donec consectetuer ligula vulputate sem tristique cursus.
                  </p>
                </a>
              </div>
              <img src="portfolio3.jpg" class="img-fluid" alt="portfolio3" />
            </div>
          </div>
          <div class="col-md-6 letra">
            <div class="portfolio-container">
              <div class="portfolio-details">
                <a href="#">
                  <h2>Phasellus ultrices nulla</h2>
                </a>
                <a href="#">
                  <p>
                    Donec consectetuer ligula vulputate sem tristique cursus.
                  </p>
                </a>
              </div>
              <img src="portfolio4.jpg" class="img-fluid" alt="portfolio4" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="text-center topmargin-xs text-dark">
      <p>El hogar con el que siempre soñaste se puede hacer realidad ahora</p>
      <a href="#"> Dejanos cumplir tu sueño</a>
    </div>
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
h1 {
  font-size: 50px;
  font-weight: 600p;
  line-height: 80px;
}
h2 {
  font-size: 48px;
  margin-bottom: 30px;

  font-weight: bold;
}
p {
  font-size: 18px;
  color: #999999;
  line-height: 1.8;
  margin-bottom: 0;
}
section {
  padding: 120px 0;
}
#hero p {
  color: #ffff;
}
.topmargin-lg {
  margin-top: 60px;
}
.topmargin-sm {
  margin-top: 30px;
}
.topmargin-xs {
  margin-top: 15px;
}

.navbar {
  background-color: #ffff;
  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.05);
  min-height: 55px;
}
.nav-link {
  color: #1a1a1a;
}
.nav-link:hover {
  color: #1a1a1a;
  font-weight: 700;
}
.logo-brand {
  min-width: 50px;
  max-width: 55px;
}
.hero {
  background-image: url('/hero.jpg');
  background-size: cover;
  padding-top: 90px;
  min-height: 1000px;
  color: #ffff;
}
.content-center {
  max-width: 800px;
  margin: 0 auto 60px auto;
  text-align: center;
}
.btn {
  font-size: 14px;
  padding: 15px 26px;
  min-width: 160px;
  border-radius: 2px;
  display: inline-block;
}
.btn-light {
  background-color: #ffff;
  color: #1a1a1a;
  border: 2px solid #ffff;
}
.portfolio-container {
  position: relative;
  overflow: hidden;
  margin: 10px 0;
  border-radius: 2px;
}
.portfolio-container img {
  -moz-transition: all 0.8s;
  -webkit-transition: all 0.8s;
  transition: all 0.8s;
}
.portfolio-container:hover img {
  -moz-transform: scale(1.2);
  -webkit-transform: scale (1.2);
  transform: scale(1.2);
}
.portfolio-details {
  position: absolute;
  bottom: 25px;
  left: 25px;
  z-index: 9000;
}
.portfolio-details a h2,
.portfolio-details a p {
  color: #ffff;
}
.portfolio-details h2 {
  margin-bottom: 0px;
}
@media (max-width: 575.98px) {
  h1 {
    font-size: 40px;
    line-height: normal;
  }
  .text-dark {
    color: #1a1a1a1a;
  }
}
/*@media (min-width: 768px) and (max-width: 991.98px) { ... }
@media (min-width: 576px) and (max-width: 767.98px) { ... }

@media (min-width: 992px) and (max-width: 1199.98px) { ... }


@media (min-width: 1200px) { ... }*/
</style>

