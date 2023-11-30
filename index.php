<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PG-Life</title>

  <?php
  include "includes/head_links.php";
  ?>

  <link rel="stylesheet" href="css/home.css" />


</head>

<body>
  <!-- navbar section -->
  <?php
  include "includes/header.php";
  ?>

  <!-- banner section -->
  <div class="banner-container">
    <h2 class="text-white pb-3">Happiness per Square Foot</h2>
    <form id="search-form" method="get" action="property_list.php">
      <div class="input-group city-search col-md-6 mx-auto">
        <input type="text" class="form-control input-city" id="city" name="city" placeholder="Enter your city to search for PGs" />
        <div class="input-group-append">
          <button type="submit" class="btn btn-secondary">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>
  </div>

  <!-- cities section -->
  <div class="page-container ">
    <h1 class="city-heading ">Major Cities</h1>

    <div class="row">

      <div class="city-card-container col-md">
        <a href="property_list.php?city=Delhi">
          <div class="city-card rounded-circle">
            <img src="img/delhi.png" alt="city-img" class="city-img" />
          </div>
        </a>
      </div>

      <div class="city-card-container col-md">
        <a href="property_list.php?city=Mumbai">
          <div class="city-card rounded-circle">
            <img src="img/mumbai.png" alt="city-img" class="city-img" />
          </div>
        </a>
      </div>

      <div class="city-card-container col-md">
        <a href="property_list.php?city=Bangalore">
          <div class="city-card rounded-circle">
            <img src="img/bangalore.png" alt="city-img" class="city-img" />
          </div>
        </a>
      </div>

      <div class="city-card-container col-md">
        <a href="property_list.php?city=Hyderabad">
          <div class="city-card rounded-circle">
            <img src="img/hyderabad.png" alt="city-img" class="city-img" />
          </div>
        </a>
      </div>
    </div>
  </div>

  <?php
  include "includes/signup_modal.php";
  include "includes/login_modal.php";
  include "includes/footer.php";
  ?>

</body>

</html>