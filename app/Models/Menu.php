<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'harga',
        'description',
        'type_id',
        'image',
    ];
    public function type() {
        return $this->belongsTo(Type::class);
        
    }
}
