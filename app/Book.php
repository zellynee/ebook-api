<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title','description','author','publisher','date_of_issue'];

    //nggonku mau kaya kue ternyata xampp urung nyala tapi nggonmu uwis padahal
    //makane aku takon anu step e pa bae mbok an sing kurang koh:(((())))
}
