<?php

namespace App\Http\Controllers;
use App\Models\StaffBranch;
use App\Models\staff;
use App\Models\Branch;
use Illuminate\Http\Request;

class StaffBranchController extends Controller
{
    public function index(){
        //select * from post;
        $post = StaffBranch::all();
        $staff = staff::all();
        $branch = Branch::all();
        return view('sb.index',compact('post','staff','branch'));
    }
}
?>
