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
      <div class="row">
          <div class="col col-12 col-sm-6 col-6">
              <img height="500px" src="data:image/jpeg;base64,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" alt="">
          </div>
          <div class="col col-12 col-sm-6 col-lg-6">
              <h2><i>Enter the world of RECIPIES</i></h2>
              <table class="table">
                  <tr>
                      <td>Name</td>
                      <td><input type="text" class="form-control"></td>
                  </tr>
                  <tr>
                      <td>Email</td>
                      <td><input type="email" name="email" id="email"></td>
                  </tr>
                  <tr>
                      <td>Password</td>
                      <td><input type="password" name="password" id="password"></td>
                  </tr>
                  <tr>
                      <td>Confirm Password</td>
                      <td><input type="password" name="password" id="password"></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td><button class="btn btn-primary">Submit</button></td>
                  </tr>
              </table>
          </div>
      </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> 
</body>
</html>