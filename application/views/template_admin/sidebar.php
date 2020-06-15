<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="<?= base_url() ?>assets/img/sepatu.jpg" alt="Logo">
                <br><br></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?= base_url('admin/dashboard') ?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/pesanan_masuk') ?>"> <i class="menu-icon fa fa-bell"></i>Pesanan Masuk </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  fa-th-large"></i>Master Barang</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="ti ti-layout-grid2"></i><a href="<?= base_url('admin/data_barang/') ?>">Data Barang</a></li>
                            <li><i class="fa fa-plus-square"></i><a href="<?= base_url('admin/data_barang/tambahStock') ?>">Tambah Stock</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-gears"></i>Setting</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-instagram"></i><a href="<?= base_url('admin/setting/igFeed') ?>">Instagram Feed</a></li>
                            <li><i class="ti ti-palette"></i><a href="<?= base_url('admin/setting/viewLogo/') ?>">Edit Logo</a></li>
                            <li><i class="ti ti-key"></i><a href="<?= base_url('admin/setting/Changepass/') ?>">Ganti Password</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->
