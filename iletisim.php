<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $cinsiyet = $_POST["cinsiyet"];
    $diller = isset($_POST["diller"]) ? $_POST["diller"] : array();
    $yerler = isset($_POST["yerler"]) ? $_POST["yerler"] : array();
    $program = isset($_POST["program"]) ? $_POST["program"] : "";
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim Sayfası</title>
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
                    <li class="nav-item active">
                        <a class="nav-link active" aria-current="page" href="iletisim.html">İletişim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Giriş Yap</a>
                    </li>
                      <li class="nav-item">
                        <a class="nav-link" href="api.html">Meraklısına</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container mt-4">
        <h1>İletişim Bilgileri</h1>

        <div class="output">
            <p><strong>Ad:</strong> <?php echo $name; ?></p>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            <p><strong>Mesaj:</strong> <?php echo $message; ?></p>
            <p><strong>Cinsiyet:</strong> <?php echo $cinsiyet; ?></p>


            <p><strong>En sevdiğiniz Yerler:</strong></p>
            <ul>
                <?php
                if (!empty($yerler)) {
                    foreach ($yerler as $yer) {
                        echo "<li>$yer</li>";
                    }
                } else {
                    echo "Hiçbir Yer Seçilmedi.";
                }
                ?>
            </ul>
            <p><strong>Bildiğiniz Diller:</strong></p>
            <ul>
                <?php
                if (!empty($diller)) {
                    foreach ($diller as $dil) {
                        echo "<li>$dil</li>";
                    }
                } else {
                    echo "Hiçbir Dil Seçilmedi.";
                }
                ?>
            </ul>

            <p><strong>En Sevdiğiniz Programlama Dili:</strong> <?php echo $program; ?></p>
        </div>
    </div>

</body>
</html>

<?php
}
?>
