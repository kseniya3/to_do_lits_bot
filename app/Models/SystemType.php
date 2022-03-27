<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemType extends Model
{
    use HasFactory;

    protected $table = 'system_types';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     * @var array<int, string>
     */
    protected $fillable = [
        'parent_id',
        'key',
        'name',
        'description',
        'position'
    ];


}
