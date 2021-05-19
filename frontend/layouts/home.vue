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
#hero .btn-quiero-alquilar {
  text-transform: uppercase;
  font-weight: 500;
  font-size: 16px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 8px 28px;
  border-radius: 4px;
  transition: 0.5s;
  border: 2px solid #fff;
  color: #fff;
}

#hero .btn-quiero-alquilar:hover {
  border-color: #1bac91;
  background: #1bac91;
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
  margin: 0 0 10px 0;
  font-size: 48px;
  font-weight: 700;
  line-height: 56px;
  color: #fff;
}
 }
#hero:before {
  content: "";
  background: rgba(19, 18, 18, 0.4);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

#hero .container {
  z-index: 2;
}

#hero h2 {
  color: rgba(255, 255, 255, 0.7);
  margin-bottom: 35px;
  font-size: 24px;
}
/*about clase*/
.about h3 {
  font-weight: 400;
  font-size: 34px;
  color: #21413c;
}

.about .icon-box {
  margin-top: 44px;
}

.about .icon-box i {
  font-size: 48px;
  float: left;
  color: #1bac91;
}

.about .icon-box h4 {
  font-size: 22px;
  font-weight: 500;
  margin-left: 60px;
  color: #21413c;
}

.about .icon-box p {
  font-size: 15px;
  color: #848484;
  margin-left: 60px;
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
  min-height: 705px;
  color: #ffff;

  
}
.content-center {
  max-width: 800px;
  margin: 0 auto 60px auto;
  text-align: center;
}

ion-icon {
  font-size: 25px;
  margin-inline: 12px;
  margin-top: 20 px;
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



h1 {
  font-size: 40px;
  line-height: normal;
}
.text-dark {
  color: #1a1a1a1a;
}



/*@media (min-width: 768px) and (max-width: 991.98px) { ... }
@media (min-width: 576px) and (max-width: 767.98px) { ... }

@media (min-width: 992px) and (max-width: 1199.98px) { ... }


@media (min-width: 1200px) { ... }*/
/*--------------------------------------------------------------
# Portfolio
--------------------------------------------------------------*/
.portfolio .portfolio-item {
  margin-bottom: 30px;
}

.portfolio #portfolio-flters {
  padding: 0;
  margin: 0 auto 35px auto;
  list-style: none;
  text-align: center;
  background: #fff;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  border-radius: 50px;
  padding: 8px 20px;
}

.portfolio #portfolio-flters li {
  cursor: pointer;
  display: inline-block;
  padding: 10px 15px 8px 15px;
  font-size: 14px;
  font-weight: 600;
  line-height: 1;
  text-transform: uppercase;
  color: #444444;
  margin-bottom: 5px;
  transition: all 0.3s ease-in-out;
}

.portfolio #portfolio-flters li:hover, .portfolio #portfolio-flters li.filter-active {
  color: #1bac91;
}

.portfolio #portfolio-flters li:last-child {
  margin-right: 0;
}

.portfolio .portfolio-wrap {
  transition: 0.3s;
  position: relative;
  overflow: hidden;
  z-index: 1;
  background: rgba(0, 0, 0, 0.6);
}

.portfolio .portfolio-wrap::before {
  content: "";
  background: rgba(0, 0, 0, 0.5);
  position: absolute;
  left: 30px;
  right: 30px;
  top: 30px;
  bottom: 30px;
  transition: all ease-in-out 0.3s;
  z-index: 2;
  opacity: 0;
}

.portfolio .portfolio-wrap .portfolio-info {
  opacity: 0;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  text-align: center;
  z-index: 3;
  transition: all ease-in-out 0.3s;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.portfolio .portfolio-wrap .portfolio-info::before {
  display: block;
  content: "";
  width: 48px;
  height: 48px;
  position: absolute;
  top: 35px;
  left: 35px;
  border-top: 3px solid #fff;
  border-left: 3px solid #fff;
  transition: all 0.5s ease 0s;
  z-index: 9994;
}

.portfolio .portfolio-wrap .portfolio-info::after {
  display: block;
  content: "";
  width: 48px;
  height: 48px;
  position: absolute;
  bottom: 35px;
  right: 35px;
  border-bottom: 3px solid #fff;
  border-right: 3px solid #fff;
  transition: all 0.5s ease 0s;
  z-index: 9994;
}

.portfolio .portfolio-wrap .portfolio-info h4 {
  font-size: 20px;
  color: #fff;
  font-weight: 600;
}

.portfolio .portfolio-wrap .portfolio-info p {
  color: #ffffff;
  font-size: 14px;
  text-transform: uppercase;
  padding: 0;
  margin: 0;
}

.portfolio .portfolio-wrap .portfolio-links {
  text-align: center;
  z-index: 4;
}

.portfolio .portfolio-wrap .portfolio-links a {
  color: #fff;
  margin: 0 2px;
  font-size: 28px;
  display: inline-block;
  transition: 0.3s;
}

.portfolio .portfolio-wrap .portfolio-links a:hover {
  color: #4ae3c6;
}

.portfolio .portfolio-wrap:hover::before {
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  opacity: 1;
}

.portfolio .portfolio-wrap:hover .portfolio-info {
  opacity: 1;
}

.portfolio .portfolio-wrap:hover .portfolio-info::before {
  top: 15px;
  left: 15px;
}

.portfolio .portfolio-wrap:hover .portfolio-info::after {
  bottom: 15px;
  right: 15px;
}

/*--------------------------------------------------------------
# Portfolio Details*/

.portfolio-details {
  padding-top: 40px;
}

.portfolio-details .portfolio-details-slider img {
  width: 100%;
}

.portfolio-details .portfolio-details-slider .swiper-pagination {
  margin-top: 20px;
  position: relative;
}

.portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: #fff;
  opacity: 1;
  border: 1px solid #1bac91;
}

.portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet-active {
  background-color: #1bac91;
}

.portfolio-details .portfolio-info {
  padding: 30px;
  box-shadow: 0px 0 30px rgba(33, 65, 60, 0.08);
}

.portfolio-details .portfolio-info h3 {
  font-size: 22px;
  font-weight: 700;
  margin-bottom: 20px;
  padding-bottom: 20px;
  border-bottom: 1px solid #eee;
}

.portfolio-details .portfolio-info ul {
  list-style: none;
  padding: 0;
  font-size: 15px;
}

.portfolio-details .portfolio-info ul li + li {
  margin-top: 10px;
}

.portfolio-details .portfolio-description {
  padding-top: 30px;
}

.portfolio-details .portfolio-description h2 {
  font-size: 26px;
  font-weight: 700;
  margin-bottom: 20px;
}

.portfolio-details .portfolio-description p {
  padding: 0;
}
.section-title {
  padding-bottom: 40px;
  text-align: center;
}
section {
  padding: 60px 0;
  overflow: hidden;
}
.section-bg {
  background-color: #ffff;
}

.section-title h2 {
  font-size: 36px;
  font-weight: 300;
  margin-bottom: 20px;
  padding-bottom: 0;
  color: #21413c;
}

.section-title p {
  margin-bottom: 0;
  
}

.contact .info {
  padding: 30px;
  width: 100%;
  background: #fff;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
}

.contact .info i {
  font-size: 20px;
  color: #1bac91;
  float: left;
  width: 44px;
  height: 44px;
  background: #e1f0ee;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50px;
  transition: all 0.3s ease-in-out;
}

.contact .info h4 {
  padding: 0 0 0 60px;
  font-size: 22px;
  font-weight: 600;
  margin-bottom: 5px;
  color: #21413c;
}

.contact .info p {
  padding: 0 0 0 60px;
  margin-bottom: 0;
  font-size: 14px;
  color: #43857a;
}

.contact .info .email p {
  padding-top: 5px;
}

.contact .info .social-links {
  padding-left: 60px;
}

.contact .info .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #333;
  color: #fff;
  line-height: 1;
  padding: 8px 0;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
  margin-right: 10px;
}



.contact .info .email:hover i, .contact .info .address:hover i, .contact .info .phone:hover i {
  background: #1bac91;
  color: #fff;
}

.contact .php-email-form {
  width: 100%;
  padding: 30px;
  background: #fff;
  box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);
}

.contact .php-email-form .form-group {
  padding-bottom: 8px;
}

.contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: left;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .error-message br + br {
  margin-top: 25px;
}

.contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}

.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}

.contact .php-email-form input, .contact .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
}

.contact .php-email-form input {
  height: 44px;
}

.contact .php-email-form textarea {
  padding: 10px 12px;
}

.contact .php-email-form button[type="submit"] {
  background: #1bac91;
  border: 0;
  padding: 10px 24px;
  color: #fff;
  transition: 0.4s;
  border-radius: 4px;
}

.contact .php-email-form button[type="submit"]:hover {
  background: #22d8b6;
}

@-webkit-keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

.icons .info i {
    font-size: 20px;
    color: #1bac91;
    float: left;
    width: 44px;
    height: 44px;
    background: #e1f0ee;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50px;
    transition: all 0.3s ease-in-out;
}
.icons .info {
  padding: 30px;
  width: 100%;
  background: #fff;
  box-shadow: 0px 2px 15px rgba(7, 70, 66, 0.1);
}
.icons .info p {
  padding: 0 0 0 60px;
  margin-bottom: 0;
  font-size: 14px;
  color: #43857a;
}
.icons .info .mundo:hover i, .icons .info .otro:hover i, .icons .info .otro2:hover i {
  background: #1bac91;
  color: #fff;
}
</style>

