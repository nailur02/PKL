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
		<i class="fa fa-code"></i>
		Data Kriteria </h3>
		<a class="btn btn-success btn-social pull-right" href="<?=base_url(akses().'/master/kriteria/add');?>">
		<i class="fa fa-plus"></i> Tambah Data</a>		
		</div>
		
		
<table class="table table-bordered table-striped dataTable no-footer" id="datatable">
	<thead style="background:#50a3a2;color:#fff;">
		<th>No</th>
		<th>Nama Kriteria</th>		
		<th>Aksi</th>
	</thead>
	<tbody>
		<?php
		$no=0;
		if(!empty($data))
		{
			foreach($data as $row)
			{
				$no+=1;
				$id=$row->kriteria_id;
			?>
			<tr>
				<td align="center" width="5%"><?=$no;?></td>
				<td width="70%"><?=$row->nama_kriteria;?></td>
				<td align="center">
					<a title="Parameter Kriteria" href="<?=base_url(akses().'/master/kriteria/subkriteria');?>?kriteria=<?=$id;?>" class="btn btn-xs btn-success"><i class="fa fa-level-down"></i> Parameter</a>
					<a title="Edit Kriteria" href="<?=base_url(akses().'/master/kriteria/edit');?>?id=<?=$id;?>" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i> Edit</a>
					<a title="Hapus Kriteria" onclick="return confirm('Yakin ingin menghapus kriteria ini?');" href="<?=base_url(akses().'/master/kriteria/delete');?>?id=<?=$id;?>" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Hapus</a>
				</td>
			</tr>
			<?php
			}
		}
		?>
	</tbody>
</table>