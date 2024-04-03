<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Berita extends Model
{
    use HasFactory;
    protected $guarded=[];  

    public function type(): BelongsTo 
    {
        return $this->belongsTo(petType::class, 'id_type');    
    } 

    public function user(): BelongsTo 
    {
        return $this->belongsTo(User::class, 'id_user');    
    } 
}
