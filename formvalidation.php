<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> <!--link boostrap -->
	<style> 
	.warning {color: #FF0000;} /*membuat class warning yang berisi warna merah */
	</style>
</head>
<body>
<?php 
$error_nama = ""; //membuat variabel $error_nama
$error_email = ""; //membuat variabel $error_email
$error_web = ""; //membuat variabel $error_web
$error_pesan = ""; //membuat variabel $error_pesan
$error_telp = ""; //membuat variabel $error_telp

$nama = ""; //membuat variabel nama
$email = ""; //membuat variabel nama
$web = ""; //membuat variabel nama
$pesan = ""; //membuat variabel nama
$telp = "";//membuat variabel nama

if ($_SERVER["REQUEST_METHOD"] == "POST")  {//jika server request method == POST maka
	if (empty($_POST["nama"])) //jika POST nama kosong tampilkan pesan error nama tidak boleh kosong
	{
		$error_nama = "Nama tidak boleh kosong";
	}
	else // jika tidak
	{
		$nama = cek_input($_POST["nama"]); //membuat variabel nama yang mengecek input dari post nama
		if (!preg_match("/^[a-zA-Z]*$/", $nama)) //jika penulisan input nama tidak sesuai tampilkan pesan error 
		{
			$nameErr = "Inputan Hanya boleh huruf dan spasi";
		}
	}
	if (empty($_POST["email"])) //jika POST email kosong tampilkan pesan error email tidak boleh kosong
	{
		$error_email = "Email tidak boleh kosong"; 
		
	}
	else //jika tidak
	{
		$email = cek_input($_POST["email"]); //membuat variabel email yang mengecek input dari post email
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) //jika penulisan email tidak cocok tampilkan pesan error 
		{
			$error_email = "Format email Invalid";
		}
	}
	if (empty($_POST["pesan"])) //jika POST pesan kosong tampilkan pesan error pesan tidak boleh kosong
	{
		$error_pesan = "Pesan tidak boleh kosong";
	}
	else //jika tidak
	{
		$pesan = cek_input($_POST["pesan"]); //membuat variabel pesan yang mengecek input dari post pesan
	}
	if (empty($_POST["web"])) //jika POST web kosong tampilkan pesan error pesan tidak boleh kosong
	{
		$error_web = "Website tidak boleh kosong";
	}
	else //jika tidak
	{
		$web = cek_input($_POST["web"]); //membuat variabel web yang mengecek input dari post web
		if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $web)) // jika penulisan web tidak cocok tampilkan pesan error
		{
			$error_web = "URL tidak valid";
		}
	}
	if (empty($_POST["telp"]))  //jika POST telp kosong tampilkan pesan error pesan tidak boleh kosong
	{
		$error_telp = "Telp tidak boleh kosong";
	}
	else //jika tidak
	{
		$telp= cek_input($_POST["telp"]); //membuat variabel telp yang mengecek input dari post telp
		if (!is_numeric($telp)) //jika penulusan variabel telp bukan angka tampilkan pesan error
		{
			$error_telp = 'Nomor HP hanya boleh angka';
		}
	}
}

function cek_input($data) { // membuat fungsi cek_input dengan variabel $data
	$data = trim($data); //variael data menyimpan nilai trim($data), trim memiliki fungsi untuk menghapus spasi pada variabel data
	$data = stripslashes($data); //variabel data menyimpan nilai stripslashes($data), stripslashes($data) untuk membersihkan data
	$data = htmlspecialchars($data); // variabel data menyimpan nilai htmlspecialchars($data), htmlspecialchars($data) untuk mengkonversi beberapa data
	return $data; //untuk mengembalikan nilai variabel data
}
?>

<div class="row"> <!--untuk mengelompokkan kelas row -->
<div class="col-md-6"> <!-- -untuk mengelompokkan kelas col-md-6 untuk mengatur besar form-->
<div class="card"> <!-- -untuk mengelompokkan kelas card untuk tampilan form -->
	<div class="card-header"> <!---untuk mengelompokkan kelas card-header untuk tampilan header -->
		Contoh Validasi form dengan PHP
	</div>
	<div class="card-body"> <!-- untuk mengelompokkan kelas card body untuk tampilan body html-->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> <div class="form-group row">  <!-- membuat form dengan dengan action yang akan mengeprint hasil submit form-->
	<label for="nama" class="col-sm-2 col-form-label"> Nama </label> <!--membuat label -->
	<div class="col-sm-10"> <!--mengelompokkan kelas -->
		<input type="text" name="nama" class="form-control <?php echo ($error_nama !="" ? "is-invalid" : ""); ?>" id="nama" placeholder="nama" value="<?php echo $nama;?>" > <!--membuat input type teks, jika $error_nama tidak kosong tampilkan pesan $error_nama --> <span class="warning"> <?php echo $error_nama; ?></span><!-- -->
		</div>
		</div>

	<div class="form-group row"> <!--mengelompokkan kelas -->
	<label for="email" class="col-sm-2 col-form-label"> Email </label>  <!--membuat label -->
	<div class="col-sm-10"> <!--mengelompokkan kelas -->
	<input type="text" name="email" class="form-control <?php echo ($error_email !="" ? "is-invalid" : ""); ?>" id="email" placeholder="email" value="<?php echo $email; ?>" > <!--membuat input type teks, jika $error_email tidak kosong tampilkan pesan $error_email --> <span class="warning"> <?php echo $error_email; ?></span>  
	 </div>
	</div>

	<div class="form-group row"> <!--mengelompokkan kelas -->
	<label for="web" class="col-sm-2 col-form-label"> Website </label>  <!--membuat label -->
	<div class="col-sm-10"> <!--mengelompokkan kelas -->
	<input type="text" name="web" class="form-control <?php echo ($error_web !="" ? "is-invalid" : ""); ?>" id="web" placeholder="web" value="<?php echo $web; ?>" > <!--membuat input type teks, jika $error_web tidak kosong tampilkan pesan $error_web --> <span class="warning"> <?php echo $error_web; ?></span>  
	 </div>
	</div>

	<div class="form-group row"> <!--mengelompokkan kelas -->
	<label for="telp" class="col-sm-2 col-form-label"> Telp </label>  <!--membuat label -->
	<div class="col-sm-10"> <!--mengelompokkan kelas -->
	<input type="text" name="telp" class="form-control <?php echo ($error_email !="" ? "is-invalid" : ""); ?>" id="telp" placeholder="telp" value="<?php echo $telp; ?>" > <!--membuat input type teks, jika $error_email tidak kosong tampilkan pesan $error_email --> <span class="warning"> <?php echo $error_telp; ?></span> 
	 </div>
	</div>

	<div class="form-group row"> <!--mengelompokkan kelas -->
	<label for="pesan" class="col-sm-2 col-form-label"> Pesan </label>  <!--membuat label -->
	<div class="col-sm-10"> <!--mengelompokkan kelas -->
	<input type="text" name="pesan" class="form-control <?php echo ($error_pesan !="" ? "is-invalid" : ""); ?>" id="pesan" placeholder="pesan" value="<?php echo $pesan; ?>" > <!--membuat input type teks, jika $error_pesan tidak kosong tampilkan pesan $error_pesan --> <span class="warning"> <?php echo $error_pesan; ?></span>  
	 </div>
	</div>

	<div class="form-group row"><!--mengelompokkan kelas -->
	 <div class="col-sm-10"> <!--mengelompokkan kelas -->
	 	<button type="submit" class="btn btn-primary">Sign in</button> <!--membuat input type button -->
	 </div>
	</div>
</form>
</div>
</div>
</div>
</div>

<?php
echo "<h2> Your Input: </h2>"; //print teks your input: dengan header 2
echo "Nama =".$nama; //print nama = nilai variabel nama
echo "<br>"; // ganti baris
echo "Email =".$email; //print email = nilai variabel email
echo "<br>"; 
echo "Website =".$web; //print  website = nilai variabel web
echo "<br>"; 
echo "Telp =".$telp; //print telp = nilai variabel telp
echo "<br>"; 
echo "Pesan =".$pesan; //print pesan = nilai variabel pesan
?>

</body>
</html>