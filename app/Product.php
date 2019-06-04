<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name', 'photo', 'description', 'slug', 'seo_title',
        'meta_description', 'affiliate_link', 'cant_clicks',
        'user_id'
    ];
}
