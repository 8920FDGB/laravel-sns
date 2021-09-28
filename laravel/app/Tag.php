<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name',
    ];

    // タグ名に「#」をつけるアクセサ
    public function getHashtagAttribute(): string
    {
        return '#' . $this->name;
    }
}
