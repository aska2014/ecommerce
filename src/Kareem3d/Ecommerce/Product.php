<?php namespace Kareem3d\ECommerce;

use Kareem3d\Eloquent\Model;

class Product extends Model {

    const PRICE_CURRENCY = 'dollar';

    /**
     * @var string
     */
    protected $table = 'products';

    /**
     * @var array
     */
    protected $guarded = array();

    /**
     * @return mixed
     */
    public function getActualPrice()
    {
        return $this->hasOfferPrice() ? $this->offer_price : $this->price;
    }

    /**
     * @return bool
     */
    public function hasOfferPrice()
    {
        return $this->offer_price != null;
    }

    /**
     * @return bool
     */
    public function hasCategory()
    {
        return $this->category != null;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function stock()
    {
        return $this->belongsTo(Stock::getClass());
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function orders()
    {
        return $this->belongsToMany(Order::getClass(), 'product_order');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::getClass());
    }
}