<?php

namespace Botble\Ecommerce\Models;

use Botble\Base\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderReturnItem extends BaseModel
{
    /**
     * @var string
     */
    protected $table = 'ec_order_return_items';

    /**
     * @var string[]
     */
    protected $fillable = [
        'order_return_id',
        'order_product_id',
        'product_id',
        'product_name',
        'product_image',
        'qty',
        'price',
        'reason',
    ];

    public function orderReturn(): BelongsTo
    {
        return $this->belongsTo(OrderReturn::class, 'order_return_id');
    }

    public function orderProduct(): BelongsTo
    {
        return $this->belongsTo(OrderProduct::class, 'order_product_id');
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
