<?php

namespace App\Models;

use App\Models\User;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $fillable =['title','excerpt','body'];
    protected $with =['category','author']; //relation , to get the query withou thim just call without()
    public function scopeFilter($query,array $filters){

        if(isset($filters['search'])){
            $query->where(function($query){
           $query->where('title','like','%'.request('search').'%')
            ->orWhere('body','like','%'.request('search').'%');
        });
    }
        $query->when($filters['category'] ?? false , function($query){
            $query->whereHas('category' , function($query){
                $query->Where('slug' , request('category'));
            });
        });
        $query->when($filters['author'] ?? false , function($query){
            $query->whereHas('author' , function($query){
                $query->Where('username' , request('author'));
            });
        });
    }
    public function category(){
        return $this->BelongsTo(Category::class);
    }
    public function author(){
        return $this->BelongsTo(User::class,'user_id');
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
}


