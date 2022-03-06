<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helpthem</title>
    <link rel="stylesheet" href="homestyle.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@600&display=swap" rel="stylesheet"> 
</head>
<body>

    <nav id="navbar">
        <div id="logo">
            <img src="img/logo.png" alt="logo hai yaha" height="80px" width="80px">
        </div>
        <div class="buttons">
            <a href="loginreg.php">
            <button type="button" class="btn btn-primary btn-lg">Login</button>
        </a>
         </div>
        <ul>
            <li class="item"><a href="#">Home</a></li>
            <li class="item"><a href="#">Services</a></li>
            <li class="item"><a href="#">About Us</a></li>
            
        </ul>
    </nav>
    
    <section id="home">
        <h1 class="primary">Welcome</h1>
        
        <p class="p1">Online Food and Clothes Donation System is a mission to end hunger and to make a hungry-free world
       </p>
          
       <a href="loginreg.php">
           <button class="btn">Donate Now</button>
</a>

    </section>


   <section class="missioncenter">
        <h1 class="primarycenter">Our Mission</h1>
       <div id="mission">
           <div class="box">
                <img src="img//inside2 (2).jpg" alt=""> 
               <h2 class="secondarycenter">Food Donation</h2>
               <p>22% population of India is living below the Poverty Line. A huge part of Indian 
               population i.e. 190 million people sleep without food daily</p>
           </div>
           <div class="box">
            <img src="img//Inside3.jpg" alt=""> 
           <h2 class="secondarycenter">Clothes Donation</h2>
           <p>Most of the people dont have proper clothes.Here you can donate blankets to the needy people</p>
       </div>
       <div class="box">
        <img src="img/inside1(1).jpg" alt=""> 
       <h2 class="secondarycenter">Donation</h2>
       <p>Your every rupee of Donation might make a huge impact on someone's Life</p>
   </div>
       </div>
    </section> 
    <section id="contact">
        <h1 class="h-primary-center">Contact Us</h1>
        <div id="contactbox">
            <form action="">
                <div class="formgroup">
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" placeholder="Enter Your Name">
                    
                </div>
                <div class="formgroup">
                    <label for="name">Email: </label>
                    <input type="text" name="name" id="name" placeholder="Enter Your Email Id">
                </div>
                <div class="formgroup">
                    <label for="name">Phone: </label>
                    <input type="text" name="name" id="name" placeholder="Enter Your Phone number">
                   
                </div>
                <div class="formgroup">
                    <label for="name">Message: </label>
                    <textarea name="Message" id="name" cols="30" rows="10"></textarea>
                  
                </div>
                <button class="btnn">submit</button>
            </form>
        </div>
    </section>
     <!-- <footer>
        <div class="center">
            copyright &copy; www.minor.com All Rights Reserved
        </div>
    </footer>  -->
</body>
</html>