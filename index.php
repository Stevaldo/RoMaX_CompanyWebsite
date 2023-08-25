<?php 
session_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <!-- Data-Aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- Title -->
    <title>Romax - Halaman Utama</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.jpg">
  </head>
  <body>
    <section>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
 
        <a class="navbar-brand fw-bolder mx-auto" id="brand-name" href="index.html"><img src="img//logo.png" alt="logo" width="100"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav fw-bold ms-auto">
          <?php if(isset($_SESSION["admin"])): ?>
              <!-- Dropdown Admin -->
              <li class="nav-item dropdown me-5 pt-2 me-auto px-1">
                <a
                  class="nav text-decoration-none text-white border border-black border-1  bg-dark px-3 rounded-pill"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Admin
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                    <a class="dropdown-item" href="tambah.php">Tambah Proyek</a>
                  </li>
                  <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
              </li>
              <!-- Dropdown Admin End -->
              <?php endif; ?>
            <li class="nav-item mx-auto pe-1">
              <a class="nav-link" aria-current="page" href="#aboutus">About Us</a>
            </li>
            <li class="nav-item mx-auto pe-1">
              <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item mx-auto pe-1">
              <a class="nav-link" href="projects.php">Portfolio</a>
            </li>
            <li class="nav-item mx-auto pe-1">
              <a class="nav-link" href="#contactus">Contact Us</a>
            </li>
            <li class="nav-item mx-auto pe-1 d-flex">
              <a class="nav-link px-2" href="https://api.whatsapp.com/send?phone=6281216057479"target="blank"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
              </svg></a>
              <a class="nav-link px-2" href="https://instagram.com/romax.id" target="blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                </svg>
              </a>
            </li>

          

          </ul>
        </div>

    </nav>

    <!-- Carousel -->
    <div class="container-fluids">
      <div id="carouselExampleIndicators" class="carousel slide carousel-fade ms-auto" data-bs-interval="2000" data-bs-ride="carousel" data-aos="fade-down" data-aos-duration="500">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" >
          <div class="carousel-item active">
            <div class="img1" style="  width: 100%;
            height:95vh;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url(img/slider1.jpg);">
              .
            </div>
          
          </div>
          <div class="carousel-item">
            <div class="img2" style="  width: 100%;
            height:95vh;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url(img/slider2.jpg);">
              .
            </div>
          </div>
          <div class="carousel-item">
            <div class="img3" style="  width: 100%;
            height:95vh;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url(img/slider3.jpg);">
              .
            </div>
          </div>
        </div>
      </div>
</div>

<!-- About Section -->
<div class="anchor" id="aboutus"></div>
<div class="about bg-dark">
  <div class="container bg-dark">

    <!-- Logo and about us -->
    <div class="row justify-content-evenly mt-5 ">
      <div class="col-4 col-lg-3 col-xl-2  mt-5" data-aos="fade-right"
      data-aos-duration="700">
        <img class= "mx-auto"src="img/favicon.jpg" alt="about" width="100%"/>
      </div>
      <div class="col-8  col-xl-10 mt-3" id="tidur" data-aos="fade-right"
      data-aos-duration="500">
        <h1 class="fw-bolder text-white mb-3 mt-5" id="aboutz">
          About Us
        </h1>
        <p class="fs-5 text-left p-1 text-white">
          <span class="fw-bold text-danger">PT RORYMAX INTERNUSA MANDIRI</span>
           is a construction company based in
          Jakarta that engaged in Waterproofing, Injection, Building
          Protection, and Consulting Services. <br /><br />
         
        </p>
      </div>
    </div>


    <!-- Vision and Mission -->
    <div class="row mt-5 justify-content-evenly offset-4 offset-md-0 offset-lg-0 offset-xl-1 pb-5 ">
      <div
        class="col-md-6 mb-5 col-xl-5"
        data-aos="fade-right"
        data-aos-duration="500"
      >
        <h1 class="fw-bold text-white mb-3">Vision</h1>
        <p class="fs-5 p-1 text-white text-left">
          To become a service and consulting company in waterproofing and
          building protection specialist that provides the best service
          including quality materials, skilled and reliable workers in their
          fields.
        </p>
      </div>
      <div class="col-md-4 col-xl-4" data-aos="fade-right" data-aos-duration="500">
        <h1 class="fw-bold text-white mb-3">Mission</h1>
        <p class="fs-5 p-1 text-white text-left">
          Giving satisfaction to customers by providing quality products and
          skilled workers that are expert and reliable in their fields.
        </p>
      </div>
    </div>

  </div>
</div>

<!-- Services -->
<div class="anchor" id="services"></div>
<div class="container pt-5">
      <div class="row justify-content-evenly pt-3 pb-1" data-aos="fade-right" data-aos-duration="500">
          <div class="col-3 ">
        
            <div class="box text-center border-0  accordion-header" id="headingOne">
              <button class="border-0 fw-bolder bg-white logo" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">  <img src="img/logoslider1.png" alt="logo-services">
                <br>
                <h2 class="fw-bolder">Floor Hardener</h2>
              </button>
          </div>
       </div>

          <div class="col-3 ">
            <div class="box text-center border-0  accordion-header" id="headingTwo">
              <button class="border-0 fw-bolder bg-white logo" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">  <img src="img/logoslider2.png" alt="logo-services">
                <br>
                <h2 class="fw-bolder">Water Proofing</h2>
              </button>
          </div>
       </div>

          <div class="col-3 ">
            <div class="box text-center border-0  accordion-header" id="headingThree">
        <button class="border-0 fw-bolder bg-white logo" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">  <img src="img/logoslider3.jpg" alt="logo-services">
          <br>
          <h2 class="fw-bolder">Grouting</h2>
        </button>
    </div>
    </div>

          <div class="col-3  ">
            <div class="box text-center border-0  accordion-header" id="headingFour">
        <button class="border-0 fw-bolder bg-white logo" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">  <img src="img/logoslider4.jpg" alt="logo-services">
          <br>
          <h2 class="fw-bolder">Concrete Repair</h2>
        </button>
    </div>
          </div>
      </div>



<div class="container">
<!-- Floor Hardener Body -->
<div class="accordion " id="accordionExample" data-aos="fade-right"
data-aos-duration="700">
  <div class="accordion-item border-0">
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body fs-5">
        <strong class="text-danger">Floor Hardener.</strong> Baseman area, parking area, warehouse, and other areas used for loadsheight and weight, it is highly recommended to use a smooth floor surfacehard and impact resistant.For that, we need a material that functions as a protector (Floor Hardener).We are ready to assist in the procurement of materials and carry out floor work hardeners in accordance with predetermined specifications.
      </div>
    </div>
  </div>

  <!-- Water Proofing Body -->
  <div class="accordion-item border-0">
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body fs-5">
        <strong class="text-danger">Water Proofing.</strong> The scope of work we handle is for the concrete area, eitherproblem areas as well as new concrete areas. The installation area forwaterproofing is a basement, roof, balcony, STP, swimming pool, garden, toilet, and any other areas that are in direct contact with water. As for the materials and methods for The waterproofing work we handle varies according to the area and location material. There are coating systems, torching, etc, according to the specifications required and desired.
      </div>
    </div>
  </div>

  <!-- Grouting Body -->
  <div class="accordion-item border-0">
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body fs-5">
        <strong class="text-danger">Grouting.</strong> The Grouting work for the protection of pipe sparring, slab concrete,also on cracked and porous beams, anchor pairs, machine foundations,and others.
      </div>
    </div>
  </div>

  <!-- Concrete Repair Body -->
  <div class="accordion-item border-0">
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body fs-5">
        <strong class="text-danger">Concrete Repair.</strong> before installing waterproofing, a joint inspection will be carried out,to check the condition of the concrete, whether there are cracks, porous, etc. This is of course must be overcome first for the perfect installation of waterproofing.In this case, we also have the material to deal with the repair problem (concrete is porous, cracked, etc.), as for the materials we use of various kinds product according to need.
      </div>
    </div>
  </div>
</div>
</div>

</div>

<!-- Contact Us -->
<div class="anchor" id="contactus"></div>
<div class="contact" >
  <div class="container">
    <div class="row mt-5">
      <div class="col mt-3 mb-5 overflow-hidden d-flex justify-content-start" data-aos="fade-up"
      data-aos-duration="500">
     
          <div class="gmap_canvas">
            <iframe
            width="100%"
            height="436"
              
              id="gmap_canvas"
              src="https://maps.google.com/maps?q=gd.graha%20bip%20lt.mezzania%20jl.jendral%20gatot%20subroto&t=&z=13&ie=UTF8&iwloc=&output=embed"
              frameborder="0"
              scrolling="no"
              marginheight="0"
              marginwidth="0"
            ></iframe
            ><a href="https://fmovies-online.net"></a><br /><style>
              .mapouter {
                position: relative;
                text-align: right;
                height: 436px;
                width: 1080px;
              }
            </style>
            <a href="https://www.embedgooglemap.net"
              >how to add a google map to my website</a
            ><style>
              .gmap_canvas {
                overflow: hidden;
                background: none !important;
                height: 436px;
                width: 1080px;
              }
            </style>
         
        </div>
      </div>
    </div>

    <div class="row justify-content-between align-items-center">
      <div class="col-md-6 mb-5" data-aos="fade-right"
      data-aos-duration="700">
        <h1 class="fw-bold text-center">Contact Us</h1>
        <form
          action="https://formsubmit.co/stevaldoclaudio018@gmail.com"
          method="POST"
        >
          <h1 class="fs-5">Your Name :</h1>
          <input
            class="mb-2 form-control"
            type="text"
            name="name"
            required
            width=""
          />
          <h1 class="fs-5">Your Email :</h1>
          <input
            class="mb-2 form-control"
            type="email"
            name="email"
            required
          />
          <h1 class="fs-5">Your Message :</h1>
          <input
            class="mb-2 form-control"
            type="text"
            name="name"
            required
          />
          <input type="hidden" name="_captcha" value="false" />
          <input type="hidden" name="_next" value="https://romax.epizy.com/thankyou.html">
          <button type="submit" class="btn btn-danger pe-5 ps-5 fs-5">
            Send
          </button>
        </form>
      </div>
      <div class="col-md-5" data-aos="fade-up"
      data-aos-duration="900">
        <h1 class="fw-bold">Kantor Pusat - Jakarta Selatan</h1>
        <p class="fs-5">
          GD.GRAHA BIP LT.MEZZANINE<br />
          JL.JEND.GATOT SUBROTO KAV.23 RT.022 RW.002<br />
          KUNINGAN TIMUR-SETIABUDI<br />JAKARTA SELATAN - 12950
        </p>
        <a href="https://instagram.com/romax.id" class="text-decoration-none mx-auto" target="blank">
          <i
            class="fab fa-instagram text-danger pe-4"
            style="font-size: 2rem"
          ></i>
        </a>
      
        <a
          href="https://api.whatsapp.com/send?phone=6281216057479"
          class="text-decoration-none"
        >
          <i
            class="fab fa-whatsapp text-success pe-4"
            style="font-size: 2rem"
          ></i>
        </a>
      
      </div>
    </div>
  </div>
</div>
</div>
</section>
<!-- Footer -->

<footer class="footer  py-3 bg-dark">
  <div class="container bg-dark">
    <p class="text-white text-center bg-dark">
      Copyright © 2020 All Rights Reserved by
      <span class="fw-bold text-danger">PT RORYMAX INTERNUSA MANDIRI.</span>
    </p>
  </div>
</footer>

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Aos-Script -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
 
  </body>
</html>