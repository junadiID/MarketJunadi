<?php
/**
 KangHL --> Meneng Lan Anteng
 Website --> https://kanghl.web.id/
 */

require '../config.php';
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
require('../lib/ssp.class.php');
	$table = 'layanan_pulsa';
	$primaryKey = 'id';

	$columns = array(
		array( 'db' => 'service_id', 'dt' => 0),
		array( 'db' => 'operator', 'dt' => 1),
		array( 'db' => 'layanan', 'dt' => 2),
		array( 'db' => 'harga',  'dt' => 3, 'formatter' => function($i) {
			return "Rp ".number_format($i,0,',','.');
		}),
		array('db' => 'status', 'dt' => 4,	'formatter' => function($i) {
			$status = ($i == 'Normal') ? 'Normal':'Gangguan';
			$badge = ($i == 'Normal') ? 'success':'danger';
				return "<span class=\"badge badge-".$badge."\">".$status."</span>";
		}),
		
	);
	$sql_details = array(
		'user' => $config['db']['username'],
		'pass' => $config['db']['password'],
		'db'   => $config['db']['name'],
		'host' => $config['db']['host']
	);
	$joinQuery = null;
	$extraWhere = '';
	$groupBy = '';
	$having = '';
	print(json_encode(
		SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns, $joinQuery, $extraWhere, $groupBy, $having )
	));
} else {
	exit("No direct script access allowed!");
}