<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home_Page
    </title>
 
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    
</head>
<body>
    <header>
        <div class="content flex_space">
            <div class="logo">
                
            </div>
        <div class="navlink">
            <ul id="menulist">
                <li><a href="#home">Home</a></li>
                <li><a href="#hosteller">Hostels</a></li>
                <li><a href="#rooms">Rooms</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#about">About us</a></li>
                <li><a href="#about">Contact us</a></li>
                <li><a href="login.html">Login/Register</a></li>
                

                
                 
                <li><a href="adminlog.html"><button class="primary-btn"> Admin</button></a></li>
            </ul>
            <span class="fa fa-bars"onclick="menutoggle()"></span>
        </div>
        </div>
    </header>

   <script>
    var menulist = document.getElementById('menulist');
    menulist.style.maxHeight="0px";

  function menutoggle() {
    if(menulist.style.maxHeight== "0px"){
        menulist.style.maxHeight = "100vh";
    }
    else{
        
        menulist.style.maxHeight = "0px";  
      }
  }
   </script>
 <section class="home">
        <div class="content">
       <div class="owl-carousel owl-theme">
        
      <div class="item">
        <img src="images/background1.jpeg"  width="800" height="600" alt="">
        <div class="text">
            <h1> Enjoy your life</h1>
            <p> The hostel to change our journey to person life to develop the knowledge of these life path</p>
            <div class="flex">
             <a href="container">   <button class="primary-btn">REVIEW</button></a>
                <button class="secondary-btn">CONTACT US</button>
            </div>
            </div>
          </div>
          <div class="item">
            <img src="images/background2.jpeg"  width="800" height="600" alt="">
            <div class="text">
                <h1> Enjoy your life</h1>
            <p> The hostel to change our journey to person life to develop the knowledge of these life path</p>
                <div class="flex">
                    <a href="container">    <button class="primary-btn">REVIEW</button></a>
                    <button class="secondary-btn">CONTACT US</button>
                </div>
                </div>
              </div>

              <div class="item">
                <img src="images/background3.jpeg"  width="800" height="600" alt="">
                <div class="text">
                    <h1> Enjoy your life</h1>
                    <p> The hostel to change our journey to person life to develop the knowledge of these life path</p>
                    <div class="flex">
                        <a href="container">      <button class="primary-btn">REVIEW</button></a>
                        <button class="secondary-btn">CONTACT US</button>
                    </div>
                    </div>
                  </div>
              </div>
              </div>
            </div>
      </div>     
    </section>
 

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   
  <script>
   $('.owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    dots: false,
   responsive:{
        0:{
            items:1
        },
        768:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
</script>

   







<section class="about top">
    <div class="container flex">
        <div class="left">
            <div class="headings">
                <h1>WELCOME</h1>
            </div>
                <h2>The hostel</h2><br>
            
            <p><b>A hostel is a lower-priced inn of sorts that offers basic, shared accommodations.  </b></p><br>
              <p><b>  Typically, a hostel features a large room with separate beds, a shared bathroom.</b></p><br>
              <p><b> Some hostels have private rooms, but the lower-cost ones generally offer bunk beds. </b></p><br>
       <button class ="primary-btn">ABOUT US</button> 
    </div>
    <div class="right">
        <img src="images/bar1.jpeg" width="500" height="300" alt="">
    </div>
    </div>
</section>



<section class="hosteller" id="hosteller">
    <div class="container top">
        <div class="heading6">
            <h1> HOSTELS</h1></div>
            <h2><b>Choose Hostel</b></h2><br><br>
            <p> <b>the romm are very beautiful and very clean and neet to make a veiw good.</b></p>
        
    </div>
           
    <div class="content mtop">
        <div class="owl-carousel owl-carousel1 owl-theme">
            <div class="items">
                <div class="image">
                    <img src="images/background1.jpeg" width="50%" height="12%" alt="">
                </div>
                <div class="text">
                    <h2>Nehru Hostel</h2>
                    <div class="rate flex">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i> 
                         <i class="fa fa-star"></i> 
                        <i class="fa fa-star"></i> 
                        <i class="fa fa-star"></i>
                    </div>
                    <p>the hostel is very nice to looking is good and infrastructure is very good to beautiful  of the side</p>
                <div class="button flex">
                    <a href="hostel1.html">
                    <button class="primarys-btn" >
                        BOOK NOW
                    </button></a>
                
                    
                </div>
            </div>
        </div>

       
    <div class="items">
        <div class="image">
            <img src="images/background3.jpeg" width="50%" height="10%" alt="">
        </div>
        <div class="text">
            <h2>PRK Hostel</h2>
            <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i> 
                 <i class="fa fa-star"></i> 
                <i class="fa fa-star"></i> 
                <i class="fa fa-star"></i>
            </div>
            <p>the hostel is very nice to looking is good and infrastructure is very good to beautiful  of the side</p>
        <div class="button flex">
            <a href="hostel2.html">
            <button class="primarys-btn" >
                BOOK NOW
            </button></a>
            
        </div>
    </div>
</div>

<div class="items">
    <div class="image">
        <img src="images/room4.jpeg" width="50%" height="12%" alt="">
    </div>
    <div class="text">
        <h2>Ramesh Hostel</h2>
        <div class="rate flex">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i> 
             <i class="fa fa-star"></i> 
            <i class="fa fa-star"></i> 
            <i class="fa fa-star"></i>
        </div>
        <p>the hostel is very nice to looking is good and infrastructure is very good to beautiful  of the side</p>
    <div class="button flex">
        <a href="hostel3.html">
        <button class="primarys-btn"  >
            BOOK NOW
        </button>
       </a>
    </div>
</div>
</div>
        </div></div>



</section>
<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:40,
    nav:true,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:2,
            margin: 10,
        },
        1000:{
            items:3
        }
    }
})
</script>





<section class="rooms" id="rooms">
    <div class="container top">
        <div class="heading2">
            <h1>  EXPLORER</h1></div>
            <h2>Our Rooms</h2></br></br>
            <p> <b>the romm are very beautiful and very clean and neet to make a very good view or when the room </b></p>
        
    </div>
        
    <div class="content mtop">
        <div class="owl-carousel owl-carousel1 owl-theme">
            <div class="items">
                <div class="image">
                    <img src="images/room1.jpeg" width="50%" height="12%" alt="">
                </div>
                <div class="text">
                    <h2>Delux rooms</h2>
                    <div class="rate flex">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i> 
                         <i class="fa fa-star"></i> 
                        <i class="fa fa-star"></i> 
                        <i class="fa fa-star"></i>
                    </div>
                    <p>the hostel is very nice to looking is good and infrastructure is very good to beautiful  of the side</p>
               
            </div>
        </div>

       
    <div class="items">
        <div class="image">
            <img src="images/room3.jpeg" width="50%" height="12%" alt="">
        </div>
        <div class="text">
            <h2>Ultra Delux rooms</h2>
            <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i> 
                 <i class="fa fa-star"></i> 
                <i class="fa fa-star"></i> 
                <i class="fa fa-star"></i>
            </div>
            <p>the hostel is very nice to looking is good and infrastructure is very good to beautiful  of the side</p>
       
        
    </div>
</div>

<div class="items">
    <div class="image">
        <img src="images/room4.jpeg" width="50%" height="12%" alt="">
    </div>
    <div class="text">
        <h2>Double bed  rooms</h2>
        <div class="rate flex">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i> 
             <i class="fa fa-star"></i> 
            <i class="fa fa-star"></i> 
            <i class="fa fa-star"></i>
        </div>
        <p>the hostel is very nice to looking is good and infrastructure is very good to beautiful  of the side</p>
    
    </div>

</div>


<div class="items">
    <div class="image">
        <img src="images/room5.jpeg" width="50%" height="12%" alt="">
    </div>
    <div class="text">
        <h2>Superior rooms</h2>
        <div class="rate flex">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i> 
             <i class="fa fa-star"></i> 
            <i class="fa fa-star"></i> 
            <i class="fa fa-star"></i>
        </div>
        <p>the hostel is very nice to looking is good and infrastructure is very good to beautiful  of the side</p>
   
    
</div>
</div>
<div class="items">
    <div class="image">
        <img src="images/room6.jpeg" width="50%" height="12%" alt="">
    </div>
    <div class="text">
        <h2>casual rooms</h2>
        <div class="rate flex">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i> 
             <i class="fa fa-star"></i> 
            <i class="fa fa-star"></i> 
            <i class="fa fa-star"></i>
        </div>
        <p>the hostel is very nice to looking is good and infrastructure is very good to beautiful  of the side</p>
 
</div>
</div>

 </div>

</section>
<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:40,
    nav:true,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:2,
            margin: 10,
        },
        1000:{
            items:3
        }
    }
})
</script>


<section class="services top" id="services">
    <div class="container">
        <div class="heading3">
            <h1>SERVICES</h1></div>
            <h2>Our Services</h2><br><br>
            <p> <b>The services are maintain the hostel to involve our works to very perfect.</b></p>
        
    </div>
     <div class="content flex_space">
        <div class="left grid2">
            <div class="box">
                <div class="text">
                    <i class="fa-solid fa-champagne-glasses"></i>
                    <h3>Delicious Food</h3>
                </div>
            </div>
            
               
                    <div class="box">
                        <div class="text">
                            <i class="fa-solid fa-person-biking"></i>
                            <h3>Fitness</h3>
                        </div>
                    </div>
                   
                        <div class="box">
                            <div class="text">
                                <i class="fa-solid fa-utensils"></i>
                                <h3>Food</h3>
                            </div>
                        </div>
                    
                        <div class="box">
                            <div class="text">
                                <i class="fa-solid fa-wifi"></i>
                                <h3>Wifi</h3>
                            </div>
                        </div>
        </div>

        <div class="right">
            <img src="images/r1.jpg"  alt="">
        </div>
     </div>



    </div>
</section>

<section class="customer top" id="customer">
    <div class="container">
        <div class="owl-carousel owl-carousel2 owl-theme">
            <div class="item">
                <i class="fa-solid fa-quote-right"></i>
                <p>These hostel was good and infrastructure is very nice and good think to 
                    management service are very perfect to express the days to maintain the knowledge 
                    on these given private hostel.The nehru hostel are makes the beautiful thinks of better 
                    playing ground and television process.
                </p>
                      <h3>Nehru hostel</h3>
                      <label>surash</label>
            </div>
            <div class="item">
                <i class="fa-solid fa-quote-right"></i>
                <p>These hostel was good and infrastructure is very nice and good think to 
                    management service are very perfect to express the days to maintain the knowledge 
                    on these given private hostel.The nehru hostel are makes the beautiful thinks of better 
                    playing ground and television process.</p>
                      <h3>PRK hostel</h3>
                      <label>Mani</label>
            </div>
            <div class="item">
                <i class="fa-solid fa-quote-right"></i>
                <p>These hostel was good and infrastructure is very nice and good think to 
                    management service are very perfect to express the days to maintain the knowledge 
                    on these given private hostel.The nehru hostel are makes the beautiful thinks of better 
                    playing ground and television process.</p>
                      <h3>Ramesh hostel</h3>
                      <label>Arun</label>
        
        </div>
    </div>
</section>

<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:40,
    nav:false,
    dots: true,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:1,
            margin: 10,
        },
        1000:{
            items:1
        }
    }
})
</script>











<section  id="about">
<footer>
    <div class="container grid">
        <div class="box">
            <h2>About Us</h2>
            <p> Hostels are popular forms of lodging for backpackers.
                 They are part of the sharing economy.
                  Benefits of hostels include lower costs and opportunities to meet people from different places,
                   find travel partners, and share travel ideas.</p>
      

        <div class="icon">
            <i class="fa fa-facebook-f"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-youtube"></i>

        </div>
    </div>

    <div class="box">
        <h2>Links</h2>
        
            <li>Company History</li>
            <li>About Us</li>
            <li>Contact Us</li>
            <li>Services</li>
            <li>Private Policy</li>
        
    </div>


    <div class="box">
        <h2>Contact Us</h2>
        <p>Person detials to use the contact</p>
        <i class="fa fa-location-dot"></i>
        <label>12,nehru street, mayiladuthurai,609001</label>  <br>
        <i class="fa fa-phone"></i>
            <label>9344502251</label>    <br>    
            <i class="fa fa-envelope"></i>
            <label>sakthi123@gmail.com</label>
      </div>
    </div>
    
</footer>

</section>

<div class="legal" >
    <p class="container" align="center">Copyright (c) 2023 Copyright Holder All  Rights Reserved</p>
</div>






<script src="https://kit.fontawesome.com/032d11eac3.js" crossorigin="anonymous"></script>
</body>
</html>







































