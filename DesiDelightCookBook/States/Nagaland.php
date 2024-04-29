<?php include '../includes/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nagaland Recipes</title>
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
   <h2 style="text-align: center; margin-top: 20px;">Nagaland Recipes</h2>

   <!-- Recipe Wrapper -->
   <div class="recipe-wrapper">
     <!-- Recipe 1: Axone -->
     <div class="recipe-section">
       <img src="../images/axone.jpg" alt="Axone" class="recipe-image">
       <div class="recipe-details">
         <h2>Axone</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
           <li>500g soybeans</li>
           <li>Water</li>
           <li>Salt, to taste</li>
           <li>Bamboo leaves, for fermentation</li>
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
           1. Soak soybeans overnight in water.<br>
           2. Drain the water and grind the soybeans to a coarse paste.<br>
           3. Add salt and mix well.<br>
           4. Wrap the mixture in bamboo leaves and tie securely.<br>
           5. Ferment the wrapped mixture for about 7 days.<br>
           6. Unwrap and steam the fermented mixture before serving.
         </p>
       </div>
     </div>

     <!-- Recipe 2: Smoked Pork with Bamboo Shoot -->
     <div class="recipe-section">
       <img src="../images/Smoked Pork with Bamboo Shoot.jpg" alt="Smoked Pork with Bamboo Shoot" class="recipe-image">
       <div class="recipe-details">
         <h2>Smoked Pork with Bamboo Shoot</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
           <li>500g smoked pork</li>
           <li>200g bamboo shoot, sliced</li>
           <li>2-3 green chilies, slit</li>
           <li>1 onion, sliced</li>
           <li>Salt, to taste</li>
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
           1. Heat a pan, add smoked pork, and cook until lightly browned.<br>
           2. Add sliced bamboo shoot, green chilies, and onion to the pan.<br>
           3. Cook until the vegetables are tender.<br>
           4. Add salt to taste and mix well.<br>
           5. Serve hot with rice.
         </p>
       </div>
     </div>
   </div>

</body>
</html>
