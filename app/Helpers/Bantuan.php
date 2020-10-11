<?php

function delSpace($string)
{
	$string = trim(str_replace(' ', '', $string));
	return $string;
}

function bulan($nilai)
{
	// dd((int)$nilai);
	$bulan = array(
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);

	// dd($bulan[(int)$nilai]);
	return $bulan[(int) $nilai];
}

function bulanAngka($string)
{

	$angka = [
		'January' => '01',
		'February' => '02',
		'March' => '03',
		'April' => '04',
		'May' => '05',
		'June' => '06',
		'July' => '07',
		'August' => '08',
		'September' => '09',
		'October' => '10',
		'November' => '11',
		'December' => '12'
	];
	// dd($angka);

	return $angka[$string];
}

function tanggalWaktu($nilai)
{
	$bulan = array(
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', date('Y-m-d-H:i', strtotime($nilai)));
	$bln = isset($pecahkan[1]) ? (int) $pecahkan[1] : ' ';
	return $pecahkan[3] .' | '.$pecahkan[2] . ' ' . $bulan[$bln] . ' ' . $pecahkan[0];
}


function tanggal($nilai)
{
	$bulan = array(
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', date('Y-m-d', strtotime($nilai)));
	$bln = isset($pecahkan[1]) ? (int) $pecahkan[1] : ' ';
	return $pecahkan[2] . ' ' . $bulan[$bln] . ' ' . $pecahkan[0];
}

function rupiah($nilai)
{
	return "Rp. " . number_format(ceil($nilai), "0", ",", ".");
}
