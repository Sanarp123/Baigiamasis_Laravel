<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class report extends Model
{
    use HasFactory;

    public function ReportCreator(){
      return $this->belongsto(User::class, 'Creator_id');
    }
}
