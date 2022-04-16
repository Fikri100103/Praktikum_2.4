<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Ujian</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <h2>From Nilai Ujian</h2>
    <hr>
    <div class="container">
        <form class="form-horizontal mt-3" method="POST" action="form_nilaiujian.php">
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label> 
                <div class="col-8">
                <input id="nim" name="nim" placeholder="NIM" type="text" class="form-control" size="30">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4 col-form-label" for="select">Pilih MK</label> 
                <div class="col-8">
                <select id="mata_kuliah" name="mata_kuliah" class="custom-select">
                    <option value="Data Warehouse">Data Warehouse</option>
                    <option value="Dasar Dasar Pemrograman">Dasar Dasar Pemrograman</option>
                    <option value="Basis Data I">Basis Data I</option>
                    <option value="Pemrograman Web">Pemrograman Web</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai" class="col-4 col-form-label">Nilai</label> 
                <div class="col-8">
                <input id="nilai" name="nilai" placeholder="Nilai" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="proses" type="submit" class="btn btn-success">Simpan</button>
                </div>
            </div>
        </form>
        <br/>
        <?php
        require_once 'class_nilaimahasiswa.php';
        if(isset($_POST['proses'])){
            $submit = $_POST['submit'];
            $nim = $_POST['nim']; 
            $matakuliah = $_POST['mata_kuliah'];
            $nilai = $_POST['nilai'];
            
            $NilaiMahasiswa = new NilaiMahasiswa($matakuliah, $nilai, $nim);

            echo "<br/>NIM : ". $nim;
            
            echo "<br/>Mata Kuliah : ". $matakuliah;

            echo "<br/>Nilai : ". $nilai;
            
            echo "<br/>Hasil Ujian : ". $NilaiMahasiswa->hasil();
            
            echo "<br/>Grade : ". $NilaiMahasiswa->grade();
        } else{
            echo '------------- From Belum Diisi -------------';
        }
        echo '</table>';
        ?>
    </div>
</body>
</html>

