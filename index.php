<!DOCTYPE html>
 <html lang="en">
  
  <head>

  <title>Home | British Iconic Musicians</title>
  <?php include "inc/head.php";?>

  </head>

<body class=“container1”>

    <header class="banner">

    	<div class="hometopleft">
  	      <h2> 3 Amazing British Musicians</h2>
  	    </div>

        <div class="hometopright">
           <?php include "inc/nav.php";?>
        </div>

    </header>



    <main>

    	<div class="slider">

            <img src="images/adele.jpg" alt="Adele">
            <img src="images/ed.jpg" alt="Ed Sheeran">
            <img src="images/elton.jpg" alt="Elton John">

		</div>
 
    </main>

    <footer>

    <div class="homebotleft">
          <p>CSC174 Midterm - Home</p>
    </div>


    <div class="homebotright">
	        <p><a href="subscribe.php">Subscribe</a></p>
    </div>

    </footer>

<?php include "inc/scripts.php";?>
<script src="sss/sss.js"></script>
<script>
$('.slider').sss();
</script>

</body>

</html>