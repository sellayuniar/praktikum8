<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$jenis_pendaftaran = $_POST['jenis_pendaftaran']; 
$tanggal_masuk = $_POST['tanggal_masuk'];  
$NIS = $_POST['NIS']; 
$nomor_peserta = $_POST['nomor_peserta'];   
$pernahpaud = $_POST['pernahpaud']; 
$pernahtk = $_POST['pernahtk'];  
$noseri_SKHUN = $_POST['noseri_SKHUN'];  
$noseri_ijazah = $_POST['noseri_ijazah']; 
$Hobi = $_POST['Hobi'];           
$cita_cita = $_POST['cita_cita'];     
$nama_lengkap = $_POST['nama_lengkap']; 
$jenis_kelamin = $_POST['jenis_kelamin']; 
$NISN = $_POST['NISN']; 
$NIK = $_POST['NIK']; 
$tempatlahir = $_POST['tempatlahir'] ; 
$tanggallahir = $_POST['tanggallahir'];  
$agama = $_POST['agama'];    
$berkebutuhan_khusus = $_POST['berkebutuhan_khusus']; 
$alamat = $_POST['alamat']; 
$RT = $_POST['RT']; 
$RW = $_POST['RW'];  
$namadusun = $_POST['namadusun']; 
$namakelurahan = $_POST['namakelurahan']; 
$kecamatan = $_POST['kecamatan']; 
$kodepos = $_POST['kodepos']; 
$tempattinggal = $_POST['tempattinggal'];
$modaltransportasi = $_POST['modaltransportasi']; 
$nomorhp = $_POST['nomorhp']; 
$nomortelepon = $_POST['nomortelepon']; 
$emailpribadi = $_POST['emailpribadi']; 
$penerimakps = $_POST['penerimakps'];          
$kewarganegaraan = $_POST['kewarganegaraan']; 
//query SQL untuk insert data
$query = "INSERT INTO siswa SET jenis_pendaftaran='$jenis_pendaftaran', tanggal_masuk_sekolah ='$tanggal_masuk', NIS='$NIS', nomor_peserta='nomor_peserta', pernah_paud='$pernahpaud', pernah_tk='$pernahtk', no_seri_SKHUN='noseri_SKHUN' ,  no_seri_ijazah='$noseri_ijazah',  Hobi='$Hobi' ,  cita_cita='$cita_cita' ,  nama_lengkap='$nama_lengkap' ,  jenis_kelamin='$jenis_kelamin' ,  NISN='$NISN' ,  NIK='$NIK' ,  tempat_lahir='$tempatlahir' ,  tanggal_lahir='$tanggallahir' ,  agama='$agama' ,  berkebutuhan_khusus='$berkebutuhan_khusus' ,  alamat='$alamat' ,  RT='$RT' ,  RW='$RW' ,  nama_dusun='$namadusun' ,  nama_kelurahan='$namakelurahan' ,  kecamatan='$kecamatan' ,  kode_pos='$kodepos' ,  tempat_tinggal='$tempattinggal' ,  modal_transportasi='$modaltransportasi' , nomor_hp ='$nomorhp' ,  nomor_telepon='$nomortelepon' ,  email_pribadi='$emailpribadi' ,  penerima_kps='$penerimakps' , kewarganegaraan ='$kewarganegaraan'";

mysqli_query($koneksi, $query); //untuk mengeksekusi variabel $koneksi dan $query
echo "data berhasil dimasukan"; //tampilan teks data berhasil dimasukan

echo "<h2> Your Input: </h2>"; //print teks 
echo "jenis pendaftaran =".$jenis_pendaftaran; //print teks
echo "<br>"; // ganti baris
echo "tanggal masuk =".$tanggal_masuk; //print teks
echo "<br>"; 
echo "nomor peserta =".$nomor_peserta; //print teks
echo "<br>"; 
echo "pernahpaud =".$pernahpaud; //print teks
echo "<br>"; 
echo "pernahtk =".$pernahtk; //print teks
echo "<br>";
echo "noseri_SKHUN=".$noseri_SKHUN; //print teks
echo "<br>";
echo "noseri_ijazah=".$noseri_ijazah; //print teks
echo "<br>";
echo "Hobi=".$Hobi; //print teks
echo "<br>";
echo "cita-cita=".$cita_cita; //print teks
echo "<br>";
echo "nama_lengkap=".$nama_lengkap; //print teks
echo "<br>";
echo "jenis_kelamin=".$jenis_kelamin; //print teks
echo "<br>";
echo "NISN=".$NISN; //print teks
echo "<br>";
echo "NIK=".$NIK; //print teks
echo "<br>";
echo "tempatlahir=".$tempatlahir; //print teks
echo "<br>";
echo "tanggallahir=".$tanggallahir; //print teks
echo "<br>";
echo "agama=".$agama; //print teks
echo "<br>";
echo "berkebutuhan_khusus=".$berkebutuhan_khusus; //print teks
echo "<br>";
echo "alamat=".$alamat; //print teks
echo "<br>";
echo "RT=".$RT; //print teks
echo "<br>";
echo "RW=".$RW; //print teks
echo "<br>";
echo "namadusun=".$namadusun; //print teks
echo "<br>";
echo "namakelurahan=".$namakelurahan; //print teks
echo "<br>";
echo "kecamatan=".$kecamatan; //print teks
echo "<br>";
echo "kodepos=".$kodepos; //print teks
echo "<br>";
echo "tempat tinggal=".$tempattinggal; //print teks
echo "<br>";
echo "modaltransportasi=".$modaltransportasi; //print teks
echo "<br>";
echo "nomor_hp=".$nomorhp; //print teks
echo "<br>";
echo "nomortelepon=".$nomortelepon; //print teks
echo "<br>";
echo "emailpribadi=".$emailpribadi; //print teks
echo "<br>";
echo "penerimakps=".$penerimakps; //print teks
echo "<br>";
echo "kewarganegaraan=".$kewarganegaraan; //print teks
echo "<br>";


?>
