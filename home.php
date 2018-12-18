
<!DOCTYPE html>
<html lang="en-ca">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./home.css" type="text/css">
    <link rel="icon" href="./img/strawberry1.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Charmonman|Noto+Serif" rel="stylesheet">
    <title>Celine Yuwono</title>
</head>
<body>  <!-- id indicates page; is used by menu CSS to indicate active page.  No JS needed. -->
    <span class="main-content" id="home"></span>
    <div class="title"><br/><br/>
        <img src="./img/title-image.PNG" id="center" style="position:absolute; width:500px; z-index:1;"/>
        <!-- <h2>Welcome to my blog</h2> -->
    </div>
    <div class="menu" id="menu-scroll">
        <nav>
            <ul>
              <li>
                <a href="#home">Home</a>
              </li>
              <li>
                <a href="#about-me">About Me</a>
              </li>
              <li>
                <a href="#projects">Projects</a>
              </li>
              <li>
                <a href="#languages">Languages</a>
              </li>
              <li>
                <a href="#books">Books</a>
              </li>
              <li>
                <a href="#contact">Contact</a>
              </li>
            </ul>
         </nav>
    </div>
    
    
    <!-- Menu fixed scroll JavaScript file -->
    <script src="./menu-scroll.js"></script>
    
    <!-- Main image OR make a slideshow -->
    <div class="image">
        <img class="warp-image" src="./img/lavender.JPG"/>
    </div>
    
    <div class="footprint-man-right">
        <img src="./img/male-footprint-first.png"/>
        <img src="./img/male-footprint.png"/>
        <img src="./img/male-footprint.png"/>    
        <img src="./img/male-footprint.png"/>   
        <img src="./img/male-footprint.png"/>  
    </div>
    
    <div class="footprint-woman-left">
        <img src="./img/female-footprint-first.png"/>
        <img src="./img/female-footprint.png"/>
        <img src="./img/female-footprint.png"/>
        <img src="./img/female-footprint.png"/>
        <img src="./img/female-footprint.png"/>
    </div>
    
    <main>
        <span class="anchor" id="about-me"></span>
        <div class="main-content">
            <img style="float: right; position: relative;" height="400px" src="./img/fuji.png"/>
            <h2>About Me</h2>
            <p>My name is Celine Yuwono. 
                <br/>I was born and raised in Jakarta, Indonesia.
                <br/>ユヲノセリンと申します。
            </p><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
            </div>
        <span class="anchor" id="travel"></span>
        <div class="main-content">
            <h2>Travel</h2>
            </div>
        <span class="anchor" id="languages"></span>
        <div class="main-content">
            <h2>Languages</h2>
            </div>
        <span class="anchor" id="books"></span>
        <div class="main-content">
            <h2>Books</h2>
            <table class="book-ranking">
            <tr>
              <td><img src="./img/the-art-of-war.jpg" height="300px";/></td>
              <td><img src="./img/the-prince.jpg" height="300px";/></td>
              <td><img src="./img/the-art-of-war.jpg" height="300px";/></td>
              <td><img src="./img/the-prince.jpg" height="300px";/></td>
              <td><img src="./img/the-prince.jpg" height="300px";/></td>
            </tr>
            <tr>
              <td>The Art of War</td>
              <td>The Prince</td>
              <td>The Art of War</td>
              <td>The Prince</td>
              <td>The Art of War</td>
            </tr>
             <tr>
              <td><img src="./img/the-art-of-war.jpg" height="300px";/></td>
              <td><img src="./img/the-prince.jpg" height="300px";/></td>
              <td><img src="./img/the-art-of-war.jpg" height="300px";/></td>
              <td><img src="./img/the-prince.jpg" height="300px";/></td>
              <td><img src="./img/the-prince.jpg" height="300px";/></td>
            </tr>
            <tr>
              <td>The Art of War</td>
              <td>The Prince</td>
              <td>The Art of War</td>
              <td>The Prince</td>
              <td>The Art of War</td>
            </tr>
          </table>
            
            </div>
        <span class="anchor" id="contact"></span>
        <div class="main-content">
            <h2>Contact</h2>
            <p>E-mail: celineyuwono@gmail.com<br/>
               Phone: +81 80-8865-2696
            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
            </div>
        
        
    </main>
    <!--Strawberries on top of cloud-->
    
    
    <img class="cloud-border" src="./img/cloud-border.png" width="99.99%";/>
    
    <footer>
        <img src="./img/strawberry6.png" style="position: absolute;margin: -50px 0 0 5%;max-height: 60px; transform: rotate(20deg)">
        <img src="./img/strawberry1.png" style="position: absolute; margin: -50px 0 0 22.6%; max-height: 60px; transform: rotate(20deg)">
        <img src="./img/strawberry2.png" style="position: absolute; margin: -50px 0 0 41%; max-height: 60px;">
        <img src="./img/strawberry4.png" style="position: absolute; margin: -50px 0 0 59%; max-height: 60px; transform: rotate(330deg);">
        <img src="./img/strawberry5.png" style="position: absolute; margin: -50px 0 0 77.2%; max-height: 60px; transform: rotate(330deg);">
        <img src="./img/strawberry3.png" style="position: absolute; margin: -50px 0 0 93%; max-height: 60px;">
        <br/><br/><br/><br/><br/><br/><br/><br/>
    </footer>
</body>
</html>