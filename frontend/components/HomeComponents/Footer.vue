<template>
      <footer id="footer" class="letra">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3 class="titulo-footer">SUBSCRIBE TO OUR NEWSLETTER</h3>
            <p class="titulo-footer">
              The latest news, articles, and resources, sent to your inbox
              weekly.
            </p>
            <p id="pie-footer">© 2021 Zolutio, Inc. All rights reserved.</p>
          </div>
            <div class="col-md-6 pt-2">
              <form class="form-inline col-md-12">
                <div class="form-group col-md-8 float-left">
                  <input
                    type="email"
                    class="form-control mb-2 mr-sm-2 "
                    id="inlineFormInputName2"
                    placeholder="Escribe tu email"
                  />
                </div>
                <button type="submit" class="btn btn-primary mb-2 col-md-2 float-right">
                  Submit
                </button>
              </form>
            </div>
        </div>
      </div>
    </footer>
</template>
<script>
export default {
  name:'Footer'
}
</script>
<style scoped>
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
</style>
