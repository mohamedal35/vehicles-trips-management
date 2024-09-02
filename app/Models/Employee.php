<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    
    public function trips()
    {
        return $this->hasMany(Trip::class);
    }
    public static function topEmployeesWithSovTrips($page, $rows, $period = null)
    {
        $startDate = null;
        if ($period) {
            $startDate = now()->subMonths($period);
        }
        $results = self::withCount(['trips as sov_trips_count' => function ($query) use ($period, $startDate) {
            $query->whereHas('vehicle', function ($query) {
                $query->where('is_SOV', 1);
                
            });
            if ($period) {
                $query->where('trips.created_at', '>=', $startDate);
            }
        }])
        ->orderByDesc('sov_trips_count');
        return $results
        ->paginate($rows, ['*'], $page);
    }
}
