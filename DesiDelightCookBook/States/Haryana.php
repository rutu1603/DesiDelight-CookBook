<?php include '../includes/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hariyana</title>
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
   <h2 style="text-align: center; margin-top: 20px;">Hariyana Recipes</h2>

   <!-- Recipe Wrapper -->
   <div class="recipe-wrapper">
     <!-- Recipe 1 -->
     <div class="recipe-section">
       <img src="../images/Dhokla.jpg" alt="Dhokla" class="recipe-image">
       <div class="recipe-details">
         <h2>Dhokla</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
            <li>Gram flour (besan)</li>
            <li>Semolina (rava)</li>
            <li>Yogurt</li>
            <li>Green chilies</li>
            <li>Ginger</li>
            <li>Mustard seeds</li>
            <li>Curry leaves</li>
            <li>Sugar</li>
            <li>Lemon juice</li>
            <li>Eno fruit salt</li>
        
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
          1. Mix gram flour, semolina, yogurt, green chilies, ginger, sugar, and lemon juice to make a batter.<br>
          2. Steam the batter in a greased dish until cooked.<br>
          3. Heat oil, add mustard seeds, curry leaves, and pour over steamed dhokla.<br>
          4. Cut into pieces and serve with chutney.<br>
         </p>
       </div>
     </div>

     <!-- Recipe 2 -->
     <div class="recipe-section">
       <img src="../images/Undhiyu.jpg" alt="Undhiyu" class="recipe-image">
       <div class="recipe-details">
         <h2>Undhiyu</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
            <li>Green </li>
            <li>Potatoes </li>
            <li>Brinjal (eggplant)</li>
            <li>Raw banana</li> 
            <li>Sweet potatoes
            <li>Fresh coconut</li>
            <li>Green garlic</li>
            <li>Fenugreek leaves</li>
            <li>Spices (turmeric, chili powder, coriander-cumin powder)</li>
            <li>Oil</li>
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
          1. Cut vegetables into chunks, mix with spices and grated coconut.<br>
          2. Stuff the mixture into banana leaves and tie with thread.<br>
          3. Steam or bake until vegetables are tender.<br>
          4. Serve hot with puris or roti.<br>
         </p>
       </div>
     </div>
   </div>

    

</body>
</html>