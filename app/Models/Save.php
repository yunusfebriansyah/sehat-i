<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Save extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function need(){
        return $this->belongsTo(Need::class);
    }

    public function scopeAmbulans($query)
    {
        $query->whereHas('need', fn ($query) =>
            $query->where('category_id', 2)
        );
    }

    public function scopeOksigen($query)
    {
        $query->whereHas('need', fn ($query) =>
            $query->where('category_id', 1)
        );
    }

    public function scopePlasma($query)
    {
        $query->whereHas('need', fn ($query) =>
            $query->where('category_id', 3)
        );
    }

    public function scopePuskesmas($query)
    {
        $query->whereHas('need', fn ($query) =>
            $query->where('category_id', 4)
        );
    }

    public function scopeTestSwap($query)
    {
        $query->whereHas('need', fn ($query) =>
            $query->where('category_id', 5)
        );
    }

    public function scopeTempatVaksin($query)
    {
        $query->whereHas('need', fn ($query) =>
            $query->where('category_id', 6)
        );
    }

    public function scopeTempatIsolasi($query)
    {
        $query->whereHas('need', fn ($query) =>
            $query->where('category_id', 7)
        );
    }


}
