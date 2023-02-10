<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $table = 'sections';

    protected $fillable = [
        'course_id',
        'name',
    ];

    public function Course()
    {
        return $this->belongsTo(Course::class);
    }


}
