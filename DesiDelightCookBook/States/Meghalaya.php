<?php include '../includes/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meghalaya Recipes</title>
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
   <h2 style="text-align: center; margin-top: 20px;">Meghalaya Recipes</h2>

   <!-- Recipe Wrapper -->
   <div class="recipe-wrapper">
     <!-- Recipe 1: Jadoh -->
     <div class="recipe-section">
       <img src="../images/jadoh.jpg" alt="Jadoh" class="recipe-image">
       <div class="recipe-details">
         <h2>Jadoh</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
           <li>1 cup rice</li>
           <li>200g pork, diced</li>
           <li>2 onions, chopped</li>
           <li>2-3 green chilies, chopped</li>
           <li>2 tbsp ginger-garlic paste</li>
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
           1. Cook rice in a pot until done.<br>
           2. In a separate pot, cook diced pork with chopped onions, green chilies, and ginger-garlic paste until browned.<br>
           3. Add cooked rice to the pot with pork and mix well.<br>
           4. Serve hot.
         </p>
       </div>
     </div>

     <!-- Recipe 2: Dohneiiong -->
     <div class="recipe-section">
       <img src="../images/dohneiiong.jpg" alt="Dohneiiong" class="recipe-image">
       <div class="recipe-details">
         <h2>Dohneiiong</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
           <li>500g pork belly, sliced</li>
           <li>1 cup black sesame seeds</li>
           <li>5-6 dried red chilies</li>
           <li>2 tbsp ginger-garlic paste</li>
           <li>Salt, to taste</li>
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
           1. Dry roast black sesame seeds until fragrant.<br>
           2. Grind the roasted sesame seeds and dried red chilies into a fine powder.<br>
           3. Marinate sliced pork belly with ginger-garlic paste, salt, and the ground sesame-chili powder.<br>
           4. Cook the marinated pork in a pan until browned and cooked through.<br>
           5. Serve hot with rice.
         </p>
       </div>
     </div>
   </div>


</body>
</html>
