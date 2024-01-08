<?php
namespace  App\Controllers;

use App\Core\View;
use App\Models\Category;
use App\Helpers\Message;

class BaseController 
{
    protected $layout = 'main';

    public function render($template, $data = []) 
    {
        if ($this->layout != 'admin') {
            $data['cats'] = Category::getMain(true);
        }
        View::render($template, $this->layout, $data);
    }

    protected function redirect($url)
    {
        header('Location: /' . $url);
        exit;
    }

    protected function redirectTwo($result, $url_arr)
    {
        if ($result) $url = $url_arr['ok'];
        else $url = $url_arr['error'];
        header('Location: /' . $url);
        exit;
    }

    protected function addMessageKey($result, $key)
    {
        $type = $result ? 'ok' : 'error';
        Message::addKey($type, $key);
        return $this;
    }

    protected function addMessageText($result, $text)
    {
        $type = $result ? 'ok' : 'error';
        Message::addText($type, $text);
        return $this;
    }

    protected function setNamePage($namePage)
    {
        $this->data['namePage'] = $namePage;
    }
}