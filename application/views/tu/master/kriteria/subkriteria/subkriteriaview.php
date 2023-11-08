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
      "order": [[ 1, "asc" ]],
        "oLanguage": {
            "sProcessing": '<i class="fa fa-spinner fa-pulse fa-3x"></i>'
      },
    });
});
</script>


<div class="box-header">
		<h3 class="box-title" style="font-size:30px;color:#666;">
		<i class="fa fa-code"></i>
		Data Parameter </h3>
		<a class="btn btn-success btn-social pull-right" href="<?=base_url(akses().'/master/kriteria/subkriteriaadd').$kriteria;?>">
		<i class="fa fa-plus"></i> Tambah Data</a>		
		</div>
		
		

<table class="table table-bordered table-striped dataTable no-footer" id="datatable">
	<thead style="background:#50a3a2;color:#fff;">
		<th>Sub Kriteria</th>
		<th>Nilai</th>
		<th width="15%">Aksi</th>
	</thead>
	<tbody>
		<?php
		if(!empty($data))
		{
			foreach($data as $row)
			{
				$link=str_replace("?","&",$kriteria);
				$id=$row->subkriteria_id;
				$namaUtama=field_value('kriteria','kriteria_id',$row->kriteria_id,'nama_kriteria');
				$nilainama="(".$row->nilai_id.") ".field_value('nilai_kategori','nilai_id',$row->nilai_id,'nama_nilai');
			?>
			<tr>
				<td><?=$namaUtama." ".$row->nama_subkriteria;?></td>
				<td><?=$nilainama;?></td>
				<td align="center">
					<a href="<?=base_url(akses().'/master/kriteria/subkriteriaedit').'?id='.$id.$link;?>" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i> Edit</a>
							<a onclick="return confirm('Yakin ingin menghapus data ini?');" href="<?=base_url(akses().'/master/kriteria/subkriteriadelete');?>?id=<?=$id.$link;?>" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Hapus</a>
				</td>
			</tr>
			<?php
			}
		}
		?>
	</tbody>
</table>