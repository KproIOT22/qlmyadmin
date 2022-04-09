<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table="users";
    public function getALlUsers(){
        $users= DB::select('SELECT*FROM users ');
        return $users;
    }
    public function addUser($data){
        DB::insert('INSERT INTO users (fullname, email,phone_number) values (?, ?,?)', $data);
    }
    public function getDetail($id){
        return DB::select('SELECT * FROM '.$this->table.' WHERE id = ?', [$id]);
    }
    public function updateUser($data,$id){
        $data=array_merge($data,[$id]);
        return DB::update('UPDATE '.$this->table.' SET fullname=?, email=?,phone_number=? WHERE id = ?', $data);

    }
    public function deleteUser($id){
        return DB::delete("DELETE FROM $this->table WHERE id = ?", [$id]);
    }
}
