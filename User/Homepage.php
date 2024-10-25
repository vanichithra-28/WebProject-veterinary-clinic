<!-- <?php
session_start();
include("session.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body><h1 align="center">welcome <?php 
// echo $_SESSION['uname'];
?></h1>
<table width="200" border="1">
  <tr>
    <td><a href="Profile.php">View Profile</a></td>
  </tr>
  <tr>
   <td><a href="Addpets.php">Register Pets</a></td>
  </tr>
  
  
  <tr>
    <td><a href="Feedback.php">Add Feedback</a></td>
  </tr>
  <tr>
    <td><a href="complaint.php">Complaints</a></td>
  </tr>
</table>

<a href="Logout.php">Logout</a>
</body>
</html> -->

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="../Assets/Templates/Main/images/bee.png" type="image/x-icon">

  <title>PetAura</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../Assets/Templates/Main/css/bootstrap.css" />
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />


  <!-- Custom styles for this template -->
  <link href="../Assets/Templates/Main/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../Assets/Templates/Main/css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area ">
    <div class="hero_bg_box">
      <img src="../Assets/Templates/Main/images/pets.jpg" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" >
            <span>
              PetAura
            </span>
          </a>
          <div class="" id="">
            <div class="User_option">
              <form class="form-inline my-2  mb-3 mb-lg-0">
                <input type="search" placeholder="Search" />
                <button class="btn   my-sm-0 nav_search-btn" type="submit"> <i class="fa fa-search" aria-hidden="true"></i> </button>
              </form>
            </div>

            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <span class="s-1"> </span>
                <span class="s-2"> </span>
                <span class="s-3"> </span>
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
              <a href="Homepage.php">Home</a>
                <a href="Profile.php">Profile</a>
                <a href="Addpets.php">Register Pets</a>
                <a href="Feedback.php">Add Feedback</a>
                <a href="complaint.php">Complaints</a>
                <a href="Logout.php">Logout</a>

              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->

    <!-- slider section -->
    <section class="slider_section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="detail-box" style="text-align: left; color: white; margin-top: -250px;"> <!-- Adjust the value as needed -->
                    <h1>
                        We Will Take Care <br>
                        Of Your Pets
                    </h1>
                    <p>
                        <!-- Content goes here -->
                    </p>
                    <!-- <a href="" style="color: white;">Read More</a> -->
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- end slider section -->
  </div>

  <div class="main_content">
    <div class="main_content_bg">
      <img src="../Assets/Templates/Main/images/pawprint.jpg" alt="">
    </div>

    <!-- service section -->

    <section class="service_section layout_padding">
      <div class="container py_mobile_45">
        <div class="heading_container heading_center">
          <h2> Our Services </h2>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="box ">
              <div class="img-box">
                <img src="../Assets/Templates/Main/images/pet.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Deworming
                </h5>
                <p>
                PetAura veterinary clinic provides essential deworming services for pets, ensuring their health and well-being.
                 Regular deworming helps prevent parasitic infections that can cause discomfort, illness, or more severe health issues. 
                <br> The clinic recommends routine deworming schedules based on your pet's age, lifestyle, and environment, offering personalized care to keep your pet parasite-free and thriving.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box ">
              <div class="img-box">
                <img src="../Assets/Templates/Main/images/cruelty-free.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Microchipping
                </h5>
                <p>
                Microchipping your pet at PetAura is a quick and safe way to provide permanent identification.
                <br><br>
                A small chip, about the size of a grain of rice, is placed just under your pet's skin. 
                If your pet gets lost, this chip can be scanned by a vet or shelter to find your contact information and help reunite you with your pet.
                 PetAura takes care to ensure the process is comfortable for your pet.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box ">
              <div class="img-box">
                <img src="../Assets/Templates/Main/images/pet-care.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Pet Checkup
                </h5>
                <p>
                A checkup at PetAura veterinary clinic includes a complete health examination of your pet. 
                The veterinarian will check your pet's weight, coat, and vital signs like heart rate and temperature.
                 They may also do blood tests or vaccinations based on your pet's needs.
                 These routine checkups help catch health issues early and provide preventive care, ensuring your pet stays healthy and happy.
                 Regular visits to PetAura support your pet’s long-term well-being.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box ">
              <div class="img-box">
                <img src="../Assets/Templates/Main/images/chameleon.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Emergency Care
                </h5>
                <p>PetAura Veterinary Clinic provides reliable emergency care for pets in urgent situations like injuries, sudden illness, or poisoning. Our skilled team is trained to act quickly, offering immediate treatment to stabilize and diagnose your pet. With advanced tools and medical expertise, we ensure your pet gets the care they need during critical times.
                We also understand that emergencies can be stressful, so we offer compassionate support to pet owners, keeping you informed and reassured throughout the process.  
              </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box ">
              <div class="img-box">
                <img src="../Assets/Templates/Main/images/dentistry.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Dental care
                </h5>
                <p>
                At PetAura, dental care is crucial for your pet's health.
                 Regular check-ups help prevent dental issues like gingivitis and periodontal disease, which can cause serious problems if ignored. 
<br><br>
                The clinic provides professional dental cleanings and treatments to meet your pet's needs.
                 They also offer tips for at-home dental care, including brushing, chew toys, and dental treats.
                  By focusing on your pet's dental health, you can help them live a happy and healthy life.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box ">
              <div class="img-box">
                <img src="../Assets/Templates/Main/images/animal.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Vaccination
                </h5>
                <p>
                Vaccination is an important part of pet care at PetAura veterinary clinic. 
                It protects pets from various diseases and keeps them healthy.<br>
                 PetAura offers vaccines for your pets, including essential core vaccines for all pets and additional ones based on specific needs.
                  The clinic also helps with vaccination schedules and booster shots to ensure continued immunity. 
                  Regular vaccinations not only protect your pet but also help prevent the spread of diseases in the community.
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="btn-box">
          <a href="">
            Read More
          </a>
        </div> -->
      </div>
    </section>

    <!-- end service section -->

    <!-- about section -->

    <section class="about_section ">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="img-box">
              <img src="../Assets/Templates/Main/images/puppy.jpg" alt="" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  About Us
                </h2>
              </div>
              <p>
              PetAura Veterinary Clinic, located in Cochin and Muvattupuzha, Kerala, is dedicated to providing exceptional care in companion animal treatment and management. 
              We understand how challenging it can be when your pet faces a serious illness or injury that requires around-the-clock specialized care. 
              Addressing such situations demands not only high medical excellence but also gentleness and a deep understanding of the emotional journey you and your pet are experiencing.
<br>
Our team at PetAura Veterinary Clinic consists of professionals with extensive training and experience in meeting the medical and emotional needs of pets and their families.
 What sets us apart is our genuine love for animals and their well-being, which inspires us to create a veterinary practice where care and compassion complement the latest medical technology.
              </p>
              <!-- <a href="">
                Read More
              </a> -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end about section -->

    <!-- care section -->

    <section class="care_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  Best Care For Your Pets
                </h2>
              </div>
              <p>
              At PetAura Veterinary Clinic, we prioritize the health and well-being of your pets.
               Our team of experienced veterinarians and compassionate staff provides comprehensive medical services, including wellness exams, vaccinations, dental care, and emergency services.
                We utilize state-of-the-art technology and personalized treatment plans to ensure your pets receive the best possible care.
                 Our clinic emphasizes a friendly, welcoming environment where both pets and their owners feel comfortable. 
                 Trust PetAura for all your pet care needs, as we are dedicated to enhancing the quality of life for your furry family members.
              </p>
              <!-- <a href="">
                Contact Us
              </a> -->
            </div>
          </div>
          <div class="col-md-6">
            <div class="img-box">
              <img src="../Assets/Templates/Main/images/babygoat.jpg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end care section -->

    <!-- client section -->
    <section class="client_section">
      <div class="container">
        <div class="heading_container">
          <h2>
            Testimonial
          </h2>
        </div>
        <div class="carousel-wrap ">
          <div class="owl-carousel">
            <div class="item">
              <div class="box">
                <div class="img-box">
                  <img src="../Assets/Templates/Main/images/c1.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Zoya Hawk <br>
                    <span>
                      Pet Owner
                    </span>
                  </h5>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                  <p>
                  I can't thank PetAura enough for the incredible care they provided to my dog, Luna. When he fell ill,
                   the team was compassionate, knowledgeable, and supportive throughout the entire process.
                   They not only treated his condition but also eased my worries as a pet owner. I highly recommend them!
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box">
                <div class="img-box">
                  <img src="../Assets/Templates/Main/images/c2.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Ryan Jonson <br>
                    <span>
                      Pet Owner
                    </span>
                  </h5>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                  <p>
                  PetAura has been a lifesaver for my cat, Bella. The veterinarians are truly dedicated and go above and beyond to ensure her well-being.
                   They take the time to explain everything and answer all my questions. I feel confident knowing Bella is in such caring hands.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end client section -->


    <!-- contact section -->
<!-- 
    <section class="contact_section layout_padding">
      <div class="container">
        <div class="heading_container">
          <h2>
            Request A Call back
          </h2>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form_container">
              <form action="#">
                <div>
                  <input type="text" placeholder="Full Name " />
                </div>
                <div>
                  <input type="email" placeholder="Email" />
                </div>
                <div>
                  <input type="text" placeholder="Phone number" />
                </div>
                
                <div>
                  <input type="text" class="message-box" placeholder="Message" />
                </div>
                <div class="d-flex ">
                  <button>
                    SEND
                  </button>
                </div>
              </form>
--> </div>
          </div>
          <div class="col-md-6">
            <div class="map_container">
              <div class="map">
                <div id="googleMap"></div>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </section> 

    <!-- end contact section -->
  </div>

  <!-- info section -->

  <section class="info_section layout_padding2">
    <div class="info_container ">
      <div class="container">
        <div class="row">
          <!-- <div class="col-md-6 col-lg-3 ">
            <h6>
              About
            </h6>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority havThere are many variations of passages of Lorem Ipsum available, but the majority hav </p>
          </div> -->
          <div class="col-md-6 col-lg-3 ">
            <!-- <h6>
              Useful Link
            </h6> -->
            <div class="info_link-box">
              <!-- <ul>
                <li class="active">
                  <a href="Homepage.php">
                    Home
                  </a>
                </li>
                <li>
                  <a href="about.html">
                    About
                  </a>
                </li> -->
                <!-- <li>
                  <a href="../Assets/Templates/Main/service.html">
                    Service
                  </a>
                </li> -->
                <!-- <li>
                  <a href="contact.html">
                    Contact
                  </a>
                </li> -->
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ">
            <h6>
              Address
            </h6>
            <div class="contact_items">
              <a href="">
                <div class="item ">
                  <div class="img-box ">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                  </div>
                  <div class="detail-box">
                    <p>
                      Location
                    </p>
                  </div>
                </div>
              </a>
              <a href="">
                <div class="item ">
                  <div class="img-box ">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                  </div>
                  <div class="detail-box">
                    <p>
                      Call +91 9954258762
                    </p>
                  </div>
                </div>
              </a>
              <a href="">
                <div class="item ">
                  <div class="img-box ">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                  </div>
                  <div class="detail-box">
                    <p>
                      petauraclinic2024@gmail.com
                    </p>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ">
            <div class="info_form ">
              <h5>
                Newsletter
              </h5>
              <form action="#">
                <input type="email" placeholder="Enter your email">
                <button>
                  Subscribe
                </button>
              </form>
              <div class="social_box">
                <a href="">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->


  <!-- footer section -->
  <footer class="container-fluid footer_section ">
    <p>
      &copy; <span id="displayDate"></span> All Rights Reserved. 
      <!-- <a href="https://html.design/">Free Html Templates</a> -->
    </p>
  </footer>
  <!-- end  footer section -->

  <script src="../Assets/Templates/Main/js/jquery-3.4.1.min.js"></script>
  <script src="../Assets/Templates/Main/js/bootstrap.js"></script>
  <!-- End Google Map -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="../Assets/Templates/Main/js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>

</body>

</html>