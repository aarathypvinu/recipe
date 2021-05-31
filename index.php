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
    <!-- Image and text -->
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img height="55px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiom8o-pj2m4rj83_bxUR_vCO4zwDbRoFhYg&usqp=CAU" alt="" width="30" height="24" class="d-inline-block align-top">
        Tasty world
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
                <a class="nav-link" href="gallery.php">gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="register.php">for beginners</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">about us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">contact us</a>
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
          <div class="col col-12 col-sm-6 col-lg-6">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img height="300px" src="https://image.shutterstock.com/image-photo/top-down-view-on-freshly-260nw-518750881.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img height="300px" src="https://images.theconversation.com/files/368265/original/file-20201109-19-nn7bag.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=754&fit=clip" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img height="300px" src="data:image/jpeg;base64,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" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
          </div>
          <div class="col col-12 col-sm-6 col-lg-6">
              <h2>Login to tasty world</h2>
              <table class="table table-borderless">
                  <tr>
                      <td>Email Id</td>
                      <td><input type="text" class="form-control"></td>
                  </tr>
                  <tr>
                      <td>Password</td>
                      <td><input type="text" name="password" id="password"></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td><button class="btn btn-success">LOGIN</button></td>
                  </tr>
              </table>
          </div>
      </div>
     
      

      </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>