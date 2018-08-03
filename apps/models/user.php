<?php

namespace Models;
use \Illuminate\Database\Eloquent\Model as DCRUDM;
new Database();
 
class User extends DCRUDM {
    protected $table = 'users';
    protected $fillable = ['username'];
}

?>