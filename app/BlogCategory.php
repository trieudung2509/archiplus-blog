<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogCategory extends Model
{
    use SoftDeletes;
    
    public function posts()
    {
        return $this->hasMany(Blog::class);
    }

    public static function getCategories($categories, $parent_id = 0, $char = '', &$result = [0 => 'None']) 
    {
        foreach ($categories as $key => $item)
        {
            if ($item['parent'] == $parent_id)
            {
                $result[$item['id']] = $char . $item['category_name'];
                
                unset($categories[$key]);
                
                self::getCategories($categories, $item['id'], $char.'|---', $result);
            }
        }
        return $result;

    }
}
