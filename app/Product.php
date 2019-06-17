<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'photo', 'description', 'slug', 'seo_title',
        'meta_description', 'affiliate_link', 'cant_clicks',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsToMany(Category::class);
    }
}
