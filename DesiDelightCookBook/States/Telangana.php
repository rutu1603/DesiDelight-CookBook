<?php include '../includes/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telangana Recipes</title>
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
   <h2 style="text-align: center; margin-top: 20px;">Telangana Recipes</h2>

   <!-- Recipe Wrapper -->
   <div class="recipe-wrapper">
     <!-- Recipe 1: Hyderabadi Biryani -->
     <div class="recipe-section">
       <img src="../images/hydrabadi_biryani.jpg" alt="Hyderabadi Biryani" class="recipe-image">
       <div class="recipe-details">
         <h2>Hyderabadi Biryani</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
           <li>500g Basmati rice</li>
           <li>500g mutton, cut into pieces</li>
           <li>2 onions, thinly sliced</li>
           <li>2 tomatoes, chopped</li>
           <li>1/2 cup yogurt</li>
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
           1. Marinate mutton pieces with yogurt, ginger-garlic paste, and spices for a few hours.<br>
           2. Cook rice until 70% done and set aside.<br>
           3. In a pan, heat oil and fry the thinly sliced onions until golden brown. Remove and set aside.<br>
           4. In the same pan, add marinated mutton and cook until tender.<br>
           5. Layer cooked rice over the mutton, followed by fried onions and chopped tomatoes.<br>
           6. Cover and cook on low heat until the flavors are well combined.<br>
           7. Serve hot with raita.
         </p>
       </div>
     </div>

     <!-- Recipe 2: Mutton Curry -->
     <div class="recipe-section">
       <img src="../images/mutton_curry.jpeg" alt="Mutton Curry" class="recipe-image">
       <div class="recipe-details">
         <h2>Mutton Curry</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
           <li>500g mutton</li>
           <li>2 onions, finely chopped</li>
           <li>2 tomatoes, chopped</li>
           <li>1 tbsp ginger-garlic paste</li>
           <li>1/2 cup coconut milk</li>
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
           1. Heat oil in a pressure cooker and fry chopped onions until golden brown.<br>
           2. Add ginger-garlic paste and cook until the raw smell disappears.<br>
           3. Add chopped tomatoes and cook until soft.<br>
           4. Add mutton pieces and cook until they change color.<br>
           5. Add water, salt, and pressure cook until the mutton is tender.<br>
           6. Once cooked, add coconut milk and simmer for a few minutes.<br>
           7. Garnish with coriander leaves and serve hot with rice or roti.
         </p>
       </div>
     </div>
   </div>

</body>
</html>
