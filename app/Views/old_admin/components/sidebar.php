<!-- Main Sidebar Container -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('admin/dashboard') ?>" class="brand-link">
        <img src="<?= base_url('public/assets/web/img/aone-car-polish-logo.png') ?>" alt="Logo" height="50" width="180">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar User Panel (Optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <p class="d-block">Welcome!</p>
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
                <!-- Dashboard -->
                <li class="nav-item menu-open">
                    <a href="<?= base_url('/admin/dashboard') ?>" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Products Dropdown -->
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
                            <a href="<?= base_url('admin/product') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Product List</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview pl-3">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/product/create') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Product</p>
                            </a>
                        </li>
                    </ul>
                </li> -->

                <!-- Message -->
                <li class="nav-item">
                    <a href="<?= base_url('admin/Message') ?>" class="nav-link">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>Message</p>
                    </a>
                </li>

                <!-- Blogs Dropdown -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-blog"></i>
                        <p>
                            Blogs
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview pl-3">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/blogs') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Blog List</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview pl-3">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/blogs/create') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Blog</p>
                            </a>
                        </li>
                    </ul>
                </li>




                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        // Select all dropdown toggles
                        const dropdownToggles = document.querySelectorAll(".nav-item > a.nav-link");

                        dropdownToggles.forEach(toggle => {
                            toggle.addEventListener("click", function(e) {
                                const parentLi = this.parentElement;

                                // Prevent navigation if there's a submenu
                                if (parentLi.querySelector(".nav-treeview")) {
                                    e.preventDefault();
                                }

                                // Toggle 'menu-open' class for dropdown effect
                                parentLi.classList.toggle("menu-open");

                                // Toggle visibility of submenus
                                const submenus = parentLi.querySelectorAll(".nav-treeview");
                                submenus.forEach(submenu => {
                                    submenu.classList.toggle("show");
                                });
                            });
                        });
                    });
                </script>


                <!-- Logout -->
                <li class="nav-item">
                    <a href="<?= base_url('/admin/logout') ?>" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Log Out</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>