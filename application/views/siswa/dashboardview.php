
<?php
if(empty($data))
{
	redirect(base_url('logout'));
}
foreach($data as $row){	
}
?>

<div class="box-header">
		<h3 class="box-title" style="font-size:30px;color:#666;">
		<i class="fa fa-home"></i> Dashboard Siswa</h3>
		</div>
		
		<div class="alert alert-info alert-dismissable">
            <i class="fa fa-exclamation-circle"></i> Selamat datang pada halaman siswa aplikasi sistem pendukung keputusan pemilihan beasiswa sekolah menggunakan metode analytical hierarchy process.
		  </div>


<table class="table table-bordered table-striped dataTable no-footer">
<thead style="background:#50a3a2;color:#fff;">
	<th>Beasiswa yang diikuti</th>
	<th>Status</th>
</thead>
<?php
$sPeserta=array(
'siswa_id'=>$row->siswa_id,
);
$dPeserta=$this->m_db->get_data('peserta',$sPeserta);
if(!empty($dPeserta))
{
	foreach($dPeserta as $rPeserta)
	{
		$warna='';
		if($rPeserta->status=="lolos")
		{
			$warna='class="bg-green"';
		}else{
			$warna='class="bg-yellow"';
		}
		$namabeasiswa=field_value('beasiswa','beasiswa_id',$rPeserta->beasiswa_id,'judul');
	?>
	<tr>
		<td><?=$namabeasiswa;?></td>
		<td><?=ucwords($rPeserta->status);?></td>
	</tr>
	<?php
	}
}
?>
</table>

