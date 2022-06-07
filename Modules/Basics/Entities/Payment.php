<?php

namespace Modules\Basics\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'typeinterval','quotas', 'interval'];
    
    protected static function newFactory()
    {
        return \Modules\Basics\Database\factories\PaymentFactory::new();
    }

    
    public function QueryTable($keyWord = null, $sortField, $sortDirection)
    {
        return $this->select('id','name', 'typeinterval', 'quotas', 'interval')        
        ->search('name', $keyWord)
        ->orderBy($sortField, $sortDirection); 
    }
}
