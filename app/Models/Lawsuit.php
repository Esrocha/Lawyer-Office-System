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
        'number',
        'digit',
        'year',
        'body',
        'court',
        'forum',
        'date',
        'defendant',
        'clientName',
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
        return $this->belongsToMany(Client::class);
    }
    
    

}
