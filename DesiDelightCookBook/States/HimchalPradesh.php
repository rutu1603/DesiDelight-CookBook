<?php include '../includes/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HimchalPradesh</title>
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
   <h2 style="text-align: center; margin-top: 20px;"> Himachal Pradesh Recipes</h2>

   <!-- Recipe Wrapper -->
   <div class="recipe-wrapper">
     <!-- Recipe 1 -->
     <div class="recipe-section">
       <img src="../images/Dham.jpg" alt="Rasgulla" class="recipe-image">
       <div class="recipe-details">
         <h2>Dham</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
            <li>Rice</li>
            <li>Lentils (usually black gram)</li>
            <li>Rajma (kidney beans)</li>
            <li>Potatoes</li>
            <li>Spinach</li>
            <li>Yogurt</li>
            <li>Ghee</li>
            <li>Spices (cumin seeds, coriander powder, turmeric)</li>
            <li>fruits (cashews, raisins)</li>
        
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
            1. Cook rice and lentils separately.<br>
            2. Boil rajma until tender.<br>
            3. Cook spinach with spices and blend to make a puree.<br>
            4. Mix all cooked ingredients and serve with yogurt and ghee.<br>
            5. Garnish with dry fruits.<br>
         </p>
       </div>
     </div>

     <!-- Recipe 2 -->
     <div class="recipe-section">
       <img src="../images/Babru.jpg" alt="Machher Jhol" class="recipe-image">
       <div class="recipe-details">
         <h2>Babru</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
            <li>Black gram dal (urad dal)</li>
            <li>Wheat flour</li>
            <li>Green chilies</li>
            <li>Ginger</li>
            <li>Asafoetida</li>
            <li>Salt</li>
            <li>Oil</li>
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
            1. Soak black gram dal for a few hours, then grind into a paste with green chilies and ginger.<br>
            2. Add wheat flour, asafoetida, and salt to the paste to form a dough.<br>
            3. Divide dough into small balls and flatten into discs.<br>
            4. Deep fry in hot oil until golden brown.<br>
            5. Serve hot with chutney or pickle.<br>
         </p>
       </div>
     </div>
   </div>

    

</body>
</html>