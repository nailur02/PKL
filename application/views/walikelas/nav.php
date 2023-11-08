<?php
$menu=array(
	'Data Siswa'=>array(		
		'icon'=>'fa fa-users',
		'url'=>base_url(akses())."/siswa",
		'target'=>"",
		'slug'=>'siswa'
	),
	'Data Beasiswa'=>array(		
		'icon'=>'fa fa-money',
		'slug'=>'beasiswa',
		'child'=>array(
				'Data Beasiswa'=>array(
					'icon'=>'fa fa-circle-o',
					'url'=>base_url(akses())."/beasiswa/beasiswa",
					'target'=>"",
					),
				'Peserta Beasiswa'=>array(
					'icon'=>'fa fa-circle-o',
					'url'=>base_url(akses())."/beasiswa/peserta",
					'target'=>"",
					),
			),
	),
);
?>