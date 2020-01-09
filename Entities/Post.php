<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [];

    protected function getAuthorAttribute() {

        return 'Marcelo Hoffmeister';

    }
}
