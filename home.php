<!DOCTYPE html>
<html>
<head>
<style>
div.gallery {
  border: 1px solid #ccc;
  height: 271px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
    width: 70%;
    height: auto;
    margin-left: 27px;
    margin-top: 10px;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 18.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}



.desktop .overlap-15 {
    position: absolute;
    width: 1257px;
    height: 86px;
    top: -12px;
    left: -7px;
    background-color: #165069;
    /* background-image: url(./img/rectangle-334.svg); */
   
}

.desktop .notification {
    position: absolute;
    width: 30px;
    height: 30px;
    top: 44px;
    left: 549px;
}

.desktop .home {
    position: absolute;
    width: 30px;
    height: 30px;
    top: 45px;
    left: 32px;
}

.desktop .order-completed {
    position: absolute;
    width: 30px;
    height: 30px;
    top: 46px;
    left: 186px;
}
.desktop .user {
    position: absolute;
    width: 30px;
    height: 30px;
    top: 46px;
    left: 383px;
}

.desktop .text-wrapper-15 {
    position: absolute;
    top: 32px;
    left: 8px;
    font-family: "Inter-Medium", Helvetica;
    font-weight: 500;
    color: #ffffff;
    font-size: 20px;
    text-align: center;
    letter-spacing: -0.41px;
    line-height: 22px;
    white-space: nowrap;
}

.desktop .text-wrapper-16 {
    position: absolute;
    top: 32px;
    left: 84px;
    font-family: "Inter-Medium", Helvetica;
    font-weight: 500;
    color: #ffffff;
    font-size: 20px;
    text-align: center;
    letter-spacing: -0.41px;
    line-height: 22px;
    white-space: nowrap;
}

.desktop .text-wrapper-17 {
   position: absolute;
   top: 34px;
    left:983px;
    font-family: "Inter-Medium", Helvetica;
    font-weight: 500;
    color: #ffffff;
    font-size: 20px;
    text-align: center;
    letter-spacing: -0.41px;
    line-height: 22px;
    white-space: nowrap;
}

.desktop .chat {
    position: absolute;
    width: 30px;
    height: 30px;
    top: 47px;
    left: 758px;
}

.desktop .text-wrapper-18 {
    position: absolute;
    top: 33px;
    left: 250px;
    font-family: "Inter-Medium", Helvetica;
    font-weight: 500;
    color: #ffffff;
    font-size: 20px;
    text-align: center;
    letter-spacing: -0.41px;
    line-height: 22px;
    white-space: nowrap;
}

.desktop .text-wrapper-19 {
    position: absolute;
    top: 33px;
    left: 358px;
    font-family: "Inter-Medium", Helvetica;
    font-weight: 500;
    color: #ffffff;
    font-size: 20px;
    text-align: center;
    letter-spacing: -0.41px;
    line-height: 22px;
    white-space: nowrap;
}

.desktop .group {
    width: 312px;
    top: 39px;
    left: 922px;
    position: absolute;
    height: 43px;
}

.desktop .overlap-16 {
    position: relative;
    width: 314px;
    height: 43px;
}

.desktop .overlap-group-wrapper {
    width: 314px;
    top: 0;
    left: 0;
    position: absolute;
    height: 43px;
}

.desktop .div-wrapper {
    position: relative;
    width: 216px;
    height: 43px;
    top: -10px;
    left: 8px;
    background-color: #ffffff;
    border-radius: 10px;
    border-right-width: 1px;
    border-right-style: solid;
    border-bottom-width: 1px;
    border-bottom-style: solid;
    border-left-width: 1px;
    border-left-style: solid;
    border-color: #a667a8;
}

.desktop .text-wrapper-20 {
    position: absolute;
    width: 213px;
    height: 43px;
    top: 9px;
    left: -17px;
    font-family: "Inter-Regular", Helvetica;
    font-weight: 400;
    color: #00000061;
    font-size: 12px;
    text-align: center;
    letter-spacing: -0.41px;
    line-height: 22p
}

.desktop .search {
    position: absolute;
    width: 21px;
    height: 15px;
    top: 3px;
    left: 9px;
}

.desktop .order-completed {
    position: absolute;
    width: 30px;
    height: 30px;
    top: 46px;
    left: 186px;
}

.desktop .text-wrapper-21 {
    position: absolute;
    top: 32px;
    left: 161px;
    font-family: "Inter-Medium", Helvetica;
    font-weight: 500;
    color: #ffffff;
    font-size: 20px;
    text-align: center;
    letter-spacing: -0.41px;
    line-height: 22px;
    white-space: nowrap;
}
.desktop .overlap-2 {
  /* position: absolute; */
    width: 436px;
    height: 180px;
    top: 92px;
    left: -854px;
}


.desktop .showcase {
    position: absolute;
    width: 416px;
    height: 180px;
    top: -3px;
    left: -36px;
    border-color: #165069;
}

.desktop .emotions {
    position: absolute;
    width: 218px;
    height: 158px;
    top: 19px;
    left: 178px;
}

.desktop .home-cleaning {
    position: absolute;
    width: 110px;
    height: 15px;
    top: 30px;
    left: -19px;
}

.desktop .element {
    position: absolute;
    width: 41px;
    height: 14px;
    top: 96px;
    left: 121px;
}

.desktop .text-wrapper-3 {
    position: absolute;
    width: 41px;
    top: 45px;
    left: 73px;
    font-family: "Mulish-SemiBold", Helvetica;
    font-weight: 600;
    color: #ffffff;
    font-size: 16px;
    letter-spacing: 0;
    line-height: 50px;
    white-space: nowrap;
}
    .mySlides {display:none}
    .w3-left, .w3-right, .w3-badge {cursor:pointer}
    .w3-badge {height:13px;width:13px;padding:0}

</style>
<script>
    var slideIndex = 1;
    showDivs(slideIndex);
    
    function plusDivs(n) {
      showDivs(slideIndex += n);
    }
    
    function currentDiv(n) {
      showDivs(slideIndex = n);
    }
    
    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-white", "");
      }
      x[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " w3-white";
    }
    </script>
</head>
<body>

<div class="desktop">
<div class="overlap-15">
                    <div class="text-wrapper-15">Home</div>
                    <div class="text-wrapper-16" ><a href="bookinghistory.html"  style="text-decoration: none; color: white;">Profile</a></div>
                    <div class="text-wrapper-21"><a href="bookinghistory.html"  style="text-decoration: none; color: white;">Booking</a></div>
                    <div class="text-wrapper-18"><a href="home1.html" style="text-decoration: none; color: white;">Categories</a></div>
                    <div class="text-wrapper-19"> Notifications</div>
                    <div class="text-wrapper-17"><input type="search" name = "search" placeholder="Search" required style="width: 198px;
                                    height: 32px;
                                    background-color:white;
                                    margin-left: 26px;
                                    margin-top: -3px;
                                "></div>
           
<!-- <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_5terre.jpg">
      <img src="img/Group 28-min.png" alt="Cinque Terre" width="600" height="400" style="margin: 20px;
    margin-left: 28px;
}">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div> -->
<div class="w3-content w3-display-container" style="max-width:800px">
      <img class="mySlides" src="slide1.jpg" style="width: 180%;
      margin-top: 70px;height: 382px;">
      <img class="mySlides" src="img3.jpg" style="width: 180%;    height: 377px;
      margin-top: 70px;height: 382px;">
      <img class="mySlides" src="model.jpg" style="width: 180%;    height: 377px;
      margin-top: 70px;">
      <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%;margin-top: -230px;color: white;font-size: 43px;">
        <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
        <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)"
        style="margin-left: 1416px;
        margin-top: -47px;">&#10095;</div>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
      </div>
    </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="title" style="
    font-size: 1.5rem;
    margin-top: -22px;
">Recommended For You</div>

<?php
        // Database connection
        $db_host = 'localhost';
        $db_user = 'root';
        $db_pass = '';
        $db_name = 'maid';

        $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Query to select all images from the table
        $sql = "SELECT * FROM hiremaid";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Retrieve the image data
          
                
		
                
        $image_data = $row['image_data'];
        $category = $row['category'];
			
        
http://localhost/musicon/landing/create.php
                // Generate the HTML for each image with Bootstrap card styling

                echo '<div class="responsive">';
                echo  '<div class="gallery">';
             
                
    echo    '<img src="data:image/jpeg;base64,' . base64_encode($image_data) . '" alt="Image"/>';
    echo     '  <div class="desc">'.$category.'</div>';
     
    
    echo   '</div><br><br>';
    echo   '</div>';
            }
        } else {
            echo 'No images found in the table.';
        }
        $conn->close();
        ?>
               


<div class="clearfix"></div>


</body>
</html>


