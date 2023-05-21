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
  <nav class="navbar">
  <div class="navbar__container">
    <a href="../hlavna_stranka/index.php" id="navbar__logo">
      <img src="../obrazky/LOGO.png" alt="Logo" style="border-radius: 10px;">
    </a>
        <form class="navbar__search-form" action="search.php" method="get">
          <input type="text" placeholder="Hľadať" name="query" class="navbar__search-input">
          <button type="submit" class="navbar__search-button">
            <i class="fas fa-search"></i>
          </button>
        </form>
        <div class="navbar__toggle" id="mobile-menu">
          <span class="bar"></span> <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <ul class="navbar__menu">
          <li class="navbar__item">
            <a href="../hlavna_stranka/index.php" class="navbar__links" id="home-page">Domov</a>
            <i class="uis uis-house-user"></i>
          </li>
          <li class="navbar__item">
            <a href="../kontakt/kontakt.php" class="navbar__links" id="kontakty-page">Kontakt</a>
          </li>
          <li class="navbar__item">
            <a href="../obchod/obchod_3Dmodely.php" class="navbar__links" id="ponuka-page">Obchod</a>
          </li>
          <li class="navbar__btn">
            <a href="../prihlasovaci_system/register_form.php" class="button" id="signup">Registrácia</a>
          </li>
          <a href="kosik.php" class="navbar__cart">
            <i class="fas fa-shopping-cart"></i>
          </a>
        </ul>
      </div>
    </nav>


<style>

body {
      background: url('../obrazky/pozadie.png') no-repeat center center fixed;
      background-size: cover;
   }

* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: 'Kumbh Sans', sans-serif;
  scroll-behavior: smooth;
}

.navbar {
  background: #6c757d;
  height: 80px;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 1.2rem;
  position: sticky;
  top: 0;
  z-index: 999;
  border-radius: 20px;
  overflow: hidden;
}

.navbar__container {
  display: flex;
  justify-content: space-between;
  height: 80px;
  z-index: 1;
  width: 100%;
  max-width: 1300px;
  margin: 0 auto;
  padding: 0 50px;
}


.navbar__menu {
  display: flex;
  align-items: center;
  list-style: none;
}

.navbar__item {
  height: 80px;
}

.navbar__links {
  color: #f5bd1f;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 125px;
  text-decoration: none;
  height: 100%;
  transition: all 0.3s ease;
}

#navbar__logo img {
  width: 150px;
  height: 70px;
  margin-right: 10px;
  float: left;
  align-items: center;
  margin-top: 5px;
  margin-left: 40px;
}

.navbar__btn {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 1rem;
  width: 100%;
}

.button {
  display: flex;
  justify-content: center;
  align-items: center;
  text-decoration: none;
  padding: 10px 20px;
  height: 100%;
  width: 100%;
  border: none;
  outline: none;
  border-radius: 4px;
  background: #000000;
  background: -webkit-linear-gradient(to right, #5D2689, #4f2075, #421b61);
  background: linear-gradient(to right, #5D2689, #4f2075, #421b61);
  color: #f5bd1f;
  transition: all 0.3s ease;
}

.button:hover {
  background: #000000;
  background: -webkit-linear-gradient(to right, #FFE863, #FFD93D, #F5BD1F);
  background: linear-gradient(to right, #FFE863, #FFD93D, #F5BD1F);
  color: #5D2689;
}

.navbar__links:hover {
  color: #5D2689;
  transition: all 0.3s ease;
}

.navbar__cart {
  color: #f5bd1f;
  margin-top: auto;
  margin-bottom: auto;
  margin-right: 50px;
  font-size: 1.5rem;
  margin-left: 20px;
}

.navbar__cart:hover {
  color: #5D2689;
}

.navbar__search-form {
  display: flex;
  align-items: center;
}


.navbar__search-input {
  padding: 0.5rem;
  border: none;
  border-radius: 4px;
  margin-right: 0.5rem;
  
}

.navbar__search-button {
  border: none;
  border-radius: 4px;
  padding: 0.5rem;
  background: linear-gradient(to right, #5D2689, #4f2075, #421b61);
  color: #F5BD1F;
  cursor: pointer;
}

.navbar__search-button:hover {
  background: linear-gradient(to right, #FFE863, #FFD93D, #F5BD1F);
  background-color: #f5bd1f;
  color: #5D2689;
}

.navbar__search-input:focus {
  outline: none;
}


</style>
</html>