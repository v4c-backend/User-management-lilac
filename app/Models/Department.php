<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /**
     * Get the users for the department.
     */
    public function users()
    {
        return $this->hasMany(User::class, 'department_id');
    }
}
