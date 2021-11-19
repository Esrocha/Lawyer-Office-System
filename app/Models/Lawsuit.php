<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Lawsuit extends Model
{
    use HasFactory;

    protected $table = 'lawsuits';
    protected $guarded = [];


    protected $fillable = [
        'lawsuit',
        'digit',
        'year',
        'body',
        'court',
        'forum',
        'date',
        'client_id',
        'Lawyer_id',
        'indemnity',
        'initial_page',
        'lawsuitpdf'
    ];




    public function lawyer() {
        return $this->hasOne(Lawyer::class, 'id', 'lawyer_id');
    }

    
    public function clients()
    {
        return $this->belongsToMany(Client::class, 'client_lawsuit', 'lawsuit_id', 'client_id');
    }
    
    

}
