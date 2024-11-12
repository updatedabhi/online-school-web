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

  <title>AAJH</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- Progress bar style -->
  <link rel="stylesheet" href="css/css-circular-prog-bar.css">
  <!-- Fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Font Awesome stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- Responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>
  <div class="top_container sub_pages">
    <!-- Header section starts -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="">
            <span>AAJH</span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="teacher.html">Teacher</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="vehicle.html">Vehicle</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact Us</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
        </nav>
      </div>
    </header>
  </div>
  <!-- End header section -->

  <section class="admission_section layout_padding">
    <div class="container">
      <h2 class="main-heading">Apply for Admission</h2>
      <p class="text-center">Submit your details for the admission process.</p>
      <div class="contact_section-container">
        <div class="row">
          <div class="col-md-6 mx-auto">
            <div class="contact-form">
              <form action="{{ route('admission.store') }}" method="POST">
                @csrf
                <div>
                  <input type="text" name="name" placeholder="Name of Student" required>
                </div>
                <div>
                  <input type="text" name="class" placeholder="Class" required>
                </div>
                <div>
                  <input type="date" name="dob" placeholder="Date of Birth" required>
                </div>
                <div>
                  <input type="text" name="adhar" placeholder="Aadhar Card Number" required>
                </div>
                <div>
                  <input type="text" name="father" placeholder="Father's Name" required>
                </div>
                <div>
                  <input type="text" name="mother" placeholder="Mother's Name" required>
                </div>
                <div>
                  <input type="text" name="address" placeholder="Address" required>
                </div>
                <div>
                  <input type="text" name="phone" placeholder="Guardian's Phone Number" required>
                </div>
                <div>
                  <input type="email" name="email" placeholder="Email Address" required>
                </div>
                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn_on-hover">Submit Application</button>
                </div>
              </form>

              @if(session('success'))
                <p class="text-success">{{ session('success') }}</p>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Footer section -->
  <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2024 All Rights Reserved By
      <a href="https://html.design/">AAJH</a>
    </p>
  </section>
  <!-- End footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script>
    // Initialize Google Maps
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: { lat: 40.645037, lng: -73.880224 },
      });

      var image = 'images/maps-and-flags.png';
      var beachMarker = new google.maps.Marker({
        position: { lat: 40.645037, lng: -73.880224 },
        map: map,
        icon: image
      });
    }
  </script>
  <!-- Google map js -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
  </script>
  <!-- End google map js -->
</body>

</html>
