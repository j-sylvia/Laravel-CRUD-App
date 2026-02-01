<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title',
        'description',
        'due_date',
        'status',
    ];
    
    /**
     * Cast attributes to native types.
     */
    protected $casts = [
        'due_date' => 'date',
    ];
}
