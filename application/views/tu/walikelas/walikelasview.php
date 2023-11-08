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
		<i class="fa fa-users"></i>
		Data Wali Kelas </h3>
		<a class="btn btn-success btn-social pull-right" href="<?=base_url(akses().'/walikelas/add');?>">
		<i class="fa fa-plus"></i> Tambah Data</a>		
		</div>


<table class="table table-bordered table-striped dataTable no-footer" id="datatable">
	<thead style="background:#50a3a2;color:#fff;">
		<th>Nama</th>
		<th>NUPTK</th>		
		<th>Kelas</th>
		<th>Jurusan</th>
		<th>TTL</th>
		<th>Aksi</th>
	</thead>
	<tbody>
		<?php
		if(!empty($data))
		{
			foreach($data as $row)
			{
				$id=$row->wali_kelas_id;
				$title="Bapak ";
				if($row->jenkel=="wanita")
				{
					$title="Ibu ";
				}
			?>
			<tr>
				<td><?=$title.$row->nama;?></td>
				<td><?=$row->nuptk;?></td>
				<td><?=$row->kelas;?></td>
				<td><?=$row->jurusan;?></td>
				<td><?=$row->tempat.",".$row->tgl_lahir;?></td>
				<td align="center">
					<a href="<?=base_url(akses().'/walikelas/edit');?>?id=<?=$id;?>" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i> Edit</a>
					<a onclick="return confirm('Yakin ingin menghapus wali kelas ini?');" href="<?=base_url(akses().'/walikelas/delete');?>?id=<?=$id;?>" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Hapus</a>
				</td>
			</tr>
			<?php
			}
		}
		?>
	</tbody>
</table>