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
    public function addJobs(Request $request){

        if($request->isMethod('post')){
                // ش  echo $request;
             $newjob = new Job();

            // $newjob->job_name->$request->input('name');
            $newjob->job_name->$request->input('name');
            $newjob->job_descrip->$request->input('descrip');
            $newjob->save();

            // job_name
        }
        // $job = Job::all();
        // $arr = Array('job'=>$job);
        return view('admindashord.job_add');
    }
}
?>
