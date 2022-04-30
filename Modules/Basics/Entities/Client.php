<?php

namespace Modules\Basics\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['identification', 'first_name', 'last_name', 'client_name','status', 'type_document', 
                        'address', 'phone', 'cel_phone', 'entry_date', 'email', 'gender', 'birth_date', 'limit',
                        'vendedor_id', 'pricelist_id', 'shoppingcontact', 'conditionpayment_id'];

    protected $table = 'basic_clients';
    
    protected static function newFactory()
    {
        return \Modules\Basics\Database\factories\ClientFactory::new();
    }

    public function getStatusColorAttribute()
    {
        return [
            '1' => 'success',
            '0' => 'danger',
        ][$this->status] ?? 'info';
    }
}
