<?php include "includes/connection.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wlcome to desi DesiDelightCookBook</title>
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="style.css">
    <style>
     .logo{
      width: 300px;
      border-radius: 50%;
      margin-top:5% ;
      margin-left: 40%;
     }
     .WelcomePara{
      width: 1000px;
      height: 200px;
      padding: 40px;
      font-size: 30px;
      background-color: antiquewhite;
      margin-left: 5%;
      margin-top: 5%;
      margin-bottom: 8%;
      border: 3px;
      border-radius: 15%;
      text-align: center;
     }


    </style>
</head>
<body>
  <div class="head_nav">
    <header class="heading">
      <h1 style="color: orange;">DesiDelightCookBook</h1>
      <div class="search-container">
        <form action="">
          <input class="search-input" placeholder="Search Recipies" type="search">
          <span class=" search-icon material-symbols-outlined">search</span>
        </form>
      </div>
      <a href="login.php" class="loga" ><button class="login_button">Login</button></a>
      <a href="logout.php" class="logout" ><button class="login_button">Logout</button></a>
      
    </header>

    <div class="navbar">
      <nav>
        <ul>
        <li><a href="index.php">Home</a></li>
          <li><a href="recipes.php" class="active">Recipes</a></li>
          <li><a href="search.php">Search</a></li>
          <li><a href="sign_up.php">Signup</a></li>
        </ul>
      </nav>
    </div>
  </div>
  <hr style="border-top: 8px solid #bbb; border-radius: 5px;">

  
   <img src="images/logo.jpg" class="logo" alt="logo">
   <p class="WelcomePara">Welcome to the Desi Delight Cookbook📖, where every recipe🫕 tells a story of tradition, flavour, and the vibrant culinary heritage of India. Explore our collection of mouthwatering🤤 dishes and embark on a delightful journey through the rich tapestry of Indian cuisine. Get ready 🧑🏽‍🍳 to tantalize your taste buds and create unforgettable culinary experiences right in your kitchen!</p>

    <footer>
      <p>“Yatha annam tatha manam – What you eat, you become”</p>
      <p>Thank you for visiting! 🙏</p>
  </footer>



</body>
<script>

  
  const activePage = window.location.pathname;
  const navLinks = document.querySelectorAll('nav a').forEach(link => {
  if(link.href.includes(`${activePage}`)){
    link.classList.add('active');
    console.log(link);
  }
})
</script>
</html>