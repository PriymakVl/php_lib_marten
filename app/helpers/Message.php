<?php

namespace App\Helpers;

class Message
{

    public static function addKey($key, $type) 
    {
        session_start();
        $_SESSION['mess']['type'] = $type;
        $_SESSION['mess']['key'] = $key;
    }

    public static function addText($text, $type)
    {
        session_start();
        $_SESSION['mess']['type'] = $type;
        $_SESSION['mess']['text'] = $text;
    }

    public static function display()
    {
        session_start();
        if (empty($_SESSION['mess'])) return;
        $message = self::getMessage();
        $type = $_SESSION['mess']['type'];
        if ($type == 'ok') echo "<div class='alert alert-success mt-3'>$message</div>";
        else echo "<div class='alert alert-danger mt-3'>$message</div>"; 
        unset($_SESSION['mess']);
    }

    private static function getMessage()
    {
        if ($_SESSION['mess']['text']) return $_SESSION['mess']['text'];
        $type = $_SESSION['mess']['type'];
        $key = $_SESSION['mess']['key'];
        $messages = include 'messages.php';
        return $messages[$type][$key];
    }
}

// <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//     <span aria-hidden="true">&times;</span>
//   </button>