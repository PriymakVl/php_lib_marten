<?php
// отображение всех типов ошибок
ini_set('display_errors', 1);

session_start();

// подключаем файл автозагрузки Composer
require_once 'vendor/autoload.php';

require_once 'routes.php';
require_once 'app/core/DB.php';

use Pecee\SimpleRouter\SimpleRouter;
use App\Core\DB;

// связываемся с базой
DB::getConnection(); 

// namespace
SimpleRouter::setDefaultNamespace('App\Controllers');

// запускаем маршрутизатор
SimpleRouter::start();


