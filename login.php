<?php
$result = false;

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $name = substr($email, 0, strpos($email, '@'));

    if ($email == 'b221210067@sakarya.edu.tr' && $password == 'b221210067') {
        $result = true;
    } else {
        $result = false;
        header("refresh:3;url=C:\Users\bagis\Desktop\My project\login.html");
    }
}
?>


<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS dosyası -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    
    <!-- Bootstrap JS -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

   <link rel="stylesheet" href="./css-dosyaları/iletisim.css">
    <link rel="stylesheet" href="././css-dosyaları/style.css">


</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="index.html">
                <img src="./Resimler/mardinicon.jpg" width="100" height="50" alt="Buton Resmi">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Ana Sayfa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hakkimda.html">Hakkımda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ozgecmis.html">Özgeçmiş</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sehrim.html">Şehrim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mirasimiz.html">Mirasımız</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="iletisim.html">İletişim</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link active" aria-current="page" href="login.html">Giriş Yap</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="api.html">Meraklısına</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    
    <div class="container mt-4">
          <div class="output">
                  <h1>
                      <?php
                      if ($result == true) {
                          echo 'Hoşgeldiniz "'. $name . '"';
                      } else {
                          echo "Kullanıcı adı ya da şifre hatalı";
                      }
                      ?>
                  </h1>
          </div>
    </div>



</body>
</html>
