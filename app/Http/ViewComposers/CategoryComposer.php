<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Category;

class CategoryComposer
{
    protected $CategoryList;
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct()
    {
        $categories = Category::orderBy('id', 'ASC')->get();

        $this->CategoryList = $categories;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('CategoryList', $this->CategoryList);
    }
}