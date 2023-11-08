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
      "autoWidth": true
    });
});
</script>


<div class="box-header">
		<h3 class="box-title" style="font-size:30px;color:#666;">
		<i class="fa fa-money"></i>
		Data Beasiswa </h3>
		<a class="btn btn-success btn-social pull-right" href="<?=base_url(akses().'/beasiswa/beasiswa/add');?>">
		<i class="fa fa-plus"></i> Tambah Data</a>		
		</div>

<table class="table table-bordered table-striped dataTable no-footer" id="datatable">
	<thead style="background:#50a3a2;color:#fff;">
		<th width="55%">Nama Beasiswa</th>
		<th width="10%">Tahun</th>
		<th width="10%">Kuota</th>
		<th width="25%">Aksi</th>
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
				<td><?=$row->tahun;?></td>
				<td><?=$row->kuota;?></td>
				<td align="center">
					<a href="<?=base_url(akses().'/beasiswa/beasiswa/proses');?>?id=<?=$id;?>" class="btn btn-xs btn-success"><i class="fa fa-eye"></i> Penerima</a> 
					<a href="<?=base_url(akses().'/beasiswa/beasiswa/edit');?>?id=<?=$id;?>" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i> Edit</a>
					<a onclick="return confirm('Yakin ingin menghapus beasiswa ini?');" href="<?=base_url(akses().'/beasiswa/beasiswa/delete');?>?id=<?=$id;?>" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
				</td>
			</tr>
			<?php
			}
		}
		?>
	</tbody>
</table>