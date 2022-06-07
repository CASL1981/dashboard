<?php

namespace Modules\Basics\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['identification', 'first_name', 'last_name','status', 'type_document', 
                        'address', 'phone', 'cel_phone', 'entry_date', 'email', 'gender', 'birth_date', 
                        'location_id', 'photo_path', 'vendedor'];

    protected $table = 'basic_employees';
    
    protected static function newFactory()
    {
        return \Modules\Basics\Database\factories\EmployeeFactory::new();
    }

    public function getStatusColorAttribute()
    {
        return [
            '1' => 'success',
            '0' => 'danger',
        ][$this->status] ?? 'info';
    }

    
    public function QueryTable($keyWord = null, $sortField, $sortDirection)
    {
        return $this->select('id','identification', 'first_name', 'last_name','status', 'type_document', 
                            'address', 'phone', 'cel_phone', 'entry_date', 'email', 'gender', 'birth_date',
                            'location_id')        
        ->search('first_name', $keyWord)
        ->search('last_name', $keyWord)
        ->orderBy($sortField, $sortDirection); 
    }
}
