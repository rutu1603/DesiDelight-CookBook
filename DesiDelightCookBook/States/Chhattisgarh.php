<?php include '../includes/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chhattisgarh</title>
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
   <h2 style="text-align: center; margin-top: 20px;">Chhattisgarh Recipes</h2>

   <!-- Recipe Wrapper -->
   <div class="recipe-wrapper">
     <!-- Recipe 1 -->
     <div class="recipe-section">
       <img src="../images/Chila.jpg" alt="Rasgulla" class="recipe-image">
       <div class="recipe-details">
         <h2>Chila</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
            <li>Rice flour</li>
            <li>Urad dal (black gram lentils)</li>
            <li>Green chilies</li>
            <li>Ginger</li>
            <li>Cumin seeds</li>
            <li>Coriander leaves</li>
            <li>Oil</li>
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
            1. Soak rice and urad dal separately for a few hours.<br>
            2. Grind into a smooth batter along with green chilies, ginger, and cumin seeds.<br>
            3. Add chopped coriander leaves and salt to the batter.<br>
            4. Heat a griddle, pour batter to make thin pancakes (chilas).<br>
            5. Cook until golden brown on both sides, using oil as needed.<br>
            6. Serve hot with chutney.<br>
         </p>
       </div>
     </div>

     <!-- Recipe 2 -->
     <div class="recipe-section">
       <img src="../images/Farra.jpg" alt="Machher Jhol" class="recipe-image">
       <div class="recipe-details">
         <h2>Farra</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
            <li>Chana dal (split Bengal gram)</li>
            <li>Rice flour</li>
            <li>Ginger</li>
            <li>Green chilies</li>
            <li>Mustard seeds</li>
            <li>Asafoetida</li>
            <li>Oil</li>
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
            1. Soak chana dal for a few hours, then grind into a coarse paste with ginger and green chilies.<br>
            2. Add rice flour, mustard seeds, asafoetida, and salt to the paste to form a dough.<br>
            3. Shape the dough into cylindrical rolls and steam until cooked.<br>
            4. Cut into slices and shallow fry until golden brown.<br>
            5. Serve hot with chutney or sauce.<br>
         </p>
       </div>
     </div>
   </div>

   

</body>
</html>