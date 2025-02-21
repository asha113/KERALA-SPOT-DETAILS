<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FSD-Kerala Tourism</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <!-- navbar -->
    
  <div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#"><img class="logo" src="img/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li> -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                  Districts
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="alapuzha.html">Alappuzha</a>
                  <a class="dropdown-item" href="ernakulam.html">Ernakulam</a>
                  <a class="dropdown-item" href="iduki.html">Idukki</a>
                  <a class="dropdown-item" href="kannur.html">Kannur</a>
                  <a class="dropdown-item" href="kassaragod.html">Kasaragod</a>
                  <a class="dropdown-item" href="kollam.html">Kollam</a>
                  <a class="dropdown-item" href="kottayam.html">Kottayam</a>
                  <a class="dropdown-item" href="kozhikode.html">Kozhikode</a>
                  <a class="dropdown-item" href="malapuram.html">Malappuram</a>
                  <a class="dropdown-item" href="palakad.html">Palakkad</a>
                  <a class="dropdown-item" href="pathanamthitta.html">Pathanamthitta</a>
                  <a class="dropdown-item" href="thiruvananthapuram.html">Thiruvananthapuram</a>
                  <a class="dropdown-item" href="thrissur.html">Thrissur</a>
                  <a class="dropdown-item" href="waynad.html">Wayanad</a>
                </div>
            </li>
            <!--
            <li class="nav-item">
              <a class="nav-link" href="">  About us</a>
            </li>-->
          </ul>
          <style>
            button:hover {
            background-color: #0056b3;
            }
          </style>
           <!--
          <form class="form-inline my-2 my-lg-0">

           
            <input class="form-control mr-sm-2" type="text" placeholder="Username">
            <input class="form-control mr-sm-2" type="password" placeholder="Password">

            <button class="btn btn-success my-2 my-sm-0 mr-sm-2 button-small" type="submit">Login</button>
            <button class="btn btn-primary my-2 my-sm-0 button-small" type="submit"><a href="signup.html" class="text-decoration-none text-light">Sign up</a></button>
              </form> -->
            
           
            <form action="review.html">
              <div class="form-btn">
                <button type="submit" class="btn btn-primary">Review</button>
              </div> 
            </form> 
            
            
            
            <form action= "login.php">
              <div class="form-btn">
                <button type="submit" class="btn btn-primary">Logout</button>
              </div> 
            </form>
            
          
          
        </div>
      </nav>
    <!-- navbar <form action="signup.php">
            <div class="form-btn"> </div> class="btn btn-primary"
                <button type="submit" >Signup</button>
           
        </form>     -->
    <!-- Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/slide-1.jpg" class="d-block w-100" alt="slide-1">
            <div class="carousel-caption d-none d-md-block">
              <h5>HILL STATIONS</h5>
              <p> There are more than 50 hill stations that dot the state</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/slide-2.jpg" class="d-block w-100" alt="slide-2">
            <div class="carousel-caption d-none d-md-block">
              <h5>WATERFALLS</h5>
              <p>There are 27 stunning waterfalls in Kerala.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/slide-3.jpg" class="d-block w-100" alt="slide-3">
            <div class="carousel-caption d-none d-md-block">
              <h5>THRISSUR POORAM</h5>
              <p>The Thrissur Pooram is an annual temple festival held in Thrissur, Kerala</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </button>
      </div>
    <!-- Carousel -->

    <!-- why visit -->
    <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-md">
            <img src="img/kathakali.png" class="img-fluid" alt="" />
          </div>
          <div class="col-md p-5">
              <h2>Why visit Kerala</h2>
              <p class="lead text-justify">
                  Kerala has been aptly dubbed ‘God’s Own Country’. This picturesque destination is sandwiched between the Western Ghats mountains and the Arabian Sea, dotted with magical backwaters, lush greenery, wildlife, pristine beaches, rich art and culture, spice and tea plantations, Ayurvedic therapies and tantalizing cuisine… Here’s why Kerala should be your next travel destination.
            </p>
            <p>
              
            </p>
            <a href="#" class="btn btn-light mt-3">
              <i class="bi bi-chevron-right"></i>
            </a>
          </div>
        </div>
      </div>
    <!-- why visit -->
    <!--Experience container-grey -->
    <div class="container-grey">
        <div class="starter-template">
            <h1>Experience Kerala</h1>
            <p class="lead">don't just visit, experience it!</p>
            <hr>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 ">
            <div class="col mb-4  ">
              <div class="card h-100 shadow rounded">
                <img src="img/experience_backwaters.jpg" class="card-img-top shadow" alt="experience_backwaters">
                <div class="card-body">
                  <h5 class="card-title text-center">The backwaters</h5>
                  <p class="card-text">The Kerala backwaters are a beautiful, blissful location. Quaint houseboats glide across palm-fringed emerald waters, you can spot unique flora and fauna, go kayaking, and in between indulge in lip-smacking food cooked by talented on-board chefs. The best places to head to catch a backwater cruise are Alleppey, Kumarakom, Kollam, Kasaragod and Kuttanad.</p>
                </div>
                <div class="card-footer">
                    <!-- <small class="text-muted">Last updated 3 mins ago</small> -->
                </div>
              </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100 shadow rounded">
                    <img src="img/experience_Wildlife.jpg" class="card-img-top" alt="experience_Wildlife">
                <div class="card-body">
                  <h5 class="card-title text-center">Wild life and bird watching</h5>
                  <p class="card-text">With more than 25 wildlife sanctuaries and national parks, Kerala is a perfect place to spot wild animals, migratory birds and raw nature while on a wildlife safari. Some popular places are the Wayanad Wildlife Sanctuary , Parambikulam Tiger Reserve , Mangalavanam Bird Sanctuary , Mathikettan Shola National Park and Periyar Tiger Reserve.</p>
                </div>
                <div class="card-footer">
                    <!-- <small class="text-muted">Last updated 3 mins ago</small> -->
                </div>
              </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100 shadow rounded">
                    <img src="img/experience_history.jpg" class="card-img-top" alt="experience_history">
                <div class="card-body">
                  <h5 class="card-title text-center">Historical legacy</h5>
                  <p class="card-text">God’s Own Country is brimming with ancient treasures. Highlights include the 1568 Paradesi synagogue in Jew Town, Kochi, known for its spectacular Chinese tiles, Belgian chandeliers and period furnishings; Gothic-style Santa Cruz Cathedral Basilica at Fort Kochi; and the Dutch Palace (also known as Mattancherry Palace) in Kochi, featuring murals and frescoes of scenes from the Mahabharata and Ramayana</p>
                </div>
                <div class="card-footer">
                    <!-- <small class="text-muted">Last updated 3 mins ago</small> -->
                </div>
              </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100 shadow rounded">
                    <img src="img/experience_beach.jpg" class="card-img-top" alt="experience_beach">
                <div class="card-body">
                  <h5 class="card-title text-center">Beach hopping</h5>
                  <p class="card-text">Kerala boasts many sprawling, pristine beaches with extraordinary views. Laze around, take a romantic stroll, indulge in water sports, and enjoy the mesmerizing sunsets. It’s all a perfect backdrop for a selfie. The best beaches in Kerala are at Kovalam, Kappad, Kannur, Varkala, Cherai, Marari and Bekal.</p>
                </div>
                <div class="card-footer">
                    <!-- <small class="text-muted">Last updated 3 mins ago</small> -->
                </div>
              </div>
            </div>
          </div>
    </div> 
    
    <!--Experience container-grey -->

    <!-- Destinations container-light -->
    <div class="container-bg-img">
        <div class="starter-template">
            <h1>Top Destinations</h1>
            <p class="lead">Explore top destinations on Kerala</p>
            <hr class="mt-2 mb-5">
          </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4  g-4 mr-4 ml-4 text-center">
            <div class="col mb-2">
              <div class="card">
                <img src="img/Alappuzha-3.jpg" class="card-img-top" alt="Alappuzha">
                <h2 class="centered">Alappuzha</h2>
              </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                <img src="img/varkala-01.jpg" class="card-img-top" alt="varkala">
                <h2 class="centered">Varkala Beach</h2>
              </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                <img src="img/kumbalangi-3.jpg" class="card-img-top" alt="kumbalangi">
                <h2 class="centered">Kumbalangi</h2>
              </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                <img src="img/silent-valley-2.jpg" class="card-img-top" alt="silent-valley">
                <h2 class="centered">Silent Valley</h2>
              </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                <img src="img/Bekal_Fort-1.jpg" class="card-img-top" alt="Bekal-Fort">
                <h2 class="centered">Bekal Fort</h2>
              </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                <img src="img/Koyikkal-Palace-3.jpg" class="card-img-top" alt="Koyikkal-Palace">
                <h2 class="centered">Koyikkal</h2>
              </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                <img src="img/Ponmudi_3.jpg" class="card-img-top" alt="Ponmudi">
                <h2 class="centered">Ponmudi</h2>
              </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                <img src="img/Thenmala_2.jpg" class="card-img-top" alt="Thenmala">
                <h2 class="centered">Thenmala </h2>
              </div>
            </div>
          </div>
    </div>
    
    <!--image gallery  -->

    <div class="container">

      <h1 class="fw-light text-center text-lg-start mt-4 mb-0">Gallery</h1>
    
      <hr class="mt-2 mb-5">
    
      <div class="row text-center text-lg-start">
    
        <div class="col-lg-3 col-md-4 col-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="img/gallery/1.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="img/gallery/2.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="img/gallery/3.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="img/gallery/4.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="img/gallery/5.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="img/gallery/6.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="img/gallery/7.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="img/gallery/8.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="img/gallery/9.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="img/gallery/10.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="img/gallery/11.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="img/gallery/12.jpg" alt="">
          </a>
        </div>
      </div>
    
    </div>
    <!--image gallery  -->
    <!-- contact 
    <section class="p-3">
      <hr class="mt-2 mb-5">
      <div class="container">
        <div class="row g-4">
          <div class="col-md">
            <h2 class="text-center mb-4">Contact Info</h2>
            <ul class="list-group list-group-flush lead">
              <li class="list-group-item">
                <span class="fw-bold">Main Location:</span> Door No.1
              </li>
              <li class="list-group-item">
                <span class="fw-bold">Street:</span> Street No-1
              </li>
              <li class="list-group-item">
                <span class="fw-bold">District:</span> Thiruvananthapuram
              </li>
              <li class="list-group-item">
                <span class="fw-bold">State:</span> Kerala
              </li>
              <li class="list-group-item">
                <span class="fw-bold">Phone:</span> +91 987 654 3210
              </li>

              <li class="list-group-item">
                <span class="fw-bold">Email:</span> info@keralatourism.com
              </li>
             
            </ul>
          </div>
          <div class="col-md">
            <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4016631.6651292397!2d76.12831845000001!3d10.54063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b0812ffd49cf55b%3A0x64bd90fbed387c99!2sKerala!5e0!3m2!1sen!2sin!4v1663551915461!5m2!1sen!2sin" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
          </div>
        </div>
      </div>
    </section>-->
    <!-- contact -->
     <!-- Footer -->
     <!--
     <div class="footer">
      <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Experience</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Destinations</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
        </ul>
        <p class="text-center text-muted">&copy; 2021 Company, Inc</p>
      </footer>
    </div>-->
    <!-- Footer -->
    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>


  </div>
  </body>
</html>