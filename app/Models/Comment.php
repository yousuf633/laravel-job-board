<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Comment extends Model
{
   use HasUuids;
   use HasFactory;
    protected $primaryKey='id';
   protected $keyType='string';
   public $increment=false;

   protected $table="comment";
   protected $fillable=['author','contant','post_id'];
   protected $guarded=['id'];
   public function post()
   {
    return $this->belongsTo(Post::class);
   }
}
