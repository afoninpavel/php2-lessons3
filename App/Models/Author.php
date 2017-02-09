<?php
/**
 * Created by PhpStorm.
 * User: паша
 * Date: 09.02.2017
 * Time: 14:28
 */

namespace App\Models;

use App\Model;


class Author
    extends Model

{
    const TABLE = 'authors';

    public $name;

}