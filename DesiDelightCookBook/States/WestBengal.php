<?php include '../includes/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WestBengal</title>
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
  <div class="container">
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

    <!-- State Name -->
    <h2 style="text-align: center; margin-top: 20px;">West Bengal Recipes</h2>

    <!-- Recipe Wrapper -->
    <div class="recipe-wrapper">
      <!-- Recipe 1 -->
      <div class="recipe-section">
        <img src="images/rasgulla" alt="Rosogolla" class="recipe-image">
        <div class="recipe-details">
          <h2>Rosogolla</h2>
          <br>
          <h3>Ingredients:</h3>
          <br>
          <ul class="ingredients">
            <li>1 liter milk</li>
            <li>2 tbsp lemon juice</li>
            <li>1 cup sugar</li>
            <li>Water</li>
            <!-- Add more ingredients as needed -->
          </ul>
          <br>
          <h3>Recipe Procedure:</h3>
          <br>
          <p class="procedure">
            1. Heat milk in a pan. Once it boils, add lemon juice to curdle the milk.<br>
            2. Strain the curdled milk using a muslin cloth.<br>
            3. Rinse the paneer under cold water to remove the lemon flavor.<br>
            4. Knead the paneer until smooth and make small balls out of it.<br>
            5. In another pan, mix sugar and water and bring to a boil.<br>
            6. Add the paneer balls to the boiling syrup and cook for 10-12 minutes.<br>
            7. Let it cool and serve chilled.
          </p>
        </div>
      </div>

      <!-- Recipe 2 -->
      <div class="recipe-section">
        <img src="images/Machher Jhol.jpg" alt="Machher Jhol" class="recipe-image">
        <div class="recipe-details">
          <h2>Machher Jhol</h2>
          <br>
          <h3>Ingredients:</h3>
          <br>
          <ul class="ingredients">
            <li>500g fish (Rohu or Katla)</li>
            <li>2 potatoes, cut into cubes</li>
            <li>2 tomatoes, chopped</li>
            <li>1 onion, finely chopped</li>
            <!-- Add more ingredients as needed -->
          </ul>
          <br>
          <h3>Recipe Procedure:</h3>
          <br>
          <p class="procedure">
            1. Marinate the fish with turmeric powder and salt.<br>
            2. Heat oil in a pan and fry the fish until golden brown. Set aside.<br>
            3. In the same pan, add more oil if needed and fry the potatoes until golden brown.<br>
            4. Add chopped onions and cook until golden brown.<br>
            5. Add chopped tomatoes and cook until soft.<br>
            6. Add turmeric powder, red chili powder, and salt to taste.<br>
            7. Add water and bring it to a boil.<br>
            8. Add fried fish and simmer until the potatoes are cooked.<br>
            9. Serve hot with rice.
          </p>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer style="text-align: center; margin-top: 50px;">
      <p>“Yatha annam tatha manam – What you eat, you become”</p>
      <p>Thank you for visiting! 🙏</p>
    </footer>
  </div>

  <script>
    function showpopup() {
      document.querySelector('.login').classList.add('showlogin');
      document.querySelector('.overlayer').classList.add('showoverlayer');
    }

    function closepopup() {
      document.querySelector('.login').classList.remove('showlogin');
      document.querySelector('.overlayer').classList.remove('showoverlayer');
    }
  </script>

</body>

</html>
