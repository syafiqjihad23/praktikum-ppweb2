<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Mahasiswa</title>
</head>
<body>
<form action="form_nilai.php" method="post">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label"></label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="text" name="text" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Text Field</label> 
    <div class="col-8">
      <input id="text1" name="text1" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="" class="col-4 col-form-label">Form Nilai</label> 
    <div class="col-8">
      <input id="" name="" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label"></label> 
    <div class="col-8">
      <input id="text2" name="text2" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>



<? 
if (isset($_POST['submit'])) {
$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$tugas = $_POST['tugas'];
$rata_rata = ($uts * 0.3) + ($uas * 0.3) + ($tugas * 0.4);
$keterangan = keterangan ($rata_rata);
$grade = grade ($rata_rata);

echo "Nama : $nama <br>";
echo "Mata Kuliah : $matkul <br>";
echo "Nilai UTS : $uts <br>";
echo "Nilai UAS : $uas <br>";
echo "Rata-Rata Nilai : $rata_rata <br>";
echo "Keterangan : $keterangan <br>";
echo "Grade : $grade "

function keterangan ($rata_rata){
    if ($rata_rata >= 80) {
        return "Lulus";
}
else {
    return "Tidak Lulus";
}
}
function grade ($rata_rata){
    if ($rata_rata >= 85 && $rata_rata <= 100) {
        return "A Sangat Baik";
    }
    elseif ($rata_rata >= 60 && $rata_rata <= 84) {
        return "B Baik";
    }
    elseif ($rata_rata >= 40 && $rata_rata <= 59) {
        return "C Cukup";
    }
    elseif ($rata_rata >= 20 && $rata_rata <= 30) {
        return "D Kurang";
    }
    elseif ($rata_rata >=0 && $rata_rata <= 10) {
        return "E Sangat Kurang";
    }
    else {
        return "Tidak Lulus";
    }
}
?>
</html>
</body>