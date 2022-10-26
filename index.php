  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="syle.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>Jasmine Travel</title>
  </head>
  <body>
    <header>
      <h1 class="logo"><span>J</span>asmin</h1>
      <a class="map" href="https://www.google.com/maps/dir//Jasmin+Travel%D8%8C+%D8%A7%D9%84%D8%A8%D8%B7%D9%84+%D8%A3%D8%AD%D9%85%D8%AF+%D8%B9%D8%A8%D8%AF+%D8%A7%D9%84%D8%B9%D8%B2%D9%8A%D8%B2%D8%8C+%D8%A7%D9%84%D8%AF%D9%82%D9%8A%D8%8C+%D9%82%D8%B3%D9%85+%D8%A7%D9%84%D8%AF%D9%82%D9%8A%D8%8C+%D8%A7%D9%84%D8%AC%D9%8A%D8%B2%D8%A9+3751441%E2%80%AD%E2%80%AD/@30.0535285,31.2053628,15z/data=!4m8!4m7!1m0!1m5!1m1!1s0x145840b8541c4735:0x924f9ea95f90fad3!2m2!1d31.2053628!2d30.0535285"><i class="fa-solid fa-location-dot"></i></a>
      <div class="links">
        <div class="icon">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <ul>
                  <li><a href="#home">Home</a></li>
          <li><a href="#Book">Book</a></li>
          <!-- <li><a href="#Packages">Packages</a></li> -->
          <li><a href="#services">Services</a></li>
          <!-- <li><a href="#">Galleray</a></li> -->
          <li><a href="#rew">Review</a></li>
          <li><a href="#con">Contact</a></li>
        </ul>
      </div>
    </header>

    <section class="home" id="home">
      <div class="content">
        <h3>adventure is worthwhile</h3>
        <p>dicover new places with us, adventure awaits</p>
        <a href="#services" class="btn">discover more</a>
      </div>
      <div class="controls">
        <span class="vid-btn active" data-src="vid-1.mp4"></span>
        <span class="vid-btn" data-src="vid-2.mp4"></span>
        <span class="vid-btn" data-src="vid-3.mp4"></span>
        <span class="vid-btn" data-src="vid-4.mp4"></span>  <span class="vid-btn" data-src="images/vid-5.mp4"></span>
      </div>
      <video
        src="vid-1.mp4"
        id="video-slider"
        loop
        autoplay
        muted
      ></video>
    </section>
    <section class="Book" id="Book">
      <div class="heading">
        <h1>
          <span>B</span><span>O</span><span>o</span><span>k</span> <span>N</span
          ><span>o</span><span>w</span>
        </h1>
      </div>
      <div class="bb">
        <img src="book-img.svg" alt="" />
        <form action="book_form.php" method="post">
          <div class="input">
            <h3>Full Name</h3>
            <input type="text" placeholder="Enter Your Name" id="
            name" name="name" />
          </div>
           <div class="input">
            <h3>Phone</h3>
            <input type="text" placeholder="Enter Your Number" required name="phone" />
          </div> 
           <div class="input">
            <h3>Eamil</h3>
            <input type="text" placeholder="Enter Your Email" required name="email" />
          </div>
          <div class="input">
            <h3>Where To</h3>
            <input type="text" placeholder="place you want to visit" required name="where_to" />
          </div>
          <div class="input">
            <h3>Hotel</h3>
            <input type="text" placeholder="Hotel you want to stay" required name="hotel"/>
          </div>
          <div class="input">
            <h3>How Many Room</h3>
            <input
              type="number"
              placeholder="Rooms you want to stay"
              required
              name="guests"
            />
          </div>
          <div class="input">
            <h3>Leaving</h3>
            <input type="date" name="leaving" required />
          </div>
          <div class="input">
            <h3>Arrivals</h3>
            <input type="date" required name="arrivals" /> -->
          </div>
          <input type="submit" class="btn" name="send" value="Book Now" />
        </form>
      </div>
    </section>
    <!-- <section class="packages" id="Packages"> -->
      <!-- <div class="heading">
        <h1>
          <span>P</span><span>a</span><span>c</span><span>k</span> <span>a</span
          ><span>g</span><span>e</span><span>s</span>
        </h1>
      </div>
      <div class="boxs">
        <div class="box">
          <img src="images/1.jpg" alt="" />
          <div class="content">
            <h3><i class="fa-solid fa-location-dot"></i> Sharm</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis.
            </p>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </div>
          </div>
          <div class="price">
            <h4>$90.00 <span>$120.00</span></h4>
          </div>
          <a href="#Book" class="btn">Book Now</a>
        </div>
        <div class="box">
          <img src="images/p-2.jpg" alt="" />
          <div class="content">
            <h3><i class="fa-solid fa-location-dot"></i> Sharm</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis.
            </p>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </div>
          </div>
          <div class="price">
            <h4>$90.00 <span>$120.00</span></h4>
          </div>
          <a href="#Book" class="btn">Book Now</a>
        </div>
        <div class="box">
          <img src="images/p-3.jpg" alt="" />
          <div class="content">
            <h3><i class="fa-solid fa-location-dot"></i> Sharm</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis.
            </p>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </div>
          </div>
          <div class="price">
            <h4>$90.00 <span>$120.00</span></h4>
          </div>
          <a href="#Book" class="btn">Book Now</a>
        </div>
      </div> -->
    <!-- </section> -->
    <section id="services" class="servcies">
      <div class="heading">
        <h1>
          <span>s</span><span>e</span><span>r</span><span>v</span> <span>c</span
          ><span>i</span><span>e</span><span>s</span>
        </h1>
      </div>
      <div class="cards">
        <div class="card">
          <i class="fa-solid fa-hotel"></i>
          <div class="text">
            <h1>Affordable Hotels</h1>
            <p>
              We have hotel reservations at reasonable prices in exchange for
              excellent service
            </p>
          </div>
        </div>
        <div class="card">
          <i class="fa-solid fa-utensils"></i>
          <div class="text">
            <h1>Food and Drinks</h1>
            <p>
              We have very healthy and high quality food and drink .
            </p>
          </div>
        </div>
        <div class="card">
         <i class="fa-solid fa-bullhorn"></i>
          <div class="text">
            <h1>Safty guide</h1>
            <p>
          with us, you will get to know the largest amount of information about the tourists places.    
          </p>
          </div>
        </div>
        <div class="card">
          <i class="fa-sharp fa-solid fa-plane"></i>
          <div class="text">
            <h1>Fastest Travel</h1>
            <p>
              We guarantee that you will arrive quickly without any problems and arrive on time .
            </p>
          </div>
        </div>
        <div class="card">
        <i class="fa-solid fa-earth-asia"></i>
          <div class="text">
            <h1>Around The world</h1>
            <p>
              We have hotel reservations at reasonable prices in exchange for
              excellent service
            </p>
          </div>
        </div>
        <div class="card">
        <i class="fa-solid fa-person-hiking"></i>
          <div class="text">
            <h1>Adventures</h1>
            <p>
              We have hotel reservations at reasonable prices in exchange for
              excellent service
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="review" id="rew">
    <div class="heading">
        <h1>
          <span>R</span><span>e</span><span>v</span><span>i</span> <span>e</span
          ><span>w</span><span>s</span>
        </h1>
      </div>
      <div class="boxees">
      <div class="boxx">
        <img src="r.jpg" alt="">  
        </div>
        <div class="boxx">
        <img src="Screenshot_٢٠٢٢١٠٢٥-١٨٠٥٣٥_Google.jpg" alt="">  
        </div>
        
      <div class="boxx">
<img src="re.jpg" alt="">          
        </div>
        <div class="boxx">
        <img src="rew.jpg" alt="">            
        </div>
        <div class="boxx">
        <img src="rr.jpg" alt="">  
        </div>
      
      </div>
    </section>
    <section class="contact" id="con">
    <div class="heading">
        <h1>
          <span>C</span><span>o</span><span>n</span><span>t</span> <span>a</span
          ><span>c</span><span>t</span>
        </h1>
      </div>
      <div class="bb">
        <div class="calls">
          <div class="call">
            <div class="al">
              <p>Send Me by Eamil</p>
              <a href="mailto:">Email</a>
            </div>
            <i class="fa-solid fa-envelope"></i>
          </div>
          <div class="call">
            <div class="al">
              <p>Find us</p>
              <a href="mailto:">WhatsApp</a>
            </div>
            <i class="fa-brands fa-whatsapp"></i>
          </div>
           <div class="call">
            <div class="al">
              <p>Call us</p>
              <a href="mailto:">Phone</a>
            </div>
            <i class="fa-solid fa-phone"></i>
          </div> <div class="call">
            <div class="al">
              <p>Follow Us by Facebook</p>
              <a href="mailto:">Follow</a>
            </div>
            <i class="fa-brands fa-facebook"></i>
          </div>
          </div>
        <img src="contact-img.svg" alt="">
       
      </div>
    </section>
    <script src="script.js"></script>
  </body>
</html>
