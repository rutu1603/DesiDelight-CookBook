<?php include '../includes/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rajasthan Recipes</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="../style.css">
    <style>
        .container {
            height: 100vh; /* Adjusted to full view height */
            overflow-y: auto;
        }
        .recipe-wrapper {
            display: flex;
            justify-content: space-between; /* Ensures the columns are on opposite ends */
            margin: 0 50px; /* Adds horizontal spacing */
        }
        .recipe-section {
            flex-basis: 45%; /* Each section takes up 45% of the wrapper's width */
            text-align: center;
            padding: 20px;
            box-sizing: border-box; /* Includes padding and border in the element's total width and height */
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
          <span class="search-icon material-symbols-outlined">search</span>
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
  

  <h2 style="text-align: center; margin-top: 20px;">Rajasthan Recipes</h2>

  <div class="recipe-wrapper">
    <div class="recipe-section">
      <img src="../images/Rajasthani-Dal-Bati-Churma.webp" alt="Dal Baati Churma" class="recipe-image">
      <div class="recipe-details">
        <h2>Dal Baati Churma</h2>
        <h3>Ingredients:</h3>
        <ul class="ingredients">
          <li>1 cup whole wheat flour</li>
          <li>1/2 cup ghee (clarified butter)</li>
          <li>1 cup mixed lentils (toor dal, moong dal, chana dal)</li>
          <li>2 tomatoes, chopped</li>
          <li>2 onions, chopped</li>
        </ul>
        <h3>Recipe Procedure:</h3>
        <p class="procedure">
          Mix whole wheat flour with ghee and knead into a firm dough.<br>
          Shape the dough into small balls and bake in a preheated oven until golden brown.<br>
          Cook the mixed lentils in a pressure cooker until soft.<br>
          Heat ghee in a pan, add chopped onions and tomatoes, and sauté until golden brown.<br>
          Add cooked lentils to the pan, mix well, and simmer for a few minutes.<br>
          Serve the dal with baati and churma.
        </p>
      </div>
    </div>

    <div class="recipe-section">
      <img src="../images/Gatte ki Sabzi.jpeg" alt="Gatte ki Sabzi" class="recipe-image">
      <div class="recipe-details">
        <h2>Gatte ki Sabzi</h2>
        <h3>Ingredients:</h3>
        <ul class="ingredients">
          <li>2 cups besan (gram flour)</li>
          <li>1/2 cup yogurt</li>
          <li>1 tsp red chili powder</li>
          <li>1 tsp coriander powder</li>
          <li>1/2 tsp turmeric powder</li>
        </ul>
        <h3>Recipe Procedure:</h3>
        <p class="procedure">
          Mix besan, yogurt, red chili powder, coriander powder, turmeric powder, and salt to make a firm dough.<br>
          Shape the dough into cylindrical rolls (gatte) and boil them in water until cooked.<br>
          Cut the cooked gatte into small pieces.<br>
          Heat oil in a pan, add cumin seeds, asafoetida, and chopped onions.<br>
          Add chopped tomatoes, ginger-garlic paste, and
