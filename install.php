<?php
// v0.0.3
$check = $this->db->query("SHOW TABLES LIKE '" . DB_PREFIX . "novaposhta_cities_sort_order'");

if (!$check->num_rows) {
	$cities = [
		'1' => '0',
		'3' => '0',
		'4' => '0',
		'8' => '0',
		'9' => '0',
		'10' => '0',
		'11' => '0',
		'13' => '0',
		'14' => '0',
		'15' => '0',
		'17' => '0',
		'18' => '0',
		'19' => '0',
		'20' => '0',
		'21' => '0',
		'22' => '0',
		'56' => '0',
		'57' => '0',
		'58' => '0',
		'62' => '0',
		'63' => '0',
	];
	$table = "CREATE TABLE `" . DB_PREFIX . "novaposhta_cities_sort_order` ("
		. "`CityID` INT(11) NULL DEFAULT NULL, "
		. "`sort_order` INT(2) UNSIGNED NULL DEFAULT NULL, "
		. "UNIQUE INDEX `CityID` (`CityID`) "
		. ")"
		. "COLLATE='utf8_general_ci' "
		. "ENGINE=MyISAM;";
	$data = "INSERT INTO `" . DB_PREFIX . "novaposhta_cities_sort_order` (`CityID`, `sort_order`) VALUES ";
	foreach ($cities as $city) {
		$data .= "(" . implode(',', $city) . "),";
	}
	$data = substr($data, 0,-1);
	$this->db->query($data);
}
