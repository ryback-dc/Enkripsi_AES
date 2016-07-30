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


<?php
	//untuk enkripsi
	include "./lib/function.php";


	 $abc 			 = 'abcdefgh';
	 $samadengan = "=";
	 $dengan		 = "&";
	 $numeric		 = "12345";

	echo "ini adalah enkripsi dari <strong>$abc</strong> menjadi <strong>".paramEncrypt($abc)."</strong><br/>" ;
	echo "ini adalah enkripsi dari <strong>$samadengan</strong> menjadi <strong>".paramEncrypt($samadengan)."</strong><br/>" ;
	echo "ini adalah enkripsi dari <strong>$dengan</strong> menjadi <strong>".paramEncrypt($dengan)."</strong><br/>" ;
	echo "ini adalah enkripsi dari <strong>$numeric</strong> menjadi <strong>".paramEncrypt($numeric)."</strong><br/>" ;
?>
