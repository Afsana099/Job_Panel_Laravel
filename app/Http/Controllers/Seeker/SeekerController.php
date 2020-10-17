<?php
namespace App\Http\Controllers\Seeker\Response;
namespace App\Http\Controllers\Seeker;


use App\Job;
use App\Apply;
use App\Degree;
use App\Education;
use App\Experience;
use App\Training;
use App\Extra;
use App\Achivement;
use App\Category;
use App\User;
use Dompdf\Dompdf;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SeekerController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $educations = Education::where('user_id', Auth::id())->get();
        $educations = Education::where('user_id', Auth::id())->get();
        $experiences = Experience::where('user_id', Auth::id())->get();
        $trainings = Training::where('user_id', Auth::id())->get();
        $extras = Extra::where('user_id', Auth::id())->get();
        $achivements = Achivement::where('user_id', Auth::id())->get();
        return view('seeker.resume.show',compact('user','educations','experiences','trainings','extras','achivements'));
    }

    public function edit()
    {   
        $user = Auth::user();
        $degrees = Degree::all();
        $educations = Education::where('user_id', Auth::id())->get();
        $experiences = Experience::where('user_id', Auth::id())->get();
        $trainings = Training::where('user_id', Auth::id())->get();
        $extras = Extra::where('user_id', Auth::id())->get();
        $achivements = Achivement::where('user_id', Auth::id())->get();
        return view('seeker.resume.edit',compact('user','degrees','educations','experiences','trainings','extras','achivements'));
    }

    public function profileUpdate(Request $request)
    {
        $user = Auth::user();
        $user->update($request->all());
        return redirect()->back()->with('success','Information Updated');
    }

    public function edu_add(Request $request)
    {
        
        $edu_add = $request->all();
        $edu_add['user_id'] = Auth::id();
        Education::create($edu_add);
        return redirect()->back()->with('success', 'Education Added Successfully');
    }

    public function edu_update(Request $request)
    {

        $id=$request->get('id');
        $edu_update=Education::find($id);
        $edu_update->degree_title=$request->input('degree_title');
        $edu_update->major_sub=$request->input('major_sub');
        $edu_update->institution=$request->input('institution');
        $edu_update->course=$request->input('course');
        $edu_update->result=$request->input('result');
        $edu_update->pass_year=$request->input('pass_year');
        $edu_update->save();
        return redirect()->back()->with('success', 'Education Updated Successfully');
    }

    public function edu_delete(Request $request)
    {
        $id=$request->get('id');
        $edu_delete=Education::find($id);
        $edu_delete->delete();
        return redirect()->back()->with('success', 'Education Deleted Successfully');
    }

    public function experience_add(Request $request)
    {
        
        $experience_add = $request->all();
        $experience_add['user_id'] = Auth::id();
        Experience::create($experience_add);
        return redirect()->back()->with('success', 'Experience Added Successfully');
    }

    public function experience_update(Request $request)
    {

        $id=$request->get('id');
        $experience_update=Experience::find($id);
        $experience_update->desgination=$request->input('desgination');
        $experience_update->company=$request->input('company');
        $experience_update->start_date=$request->input('start_date');
        $experience_update->job_status=$request->input('job_status');
        $experience_update->end_date=$request->input('end_date');
        $experience_update->response=$request->input('response');
        $experience_update->save();
        return redirect()->back()->with('success', 'Experience Updated Successfully');
    }

    public function experience_delete(Request $request)
    {
        $id=$request->get('id');
        $experience_delete=Experience::find($id);
        $experience_delete->delete();
        return redirect()->back()->with('success', 'Experience Deleted Successfully');
    }

    public function trainings_add(Request $request)
    {
        
        $trainings_add = $request->all();
        $trainings_add['user_id'] = Auth::id();
        Training::create($trainings_add);
        return redirect()->back()->with('success', 'Training Added Successfully');
    }

    public function trainings_update(Request $request)
    {

        $id=$request->get('id');
        $trainings_update=Training::find($id);
        $trainings_update->title=$request->input('title');
        $trainings_update->institution=$request->input('institution');
        $trainings_update->location=$request->input('location');
        $trainings_update->duration=$request->input('duration');
        $trainings_update->details=$request->input('details');
        $trainings_update->save();
        return redirect()->back()->with('success', 'Training Updated Successfully');
    }

    public function trainings_delete(Request $request)
        {
            $id=$request->get('id');
            $trainings_delete=Training::find($id);
            $trainings_delete->delete();
            return redirect()->back()->with('success', 'Training Deleted Successfully');
        }

    public function extras_add(Request $request)
        {
            
            $extras_add = $request->all();
            $extras_add['user_id'] = Auth::id();
            Extra::create($extras_add);
            return redirect()->back()->with('success', 'ExtraCurricular Added Successfully');
        }


    public function extras_update(Request $request)
        {

            $id=$request->get('id');
            $extras_update=Extra::find($id);
            $extras_update->organization=$request->input('organization');
            $extras_update->position=$request->input('position');
            $extras_update->duration=$request->input('duration');
            $extras_update->details=$request->input('details');
            $extras_update->save();
            return redirect()->back()->with('success', 'ExtraCurricular Updated Successfully');
        }

    public function extras_delete(Request $request)
        {
            $id=$request->get('id');
            $extras_delete=Extra::find($id);
            $extras_delete->delete();
            return redirect()->back()->with('success', 'ExtraCurricular Deleted Successfully');
        }

    public function achivements_add(Request $request)
    {
        
        $achivements_add = $request->all();
        $achivements_add['user_id'] = Auth::id();
        Achivement::create($achivements_add);
        return redirect()->back()->with('success', 'Achivement Added Successfully');
    }

    public function achivements_update(Request $request)
        {

            $id=$request->get('id');
            $achivements_update=Achivement::find($id);
            $achivements_update->details=$request->input('details');
            $achivements_update->save();
            return redirect()->back()->with('success', 'Achivement Updated Successfully');
        }

    public function achivements_delete(Request $request)
        {
            $id=$request->get('id');
            $achivements_delete=Achivement::find($id);
            $achivements_delete->delete();
            return redirect()->back()->with('success', 'Achivement Deleted Successfully');
        }


    public function password_change(Request $request )
    {
        $user = Auth::user();
        $newpass = [
            'password' => Hash::make($request->password)
        ];
        $validator = Validator::make($request->all(), [
                'old_password' => [
                    'required', function ($attribute, $value, $fail) {
                        if (!Hash::check($value, Auth::user()->password)) {
                            $fail('Old Password didn\'t match');
                        }
                    },
                ],
                'password' => 'required|min:8',
                'password_confirmation' => 'required|same:password'
            ],
            [
                'password.min' => 'Password should be minimum 8 charcater',
                'password_confirmation.required' => 'Confirm Password is required',
                'password_confirmation.same' => 'Confirm password doesn\'t match'
            ]);
        if($validator->fails()) {
                return redirect()->back()->with('error', 'Password is Not Matched');
            }
        $user->update($newpass);
         return redirect()->back()->with('success', 'Password Changed Successfully');
    }

    public function photo_change(Request $request)
    {
        $data = $request->all();
        $user = Auth::user();
        if($request->has('picture')){
            $image = $request->picture->store('/avater');
            $data['picture'] = $image;
        }
        $update = $user->update($data);
        return redirect()->back()->with('success', 'Photo updated Successfully');
    }

    public function applied()
        {
            $applied = Apply::where('user_id', Auth::id())->get()->pluck('job_id');
            $jobs = Job::find($applied);
           return view('seeker.job.index', compact('jobs'));
        }

    public function download()

    {
        $user = Auth::user();
        $educations = Education::where('user_id', Auth::id())->get();
        $educations = Education::where('user_id', Auth::id())->get();
        $experiences = Experience::where('user_id', Auth::id())->get();
        $trainings = Training::where('user_id', Auth::id())->get();
        $extras = Extra::where('user_id', Auth::id())->get();
        $achivements = Achivement::where('user_id', Auth::id())->get();
        //dd($user);
        $pdf = PDF::loadView('seeker.resume.resume_pdf', compact('user','educations','experiences','trainings','extras','achivements'));
        //$pdf->setPaper('A4', 'landscape');
        return $pdf->download('resume.pdf');
    }


}
