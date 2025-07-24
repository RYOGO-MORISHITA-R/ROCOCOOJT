<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Member;

class HomeController extends Controller
{
    public function index()
    {
        // 月別 入会・退会数を取得（例：直近12ヶ月）
        $months = collect(range(0, 11))->map(function ($i) {
            return now()->subMonths($i)->format('Y-m');
        })->reverse()->values();

        $joinCounts = [];
        $leaveCounts = [];

        foreach ($months as $month) {
            $joinCounts[] = Member::whereRaw("DATE_FORMAT(joined_at, '%Y-%m') = ?", [$month])->count();
            $leaveCounts[] = Member::whereRaw("DATE_FORMAT(withdrawn_at, '%Y-%m') = ?", [$month])->count();
        }

        $totalUsers = Member::whereNull('withdrawn_at')->count();
        $totalBlogs = 0;
        $totalViews = 0;
        return view('home', [
            'labels' => $months,
            'joinCounts' => $joinCounts,
            'leaveCounts' => $leaveCounts,
            'totalUsers' => $totalUsers,
            'totalBlogs' => $totalBlogs,
            'totalViews' => $totalViews,
        ]);
    }
}
