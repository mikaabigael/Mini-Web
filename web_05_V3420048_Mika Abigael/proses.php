<html>
<head>
<title> Data Anda
</title>
</head>

<body>
    <?php
        
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $tempatlahir = $_POST['tempatlahir'];
        $tanggal = $_POST['tanggal'];
        $agama = $_POST['agama'];
        $no_telpon = $_POST['no_telpon'];
        $email = $_POST['email'];
        $bidang = $_POST['bidang'];


        echo "Nama lengkap      : " . $nama . ".<br>";
        echo "Jenis Kelamin     : " . $jk. ".<br>";
        echo "Tempat Lahir      : " . $tempatlahir .  ".<br>";
        echo "Tanggal Lahir     : " . $tanggal . ".<br>";
        echo "Agama             : " . $agama . ".<br>";
        echo "No Telepon        : " . $no_telpon . ".<br>";
        echo "Email             : " . $email . ".<br>";
        echo "bidang            : " . $bidang . ".<br>";
    ?>
</body>
</html>