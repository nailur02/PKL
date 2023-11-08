<?php

$menu=array(
	'Master Beasiswa'=>array(		
		'icon'=>'fa fa-money',
		'slug'=>'beasiswa',
		'child'=>array(
				'Data Beasiswa'=>array(
					'icon'=>'fa fa-circle-o',
					'url'=>base_url(akses())."/beasiswa/beasiswa",
					'target'=>"",
					),
				'Kriteria Beasiswa'=>array(
					'icon'=>'fa fa-circle-o',
					'url'=>base_url(akses())."/beasiswa/kriteria",
					'target'=>"",
					),
				'Peserta Beasiswa'=>array(
					'icon'=>'fa fa-circle-o',
					'url'=>base_url(akses())."/beasiswa/peserta",
					'target'=>"",
					),				
			),
	),
	'Data Wali Kelas'=>array(		
		'icon'=>'fa fa-users',
		'url'=>base_url(akses())."/walikelas",
		'target'=>"",
		'slug'=>'walikelas'
	),	
	'Data Kriteria'=>array(		
		'icon'=>'fa fa-code',
		'url'=>base_url(akses())."/master/kriteria",
		'target'=>"",
		'slug'=>'master'
	),
);
?>