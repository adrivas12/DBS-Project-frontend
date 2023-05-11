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
                <a href="index.html">
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
            <img src="Images/restaurant_addition1.jpg"/>
        </div>
        <div class="restaurant-image2">
            <img src="Images/restaurant_addition2.jpg"/>
        </div>
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="log_inpage">
            <h2>Register now!</h2>
            <div class="line"></div>
        </div>
        <div class="center1">
            <form method="post" action="owner_profile.php">
                <div class="txt_field1">
                    <input type="text" required>
                    <label>Enter Owner-ID</label>
                </div>
                <div class="txt_field1">
                    <input type="text" required>
                    <label>Enter Restaurant Name</label>
                </div>
                <div class="txt_field1">
                    <input type="password" required>
                    <label>Enter Address</label>
                </div>
                <div class="txt_field1">
                    <input type="text" required>
                    <label>Enter Phone Number</label>
                </div>
                <div class="drop-down">
                    <select name="Cuisine" class="cuisine">
                        <option value="Cuisine">Cuisine</option>
                        <option value="Mexican">Mexican</option>
                        <option value="Italian">Italian</option>
                        <option value="Japanese">Japanese</option>
                        <option value="Chinese">Chinese</option>
                        <option value="Indian">Indian</option>
                        <option value="Thai">Thai</option>
                        <option value="Greek">Greek</option>
                        <option value="Mediterranean">Mediterranean</option>
                        <option value="French">French</option>
                        <option value="Vietnamese">Vietnamese</option>
                      </select>
                </div>
                <div class="drop-down">
                    <select name="Tag-name" class="Tag-Name">
                        <option value="Tag Name">Tag Name</option>
                        <option value="Outdoor Seating">Outdoor Seating</option>
                        <option value="Family-Friendly">Family-Friendly</option>
                        <option value="Romantic">Romantic</option>
                        <option value="Trendy">Trendy</option>
                        <option value="Live Music">Live Music</option>
                        <option value="Vegetarian">Vegetarian</option>
                        <option value="Craft Beer">Craft Beer</option>
                        <option value="Happy Hour">Happy Hour</option>
                        <option value="Brunch">Brunch</option>
                        <option value="Late Night">Late Night</option>
                      </select>
                </div>
                <div class="pass3">
                    <input type="submit" value="Sign Up">
                </div>
            </form>
        </div>
    </body>
</html>
