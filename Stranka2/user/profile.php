<?php
session_start();
include('../hlavicka/header.php');
// @include 'config.php';
?>

<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <!-- Left Side Menu Bar -->
            <div class="profile-menu">
                <ul>
                    <li><a href="#wishlist">Zoznam prianí</a></li>
                    <li><a href="#order-history">História objednávok</a></li>
                    <li><a href="#account-settings">Nastavenia účtu</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-9">
            <!-- Main Content Area -->
            <div class="main-content">
                <div class="profile-section">
                    <!-- Profile Picture -->
                    <div class="profile-picture">
                        <img src="../obrazky/profil.png" alt="Profilovy_obrazok">
                    </div>
                    <!-- Profile Information -->
                    <div class="profile-info">
                        <h2>Profil</h2>
                        <!-- Add your profile information here -->
                        <p>Meno: Test1</p>
                        <p>Adresa: Bystrička</p>
                        <p>Telefón: 123456789</p>
                        <p>Email: test1@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="height: 100px;"></div>
<?php
// Include footer
include('../paticka/footer.php');
?>

<style>

    

    .container {
        margin-top: 100px;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
    }

    .col-lg-3 {
        margin-right: 30px;
    }

    .col-lg-9 {
        flex: 0 0 75%;
        max-width: 75%;
    }

    .profile-menu {
        background-color: #6c757d;
        padding: 10px;
        border-radius: 5px;
        height: 100%;
    }

    .profile-menu ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .profile-menu ul li {
        margin-bottom: 10px;
    }

    .profile-menu ul li a {
        text-decoration: none;
        color: #f5bd1f;
    }

    .profile-menu ul li a:hover {
        text-decoration: none;
        color: #5D2689;
    }

    .main-content {
        padding: 20px;
        background-color: #6c757d;
        border-radius: 5px;
        color: #f5bd1f;
    }
    

    .profile-section {
        display: flex;
        align-items: center;
    }

    .profile-picture {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    }

    .profile-picture img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    }

    .profile-info {
        font-size: 18px;
        margin-left: 40px;
    }

    h2 {
    margin-bottom: 10px; 
}
</style>
