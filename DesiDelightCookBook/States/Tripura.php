<?php include '../includes/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tripura</title>
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
   <h2 style="text-align: center; margin-top: 20px;">Tripura Recipes</h2>

   <!-- Recipe Wrapper -->
   <div class="recipe-wrapper">
     <!-- Recipe 1: Bread Aloo Pakora -->
     <div class="recipe-section">
       <img src="../images/bread_aloo_pakora.jpeg" alt="Bread Aloo Pakora" class="recipe-image">
       <div class="recipe-details">
         <h2>Bread Aloo Pakora</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
           <li>4 slices of bread</li>
           <li>2 potatoes, boiled and mashed</li>
           <li>1 onion, finely chopped</li>
           <li>2 green chilies, finely chopped</li>
           <li>1/2 tsp cumin seeds</li>
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
           1. In a bowl, mix mashed potatoes with chopped onions, green chilies, cumin seeds, and salt.<br>
           2. Take a slice of bread, place a portion of the potato mixture on it, and cover it with another slice.<br>
           3. Cut the bread slices into desired shapes (triangles or squares).<br>
           4. Heat oil in a pan for deep frying.<br>
           5. Dip each bread sandwich in gram flour batter and deep fry until golden brown.<br>
           6. Serve hot with chutney or sauce.
         </p>
       </div>
     </div>

     <!-- Recipe 2: Chakwi -->
     <div class="recipe-section">
       <img src="../images/chakhwi.jpg" alt="Chakwi" class="recipe-image">
       <div class="recipe-details">
         <h2>Chakwi</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
           <li>2 cups rice flour</li>
           <li>1 cup jaggery, grated</li>
           <li>1/2 cup coconut, grated</li>
           <li>1/2 tsp cardamom powder</li>
           <li>Water, as needed</li>
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
           1. In a mixing bowl, combine rice flour, grated jaggery, grated coconut, and cardamom powder.<br>
           2. Gradually add water and knead into a smooth dough.<br>
           3. Divide the dough into small portions and shape them into cylindrical or oval shapes.<br>
           4. Steam the shaped dough in a steamer for about 15-20 minutes.<br>
           5. Once cooked, let them cool down slightly.<br>
           6. Serve Chakwi warm as a snack or dessert.
         </p>
       </div>
     </div>
   </div>





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
