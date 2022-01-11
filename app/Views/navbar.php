<?php
$session = session();
?>
<style>
    * {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    a {
        color: #fff;
        padding: 8px 8px;

    }


    li a:hover {
        color: #BCDCDD;

    }


    .navbar {
        /* border-bottom: 1px solid #009A87; */
        border-bottom: 1.1px solid #009A87;

        height: 80px;
        /* 64 + 16px */
        position: sticky;
        -webkit-position: sticky;
        top: -16px;
        /* make sure header overlaps main*/
        z-index: 1;
        color: white;
        text-align: center;
        /* fix weird flickering issue in chrome: https://stackoverflow.com/a/22224884/286685 */
        /* -webkit-backface-visibility: hidden; */
    }

    .navbar::before,
    .navbar::after {
        content: '';
        display: block;
        height: 16px;
        /* make pseudo elements sticky as well */
        position: sticky;
        -webkit-position: sticky;
    }

    /* SHADOW */
    .navbar::before {
        top: 48px;
        /* shadow is at bottom of element, so at 48 + 16 = 64px */
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
        border-bottom: 4px solid blue;

    }

    /* COVER */
    .navbar::after {
        /* linear gradient from background color to transparent acts as
     a transition effect so the shadow appears gradually */
        background: linear-gradient(green 10%, rgba(255, 255, 255, 0.8) 50%, rgba(255, 255, 255, 0.4) 70%, );
        top: 20px;
        /* cover should fall over shadow */
        z-index: 2;
        border-bottom: 4px solid blue;
    }

    .navbar a {
        color: #00665E;
        font-size: 1.1rem;
        font-weight: lighter;
    }
</style>
<div class="navbar fixed-top navbar-expand-md shadow-sm p-3   " style="background-color: #fff; ">
    <div class="container-fluid">
        <a class="navbar-brand  px-4" href="<?= site_url('home/index') ?>"> Mitra Kain</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="" id="navbarsExampleDefault">
            <!-- if 1 -->
            <ul class="navbar-nav mr-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link  px-4 " href="<?= site_url('home/index') ?>">Home <span class="sr-only"></span></a>
                </li>
                <?php if (session()->get('role') == 1) : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Barang
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown01">
                            <li><a class="dropdown-item" href="<?= site_url('barang/index') ?>">List Barang</a></li>
                            <li><a class="dropdown-item" href="<?= site_url('barang/create') ?>">Tambah Barang</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('transaksi/index') ?>">Transaksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('user/index') ?>">User</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link px-4" href="<?= site_url('etalase/index') ?>">Katalog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4" href="<?= site_url('home/about') ?>">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4" href="<?= site_url('home/location') ?>">Lokasi</a>
                    </li>
                <?php endif ?>
            </ul>
            <!-- end if 1 -->
            </ul>
        </div>
        <div class="d-flex">
            <ul class="navbar-nav ms-auto">
                <?php if ($session->get('isLoggedIn')) : ?>
                    <li>
                        <a class="nav-link  px-4" href="<?= site_url('home/index') ?>"><?php echo session()->get('username'); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  px-4" onclick="myFunction()" href="<?= site_url('auth/logout') ?>">Logout</a>
                        <script>
                            function myFunction() {
                                alert("Terimakasih <?php echo session()->get('username'); ?> telah berbelanja disini!");
                            }
                        </script>
                    </li>

                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link  px-4" href="<?= site_url('auth/login') ?>">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  px-4" href="<?= site_url('auth/register') ?>">Register</a>
                    </li>
                <?php endif ?>
            </ul>
        </div>

    </div>
</div>
<!-- gara2 role -->
<!-- <div id="navbar" class="navbar-sec navbar-expand-lg navbar-light" style="background-color: #f7f5ca;">

    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav w-100 justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('etalase/index') ?>">Katalog</a>
            </li>
            <li class="nav-item m-2"><a class="nav-link" href="about.html">Pria</a></li>
            <li class="nav-item m-2"><a class="nav-link" href="services.html">Wanita</a></li>
            <li class="nav-item m-2"><a class="nav-link" href="services.html">Anak</a></li>
            <li class="nav-item m-2"><a class="nav-link" href="contact.html">Pre-Order</a></li> 

</ul>
</div>
</div> -->