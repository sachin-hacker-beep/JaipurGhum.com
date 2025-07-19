<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JaipurGhum.com</title>
    <meta name="title" content="ChloMereSath.com" >
    <meta name="description" content="this is a travel html template made by sachin" >
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="responsive.css">
    <!-- <link rel="stylesheet" media="screen and (max-width:1280px)" href="mobile.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FOR NUNITO FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&family=Pacifico&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sansita:ital,wght@0,400;0,700;0,800;0,900;1,400;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- END -->
</head>
<body>


                                            <!-- NAVBAR -->

    <header>
        <nav id="navbar">
            <div class="nav1">
                <div class="details">
                    <span class="address">
                        <i class="fa-solid fa-location-dot"></i>
                        SSG Pareek College
                    </span>
                    <span class="call">
                        <i class="fa-solid fa-phone"></i>
                        +91 9352864557
                    </span>
                    <span class="email">
                        <i class="fa-solid fa-envelope"></i>
                        sachinsahu19004@gmail.com
                    </span>
                </div>
                <div class="logos">
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-facebook-f"></i>
                    <a href="https://www.linkedin.com/in/sachin-sahu-850525356?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="https://www.instagram.com/only__sachin__787?igsh=ZnJuM2FiNmNxaDRv" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <i class="fa-brands fa-youtube"></i>
                </div>    
            </div>
            <div class="nav2">
                <div class="logo">
                    <i class="fa-solid fa-location-dot" style="color: #86b817;"></i>
                    <h1>JaipurGhum</h1>
                </div>
                <ul class="nav2list">
                    <li><a href="#" class="active">home</a></li>
                    <li><a href="#hero2" class="navlist">Gallery</a></li>
                    <li><a href="#hero3" class="navlist">package</a></li>
                    <li><a href="#hero4" class="navlist">contact</a></li>
                    <li><a href="#hero8" class="navlist">services</a></li>
                    <li><a href="#hero7" class="navlist">about</a></li>
                    <li><a href="#" class="book" id="login-btn">register</a></li>
                </ul>
                <i id="menubars" class="fa-solid fa-bars"></i>
            </div>    
        </nav>
    </header>    

                                    <!-- SIGN UP FORM -->


    <div class="container" id="container">
        <i class="fa-solid fa-xmark" id="fa-xmark"></i>
        <form action="register.php" method="POST">
            <h1>Register </h1>
            <label for="name">Full Name</label>
            <input type="text" id="reg-name" name="reg-name" placeholder="Enter your full name" required>

            <label for="email">Email Address</label>
            <input type="email" id="reg-email" name="reg-email" placeholder="Enter your email" required>

            <label for="password">Password</label>
            <input type="password" id="reg-password" name="reg-password" placeholder="Create a password" required>

            <input type="submit" class="register-btn">
            <div class="login-link">
                <p>Already have an account? <a id="register-btn" href="#form-container">Login here</a></p>
            </div>
        </form>
    </div>

    <div class="form-container" id="form-container">
        <i class="fa-solid fa-xmark" id="form-close"></i>
        <form action="submit.php" method="post">
            <h3>LOGIN</h3>
            <label for="email"></label>
            <input type="email" id="email-box" placeholder=" Enter Email" class="input-box" name="reg-email" required >
            <label for="Password-box"></label>
            <input type="password" id="Password-box" placeholder=" Enter Password" class="input-box" required name="reg-password" >
            <input type="submit" id="submit-btn" class="input-box" value="submit" onclick="func()">
            <!-- <input type="checkbox" id="select" value="Remember Me"> -->
            
            <p>Forget Password ?</p> 
            <p>Don't Have an Account. <a id="signup-btn" href="#">Register.</a> </p>
        </form>
    </div>

                                        <!-- HERO SECTION 1 -->

    <section id="hero1">        
        <p>Enjoy Your Vacation In <spam>Jaipur</spam></p>
        <span>THE CAPITAL OF RAJASTHAN JAIPUR ALSO KNOWN AS <a href="#">"PINK CITY"</a>. THE CITY OF GREAT WARRIORS AND THEIR PALACES.</span>
        <!-- <div class="searchbar">
            <input type="text" placeholder="Eg. Jaigarh">
            <button>Search</button>
        </div>     -->
        <div class="slider-btn">
            <div id="slide1" class="slide active-slide" data-src="fortvideo.mp4"></div>
            <div id="slide2" class="slide" data-src="jalmahalvideo.mp4"></div>
            <div id="slide3" class="slide" data-src="fortvideo.mp4"></div>
            <div id="slide4" class="slide" data-src="roadvideo.mp4"></div>
            <div id="slide5" class="slide" data-src="jalmahalvideo.mp4"></div>
        </div>
        <div class="video-container">
            <video src="fortvideo.mp4" id="video-slider" loop autoplay></video>
        </div>
        </div>
        <!-- <div class="videos">
            <video autoplay muted src="fortvideo.mp4" ></video>
        </div>
        <div class="videos">
            <video autoplay muted src="fortvideo.mp4" ></video>
        </div>
        <div class="videos">
            <video autoplay muted src="fortvideo.mp4" ></video>
        </div>
        <div class="videos">
            <video autoplay muted src="fortvideo.mp4" ></video>
        </div> -->
    </section>

                                      <!-- HERO SECTION 2 -->      


    <section id="hero2">
        <div class="hero2item1 heroitems">
            <h6 class="smallhead">DESTINATION</h6>
            <h1 class="bighead">Popular Destination</h1>
        </div>
        <div class="hero2item2 heroitems">
            <div class="container1">
                <div class="picsec1">
                    <p>JAL MAHAL</p>
                    <img src="jalmahal2.jpg" alt="">
                </div>
                <div class="picsec2">
                    <div class="pic1 pic">
                        <p>ALBERT HALL</p>
                        <img src="alberthall3.webp" alt="">
                    </div>
                    <div class="pic2 pic">
                        <p>AMER FORT</p>
                        <img src="amerfort2.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="container2">
                <p>HAWAMAHAL</p>
                <img src="havamahal.jpg" alt="">
            </div>
        </div>
    </section>


                                        <!-- HERO SECTION 3 -->
                                         
                                        
    <section id="hero3">
        <div class="hero3item1 heroitems">
            <h6 class="smallhead">PACKAGES</h6>
            <h1 class="bighead">Awesome Packages</h1>
        </div>
        <div class="boxes">
            <article class="packbox">
                <div class="imgtag1"></div>
                <div class="specify">
                    <div class="specify1">
                        <i class="fa-solid fa-location-dot" style="color: #86b817;"></i>
                        <p>HAWAMAHAL</p>
                    </div>
                    <div class="specify1">
                        <i class="fa-solid fa-calendar-days" style="color: #86b817;"></i>
                        <p>1 DAY</p>
                    </div>
                    <div class="specify1">
                        <i class="fa-solid fa-user" style="color: #86b817;"></i>
                        <p>5 PERSON</p>
                    </div>
                </div>
                <div class="price">
                    <div class="rate">
                        <p>$ 100.00</p>
                    </div>
                    <div class="rating">
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i> 
                    </div>
                </div>
                <div class="abt">
                    <div class="para">
                        <p>TIP :- There Are Many Mysterious Things.So You Must Keep a Guide To Explain. After That There Are Many Market You Can Shopping Also.</p>
                    </div>
                    <div class="btn">
                        <button id="btn1"><a href="#hero6">READ MORE</a></button>
                        <button id="btn2" ><a href="#hero4">BOOK NOW</a></button>
                    </div>
                </div>
            </article>
            <article class="packbox">
                <div class="imgtag2"></div>
                <div class="specify">
                    <div class="specify1">
                        <i class="fa-solid fa-location-dot" style="color: #86b817;"></i>
                        <p>HAWAMAHAL</p>
                    </div>
                    <div class="specify1">
                        <i class="fa-solid fa-calendar-days" style="color: #86b817;"></i>
                        <p>1 DAY</p>
                    </div>
                    <div class="specify1">
                        <i class="fa-solid fa-user" style="color: #86b817;"></i>
                        <p>5 PERSON</p>
                    </div>
                </div>
                <div class="price">
                    <div class="rate">
                        <p>$ 100.00</p>
                    </div>
                    <div class="rating">
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i> 
                    </div>
                </div>
                <div class="abt">
                    <div class="para">
                        <p>TIP :- There Are Many Mysterious Things.So You Must Keep a Guide To Explain. After That There Are Many Market You Can Shopping Also.</p>
                    </div>
                    <div class="btn">
                        <button id="btn1"><a href="#hero6">READ MORE</a></button>
                        <button id="btn2"><a href="#hero4">BOOK NOW</a></button>
                    </div>
                </div>
            </article>
            <article class="packbox">
                <div class="imgtag3"></div>
                <div class="specify">
                    <div class="specify1">
                        <i class="fa-solid fa-location-dot" style="color: #86b817;"></i>
                        <p>HAWAMAHAL</p>
                    </div>
                    <div class="specify1">
                        <i class="fa-solid fa-calendar-days" style="color: #86b817;"></i>
                        <p>1 DAY</p>
                    </div>
                    <div class="specify1">
                        <i class="fa-solid fa-user" style="color: #86b817;"></i>
                        <p>5 PERSON</p>
                    </div>
                </div>
                <div class="price">
                    <div class="rate">
                        <p>$ 100.00</p>
                    </div>
                    <div class="rating">
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i> 
                    </div>
                </div>
                <div class="abt">
                    <div class="para">
                        <p>TIP :- There Are Many Mysterious Things.So You Must Keep a Guide To Explain. After That There Are Many Market You Can Shopping Also.</p>
                    </div>
                    <div class="btn">
                        <button id="btn1"><a href="#hero6">READ MORE</a></button>
                        <button id="btn2"><a href="#hero4">BOOK NOW</a></button>
                    </div>
                </div>
            </article>
        </div>    
    </section>
    

                                        <!-- HERO SECTION 4 -->
                                         
    
    <section id="hero4">
        <div class="smallhead">
            <h6>BOOK TRIP</h6>
        </div>
        <div class="bighead">Booking Section</div>
        <article >
            <div class="div1">
                <!-- <h3>BOOKING</h3>
                <h1>Online Booking</h1>
                <p>Chalo Mere Sath.com welcomes you. we promise you to serve sweet and memoriable trip / vacation. we have latest models of vehicles </p>
                <p>we have best tour guides. they will explain you everything in detail</p>
                <p>if you want to know more about places. then click on "READ MORE".</p>
                <a href="#hero7">READ MORE</a> -->
            </div>
            <div class="div2">
                <h1>BOOK A TOUR</h1> 
                <div class="inputdiv">
                    <form action="https://api.web3forms.com/submit" method="POST" method="post">
                        <input type="hidden" name="access_key" value="f53f6e34-b201-4b79-8f82-136703dbf4a6">
                        <label for="username">Name :</label>
                        <input type="text" name="username" id="username">
                        <label for="useremail">Email :</label>
                        <input type="email" name="useremail" id="useremail">
                        <label for="destination">Destination :</label>
                        <input type="text" name="destination" id="destination">
                        <label for="date">Date :</label>
                        <input type="date" name="date" id="date">
                        <label for="additional">Additional Details :</label>
                        <input type="text" name="additional" id="additional">
                        <!-- for submit button -->
                        <input type="submit" value="submit" id="submit">
                    </form>
                </div>
            </div>
        </article>
    </section>
    

                                        <!-- HERO SECTION 5 -->
                                         
    
    <section id="hero5">
        <div class="hero5item1">
            <div class="smallhead">
                <h6>PROCESS</h6>
            </div>
            <div class="bighead">
                3 Easy Steps
            </div>
        </div>
        <div class="hero5item2">
            <div class="processbox">
                <div class="icondiv">
                    <i class="fa-solid fa-globe" style="color: #ffffff;"></i>
                </div>
                <h3>Choose A Destination</h3>
                <p>just choose a destination and fill all the information correctly. after that move on the next step. </p>
            </div>
            <div class="processbox">
                <div class="icondiv">
                    <i class="fa-solid fa-indian-rupee-sign" style="color: #ffffff;"></i>
                </div>    
                <h3>Pay Online</h3>
                <p> you can pay before the journey and after the journey. paymenty method can be online OR cash. </p>
            </div>
            <div class="processbox">
                <div class="icondiv">
                    <i class="fa-solid fa-plane" style="color: #ffffff;"></i>
                </div>
                <h3>Enjoy & Chill</h3>
                <p>after booking the trip. meet on the pickup point. and our staff also provide doorstep service </p>
            </div>
        </div>
    </section>
    

                                        <!-- HERO SECTION 6 -->
                                         
    
    <section id="hero6">
        <div class="hero6item1 heroitems">
            <h6 class="abthead2 smallhead">INFORMATION</h6>
            <h1 class="abthead bighead">ABOUT PLACES</h1>
        </div>    
        <article id="aboutplaces">
            <div class="box box1">
                <div class="boxitem1">
                    <img src="havamahal.jpg" alt="">
                    <div class="abouttext">
                        <h6>
                            ABOUT HAWAMAHAL
                        </h6>
                        <h1>
                            Welcome My <a href="#">Tourist</a>
                        </h1>
                    </div>
                </div>            
                <div class="boxitem2">    
                    <p>The Hawa Mahal is a palace in the city of Jaipur, Rajasthan, India. Built from red and pink sandstone, it is on the edge of the City Palace, Jaipur, and extends to the Zenana, or women's chambers.
                    Hawa Mahal is known as the “ palace of winds “. Maharaja Sawai Pratap Singh built it palace in 1799. Hawa Mahal is considered to be unique as it has many small windows and balconies that seem like a honeycomb.</p>
                </div>
            </div>     
            <div class="box box2">
                <div class="boxitem1">
                    <img src="alberthall.jpg" alt="">
                    <div class="abouttext">
                        <h6>
                            ABOUT ALBERT HALL
                        </h6>
                        <h1>
                            Welcome My <a href="#">Tourist</a>
                        </h1>
                    </div>
                </div>            
                <div class="boxitem2">    
                    <p>The Albert Hall Museum in Jaipur is the oldest museum of the state and functions as the state museum of Rajasthan, India. The building is situated in Ram Niwas garden outside the city wall opposite New gate and is a fine example of Indo-Saracenic architecture. It is also called the Government Central Museum. It was considered one of the best 19th century museums for the variety of its collections.</p>
                </div>
            </div>     
            <div class="box box3">
                <div class="boxitem1">
                    <img src="jalmahal.jpg" alt="">
                    <div class="abouttext">
                        <h6>
                            ABOUT JALMAHAL
                        </h6>
                        <h1>
                            Welcome My <a href="#">Tourist</a>
                        </h1>
                    </div>        
                </div>
                <div class="boxitem2">    
                    <p>Jal Mahal (meaning "Water Palace") is a palace in the middle of the Man Sagar Lake in Jaipur city, the capital of the state of Rajasthan, India. The palace was originally constructed around 1699; the building and the lake around it were later renovated and enlarged in the early 18th century by Maharaja Jai Singh II of Amber.</p>
                </div>    
            </div>
            <div class="box box4">
                <div class="boxitem1">
                    <img src="citypalace.webp" alt="">
                    <div class="abouttext">
                        <h6>
                            ABOUT CITY PALACE
                        </h6>
                        <h1> 
                            Welcome My <a href="#">Tourist</a>
                        </h1>
                    </div>
                </div>            
                <div class="boxitem2">    
                    <p>The City Palace, Jaipur is a royal residence and former administrative headquarters of the rulers of the Jaipur State in Jaipur, Rajasthan. Construction started soon after the establishment of the city of Jaipur under the reign of Maharaja Sawai Jai Singh II, who moved his court to Jaipur from Amber, in 1727. Jaipur remained the capital of the kingdom until 1949—when it became the capital of the present-day Indian state of Rajasthan—with the City Palace functioning as the ceremonial and administrative seat of the Maharaja of Jaipur.</p>
                </div>
            </div>     
            <div class="box box5">
                <div class="boxitem1">
                    <img src="amerfort.jpg" alt="">
                    <div class="abouttext">
                        <h6>
                            ABOUT AMBER FORT
                        </h6>
                        <h1>
                            Welcome My <a href="#">Tourist</a>
                        </h1>
                    </div>
                </div>            
                <div class="boxitem2">    
                    <p>Amer Fort or Amber Fort is a fort located in Amer, Rajasthan, India. Amer is a town with an area of 4 square kilometres (1.5 sq mi)[2] located 11 kilometres (6.8 mi) from Jaipur, the capital of Rajasthan. Located high on a hill, it is the principal tourist attraction in Jaipur.[3][4] Amer Fort is known for its artistic style elements. With its large ramparts and series of gates and cobbled paths, the fort overlooks Maota Lake,[4][5][6][7] which is the main source of water for the Amer Palace.</p>
                </div>
            </div>     
            <div class="box box6">
                <div class="boxitem1">
                    <img src="biological.jpg" alt="">
                    <div class="abouttext">
                        <h6>
                            ABOUT BIOLOGICAL PARK
                        </h6>
                        <h1>
                            Welcome My <a href="#">Tourist</a>
                        </h1>
                    </div>        
                </div>
                <div class="boxitem2">    
                    <p>Nahargarh Biological Park, a part of the Nahargarh sanctuary is located about 12 km from Jaipur on the Jaipur-Delhi highway. It encompasses a large area of 720 hectares and is situated under the Aravalli range.</p>
                </div>    
            </div>
            <div class="box box7">
                <div class="boxitem1">
                    <img src="nahargarhfort.jpg.webp" alt="">
                    <div class="abouttext">
                        <h6>
                            ABOUT NAHARGARH FORT
                        </h6>
                        <h1>
                            Welcome My <a href="#">Tourist</a>
                        </h1>
                    </div>
                </div>            
                <div class="boxitem2">    
                    <p>Nahargarh Fort stands on the edge of the Aravalli Hills, overlooking the city of Jaipur in the Indian state of Rajasthan. Along with Amer Fort and Jaigarh Fort, Nahargarh once formed a strong defence ring for the city. The fort was originally named Sudershangarh, but it became known as Nahargarh, which means 'abode of tigers'. The popular belief is that Nahar here stands for Nahar Singh Bhomia,[2] whose spirit haunted the place and obstructed construction of the fort.[3] Nahar's spirit was pacified by building a temple in his memory within the fort, which thus became known by his name.</p>
                </div>
            </div>     
            <div class="box box8">
                <div class="boxitem1">
                    <img src="jaigarhfort.jpg.webp" alt="">
                    <div class="abouttext">
                        <h6>
                            ABOUT JAIGARH FORT
                        </h6>
                        <h1>
                            Welcome My <a href="#">Tourist</a>
                        </h1>
                    </div>
                </div>            
                <div class="boxitem2">    
                    <p>Jaigarh Fort is situated on the promontory called the Cheel ka Teela (Hill of Eagles) of the Aravalli range; it overlooks the Amer Fort and the Maota Lake, near Amer in Jaipur, Rajasthan, India.
                    Raja Kakil Dev captured the Amber region from the Mina tribes and began construction of Jaigarh fort around the middle of the eleventh century. Over the centuries, the Fort was augmented by subsequent rulers, including Maha Raja Jai Singh II, who added palace apartments to the complex.</p>
                </div>
            </div>     
            <div class="box box9">
                <div class="boxitem1">
                    <img src="patrikagate.jpeg" alt="">
                    <div class="abouttext">
                        <h6>
                            ABOUT PATRIKA GATE
                        </h6>
                        <h1>
                            Welcome My <a href="#">Tourist</a>
                        </h1>
                    </div>        
                </div>
                <div class="boxitem2">    
                    <p>The Patrika Gate is one of Jaipur’s newest tourist attractions. It was built by the local Patrika group of Newspapers in 2016 and serves as the entrance to Jawahar Circle Garden–Asia’s biggest circular park. Besides this, the gate is also a monument that showcases Rajasthan's architectural and cultural heritage.  </p>
                </div>    
            </div>
        </article>
    </section>    
    

                                        <!-- HERO SECTION 8 -->
                                         
    
    <section id="hero8">
        <div class="hero8item1">
            <h6 class="abthead2 smallhead">SERVICES</h6>
            <h1 class="abthead bighead">OUR SERVICES</h1>
        </div>
        <div class="hero8item2">
            <div class="servicebox">
                <i class="fas fa-hotel"></i>
                <h2>Affordable Hotel</h3>
                <p>our travel driver will drop you to your choosen hotel. so, you can rest and next morning our driver will pick up from your hotel</p>
            </div>
            <div class="servicebox">
                <i class="fas fa-utensils"></i>
                <h2>Food & Drinks</h3>
                <p>best restaurent and best food places in jaipur with pocket friendly budget for meal.</p>
            </div>
            <div class="servicebox">
                <i class="fas fa-bullhorn"></i>
                <h2>Safety Guide</h3>
                <p>kindly follow all the rules and protocol to avoid the inconvenience and to have a good journey.</p>
            </div>
            <div class="servicebox">
                <i class="fa-solid fa-earth-asia"></i>
                <h2>All Jaipur</h3>
                <p>visit all the places in jaipur which are mmentioned to our webSite. <br><b>IMP :- extra charge will be apply for extra places.</b></p>
            </div>
            <div class="servicebox">
                <i class="fas fa-car"></i>
                <h2>Fastest Travel</h3>
                <p>all the shortest path to reach the destination. by avoiding the traffic try to capture all the monuments</p>
            </div>
            <div class="servicebox">
                <i class="fas fa-hiking"></i>
                <h2>Adventures</h3>
                <p>your journey will be full of adventures and will be joyfull and be memoriable</p>
            </div>
        </div>
    </section>
    

                                           <!-- HERO SECTION 7 -->
                                         
    
    <section id="hero7"> 
        <div class="hero7item1">
            <div class="smallhead">
                <h6>ABOUT</h6>
            </div>
            <div class="bighead">
                <h1>ABOUT US</h1>
            </div>
        </div>
        <div class="hero7item2">
            <div class="aboutpic">
                <img src="friend.jpeg" alt="">
            </div>
            <div class="aboutus">
                <h6>
                    ABOUT US
                </h6>
                <h1>
                    Welcome To <a href="#">Tourist</a>
                </h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta tempora earum ut doloremque consequuntur laudantium?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum voluptate, ipsa quasi perspiciatis vero, sed nesciunt iure adipisci molestias itaque, quos asperiores quas.
                </p>
                <div class="list">
                    <ul>
                        <li>&rarr; First Class Vehicle</li>
                        <li>&rarr; 5 Star Accommodations</li>
                        <li>&rarr; 10+ Places</li>
                    </ul>
                    <ul>
                        <li>&rarr; Handpicked Hotels</li>
                        <li>&rarr; Latest Model Vehicles</li>
                        <li>&rarr; 24/7 Services</li>
                    </ul>
                </div>  
                <button>READ MORE</button>  

            </div>
        </div>    
    </section>
    

                                        <!-- FOOTER SECTION -->
                                         
    
    <footer>
        <div class="footer-sec">
            <div class="foot-item-list fil1" >
                <h2>Company</h2>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">FAQs & Helps</a></li>
                </ul>
            </div>    
            <div class="foot-item-list fil2">
                <h2>Contact</h2>
                <span class="dif-sec">
                    <i class="fa-solid fa-location-dot"></i>
                    <p>SSG Pareek College</p>
                </span>
                <span class="dif-sec">
                    <i class="fa-solid fa-phone"></i>
                    <p>+91 9352864557</p>
                </span>
                <span class="dif-sec">
                    <i class="fa-solid fa-envelope"></i>
                    <p>sachinsahu19004@gmail.com</p>
                </span>
                <div class="foot-logos">
                    <div class="eachlogo">
                        <i class="fa-brands fa-twitter"></i>
                    </div>    
                    <div class="eachlogo">
                        <i class="fa-brands fa-facebook-f"></i>
                    </div>
                    <div class="eachlogo">
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                    <div class="eachlogo">
                        <i class="fa-brands fa-youtube"></i>
                    </div>    
                </div>
            </div>
            <div class="foot-item-list fil3">
                <h2>Gallery</h2>
                <div class="imgsec">
                    <div class="imgdiv1"></div>
                    <div class="imgdiv2"></div>
                    <div class="imgdiv3"></div>
                    <div class="imgdiv4"></div>
                    <div class="imgdiv5"></div>
                    <div class="imgdiv6"></div>
                </div>
            </div>
             
        </div>
        <div class="footer-sec2">
            <p>&#169 <a href="#">ChloMereSath.com</a> ,&nbsp; All Rights Reserved. Designed By <a href="#">Sachin Sahu</a></p>
        </div>
    </footer>
    <script src="index.js"></script>
</body>
</html>