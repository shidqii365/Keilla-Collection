<nav class="navbar navbar-expand-lg navbar-light navbar-custom">
  <div class="container">
    <?php
    if (!isset($_SESSION) || !isset($_SESSION['status']) || $_SESSION['status'] != "login") { ?>
      <a class="navbar-brand" href="home.php">Keilla Collection</a>
    <?php
    } else { ?>
      <a class="navbar-brand" href="admin.php">Keilla Collection</a>
    <?php
    } ?>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        <?php
        if (!isset($_SESSION) || !isset($_SESSION['status']) || $_SESSION['status'] != "login") { ?>
          <a class="nav-item nav-link" href="home.php">Home</a>
          <a class="nav-item nav-link" href="produk.php">Produk</a>
          <a class="nav-item nav-link" href="about.php">About</a>
          <a class="nav-item nav-link" href="contact.php">Contact</a>
          <a class="nav-item btn btn-primary rounded-pill" href="login.php">Login</a>
        <?php
        } else { ?>
          <a class="nav-link" href="admin.php">Home</a>
          <a class="nav-link" href="tabelproduk.php">Tabel Produk</a>
          <a class="nav-item btn btn-primary rounded-pill" href="../koneksi/logout.php">Logout</a>
        <?php
        }  ?>
      </div>
    </div>
  </div>
</nav>