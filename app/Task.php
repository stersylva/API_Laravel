<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = "tasks";
    protected $fillable = ['name', 'date_launch', 'status'];

    public static function doUpdate ($fields) {
        $task = Task::find($fields['id']);
        $task->fill($fields);
        $task->save();
        return $task;
    }

    public static function doStore ($fields) {
        $task = new Task();
        $task->fill($fields);
        $task->save();
        return $task;
    }
}
