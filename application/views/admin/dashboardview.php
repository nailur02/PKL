<div class="box-header">
		<h3 class="box-title" style="font-size:30px;color:#666;">
		<i class="fa fa-home"></i> Dashboard Admin</h3>
		</div>
		
		<div class="alert alert-info alert-dismissable">
            <i class="fa fa-exclamation-circle"></i> Selamat datang pada halaman admin aplikasi sistem pendukung keputusan pemilihan beasiswa sekolah menggunakan metode analytical hierarchy process.
		  </div>
		  
		  
		  <div class="row">
		<div class="col-lg-6">
        <div style="background-color:#00c0ef;color:#fff;" class="small-box">
          <div class="inner">
            <h3>Data User</h3>
            <p>Kumpulan data user</p>
          </div>
          <div class="icon">
            <i class="fa fa-users"></i>
          </div>
          
            <a href="<?=base_url(akses().'/users');?>" class="small-box-footer" title="Lihat Data User" data-toggle="tooltip"><i class="fa fa-eye"></i></a>
         
        </div>
      </div>
	  
	  
	  <div class="col-lg-6">
        <div style="background-color:#00a65a;color:#fff;" class="small-box">
          <div class="inner">
            <h3>Tambah User</h3>
            <p>Menambah data user</p>
          </div>
          <div class="icon">
            <i class="fa fa-plus"></i>
          </div>
          
            <a href="<?=base_url(akses().'/users/add');?>" class="small-box-footer" title="Tambah Data User" data-toggle="tooltip"><i class="fa fa-plus"></i></a>
         
        </div>
      </div>
	  