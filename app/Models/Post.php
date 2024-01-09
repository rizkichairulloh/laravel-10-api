<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    use HasFactory;

    /**
    * fillable
    *
    * @var array
    */
    protected $fillable = [
        'image',
        'title',
        'content',
    ];

    public function name(): Attribute {
        return Attribute::make(
            get: fn ( $image ) => asset( '/storage/posts/' . $image ),
        );
    }
}
