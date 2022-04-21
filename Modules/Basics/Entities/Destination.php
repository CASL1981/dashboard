<?php

namespace Modules\Basics\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = ['costcenter', 'name', 'address', 'phone', 'location', 'minimun', 'maximun'];

    protected $table = 'basic_destinations';
    
    protected static function newFactory()
    {
        return \Modules\Basics\Database\factories\DestinationFactory::new();
    }
}
