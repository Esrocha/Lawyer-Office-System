<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lawyer extends Model
{
    use HasFactory;

    protected $table = 'lawyers';

    protected $fillable = [
        'name',
        'cpf',
        'oab',
        'street',
        'number',
        'complement',
        'district',
        'city',
        'state',
        'cep'
    ];

    
    public function lawsuits()
    {
        return $this->belongsToMany(Lawsuit::class);
    }
    
    
    
}
