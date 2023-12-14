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
    }

    protected function addMessage($result, $key)
    {
        $type = $result ? 'ok' : 'error';
        Message::add($key, $type);
        return $this;
    }

    protected function setNamePage($namePage)
    {
        $this->data['namePage'] = $namePage;
    }
}