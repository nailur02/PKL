<div class="box-header">
		<h3 class="box-title" style="font-size:30px;color:#666;">
		<i class="fa fa-home"></i> Dashboard Wali Kelas</h3>
		</div>
		
		<div class="alert alert-info alert-dismissable">
            <i class="fa fa-exclamation-circle"></i> Selamat datang pada halaman wali kelas aplikasi sistem pendukung keputusan pemilihan beasiswa sekolah menggunakan metode analytical hierarchy process.
		  </div>
		  
		  
		  <div class="row">
		 <div class="col-lg-6">
        <div style="background-color:#00c0ef;color:#fff;" class="small-box">
          <div class="inner">
            <h3>Data Siswa</h3>
            <p>Kumpulan data siswa</p>
          </div>
          <div class="icon">
            <i class="fa fa-users"></i>
          </div>
          
            <a href="<?=base_url(akses().'/siswa');?>" class="small-box-footer" title="Lihat Data Siswa" data-toggle="tooltip"><i class="fa fa-eye"></i></a>
         
        </div>
      </div>
	  
	  
	  <div class="col-lg-6">
        <div style="background-color:#00a65a;color:#fff;" class="small-box">
          <div class="inner">
            <h3>Data Beasiswa</h3>
            <p>Kumpulan data beasiswa</p>
          </div>
          <div class="icon">
            <i class="fa fa-money"></i>
          </div>
          
            <a href="<?=base_url(akses().'/beasiswa/beasiswa');?>" class="small-box-footer" title="Lihat Data Beasiswa" data-toggle="tooltip"><i class="fa fa-eye"></i></a>
         
        </div>
      </div>
	  
	  
	  <div class="col-lg-6">
        <div style="background-color:#f39c12;color:#fff;" class="small-box">
          <div class="inner">
            <h3>Data Peserta Beasiswa</h3>
            <p>Kumpulan data peserta beasiswa</p>
          </div>
          <div class="icon">
            <i class="fa fa-user"></i>
          </div>
          
            <a href="<?=base_url(akses().'/beasiswa/peserta');?>" class="small-box-footer" title="Lihat Data Peserta Beasiswa" data-toggle="tooltip"><i class="fa fa-eye"></i></a>
         
        </div>
      </div>
	  
	  
	  <div class="col-lg-6">
        <div style="background-color:#dd4b39;color:#fff;" class="small-box">
          <div class="inner">
            <h3>Tambah Data Peserta</h3>
            <p>Tambah data peserta beasiswa</p>
          </div>
          <div class="icon">
            <i class="fa fa-plus"></i>
          </div>
          
            <a href="<?=base_url(akses().'/beasiswa/peserta/add');?>" class="small-box-footer" title="Tambah Data Peserta beasiswa" data-toggle="tooltip"><i class="fa fa-plus"></i></a>
         
        </div>
      </div>
	  </div>