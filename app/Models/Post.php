<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /*
    use SoftDeletes;
        protected $fillable = [
            'id',
            'name',
            'nickname',
        ];
    */
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        //降順後、10件の制限
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
