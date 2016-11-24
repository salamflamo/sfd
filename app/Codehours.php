<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Codehours extends Model
{
    public function is_admin(){
        $role = $this->role;
        if ($role == 'admin'){
            return true;
        }else{
            return false;
        }

    }

    public function role(){
        $role = $this->role;
        return $role;
    }
}
