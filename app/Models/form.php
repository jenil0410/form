<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form extends Model
{
    use HasFactory;

    public $table = "sklps_form2";
    protected $primarykey = "id";
    protected $fillable = ['surname','first_name','father_name','date_birth','blood_group','village','address','mobile_number','whatsapp_number','email','user_image','admission_year','standard','leave_year','last_standard','education_status','qualification_category','last_qualification','work_status','business_name','established_year','business_category','total_staff','business_country','business_city','job_sector','company_name','designation','job_country','job_city','current_address','students_work_company','many_resources','feedback_samaj','suggestions','attend_samaj_innugration','current_runningaddress'];
}
