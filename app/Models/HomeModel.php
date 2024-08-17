<?php

namespace App\Models;
use CodeIgniter\Models;

class HomeModel extends Model
{
    protected $table = 'user table';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','firstname','last name','email','phone','image','status','created at'];
}