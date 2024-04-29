<?php include '../includes/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sikkim Recipes</title>
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
   <h2 style="text-align: center; margin-top: 20px;">Sikkim Recipes</h2>

   <!-- Recipe Wrapper -->
   <div class="recipe-wrapper">
     <!-- Recipe 1: Gundruk -->
     <div class="recipe-section">
       <img src="../images/Gundruk.jpeg" alt="Gundruk" class="recipe-image">
       <div class="recipe-details">
         <h2>Gundruk</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
           <li>1 kg green leafy vegetables (mustard greens, radish leaves, etc.)</li>
           <li>1 tbsp salt</li>
           <li>Water, as needed</li>
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
           1. Wash the green leafy vegetables thoroughly and chop them.<br>
           2. Boil water in a large pot and blanch the chopped vegetables for a few minutes.<br>
           3. Drain the water and spread the blanched vegetables on a clean cloth to dry under the sun.<br>
           4. Once dried, sprinkle salt over the vegetables and tightly pack them in an airtight container.<br>
           5. Keep the container in a warm place for fermentation for 2-3 days.<br>
           6. Gundruk is ready to use in soups, stews, and other dishes.
         </p>
       </div>
     </div>

     <!-- Recipe 2: Momos -->
     <div class="recipe-section">
       <img src="../images/Momos.cms" alt="Momos" class="recipe-image">
       <div class="recipe-details">
         <h2>Momos</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
           <li>1 cup all-purpose flour</li>
           <li>1/2 cup water</li>
           <li>200g minced meat (chicken, pork, or beef)</li>
           <li>1 onion, finely chopped</li>
           <li>1/2 cup cabbage, shredded</li>
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
           1. Mix all-purpose flour and water to make a soft dough.<br>
           2. Divide the dough into small balls and roll them out into thin circles.<br>
           3. In a bowl, mix minced meat, chopped onions, shredded cabbage, and salt.<br>
           4. Place a spoonful of the meat mixture in the center of each dough circle.<br>
           5. Fold the dough over the filling to form a half-moon shape and seal the edges.<br>
           6. Steam the momos in a steamer for 10-15 minutes until cooked.<br>
           7. Serve hot with dipping sauce.
         </p>
       </div>
     </div>
   </div>

</body>
</html>
