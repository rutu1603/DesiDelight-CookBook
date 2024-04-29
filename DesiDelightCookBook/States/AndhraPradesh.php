
<?php include '../includes/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AndhraPradesh</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="../style.css">
    <style>
        .recipe-wrapper {
  text-align: center; /* Center the recipe containers */
}

.recipe-container {
  display: inline-block; /* Display the recipe containers inline */
  margin: 0 10px; /* Add spacing between recipes */
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
   <h2 style="text-align: center; margin-top: 20px;">Andhra Pradesh Recipes</h2>

   <!-- Recipe Wrapper -->
   <div class="recipe-wrapper">
     <!-- Recipe 1 -->
     <div class="recipe-section">
       <img src="../images/Hyderabadi Biryani.jpg" alt="Hyderabadi Biryani" class="recipe-image">
       <div class="recipe-details">
         <h2>Gongura Pachadi (Sorrel Leaves Chutney)</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>

         <ul class="ingredients">
            <li>3 cups gongura (sorrel) leaves, washed and chopped</li>
            <li>2 tablespoons oil</li>
            <li>2-3 dry red chilies</li>
            <li>1 teaspoon mustard seeds</li>
            <li>1 teaspoon cumin seeds</li>
            <li>1 teaspoon urad dal (split black gram)</li>
            <li>1 teaspoon chana dal (split chickpeas)</li>
            <li>6-8 garlic cloves, chopped</li>
            <li>1 tablespoon tamarind paste</li>
            <li>1/2 teaspoon turmeric powder</li>
            <li>Salt to taste</li>
        
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
            1.Heat 2 tablespoons of oil in a pan over medium heat. Add dry red chilies, mustard seeds, cumin seeds, urad dal, and chana dal. Sauté until the dals turn golden brown.<br>
            2.Add chopped garlic cloves and sauté until they turn light golden brown.<br>
            3. Add chopped gongura leaves to the pan along with turmeric powder and salt. Mix well.<br>
            4.Cook the gongura leaves until they wilt and turn mushy, stirring occasionally. This may take about 10-12 minutes.<br>
            5.Once the gongura leaves are cooked, add tamarind paste and mix well. Cook for another 2-3 minutes.<br>
            6.Turn off the heat and allow the mixture to cool down slightly.<br>
            7.Transfer the cooked gongura mixture to a blender or food processor. Blend it into a coarse paste. You can adjust the consistency by adding a little water if needed.<br>
            8.In a separate small pan, heat 2 tablespoons of oil for tempering. Add mustard seeds and let them splutter.<br>
<br>
            9.Add urad dal, cumin seeds, dry red chilies, and asafoetida. Sauté until the dals turn golden brown.<br>
           
            10.Pour the tempering over the blended gongura chutney and mix well.<br>
            11.Gongura Pachadi is ready to serve. You can enjoy it with hot rice, ghee, and papad.<br>

         </p>
       </div>
     </div>

     <!-- Recipe 2 -->
     <div class="recipe-section">
       <img src="../images/Pesarattu (Green Gram Dosa).jpg" alt="Pesarattu (Green Gram Dosa)" class="recipe-image">
       <div class="recipe-details">
         <h2>Pesarattu (Green Gram Dosa)</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
            
            <li>Whole green gram (moong dal)</li>
            <li>Rice</li>
            <li>Green chilies</li>
            <li>Ginger</li>
            <li>Cumin seeds</li>
            <li>Onions</li>
            <li>Coriander leaves</li>
              
              
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
            1. Soak green gram and rice overnight.<br>
            2. Grind with green chilies, ginger, and cumin seeds to make batter.<br>
            3. Ferment batter for a few hours.<br>
            4. Spread batter on hot griddle, sprinkle chopped onions and coriander.<br>
            5. Cook until golden brown and crisp.<br>
         </p>
       </div>
     </div>
   </div>

    

</body>
</html>