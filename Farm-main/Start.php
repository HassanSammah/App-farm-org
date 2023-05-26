<!DOCTYPE html>
<html>
<head>
  <title>loading System</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/Farm-main/styles.css" >
  <link rel="icon" type="image/x-icon" href="/Objects/Images/farm-logo-2.png" >
  <link rel="stylesheet" href="/Bootstrap-5/css/bootstrap.min.css" >
  <script src="/Bootstrap-5/js/bootstrap.min.js" defer></script>
  <script src="/Farm-main/main.js" defer></script>
</head>
<body>
    <script defer>
        setTimeout(function() {
            window.location.href = "/Farm-main/Home-Feed.php";
          }, 6000);
    </script>
    <div class="loader-wrapper">
        <img src="/Objects/Images/farm-logo-2.png" alt="Farmers Management Information System" class="logo">
        <img src="/Objects/Images/farm-title.png" alt="Farm system title" class="loader-title">
        <div class="loading">
            <div class="percent">50%</div>
            <div class="progress-bar">
                <div class="progress"></div>
            </div>
        </div>
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="copyright">&copy; COPYRIGHT - 2023    
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav">
            <li class="nav-item">
              <a class="btn btn-success" href="/Farm-main/Register-main.php">REGISTER NOW</a>
            </li>
        </ul>
    </div>
    
    
</body>
</html>