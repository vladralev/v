<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DrinkBox extends Model
{
    protected $fillable = [
        
        // DrinkBox Info
        'drinkbox_id',
        'is_active',
        'delivered_by_id',
        'no_of_boxes',
        'type',
        // Company Info
        'company_id',
        'delivery_day',
        'frequency',
        'previous_delivery_week',
        'next_delivery_week',
        // Product Information
        'product_id',
        'code',
        'name',
        'quantity',
        'unit_price',
    ];
    
    public function companies()
    {
        return $this->belongsTo(Company::class);
    }
}
