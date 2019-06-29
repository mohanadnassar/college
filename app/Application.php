<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = ['username', 'email', 'courses', 'phoneNumber'];

    public function saveApplication($data)
    {
        $this->username = $data['username'];
        $this->email = $data['email'];
        $this->courses = $data['courses'];
        $this->phoneNumber = $data['phoneNumber'];
        $this->save();
        return 1;
    }
    public function updateApplication($data)
    {
        $ticket = $this->find($data['id']);
        $this->username = $data['username'];
        $this->email = $data['email'];
        $this->courses = $data['courses'];
        $this->phoneNumber = $data['phoneNumber'];
        $ticket->save();
        return 1;
    }
    public function orders(){
        return $this->hasMany(User::class);
    }

}
