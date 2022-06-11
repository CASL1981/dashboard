<?php

namespace Modules\Basics\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Wildside\Userstamps\Userstamps;

class Payment extends Model
{
    use HasFactory;
    use Userstamps;

    protected $table = 'basic_payments';

    protected $fillable = ['name', 'typeinterval','quotas', 'interval'];
    
    protected static function newFactory()
    {
        return \Modules\Basics\Database\factories\PaymentFactory::new();
    }

    
    public function QueryTable($keyWord = null, $sortField, $sortDirection)
    {
        return $this->select('id','name', 'typeinterval', 'quotas', 'interval', 'created_by', 'updated_by')        
        ->with(['creator', 'editor'])
        ->search('name', $keyWord)
        ->orderBy($sortField, $sortDirection); 
    }
}
