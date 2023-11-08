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
		Data Beasiswa </h3>	
		</div>
		
<table class="table table-bordered table-striped dataTable no-footer" id="datatable">
	<thead style="background:#50a3a2;color:#fff;">
		<th>Nama Beasiswa</th>
		<th>Keterangan</th>
		<th>Tahun</th>
		<th>Aksi</th>
	</thead>
	<tbody>
		<?php
		if(!empty($data))
		{
			foreach($data as $row)
			{
				$id=$row->beasiswa_id;
			?>
			<tr>
				<td><?=$row->judul;?></td>				
				<td><?=$row->keterangan;?></td>				
				<td><?=$row->tahun;?></td>
				<td align="center">
					<a href="<?=base_url(akses().'/beasiswa/peserta');?>?id=<?=$id;?>" class="btn btn-xs btn-warning"><i class="fa fa-users"></i> Daftar Peserta</a>
				</td>
			</tr>
			<?php
			}
		}
		?>
	</tbody>
</table>