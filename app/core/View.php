<?php
namespace App\Core;

class View {

    public static function render($template, $layout, $data = []) {
        // инициализируем шабрлонизатор twing
        $loader = new \Twig\Loader\FilesystemLoader("app/views");
        $twig = new \Twig\Environment($loader);

         // создаем путь к файлу html шаблона 
         if ($layout == 'admin') {
            $template_path = 'admin/' . $template . '.php';
         } else {
            $template_path = 'public/' . $template . '.php';
         }

        include "app/views/layouts/" . $layout . '_layout.php';
    }
    
}