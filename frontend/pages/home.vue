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