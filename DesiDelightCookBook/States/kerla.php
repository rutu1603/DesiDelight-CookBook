<?php include '../includes/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kerla</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
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
          <input class="search-input" placeholder="Search Recipes" type="search">
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
   <h2 style="text-align: center; margin-top: 20px;">Kerala Recipes</h2>

   <!-- Recipe Wrapper -->
   <div class="recipe-wrapper">
     <!-- Recipe 1 -->
     <div class="recipe-section">
       <img src="../images/Appam with Stew.jpg" alt="Rasgulla" class="recipe-image">
       <div class="recipe-details">
         <h2>Appam with Stew</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
          <li>Rice flour</li>
          <li>Coconut milk</li>
          <li>Yeast</li>
          <li>Sugar</li>
          <li>Salt</li>
          <li>Mixed vegetables (carrots, potatoes, peas)</li>
          <li>Coconut oil</li>
          <li>Spices (cinnamon, cloves)</li>
         
        
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
            1. Mix rice flour, coconut milk, yeast, sugar, and salt to form a batter.<br>
            2. Let the batter ferment for a few hours until it rises.<br>
            3. Heat coconut oil in a pan, add spices, and sauté mixed vegetables.<br>
            4. Add coconut milk and simmer until vegetables are cooked.<br>
            5. Serve hot with appam.<br>
         </p>
       </div>
     </div>

     <!-- Recipe 2 -->
     <div class="recipe-section">
       <img src="../images/Avial.jpg" alt="Machher Jhol" class="recipe-image">
       <div class="recipe-details">
         <h2>Avial</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
            <li>Mixed vegetables (carrots, beans, pumpkin, drumsticks)</li>
            <li>Coconut</li>
            <li>Yogurt</li>
            <li>Curry leaves</li>
            <li>Mustard seeds</li>
            <li>Green chilies</li>
            <li>Turmeric powder</li>
            <li>Salt</li>
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
            1. Cook mixed vegetables until tender.<br>
            2. Grind coconut, green chilies, and curry leaves to a fine paste.<br>
            3. Mix the paste with yogurt and turmeric powder.<br>
            4. Add cooked vegetables and simmer until flavors blend.<br>
            5. Temper with mustard seeds and curry leaves before serving.<br>
         </p>
       </div>
     </div>
   </div>

    

</body>
</html>