<?php

namespace App\Helpers;

class Message
{

    public static function init()
    {
        session_start();
    }

    public static function add($value, $key) 
    {
        $_SESSION['mess'][$key] = $value;
    }

    public static function display()
    {
        if (empty($_SESSION['mess'])) return;
        //получаем название ключа
        $key = key($_SESSION['mess']);
        $message = self::getMessage($key);
        // dd($message);
        unset($_SESSION['mess']);
        if ($key == 'ok') return "<div class='alert alert-success mt-3'>$message</div>";
        return "<div class='alert alert-danger mt-3'>$message</div>"; 
       
    }

    private static function getMessage($key)
    {
        $messages = include 'messages.php';
        return $messages[$key][$_SESSION['mess'][$key]];
    }
}

// <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//     <span aria-hidden="true">&times;</span>
//   </button>