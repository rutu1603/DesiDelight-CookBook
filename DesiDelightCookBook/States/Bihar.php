<?php include '../includes/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bihar</title>
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
   <h2 style="text-align: center; margin-top: 20px;"> Bihar Recipes</h2>

   <!-- Recipe Wrapper -->
   <div class="recipe-wrapper">
     <!-- Recipe 1 -->
     <div class="recipe-section">
       <img src="../images/Litti Chokha.jpg" alt="Litti Chokha" class="recipe-image">
       <div class="recipe-details">
         <h2>Litti Chokha</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
          <li>Sattu (gram flour)</li>
          <li>Wheat flour</li>
          <li>Onions</li>
          <li>Garlic</li>
          <li>Green chilies</li>
          <li>Mustard oil</li>
          <li>Ajwain (carom seeds)</li>
          <li>Coriander leaves</li>
        
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
            1. Mix sattu with chopped onions, garlic, green chilies, ajwain, and coriander leaves.<br>
            2. Knead wheat flour with water to make dough.<br>
            3. Make small balls of the sattu mixture and stuff inside the dough balls.<br>
            4. Roast on a pan until cooked and golden brown.<br>
            5. Serve hot with chokha (mashed potatoes, brinjal, and tomatoes).<br>
         </p>
       </div>
     </div>

     <!-- Recipe 2 -->
     <div class="recipe-section">
       <img src="../images/Bihari Chicken Curry.jpg" alt="Bihari Chicken Curry" class="recipe-image">
       <div class="recipe-details">
         <h2>Bihari Chicken Curry</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
          <li>Chicken pieces</li>
          <li>Onions</li>
          <li>Tomatoes</li>
          <li>Ginger</li>
          <li>Garlic</li>
          <li>Green chilies</li>
          <li>Yogurt</li>
          <li>Mustard oil</li>
          <li>Garam masala</li>
          <li>Coriander leaves</li>
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
            1. Marinate chicken with yogurt, ginger, garlic, and green chilies.<br>
            2. Heat mustard oil in a pan and fry chopped onions until golden brown.<br>
            3. Add chopped tomatoes and cook until soft.<br>
            4. Add marinated chicken and cook until tender.<br>
            5. Garnish with garam masala and coriander leaves.<br>
            6. Serve hot with rice or roti.<br>
         </p>
       </div>
     </div>
   </div>

    

</body>
</html>