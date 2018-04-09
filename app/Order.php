<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'orders';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['billing_first_name', 'billing_last_name', 'billing_address_1', 'billing_city', 'billing_postcode', 'billing_email', 'billing_phone', 'order_comments', 'order_color_card', 'order_color_letter', 'order_date', 'total', 'card', 'number_cards', 'status'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
