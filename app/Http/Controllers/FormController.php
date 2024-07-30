<?php

namespace App\Http\Controllers;

use App\Models\form;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;



class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
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



        $validation = validator($params,[
            'surname' => 'required|alpha:ascii',
            'first_name' => 'required|alpha:ascii',
            'father_name' => 'required|alpha:ascii',
        //     'date_birth' => 'nullable',
        //     'blood_group' => 'required',
        //     'village' => 'required',
        //     'address' => 'nullable',
            'mobile_number' => 'required|numeric|digits:10',
        //     'whatsapp_number' => 'nullable|numeric|digit:10',
        //     'email' => 'nullable',
            'user_image' => 'required',
        //     'admission_year' => 'nullable',
        //     'standard' => 'nullable',
        //     'leave_year' => 'nullable',
        //     'last_standard' => 'nullable',
        //     'education_status' => 'required',
        //     'qualification_category' => 'nullable',
        //     'last_qualification' => 'nullable',
        //     'work_status' => 'required|in:Business,Job',
            // 'business_name' => 'nullable|alpha:ascii',
        //     'established_year' => 'required|nullable',
        //     'business_category' => 'nullable',
        //     'total_staff' => 'nullable',
        //     'business_country' => 'required|nullable',
            // 'business_city' => 'alpha:ascii',
        //     'job_sector' => 'required|nullable',
        //     'company_name' => 'required|nullable',
        //     'designation' => 'nullable',
        //     'job_country' => 'required|nullable',
        //     'job_city' => 'required|nullable',
            'current_address' => 'required',
        //     'many_resources' => 'nullable',
        //     'feedback_samaj' => 'nullable',
        //     'suggestions' => 'nullable',
        //     'attend_samaj_innugration' => 'nullable'
        ]);
        
        
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
        return redirect()->route('form.index');
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
