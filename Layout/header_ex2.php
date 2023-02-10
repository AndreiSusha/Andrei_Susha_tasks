<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="../Layout/exercise2.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <title>
    <?php echo $title ?>
  </title>

  <link rel="icon" href="images/Skatefavicon-16x16.png" type="image/x-icon">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid my-class-with-padding">
        <div class="cotainer-fluid img-1">
          <a class="navbar-brand" href="#"></a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 links">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../Layout/index.php">Index.php</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false" style="color: #001F23">
                  Tasks
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="../Layout/ex1.php">Exercise 1</a></li>
                <li><a class="dropdown-item" href="../Layout/ex2.php">Exercise 2</a>
              </li>
              <li><a class="dropdown-item" href="../Layout/variable.php">Exercise 3</a>
              </li>
              <li><a class="dropdown-item" href="../Layout/controlflow.php">Exercise 4</a>
              </li>
              <li><a class="dropdown-item" href="../Layout/array.php">Exercise 5</a>
              </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../Layout/contactus.php">Contact</a>
            </li>
          </ul>
          <ul class="navbar-nav mb-2 mb-lg-0 cart">
            <li class="nav-item">
              <a class="nav-link active" href="#"><img src="../Layout/images/icons/search.png" alt="search" width="30"
                  height="30"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#"><img src="../Layout/images/Icons/Shoppingcart.png" alt="cart" width="30"
                  height="30"></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>


  <div class="container">
    <div class="row breadcrumbs">
      <div class="col-12 p-4">