<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Need extends Model
{
    use HasFactory, Sluggable;
    
    protected $guarded = ['id'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeSearch($query, $search)
    {
        $query->when( $search ?? false, fn ($query, $search) =>
            $query->where('name', 'LIKE', '%'.$search.'%')
            ->orWhere('address', 'LIKE', '%'.$search.'%')
            ->orWhere('hp', 'LIKE', '%'.$search.'%')
        );
    }

    public function scopeLocation($query, $search)
    {
        $query->when( $search ?? false, fn ($query, $search) =>
            $query->where('address', 'LIKE', '%'.$search.'%')
        );
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

}
