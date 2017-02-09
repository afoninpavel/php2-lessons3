<?php
/**
 * Created by PhpStorm.
 * User: паша
 * Date: 09.02.2017
 * Time: 15:22
 */

namespace App\Models;

use App\Model;

/**
 * Class News
 * @package App\Models
 *
 * @property  \App\Models\Author $author
 */
class News
 extends Model
{

    const TABLE = 'news';

    public $title;
    public $lead;
    public $autor_id;


    public function __get($k)
    {
        switch ($k) {
            case 'author':
                return Author::findById($this->author_id);
                break;
            default:
                return null;
        }
    }

}