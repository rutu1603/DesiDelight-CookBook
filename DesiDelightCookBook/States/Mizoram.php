<?php include '../includes/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mizoram Recipes</title>
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
   <h2 style="text-align: center; margin-top: 20px;">Mizoram Recipes</h2>

   <!-- Recipe Wrapper -->
   <div class="recipe-wrapper">
     <!-- Recipe 1: Bai -->
     <div class="recipe-section">
       <img src="../images/Bai.webp" alt="Bai" class="recipe-image">
       <div class="recipe-details">
         <h2>Bai</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
           <li>500g pork, diced</li>
           <li>2 cups spinach, chopped</li>
           <li>1 cup mustard greens, chopped</li>
           <li>2 tomatoes, chopped</li>
           <li>2-3 green chilies, chopped</li>
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
           1. Cook diced pork in a pot until browned.<br>
           2. Add chopped spinach, mustard greens, tomatoes, and green chilies to the pot.<br>
           3. Add water and bring it to a boil.<br>
           4. Simmer until the pork is tender and the greens are cooked.<br>
           5. Serve hot with rice.
         </p>
       </div>
     </div>

     <!-- Recipe 2: Arsa Buhchiar -->
     <div class="recipe-section">
       <img src="../images/Arsa Buhchiar.jpg" alt="Arsa Buhchiar" class="recipe-image">
       <div class="recipe-details">
         <h2>Arsa Buhchiar</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
           <li>2 cups glutinous rice flour</li>
           <li>1/2 cup jaggery, grated</li>
           <li>1/4 cup water</li>
           <li>1/4 cup sesame seeds</li>
           <li>Oil, for frying</li>
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
           1. Mix glutinous rice flour with grated jaggery and water to form a dough.<br>
           2. Roll the dough into small balls and flatten them into discs.<br>
           3. Sprinkle sesame seeds on top of the discs and press gently.<br>
           4. Heat oil in a pan and fry the discs until golden brown.<br>
           5. Serve hot or at room temperature.
         </p>
       </div>
     </div>
   </div>

</body>
</html>
