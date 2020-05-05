<!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="uzaNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="<?= site_url() ?>"><?= get_webinfo()->nama_singkat_website ?></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <?php foreach ($this->Mmenu->read_where(['tipe_menu <>' => 'C'])->result() as $key):
                                if ($key->tipe_menu == "P") { ?>
                                    <li><a href="<?= site_url(x($key->url_menu)) ?>"><?= $key->nama_menu ?></a>
                                        <ul class="dropdown">
                                            <?php foreach ($this->Mmenu->read_where(['parent' => $key->id_menu])->result() as $s): ?>
                                                <li><a href="<?= site_url(x($s->url_menu)) ?>"><?= $s->nama_menu ?></a></li>
                                            <?php endforeach ?>
                                        </ul>
                                    </li>
                                <?php }else{ ?>
                                    <li><a href="<?= site_url(x($key->url_menu)) ?>"><?= $key->nama_menu ?></a></li>
                                <?php } endforeach ?>
                            </ul>

                            <!-- Get A Quote -->
                            <div class="get-a-quote ml-4 mr-3">
                                <a href="<?= base_url() ?>assets/uza/#" class="btn uza-btn">Get A Quote</a>
                            </div>

                            <!-- Login / Register -->
                            <div class="login-register-btn mx-3">
                                <a href="<?= base_url() ?>assets/uza/#">Login <span>/ Register</span></a>
                            </div>

                            <!-- Search Icon -->
                            <div class="search-icon" data-toggle="modal" data-target="#searchModal">
                                <i class="icon_search"></i>
                            </div>
                        </div>
                        <!-- Nav End -->

                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->