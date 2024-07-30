
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" /> 
</head>
<body>
   <!--  <header>
        <div class="container site-header">
            <div class="site-logo">
                <img src="image/logo.png">
            </div>
            <div class="offer text-center">
                <p>Save Upto <span>40%</span></p>
            </div>
            <div class="header-btn text-end">
                <a href="#">Get a Free Quick Quote</a>
                <p>Commercial Waste Collection & Recycling Services</p>
            </div>
        </div>
    </header> -->
<!-- Header Section End -->
<div class="container">
<div class="main">
<section class="thank-you-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="cont-block">
              <h1>THANK YOU !</h1>
              <h2>Your request has been submitted successfully.</h2>
              <p>One of our experts will get in touch with you shortly.</p>
              <a href="{{ route('form.create') }}">Back To Homepage <i class="fa fa-angle-right" aria-hidden="true"></i></a>
          </div>
      </div>
    </div>
  </div>
</section>
</div>
</div>
 <!-- <footer>
        <p class="text-center">Copyright © 2021 . All Rights Reserved.</p>
    </footer> -->

    <script src="js/bootstrap.min.js"></script>
</body>
</html>