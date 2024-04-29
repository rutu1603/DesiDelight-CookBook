<?php include '../includes/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MadhyaPradesh</title>
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
   <h2 style="text-align: center; margin-top: 20px;">Madhya Pradesh Recipes</h2>

   <!-- Recipe Wrapper -->
   <div class="recipe-wrapper">
     <!-- Recipe 1 -->
     <div class="recipe-section">
       <img src="../images/Bhutte Ka Kees.jpg" alt="Rasgulla" class="recipe-image">
       <div class="recipe-details">
         <h2>Bhutte Ka Kees</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
          <li>Grated corn kernels</li>
          <li>Milk</li>
          <li>Ghee</li>
          <li>Mustard seeds</li>
          <li>Cumin seeds</li>
          <li>Green chilies</li>
          <li>Ginger</li>
          <li>Asafoetida</li>
          <li>Turmeric powder</li>
          <li>Lemon juice</li>
          <li>Coriander leaves</li>
        
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
            1. Heat ghee in a pan, add mustard seeds, cumin seeds, asafoetida, green chilies, and ginger.<br>
            2. Add grated corn kernels and sauté until cooked.<br>
            3. Add milk, turmeric powder, and salt, simmer until the mixture thickens.<br>
            4. Finish with lemon juice and garnish with coriander leaves before serving.<br>
         </p>
       </div>
     </div>

     <!-- Recipe 2 -->
     <div class="recipe-section">
       <img src="../images/poha.jpg" alt="Machher Jhol" class="recipe-image">
       <div class="recipe-details">
         <h2>Poha</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
           <li>Flattened rice (poha)</li>
           <li>Green chilies</li>
           <li>Potatoes</li>
           <li>Onions</li>
           <li>Peanuts</li>
           <li>Curry leaves</li>
           <li>Curry leaves</li>
           <li>Lemon juice</li>
           <li>Coriander leaves</li>
           <li>Mustard seeds</li>
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
            1. Wash poha and drain excess water, let it sit for a few minutes.<br>
            2. Heat oil in a pan, add mustard seeds, curry leaves, chopped onions, green chilies, and peanuts.<br>
            3. Add diced potatoes and cook until tender.<br>
            4. Add turmeric powder and salt, then mix in soaked poha.<br>
            5. Cook for a few minutes, sprinkle with lemon juice and garnish with coriander leaves before serving.<br>
         </p>
       </div>
     </div>
   </div>

   

</body>
</html>