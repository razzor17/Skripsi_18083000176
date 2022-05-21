<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Responsive House Rent Website</title>
    <!-- LInk To CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Box Icons -->

    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    </head>
</head>
<body>
    <!-- Navbar -->
    <header>
        <div class="nav container">
            <!-- Logo -->
            <a href="index.html" class="logo"><i class='bx bx-home'></i>PPI Property</a>
            <!-- Menu Icon -->
            <input type="checkbox" name="" id="menu">
            <label for="menu" <i class='bx bx-menu' id="menu-icon"></i></label>
            <!-- Nav List -->
            <ul class="navbar">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">Abouts Us</a></li>
                <li><a href="#sales">Sales</a></li>
                <li><a href="#properties">Properties</a></li>
            </ul>
            <!-- Log In Button -->
            <a href="login.html" class="btn">Log In</a>
        </div>

    </header>
    <!-- Home -->
    <section class="home container" id="home">
        <div class="home-text">
            <h1>Find Your Next <br>Perfect Place To <br>Live.</h1>
            <a href="sign-up.html" class="btn">Sign Up</a>
        </div>
    </section>
    <!-- About -->
    <section class="about container" id="about">
        <div class="about-img">
            <img src="img/about.jpg" alt="">
        </div>
        <div class="about-text">
            <span>About Us</span>
            <h2>We Provide The Best <br>Property For You !</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quo perspiciatis repudiandae cumque recusandae explicabo?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quo perspiciatis repudiandae cumque recusandae explicabo?</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias, optio.</p>
            <a href="#" class="btn">Learn More</a>
        </div>
    </section>
    <!-- Sales -->
    <section class="sales container" id="sales">
        <!-- Box 1 -->
        <div class="box">
            <i class='bx bx-user'></i>
            <h3>Make your Dream True</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non, consequuntur?</p>
        </div>
        <!-- Box 2 -->
        <div class="box">
            <i class='bx bx-desktop'></i>
            <h3>Start Your Membership</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non, consequuntur?</p>
        </div>
        <!-- Box 3 -->
        <div class="box">
            <i class='bx bx-home-alt'></i>
            <h3>Enjoy Your New Home</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non, consequuntur?</p>
        </div>
    </section>
    <!-- Properties -->
    <section class="properties container" id="properties">
        <div class="heading">
            <span>Recent</span>
            <h2>Our Featured Properties</h2>
            <p>Lorem, ipsum dolor sit amet consectetur <br> adipisicing elit. Perspiciatis, dicta!</p>
        </div>
        <div class="properties-container container">
            <!-- Box 1 -->
            <div class="box">
                <img src="img/p1.jpg" alt="">
                <h3>$12,999</h3>
                <div class="content">
                    <div class="text">
                        <h3>The Palace</h3>
                        <p>London, UK</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>5</span></i>
                        <i class='bx bx-bath'><span>2</span></i>
                    </div>
                </div>
            </div>
            <!-- Box 2 -->
            <div class="box">
                <img src="img/p2.jpg" alt="">
                <h3>$12,999</h3>
                <div class="content">
                    <div class="text">
                        <h3>The Palace</h3>
                        <p>London, UK</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>5</span></i>
                        <i class='bx bx-bath'><span>2</span></i>
                    </div>
                </div>
            </div>
            <!-- Box 3 -->
            <div class="box">
                <img src="img/p3.jpg" alt="">
                <h3>$12,999</h3>
                <div class="content">
                    <div class="text">
                        <h3>The Palace</h3>
                        <p>London, UK</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>5</span></i>
                        <i class='bx bx-bath'><span>2</span></i>
                    </div>
                </div>
            </div>
            <!-- Box 4 -->
            <div class="box">
                <img src="img/p4.jpg" alt="">
                <h3>$12,999</h3>
                <div class="content">
                    <div class="text">
                        <h3>The Palace</h3>
                        <p>London, UK</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>5</span></i>
                        <i class='bx bx-bath'><span>2</span></i>
                    </div>
                </div>
            </div>
            <!-- Box 5 -->
            <div class="box">
                <img src="img/p5.jpg" alt="">
                <h3>$12,999</h3>
                <div class="content">
                    <div class="text">
                        <h3>The Palace</h3>
                        <p>London, UK</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>5</span></i>
                        <i class='bx bx-bath'><span>2</span></i>
                    </div>
                </div>
            </div>
            <!-- Box 6 -->
            <div class="box">
                <img src="img/p6.jpg" alt="">
                <h3>$12,999</h3>
                <div class="content">
                    <div class="text">
                        <h3>The Palace</h3>
                        <p>London, UK</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>5</span></i>
                        <i class='bx bx-bath'><span>2</span></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- NewsLetter -->
    <section class="newsletter container">
        <h2>Have Question in mind <br>Let us help you</h2>
        <form action="">
            <input type="email" name="" id="email-box" placeholder="yourmail@gmail.com" required>
            <input type="submit" value="Send" class="btn">
        </form>
    </section>
    <!-- Footer -->
    <section class="footer">
        <div class="footer-container container">
            <h2>PPI Property</h2>
            <div class="footer-box">
                <h3>Quick Links</h3>
                <a href="#">Agency</a>
                <a href="#">Building</a>
                <a href="#">Rates</a>
            </div>
            <div class="footer-box">
                <h3>Locations</h3>
                <a href="#">Jakarta</a>
                <a href="#">Surabaya</a>
                <a href="#">Bandung</a>
            </div>
            <div class="footer-box">
                <h3>Contact</h3>
                <a href="#">+62 87721277990</a>
                <a href="#">m.verdisa@gmail.com</a>
                <div class="social">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Copyright -->
    <div class="copyright">
        <p>&#169 Real Estate Template</p>
    </div>

</body>

</html>