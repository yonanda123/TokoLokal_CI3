<div class="container-fluid">
    <!-- Content Row -->
    <div class="row">
       
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <a href="<?php echo site_url('page/data-produk') ?>">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Data Produk</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $this->db->count_all('tb_produk'); ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-luggage-cart mr-4 font-30"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <a href="<?php echo site_url('page/data-customer') ?>">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Data Customer</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $this->db->count_all('tb_users'); ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users mr-4 font-30"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Earnings (Monthly) Card Example -->

        <!-- Pending Requests Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <a href="<?php echo site_url('page/data-kategori') ?>">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Data Kategori</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $this->db->count_all('tb_kategori'); ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-list mr-4 font-30"></i>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </a>
    </div>

    <!-- Content Row -->
</div>