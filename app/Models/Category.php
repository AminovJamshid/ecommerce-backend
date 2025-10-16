<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\LaravelPackageTools\Concerns\Package\HasTranslations;
use \Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory, HasTranslations;

    protected $fillable = ["name", "icon", "order"];

    public array $translatable = ["name"];

    protected $casts = [
        'name' => 'array'
        ];


    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
