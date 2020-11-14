<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileStructure extends Model
{
    use HasFactory;
    protected $fillable = [ 'file', 'filePath', 'created_at', 'updated_at', 'deleted_at' ];
}
