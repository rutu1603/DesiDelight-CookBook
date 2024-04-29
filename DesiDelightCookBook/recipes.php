<?php include 'includes/connection.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DesiDelightCookBook</title>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="style.css">
    <style>
      .region-box{
  width:30%;
  height:40%;
  margin-left: auto;
  margin-right: auto;
  margin-top: auto;
  background-color: rgb(241, 180, 65);
  border-radius: 14px;
  text-align: center;
}
.region-box ul{
  list-style: none;
  text-align: center;
}
.region-box li a{
  padding: 3px 3px;
  text-decoration: none;
  font-size: larger;
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  color: rgb(10, 10, 10);
}
.region-box li{
  list-style: none;
}
.region-box a:hover{
  color: #fdfafa;
}


#sweets{
  margin:20px;
  width: 160px;
  border-radius: 50%;
}
#biryani{
  margin: 20px;
  width: 200px;
  border-radius: 50%;
}
#butter_chicken{
  margin: 20px;
  width: 200px;
  border-radius: 50%;
}

#dosa{
  margin: 20px;
  width: 200px;
  border-radius: 70%;
}
#pulav{
  margin: 20px;
  width: 200px;
  border-radius: 70%;
}
#sweets,#biryani,#butter_chicken,#dosa,#pulav:hover{
  box-shadow: orangered 0.73s;
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
          <span id="search-icon" class="search-icon material-symbols-outlined" >search</span>
        </form>
        </form>
      </div>
      <a href="login.php" class="loga" ><button class="login_button">Login</button></a>
      <a href="logout.php" class="logout" ><button class="login_button">Logout</button></a>
    </header>
    <div class="navbar">
      <nav>
        <ul>
        <li><a href="index.php">Home</a></li>
          <li><a href="recipes.php" class="active">Recipes</a></li>
          <li><a href="search.php">Search</a></li>
          <li><a href="sign_up.php">Signup</a></li>
        </ul>
      </nav>
    </div>
  </div>
  <hr style="border-top: 8px solid #bbb; border-radius: 5px;">
 
  <img src="images/biryani.jpeg" alt="Biryani" id="biryani">
  <img src="images/butter_chiken.jpg" alt="Butter Chicken" id="butter_chicken">
  <img src="images/DOSA.jpg" alt="Dosa" id="dosa">
  <img src="images/pulav.jpg" alt="Pulav" id="biryani">
  <img src="images/sweet2.jpg" alt="Sweet Dish" id="sweets">

  <div id="region">
  <div class="region-box">
    <h2>Explore the diverse flavors of India</h2>
    <hr style="border-top: 4px solid #bbb; border-radius: 2px;">
    <ul>
      <li><a href="#">North India</a>
        <select onchange="redirectToPage(event)">
          <option value="">Select a State</option>
          <option value="States/JammuAndKashmir.php">Jammu and Kashmir</option>
          <option value="States/HimchalPradesh.php">Himachal Pradesh</option>
          <option value="States/Punjab.php">Punjab</option>
          <option value="States/Haryana.php">Haryana</option>
          <option value="States/Uttarakhand.php">Uttarakhand</option>
          <option value="States/UttarPradesh.php">Uttar Pradesh</option>
          <option value="States/Delhi.php">Delhi</option>
        </select>
      </li>

      <li><a href="#">South India</a>
        <select onchange="redirectToPage(event)">
          <option value="">Select a State</option>
          <option value="States/AndhraPradesh.php">Andhra Pradesh</option>
          <option value="States/Telangana.php">Telangana</option>
          <option value="States/Karnataka.php">Karnataka</option>
          <option value="States/TamilNadu.php">Tamil Nadu</option>
          <option value="States/kerla.php">Kerala</option>
        </select>
      </li>

      <li><a href="#">East India</a>
        <select onchange="redirectToPage(event)">
          <option value="">Select a State</option>
          <option value="States/WestBengal.php">West Bengal</option>
          <option value="States/Odisha.php">Odisha</option>
          <option value="States/Bihar.php">Bihar</option>
          <option value="States/Jharkhand.php">Jharkhand</option>
          <option value="States/Assam.php">Assam</option>
          <option value="States/Sikkim.php">Sikkim</option>
          <option value="States/Tripura.php">Tripura</option>
          <option value="States/Manipur.php">Manipur</option>
          <option value="States/Mizoram.php">Mizoram</option>
          <option value="States/Nagaland.php">Nagaland</option>
          <option value="States/ArunachalPradesh.php">Arunachal Pradesh</option>
        </select>
      </li>

      <li><a href="#">West India</a>
        <select onchange="redirectToPage(event)">
          <option value="">Select a State</option>
          <option value="States/Maharashtra.php">Maharashtra</option>
          <option value="States/Gujarat.php">Gujarat</option>
          <option value="States/Rajasthan.php">Rajasthan</option>
          <option value="States/Goa.php">Goa</option>
        </select>
      </li>
    </ul>
  </div>
</div>


  <footer>
    <div class="footer-content">
      <p>“Yatha annam tatha manam – What you eat, you become”</p>
      <p>Thank you for visiting! 🙏</p>
    </div>
  </footer>

</body>
<script>
 // Get references to the form and input field
let searchForm = document.getElementById("search-form");
let searchInput = document.getElementById("search-input");

// Add submit event listener to the form
searchForm.addEventListener("submit", (event) => {
  event.preventDefault(); // Prevent form submission
  performSearch(); // Call the function to perform the search
});

// Function to perform the search
function performSearch() {
  let userInp = searchInput.value;
  if (userInp.trim().length === 0) {
    alert("Input Field Cannot Be Empty");
    return;
  }
}
  function redirectToPage(event) {
    var url = event.target.value; // Get the selected option value
    if (url !== "") { // Check if the URL is non-empty
      window.location.href = url; // Redirect to the URL
    }
  }
</script>

</html>