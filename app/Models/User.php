<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone_number',
        'department_id',
        'designation_id',
    ];

    /**
     * Get the department that the user belongs to.
     */
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    /**
     * Get the designation that the user belongs to.
     */
    public function designation()
    {
        return $this->belongsTo(Designation::class, 'designation_id');
    }
}
