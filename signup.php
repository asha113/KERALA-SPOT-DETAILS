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
<body class="body-signup">
<?php
echo "sdfgh";
if(isset($_POST['Signup'])) {
  echo "sdfgh123";
    $name = $_POST["name"];
    $date= $_POST["date"];
    $phoneno = $_POST["phoneno"];
    $gender = $_POST["gender"];
    $nationality = $_POST["nationality"];
    $email = $_POST["email"];
    echo " asha";
    // Validate the data (you can add more thorough validation as needed)
    if (empty($name) || empty($date) ||empty($phoneno)|| empty($gender) || empty($nationality) || empty($email)) {
        echo "All fields are required.";
    } 
        require_once "connect.php";
        echo "hi";
        // SQL query to insert data into the database
    $sql = "INSERT INTO tourists (name,date, phoneno, gender, nationality, email) 
            VALUES ('$name', '$date','$phoneno', '$gender', '$nationality', '$email')";
    echo "hello";
    if (mysqli_query($con, $sql)) {
        echo "Signup successful! Welcome, $name!";
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
    
    
}
?>

    <!-- navbar 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#"><img class="logo" src="img/logo.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
          </li>-->
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li> -->
          <!--
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
          <li class="nav-item">
            <a class="nav-link" href="">  About us</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Username/email">
          <input class="form-control mr-sm-2" type="password" placeholder="Password">
          <button class="btn btn-success my-2 my-sm-0 mr-sm-2 button-small" type="submit">Login</button>
          <button class="btn btn-primary my-2 my-sm-0 button-small" type="submit"><a href="signup.html" class="text-decoration-none text-light">Sign up</a></button>
        </form>
      </div>
    </nav>-->
  <!-- navbar -->
    <div class="signup container text-center rounded">
     
      <div class="col-12 text-left">
        <h2 class="mb-4 text-center">Welcome...!</h2>
        <hr>
        <br>
        <p>Please enter the details to sign-up.</p>
        <form id="contact-form" action="index.html" onsubmit="return signupValidate()">
          <div class="form-group mb-4">
            <input type="text" name="name" class="form-control" placeholder="Please enter a userame" />
          </div>
          <div class="form-group mb-4">
            <input type="date" name="date" id="date" class="form-control" placeholder="Your date of birth" />
          </div>
          <div class="form-group mb-4">
            <input type="number"name="phoneno" id="phone" class="form-control" placeholder="Your phone number" />
          </div>
          <div class="form-group mb-4">
            <input type="text" name="gender" id="gender" class="form-control" placeholder="Your gender" />
          </div>
          <div class="form-group mb-4">
            <input type="text" name="nationality" id="nationality" class="form-control" placeholder="Your nationality" />
          </div>
          <div class="form-group mb-4">
            <input type="text" name="email" id="semail" class="form-control" placeholder="Your email id" />
          </div>

          
          <div class="form-group mb-2">
            <input type="password" id="password1" class="form-control" placeholder="Enter your password" />
            <label for="exampleInputPassword1" class="text-muted">*Password should be of minimum 8 characters, at least one uppercase, and one lower case, must contain at least one number</label>
          </div>
          <div class="form-group mb-4">
            <input type="password" id="password2" class="form-control" placeholder="Please Re-enter password" />
          </div>

          <br>
          <div id="passwordStrength" class="typepass">
            <div id="strengthProgress">
            </div>
          </div>
          <br>

         <!-- <div class="text-center">
             <button type="submit" class="btn btn-big btn-primary">Signup</button> 
            <button type="submit" name="Signup" class="button-large btn-success" style="vertical-align:middle"><span>Signup </span></button>
            <button type="reset" value="Reset"  class="button-large btn-danger" style="vertical-align:middle"><span>Reset </span></button>
          </div> -->
          <br>
        </form>
        
      </div>
      <form action="login.php">
                <button type="submit" class="button-large btn-danger">Signup</button>
        </form>     
    </div>

     <!-- Footer 
    
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
    <!-- scripts 

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
   <script src="js/script.js"></script>-->
</body>
</html>