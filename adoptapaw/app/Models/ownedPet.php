<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ownedPet extends Model
{
    use HasFactory;
    protected $guarded=[]; 

    public function parent(): BelongsTo 
    {
        return $this->belongsTo(petParent::class);    
    } 

    public function pet(): BelongsTo 
    {
        return $this->belongsTo(Pet::class);    
    } 
}
