 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

     <!-- Main Content -->
     <div id="content">

         <!-- Topbar -->
         <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">



             <!-- Topbar Navbar -->
             <ul class="navbar-nav ml-auto">

                 <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                 <li class="nav-item dropdown no-arrow d-sm-none">
                     <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <i class="fas fa-search fa-fw"></i>
                     </a>
                     <!-- Dropdown - Messages -->
                     <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                         <form class="form-inline mr-auto w-100 navbar-search">
                             <div class="input-group">
                                 <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                 <div class="input-group-append">
                                     <button class="btn btn-primary" type="button">
                                         <i class="fas fa-search fa-sm"></i>
                                     </button>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </li>

                 <div class="navbar">
                     <ul class="nav navbar-nav navbar-right">
                         <li>
                             <?php
                                $keranjang = '<i class="fas fa-cart-plus fa-sm fa-fw mr-2"></i>' . $this->cart->total_items() . ' items' ?>
                             <?php echo anchor('dashboard/detail_keranjang', $keranjang)  ?>
                         </li>
                     </ul>
                     <div class="topbar-divider d-none d-sm-block"></div>

                     <ul class="na navbar-nav navbar-right">
                         <?php if ($this->session->userdata('username')) { ?>
                             <li>
                                 <div>Selamat Datang <?php echo $this->session->userdata('username') ?></div>
                             </li>
                             <li class="ml-3"><?php echo anchor('auth/logout', 'Logout') ?></li>
                         <?php } else { ?>
                             <li><?php echo anchor('auth/index', 'Login'); ?></li>

                         <?php } ?>
                     </ul>
                 </div>




             </ul>

         </nav>
         <!-- End of Topbar -->