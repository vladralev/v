<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdditionalInfo extends Model
{
    protected $table = 'additional_info';
    
    protected $fillable = [
        'company_id',
        'additional_info'
    ];
    
    public function companies()
    {
        return $this->belongsTo(Company::class);
    }
}
