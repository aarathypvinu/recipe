<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img height="55px" src="https://previews.123rf.com/images/tigatelu/tigatelu1311/tigatelu131100120/23826071-chef-cartoon-holding-platter.jpg" alt="" width="30" height="24" class="d-inline-block align-top">
        TASTY KITCHEN
      </a>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="gallery.php">OUR RECIPIES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="register.php">NEW TASTER</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">ABOUT US</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">CONTACT US</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
  </nav>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card">
                <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text"></p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="https://res.cloudinary.com/swiggy/image/upload/f_auto,q_auto,fl_lossy/tbdnbm8hoqnakboa6crt" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text"></p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="https://restaurantindia.s3.ap-south-1.amazonaws.com/s3fs-public/content6553.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text"></p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="https://ychef.files.bbci.co.uk/624x351/p07cj8zj.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text"></p>
                </div>
              </div>
            </div>
            <div class="col">
                <div class="card">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTM3vvAxvj6p8640JgEGTHooDgFjdvAUvqd4w&usqp=CAU" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text"></p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTk9vG2-esQzuyTTN7f7HB0DlAx24I4kvFDrLr7OHHdIQcS0Awtniu2CLH51z1QF7rI7gc&usqp=CAU" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text"></p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <img src="https://sukhis.com/wp-content/uploads/2017/06/Appetizers.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text"></p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <img src="https://www.superprof.co.uk/blog/wp-content/uploads/2018/10/india-2731812_640.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text"></p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <img src="https://img.buzzfeed.com/buzzfeed-static/static/2014-06/23/15/campaign_images/webdr07/26-traditional-indian-foods-that-will-change-your-1-7312-1403550756-15_big.jpg?resize=1200:*" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text"></p>
                  </div>
                </div>
              </div>
          </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>