<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subject extends Model
{
    use HasFactory;
    protected $fillable  = [
        'subject',
        'lecturer'
    ];

    public function task(): HasMany
    {
        return $this->HasMany(Subject::class);
    }
}
