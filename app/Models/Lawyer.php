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
        'OAB',
        'street',
        'number',
        'complement',
        'district',
        'state',
        'CEP'
    ];

    
    public function lawsuits()
    {
        return $this->belongsToMany(Lawsuits::class);
    }
}
