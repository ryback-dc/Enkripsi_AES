################################################################################
################################################################################
####                    ENKRIPSI METODE AES                                 ####
####                    MASTERFREELANCE.COM                                 ####
####                                                                        ####
####                                                                        ####
####                                                                        ####
####                     copyright 2016                                     ####
################################################################################
################################################################################


Script :

<?php
	//untuk enkripsi
	include "./lib/function.php";


	 $abc 			 = 'abcdefgh';
	 $samadengan = "=";
	 $dengan		 = "&";
	 $numeric		 = "12345";
   $url        = "mod=wapi&com=register&imei=1234&refid=1";

	echo "ini adalah enkripsi dari <strong>$abc</strong> menjadi <strong>".paramEncrypt($abc)."</strong><br/>" ;
	echo "ini adalah enkripsi dari <strong>$samadengan</strong> menjadi <strong>".paramEncrypt($samadengan)."</strong><br/>" ;
	echo "ini adalah enkripsi dari <strong>$dengan</strong> menjadi <strong>".paramEncrypt($dengan)."</strong><br/>" ;
	echo "ini adalah enkripsi dari <strong>$numeric</strong> menjadi <strong>".paramEncrypt($numeric)."</strong><br/>" ;
  echo "ini adalah enkripsi dari <strong>$url</strong> menjadi <strong>".paramEncrypt($url)."</strong><br/>" ;
?>



result :

ini adalah enkripsi dari abcdefgh menjadi 9ad16974f71d052a9fdd2b45203d7ac5
ini adalah enkripsi dari = menjadi 8bc7ecef68901a3397ff6becf4ee655e
ini adalah enkripsi dari & menjadi 50f9b543b0969d7ff08ca501c86b62ab
ini adalah enkripsi dari 12345 menjadi 7ec7fdcdb4d6165c85c44fee77d9f609
ini adalah enkripsi dari mod=wapi&com=register&imei=1234&refid=1 menjadi 2791e8331a6fcebc955d333b05db3ef2c7f1d1165ab86467797c4f3d401f7473b0f5143bbdea5e20663a4a9fc971aeae


atau jalankan file index.php
