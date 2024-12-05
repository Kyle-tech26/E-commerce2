<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Tumbler</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
  <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  
  <!-- Christmas Sale Banner -->
  <div id="christmas-banner">
    <span class="blinking-text">🎄 Christmas Sale! Enjoy up to 50% off on select items! 🎄</span>
  </div>

  <!-- Left Side Snowflakes -->
  <div class="snowflake left">❄️</div>
  <div class="snowflake left">❄️</div>
  <div class="snowflake left">❄️</div>
  <div class="snowflake left">❄️</div>
  <div class="snowflake left">❄️</div>
  
  <!-- Right Side Snowflakes -->
  <div class="snowflake right">❄️</div>
  <div class="snowflake right">❄️</div>
  <div class="snowflake right">❄️</div>
  <div class="snowflake right">❄️</div>
  <div class="snowflake right">❄️</div>

  <section id="header">
    <a href="#"><img src="img/logo.png" class="logo" alt=""></a>
    <div>
      <ul id="navbar">
        <li><a href="index.php">Home</a></li>
        <li class="dropdown">
          <a href="Product.php" class="dropbtn">Product</a>
          <ul class="dropdown-content">
            <li><a href="Product1.php">Tumbler</a></li>
            <li><a href="Product2.php">Mug</a></li>
            <li><a href="Product3.php">Bottle</a></li>
          </ul>
        </li>
        <li><a href="Blog.php">Blog</a></li>
        <li><a href="About.php">About</a></li>
        <li><a href="Contact.php">Contact</a></li>
      </ul>
    </div>
  </section>

 <!-- Carousel Container -->
<div class="carousel-container">
  <!-- Add the header.png as a separate image on top of the carousel -->
  <div class="header-image">
      <img src="img/header.png" alt="Header Image">
  </div>

  <div class="carousel-container">
    <div class="carousel">
      <div class="carousel-item">
        <div class="overlay"></div>
        <img src="img/bg6.jpg" alt="Image 1">
      </div>
      <div class="carousel-item">
        <div class="overlay"></div>
        <img src="img/bg2.jpg" alt="Image 2">
      </div>
      <div class="carousel-item">
        <div class="overlay"></div>
        <img src="img/bg3.jpg" alt="Image 3">
      </div>
      <div class="carousel-item">
        <div class="overlay"></div>
        <img src="img/bg4.png" alt="Image 4">
      </div>
    </div>
  </div>
</div>

    



  

  <!-- Main Content Section -->
  <section class="trending-product" id="trending">
    <div class="center-text">
      <h2>Our Trending <Span>Product</Span></h2>
    </div>
    <div class="products">
      <div class="row">
        <!-- Product 1 -->
        <div class="product-card" onclick="window.location.href='basco.php'">
          <img src="img/tumbler1.jpg" alt="Product 1">
          <div class="product-text">
            <h5>Sale</h5>
          </div>
          <div class="heart-icon">
            <i class='bx bx-heart'></i>
          </div>
          <div class="rating">
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bxs-star-half'></i>
          </div>
          <div class="price">
            <h4>Half Running Set</h4>
            <p>$99 - $150</p>
          </div>
        </div>
        
        <!-- Product 2 -->
        <div class="product-card" onclick="window.location.href='basco.php'">
          <img src="img/tumbler2.jpg" alt="Product 2">
          <div class="product-text">
            <h5>Sale</h5>
          </div>
          <div class="heart-icon">
            <i class='bx bx-heart'></i>
          </div>
          <div class="rating">
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bxs-star-half'></i>
          </div>
          <div class="price">
            <h4>Premium Tumbler</h4>
            <p>$80 - $120</p>
          </div>
        </div>

        <!-- Product 3 -->
        <div class="product-card" onclick="window.location.href='basco.php'">
          <img src="img/tumbler3.jpg" alt="Product 3">
          <div class="product-text">
            <h5>Sale</h5>
          </div>
          <div class="heart-icon">
            <i class='bx bx-heart'></i>
          </div>
          <div class="rating">
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bxs-star-half'></i>
          </div>
          <div class="price">
            <h4>Sporty Flask</h4>
            <p>$65 - $90</p>
          </div>
        </div>
        <div class="product-card" onclick="window.location.href='basco.php'">
          <img src="img/tumbler4.jpg" alt="Product 3">
          <div class="product-text">
            <h5>Sale</h5>
          </div>
          <div class="heart-icon">
            <i class='bx bx-heart'></i>
          </div>
          <div class="rating">
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bxs-star-half'></i>
          </div>
          <div class="price">
            <h4>Sporty Flask</h4>
            <p>$65 - $90</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Special Offer Section -->
  <div class="offer">
    <div class="small-container">
      <div class="row">
        <div class="col-2">
          <img src="img/hightech.png" class="offer-img">
        </div>
        <div class="col-2">
          <p>Exclusively Available on E-Tumbler Store</p>
          <h4>Designed to be used on-the-go, the Ember Travel Mug 2 does more than simply keep your coffee hot.
             Our smart heated travel mug allows you to set an exact drinking temperature and keeps it there for up to 3 hours,
              so your coffee is never too hot, or too cold.</h4>
        </div>
      </div>
    </div>
  </div>

  <!-- User Reviews Section -->
  <div class="review-section">
    <h2>User <span>Reviews</span></h2>
    <div class="reviews">
      <!-- Review 1 -->
      <div class="review-box">
        <div class="user-info">
          <img src="img/user1.jpg" alt="User 1" class="user-avatar">
          <div class="user-details">
            <h4 class="user-name">John Doe</h4>
            <p class="review-date">October 21, 2024</p>
          </div>
        </div>
        <div class="rating">
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
          <span class="star">&#9734;</span> <!-- Empty star -->
        </div>
        <p class="review-text">Great product! It keeps my coffee hot for hours, and the design is very sleek. Highly recommend!</p>
      </div>

      <!-- Review 2 -->
      <div class="review-box">
        <div class="user-info">
          <img src="img/user2.png" alt="User 2" class="user-avatar">
          <div class="user-details">
            <h4 class="user-name">Jane Smith</h4>
            <p class="review-date">October 22, 2024</p>
          </div>
        </div>
        <div class="rating">
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span> <!-- Full stars -->
        </div>
        <p class="review-text">I love the Ember Travel Mug! The temperature control feature is amazing, and it fits perfectly in my bag.</p>
      </div>

      <!-- Review 3 -->
      <div class="review-box">
        <div class="user-info">
          <img src="img/user3.jpg" alt="User 3" class="user-avatar">
          <div class="user-details">
            <h4 class="user-name">Alice Johnson</h4>
            <p class="review-date">October 23, 2024</p>
          </div>
        </div>
        <div class="rating">
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
          <span class="star">&#9733;</span>
          <span class="star">&#9734;</span>
          <span class="star">&#9734;</span> <!-- Empty stars -->
        </div>
        <p class="review-text">Nice mug, but the lid could be more secure. It sometimes leaks when tilted.</p>
      </div>
    </div>
  </div>

  <!-- Footer Section -->
  <footer class="footer">
    <div class="waves">
      <div class="wave" id="wave1"></div>
      <div class="wave" id="wave2"></div>
      <div class="wave" id="wave3"></div>
      <div class="wave" id="wave4"></div>
    </div>
    <ul class="social-icon">
      <li class="social-icon__item"><a class="social-icon__link" href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
    </ul>
    <ul class="menu">
      <li class="menu__item"><a class="menu__link" href="#">Home</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Product</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Blog</a></li>
      <li class="menu__item"><a class="menu__link" href="#">About</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Contact</a></li>
    </ul>
    <p>&copy;2024 E-Tumbler | All Rights Reserved</p>
  </footer>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="script.js"></script>
</body>

</html>
