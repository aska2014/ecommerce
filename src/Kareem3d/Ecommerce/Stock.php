<?php namespace Kareem3d\Ecommerce;

use Illuminate\Support\Facades\App;
use Kareem3d\Eloquent\Model;

class Stock extends Model {

    /**
     * @var string
     */
    protected $table = 'stocks';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products()
    {
        return $this->belongsToMany(App::make('Kareem3d\Ecommerce\Product')->getClass(), 'stock_product');
    }
}