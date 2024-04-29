<?php include '../includes/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maharashtra Recipes</title>
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
   <h2 style="text-align: center; margin-top: 20px;">Maharashtra Recipes</h2>

   <!-- Recipe Wrapper -->
   <div class="recipe-wrapper">
     <!-- Recipe 1 -->
     <div class="recipe-section">
       <img src="../images/misal_pav.jpg" alt="misal_pav" class="recipe-image">
       <div class="recipe-details">
         <h2>Misal Pav</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
          <li>Sprouted moth beans (matki)</li>
          <li>Onions</li>
          <li>Tomatoes</li>
          <li>Farsan (spicy snack mix)</li>
          <li>Lemon wedges</li>
          <li>Pav bread rolls</li>
          <li>Spices (garam masala, red chili powder, turmeric powder)</li>
          <li>Oil </li>
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
          1. Cook sprouted moth beans with spices until soft.<br>
          2. Heat oil in a pan, add chopped onions and tomatoes, sauté until soft.<br>
          3. Add cooked beans and simmer for a few minutes.<br>
          4. Serve hot topped with farsan and accompanied by lemon wedges and pav.<br>
         </p>
       </div>
     </div>

     <!-- Recipe 2 -->
     <div class="recipe-section">
       <img src="../images/pav_bhaji.jpg" alt="pav_bhaji" class="recipe-image">
       <div class="recipe-details">
         <h2>Pav Bhaji</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
           <li>Potatoes</li>
           <li>Mixed vegetables (capsicum, peas, carrots)</li>
           <li>Pav bread rolls</li>
           <li>Onions</li>
           <li>Tomatoes</li>
           <li>Garlic</li>
           <li>Ginger</li>
           <li>Spices (pav bhaji masala, red chili powder, turmeric powder)</li>
           <li>Butter</li>
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
          1. Pressure cook potatoes and mixed vegetables until soft.<br>
          2. Mash cooked vegetables and sauté with chopped onions, tomatoes, garlic, and ginger.<br>
          3. Add pav bhaji masala, red chili powder, turmeric powder, and salt, cook until flavors blend.<br>
          4. Serve hot with buttered pav bread rolls.<br>
          <br>
         </p>
       </div>
     </div>
   </div>

    

</body>
</html>