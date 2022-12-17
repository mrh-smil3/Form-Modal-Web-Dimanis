<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

  	<!-- start nav -->
    <nav class="navbar navbar-expand-lg bg-light">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="index.php?p=home">Menu</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="index.php?p=home">Home</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="index.php?p=kategori">Kategori</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="index.php?p=berita">Berita</a>
	        </li>
	      </ul>
	      <form class="d-flex" role="search">
	        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
	        <button class="btn btn-outline-success" type="submit">Search</button>
	      </form>
	    </div>
	  </div>
	</nav>

<!-- end navbar -->
<!-- bikin halaman kategori, bikin form sebalah kiri
isi sebelah kanan halman ID dan kategori -->

<!-- bikin halaman berita, bikin form sebalah kiri
sebalah kiri bikin 

ID, Judul,berita, tanggal post, author-->

<!-- sebelah kiri bikin kategori -->

<!-- start content -->

<?php
        $pages_dir = 'pages'; //pages merupakan nama folder
        if(!empty($_GET['p'])){ //kondisi apakan ada parameter p didalam url
        $pages = scandir($pages_dir, 0);
        unset($pages[0], $pages[1]);
                            
        $p = $_GET['p'];
        if(in_array($p.'.php', $pages)){
          include($pages_dir.'/'.$p.'.php');
        } else {
          echo "Halaman tidak ditemukan!";       
          }
        } else {
          include($pages_dir.'/home.php');
        }
?>

<!-- end content -->
  </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>