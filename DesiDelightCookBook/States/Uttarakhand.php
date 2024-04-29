<?php include '../includes/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uttarakhand</title>
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="../style.css">
    <style>
     .container {
      height: 200vh; /* Set a height taller than the viewport */
      overflow-y: auto; /* Enable vertical scrolling */
    }

    .recipe-wrapper {
      display: flex;
      justify-content: space-around;
      align-items: flex-start;
      flex-wrap: wrap;
      margin-top: 50px; /* Adjust margin as needed */
    }

    .recipe-section {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    .recipe-details {
      margin-top: 20px; /* Adjust margin as needed */
      text-align: center;
    }

    .recipe-image {
      border-radius: 50%; /* Makes the image round */
      width: 200px; /* Set your desired width */
      height: 200px; /* Set your desired height */
      object-fit: cover; /* Ensures the image covers the entire circular area */
    }

    .ingredients,
    .procedure {
      text-align: left;
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
      <a href="../login.php" class="loga" ><button class="login_button">Login</button></a>
      
    </header>

    <div class="navbar">
      <nav>
        <ul >
        <li><a href="../index.php">Home</a></li>
          <li><a href="../recipes.php" class="active">Recipes</a></li>
          <li><a href="../search.php">Search</a></li>
          <li><a href="../sign_up.php">Signup</a></li>
        </ul>
      </nav>
    </div>
  </div>
  <hr style="border-top: 8px solid #bbb; border-radius: 5px;">

  
   <!-- State Name -->
   <h2 style="text-align: center; margin-top: 20px;">Uttarakhand Recipes</h2>

   <!-- Recipe Wrapper -->
   <div class="recipe-wrapper">
     <!-- Recipe 1 -->
     <div class="recipe-section">
       <img src="../images/phaanu.avif" alt="Phaanu" class="recipe-image">
       <div class="recipe-details">
         <h2>Phaanu</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
           <li>1 cup whole urad dal (black gram lentils)</li>
           <li>1/4 cup rajma (kidney beans)</li>
           <li>2 onions, finely chopped</li>
           <li>2 tomatoes, chopped</li>
           <li>2-3 green chilies, finely chopped</li>
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
           1. Soak whole urad dal and rajma separately overnight or for at least 6-8 hours.<br>
           2. Pressure cook soaked dal and rajma until soft and mushy.<br>
           3. Heat oil in a pan, add chopped onions, green chilies, and sauté until golden brown.<br>
           4. Add chopped tomatoes and cook until soft.<br>
           5. Add cooked dal and rajma to the pan, mix well, and simmer for 10-15 minutes.<br>
           6. Serve hot with rice or roti.
         </p>
       </div>
     </div>

     <!-- Recipe 2 -->
     <div class="recipe-section">
       <img src="../images/aloo kulcha.jpg" alt="Aalu Dubkulcha" class="recipe-image">
       <div class="recipe-details">
         <h2>Aalu Dubkulcha</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
           <li>2 cups wheat flour</li>
           <li>4 potatoes, boiled and mashed</li>
           <li>1 onion, finely chopped</li>
           <li>2 green chilies, finely chopped</li>
           <li>1 tsp cumin seeds</li>
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
           1. Mix wheat flour with water, knead into a dough, and let it rest for 30 minutes.<br>
           2. Divide the dough into small balls and roll them out into flat discs.<br>
           3. Mix mashed potatoes with chopped onions, green chilies, cumin seeds, and salt.<br>
           4. Place a portion of the potato mixture in the center of each rolled-out disc and seal the edges.<br>
           5. Roll out the stuffed discs into flatbreads (parathas).<br>
           6. Cook the parathas on a hot griddle until golden brown on both sides.<br>
           7. Serve hot with yogurt or pickle.
         </p>
       </div>
     </div>
   </div>

    <footer>
      <p>“Yatha annam tatha manam – What you eat, you become”</p>
      <p>Thank you for visiting! 🙏</p>
  </footer>



</body>
<script>

  
  const activePage = window.location.pathname;
  const navLinks = document.querySelectorAll('nav a').forEach(link => {
  if(link.href.includes(${activePage})){
    link.classList.add('active');
    console.log(link);
  }
})
</script>
</html>