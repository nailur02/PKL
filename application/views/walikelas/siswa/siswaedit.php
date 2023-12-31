<link rel="stylesheet" href="<?=base_url();?>konten/jqueryui/jquery-ui.min.css"/>
<link rel="stylesheet" href="<?=base_url();?>konten/jqueryui/themes/overcast/jquery-ui.min.css"/>
<script src="<?=base_url();?>konten/jqueryui/jquery-ui.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
	if($(".tanggal").length)
	{
		$(".tanggal").datepicker({
			dateFormat: "yy-mm-dd",
			showAnim:"slide",
			changeMonth: true,
			changeYear: true,
			yearRange:'c-70:c+10',
		});
	}
});
</script>
<?php
if(empty($data))
{
	redirect(base_url(akses().'/siswa'));
}
foreach($data as $row){	
}
echo validation_errors();
echo form_open(base_url(akses().'/siswa/edit'),array('class'=>'form-horizontal'));
?>

<h3 class="box-title margin text-center">Edit Data Siswa</h3>
<center> <div class="batas"> </div></center>
<hr/>

<input type="hidden" name="siswaid" value="<?=$row->siswa_id;?>"/>
<div class="col-md-6">
<h3 class="heading-c">Biodata</h3>
<div class="form-group required">
	<label class="col-sm-3 control-label" for="">NISN</label>
	<div class="col-md-5">
		<input type="text" name="nisn" id="" class="form-control " autocomplete="" placeholder="NISN Siswa" required="" value="<?php echo set_value('nisn',$row->nisn); ?>"/>
	</div>
</div>
<div class="form-group required">
	<label class="col-sm-3 control-label" for="">Nama Siswa</label>
	<div class="col-md-9">
		<input type="text" name="nama" id="" class="form-control " autocomplete="" placeholder="Nama Siswa" required="" value="<?php echo set_value('nama',$row->nama); ?>"/>
	</div>
</div>
<div class="form-group required">
	<label class="col-sm-3 control-label" for="">Gender</label>
	<div class="col-md-7">
		<?php
		$arr=array('pria','wanita');
		foreach($arr as $r)
		{
			$jj='';
			if($r==$row->jenkel)
			{
				$jj='checked="checked"';
			}
		?>
		<div class="radio">
			<label>
				<input type="radio" name="jk" value="<?=$r;?>" <?=$jj;?>/> <?=ucfirst($r);?>
			</label>
		</div>		
		<?php
		}
		?>
	</div>
</div>
<div class="form-group required">
	<label class="col-sm-3 control-label" for="">Tahun Masuk</label>
	<div class="col-md-4">
		<input type="number" name="tahun" id="" class="form-control " autocomplete="" placeholder="Tahun Masuk" required="" value="<?php echo set_value('tahun',$row->tahun); ?>"/>
	</div>
</div>
<div class="form-group required">
	<label class="col-sm-3 control-label" for="">Semester</label>
	<div class="col-md-4">
		<input type="number" name="semester" id="" class="form-control " autocomplete="" placeholder="Semester" required="" value="<?php echo set_value('semester',$row->semester); ?>"/>
	</div>
</div>
<div class="form-group required">
	<label class="col-sm-3 control-label">Tempat Lahir</label>
	<div class="col-md-8">
		<input type="text" name="tempat" class="form-control" required="" placeholder="Tempat Lahir" value="<?=set_value('tempat',$row->tempat_lahir);?>"/>		
	</div>
</div>
<div class="form-group required">
	<label class="col-sm-3 control-label">Tanggal Lahir</label>
	<div class="col-md-8">
		<input type="text" name="tanggal" class="form-control tanggal" required="" placeholder="Tanggal Lahir" value="<?=set_value('tanggal',$row->tgl_lahir);?>"/>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-3 control-label" for="">Alamat</label>
	<div class="col-md-9">
		<textarea name="alamat" class="form-control"><?=set_value('alamat',$row->alamat);?></textarea>
	</div>
</div>
</div>
<div class="col-md-6">
<h3 class="heading-c">Keluarga</h3>
<div class="form-group">
	<label class="col-sm-3 control-label" for="">Nama Ayah</label>
	<div class="col-md-9">
		<input type="text" name="namaayah" class="form-control" placeholder="Nama Ayah" value="<?=set_value('namaayah',$row->nama_ayah);?>"/>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-3 control-label" for="">Pekerjaan Ayah</label>
	<div class="col-md-9">
		<input type="text" name="kerjaayah" class="form-control" placeholder="Pekerjaan Ayah" value="<?=set_value('kerjaayah',$row->pekerjaan_ayah);?>"/>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-3 control-label" for="">Nama Ibu</label>
	<div class="col-md-9">
		<input type="text" name="namaibu" class="form-control" placeholder="Nama Ibu" value="<?=set_value('namaibu',$row->nama_ibu);?>"/>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-3 control-label" for="">Pekerjaan Ibu</label>
	<div class="col-md-9">
		<input type="text" name="kerjaibu" class="form-control" placeholder="Pekerjaan Ibu" value="<?=set_value('kerjaibu',$row->pekerjaan_ibu);?>"/>
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label" for="">Anak Ke</label>
	<div class="col-md-9">
		<input type="text" name="anakke" class="form-control" placeholder="Anak Ke" value="<?=set_value('anakke',$row->anak_ke);?>"/>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-3 control-label" for="">Jumlah bersaudara</label>
	<div class="col-md-9">
		<input type="text" name="saudara" class="form-control" placeholder="Jumlah Bersaudara" value="<?=set_value('saudara',$row->saudara);?>"/>
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label">&nbsp;</label>
	<div class="col-md-6">
		<button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Simpan</button>
		<a href="javascript:history.back(-1);" class="btn btn-warning"><i class="fa fa-chevron-left"></i> Batal</a>
	</div>
</div>

</div>
<?php
echo form_close();
?>