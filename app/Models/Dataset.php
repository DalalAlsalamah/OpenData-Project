<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dataset extends Model
{
    use HasFactory;
    protected $guarded = [];
public function user(){
    return $this->belongsTo(User::class);
    
    
       }

       public function tags(){

        return $this->belongsToMany(Tag::class);
           }
    }