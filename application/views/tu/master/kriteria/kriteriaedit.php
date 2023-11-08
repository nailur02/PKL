<?php
if(empty($data))
{
	redirect(base_url(akses().'/master/kriteria'));
}
foreach($data as $row){	
}
echo validation_errors();
echo form_open(base_url(akses().'/master/kriteria/edit'),array('class'=>'form-horizontal'));
?>

<h3 class="box-title margin text-center">Edit Data Kriteria</h3>
<center> <div class="batas"> </div></center>
<hr/>


<input type="hidden" name="kriteriaid" value="<?=$row->kriteria_id;?>"/>
<div class="form-group">
	<label class="col-sm-2 control-label" for="">Nama Kriteria</label>
	<div class="col-md-7">
		<input type="text" name="nama" id="" class="form-control " autocomplete="off" placeholder="Nama Kriteria" required="" value="<?php echo set_value('nama',$row->nama_kriteria); ?>"/>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">&nbsp;</label>
	<div class="col-md-4">
		<button type="submit" class="btn btn-success"><i class="fa fa-check"></i>Ubah</button>
		<a href="javascript:history.back(-1);" class="btn btn-warning"><i class="fa fa-chevron-left"></i>Batal</a>
	</div>
</div>
<?php
echo form_close();
?>