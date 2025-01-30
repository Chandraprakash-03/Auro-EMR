<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aravind Eye Hospital - EMR</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <link rel="icon" href="assets\images\logo2.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/landing.css">
  <!-- <link rel="stylesheet" href="css/fonts.css"> -->

  
</head>
<body>

  <!-- Navbar Section -->
  <nav id="navbar" class="navbar navbar-expand-lg sticky-nav fixed-top">
    <div class="container">
      <div class="header-logo">
        <a class="navbar-brand" href="#">
        <div class="logo">
          <img src="assets\images\logo1-removebg-preview.png" alt="Logo">
        </div>
        <div><span class="company-name">Aravind Eye Hospitals EMR</span></div>
        
       </a>
     </div>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto gap-3 fs-5">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="patientappointment.php">Appointment</a>
          </li>
          <li class="nav-item dropdown">
            <button class="btn btn-login dropdown-toggle" data-bs-toggle="dropdown">Log In</button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="adminlogin.php">Admin</a></li>
                <li><a class="dropdown-item" href="doctorlogin.php">Doctor</a></li>
                <li><a class="dropdown-item" href="nurselogin.php">Nurse</a></li>
                <li><a class="dropdown-item" href="patientlogin.php">Patient</a></li>
            </ul>
        </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero">
    <!-- Hero Background Slices -->
    <div class="image-slice" style="left: 0; background-image: url('assets/images/Row-1.jpeg');"></div>
    <div class="image-slice" style="left: 25%; background-image: url('assets/images/Row-2.jpeg');"></div>
    <div class="image-slice" style="left: 50%; background-image: url('assets/images/Row-3.jpeg');"></div>
    <div class="image-slice" style="left: 75%; background-image: url('assets/images/Row-4.jpeg');"></div>

    <div class="hero-content container">
      <h1 class="hero-title">Welcome to Aravind Eye Hospitals EMR</h1>
      <p class="hero-subtitle">Advanced Electronic Medical Records</p>
      <div class="hero-buttons">
        <a href="#about" class="btn btn-learn">Learn More</a>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section class="about-section" id="about">
    <div class="container">
      <h2 class="about-title">About Us</h2>
      <div class="about-content">
        <div class="about-text">
          <h2>Our Story</h2>
          <p>What started off as an 11-bed hospital has now become the conglomerate, Aravind Eye Care System. Today, Aravind operates a growing network of eye care facilities, a postgraduate institute, a management training and consulting institute, an ophthalmic manufacturing unit, a research institute and eye banks. Aravind’s eye care facilities include 14 eye hospitals, 7 outpatient eye examination centres and 114 primary eye care facilities in South India.</p>
        </div>
        <div class="about-images">
          <div class="img-box">
            <img src="https://uat.aravind.org/wp-content/uploads/2019/10/Aravind_Kovilpatti.jpg">
          </div>
          <div class="img-box">
            <img src="https://uat.aravind.org/wp-content/uploads/2019/02/Chennai_Hospital_view_Mike_Dec__2017.jpg">
          </div>
        </div>

        <!-- Decorative Circles -->
        <div class="circle circle-small"></div>
        <div class="circle circle-large"></div>
      </div>
    </div>
  </section>

  <!-- Unique Dish Section -->
  <section id="unique-dish" class="unique-dish">
    <div class="container">
      <h2>Our Departments</h2>
      <div class="dish-cards">
        <div class="dish-card">
          <h4>Ophthalmology</h4>
          <div class="content">
            <p>
                <span class="highlight">Ophthalmology</span> is the branch of medicine focused on diagnosing and treating eye disorders, including conditions like cataracts, glaucoma,
                 and refractive errors. Advanced procedures such as LASIK surgery and retinal treatments provide effective solutions for vision correction and restoration. Subspecialties include pediatric ophthalmology,
                  neuro-ophthalmology, and ocular oncology, which address specialized eye health needs. Regular eye check-ups and early detection of conditions like diabetic retinopathy are essential for maintaining long-term 
                  vision health.
            </p>
        </div>
        </div>
        <div class="dish-card">
          <h4>Pediatric ophthalmology</h4>
          <div class="content">
            <p>
                <span class="highlight">Pediatric ophthalmology</span> focuses on providing eye care to children, addressing conditions like amblyopia (lazy eye), strabismus (misaligned eyes),
                 congenital cataracts, and genetic eye disorders. Pediatric ophthalmologists use specialized techniques to diagnose and treat young patients, ensuring proper visual development 
                 during critical growth phases.  
             </p> 
        </div>
        </div>
        <div class="dish-card">
          <h4>Glaucoma</h4>
          <div class="content">
            <p>
                <span class="highlight">Glaucoma</span>  subspecialty is dedicated to diagnosing and managing glaucoma, a condition that damages the optic nerve and can lead to irreversible vision loss.
                 Glaucoma specialists address different types of the disease, including open-angle glaucoma, which progresses gradually, and angle-closure glaucoma, a more severe and acute form. Treatments 
                 range from medications like pressure-reducing eye drops to laser therapies and surgical interventions to manage intraocular pressure and protect vision.
             </p> 
        </div>
        </div>
      </div>
    </div>
  </section>

   <!-- Number Section -->
   <section class="number-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 number-box">
          <h2><span class="happy-customer" data-target="32">0</span><span class="plus-symbol">M+</span></h2>
          <p>Happy Patients</p>
        </div>
        <div class="col-md-4 number-box">
          <h2><span class="special-orders" data-target="4">0</span><span class="plus-symbol">M+</span></h2>
          <p>Successful Surgeries</p>
        </div>
        <div class="col-md-4 number-box">
          <h2><span class="years-experience" data-target="49">0</span><span class="plus-symbol">+</span></h2>
          <p>Years of Experience</p>
        </div>
      </div>
    </div>
  </section>
  
   
      <!-- Footer Section -->
<footer class="footer" id="Footerr">
  <div class="container">
    <div class="row">
      <!-- Company Info -->
      <div class="col-lg-4 col-md-6 mb-4">
        <h5 class="footer-title">Aravind Eye Hospitals EMR</h5>
        <p class="Company-para">Intelligence and capability are not enough. There must be the joy of doing something beautiful.</p>
        <img src="assets\images\logo1-removebg-preview.png" alt="Cake Bakery Logo" class="footer-logo">
      </div>

      <!-- Quick Links -->
      <!-- <div class="col-lg-2 col-md-6 mb-4">
        <h5 class="footer-title">Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="#about" class="text">About Us</a></li>
          <li><a href="#products" class="text">Our Menu</a></li> -->
          <!-- <li><a href="#order" class="text">Order Online</a></li> -->
          <!-- <li><a href="https://wa.me/7845910274" class="text">Contact Us</a></li>
        </ul>
      </div> -->

      <!-- Social Media Links -->
      <!-- <div class="col-lg-3 col-md-6 mb-4">
        <h5 class="footer-title">Follow Us</h5>
        <div class="social-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.instagram.com/sugarycreation_/"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a> -->
          <!-- <a href="#"><i class="fab fa-whatsapp"></i></a> -->
        <!-- </div>
      </div> -->

      <!-- Contact Info -->
      <div class="col-lg-3 col-md-6 mb-4">
        <h5 class="footer-title">Contact Us</h5>
        <p class="contact-para">Email: patientcare@aravind.org</p>
        <p class="contact-para">Phone: +91 452 435 6100</p>
        <p class="contact-para">Address:1, Anna Nagar, Madurai, Tamil Nadu - 625 020, India.</p>
      </div>
    </div>
    <hr>

    <div class="row mt-4">
      <div class="col text-center">
        <p>&copy; 2025 Aravind Eye Care System | All rights reserved</p>
      </div>
    </div>
  </div>
</footer>



  <!-- GSAP & ScrollTrigger Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>


  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  <!-- GSAP -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

  <script src="js/script.js"></script>

</body>
</html>
