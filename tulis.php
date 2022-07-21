<?php           
	if(isset($_POST['nama']) && isset($_POST['nim']))
	{
		$nama=$_POST['nama'];
		$nim=$_POST['nim'];
		$fp = fopen('data.txt', 'w');
		fwrite($fp,"Nama: $nama ");
		fwrite($fp," NIM: $nim");
		fclose($fp);
	}
?>