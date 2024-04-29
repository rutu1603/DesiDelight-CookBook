<?php include '../includes/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kernataka</title>
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
   <h2 style="text-align: center; margin-top: 20px;">Karnataka Recipes</h2>

   <!-- Recipe Wrapper -->
   <div class="recipe-wrapper">
     <!-- Recipe 1 -->
     <div class="recipe-section">
       <img src="../images/Bisi Bele Bath.jpg" alt="Bisi Bele Bath" class="recipe-image">
       <div class="recipe-details">
         <h2>Bisi Bele Bath</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
            <li>Rice</li>
            <li>Toor dal (split pigeon peas)</li>
            <li>Tamarind</li>
            <li>Sambar powder</li>
            <li>Jaggery</li>
            <li>Ghee</li>
            <li>Mustard seeds</li>
            <li>Curry leaves</li>
        
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
          1. Cook rice and toor dal together until soft.<br>
          2. Cook mixed vegetables separately until tender.<br>
          3. Prepare tamarind pulp and mix with sambar powder and jaggery.<br>
          4. Combine cooked rice, dal, vegetables, and tamarind mixture in a pot and simmer.<br>
          5. Temper with mustard seeds and curry leaves in ghee before serving.<br>
         </p>
       </div>
     </div>

     <!-- Recipe 2 -->
     <div class="recipe-section">
       <img src="../images/Rava Idli.jpg" alt="Rava Idli" class="recipe-image">
       <div class="recipe-details">
         <h2>Rava Idli</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
          <li>Semolina (rava)</li>
          <li>Yogurt</li>
          <li>Water</li>
          <li>Baking soda</li>
          <li>Mustard seeds</li>
          <li>Urad dal (black gram lentils)</li>
          <li>Curry leaves</li>
          <li>Green chilies</li>
          <li>Ginger</li>
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
          1. Mix semolina with yogurt and water to form a thick batter.<br>
          2. Add baking soda and let the batter rest for a few hours.<br>
          3. Prepare tempering by frying mustard seeds, urad dal, curry leaves, green chilies, and ginger.<br>
          4. Mix the tempering with the batter and pour into greased idli molds.<br>
          5. Steam the idlis until cooked and serve hot with chutney or sambar.<br>
         </p>
       </div>
     </div>
   </div>

    

</body>
</html>