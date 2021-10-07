<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with = ['category', 'author'];

    public function scopeFilter($query, $filters = [])
    {

        $query->when($filters['search'] ?? false, function ($query, $search) {
            $query
                ->where('title', 'like', '%' . $search . '%',)
                ->orWhere('body', 'like', '%' . $search . '%',);
        });

        $query->when($filters['category'] ?? false, fn ($query, $category) =>
        $query
            ->whereHas('category', fn ($query) =>
            $query
                ->where('slug', $category)));

        $query->when($filters['category'] ?? false, fn ($query, $category) =>
        $query
            ->whereHas('category', fn ($query) =>
            $query
                ->where('slug', $category)));

        $query->when($filters['author'] ?? false, fn ($query, $author) =>
        $query
            ->whereHas('author', fn ($query) =>
            $query
                ->where('username', $author)));
        // $query
        // ->whereexists(
        //     fn ($query) =>
        //     $query->from('categories')
        //         ->WhereColumn('categories.id', 'posts.categories_id')
        //         ->where('categories.slug', $category)
        // ));
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // protected $fillable = ['title', 'excerpt', 'body', 'id'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
