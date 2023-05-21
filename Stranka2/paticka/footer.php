<!DOCTYPE html>
<html>
  <head>
    <title>Your page title</title>
	<link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
      integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc"
      crossorigin="anonymous"
    />

  </head>
  <body>
	<div class="footer__container">
		<div class="footer__links">
			<div class="footer__link--wrapper">
			<div class="footer__link--items">
				<h2>O nás</h2>
				<a href="onas.html">O nás</a> <a href="/"></a>
				<a href="/"></a> <a href="/"></a>
			</div>
			<div class="footer__link--items">
				<h2>Kontakt</h2>
				<a href="../kontakt/kontakt.php">Kontakt</a> <a href="#about">Podpora</a>
				<a href="https://www.google.sk/maps/place/036+01+Martin/@49.0805811,18.8857385,12z/data=!3m1!4b1!4m5!3m4!1s0x4714f8d963294f8f:0x400f7d1c6971580!8m2!3d49.0616613!4d18.9190235">Mapa</a>
			</div>
			</div>
			<div class="footer__link--wrapper">
			<div class="footer__link--items">
				<h2>Videá</h2>
				<a href="https://www.youtube.com">Youtube</a> <a href="/">Naše videá</a>
			</div>
			</div>
		</div>
		<section class="social__media">
			<div class="social__media--wrap">
			<div class="footer__logo">
			</div>
			<p class="website__rights">© Michal Böhm</p>
			<div class="social__icons">
				<a href="https://www.facebook.com" class="social__icon--link" target="_blank"
				><i class="fab fa-facebook"></i
				></a>
				<a href="https://www.instagram.com" class="social__icon--link"
				><i class="fab fa-instagram"></i
				></a>
				<a href="https://www.youtube.com" class="social__icon--link"
				><i class="fab fa-youtube"></i
				></a>
				<a href="https://linkedin.com" class="social__icon--link"
				><i class="fab fa-linkedin"></i
				></a>
				<a href="https://www.twitter.com" class="social__icon--link"
				><i class="fab fa-twitter"></i
				></a>
			</div>
			</div>
		</section>
		</div>
	</body>

<style>
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: 'Kumbh Sans', sans-serif;
  scroll-behavior: smooth;
}

html, body {
  height: 100%; /* Set the height of the HTML and body element to 100% */
}

.footer__container {
  margin-top: 20px;
  background-color: #6c757d;
  padding: 5rem 0;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 100%;
  max-height: 230px;
  border-top-left-radius: 50px;
  border-top-right-radius: 50px;
}

#footer__logo {
  color: #fff;
  display: flex;
  align-items: center;
  cursor: pointer;
  text-decoration: none;
  font-size: 2rem;
}

.footer__links {
  width: 100%;
  max-width: 1000px;
  display: flex;
  justify-content: center;
}

.footer__link--wrapper {
  display: flex;
}

.footer__link--items {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  margin: 16px;
  text-align: left;
  width: 160px;
  box-sizing: border-box;
}

.footer__link--items h2 {
  margin-bottom: 16px;
  color: #f5bd1f;
}

.footer__link--items a {
  color: #f5bd1f;
  text-decoration: none;
  margin-bottom: 0.5rem;
  transition: 0.3 ease-out;
}

.footer__link--items a:hover {
  color: #5D2689;
  transition: 0.3 ease-out;
}

.social__icon--link {
  color: #f5bd1f;
  font-size: 24px;
}

.social__media {
  max-width: 1000px;
  width: 100%;
}

.social__media--wrap {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 90%;
  max-width: 1000px;
  margin: 20px auto 0 auto;
}

.social__icons {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 240px;
}

.social__icon--link:hover {
  color: #5D2689;
  transition: 0.3s ease-out;
}

.website__rights {
  color: #f5bd1f;
}

  
</style>
</html>