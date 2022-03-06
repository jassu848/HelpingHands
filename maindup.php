 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helpthem</title>
    <link rel="stylesheet" href="mainstyle.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@600&display=swap" rel="stylesheet"> 
</head>
<body>

    <nav id="navbar">
        <div id="logo">
            <img src="img/logo.png" alt="logo hai yaha" height="80px" width="80px">
        </div>
       
        <ul>
            <li class="item"><a href="#">Home</a></li>
            <li class="item"><a href="#">Services</a></li>
            <li class="item"><a href="#">About Us</a></li>
        
            
        </ul>
    </nav>
    <section id="home">
    <section class="missioncenter">
  
        
        <div id="mission">
           <div class="box">
                <img src="img//food.jpg" alt=""> 
               <h2 class="secondarycenter">Food Donation</h2>
               <p>Our Food Donation Service Contains: Rice, Chapati, Dal, Curry</p>
               <form  action="donate1.php" method="post">
               <div>
        <span id="rangeValue1">0</span>
        <h2>Packets</h2>
        <Input class="range" type="range" name="range" value="0" min="0" max="20" onChange="rangeSlide1(this.value)" onmousemove="rangeSlide1(this.value)"></Input>
              </div>
              <div class="form-group">
              <a href="loginreg.php">
              <input type="submit" class="btnSubmit" value="Save" />
</a>
            
                </div>
            </form>


           </div>
           <form action="donate2.php" method="post">
           <div class="box">
            <img src="img//clothes.jpg" alt=""> 
           <h2 class="secondarycenter">Clothes Donation</h2>
           <p>Our Clothes Donation Serivce Contains: Warm Blankets</p>
           
               <div>
        <span id="rangeValue2">0</span>
        <h2>Blankets</h2>
        <Input class="range" type="range" name="range" value="0" min="0" max="20" onChange="rangeSlide2(this.value)" onmousemove="rangeSlide2(this.value)"></Input>
              </div>
              <div class="form-group">
            <input type="submit" class="btnSubmit" value="Save" />
                </div>
</form>
<form action="donate3.php" method="post">
       </div> 
       <div class="box">
        <img src="img/inside1(1).jpg" alt=""> 
       <h2 class="secondarycenter">Donation</h2>
       <p>Your every rupee of Donation might make a huge impact on someone's Life.</p>
       
              <div id="boxx">
                  <input type="number" name="range">
              </div>
              <div class="form-group">
            <input type="submit" class="btnSubmit" value="Save" />
                </div>
</form>                
</div>
      


         </form>
  

    </section>
    <script type="text/javascript">
        function rangeSlide1(value) {
            document.getElementById('rangeValue1').innerHTML = value;
        }
        </script>
    <script type="text/javascript">
        function rangeSlide2(value) {
            document.getElementById('rangeValue2').innerHTML = value;
        }
    </script>
  
    


   
</body>
</html> 