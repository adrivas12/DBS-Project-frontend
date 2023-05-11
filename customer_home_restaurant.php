<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" /> 
  <title>Home page</title>

  <link href="css/style1.css" rel="stylesheet" />
</head>

<body class="customer_home_restaurant">
  <nav class="navbar navbar-expand-lg bg-body-tertiary ">
    <div class="container-fluid">
        <a href="index.php">
        <img src="Images/GoodFood.png" alt=""/>
        </a>
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
            <a class="nav-link" aria-current="page" href="owner_profile.php">Home</a>
            <a class="nav-link1" href="faqs.php">FAQs</a>
        </ul>
      </div>
    </div>
  </nav>
  <div class="btn">
    <h3 class="h3">Do you like this place? <br> Add it to your liked list</h3>
    <button class="btn1"><img src="Images/thumbs_up.jpg"/></button>
  </div>
  <div class="text">
    <h3>Restaurant Name: </h3>
    <h3>Address: </h3>
    <h4>Contact Number: </h4>
    <h3>Menu: </h3>
    <h3>Cuisine: </h3>
    <h3>Rating: </h3>
    <input type="radio" id="1" name="1" value="1">
    <label for="1">1</label>
    <input type="radio" id="2" name="2" value="2">
    <label for="2">2</label>
    <input type="radio" id="3" name="3" value="3">
    <label for="3">3</label>
    <input type="radio" id="4" name="4" value="4">
    <label for="4">4</label>
    <input type="radio" id="5" name="5" value="4">
    <label for="5">5</label>
    <h3>What is your opinion on this restaurant?</h3>
    <textarea class="text-area"></textarea>
    <div class="reserve">
        <h3>Reserve a seat for your next visit</h3>
        <a href="reserve.php">
            <button class="btn">Click to reserve</button>
        </a>
      </div>
  </div>
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>

</body>

</html>