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
          <a class="navbar-brand" href="Tasty World">
            <img height="55px" src="data:image/jpeg;base64,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" alt="" width="30" height="24" class="d-inline-block align-top">
            
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
          <div class="col col-12 col-sm-6 col-lg-6 col-xl-6 col-xxl-6">
              <img height="500px" src="https://cdn5.vectorstock.com/i/1000x1000/71/94/cartoon-happy-chef-holding-a-silver-platter-vector-6587194.jpg=" alt="">
          </div>
          <div class="col col-12 col-sm-6 col-lg-6 col-xl-6 col-xxl-6">
              <h2><i>join us!!!</i></h2>
              <table class="table table-borderless">
                  <tr>
                      <td>Name</td>
                      <td><input type="name" class="form-control"></td>
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
                      <td><button class="btn btn-success">Submit</button></td>
                  </tr>
              </table>
          </div>
      </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> 
</body>
</html>