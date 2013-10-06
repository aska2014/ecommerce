<?php namespace Kareem3d\Ecommerce;

use Kareem3d\Eloquent\Model;

class Category extends Model {

    /**
     * @var string
     */
    protected $table = 'categories';

    /**
     * @var array
     */
    protected $guarded = array();

    /**
     * @return bool
     */
    public function hasProducts()
    {
        return $this->products()->count() > 0;
    }

    /**
     * @return bool
     */
    public function hasParent()
    {
        return $this->parent->count() > 0;
    }

    /**
     * @return bool
     */
    public function hasChildren()
    {
        return $this->children()->count() > 0;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(static::getClass());
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function children()
    {
        return $this->hasMany(static::getClass());
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products()
    {
        return $this->hasMany(Product::getClass());
    }
}