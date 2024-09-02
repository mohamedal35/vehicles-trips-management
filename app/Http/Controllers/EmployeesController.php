<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function topSovTripEmployees(Request $request)
    {
        $page = $request->page ?? 1;
        $rows = $request->rows ?? 5;
        $period = $request->period ?? 0;
        $topEmployees = Employee::topEmployeesWithSovTrips($page, $rows, $period);

        return response()->json($topEmployees, 200);
    }
}
