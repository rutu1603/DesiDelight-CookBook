<?php include '../includes/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UttarPradesh</title>
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
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
          <input class="search-input" placeholder="Search Recipies" type="search">
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
   <h2 style="text-align: center; margin-top: 20px;">Uttar Pradesh Recipes</h2>

   <!-- Recipe Wrapper -->
   <div class="recipe-wrapper">
     <!-- Recipe 1: Mutton Kofta -->
     <div class="recipe-section">
       <img src="../images/mutton_kofta.jpg" alt="Mutton Kofta" class="recipe-image">
       <div class="recipe-details">
         <h2>Mutton Kofta</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
           <li>500g minced mutton</li>
           <li>1 onion, finely chopped</li>
           <li>2 tomatoes, pureed</li>
           <li>2-3 green chilies, finely chopped</li>
           <li>1-inch piece of ginger, grated</li>
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
           1. In a bowl, mix minced mutton with chopped onions, green chilies, grated ginger, and salt.<br>
           2. Shape the mixture into small balls (koftas).<br>
           3. Heat oil in a pan and fry the koftas until golden brown. Remove and set aside.<br>
           4. In the same pan, add pureed tomatoes and cook until oil separates.<br>
           5. Add water to make a gravy consistency and bring it to a simmer.<br>
           6. Gently add the fried koftas to the gravy and cook for another 10-15 minutes.<br>
           7. Garnish with coriander leaves and serve hot with rice or roti.
         </p>
       </div>
     </div>

     <!-- Recipe 2: Dum Aloo -->
     <div class="recipe-section">
       <img src="../images/dum_aloo.jpg" alt="Dum Aloo" class="recipe-image">
       <div class="recipe-details">
         <h2>Dum Aloo</h2>
         <br>
         <h3 style="text-align: left;">Ingredients:</h3>
         <br>
         <ul class="ingredients">
           <li>500g baby potatoes, boiled</li>
           <li>2 onions, finely chopped</li>
           <li>1 cup yogurt</li>
           <li>1 tsp cumin seeds</li>
           <li>1 tsp turmeric powder</li>
           <!-- Add more ingredients as needed -->
         </ul>
         <br>
         <h3 style="text-align: left;">Recipe Procedure:</h3>
         <br>
         <p class="procedure">
           1. Prick boiled baby potatoes with a fork and shallow fry until golden brown. Set aside.<br>
           2. In the same pan, heat oil and add chopped onions. Saute until golden brown.<br>
           3. Add cumin seeds and turmeric powder, cook for a minute.<br>
           4. Add whisked yogurt to the pan and cook until oil separates.<br>
           5. Add fried potatoes to the gravy and mix well.<br>
           6. Cover and cook on low heat (dum) for 15-20 minutes.<br>
           7. Garnish with fresh coriander leaves and serve hot with naan or rice.
         </p>
       </div>
     </div>
   </div>

    



</body>
<script>

  
  const activePage = window.location.pathname;
  const navLinks = document.querySelectorAll('nav a').forEach(link => {
  if(link.href.includes(${activePage})){
    link.classList.add('active');
    console.log(link);
  }
})
</script>
</html>
