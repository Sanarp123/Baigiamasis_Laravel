<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class ice extends Model
{
    use HasFactory, Sortable;

    public $sortable = [
    'storis',
    'komentaras',
    'coord_x',
    'coord_y',
    'created_at',
    ];
}


