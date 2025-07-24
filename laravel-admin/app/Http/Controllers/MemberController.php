<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function index()
    {
        $members = DB::table('members')->orderBy('joined_at', 'desc')->get();
        return view('memberList', compact('members'));
    }
}