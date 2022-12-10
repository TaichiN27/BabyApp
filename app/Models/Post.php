<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
        protected $fillable = [
            'id',
            'title',
            'text',
        ];
    
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        //降順後、10件の制限
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
