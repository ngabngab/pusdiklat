 <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/lte/dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $username; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
	  -->
      
      <ul class="sidebar-menu">
        <li class="header">NAVIGASI</li>
        <li id="<?php echo base_url(); ?>pages/index"><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard </a></li>
        
        <?php 
        if($roleID == 2)
        {
        	?>
        	<li class="treeview">
          <a href="#">
            <i class="fa fa-calendar"></i>
            <span> Perencanaan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
			<ul class="treeview-menu">
				<li>
				<a href="#"><i class="fa fa-circle-o"></i> <span>Kurikulum</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span></a>
				<ul class="treeview-menu">
						<li><a href="#" id="<?php echo base_url(); ?>mata_ajar" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> Mata Ajar</a></li>
					
					
						<li><a href="#" id="<?php echo base_url(); ?>kurikulum_type" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> Jenis Kurikulum</a></li>
					
						<li><a href="#" id="<?php echo base_url(); ?>kurikulum" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> Kurikulum</a></li>
						
						<!--<li><a href="#" id="<?php echo base_url(); ?>kurikulum_jenis" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> Jenis / Metode Kurikulum</a></li>->
						
						<li><a href="#" id="<?php echo base_url(); ?>kurikulum_sesi" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> Sesi Kurikulum</a></li>
						-->
						<li><a href="#" id="<?php echo base_url(); ?>kurikulum_detail" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> Kurikulum Detail</a></li>
						
						<!--<li><a href="#" id="<?php echo base_url(); ?>kurikulumrinci" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> Kurikulum Rinci</a></li>-->
						
						<li><a href="#" id="<?php echo base_url(); ?>diklat" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> Diklat</a></li>
						
						<!-- <li><a href="#" id="<?php echo base_url(); ?>diklatkurikulum" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> Diklat -> Kurikulum</a></li> -->
					</ul>
				</li>
				
				<li>
				<a href="#"><i class="fa fa-circle-o"></i> <span> Kalender Diklat</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span></a>
					<ul class="treeview-menu">
						<li><a href="#" id="<?php echo base_url(); ?>inputdiklat" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> Input Diklat Tahunan</a></li>
						<li><a href="#" id="<?php echo base_url(); ?>kaldik" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> Rencana Diklat</a></li>
						<!-- <li><a href="#" id="<?php echo base_url(); ?>datakaldik" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> Data Kalender Diklat</a></li> -->
						<li><a href="#" id="<?php echo base_url(); ?>kaldikrealisasi" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> Realisasi Diklat</a></li>
					</ul>
				</li>
				
				<!-- <li>
				<a href="#"><i class="fa fa-circle-o"></i> <span> Jadwal Diklat</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span></a>
				<ul class="treeview-menu">
						<li><a href="#" id="<?php echo base_url(); ?>jadwal" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> Jadwal Diklat</a></li>
					</ul>
				</li> -->
				
				
				
				
				
				<li>
				<a href="#"><i class="fa fa-circle-o"></i> <span>Penugasan Instruktur / WI</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span></a>
				<ul class="treeview-menu">
						<!-- <li><a href="#" id="<?php echo base_url(); ?>cuti" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> Cuti Mengajar</a></li> -->
						
						<li><a href="#" id="<?php echo base_url(); ?>jadwal" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> Rencana Penugasan</a></li>
						<li><a href="#" id="<?php echo base_url(); ?>realisasijadwal" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> Realisasi Penugasan</a></li>				
						<li><a href="#" id="<?php echo base_url(); ?>datajadwal" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> Matriks Penugasan</a></li>
					</ul>
				</li>
				
				
				<!-- <li>
				<a href="#"><i class="fa fa-circle-o"></i> <span>Cetak</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span></a>
				<ul class="treeview-menu">
						<li><a href="#"><i class="fa fa-circle-o"></i> Jadwal</a></li>
					
					
						<li><a href="#"><i class="fa fa-circle-o"></i> Kalender Diklat</a></li>
					</ul>
				</li> -->
			</ul>
        </li>
        	<?php
        }
        else if ($roleID == 3)
        {
        	?>
        	<li class="treeview">
	          <a href="#">
	            <i class="fa fa-archive"></i>
	            <span> Penyelenggaraan Diklat</span>
	            <span class="pull-right-container">
	              <i class="fa fa-angle-left pull-right"></i>
	            </span>
	          </a>
				<ul class="treeview-menu">
					<li>
					<a href="#"><a href="#" id="<?php echo base_url(); ?>pesertadiklat" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> <span> Peserta Diklat</span></a>
					</a></li>
					
					<!--  <li>
					<a href="#"><i class="fa fa-circle-o"></i> <span> Diklat Peserta</span>
					</a></li>
					
					<li>
					<a href="#"><i class="fa fa-circle-o"></i> <span> Diklat Teknis Substansi</span>
					</a>
					</li>-->
					
				</ul>
	        </li>
        	<?php
        }
        else if ($roleID == 5)
        {
        	?>
                	<li class="treeview">
        	          <a href="#">
        	            <i class="fa fa-archive"></i>
        	            <span> Penyelenggaraan Diklat</span>
        	            <span class="pull-right-container">
        	              <i class="fa fa-angle-left pull-right"></i>
        	            </span>
        	          </a>
        				<ul class="treeview-menu">
        					<li>
        					<a href="#"><a href="#" id="<?php echo base_url(); ?>pesertadiklat" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> <span> Peserta Diklat</span></a>
        					</a></li>
        					
        					<!--  <li>
        					<a href="#"><i class="fa fa-circle-o"></i> <span> Diklat Peserta</span>
        					</a></li>
        					
        					<li>
        					<a href="#"><i class="fa fa-circle-o"></i> <span> Diklat Teknis Substansi</span>
        					</a>
        					</li>-->
        					
        				</ul>
        	        </li>
        <?php
        }
        else if ($roleID == 4)
        {
        	?>
        	<li class="treeview">
	          <a href="#">
	            <i class="fa fa-book"></i>
	            <span> Evaluasi Diklat</span>
	            <span class="pull-right-container">
	              <i class="fa fa-angle-left pull-right"></i>
	            </span>
	          </a>
				<ul class="treeview-menu">
					<li>
					<a href="#"><i class="fa fa-circle-o"></i> <span> Penyelenggaraan</span>
					</a></li>
					
					<li>
					<a href="#"><i class="fa fa-circle-o"></i> <span> Instruktur</span>
					</a></li>
					
					<li>
					<a href="#"><i class="fa fa-circle-o"></i> <span> Materi</span>
					</a>
					</li>
					
					<li>
					<a href="#"><i class="fa fa-circle-o"></i> <span> Penilaian Peserta</span>
					</a>
					</li>
				</ul>
	        </li>
			
			<!--   <li class="treeview">
	          <a href="#">
	            <i class="fa fa-files-o"></i>
	            <span> Konversi Kegiatan WI</span>
	            <span class="pull-right-container">
	              <i class="fa fa-angle-left pull-right"></i>
	            </span>
	          </a>
				<ul class="treeview-menu">
					<li>
					<a href="#"><i class="fa fa-circle-o"></i> <span> Rencana Penugasan</span>
					</a></li>
					
					<li>
					<a href="#"><i class="fa fa-circle-o"></i> <span> Realisasi Penugasan</span>
					</a></li>
					
					<li>
					<a href="#"><i class="fa fa-circle-o"></i> <span> Kartu Kendali</span>
					</a>
					</li>
					
					<li>
					<a href="#"><i class="fa fa-circle-o"></i> <span> Non Tatap Muka</span>
					</a>
					</li>
				</ul>
	        </li>-->
        	<?php
        }
        else if ($roleID == 1)
        {
        	?>
        	<li class="treeview">
	          <a href="#">
	            <i class="fa fa-calendar"></i>
	            <span> Perencanaan</span>
	            <span class="pull-right-container">
	              <i class="fa fa-angle-left pull-right"></i>
	            </span>
	          </a>
				<ul class="treeview-menu">
					<li>
					<a href="#"><i class="fa fa-circle-o"></i> <span>Kurikulum</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span></a>
					<ul class="treeview-menu">
							<li><a href="#" id="<?php echo base_url(); ?>mata_ajar" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> Mata Ajar</a></li>
						
						
							<li><a href="#" id="<?php echo base_url(); ?>kurikulum_type" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> Jenis Kurikulum</a></li>
						
							<li><a href="#" id="<?php echo base_url(); ?>kurikulum" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> Kurikulum</a></li>
							
							<!--<li><a href="#" id="<?php echo base_url(); ?>kurikulum_jenis" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> Jenis / Metode Kurikulum</a></li>->
							
							<li><a href="#" id="<?php echo base_url(); ?>kurikulum_sesi" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> Sesi Kurikulum</a></li>
							-->
							<li><a href="#" id="<?php echo base_url(); ?>kurikulum_detail" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> Kurikulum Detail</a></li>
							
							<!--<li><a href="#" id="<?php echo base_url(); ?>kurikulumrinci" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> Kurikulum Rinci</a></li>-->
							
							<li><a href="#" id="<?php echo base_url(); ?>diklat" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> Diklat</a></li>
							
							<!-- <li><a href="#" id="<?php echo base_url(); ?>diklatkurikulum" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> Diklat -> Kurikulum</a></li> -->
						</ul>
					</li>
					
					<li>
					<a href="#"><i class="fa fa-circle-o"></i> <span> Kalender Diklat</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span></a>
						<ul class="treeview-menu">
							<li><a href="#" id="<?php echo base_url(); ?>inputdiklat" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> Input Diklat Tahunan</a></li>
						
							<li><a href="#" id="<?php echo base_url(); ?>kaldik" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> Rencana Diklat</a></li>
						
						
							<!-- <li><a href="#" id="<?php echo base_url(); ?>datakaldik" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> Data Kalender Diklat</a></li> -->
						
							<li><a href="#" id="<?php echo base_url(); ?>kaldikrealisasi" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> Realisasi Diklat</a></li>
						</ul>
					</li>
					
					<!-- <li>
					<a href="#"><i class="fa fa-circle-o"></i> <span> Jadwal Diklat</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span></a>
					<ul class="treeview-menu">
							<li><a href="#" id="<?php echo base_url(); ?>jadwal" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> Jadwal Diklat</a></li>
						</ul>
					</li> -->
					
					
					
					
					
					<li>
					<a href="#"><i class="fa fa-circle-o"></i> <span>Penugasan Instruktur / WI</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span></a>
					<ul class="treeview-menu">
							<!-- <li><a href="#" id="<?php echo base_url(); ?>cuti" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> Cuti Mengajar</a></li> -->
							
							<li><a href="#" id="<?php echo base_url(); ?>jadwal" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> Rencana Penugasan</a></li>
						
							
							
						
							<li><a href="#" id="<?php echo base_url(); ?>realisasijadwal" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> Realisasi Penugasan</a></li>
							
							<li><a href="#" id="<?php echo base_url(); ?>datajadwal" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> Matriks Penugasan</a></li>
						</ul>
					</li>
					
					
					<!-- <li>
					<a href="#"><i class="fa fa-circle-o"></i> <span>Cetak</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span></a>
					<ul class="treeview-menu">
							<li><a href="#"><i class="fa fa-circle-o"></i> Jadwal</a></li>
						
						
							<li><a href="#"><i class="fa fa-circle-o"></i> Kalender Diklat</a></li>
						</ul>
					</li> -->
				</ul>
	        </li>
        	
        	<li class="treeview">
	          <a href="#">
	            <i class="fa fa-archive"></i>
	            <span> Penyelenggaraan Diklat</span>
	            <span class="pull-right-container">
	              <i class="fa fa-angle-left pull-right"></i>
	            </span>
	          </a>
				<ul class="treeview-menu">
					<li>
					<a href="#"><a href="#" id="<?php echo base_url(); ?>pesertadiklat" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> <span> Peserta Diklat</span></a>
					</a></li>
					
					<!--   <li>
					<a href="#"><i class="fa fa-circle-o"></i> <span> Diklat Peserta</span>
					</a></li>
					
					<li>
					<a href="#"><i class="fa fa-circle-o"></i> <span> Diklat Teknis Substansi</span>
					</a>
					</li>-->
					
				</ul>
	        </li>
	        
	        <li class="treeview">
	          <a href="#">
	            <i class="fa fa-book"></i>
	            <span> Evaluasi Diklat</span>
	            <span class="pull-right-container">
	              <i class="fa fa-angle-left pull-right"></i>
	            </span>
	          </a>
				<ul class="treeview-menu">
					<li>
					<a href="#"><i class="fa fa-circle-o"></i> <span> Penyelenggaraan</span>
					</a></li>
					
					<li>
					<a href="#"><i class="fa fa-circle-o"></i> <span> Instruktur</span>
					</a></li>
					
					<li>
					<a href="#"><i class="fa fa-circle-o"></i> <span> Materi</span>
					</a>
					</li>
					
					<li>
					<a href="#"><i class="fa fa-circle-o"></i> <span> Penilaian Peserta</span>
					</a>
					</li>
				</ul>
	        </li>
			
			
			<li class="treeview">
	          <a href="#">
	            <i class="fa fa-files-o"></i>
	            <span> Konversi Kegiatan WI</span>
	            <span class="pull-right-container">
	              <i class="fa fa-angle-left pull-right"></i>
	            </span>
	          </a>
				<ul class="treeview-menu">
					<li>
					<a href="#"><a href="#" id="<?php echo base_url(); ?>konversikegiatan" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> <span> Konversi Kegiatan</span></a></li>
					
					<li>
					<a href="#"><i class="fa fa-circle-o"></i> <span> Realisasi Penugasan</span>
					</a></li>
					
					<li>
					<a href="#"><i class="fa fa-circle-o"></i> <span> Kartu Kendali</span>
					</a>
					</li>
					
					<li>
					<a href="#"><i class="fa fa-circle-o"></i> <span> Non Tatap Muka</span>
					</a>
					</li>
				</ul>
	        </li>
        	
        	<li class="treeview">
	          <a href="#">
	            <i class="fa fa-briefcase"></i>
	            <span> Master Data</span>
	            <span class="pull-right-container">
	              <i class="fa fa-angle-left pull-right"></i>
	            </span>
	          </a>
				<ul class="treeview-menu">
					<li>
					<a href="#"><i class="fa fa-circle-o"></i> <span> Pertemuan Kaldik</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span></a>
					<ul class="treeview-menu">
							<li><a href="#"><i class="fa fa-circle-o"></i> Jenis Pertemuan</a></li>
						</ul>
					</li>
					
					<li>
					<a href="#"><i class="fa fa-circle-o"></i> <span> Kediklatan</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span></a>
					
					<ul class="treeview-menu">
							<li><a href="#"><i class="fa fa-circle-o"></i> Tipe Diklat</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Diklat</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Lokasi Diklat</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Tahun Diklat</a></li>
					</ul>
					</li>
					
					<li>
					<a href="#"><i class="fa fa-circle-o"></i> <span> Master</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span></a>
					
					<ul class="treeview-menu">
							<li><a href="#"><i class="fa fa-circle-o"></i> Instruktur</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Agama</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Kegiatan</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Sumber Biaya</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Bidang</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Jenjang Pendidikan</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Provinsi</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Kabupaten</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Golongan</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Grup Jabatan</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Jabatan</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Tipe Pangkat</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Pangkat</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Lembaga</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Instansi</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Unit Kerja</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Kelas</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Hari Libur</a></li>
							<li><a href="#" id="<?php echo base_url(); ?>pegawai" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> Pegawai</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Role</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> User</a></li>	
					</ul>
					</li>
				</ul>
			</li>
        	<?php
        }
        ?>
		
		<?php 
		
			if($isInstruktur == '1')
			{
				?>
				<li class="treeview">
	          <a href="#">
	            <i class="fa fa-files-o"></i>
	            <span> Konversi Kegiatan WI</span>
	            <span class="pull-right-container">
	              <i class="fa fa-angle-left pull-right"></i>
	            </span>
	          </a>
				<ul class="treeview-menu">
					<li>
					<a href="#"><a href="#" id="<?php echo base_url(); ?>konversikegiatan" onclick="halaman(this.id);"><i class="fa fa-circle-o"></i> <span> Konversi Kegiatan</span></a>
					</a></li>
					
					<li>
					<a href="#"><i class="fa fa-circle-o"></i> <span> Kartu Kendali</span>
					</a>
					</li>
					
					<li>
					<a href="#"><i class="fa fa-circle-o"></i> <span> Non Tatap Muka</span>
					</a>
					</li>
				</ul>
	        </li>
				<?php
				
			}
			?>
		
		
		
		
		
		
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>