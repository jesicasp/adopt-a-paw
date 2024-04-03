<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class adoptionApp extends Model
{
    use HasFactory;
    protected $guarded=[];  

    /* public function parent(): BelongsTo 
    {
        return $this->belongsTo(petParent::class, 'id_parent');    
    }  */

    public function user(): BelongsTo 
    {
        return $this->belongsTo(User::class, 'id_parent');    
    } 

    public function pet(): BelongsTo 
    {
        return $this->belongsTo(Pet::class, 'id_pet');    
    } 
}
