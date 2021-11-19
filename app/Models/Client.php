<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Client extends Model
{
    use HasFactory;
    protected $table  = 'clients';

    protected $fillable = [
        'name',
        'CPF',
        'street',
        'number',
        'complement',
        'district',
        'state',
        'CEP'
    ];

    
    public function lawsuits()
    {
        return $this->hasMany(Lawsuit::class);
    }
}
