<?php

try {
    //code...
    
$request = $_SERVER['REQUEST_URI'];
$viewDir = __DIR__ ."/../views/";
$adminViewDir = __DIR__ ."/../views/admin/";
$baseDir = __DIR__ ."/../";

switch ($request) {
    case '':
        
    case '/':
        require "{$baseDir}landing.php";
        break;

    case '/admin/dashboard':
        require "{$adminViewDir}dashboard.php";
        break;

    case '/admin/patients':
        require "{$adminViewDir}patients.php";
        break;

    case '/admin/appointments':
        
        require "{$adminViewDir}appointments.php";
        break;

    case '/admin/doctors':
        require "{$adminViewDir}doctors.php";
        break;

    case '/admin/queue':
        require "{$adminViewDir}queue.php";
        break;

    case '/admin/management/users':
        require "{$adminViewDir}management/users.php";
        break;

    case '/contact':        
        require  "{$viewDir}contact.php";
        break;

    case '/login':        
        require  "{$viewDir}auth/login.php";
        break;

    case '/register':        
        require  "{$viewDir}auth/register.php";
        break;

    default:
        // echo __DIR__ . $viewDir . 'admin/dashboard.php';
        http_response_code(404);
        require __DIR__ . $viewDir . '404.php';
}

} catch (\Throwable $th) {
    echo $th;
}