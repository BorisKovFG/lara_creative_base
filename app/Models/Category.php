<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static findOrFail(mixed $categoryId)
 */
class Category extends Model
{
    use HasFactory;
    protected $fillable = ['title'];

    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id');
    }
}
