<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $with =['category'];
    
    public function category ()
    {
        return $this->belongsTo(kategori::class,'kategori_id');
    }

    // public function author()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array  
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
