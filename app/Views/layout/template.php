<!doctype html>
<html lang="en">

<head>
  <title>Curug Cikoneng</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
    .twitter:hover {
      background-color: #1DA1F2;
    }

    .youtube:hover {
      background-color: red;
    }

    .facebook:hover {
      background-color: blue;
    }

    .instagram:hover {
      background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
    }

    .form-control {
      box-shadow: none;
      font-weight: normal;
      font-size: 13px;
    }

    .navbar {
      background: #fff;
      padding-left: 16px;
      padding-right: 16px;
      border-bottom: 1px solid #dfe3e8;
      border-radius: 0;
    }

    .nav-link img {
      border-radius: 50%;
      width: 36px;
      height: 36px;
      margin: -8px 0;
      float: left;
      margin-right: 10px;
    }

    .navbar .navbar-brand {
      padding-left: 0;
      font-size: 20px;
      padding-right: 50px;
    }

    .navbar .navbar-brand b {
      color: #33cabb;
    }

    .navbar .form-inline {
      display: inline-block;
    }

    .navbar a {
      color: #888;
      font-size: 15px;
    }


    .navbar .sign-up-btn {
      min-width: 110px;
      max-height: 36px;
    }



    .navbar a,
    .navbar a:active {
      color: #888;
      padding: 8px 20px;
      background: transparent;
      line-height: normal;
    }

    .navbar .navbar-form {
      border: none;
    }


    .navbar .btn-primary,
    .navbar .btn-primary:active {
      color: #fff;
      background: #33cabb !important;
      border: none;
    }

    .navbar .btn-primary:hover,
    .navbar .btn-primary:focus {
      color: #fff;
      background: #31bfb1 !important;
    }



    .or-seperator {
      margin-top: 32px;
      text-align: center;
      border-top: 1px solid #e0e0e0;
    }

    .or-seperator b {
      color: #666;
      padding: 0 8px;
      width: 30px;
      height: 30px;
      font-size: 13px;
      text-align: center;
      line-height: 26px;
      background: #fff;
      display: inline-block;
      border: 1px solid #e0e0e0;
      border-radius: 50%;
      position: relative;
      top: -15px;
      z-index: 1;
    }

    .navbar .action-buttons .dropdown-toggle::after {
      display: none;
    }

    .form-check-label input {
      position: relative;
      top: 1px;
    }

    @media (min-width: 1200px) {
      .form-inline .input-group {
        width: 300px;
        margin-left: 30px;
      }
    }

    @media (max-width: 768px) {
      .navbar .dropdown-menu.action-form {
        width: 100%;
        padding: 10px 15px;
        background: transparent;
        border: none;
      }

      .navbar .form-inline {
        display: block;
      }

      .navbar .input-group {
        width: 100%;
      }
    }
  </style>
</head>

<body>

  <header>
    <?= $this->include('layout/navbar'); ?>
  </header>
  <main id="main">
    <?= $this->renderSection("content"); ?>
  </main>

  <?= $this->include('layout/footer'); ?>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script>
    $('.carousel').carousel({
      interval: 2000,
      keyboard: false
    })
    // display height
    let vh = window.innerHeight;

    // nav
    let nav = document.getElementById("nav").clientHeight;

    // set height main
    let main = document.getElementById("main")
    main.style.minHeight = `${vh}px`

    // set height background
    let background = document.getElementById("background")
    background.style.height = `${vh - nav-5}px`

    // nav
  </script>
</body>

</html>