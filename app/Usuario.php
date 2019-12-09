<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Usuario extends Model
{
    use SoftDeletes;

    protected $fillable = ['nome','data_nasc','email','cel','end','cid','est','cep'];

    protected $dates = ['deleted_at'];
}
