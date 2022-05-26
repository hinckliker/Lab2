<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customer';

    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'blocked',
        'surname',
        'phone',
        'mail'
    ];

    public function addres(){
        return $this->hasMany(
            Addres::class,
            'customer_id'
        );
    }


}


