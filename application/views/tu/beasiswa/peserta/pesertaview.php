<link rel="stylesheet" href="<?=base_url();?>konten/tema/lte/plugins/datatables/dataTables.bootstrap.css"/>
<script src="<?=base_url();?>konten/tema/lte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url();?>konten/tema/lte/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
	$('#datatable').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
});
</script>

<div class="box-header">
		<h3 class="box-title" style="font-size:30px;color:#666;">
		<i class="fa fa-money"></i>
		Peserta Beasiswa </h3>	
</div>

<table class="table table-bordered table-striped dataTable no-footer" id="datatable">
	<thead style="background:#50a3a2;color:#fff;">
		<th>NISN</th>
		<th>Nama</th>
		<th>Kelas</th>
		<th>Semester</th>
		<th>Tahun Masuk</th>
		<th>Beasiswa</th>
		<th>Status</th>
		<th>Aksi</th>
	</thead>
	<tbody>
		<?php
		if(!empty($data))
		{
			foreach($data as $row)
			{
				$id=$row->siswa_id;
				$pid=$row->peserta_id;
			?>
			<tr>
				<td><?=$row->nisn;?></td>				
				<td><?=$row->nama;?></td>
				<td><?=$row->kelas." ".$row->jurusan;?></td>				
				<td><?=$row->semester;?></td>
				<td><?=$row->tahun;?></td>
				<td><?=$row->judul;?></td>
				<td><?=ucwords($row->status);?></td>
				<td align="center">					
					<a onclick="return confirm('Yakin ingin menghapus siswa ini?');" href="<?=base_url(akses().'/beasiswa/peserta/delete');?>?peserta=<?=$pid;?>" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Hapus</a>
				</td>
			</tr>
			<?php
			}
		}
		?>
	</tbody>
</table>