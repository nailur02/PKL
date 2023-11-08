<?php
echo validation_errors();
echo form_open(base_url(akses().'/beasiswa/add'),array('class'=>'form-horizontal'));
?>

<h3 class="box-title margin text-center">Tambah Data Beasiswa</h3>
<center> <div class="batas"> </div></center>
<hr/>


<div class="form-group">
	<label class="col-sm-2 control-label" for="">Nama Beasiswa</label>
	<div class="col-md-9">
		<input type="text" name="judul" id="" class="form-control " autocomplete="" placeholder="Nama Beasiswa" required="" value="<?php echo set_value('judul'); ?>"/>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" for="">Keterangan</label>
	<div class="col-md-9">
		<textarea name="keterangan" class="form-control"><?=set_value('keterangan');?></textarea>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" for="">Tahun</label>
	<div class="col-md-3">
		<input type="number" name="tahun" id="" class="form-control " autocomplete="" placeholder="Tahun Beasiswa" required="" value="<?php echo set_value('tahun'); ?>"/>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" for="">Kuota</label>
	<div class="col-md-3">
		<input type="number" name="kuota" id="" class="form-control " autocomplete="" placeholder="Kuota Beasiswa" required="" value="<?php echo set_value('kuota'); ?>"/>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">&nbsp;</label>
	<div class="col-md-6">
		<button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Tambah</button>
		<a href="javascript:history.back(-1);" class="btn btn-warning"><i class="fa fa-chevron-left"></i> Batal</a>
	</div>
</div>
<?php
echo form_close();
?>