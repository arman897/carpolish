<!-- Main Sidebar Container -->



<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>



<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->

    <a href="<?= base_url('admin/dashboard') ?>" class="brand-link">
        <img src="<?= base_url('public/assets/web/img/aone-car-polish-logo.png') ?>" alt="Logo" height="50" width="180">
    </a>


    <!-- Sidebar -->

    <div class="sidebar">

        <!-- Sidebar user panel (optional) -->

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <p class="d-block pt-3 mb-0">Welcome <?= session('admin_auth')['username'] ?> !</p>
                <small><?= session('admin_auth')['email'] ?></small>

            </div>

        </div>

        <!-- SidebarSearch Form -->

        <div class="form-inline">

            <div class="input-group" data-widget="sidebar-search">

                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">

                <div class="input-group-append">

                    <button class="btn btn-sidebar">

                        <i class="fas fa-search fa-fw"></i>

                    </button>

                </div>

            </div>

        </div>



        <!-- Sidebar Menu -->

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                    <a href=<?= base_url("/admin/dashboard") ?> class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>



                <!--  -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-images"></i>
                        <p>
                            Slider Image
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview pl-3">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/sliders') ?>" class="nav-link">
                                <i class="fas fa-list nav-icon"></i>
                                <p>List Slider Image</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview pl-3">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/sliders/create') ?>" class="nav-link">
                                <i class="fas fa-plus-square nav-icon"></i>
                                <p>Add Slider Image</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--  -->



                <!-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Products
                            <i class="fas fa-angle-left right"></i>
                        </p>

                    </a>

                    <ul class="nav nav-treeview pl-3">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/products') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List Products</p>
                            </a>
                        </li>
                    </ul>



                    <ul class="nav nav-treeview pl-3">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/products/create') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Products</p>
                            </a>
                        </li>
                    </ul>
                </li> -->


                <!-- Brands -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-car"></i>
                        <p>
                            Brands
                            <i class="fas fa-angle-left right"></i>
                        </p>

                    </a>

                    <ul class="nav nav-treeview pl-3">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/brands') ?>" class="nav-link">
                                <i class="fas fa-list nav-icon"></i>
                                <p>List Brands</p>
                            </a>
                        </li>
                    </ul>



                    <ul class="nav nav-treeview pl-3">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/brands/create') ?>" class="nav-link">
                                <i class="fas fa-plus-square nav-icon"></i>
                                <p>Add Brands</p>
                            </a>
                        </li>
                    </ul>
                </li>




                <!--  -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Categories
                            <i class="fas fa-angle-left right"></i>
                        </p>

                    </a>

                    <ul class="nav nav-treeview pl-3">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/categories') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List Categories</p>
                            </a>
                        </li>
                    </ul>



                    <ul class="nav nav-treeview pl-3">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/categories/create') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Categories</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--  -->







                <!-- Testimnoal -->
                <!--  -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Testimonials
                            <i class="fas fa-angle-left right"></i>
                        </p>

                    </a>

                    <ul class="nav nav-treeview pl-3">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/testimonials') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List Testimonials</p>
                            </a>
                        </li>
                    </ul>



                    <ul class="nav nav-treeview pl-3">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/testimonials/create') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Testimonials</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--  -->


                <li class="nav-item menu-open">
                    <a href=<?= base_url("/admin/messages") ?> class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Message
                        </p>
                    </a>
                </li>

















                <li class="nav-item menu-open">

                    <a href=<?= base_url("admin/logout") ?> class="nav-link">

                        <i class="nav-icon fas fa-tachometer-alt"></i>

                        <p>

                            Log Out

                        </p>

                    </a>

                </li>



            </ul>

        </nav>

        <!-- /.sidebar-menu -->

    </div>

    <!-- /.sidebar -->

</aside>