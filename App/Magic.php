<?php
/**
 * Created by PhpStorm.
 * User: паша
 * Date: 09.02.2017
 * Time: 12:15
 */

namespace App;


trait Magic
{
    protected $data = [];

    public function __set($k, $v)
    {
        $this->data[$k] = $v;
    }

    public function __get($k)
    {
        return $this->data[$k];
    }

    public function __isset($k)
    {
        return isset($this->data[$k]);

    }

}