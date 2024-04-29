<?php include '../includes/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goa</title>
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
   <h2 style="text-align: center; margin-top: 20px;">Goa Recipes</h2>

   <!-- Recipe Wrapper -->
   <div class="recipe-wrapper">
     <!-- Recipe 1 -->
     <div class="recipe-section">
       <img src="../images/Fish Curry.jpg" alt="Fish Curry" class="recipe-image">
       <div class="recipe-details">
         <h2>Fish Curry</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
            <li>Fish (preferably pomfret, kingfish, or mackerel)</li>
            <li>Coconut</li>
            <li>Tamarind</li>
            <li>Onions</li>
            <li>Tomatoes</li>
            <li>Ginger</li>
            <li>Garlic</li>
            <li>Green chilies</li>
            <li>Turmeric powder</li>
            <li>Coriander leaves</li>
        
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
            1. Grind coconut, tamarind, ginger, garlic, and green chilies into a smooth paste.<br>
            2. Heat oil in a pan, add chopped onions and tomatoes.<br>
            3. Add the coconut paste and cook until oil separates.<br>
            4. Add water, turmeric powder, and salt to make the curry base.<br>
            5. Add fish pieces and simmer until cooked.<br>
            6. Garnish with chopped coriander leaves.<br>
         </p>
       </div>
     </div>

     <!-- Recipe 2 -->
     <div class="recipe-section">
       <img src="../images/Bebinca.jpg" alt="Bebinca" class="recipe-image">
       <div class="recipe-details">
         <h2>Bebinca</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
            <li>Eggs</li>
            <li>Coconut milk</li>
            <li>Sugar</li>
            <li>Flour</li>
            <li>Ghee</li>
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
            1. Separate egg yolks and whites.<br>
            2. Mix yolks with coconut milk, sugar, and flour to make a smooth batter.<br>
            3. Beat egg whites until stiff and fold into the batter.<br>
            4. Grease a baking dish with ghee, pour a thin layer of batter, and bake until set.<br>
            5. Repeat layering and baking until all batter is used.<br>
            6. Serve chilled, cut into squares.<br>
         </p>
       </div>
     </div>
   </div>

    

</body>
</html>