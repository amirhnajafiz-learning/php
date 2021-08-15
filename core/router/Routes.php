<?php

namespace mvc\core\router;

use mvc\core\App;
use mvc\controller\UserController;
use mvc\controller\LoginController;
use mvc\controller\AdminController;

/**
 * Routes class is the class for managing the routes of our
 * website.
 * 
 */
class Routes
{
    /**
     * This method generates the routes of our website.
     * 
     */
    public static function getRoutes()
    {
        $app = App::get_instance();

        // Write your routes here
        $app->router->get('/', 'home')->name("home");
        $app->router->get('/sign_up', 'sign_up')->name("register");
        $app->router->get('/login', 'login')->name("login");

        // User routes
        $app->router->post('/login', [UserController::class, 'login']);
        $app->router->post('/sign_up', [UserController::class, 'sign_up']);
        $app->router->post('/', [UserController::class, 'logout']);
        $app->router->get('/dashboard', [UserController::class, 'index'])->name("dashboard");
        $app->router->get('/upload', [UserController::class, 'upload'])->name("upload");

        // Admin routes 
        $app->router->get('/requests', [AdminController::class, 'requests'])->name("requests");
        $app->router->get('/users', [AdminController::class, 'users'])->name("users");
    }
}

?>