<template>
      <footer id="footer" class="letra">
      <div class="container">
        <div class="footer-top">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <h3>SUBSCRIBE TO OUR NEWSLETTER</h3>
            <p >
              The latest news, articles, and resources, sent to your inbox
              weekly.
            </p>
            <p>© 2021 Zolutio, Inc. All rights reserved.</p>
          </div>
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
  background: black;
  padding: 0 0 30px 0;
  color: #fff;
  font-size: 14px;
}
.footer-top {
  background: #0c1817;
  border-bottom: 1px solid #18302c;
  padding: 60px 0 30px 0;
}
</style>
