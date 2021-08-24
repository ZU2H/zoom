<?php
	$JANUARI = 1;
	$FEBRUARI = 2;
	$MARET = 3;
	$APRIL = 4;
	$MEI = 5;
	$JUNI = 6;
	$JULI = 7;
	$AGUSTUS = 8;
	$SEPTEMBER = 9;
	$OKTOBER = 10;
	$NOVEMBER = 11;
	$DESEMBER = 12;

	$tanggal = 21;
	$bulan = 4;

	$hasil="SALAH";

	if (( $tanggal >= 21 && $tanggal <= 31 && $bulan == $MARET ) || ( $tanggal >= 1 && $tanggal <= 19 && $bulan == $APRIL )) {
		$hasil = "ARIES";
	} else if (( $tanggal >= 20 && $tanggal <= 30 && $bulan == $APRIL ) || ( $tanggal >= 1 && $tanggal <= 20 && $bulan == $MEI )) {
		$hasil = "TAURUS";
	} elseif (( $tanggal >= 21 && $tanggal <= 31 && $bulan == $MEI ) || ( $tanggal >= 1 && $tanggal <= 20 && $bulan == $JUNI )) {
		$hasil = "GEMINI";
	} elseif (( $tanggal >= 21 && $tanggal <= 30 && $bulan == $JUNI ) || ( $tanggal >= 1 && $tanggal <= 22 && $bulan == $JULI )) {
		$hasil = "CANCER";
	} elseif (( $tanggal >= 23 && $tanggal <= 31 && $bulan == $JULI ) || ( $tanggal >= 1 && $tanggal <= 22 && $bulan == $AGUSTUS )) {
		$hasil = "LEO";
	} elseif (( $tanggal >= 23 && $tanggal <= 31 && $bulan == $AGUSTUS ) || ( $tanggal >= 1 && $tanggal <= 22 && $bulan == $SEPTEMBER )) {
		$hasil = "VIRGO";
	} elseif (( $tanggal >= 23 && $tanggal <= 30 && $bulan == $SEPTEMBER ) || ( $tanggal >= 1 && $tanggal <= 22 && $bulan == $OKTOBER )) {
		$hasil = "LIBRA";
	} elseif (( $tanggal >= 23 && $tanggal <= 31 && $bulan == $SEPTEMBER ) || ( $tanggal >= 1 && $tanggal <= 21 && $bulan == $NOVEMBER )) {
		$hasil = "SCORPIO";
	} elseif (( $tanggal >= 22 && $tanggal <= 30 && $bulan == $NOVEMBER ) || ( $tanggal >= 1 && $tanggal <= 21 && $bulan == $DESEMBER)) {
		$hasil = "SAGITARIUS";
	} elseif (( $tanggal >= 22 && $tanggal <= 31 && $bulan == $DESEMBER ) || ( $tanggal >= 1 && $tanggal <= 19 && $bulan == $JANUARI )) {
		$hasil = "CAPRICORN";
	} elseif (( $tanggal >= 20 && $tanggal <= 31 && $bulan == $JANUARI ) || ( $tanggal >= 1 && $tanggal <= 18 && $bulan == $FEBRUARI )) {
		$hasil = "AQUARIUS";
	} elseif (( $tanggal >= 19 && $tanggal <= 28 && $bulan == $FEBRUARI ) || ( $tanggal >= 1 && $tanggal <= 20 && $bulan == $MARET )) {
		$hasil = "PISCES";
	}
	
	echo '<h1>' .$hasil. '<h1>';
?>