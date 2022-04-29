<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="navbar.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <meta http-equiv="refresh" content="2" > -->
  <title>Document</title>
</head>
<body>
        <div class="header" id="myHeader">
            <a class="navtitle" href="index.php"><h2>JLSkyzer's web</h2></a>
            <div class="navbar">
                <a class="basicbtn" href="index.php">Home</a>
                <div class="dropdown">
                    <button class="dropbtn">Tuto
                    <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content"> 
                    <a href="#">Mcreator</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">Resources
                    <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content"> 
                    <a href="#">Mcreator</a>
                    <a href="#">HTML / CSS</a>
                    </div>
                </div>
        </div>

        
</body>
</html>

<script>
    // When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the header
var header = document.getElementById("myHeader");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

// Get the header
var header = document.getElementById("myHeader");

// Get the offset position of the navbar
var sticky = header.offsetTop;
</script>