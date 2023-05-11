<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="css/style1.css">
    </head>
    <body class="restaurant_addition">
        <nav class="navbar navbar-expand-lg bg-body-tertiary ">
            <div class="container-fluid">
                <a href="index.php">
                <img src="Images/GoodFood.png" alt=""/>
                </a>
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link1" href="faqs.php">FAQs</a>
                </ul>
              </div>
            </div>
          </nav>
        <div class="restaurant-image1">
            <img src="Images/reservation_rest1.jpg"/>
        </div>
        <div class="restaurant-image2">
            <img src="Images/reservation_rest2.jpg"/>
        </div>
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="log_inpage1">
            <h2>Reserve a seat in your favourite <br>restaurant now</h2>
            <div class="line"></div>
        </div>
        <div class="center1">
            <form method="post" action="owner_profile.php">
                <div class="txt_field1">
                    <input type="text" required>
                    <label>Enter date(yyyy/mm/dd)</label>
                </div>
                <div class="txt_field1">
                    <input type="text" required>
                    <label>Enter Number of guests</label>
                </div>
                <div class="pass3">
                    <input type="submit" value="Sign Up">
                </div>
            </form>
        </div>
    </body>
</html>
