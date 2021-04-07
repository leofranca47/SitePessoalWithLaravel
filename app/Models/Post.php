<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'photo', 'artigo'];

    public function verifyPostsExist($titulo)
    {
        if ($post = self::where('titulo', $titulo)->first()) {
            return $post->id;
        }

        return 0;
    }

    public function search($filter = null)
    {
        $results = $this->where(function ($query) use ($filter) {
            if ($filter) {
                $query->where('titulo', 'LIKE', "%{$filter}%");
            }
        })
            ->paginate();

        return $results;
    }

    public function getTituloAttribute($value)
    {
        return ucfirst($value);
    }
}
