<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary mb-5">
        <a class="navbar-brand" href="?p=home">App TRPL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="?p=home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?p=mhs">Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?p=prodi">Prodi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?p=kategori">Kategori</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action OK</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else heres</a></li>
                </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
            <ul class="navbar-nav  mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="login.php">LOGIN</a>
                    </li>
                </ul>
            </form>
        </div>
    </nav>
    <div class="container">
        <?php 
            $page = isset($_GET['p']) ? $_GET['p'] : 'home.php';

            if($page == 'home') include('home.php');
            if($page == 'mhs') include('mahasiswa.php');
            if($page == 'prodi') include('prodi.php');
            if($page == 'tambah_mhs') include('mahasiswa.php');
            if($page == 'edit_mhs') include('edit_mahasiswa.php');
            if($page == 'tambah_prodi') include('prodi.php');
            if($page == 'edit_prodi') include('edit_prodi.php');
            if($page == 'kategori') include('kategori.php');
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
  <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>

  <script>
        new DataTable('#example');
  </script>
</body>
</html>