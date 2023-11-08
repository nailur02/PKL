<?php
echo validation_errors();
echo form_open(base_url(akses().'/master/kriteria/add'),array('class'=>'form-horizontal'));
?>

<h3 class="box-title margin text-center">Tambah Data Kriteria</h3>
<center> <div class="batas"> </div></center>
<hr/>

<div class="form-group">
	<label class="col-sm-2 control-label" for="">Nama Kriteria</label>
	<div class="col-md-7">
		<input type="text" name="nama" id="" class="form-control " autocomplete="off" placeholder="Nama Kriteria Utama" required="" value="<?php echo set_value('nama'); ?>"/>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">&nbsp;</label>
	<div class="col-md-4">
		<button type="submit" class="btn btn-success"><i class="fa fa-check"></i>Tambah</button>
		<a href="javascript:history.back(-1);" class="btn btn-warning"><i class="fa fa-chevron-left"></i>Batal</a>
	</div>
</div>
<?php
echo form_close();
?>