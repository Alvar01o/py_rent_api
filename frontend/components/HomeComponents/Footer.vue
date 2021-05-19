<template>
	<footer id="footer" class="letra">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-md-12 row">
						<div class="social-links col-md-4">
							<div class="col-md-12 footer-links">
								<h4 class="mt-2 mb-2">Links útiles</h4>
								<ul>
									<li>
										<i class="bi bi-chevron-right"></i> <a href="#">Contacto</a>
									</li>
									<li>
										<i class="bi bi-chevron-right"></i>
										<a href="#">Servicios</a>
									</li>
									<li>
										<i class="bi bi-chevron-right"></i>
										<a href="#">Terms of service</a>
									</li>
								</ul>
							</div>
							<div class="col-md-12">
								<a href="#" class="twitter social"
									><i class="bi bi-twitter"></i
								></a>
								<a href="#" class="facebook social"
									><i class="bi bi-facebook"></i
								></a>
								<a href="#" class="instagram social"
									><i class="bi bi-instagram"></i
								></a>
							</div>
						</div>

						<div class="footer-info col-md-4">
							<h3>ARMV PROPIEDADES</h3>
							<p>
								Kreusser 7321 <br />
								Encarnación, PARAGUAY<br /><br />
								<strong>Teléfono:</strong> 0981659713<br />
								<strong>Email:</strong> armv@example.com<br />
							</p>
						</div>

						<div class="col-md-4 footer-newsletter">
							<h4>Our Newsletter</h4>
							<p>
								Tamen quem nulla quae legam multos aute sint culpa legam noster
								magna
							</p>
							<form action="" method="post">
								<input type="email" name="email" /><input
									type="submit"
									value="Subscribe"
								/>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</template>
<script>
export default {
	name: "Footer",
};
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
#footer .footer-top .footer-info {
	margin-bottom: 30px;
}

#footer .footer-top .footer-info h3 {
	font-size: 24px;
	margin: 0 0 20px 0;
	padding: 2px 0 2px 0;
	line-height: 1;
	font-weight: 700;
}

#footer .footer-top .footer-info p {
	font-size: 14px;
	line-height: 24px;
	margin-bottom: 0;
	font-family: "Raleway", sans-serif;
	color: #fff;
}

#footer .footer-top .social-links a.social {
	font-size: 18px;
	display: inline-block;
	background: #1c3733;
	color: #fff;
	line-height: 1;
	padding: 8px 0;
	margin-right: 4px;
	border-radius: 50%;
	text-align: center;
	width: 36px;
	height: 36px;
	transition: 0.3s;
}

#footer .footer-top .social-links a:hover {
	background: #1bac91;
	color: #fff;
	text-decoration: none;
}

#footer .footer-top h4 {
	font-size: 16px;
	font-weight: 600;
	color: #fff;
	position: relative;
	padding-bottom: 12px;
}

#footer .footer-top .footer-links {
	margin-bottom: 10px;
}

#footer .footer-top .footer-links ul {
	list-style: none;
	padding: 0;
	margin: 0;
}

#footer .footer-top .footer-links ul i {
	padding-right: 2px;
	color: #4ae3c6;
	font-size: 18px;
	line-height: 1;
}

#footer .footer-top .footer-links ul li {
	padding: 10px 0;
	display: flex;
	align-items: center;
}

#footer .footer-top .footer-links ul li:first-child {
	padding-top: 0;
}

#footer .footer-top .footer-links ul a {
	color: #fff;
	transition: 0.3s;
	display: inline-block;
	line-height: 1;
}

#footer .footer-top .footer-links ul a:hover {
	color: #34dfbf;
}

#footer .footer-top .footer-newsletter form {
	margin-top: 30px;
	background: #fff;
	padding: 6px 10px;
	position: relative;
	border-radius: 4px 0 0 4px;
}

#footer .footer-top .footer-newsletter form input[type="email"] {
	border: 0;
	padding: 4px;
	width: calc(100% - 110px);
}

#footer .footer-top .footer-newsletter form input[type="submit"] {
	position: absolute;
	top: 0;
	right: -4px;
	bottom: 0;
	border: 0;
	background: none;
	font-size: 16px;
	padding: 0 20px;
	background: #1bac91;
	color: #fff;
	transition: 0.3s;
	border-radius: 0 4px 4px 0;
}

#footer .footer-top .footer-newsletter form input[type="submit"]:hover {
	background: #14806c;
}
</style>
