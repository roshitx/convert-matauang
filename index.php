<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Currency Converter | Konversi Mata Uang</title>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <!-- CSS Native -->
  <link rel="stylesheet" type="text/css" href='style.css'>
  <!-- Fontawesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body>
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <p><a href="https://linktr.ee/roshit" target="_blank">© 2023 Roshit.</a> All Rights Reserved.</p>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg sticky-top" style="background-image: linear-gradient(to bottom right, #2dc653, #155d27)";>
          <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="../">
              <img src="asset/logo.fix.png" alt="logo" width="130">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-row-reverse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="#">
                    Home
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="view/about.php">
                    About
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="view/contact.php">
                    Contact
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
    <!-- Akhir Navbar -->

        <!-- Waves Background -->
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto" id="wave">
          <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
          </defs>
          <g class="parallax">
            <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7)" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgb(110,222,138)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgb(37,162,68)" />
            <use xlink:href="#gentle-wave" x="48" y="7" fill="rgba(21,93,39,0.9)" />
          </g>
        </svg>
        
    <!-- Card Converter -->
    <div class="bungkus">
      <div class="wrapper">
        <form action="#">
          <h3>Konversi Mata Uang</h3>
          <div class="amount">
            <p>Masukan Jumlah</p>
            <input type="text" value="1" id="input">
          </div>
          <div class="drop-list">
            <!-- From -->
            <div class="from">
              <p>From</p>
              <div class="select-box">
                <img src="asset/us.svg" alt="US" width="50" />
                <select></select>
              </div>
            </div>
            <!-- Exchange Icon --> 
            <div class="icon"><i class="fa-solid fa-arrow-right-arrow-left fa-lg"></i></i></div>
            <!-- To -->
            <div class="to">
              <p>To</p>
              <div class="select-box">
                <img src="asset/id.svg" alt="US" width="50" />
                <select></select>
              </div>
            </div>
          </div>
          <div class="exchange-rate">Menampilkan hasil <konversi class=""></konversi></div>
          <button>Konversi</button>
        </form>
      </div>
    </div>
    <!-- Akhir Card -->




  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>

  <script src="js/country-list.js"></script>
  <script src="js/script.js"></script>
</body>

</html>