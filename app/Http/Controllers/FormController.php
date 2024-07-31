<?php

namespace App\Http\Controllers;

use App\Models\form;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;



class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $form = form::all();
        return view('form.index',compact('form'));
    }

    public function thankyou()
    {
        return view('thankyou');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $params = $request->all();
        

        $rules = [
            'surname' => 'required|alpha:ascii',
            'first_name' => 'required|alpha:ascii',
            'father_name' => 'required|alpha:ascii',
            'date_birth' => 'nullable',
            'blood_group' => 'required',
            'village' => 'required',
            'address' => 'nullable',
            'mobile_number' => 'required|numeric|digits:10',
            'whatsapp_number' => 'nullable|numeric|digit:10',
            'email' => 'nullable',
            'user_image' => 'required',
            'admission_year' => 'nullable',
            'standard' => 'nullable',
            'leave_year' => 'nullable',
            'last_standard' => 'nullable',
            'education_status' => 'required|in:Running,Finished',
            'qualification_category' => 'nullable',
            'last_qualification' => 'nullable',
            'work_status' => 'nullable',
            'business_name' => 'nullable',
            'established_year' => 'nullable',
            'business_category' => 'nullable',
            'total_staff' => 'nullable',
            'business_country' => 'nullable',
            'business_city' => 'nullable',
            'job_sector' => 'nullable',
            'company_name' => 'nullable',
            'designation' => 'nullable',
            'job_country' => 'nullable',
            'job_city' => 'nullable',
            'current_address' => 'nullable',
            'current_runningaddress' => 'nullable',
            'many_resources' => 'nullable',
            'feedback_samaj' => 'nullable',
            'suggestions' => 'nullable',
            'attend_samaj_innugration' => 'nullable'
        ];

        // dd($rules);

        if($request->input('education_status') === 'Running'){
            $rules['current_runningaddress'] = 'required';
            $rules['business_country'] = 'required';
            $rules['work_status'] = 'nullable';
        } elseif ($request->input('education_status') === 'Finished'){
            $rules['work_status'] = 'required|in:Business,Job';
        }

        if($request->input('work_status') === 'Business'){
            $rules['business_name'] = 'required|alpha:ascii';
            $rules['established_year'] = 'required';
            $rules['business_country'] = 'required';
            $rules['business_city'] = 'required';
            $rules['current_address'] = 'required';
            $rules['job_sector'] = 'nullable';
            $rules['company_name'] = 'nullable';
            $rules['job_country'] = 'nullable';
            $rules['job_city'] = 'nullable';
        }   elseif ($request->input('work_status') == 'Job') {
            $rules['business_name'] = 'nullable';
            $rules['established_year'] = 'nullable';
            $rules['business_country'] = 'nullable';
            $rules['business_city'] = 'nullable';
            $rules['current_address'] = 'nullable';
            $rules['job_sector'] = 'required';
            $rules['company_name'] = 'required|alpha:ascii';
            $rules['job_country'] = 'required';
            $rules['job_city'] = 'required|alpha:ascii';
        }

        $validation = validator($params,$rules);
        
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation)->withInput();
        }

        if ($request->has('user_image')) {

            $image = $request->file('user_image');
      
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = public_path('assets/image') . '/' . $imageName;
      
            $image->move(public_path('assets/image'), $imageName);
      
            $imageData = file_get_contents($imagePath);
            $type = pathinfo($imagePath, PATHINFO_EXTENSION);
      
            $base64Image = 'data:image/' . $type . ';base64,' . base64_encode($imageData);
            $params['user_image'] = $base64Image;
            $params['user_image'] = $params['userimage'];
            // dd($params['user_image']);
            if (File::exists($imagePath)) {
              File::delete($imagePath);
            }
      
        }

        form::create($params);
        return redirect()->route('form.thankyou');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
