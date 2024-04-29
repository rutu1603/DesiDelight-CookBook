<?php include '../includes/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipur Recipes</title>
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
   <h2 style="text-align: center; margin-top: 20px;">Manipur Recipes</h2>

   <!-- Recipe Wrapper -->
   <div class="recipe-wrapper">
     <!-- Recipe 1: Eromba -->
     <div class="recipe-section">
       <img src="../images/Eromba.jpg" alt="Eromba" class="recipe-image">
       <div class="recipe-details">
         <h2>Eromba</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
           <li>200g boiled vegetables (potatoes, yam, pumpkin)</li>
           <li>50g boiled fish</li>
           <li>2-3 green chilies</li>
           <li>2 tbsp ngari (fermented fish)</li>
           <li>2 tbsp chopped coriander leaves</li>
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
           1. Mash boiled vegetables and fish together.<br>
           2. Add ngari, chopped green chilies, and coriander leaves.<br>
           3. Mix well and serve with rice.
         </p>
       </div>
     </div>

     <!-- Recipe 2: Chamthong -->
     <div class="recipe-section">
       <img src="../images/chamthong.webp" alt="Chamthong" class="recipe-image">
       <div class="recipe-details">
         <h2>Chamthong</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
           <li>200g mixed vegetables (potatoes, carrots, peas)</li>
           <li>100g pork, sliced</li>
           <li>2 tomatoes, chopped</li>
           <li>2-3 green chilies</li>
           <li>1 tbsp ginger-garlic paste</li>
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
           1. Boil mixed vegetables until soft.<br>
           2. In a separate pan, cook sliced pork until browned.<br>
           3. Add chopped tomatoes, green chilies, and ginger-garlic paste to the pan.<br>
           4. Add boiled vegetables and cook until flavors blend.<br>
           5. Serve hot with rice.
         </p>
       </div>
     </div>
   </div>

</body>
</html>
