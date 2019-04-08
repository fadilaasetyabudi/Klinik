<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function get_rupiah($number) {
	return "Rp. " . number_format($number, 0, 2, '.');
}
?>