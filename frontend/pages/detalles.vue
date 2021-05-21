<template>
  <div>
    <section class="detalles">
      <div class="container letra">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Detalles de Propiedad</h2>
        </div>
      </div>
    </section>

    <section id="portfolio-details" class="portfolio-details letra">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-8">
            <b-carousel
              id="carousel-fade"
              style="text-shadow: 0px 0px 2px #000"
              fade
              controls
              indicators
              img-width="1024"
              img-height="480"
            >
              <b-carousel-slide
                caption="Dormitorio"
                img-src="dormitorio.png"
              ></b-carousel-slide>
              <b-carousel-slide
                caption="Cocina"
                img-src="cocina.png"
              ></b-carousel-slide>
              <b-carousel-slide
                caption="Ba"
                img-src="bano.png"
              ></b-carousel-slide>
              <b-carousel-slide
                caption="Gimnasio"
                img-src="gimnasio.png"
              ></b-carousel-slide>
              <b-carousel-slide
                caption="Terraza"
                img-src="terraza.png"
              ></b-carousel-slide>
            </b-carousel>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Características</h3>
              <ul>
                <li><strong>Dormitorio</strong>: 1</li>
                <li><strong>Cocina</strong>: 1</li>
                <li><strong>Baño</strong>: 1</li>
                <li><strong>Balcón</strong>: No</li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Departamento 1</h2>
              <p>
                Este departamento cuenta con un amplio dormitorio,
                cocina-comedor y un baño privado.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  layout: 'home',
}
</script>