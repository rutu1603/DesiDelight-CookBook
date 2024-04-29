<?php include '../includes/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assam</title>
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
   <h2 style="text-align: center; margin-top: 20px;">Assam Recipes</h2>

   <!-- Recipe Wrapper -->
   <div class="recipe-wrapper">
     <!-- Recipe 1 -->
     <div class="recipe-section">
       <img src="../images/Assamese Fish Curry .jpg" alt="Assamese Fish Curry" class="recipe-image">
       <div class="recipe-details">
         <h2>Assamese Fish Curry (Masor Tenga)</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
          <li>Fish (rohu or any freshwater fish)</li>
          <li>Tomatoes</li>
          <li>Mustard oil</li>
          <li>Green chilies</li>
          <li>Ginger</li>
          <li>Garlic</li>
          <li>Turmeric powder</li>
          <li>Fenugreek seeds</li>
          <li>Curry leaves</li>
        
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
            1. Marinate fish with turmeric and salt.<br>
            2. Fry fish until golden brown and keep aside.<br>
            3. In a pan, heat mustard oil and add fenugreek seeds.<br>
            4. Add chopped tomatoes, green chilies, ginger, and garlic.<br>
            5. Cook until tomatoes are soft.<br>
            6. Add water, turmeric, and salt to make gravy.<br>
            7. Add fried fish and simmer until cooked.<br>
            8. Garnish with curry leaves.<br>
         </p>
       </div>
     </div>

     <!-- Recipe 2 -->
     <div class="recipe-section">
       <img src="../images/Assamese Duck Curry (Haahor Mangxo).jpg" alt="Assamese Duck Curry" class="recipe-image">
       <div class="recipe-details">
         <h2>Assamese Duck Curry (Haahor Mangxo)</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
          <li>Duck pieces</li>
          <li>Potatoes</li>
          <li>Onions</li>
          <li>Ginger</li>
          <li>Garlic</li>
          <li>Mustard oil</li>
          <li>Green chilies</li>
          <li>Turmeric powder</li>
          <li>Bay leaves</li>
          <li>Cumin seeds</li>
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
            1. Marinate duck pieces with turmeric and salt.<br>
            2. Heat mustard oil in a pan and fry duck pieces until brown.<br>
            3. In the same oil, add cumin seeds, bay leaves, chopped onions, ginger, garlic, and green chilies.<br>
            4. Add turmeric powder and salt.<br>
            5. Cook until onions are soft.<br>
            6. Add water and potatoes, simmer until duck is tender.<br>
            7. Serve hot with rice.<br>
         </p>
       </div>
     </div>
   </div>

    
</body>
</html>