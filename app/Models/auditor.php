<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class auditor extends Model
{
    use HasFactory;

    protected $table = 'auditor';
    protected $primarykey = 'id_Auditor';
}
