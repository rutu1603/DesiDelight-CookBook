<?php include '../includes/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punjab Recipes</title>
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
   <h2 style="text-align: center; margin-top: 20px;">Punjab Recipes</h2>

   <!-- Recipe Wrapper -->
   <div class="recipe-wrapper">
     <!-- Recipe 1: Sarson da Saag -->
     <div class="recipe-section">
       <img src="../images/Sarson da Saag.JPG" alt="Sarson da Saag" class="recipe-image">
       <div class="recipe-details">
         <h2>Sarson da Saag</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
           <li>500g mustard greens (sarson)</li>
           <li>250g spinach leaves</li>
           <li>2 green chilies, chopped</li>
           <li>1 onion, chopped</li>
           <li>1 tsp ginger-garlic paste</li>
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
           1. Wash mustard greens and spinach leaves thoroughly and chop them.<br>
           2. Boil the chopped greens with green chilies until soft.<br>
           3. Heat oil in a pan, add chopped onions and ginger-garlic paste, and sauté until golden brown.<br>
           4. Add the boiled greens to the pan, mix well, and simmer for a few minutes.<br>
           5. Serve hot with makki di roti.
         </p>
       </div>
     </div>

     <!-- Recipe 2: Makki di Roti -->
     <div class="recipe-section">
       <img src="../images/Makki di Roti.jpeg.jpg" alt="Makki di Roti" class="recipe-image">
       <div class="recipe-details">
         <h2>Makki di Roti</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
           <li>2 cups maize flour (makki ka atta)</li>
           <li>Water, as needed</li>
           <li>Salt, to taste</li>
           <li>Ghee (clarified butter), for cooking</li>
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
           1. Mix maize flour and salt in a bowl.<br>
           2. Add water gradually and knead into a firm dough.<br>
           3. Divide the dough into small balls and flatten them into thin discs.<br>
           4. Heat a griddle (tawa) and cook the rotis on both sides until golden brown, using ghee.<br>
           5. Serve hot with sarson da saag.
         </p>
       </div>
     </div>
   </div>


</body>
</html>
