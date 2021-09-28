<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{
    protected $fillable = [
        'title',
        'body',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }

    public function likes(): BelongsToMany
    {
        return $this->belongsToMany('App\User', 'likes')->withTimestamps();
    }

    // この記事にログイン中のユーザーがいいねしているかどうかを判定する
    public function isLikedBy(?User $user): bool
    {
        return $user
            ? (bool) $this->likes->where('id', $user->id)->count()
            : false;
    }

    // 現在のいいね数を算出する
    public function getCountLikesAttribute(): int
    {
        return $this->likes->count();
    }

    // tagモデルとのリレーション
    public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }
}
