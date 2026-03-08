<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   use HasUuids;
   use HasFactory;
   protected $primaryKey='id';
   protected $keyType='string';
   public $increment=false;
   protected $table="post";
   protected $fillable = ['title','body','author','published','user_id'];
   protected $guarded = ['id'];
   public function comments()
   {
      return $this->hasMany(Comment::class);
   }
   public function tags()
   {
      return $this->belongsToMany(Tag::class);
   }
   public function user()
   {
      return $this->belongsTo(User::class);
   }
}
