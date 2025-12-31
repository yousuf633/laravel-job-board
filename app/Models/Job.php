<?php

namespace App\Models;



class Job 
{
    public static function all(){
        return[
        ['title'=>'Software Engineering','salary'=>'$1000'],
        ['title'=>'Graphic Design','salary'=>'$2000']
        ];
    }
}
