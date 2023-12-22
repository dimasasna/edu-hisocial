<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $guarded =[
        'id',
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function scopeFilter($query, array $filters){
        $query->when($filters['search']?? false, function($query, $search){
            return $query->where('name','like','%'.$search.'%')
            ->orWhere('altimg','like','%'.$search.'%')
            ->orWhere('description','like','%'.$search.'%')
            ->orWhereHas('category', function ($categoryQuery) use ($search) {
                $categoryQuery->where('name', 'like', '%' . $search . '%');
            });;
        });
    }
}
