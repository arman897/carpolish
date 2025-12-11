<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Default Home routes
$routes->get('/', 'Home::index');
$routes->get('/contact_us', 'Home::contact');
$routes->post('/contact_us', 'Home::contact');
$routes->get('/services', 'Home::services');
$routes->get('/test', 'Home::test');
$routes->get('/blogs', 'Home::blogs');
$routes->get('/before_after', 'Home::before_after');

// Admin login/dashboard routes



$routes->group('admin/', function ($routes) {
    $routes->match(['get', 'post'], '/', 'Admin\LoginController::log_in');
    $routes->match(['get', 'post'], 'dashboard', 'Admin\DashboardController::dashboard');


    // -------------------------------------------Blogs-------------------------------------------//

    $routes->group('blogs', function ($routes) {
        $routes->get('/', 'AdminController\BlogController::index');
    });

    // -------------------------------------------End Blogs-------------------------------------------//



    // -------------------------------------------Slider-------------------------------------------//
    // -------------------------------------------Slider-------------------------------------------//
    $routes->get('sliders', 'Admin\SliderController::index');
    $routes->match(['get', 'post'], 'sliders/create', 'Admin\SliderController::create');
    $routes->match(['get', 'post'], 'sliders/edit/(:num)', 'Admin\SliderController::edit/$1');
    $routes->post('sliders/delete/(:num)', 'Admin\SliderController::delete/$1');





    // -------------------------------------------End Slider-------------------------------------------//



    // -------------------------------------------Brands-------------------------------------------//
    $routes->group('brands', function ($routes) {
        $routes->get('/', 'Admin\BrandsController::index');
        $routes->match(['get', 'post'], 'create/', 'Admin\BrandsController::create');
        $routes->match(['get', 'post'], 'edit/(:num)', 'Admin\BrandsController::edit/$1');
        // $routes->match(['get', 'post'], 'update/(:num)', 'Admin\BrandsController::update/$1');
        // $routes->get('admin/brands/edit/(:num)', 'Admin\BrandsController::edit/$1');
        // $routes->post('admin/brands/update/(:num)', 'Admin\BrandsController::update/$1');
        $routes->get('delete/(:num)', 'Admin\BrandsController::delete/$1');
    });
    // -------------------------------------------End Brands-------------------------------------------//



    $routes->get('logout', 'Admin\DashboardController::logout');
});


// Contact messages
$routes->get('admin/Message', 'Admin\ContactController::message');
$routes->get('admin/message/delete/(:num)', 'Admin\ContactController::delete/$1');

// -----------------------------
// Admin Blogs Routes
// -----------------------------








// $routes->group('admin/blogs', ['namespace' => 'App\Controllers\Admin'], function ($routes) {

//     // List all blogs
//     $routes->match(['get', 'post'], '/', 'BlogsController::blogs', ['as' => 'admin.blogs.index']);

//     // Create blog
//     $routes->get('create', 'BlogsController::create', ['as' => 'admin.blogs.create']);
//     $routes->post('create', 'BlogsController::create');

//     // Edit blog
//     $routes->get('edit/(:num)', 'BlogsController::edit/$1', ['as' => 'admin.blogs.edit']);
//     $routes->post('edit/(:num)', 'BlogsController::edit/$1');

//     // Delete blog
//     $routes->get('delete/(:num)', 'BlogsController::delete/$1', ['as' => 'admin.blogs.delete']);
// });












// -----------------------------
// Public Blog Routes (using slug)
// -----------------------------

// Single blog view using slug, pointing to Admin\BlogsController::view
$routes->get('blogs/(:segment)', 'Admin\BlogsController::view/$1');

// Optional: If you want legacy numeric URLs (ID based), keep this
//$routes->get('single_blog/(:num)', 'Home::single_blog/$1');

// Frontend blogs listing (if needed)
$routes->get('blogs/', 'Home::blogs');
$routes->get('blogs/show/(:num)', 'Home::show/$1');





// -----------------------------
// Admin Blogs Routes
// -----------------------------
$routes->group('api/', ['namespace' => 'App\Controllers\Api'], function ($routes) {
    $routes->post('login', 'LoginController::log_in');
});
