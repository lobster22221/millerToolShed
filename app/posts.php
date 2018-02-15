<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class posts extends Model
{
    public function scopeUser($query, $userId)
    {
        return $query->where('userId', $userId)->get();
    
        
    }
    
    
}


