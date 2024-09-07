<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class DailyLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'description',
        'filepath',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class . 'id', 'user_id');
    }

    public function updatedAtDate()
    {
        return Carbon::parse($this->attributes['updated_at'])->format('d-m-Y');
    }
    public function updatedAtTime()
    {
        return Carbon::parse($this->attributes['updated_at'])->format('H:i');
    }

    public function statusClassName()
    {
        switch ($this->status) {
            case 'Pending':
                return 'bg-yellow-500';
            case 'Ditolak':
                return 'bg-red-500';
            default:
                return 'bg-green-500';
        }
    }
}
