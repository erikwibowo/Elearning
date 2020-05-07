<div class="main-sidebar sidebar-style-2">
   <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
         <a href="<?= site_url() ?>"><?= get_webinfo()->nama_website ?></a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
         <a href="<?= site_url() ?>"><?= initial(get_webinfo()->nama_website) ?></a>
      </div>
      <ul class="sidebar-menu">

         <li class="<?= empty($this->uri->segment(2)) ? 'active':'' ?>"><a class="nav-link" href="<?= site_url('admin') ?>"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>

         <li class="menu-header">MASTER DATA</li>
         <li class="<?= $this->uri->segment(2) == 'admin' ? 'active':'' ?>">
            <a class="nav-link" href="<?= site_url('admin/admin') ?>"><i class="far fa-user"></i> <span>Admin</span></a>
         </li>
         <li class="<?= $this->uri->segment(2) == 'guru' ? 'active':'' ?>">
            <a class="nav-link" href="<?= site_url('admin/guru') ?>"><i class="fas fa-users"></i> <span>Guru</span></a>
         </li>
         <li class="<?= $this->uri->segment(2) == 'siswa' ? 'active':'' ?>">
            <a class="nav-link" href="<?= site_url('admin/siswa') ?>"><i class="fas fa-user-graduate"></i> <span>Siswa</span></a>
         </li>
         <li class="<?= $this->uri->segment(2) == 'kelas' ? 'active':'' ?>">
            <a class="nav-link" href="<?= site_url('admin/kelas') ?>"><i class="fas fa-school"></i> <span>Kelas</span></a>
         </li>
         <li class="<?= $this->uri->segment(2) == 'materi' ? 'active':'' ?>">
            <a class="nav-link" href="<?= site_url('admin/materi') ?>"><i class="fas fa-book"></i> <span>Materi</span></a>
         </li>

         <li class="menu-header">HALAMAN AWAL</li>
         <li class="<?= $this->uri->segment(2) == 'menu' ? 'active':'' ?>">
            <a class="nav-link" href="<?= site_url('admin/menu') ?>"><i class="fas fa-bars"></i> <span>Menu</span></a>
         </li>
         <li class="<?= $this->uri->segment(2) == 'slider' ? 'active':'' ?>">
            <a class="nav-link" href="<?= site_url('admin/slider') ?>"><i class="far fa-image"></i> <span>Slider</span></a>
         </li>
         <li class="dropdown <?= $this->uri->segment(2) == 'blog' ? 'active':'' ?>">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fab fa-blogger-b"></i> <span>Blog</span></a>
            <ul class="dropdown-menu" style="<?= $this->uri->segment(2) == 'blog' ? '':'display: none' ?>">
               <li class="<?= ($this->uri->segment(2) == 'blog' && $this->uri->segment(3) == 'tambah') ? 'active':'' ?>"><a class="nav-link" href="<?= site_url('admin/blog/tambah') ?>">Tulis Blog</a></li>
               <li class="<?= ($this->uri->segment(2) == 'blog' && $this->uri->segment(3) == 'data') ? 'active':'' ?>"><a class="nav-link" href="<?= site_url('admin/blog/data') ?>">Data Blog</a></li>
            </ul>
         </li>
         <li class="<?= $this->uri->segment(2) == 'halaman' ? 'active':'' ?>">
            <a class="nav-link" href="<?= site_url('admin/halaman') ?>"><i class="far fa-file"></i> <span>Halaman</span></a>
         </li>
         <li class="dropdown <?= $this->uri->segment(2) == 'galeri' ? 'active':'' ?>">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-image"></i> <span>Galeri</span></a>
            <ul class="dropdown-menu" style="<?= $this->uri->segment(2) == 'galeri' ? '':'display: none' ?>">
               <li class="<?= ($this->uri->segment(2) == 'galeri' && $this->uri->segment(3) == 'album') ? 'active':'' ?>"><a class="nav-link" href="<?= site_url('admin/galeri/album') ?>">Album</a></li>
               <li class="<?= ($this->uri->segment(2) == 'galeri' && $this->uri->segment(3) == '') ? 'active':'' ?>"><a class="nav-link" href="<?= site_url('admin/galeri') ?>">Galeri</a></li>
            </ul>
         </li>

         <li class="menu-header">Pengaturan</li>
         <li class="<?= $this->uri->segment(2) == 'info' ? 'active':'' ?>">
            <a class="nav-link" href="<?= site_url('admin/info') ?>"><i class="fas fa-info"></i> <span>Info Website</span></a>
         </li>
         <li class="<?= $this->uri->segment(2) == 'log' ? 'active':'' ?>">
            <a class="nav-link" href="<?= site_url('admin/log') ?>"><i class="fas fa-clock"></i> <span>Log</span></a>
         </li>
         <li class="<?= $this->uri->segment(2) == 'konfigurasi-email' ? 'active':'' ?>">
            <a class="nav-link" href="<?= site_url('admin/konfigurasi-email') ?>"><i class="fas fa-envelope"></i> <span>Konfigurasi Email</span></a>
         </li>
         <!-- <li class="dropdown ">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-ellipsis-h"></i> <span>Utilities</span></a>
            <ul class="dropdown-menu">
               <li><a href="http://localhost/elearning/dist/utilities_contact">Contact</a></li>
               <li class=""><a class="nav-link" href="http://localhost/elearning/dist/utilities_invoice">Invoice</a></li>
               <li><a href="http://localhost/elearning/dist/utilities_subscribe">Subscribe</a></li>
            </ul>
         </li> -->
      </ul>
      <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
         <a target="_blank" href="<?= site_url() ?>" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fas fa-rocket"></i> Ke Halaman Depan
         </a>
      </div>
   </aside>
</div>