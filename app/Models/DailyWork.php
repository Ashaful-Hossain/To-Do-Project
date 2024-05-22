<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DailyWork extends Model
{
    use HasFactory;
    protected $fillable =[
            'name',
            'task',
    ];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
