<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Startup extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'logo',
        'category_id',
        'pitch',
        'description',
        'funding_stage',
        'views',
        'trending_score',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function incrementViews()
    {
        $this->increment('views');
        $this->updateTrendingScore();
    }

    protected function updateTrendingScore()
    {
        // Simple trending score calculation based on views and recency
        $daysSinceCreation = now()->diffInDays($this->created_at) + 1;
        $this->trending_score = ($this->views / $daysSinceCreation) * 100;
        $this->save();
    }
} 