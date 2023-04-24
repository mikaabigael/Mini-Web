<!DOCTYPE html>
<html lang="en">

<head>
    
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2 class="judul">Formulir Pendaftaran Organisasi </h2>
    <form method="POST" action="proses.php">

        <div class="form-group">
            <label for="nama">Nama Lengkap </label>
            <div class="input"><input type="text" name="nama"></div>
        </div>

        <div class="form-group">
            <label for="jk">Jenis Kelamin</label>
            <input type="radio" id="jk" name="jk" value="Laki-laki"> Laki-laki
            <input type="radio" id="jk" name="jk" value="Perempuan"> Perempuan
        </div>

        <div class="form-group">
            <label for="tempatlahir"> Tempat Lahir</label>
            <div class="input"><input type="text" name="tempatlahir"></div>   
        </div>

        <div class="form-group">
            <label for="tanggal">Tanggal Lahir</label>
            <div class="input"><input type="date" name="tanggal"></div>
        </div>

        <div class="form-group">
            <label for="agama">Agama</label>
            <div class="input">
                <select name="agama">
                    <option value="islam"> Islam</option>
                    <option value="kristen"> Kristen </option>
                    <option value="katolik"> Katolik </option>
                    <option value="hindu"> Hindu </option>
                    <option value="buddha"> Buddha </option>
                    <option value="khonghucu"> Khonghucu </option>
                </select>
            </div>

        <div class="form-group">
            <label for="no_telpon"> No Telepon</label>
            <div class="input"><input type="text" name="no_telpon"></div>
        </div>

        <div class="form-group">
            <label for="email"> e-mail</label>
            <div class="input"><input type="text" name="email"></div>
        </div>

            <div class="form-group">
            <label for="bidang">Bidang yang dipilih</label>
            <div class="input">
                <select name="bidang">
                    <option value="sekretaris"> Sekretaris Umum</option>
                    <option value="bendahara"> Bedahara Umum </option>
                    <option value="humas"> Humas </option>
                    <option value="medinfo"> Media dan Informasi </option>
                    <option value="kemahasiswaan"> Kemahasiswaan </option>
                </select>
            </div>

            <div class="form-group">
                <input type="submit" value="Simpan" class="tombol simpan">
                <input type="reset" value="Batal" class="tombol reset">
            </div>
    </form>
</body>

</html>