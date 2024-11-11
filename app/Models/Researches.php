<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Researches extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'image', 'user_id', 'abstract', 'publication_date', 'department_id', 'file','views'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }
}
