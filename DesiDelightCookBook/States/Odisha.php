<?php include '../includes/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odisha Recipes</title>
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
   <h2 style="text-align: center; margin-top: 20px;">Odisha Recipes</h2>

   <!-- Recipe Wrapper -->
   <div class="recipe-wrapper">
     <!-- Recipe 1: Pakhala Bhata -->
     <div class="recipe-section">
       <img src="../images/Pakhala Bhata.png" alt="Pakhala Bhata" class="recipe-image">
       <div class="recipe-details">
         <h2>Pakhala Bhata</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
           <li>2 cups cooked rice</li>
           <li>3 cups water</li>
           <li>1/4 cup yogurt</li>
           <li>1/2 tsp mustard seeds</li>
           <li>2-3 green chilies, chopped</li>
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
           1. Cook rice and let it cool down to room temperature.<br>
           2. In a bowl, mix cooked rice and yogurt.<br>
           3. Add water and mix well to make a watery consistency.<br>
           4. Heat oil in a pan, add mustard seeds and green chilies, and temper the pakhala.<br>
           5. Serve chilled with sides like fried fish or fried vegetables.
         </p>
       </div>
     </div>

     <!-- Recipe 2: Chhena Poda -->
     <div class="recipe-section">
       <img src="../images/Chhena Poda.jpg" alt="Chhena Poda" class="recipe-image">
       <div class="recipe-details">
         <h2>Chhena Poda</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
           <li>1 cup chhena (paneer)</li>
           <li>1 cup sugar</li>
           <li>1/2 cup semolina (sooji)</li>
           <li>1/4 cup ghee (clarified butter)</li>
           <li>1/4 tsp cardamom powder</li>
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
           1. Crumble chhena in a bowl and mix it with sugar, semolina, ghee, and cardamom powder.<br>
           2. Preheat the oven to 180°C (350°F).<br>
           3. Grease a baking tray with ghee and spread the chhena mixture evenly.<br>
           4. Bake for about 45-50 minutes until the top turns golden brown.<br>
           5. Let it cool down, then cut into pieces and serve.
         </p>
       </div>
     </div>
   </div>

</body>
</html>
