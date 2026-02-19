<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{ 
    use HasUlids;
    use HasFactory;

   protected $primaryKey='id';
   protected $keyType='string';
   public $increment=false;

    protected $table='tag';
    protected $fillable=['title'];
    protected $guarded=['id'];
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
