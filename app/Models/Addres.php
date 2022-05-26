<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addres extends Model
{
    use HasFactory;

    protected $table = 'addres';

    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'town',
        'street',
        'house',
        'floor',
        'password',
    ];

    public function customer(){
        return $this->belongsTo(Customer::class,
        'customer_id',
        'id');
    }

}
