<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    //
    public function viewJobs(){
        $job = Job::all();
        $arr = Array('job'=>$job);
        return view('admindashord.view_jobs',$arr);
    }
}
?>
