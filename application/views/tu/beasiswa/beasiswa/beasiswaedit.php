<?php
foreach($data as $row){	
}
echo validation_errors();
echo form_open(base_url(akses().'/beasiswa/beasiswa/edit'),array('class'=>'form-horizontal'));
?>

<h3 class="box-title margin text-center">Edit Data Beasiswa</h3>
<center> <div class="batas"> </div></center>
<hr/>


<input type="hidden" name="beasiswaid" value="<?=$row->beasiswa_id;?>"/>
<div class="form-group">
	<label class="col-sm-2 control-label" for="">Nama Beasiswa</label>
	<div class="col-md-9">
		<input type="text" name="judul" id="" class="form-control " autocomplete="" placeholder="Nama Beasiswa" required="" value="<?php echo set_value('judul',$row->judul); ?>"/>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" for="">Keterangan</label>
	<div class="col-md-9">
		<textarea name="keterangan" class="form-control"><?=set_value('keterangan',$row->keterangan);?></textarea>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" for="">Tahun</label>
	<div class="col-md-3">
		<input type="number" name="tahun" id="" class="form-control " autocomplete="" placeholder="Tahun Beasiswa" required="" value="<?php echo set_value('tahun',$row->tahun); ?>"/>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" for="">Kuota</label>
	<div class="col-md-3">
		<input type="number" name="kuota" id="" class="form-control " autocomplete="" placeholder="Kuota Beasiswa" required="" value="<?php echo set_value('kuota',$row->kuota); ?>"/>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">&nbsp;</label>
	<div class="col-md-6">
		<button type="submit" class="btn btn-success"><i class="fa fa-ok"></i> Update</button>
		<a href="javascript:history.back(-1);" class="btn btn-warning"><i class="fa fa-chevron-left"></i> Batal</a>
	</div>
</div>
<?php
echo form_close();
?>