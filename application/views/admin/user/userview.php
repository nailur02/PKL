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
		<i class="fa fa-users"></i>
		Manajemen User </h3>
		<a class="btn btn-success btn-social pull-right" href="<?=base_url(akses().'/users/add');?>">
		<i class="fa fa-plus"></i> Tambah Data</a>		
		</div>
		

<table class="table table-bordered table-striped dataTable no-footer" id="datatable" >
	<thead style="background:#50a3a2;color:#fff;">
		<th width="30%">Nama</th>
		<th width="30%">Username</th>		
		<th width="30%">Akses</th>
		<th width="10%">Aksi</th>
	</thead>
	<tbody>
		<?php
		if(!empty($data))
		{
			foreach($data as $row)
			{
			?>
			<tr>
				<td><?=$row->nama;?></td>
				<td><?=$row->username;?></td>
				<td><?=$row->akses;?></td>
				<td align="center">
					<a onclick="return confirm('Yakin ingin menghapus user ini?');" href="<?=base_url(akses().'/users/delete');?>?id=<?=$row->user_id;?>" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
				</td>
			</tr>
			<?php
			}
		}
		?>
	</tbody>
</table>