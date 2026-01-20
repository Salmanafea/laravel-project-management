<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
use App\Models\User;
use App\Models\Project;

class Task extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = ['title', 'description', 'project_id', 'user_id'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['title', 'description', 'project_id', 'user_id'])
            ->logOnlyDirty()
            ->setDescriptionForEvent(fn(string $eventName) => "Task has been {$eventName}");
    }
}
