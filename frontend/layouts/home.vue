<template>
  <div>
    <NavBar />
      <Nuxt />
    <Footer />
  </div>
</template>




<script>
import NavBar from '/components/HomeComponents/NavBar'
import Footer from '/components/HomeComponents/Footer'
export default {
  layout: null,
  components: {
    NavBar,
    Footer
  },
  data() {
    return {
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
.topmargin-lg {
  margin-top: 60px;
}
.topmargin-sm {
  margin-top: 30px;
}
.topmargin-xs {
  margin-top: 15px;
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
h1 {
  font-size: 40px;
  line-height: normal;
}
.text-dark {
  color: #1a1a1a1a;
}
.bg-light-gray {
  background-color: #9b9b9b;
}


/*@media (min-width: 768px) and (max-width: 991.98px) { ... }
@media (min-width: 576px) and (max-width: 767.98px) { ... }

@media (min-width: 992px) and (max-width: 1199.98px) { ... }


@media (min-width: 1200px) { ... }*/
</style>

