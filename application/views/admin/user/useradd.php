<?php
echo validation_errors();
echo form_open(base_url(akses().'/users/add'),array('class'=>'form-horizontal'));
?>

<h3 class="box-title margin text-center">Tambah Data User</h3>
<center> <div class="batas"> </div></center>
<hr/>

<div class="form-group required">
	<label class="col-sm-1 control-label" for="">Nama</label>
	<div class="col-md-6">
		<input type="text" name="nama" id="" class="form-control " autocomplete="" placeholder="Nama User" required="" value="<?php echo set_value('nama'); ?>"/>
	</div>
</div>
<div class="form-group required">
	<label class="col-sm-1 control-label" for="">Username</label>
	<div class="col-md-6">
		<input type="text" name="username" id="" class="form-control " required="" autocomplete="" placeholder="Username Baru" value="<?php echo set_value('username'); ?>"/>		
	</div>
</div>
<div class="form-group required">
	<label class="col-sm-1 control-label" for="">Password Baru</label>
	<div class="col-md-6">
		<input type="password" name="password" id="" class="form-control " required="" autocomplete="" placeholder="Password Baru" value="<?php echo set_value('password'); ?>"/>		
	</div>
</div>
<div class="form-group required">
	<label class="col-sm-1 control-label" for="">Akses</label>
	<div class="col-md-6">
		<select name="akses" class="form-control" required="">
			<option>Pilih Akses</option>
			<option value="tu">Tata Usaha</option>
			<option value="wakasis">Waka Siswa</option>
		</select>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-1 control-label"></label>
	<div class="col-md-6">
		<button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> Simpan</button>
	</div>
</div>
<?php
echo form_close();
?>