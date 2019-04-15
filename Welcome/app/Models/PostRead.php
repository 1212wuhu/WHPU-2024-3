<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PostRead
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PostRead newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PostRead newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PostRead query()
 * @mixin \Eloquent
 */
class PostRead extends Model
{
    //指定表名
    protected $table = 't_post_read';
    //指定主键
    protected $primaryKey = 'id';
    //是否开启时间戳
    public $timestamps = false;
    //设置时间戳格式为Unix
    protected $dateFormat = 'U';
}