<template>
  <div>
    <Hero />
    <Portfolio />
    <Portfolio2 />
  
    <AboutUs />
  </div>
</template>




<script>
import Hero from '/components/HomeComponents/Hero'
import Portfolio from '/components/HomeComponents/Portfolio'
import Portfolio2 from '/components/HomeComponents/Portfolio2'
import AboutUs from '/components/HomeComponents/AboutUs'

export default {
  layout: 'home',
  components: {
    Hero,
    AboutUs,
    Portfolio,
    Portfolio2
  },
  data() {
    return {
      opciones: ['Opcion1', 'Opcion2', 'Opcion3', 'Opcion4', 'Opcion5'],
    }
  },
}
</script>

<style>
.container-text {
  position: relative;
  margin: 10px 0;
}
.container-details {
  position: absolute;
  color: #1a1a1a;
  bottom: 0px;
  right: 150px;
  font-weight: bold;
  background-color: gray;
  border-radius: 5px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
}

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

@media (min-width: 1024px) {
  #hero {
    background-attachment: fixed;
  }
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
ion-icon {
  font-size: 30px;
  margin-inline: 12px;
  margin-top: 20 px;
}

.navbar {
  background-color: rgb(15, 12, 12);
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
  background-image: url('/hero.jpg') center center;
  height: calc(100vh - 70px);
  background-size: cover;
  position: relative;
  padding: 0;
  width: 100%;
  
}
#hero:before {
  content: "";
  background: rgba(29, 6, 6, 0.4);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

.content-center {
  max-width: 800px;
  margin: 0 auto 60px auto;
  text-align: center;
}

#hero .btn-quiero-alquilar {
  text-transform: uppercase;
  font-weight: 500;
  font-size: 16px;
  letter-spacing: 1px;
  padding: 8px 28px;
  border-radius: 4px;
  transition: 0.5s;
  border: 2px solid #fff;
  color: #fff;
}
#hero .btn-quiero-alquilar:hover {
  border-color: #0647a8;
  background: #064fbd;
}
@media (min-width: 1024px) {
  #hero {
    background-attachment: fixed;
  }
}
@media (max-width: 992px) {
  #hero {
    margin-top: 60px;
    height: calc(100vh - 60px);
  }
}

@media (max-width: 768px) {
  #hero h1 {
    font-size: 28px;
    line-height: 36px;
  }
  #hero h2 {
    font-size: 18px;
    line-height: 24px;
    margin-bottom: 30px;
  }
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

.text-dark {
  color: #1a1a1a1a;
}
.bg-light-gray {
  background-color: #9b9b9b;
}
#footer {
  background-color: #1a1a1a;
  width: 100%;
  height: auto;
}
#pie-footer {
  width: 100%;
  height: auto;
  padding-top: 4rem;
}
.titulo-footer {
  color: #ffff;
  text-align: center;
  padding-top: 1rem;
  position: relative;
}

/*@media (min-width: 768px) and (max-width: 991.98px) { ... }
@media (min-width: 576px) and (max-width: 767.98px) { ... }

@media (min-width: 992px) and (max-width: 1199.98px) { ... }


@media (min-width: 1200px) { ... }*/
</style>

