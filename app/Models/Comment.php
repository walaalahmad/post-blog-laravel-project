<?php

namespace App\Models;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;
    // protected $fillable =['body','post_id'];
    // protected $fillable = [
    //     'comment_body',
    //     'user_id',
    //     'post_id'

    // ];
    public function post(){
        return $this->BelongsTo(Post::class);
    }
    public function author(){
        return $this->BelongsTo(User::class,'user_id');
    }

}
