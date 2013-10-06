<?php namespace Kareem3d\Ecommerce;

use Kareem3d\Eloquent\Model;

class Stock extends Model {

    /**
     * @var string
     */
    protected $table = 'stocks';

    /**
     * @var array
     */
    protected $guarded = array();

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products()
    {
        return $this->hasMany(Product::getClass());
    }
}