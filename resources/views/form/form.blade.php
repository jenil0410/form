<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Language" content="gu">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/yearpicker.css') }}">

    <link rel="stylesheet" href="{{ asset('css/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/croppie.css') }}">
    <link rel="stylesheet" href="{{ asset('css/notyf.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css"
        crossorigin="anonymous" />

</head>

<body>
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-dropdown-link :href="route('logout')"
            onclick="event.preventDefault();
                          this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-dropdown-link>
    </form>
    <div class="container">
        <div class="main">
            <img src="image/SKLPS_BANNER.jpg" class="w-100 main-banner-img">
            <div class="sklps">
                <h1>આપણી ઉપરોક્ત સંસ્થા ના રજત જયંતિ મહોત્સવ (૧૪, ૧૫ ડિસેમ્બર) ના પ્રસંગ માં પ્રત્યક્ષ કે પરોક્ષ રીતે
                    જોડાવા
                    માટે સંસ્થા ના ભૂતપૂર્વ વિદ્યાર્થીઓ નું ડેટા કલેકશન ફોર્મ. ભૂતપૂર્વ વિદ્યાર્થીઓનું ડેટા કલેક્શન
                    ફોર્મ.
                </h1>
                <!-- <h1>
                  શ્રી કચ્છી લેવા પટેલ સમાજ અમદાવાદ સંચાલિત<br>
                  શ્રીમતી શાંતાબેન ભીખાલાલ શિયાણી  અતિથિ ભવન<br>
                  શ્રીમતી ધનબાઈ શિવજીભાઈ શિયાણી  સેવા સાદન<br>
                  માતૃશ્રી વેલીબેન કાનજી પ્રેમજી કન્યા & કુમાર સેવા સાદન<br>
                  શ્રી ભીખાલાલ હીરજીભાઈ શિયાણી  વિદ્યાર્થી ભવન<br>
                  માતૃશ્રી ભાનુબેન અરવિંદ કાનજી ભુડીયા - કુમાર છાત્રાલય (નવું ભવન)<br><br>

                  પ્રસંગ ૧: માતૃશ્રી ભાનુબેન અરવિંદ કાનજી ભુડીયા - કુમાર છાત્રાલય (નવું ભવન) ઉદ્ઘાટન સમારોહ<br>
                  પ્રસંગ ૨: સંસ્થા ના ભૂતપૂર્વ વિદ્યાર્થીઓ નું સ્નેહ મિલાન<br><br>

                  આપણી ઉપરોક્ત સંસ્થા ના રજત જયંતિ મહોત્સવ (૨૧, ૨૨ ડિસેમ્બર) ના પ્રસંગ માં પ્રત્યક્ષ કે પરોક્ષ રીતે જોડાવા માટે સંસ્થા ના ભૂતપૂર્વ વિદ્યાર્થીઓ નું ડેટા કલેકશન ફોર્મ.
               </h1> -->
            </div>
            <h2 class="sklps_heading">Personal Information :</h2>
            <form id="student" method="post" enctype="multipart/form-data" class="contactform"
                action="{{ route('form.store') }}">
                @csrf


                <div class="row form-row">
                    <div class="form-group col-md-4">
                        <label id="surnameLabel">Surname - અટક *</label>
                        <input name="surname" required class="form-control" type="text">
                        <small class="text-danger" id="error"> @error('surname')
                                {{ $message }}
                            @enderror
                        </small>

                    </div>
                    <div class="form-group col-md-4">
                        <label>First Name - નામ *</label>
                        <input name="first_name" required class="form-control" type="text">
                        <small class="text-danger" id="error1">
                            @error('first_name')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Father Name - પિતા નામ *</label>
                        <input name="father_name" required class="form-control" type="text">
                        <small class="text-danger" id="error-father_name">
                            @error('father_name')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Date Of Birth - જન્મ તારીખ</label>
                        <input name="date_birth" id="dob" class="form-control flatpickr"
                            placeholder="Date of Birth" value="" type="text">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Blood Group - બ્લડ ગ્રુપ *</label>
                        <select class="form-select" required name="blood_group">
                            <option value="">Select Blood Group</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Village - મૂળ ગામ *</label>
                        <select class="form-select" required name="village">
                            <option value="" selected="">Select Village</option>
                            <option value="Anjar">
                                Anjar
                            </option>
                            <option value="Asambiya">
                                Asambiya
                            </option>
                            <option value="Baladia">
                                Baladia
                            </option>
                            <option value="Bharapur">
                                Bharapur
                            </option>
                            <option value="Bharasar">
                                Bharasar
                            </option>
                            <option value="Bhuj">
                                Bhuj
                            </option>
                            <option value="Dahisara">
                                Dahisara
                            </option>
                            <option value="Don">
                                Don
                            </option>
                            <option value="Durgapar">
                                Durgapar
                            </option>
                            <option value="Fotdi">
                                Fotdi
                            </option>
                            <option value="Godhra">
                                Godhra
                            </option>
                            <option value="Godpar">
                                Godpar
                            </option>
                            <option value="Goniyasar">
                                Goniyasar
                            </option>
                            <option value="Haripur">
                                Haripur
                            </option>
                            <option value="Jakhaniya">
                                Jakhaniya
                            </option>
                            <option value="Kera">
                                Kera
                            </option>
                            <option value="Koday">
                                Koday
                            </option>
                            <option value="Kodki">
                                Kodki
                            </option>
                            <option value="Kundanpar">
                                Kundanpar
                            </option>
                            <option value="Madhapar">
                                Madhapar
                            </option>
                            <option value="Mandvi">
                                Mandvi
                            </option>
                            <option value="Mankuva">
                                Mankuva
                            </option>
                            <option value="Maska">
                                Maska
                            </option>
                            <option value="Meghpar">
                                Meghpar
                            </option>
                            <option value="Merau">
                                Merau
                            </option>
                            <option value="Mirjapar">
                                Mirjapar
                            </option>
                            <option value="Nagalpur">
                                Nagalpur
                            </option>
                            <option value="Naranpur">
                                Naranpur
                            </option>
                            <option value="Rampar">
                                Rampar
                            </option>
                            <option value="Rayan">
                                Rayan
                            </option>
                            <option value="Samatra">
                                Samatra
                            </option>
                            <option value="Sarli">
                                Sarli
                            </option>
                            <option value="Shirva">
                                Shirva
                            </option>
                            <option value="Sukhpar - Junavas">
                                Sukhpar - Junavas
                            </option>
                            <option value="Sukhpar - Madanpur">
                                Sukhpar - Madanpur
                            </option>
                            <option value="Sukhpar - Roha">
                                Sukhpar - Roha
                            </option>
                            <option value="Surajpur">
                                Surajpur
                            </option>
                            <option value="Vadasar">
                                Vadasar
                            </option>
                            <option value="Vekra">
                                Vekra
                            </option>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Address - મૂળ સરનામું</label>
                        <input name="address" id="main_address" class="form-control" type="text">
                        <small class="text-danger" id="error-address"></small>
                    </div>
                    <div class="form-group col-md-12 col-xl-4 col-lg-6 col-sm-6">
                        <label>Mobile Number - મોબાઇલ નંબર *</label>
                        <!-- <input id="phone" type="tel" name="phone" /> -->
                        <!-- <input name="mobile_number" id="phone" class="form-control" type="text" > -->
                        <input type="tel" id="mobile_number" name="mobile_number" placeholder="Mobile Number"
                            class="form-control form-control-md"
                            oninput="javascript: if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g, ''); if (this.value.length > 10) this.value = this.value.slice(0, 10);"
                            value="" required />
                        <input type="hidden" id="mobile_number_dialCode" name="mobile_number_dialCode"
                            value="" />
                        <input type="hidden" id="full_mobile_number" name="full_mobile_number" value="" />
                        <small class="text-danger" id="error-mobile_number">
                            @error('mobile_number')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>
                    <div class="form-group col-md-12 col-xl-4 col-lg-6 col-sm-6">
                        <label><input type="checkbox" id="iSameAsMobileNumber" name="iSameAsMobileNumber"
                                value=""> Same as
                            Mobile Number - મોબાઈલ નંબર મુજબ</label>
                        <!-- <input name="same_mobile" id="mobile" class="form-control" type="text" /> -->
                        <input type="tel" id="whatsapp_number" name="whatsapp_number" value=""
                            placeholder="Whatsapp Number"
                            oninput="javascript: if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g, ''); if (this.value.length > 10) this.value = this.value.slice(0, 10);"
                            class="form-control form-control-md" />
                        <input type="hidden" id="whatsapp_number_dialCode" name="whatsapp_number_dialCode"
                            value="" />
                        <input type="hidden" id="full_whatsapp_number" name="full_whatsapp_number"
                            value="" />
                    </div>
                    <div class="form-group col-md-12 col-xl-4 col-lg-12 col-sm-12">
                        <label>E - Mail Address - ઈ - મેઈલ એડ્રેસ</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                </div>

                <div class="row form-row drop-block">
                    <label id="fileimage">Passport Size Image - ફોટો અપલોડ રોક *</label>
                    <div class="drag-input" id="drag-drop-area">
                        <div class="dropzone">Drag & Drop your file here or</div>
                        <label for="file-upload" class="custom-choose-btn" id="custom-btn"><img
                                src="image/arrow.png">Choose
                            File</label>
                        <input type="file" id="file-upload" class="form-control imageUpload" value=""
                            name="user_image" style="display: none;" onchange="">
                        <input name="userimage" id="userimage" value="" type="hidden"
                            class="form-control" />
                        <label class="form-label col-12">&nbsp;</label>
                        <img id="uimage" class="rounded img-fluid" src="" style=&quot;display:
                            none;&quot; />
                    </div>
                    <div>
                        <small class="text-danger">
                            @error('user_image')
                                {{ $message }}
                            @enderror
                        </small>

                    </div>
                </div>

                <h2 class="sklps_heading">Organization & Education Info :</h2>
                <div class="row form-row">
                    <div class="form-group col-md-6">
                        <label>Admission Year - સંસ્થામાં કયા વર્ષમાં પ્રવેશ મેળવેલ</label>
                        <input type="text" id="admission_year" name="admission_year" value=""
                            class="form-control form-control-md admission_year_yearpicker">
                    </div>
                    <div class="form-group col-md-6">
                        <label>In Which Standard - કયા ધોરણમાં</label>
                        <select class="form-select" name="standard">
                            <option value="6">
                                6
                            </option>
                            <option value="7">
                                7
                            </option>
                            <option value="8">
                                8
                            </option>
                            <option value="9">
                                9
                            </option>
                            <option value="10">
                                10
                            </option>
                            <option value="11S">
                                11 Science
                            </option>
                            <option value="11C">
                                11 Commerce
                            </option>
                            <option value="11A">
                                11 Arts
                            </option>
                            <option value="12S">
                                12 Science
                            </option>
                            <option value="12C">
                                12 Commerce
                            </option>
                            <option value="12A">
                                12 Arts
                            </option>
                            <option value="ITI">
                                ITI
                            </option>
                            <option value="College">
                                College
                            </option>
                            <option value="Diploma">
                                Diploma
                            </option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Leaving Year - સંસ્થા છોડવાનું વર્ષ</label>
                        <input type="year" id="leave_year" name="leave_year" value=""
                            class="form-control form-control-md leave_year_yearpicker">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Last Standard / Stream - અભ્યાસ છોડયાનું ધોરણ</label>
                        <select class="form-select" name="last_standard">
                            <option value="6">
                                6
                            </option>
                            <option value="7">
                                7
                            </option>
                            <option value="8">
                                8
                            </option>
                            <option value="9">
                                9
                            </option>
                            <option value="10">
                                10
                            </option>
                            <option value="11S">
                                11 Science
                            </option>
                            <option value="11C">
                                11 Commerce
                            </option>
                            <option value="11A">
                                11 Arts
                            </option>
                            <option value="12S">
                                12 Science
                            </option>
                            <option value="12C">
                                12 Commerce
                            </option>
                            <option value="12A">
                                12 Arts
                            </option>
                            <option value="ITI">
                                ITI
                            </option>
                            <option value="College">
                                College
                            </option>
                            <option value="Diploma">
                                Diploma
                            </option>
                        </select>
                    </div>
                    <div class="form-group col-md-12 col-xl-4 col-lg-6 col-sm-6">
                        <label>Education Status - હાલ અભ્યાસ ચાલુ હોય તો વિગત *</label>
                        <select class="form-select" id="selectCountry" required name="education_status">
                            <option value="">Select Status</option>
                            <option value="Running">Running</option>
                            <option value="Finished">Finished</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12 col-xl-4 col-lg-6 col-sm-6">
                        <label>Qualification Category લાયકાત શ્રેણી</label>
                        <select class="form-select" name="qualification_category">
                            <option value="">Select Qualification Category</option>
                            <option value="SSC">
                                SSC
                            </option>
                            <option value="HSC">
                                HSC
                            </option>
                            <option value="Diploma">
                                Diploma
                            </option>
                            <option value="Technical">
                                Technical (ITI)
                            </option>
                            <option value="Bachelor">
                                Bachelor
                            </option>
                            <option value="Master">
                                Master
                            </option>
                            <option value="Phd">
                                Phd
                            </option>
                            <option value="Other">
                                Other
                            </option>
                        </select>
                    </div>
                    <div class="form-group col-md-12 col-xl-4 col-lg-12 col-sm-12">
                        <label>Last Qualification - છેલ્લી શૈક્ષણિક લાયકાત</label>
                        <input name="last_qualification" class="form-control" type="text">
                    </div>
                </div>
                <h2 class="sklps_heading">Current Info :</h2>
                <div class="row form-row">
                    <div class="form-group col-md-12 col-xl-4 col-lg-6 col-sm-6 running-outputDiv">
                        <label>Work Status કાર્ય સ્થિતિ *</label>
                        <select class="form-select" id="selectbusiness" name="work_status">
                            <option value="">Select Work Status</option>
                            <option value="Business">Business</option>
                            <option value="Job">Job</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12 col-xl-4 col-lg-6 col-sm-6 running-outputDiv business-sector">
                        <label>Business Name - વ્યવસાયનું નામ *</label>
                        <input name="business_name" class="form-control" id="business_title" type="text">
                        <small class="text-danger" id="error-business_name">
                            @error('business_name')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>
                    <div class="form-group col-md-12 col-xl-4 col-lg-12 col-sm-12 running-outputDiv business-sector">
                        <label>Established Year - સ્થાપના વર્ષ *</label>
                        <input type="text" name="established_year" id="established_year"
                            class="form-control established_year" placeholder="Select Year">
                    </div>
                    <div class="form-group col-md-6 running-outputDiv  business-sector">
                        <label>Business Category - વ્યવસાય શ્રેણી</label>
                        <input name="business_category" class="form-control" id="business_category" type="text">
                    </div>
                    <div class="form-group col-md-6 running-outputDiv business-sector">
                        <label>Total Staff- કુલ સ્ટાફ</label>
                        <input name="total_staff" class="form-control" id="total_staff" type="text">
                    </div>
                    <div class="form-group col-md-4 job-sector">
                        <label>Job Sector - જોબ સેક્ટર *</label>
                        <select class="form-select" id="job_sector" name="job_sector">
                            <option value="">Select Job Sector</option>
                            <option value="Government">Government</option>
                            <option value="Private">Private</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4 job-sector">
                        <label>Company Name - કંપની નું નામ *</label>
                        <input name="company_name" class="form-control" id="company_name" type="text">
                    </div>
                    <small class="text-danger" id="error-company_name"></small>
                    <div class="form-group col-md-4 job-sector">
                        <label>Designation</label>
                        <input name="designation" class="form-control" id="designation" type="text">
                    </div>

                    <div class="form-group col-md-6 business-sector">
                        <label>Country - દેશ *</label>
                        <select class="form-select" id="business_country" name="business_country">
                            <option value="">Select Country</option>
                            <option value="Afghanistan">
                                Afghanistan
                            </option>
                            <option value="Åland Islands">
                                Åland Islands
                            </option>
                            <option value="Albania">
                                Albania
                            </option>
                            <option value="Algeria">
                                Algeria
                            </option>
                            <option value="American Samoa">
                                American Samoa
                            </option>
                            <option value="Andorra">
                                Andorra
                            </option>
                            <option value="Angola">
                                Angola
                            </option>
                            <option value="Anguilla">
                                Anguilla
                            </option>
                            <option value="Antarctica">
                                Antarctica
                            </option>
                            <option value="Antigua & Barbuda">
                                Antigua & Barbuda
                            </option>
                            <option value="Argentina">
                                Argentina
                            </option>
                            <option value="Armenia">
                                Armenia
                            </option>
                            <option value="Aruba">
                                Aruba
                            </option>
                            <option value="Australia">
                                Australia
                            </option>
                            <option value="Austria">
                                Austria
                            </option>
                            <option value="Azerbaijan">
                                Azerbaijan
                            </option>
                            <option value="Bahamas">
                                Bahamas
                            </option>
                            <option value="Bahrain">
                                Bahrain
                            </option>
                            <option value="Bangladesh">
                                Bangladesh
                            </option>
                            <option value="Barbados">
                                Barbados
                            </option>
                            <option value="Belarus">
                                Belarus
                            </option>
                            <option value="Belgium">
                                Belgium
                            </option>
                            <option value="Belize">
                                Belize
                            </option>
                            <option value="Benin">
                                Benin
                            </option>
                            <option value="Bermuda">
                                Bermuda
                            </option>
                            <option value="Bhutan">
                                Bhutan
                            </option>
                            <option value="Bolivia">
                                Bolivia
                            </option>
                            <option value="Bosnia &amp; Herzegovina">
                                Bosnia &amp; Herzegovina
                            </option>
                            <option value="Botswana">
                                Botswana
                            </option>
                            <option value="Bouvet Island">
                                Bouvet Island
                            </option>
                            <option value="Brazil">
                                Brazil
                            </option>
                            <option value="British Indian Ocean Territory">
                                British Indian Ocean Territory
                            </option>
                            <option value="British Virgin Islands">
                                British Virgin Islands
                            </option>
                            <option value="Brunei">
                                Brunei
                            </option>
                            <option value="Bulgaria">
                                Bulgaria
                            </option>
                            <option value="Burkina Faso">
                                Burkina Faso
                            </option>
                            <option value="Burundi">
                                Burundi
                            </option>
                            <option value="Cambodia">
                                Cambodia
                            </option>
                            <option value="Cameroon">
                                Cameroon
                            </option>
                            <option value="Canada">
                                Canada
                            </option>
                            <option value="Cape Verde">
                                Cape Verde
                            </option>
                            <option value="Caribbean Netherlands">
                                Caribbean Netherlands
                            </option>
                            <option value="Cayman Islands">
                                Cayman Islands
                            </option>
                            <option value="Central African Republic">
                                Central African Republic
                            </option>
                            <option value="Chad">
                                Chad
                            </option>
                            <option value="Chile">
                                Chile
                            </option>
                            <option value="China">
                                China
                            </option>
                            <option value="Christmas Island">
                                Christmas Island
                            </option>
                            <option value="Cocos (Keeling) Islands">
                                Cocos (Keeling) Islands
                            </option>
                            <option value="Colombia">
                                Colombia
                            </option>
                            <option value="Comoros">
                                Comoros
                            </option>
                            <option value="Congo - Brazzaville">
                                Congo - Brazzaville
                            </option>
                            <option value="Congo - Kinshasa">
                                Congo - Kinshasa
                            </option>
                            <option value="Cook Islands">
                                Cook Islands
                            </option>
                            <option value="Costa Rica">
                                Costa Rica
                            </option>
                            <option value="Côte d’Ivoire">
                                Côte d’Ivoire
                            </option>
                            <option value="Croatia">
                                Croatia
                            </option>
                            <option value="Cuba">
                                Cuba
                            </option>
                            <option value="Curaçao">
                                Curaçao
                            </option>
                            <option value="Cyprus">
                                Cyprus
                            </option>
                            <option value="Czechia">
                                Czechia
                            </option>
                            <option value="Denmark">
                                Denmark
                            </option>
                            <option value="Djibouti">
                                Djibouti
                            </option>
                            <option value="Dominica">
                                Dominica
                            </option>
                            <option value="Dominican Republic">
                                Dominican Republic
                            </option>
                            <option value="Ecuador">
                                Ecuador
                            </option>
                            <option value="Egypt">
                                Egypt
                            </option>
                            <option value="El Salvador">
                                El Salvador
                            </option>
                            <option value="Equatorial Guinea">
                                Equatorial Guinea
                            </option>
                            <option value="Eritrea">
                                Eritrea
                            </option>
                            <option value="Estonia">
                                Estonia
                            </option>
                            <option value="Eswatini">
                                Eswatini
                            </option>
                            <option value="Ethiopia">
                                Ethiopia
                            </option>
                            <option value="Falkland Islands">
                                Falkland Islands
                            </option>
                            <option value="Faroe Islands">
                                Faroe Islands
                            </option>
                            <option value="Fiji">
                                Fiji
                            </option>
                            <option value="Finland">
                                Finland
                            </option>
                            <option value="France">
                                France
                            </option>
                            <option value="French Guiana">
                                French Guiana
                            </option>
                            <option value="French Polynesia">
                                French Polynesia
                            </option>
                            <option value="French Southern Territories">
                                French Southern Territories
                            </option>
                            <option value="Gabon">
                                Gabon
                            </option>
                            <option value="Gambia">
                                Gambia
                            </option>
                            <option value="Georgia">
                                Georgia
                            </option>
                            <option value="Germany">
                                Germany
                            </option>
                            <option value="Ghana">
                                Ghana
                            </option>
                            <option value="Gibraltar">
                                Gibraltar
                            </option>
                            <option value="Greece">
                                Greece
                            </option>
                            <option value="Greenland">
                                Greenland
                            </option>
                            <option value="Grenada">
                                Grenada
                            </option>
                            <option value="Guadeloupe">
                                Guadeloupe
                            </option>
                            <option value="Guam">
                                Guam
                            </option>
                            <option value="Guatemala">
                                Guatemala
                            </option>
                            <option value="Guernsey">
                                Guernsey
                            </option>
                            <option value="Guinea">
                                Guinea
                            </option>
                            <option value="Guinea-Bissau">
                                Guinea-Bissau
                            </option>
                            <option value="Guyana">
                                Guyana
                            </option>
                            <option value="Haiti">
                                Haiti
                            </option>
                            <option value="Heard &amp; McDonald Islands">
                                Heard &amp; McDonald Islands
                            </option>
                            <option value="Honduras">
                                Honduras
                            </option>
                            <option value="Hong Kong SAR China">
                                Hong Kong SAR China
                            </option>
                            <option value="Hungary">
                                Hungary
                            </option>
                            <option value="Iceland">
                                Iceland
                            </option>
                            <option value="India" selected="">
                                India
                            </option>
                            <option value="Indonesia">
                                Indonesia
                            </option>
                            <option value="Iran">
                                Iran
                            </option>
                            <option value="Iraq">
                                Iraq
                            </option>
                            <option value="Ireland">
                                Ireland
                            </option>
                            <option value="Isle of Man">
                                Isle of Man
                            </option>
                            <option value="Israel">
                                Israel
                            </option>
                            <option value="Italy">
                                Italy
                            </option>
                            <option value="Jamaica">
                                Jamaica
                            </option>
                            <option value="Japan">
                                Japan
                            </option>
                            <option value="Jersey">
                                Jersey
                            </option>
                            <option value="Jordan">
                                Jordan
                            </option>
                            <option value="Kazakhstan">
                                Kazakhstan
                            </option>
                            <option value="Kenya">
                                Kenya
                            </option>
                            <option value="Kiribati">
                                Kiribati
                            </option>
                            <option value="Kuwait">
                                Kuwait
                            </option>
                            <option value="Kyrgyzstan">
                                Kyrgyzstan
                            </option>
                            <option value="Laos">
                                Laos
                            </option>
                            <option value="Latvia">
                                Latvia
                            </option>
                            <option value="Lebanon">
                                Lebanon
                            </option>
                            <option value="Lesotho">
                                Lesotho
                            </option>
                            <option value="Liberia">
                                Liberia
                            </option>
                            <option value="Libya">
                                Libya
                            </option>
                            <option value="Liechtenstein">
                                Liechtenstein
                            </option>
                            <option value="Lithuania">
                                Lithuania
                            </option>
                            <option value="Luxembourg">
                                Luxembourg
                            </option>
                            <option value="Macao SAR China">
                                Macao SAR China
                            </option>
                            <option value="Madagascar">
                                Madagascar
                            </option>
                            <option value="Malawi">
                                Malawi
                            </option>
                            <option value="Malaysia">
                                Malaysia
                            </option>
                            <option value="Maldives">
                                Maldives
                            </option>
                            <option value="Mali">
                                Mali
                            </option>
                            <option value="Malta">
                                Malta
                            </option>
                            <option value="Marshall Islands">
                                Marshall Islands
                            </option>
                            <option value="Martinique">
                                Martinique
                            </option>
                            <option value="Mauritania">
                                Mauritania
                            </option>
                            <option value="Mauritius">
                                Mauritius
                            </option>
                            <option value="Mayotte">
                                Mayotte
                            </option>
                            <option value="Mexico">
                                Mexico
                            </option>
                            <option value="Micronesia">
                                Micronesia
                            </option>
                            <option value="Moldova">
                                Moldova
                            </option>
                            <option value="Monaco">
                                Monaco
                            </option>
                            <option value="Mongolia">
                                Mongolia
                            </option>
                            <option value="Montenegro">
                                Montenegro
                            </option>
                            <option value="Montserrat">
                                Montserrat
                            </option>
                            <option value="Morocco">
                                Morocco
                            </option>
                            <option value="Mozambique">
                                Mozambique
                            </option>
                            <option value="Myanmar (Burma)">
                                Myanmar (Burma)
                            </option>
                            <option value="Namibia">
                                Namibia
                            </option>
                            <option value="Nauru">
                                Nauru
                            </option>
                            <option value="Nepal">
                                Nepal
                            </option>
                            <option value="Netherlands">
                                Netherlands
                            </option>
                            <option value="New Caledonia">
                                New Caledonia
                            </option>
                            <option value="New Zealand">
                                New Zealand
                            </option>
                            <option value="Nicaragua">
                                Nicaragua
                            </option>
                            <option value="Niger">
                                Niger
                            </option>
                            <option value="Nigeria">
                                Nigeria
                            </option>
                            <option value="Niue">
                                Niue
                            </option>
                            <option value="Norfolk Island">
                                Norfolk Island
                            </option>
                            <option value="North Korea">
                                North Korea
                            </option>
                            <option value="North Macedonia">
                                North Macedonia
                            </option>
                            <option value="Northern Mariana Islands">
                                Northern Mariana Islands
                            </option>
                            <option value="Norway">
                                Norway
                            </option>
                            <option value="Oman">
                                Oman
                            </option>
                            <option value="Pakistan">
                                Pakistan
                            </option>
                            <option value="Palau">
                                Palau
                            </option>
                            <option value="Palestinian Territories">
                                Palestinian Territories
                            </option>
                            <option value="Panama">
                                Panama
                            </option>
                            <option value="Papua New Guinea">
                                Papua New Guinea
                            </option>
                            <option value="Paraguay">
                                Paraguay
                            </option>
                            <option value="Peru">
                                Peru
                            </option>
                            <option value="Philippines">
                                Philippines
                            </option>
                            <option value="Pitcairn Islands">
                                Pitcairn Islands
                            </option>
                            <option value="Poland">
                                Poland
                            </option>
                            <option value="Portugal">
                                Portugal
                            </option>
                            <option value="Puerto Rico">
                                Puerto Rico
                            </option>
                            <option value="Qatar">
                                Qatar
                            </option>
                            <option value="Réunion">
                                Réunion
                            </option>
                            <option value="Romania">
                                Romania
                            </option>
                            <option value="Russia">
                                Russia
                            </option>
                            <option value="Rwanda">
                                Rwanda
                            </option>
                            <option value="Samoa">
                                Samoa
                            </option>
                            <option value="San Marino">
                                San Marino
                            </option>
                            <option value="São Tomé &amp; Príncipe">
                                São Tomé &amp; Príncipe
                            </option>
                            <option value="Saudi Arabia">
                                Saudi Arabia
                            </option>
                            <option value="Senegal">
                                Senegal
                            </option>
                            <option value="Serbia">
                                Serbia
                            </option>
                            <option value="Seychelles">
                                Seychelles
                            </option>
                            <option value="Sierra Leone">
                                Sierra Leone
                            </option>
                            <option value="Singapore">
                                Singapore
                            </option>
                            <option value="Sint Maarten">
                                Sint Maarten
                            </option>
                            <option value="Slovakia">
                                Slovakia
                            </option>
                            <option value="Slovenia">
                                Slovenia
                            </option>
                            <option value="Solomon Islands">
                                Solomon Islands
                            </option>
                            <option value="Somalia">
                                Somalia
                            </option>
                            <option value="South Africa">
                                South Africa
                            </option>
                            <option value="South Georgia &amp; South Sandwich Islands">
                                South Georgia &amp; South Sandwich Islands
                            </option>
                            <option value="South Korea">
                                South Korea
                            </option>
                            <option value="South Sudan">
                                South Sudan
                            </option>
                            <option value="Spain">
                                Spain
                            </option>
                            <option value="Sri Lanka">
                                Sri Lanka
                            </option>
                            <option value="St. Barthélemy">
                                St. Barthélemy
                            </option>
                            <option value="St. Helena">
                                St. Helena
                            </option>
                            <option value="St. Kitts & Nevis">
                                St. Kitts & Nevis
                            </option>
                            <option value="St. Lucia">
                                St. Lucia
                            </option>
                            <option value="St. Martin">
                                St. Martin
                            </option>
                            <option value="St. Pierre & Miquelon">
                                St. Pierre & Miquelon
                            </option>
                            <option value="St. Vincent & Grenadines">
                                St. Vincent & Grenadines
                            </option>
                            <option value="Sudan">
                                Sudan
                            </option>
                            <option value="Suriname">
                                Suriname
                            </option>
                            <option value="Svalbard & Jan Mayen">
                                Svalbard & Jan Mayen
                            </option>
                            <option value="Sweden">
                                Sweden
                            </option>
                            <option value="Switzerland">
                                Switzerland
                            </option>
                            <option value="Syria">
                                Syria
                            </option>
                            <option value="Taiwan">
                                Taiwan
                            </option>
                            <option value="Tajikistan">
                                Tajikistan
                            </option>
                            <option value="Tanzania">
                                Tanzania
                            </option>
                            <option value="Thailand">
                                Thailand
                            </option>
                            <option value="Timor-Leste">
                                Timor-Leste
                            </option>
                            <option value="Togo">
                                Togo
                            </option>
                            <option value="Tokelau">
                                Tokelau
                            </option>
                            <option value="Tonga">
                                Tonga
                            </option>
                            <option value="Trinidad & Tobago">
                                Trinidad & Tobago
                            </option>
                            <option value="Tunisia">
                                Tunisia
                            </option>
                            <option value="Turkey">
                                Turkey
                            </option>
                            <option value="Turkmenistan">
                                Turkmenistan
                            </option>
                            <option value="Turks & Caicos Islands">
                                Turks & Caicos Islands
                            </option>
                            <option value="Tuvalu">
                                Tuvalu
                            </option>
                            <option value="U.S. Outlying Islands">
                                U.S. Outlying Islands
                            </option>
                            <option value="U.S. Virgin Islands">
                                U.S. Virgin Islands
                            </option>
                            <option value="Uganda">
                                Uganda
                            </option>
                            <option value="Ukraine">
                                Ukraine
                            </option>
                            <option value="United Arab Emirates">
                                United Arab Emirates
                            </option>
                            <option value="United Kingdom">
                                United Kingdom
                            </option>
                            <option value="United States">
                                United States
                            </option>
                            <option value="Uruguay">
                                Uruguay
                            </option>
                            <option value="Uzbekistan">
                                Uzbekistan
                            </option>
                            <option value="Vanuatu">
                                Vanuatu
                            </option>
                            <option value="Vatican City">
                                Vatican City
                            </option>
                            <option value="Venezuela">
                                Venezuela
                            </option>
                            <option value="Vietnam">
                                Vietnam
                            </option>
                            <option value="Wallis & Futuna">
                                Wallis & Futuna
                            </option>
                            <option value="Western Sahara">
                                Western Sahara
                            </option>
                            <option value="Yemen">
                                Yemen
                            </option>
                            <option value="Zambia">
                                Zambia
                            </option>
                            <option value="Zimbabwe">
                                Zimbabwe
                            </option>
                        </select>
                    </div>
                    <div class="form-group col-md-6 running-outputDiv business-sector">
                        <label>City - શહેર *</label>
                        <input name="business_city" id="business_city" class="form-control" type="text">
                        <small class="text-danger" id="error-business_city">
                            @error('business_name')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>

                    <div class="form-group col-md-4 job-sector">
                        <label>Country - દેશ *</label>
                        <select class="form-select" id="job_country" name="job_country">
                            <option value="">Select Country</option>
                            <option value="Afghanistan">
                                Afghanistan
                            </option>
                            <option value="Åland Islands">
                                Åland Islands
                            </option>
                            <option value="Albania">
                                Albania
                            </option>
                            <option value="Algeria">
                                Algeria
                            </option>
                            <option value="American Samoa">
                                American Samoa
                            </option>
                            <option value="Andorra">
                                Andorra
                            </option>
                            <option value="Angola">
                                Angola
                            </option>
                            <option value="Anguilla">
                                Anguilla
                            </option>
                            <option value="Antarctica">
                                Antarctica
                            </option>
                            <option value="Antigua & Barbuda">
                                Antigua & Barbuda
                            </option>
                            <option value="Argentina">
                                Argentina
                            </option>
                            <option value="Armenia">
                                Armenia
                            </option>
                            <option value="Aruba">
                                Aruba
                            </option>
                            <option value="Australia">
                                Australia
                            </option>
                            <option value="Austria">
                                Austria
                            </option>
                            <option value="Azerbaijan">
                                Azerbaijan
                            </option>
                            <option value="Bahamas">
                                Bahamas
                            </option>
                            <option value="Bahrain">
                                Bahrain
                            </option>
                            <option value="Bangladesh">
                                Bangladesh
                            </option>
                            <option value="Barbados">
                                Barbados
                            </option>
                            <option value="Belarus">
                                Belarus
                            </option>
                            <option value="Belgium">
                                Belgium
                            </option>
                            <option value="Belize">
                                Belize
                            </option>
                            <option value="Benin">
                                Benin
                            </option>
                            <option value="Bermuda">
                                Bermuda
                            </option>
                            <option value="Bhutan">
                                Bhutan
                            </option>
                            <option value="Bolivia">
                                Bolivia
                            </option>
                            <option value="Bosnia &amp; Herzegovina">
                                Bosnia &amp; Herzegovina
                            </option>
                            <option value="Botswana">
                                Botswana
                            </option>
                            <option value="Bouvet Island">
                                Bouvet Island
                            </option>
                            <option value="Brazil">
                                Brazil
                            </option>
                            <option value="British Indian Ocean Territory">
                                British Indian Ocean Territory
                            </option>
                            <option value="British Virgin Islands">
                                British Virgin Islands
                            </option>
                            <option value="Brunei">
                                Brunei
                            </option>
                            <option value="Bulgaria">
                                Bulgaria
                            </option>
                            <option value="Burkina Faso">
                                Burkina Faso
                            </option>
                            <option value="Burundi">
                                Burundi
                            </option>
                            <option value="Cambodia">
                                Cambodia
                            </option>
                            <option value="Cameroon">
                                Cameroon
                            </option>
                            <option value="Canada">
                                Canada
                            </option>
                            <option value="Cape Verde">
                                Cape Verde
                            </option>
                            <option value="Caribbean Netherlands">
                                Caribbean Netherlands
                            </option>
                            <option value="Cayman Islands">
                                Cayman Islands
                            </option>
                            <option value="Central African Republic">
                                Central African Republic
                            </option>
                            <option value="Chad">
                                Chad
                            </option>
                            <option value="Chile">
                                Chile
                            </option>
                            <option value="China">
                                China
                            </option>
                            <option value="Christmas Island">
                                Christmas Island
                            </option>
                            <option value="Cocos (Keeling) Islands">
                                Cocos (Keeling) Islands
                            </option>
                            <option value="Colombia">
                                Colombia
                            </option>
                            <option value="Comoros">
                                Comoros
                            </option>
                            <option value="Congo - Brazzaville">
                                Congo - Brazzaville
                            </option>
                            <option value="Congo - Kinshasa">
                                Congo - Kinshasa
                            </option>
                            <option value="Cook Islands">
                                Cook Islands
                            </option>
                            <option value="Costa Rica">
                                Costa Rica
                            </option>
                            <option value="Côte d’Ivoire">
                                Côte d’Ivoire
                            </option>
                            <option value="Croatia">
                                Croatia
                            </option>
                            <option value="Cuba">
                                Cuba
                            </option>
                            <option value="Curaçao">
                                Curaçao
                            </option>
                            <option value="Cyprus">
                                Cyprus
                            </option>
                            <option value="Czechia">
                                Czechia
                            </option>
                            <option value="Denmark">
                                Denmark
                            </option>
                            <option value="Djibouti">
                                Djibouti
                            </option>
                            <option value="Dominica">
                                Dominica
                            </option>
                            <option value="Dominican Republic">
                                Dominican Republic
                            </option>
                            <option value="Ecuador">
                                Ecuador
                            </option>
                            <option value="Egypt">
                                Egypt
                            </option>
                            <option value="El Salvador">
                                El Salvador
                            </option>
                            <option value="Equatorial Guinea">
                                Equatorial Guinea
                            </option>
                            <option value="Eritrea">
                                Eritrea
                            </option>
                            <option value="Estonia">
                                Estonia
                            </option>
                            <option value="Eswatini">
                                Eswatini
                            </option>
                            <option value="Ethiopia">
                                Ethiopia
                            </option>
                            <option value="Falkland Islands">
                                Falkland Islands
                            </option>
                            <option value="Faroe Islands">
                                Faroe Islands
                            </option>
                            <option value="Fiji">
                                Fiji
                            </option>
                            <option value="Finland">
                                Finland
                            </option>
                            <option value="France">
                                France
                            </option>
                            <option value="French Guiana">
                                French Guiana
                            </option>
                            <option value="French Polynesia">
                                French Polynesia
                            </option>
                            <option value="French Southern Territories">
                                French Southern Territories
                            </option>
                            <option value="Gabon">
                                Gabon
                            </option>
                            <option value="Gambia">
                                Gambia
                            </option>
                            <option value="Georgia">
                                Georgia
                            </option>
                            <option value="Germany">
                                Germany
                            </option>
                            <option value="Ghana">
                                Ghana
                            </option>
                            <option value="Gibraltar">
                                Gibraltar
                            </option>
                            <option value="Greece">
                                Greece
                            </option>
                            <option value="Greenland">
                                Greenland
                            </option>
                            <option value="Grenada">
                                Grenada
                            </option>
                            <option value="Guadeloupe">
                                Guadeloupe
                            </option>
                            <option value="Guam">
                                Guam
                            </option>
                            <option value="Guatemala">
                                Guatemala
                            </option>
                            <option value="Guernsey">
                                Guernsey
                            </option>
                            <option value="Guinea">
                                Guinea
                            </option>
                            <option value="Guinea-Bissau">
                                Guinea-Bissau
                            </option>
                            <option value="Guyana">
                                Guyana
                            </option>
                            <option value="Haiti">
                                Haiti
                            </option>
                            <option value="Heard &amp; McDonald Islands">
                                Heard &amp; McDonald Islands
                            </option>
                            <option value="Honduras">
                                Honduras
                            </option>
                            <option value="Hong Kong SAR China">
                                Hong Kong SAR China
                            </option>
                            <option value="Hungary">
                                Hungary
                            </option>
                            <option value="Iceland">
                                Iceland
                            </option>
                            <option value="India" selected="">
                                India
                            </option>
                            <option value="Indonesia">
                                Indonesia
                            </option>
                            <option value="Iran">
                                Iran
                            </option>
                            <option value="Iraq">
                                Iraq
                            </option>
                            <option value="Ireland">
                                Ireland
                            </option>
                            <option value="Isle of Man">
                                Isle of Man
                            </option>
                            <option value="Israel">
                                Israel
                            </option>
                            <option value="Italy">
                                Italy
                            </option>
                            <option value="Jamaica">
                                Jamaica
                            </option>
                            <option value="Japan">
                                Japan
                            </option>
                            <option value="Jersey">
                                Jersey
                            </option>
                            <option value="Jordan">
                                Jordan
                            </option>
                            <option value="Kazakhstan">
                                Kazakhstan
                            </option>
                            <option value="Kenya">
                                Kenya
                            </option>
                            <option value="Kiribati">
                                Kiribati
                            </option>
                            <option value="Kuwait">
                                Kuwait
                            </option>
                            <option value="Kyrgyzstan">
                                Kyrgyzstan
                            </option>
                            <option value="Laos">
                                Laos
                            </option>
                            <option value="Latvia">
                                Latvia
                            </option>
                            <option value="Lebanon">
                                Lebanon
                            </option>
                            <option value="Lesotho">
                                Lesotho
                            </option>
                            <option value="Liberia">
                                Liberia
                            </option>
                            <option value="Libya">
                                Libya
                            </option>
                            <option value="Liechtenstein">
                                Liechtenstein
                            </option>
                            <option value="Lithuania">
                                Lithuania
                            </option>
                            <option value="Luxembourg">
                                Luxembourg
                            </option>
                            <option value="Macao SAR China">
                                Macao SAR China
                            </option>
                            <option value="Madagascar">
                                Madagascar
                            </option>
                            <option value="Malawi">
                                Malawi
                            </option>
                            <option value="Malaysia">
                                Malaysia
                            </option>
                            <option value="Maldives">
                                Maldives
                            </option>
                            <option value="Mali">
                                Mali
                            </option>
                            <option value="Malta">
                                Malta
                            </option>
                            <option value="Marshall Islands">
                                Marshall Islands
                            </option>
                            <option value="Martinique">
                                Martinique
                            </option>
                            <option value="Mauritania">
                                Mauritania
                            </option>
                            <option value="Mauritius">
                                Mauritius
                            </option>
                            <option value="Mayotte">
                                Mayotte
                            </option>
                            <option value="Mexico">
                                Mexico
                            </option>
                            <option value="Micronesia">
                                Micronesia
                            </option>
                            <option value="Moldova">
                                Moldova
                            </option>
                            <option value="Monaco">
                                Monaco
                            </option>
                            <option value="Mongolia">
                                Mongolia
                            </option>
                            <option value="Montenegro">
                                Montenegro
                            </option>
                            <option value="Montserrat">
                                Montserrat
                            </option>
                            <option value="Morocco">
                                Morocco
                            </option>
                            <option value="Mozambique">
                                Mozambique
                            </option>
                            <option value="Myanmar (Burma)">
                                Myanmar (Burma)
                            </option>
                            <option value="Namibia">
                                Namibia
                            </option>
                            <option value="Nauru">
                                Nauru
                            </option>
                            <option value="Nepal">
                                Nepal
                            </option>
                            <option value="Netherlands">
                                Netherlands
                            </option>
                            <option value="New Caledonia">
                                New Caledonia
                            </option>
                            <option value="New Zealand">
                                New Zealand
                            </option>
                            <option value="Nicaragua">
                                Nicaragua
                            </option>
                            <option value="Niger">
                                Niger
                            </option>
                            <option value="Nigeria">
                                Nigeria
                            </option>
                            <option value="Niue">
                                Niue
                            </option>
                            <option value="Norfolk Island">
                                Norfolk Island
                            </option>
                            <option value="North Korea">
                                North Korea
                            </option>
                            <option value="North Macedonia">
                                North Macedonia
                            </option>
                            <option value="Northern Mariana Islands">
                                Northern Mariana Islands
                            </option>
                            <option value="Norway">
                                Norway
                            </option>
                            <option value="Oman">
                                Oman
                            </option>
                            <option value="Pakistan">
                                Pakistan
                            </option>
                            <option value="Palau">
                                Palau
                            </option>
                            <option value="Palestinian Territories">
                                Palestinian Territories
                            </option>
                            <option value="Panama">
                                Panama
                            </option>
                            <option value="Papua New Guinea">
                                Papua New Guinea
                            </option>
                            <option value="Paraguay">
                                Paraguay
                            </option>
                            <option value="Peru">
                                Peru
                            </option>
                            <option value="Philippines">
                                Philippines
                            </option>
                            <option value="Pitcairn Islands">
                                Pitcairn Islands
                            </option>
                            <option value="Poland">
                                Poland
                            </option>
                            <option value="Portugal">
                                Portugal
                            </option>
                            <option value="Puerto Rico">
                                Puerto Rico
                            </option>
                            <option value="Qatar">
                                Qatar
                            </option>
                            <option value="Réunion">
                                Réunion
                            </option>
                            <option value="Romania">
                                Romania
                            </option>
                            <option value="Russia">
                                Russia
                            </option>
                            <option value="Rwanda">
                                Rwanda
                            </option>
                            <option value="Samoa">
                                Samoa
                            </option>
                            <option value="San Marino">
                                San Marino
                            </option>
                            <option value="São Tomé &amp; Príncipe">
                                São Tomé &amp; Príncipe
                            </option>
                            <option value="Saudi Arabia">
                                Saudi Arabia
                            </option>
                            <option value="Senegal">
                                Senegal
                            </option>
                            <option value="Serbia">
                                Serbia
                            </option>
                            <option value="Seychelles">
                                Seychelles
                            </option>
                            <option value="Sierra Leone">
                                Sierra Leone
                            </option>
                            <option value="Singapore">
                                Singapore
                            </option>
                            <option value="Sint Maarten">
                                Sint Maarten
                            </option>
                            <option value="Slovakia">
                                Slovakia
                            </option>
                            <option value="Slovenia">
                                Slovenia
                            </option>
                            <option value="Solomon Islands">
                                Solomon Islands
                            </option>
                            <option value="Somalia">
                                Somalia
                            </option>
                            <option value="South Africa">
                                South Africa
                            </option>
                            <option value="South Georgia &amp; South Sandwich Islands">
                                South Georgia &amp; South Sandwich Islands
                            </option>
                            <option value="South Korea">
                                South Korea
                            </option>
                            <option value="South Sudan">
                                South Sudan
                            </option>
                            <option value="Spain">
                                Spain
                            </option>
                            <option value="Sri Lanka">
                                Sri Lanka
                            </option>
                            <option value="St. Barthélemy">
                                St. Barthélemy
                            </option>
                            <option value="St. Helena">
                                St. Helena
                            </option>
                            <option value="St. Kitts & Nevis">
                                St. Kitts & Nevis
                            </option>
                            <option value="St. Lucia">
                                St. Lucia
                            </option>
                            <option value="St. Martin">
                                St. Martin
                            </option>
                            <option value="St. Pierre & Miquelon">
                                St. Pierre & Miquelon
                            </option>
                            <option value="St. Vincent & Grenadines">
                                St. Vincent & Grenadines
                            </option>
                            <option value="Sudan">
                                Sudan
                            </option>
                            <option value="Suriname">
                                Suriname
                            </option>
                            <option value="Svalbard & Jan Mayen">
                                Svalbard & Jan Mayen
                            </option>
                            <option value="Sweden">
                                Sweden
                            </option>
                            <option value="Switzerland">
                                Switzerland
                            </option>
                            <option value="Syria">
                                Syria
                            </option>
                            <option value="Taiwan">
                                Taiwan
                            </option>
                            <option value="Tajikistan">
                                Tajikistan
                            </option>
                            <option value="Tanzania">
                                Tanzania
                            </option>
                            <option value="Thailand">
                                Thailand
                            </option>
                            <option value="Timor-Leste">
                                Timor-Leste
                            </option>
                            <option value="Togo">
                                Togo
                            </option>
                            <option value="Tokelau">
                                Tokelau
                            </option>
                            <option value="Tonga">
                                Tonga
                            </option>
                            <option value="Trinidad & Tobago">
                                Trinidad & Tobago
                            </option>
                            <option value="Tunisia">
                                Tunisia
                            </option>
                            <option value="Turkey">
                                Turkey
                            </option>
                            <option value="Turkmenistan">
                                Turkmenistan
                            </option>
                            <option value="Turks & Caicos Islands">
                                Turks & Caicos Islands
                            </option>
                            <option value="Tuvalu">
                                Tuvalu
                            </option>
                            <option value="U.S. Outlying Islands">
                                U.S. Outlying Islands
                            </option>
                            <option value="U.S. Virgin Islands">
                                U.S. Virgin Islands
                            </option>
                            <option value="Uganda">
                                Uganda
                            </option>
                            <option value="Ukraine">
                                Ukraine
                            </option>
                            <option value="United Arab Emirates">
                                United Arab Emirates
                            </option>
                            <option value="United Kingdom">
                                United Kingdom
                            </option>
                            <option value="United States">
                                United States
                            </option>
                            <option value="Uruguay">
                                Uruguay
                            </option>
                            <option value="Uzbekistan">
                                Uzbekistan
                            </option>
                            <option value="Vanuatu">
                                Vanuatu
                            </option>
                            <option value="Vatican City">
                                Vatican City
                            </option>
                            <option value="Venezuela">
                                Venezuela
                            </option>
                            <option value="Vietnam">
                                Vietnam
                            </option>
                            <option value="Wallis & Futuna">
                                Wallis & Futuna
                            </option>
                            <option value="Western Sahara">
                                Western Sahara
                            </option>
                            <option value="Yemen">
                                Yemen
                            </option>
                            <option value="Zambia">
                                Zambia
                            </option>
                            <option value="Zimbabwe">
                                Zimbabwe
                            </option>
                        </select>
                    </div>
                    <div class="form-group col-md-4 job-sector">
                        <label>City - શહેર *</label>
                        <input name="job_city" id="job_city" class="form-control" type="text">
                    </div>
                    <small class="text-danger" id="error-job_city"></small>
                    <div class="form-group col-md-12 running-outputDiv business-sector">
                        <label><input type="checkbox" id="iSameAsMainAddress" name="iSameAsMainAddress"> As per Above
                            Address
                            - ઉપરના મૂળ સરનામા મુજબ *</label>
                        <input id="current_address" name="current_address" class="form-control" type="text">
                        <small class="text-danger" id="error-file-upload">
                            @error('current_address')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>

                    <div class="form-group col-md-6" id="job-outputdiv">
                        <label><input type="checkbox" id="runningaddress" name="runningaddress"> As per Above Address
                            - ઉપરના
                            મૂળ સરનામા મુજબ *</label>
                        <input id="current_runningaddress" name="current_runningaddress" class="form-control"
                            type="text">
                    </div>

                    <div class="form-group col-md-6 radio-block running-outputDiv business-sector">
                        <label>Any SKLPS students work in your company?</label>
                        <div class="radio-inner-block d-flex">
                            <label><input type="radio" name="students_work_company" id="yesRadio" checked
                                    value="Yes">
                                Yes</label>
                            <label><input type="radio" name="students_work_company" id="noRadio" value="No">
                                No</label>
                        </div>
                    </div>
                    <div class="form-group col-md-6 many-resources running-outputDiv business-sector">
                        <label>How Many Resources - કેટલા સંસાધનો</label>
                        <input name="many_resources" class="form-control" type="text">
                    </div>
                    <div id="job-outputdiv" style="display: none;">

                    </div>
                </div>
                <h2 class="sklps_heading">Other Details:</h2>
                <div class="row form-row">
                    <div class="form-group col-md-6">
                        <label>Your Feedback for Samaj</label>
                        <textarea name="feedback_samaj" class="form-control"></textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Any Suggestions</label>
                        <textarea name="suggestions" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row form-row foter">
                    <input type="checkbox" id="checkbox" name="attend_samaj_innugration" value="Yes"> <label>Are
                        you going to
                        attend New Samaj Innugration Function on 21 - 22 Dec 2024?</label>
                </div>
                <div class="row form-row">
                    <div class="form-group col-md-12 mb-0">
                        <input id="submit" class="btn theme-btn" type="submit" value="SUBMIT" name="getstarted"
                            onclick="return validateForm()">
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="modal fade" id="cropImagePop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Image</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row col-12">
                        <div id="upload-demo" class="center-block"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-deg="90" class="btn btn-warning rotateImageBtn"><svg
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z" />
                            <path
                                d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z" />
                        </svg></button>
                    <button type="button" data-deg="-90" class="btn btn-warning rotateImageBtn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z" />
                            <path
                                d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z" />
                        </svg>
                    </button>
                    <button type="button" class="btn btn-secondary" id="closeBtn"
                        data-bs-dismiss="modal">Close</button>
                    <button type="button" id="cropImageBtn" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="{{ asset('js/yearpicker.js') }}"></script>
    <script src="{{ asset('js/moment-with-locales.min.js.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="{{ asset('js/notyf.min.js') }}"></script>
    <script src="{{ asset('js/flatpickr.min.js') }}"></script>
    <script src="{{ asset('js/croppie.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            // Initialize the drag and drop functionality
            var dragDropArea = $('#drag-drop-area');

            // Prevent default behavior to allow dropping files
            dragDropArea.on('dragover', function(e) {
                e.preventDefault();
                dragDropArea.addClass('drag-over');
            });

            dragDropArea.on('dragleave', function() {
                dragDropArea.removeClass('drag-over');
            });

            dragDropArea.on('drop', function(e) {
                e.preventDefault();
                dragDropArea.removeClass('drag-over');

                var files = e.originalEvent.dataTransfer.files;
                if (files.length > 0) {
                    // Handle dropped files (you may choose to use only the first file)
                    handleDroppedFile(files[0]);
                }
            });

            // Modify your existing change event handler to handle file input change
            $(document).on('change', '.imageUpload', function() {
                handleDroppedFile(this.files[0]);
            });

            function handleDroppedFile(file) {
                // Your existing logic for file handling
                if (file) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('.upload-demo').addClass('ready');
                        $('#cropImagePop').modal('show');
                        rawImg = e.target.result;
                    }
                    reader.readAsDataURL(file);
                } else {
                    console.log("Invalid file");
                }
            }
        });
    </script>
    <script type="text/javascript">
        var admission_year_yearpicker = 2024
        jQuery('.admission_year_yearpicker').yearpicker({
            startYear: 1995,
            year: admission_year_yearpicker,
            endYear: moment().year(),
        });

        var leave_year_yearpicker = 2024
        jQuery('.leave_year_yearpicker').yearpicker({
            startYear: 1995,
            year: leave_year_yearpicker,
            endYear: moment().year(),
        });

        var leave_year_yearpicker = 2024
        jQuery('.established_year').yearpicker({
            startYear: 1995,
            year: leave_year_yearpicker,
            endYear: moment().year(),
        });
    </script>
    <script type="text/javascript">
        // Show default business output divs on page load
        document.addEventListener('DOMContentLoaded', function() {
            var defaultBusinessOutputDivs = document.getElementsByClassName('running-outputDiv');
            for (var i = 0; i < defaultBusinessOutputDivs.length; i++) {
                defaultBusinessOutputDivs[i].style.display = 'block';
            }
            document.getElementById('job-outputdiv').style.display = 'none'; // Hide job-outputdiv initially
        });

        // Add change event listener to selectCountry dropdown
        document.getElementById('selectCountry').addEventListener('change', function() {
            var selectedValue = this.value;

            // Hide all output divs
            var businessOutputDivs = document.getElementsByClassName('running-outputDiv');
            for (var i = 0; i < businessOutputDivs.length; i++) {
                businessOutputDivs[i].style.display = 'none';
            }
            document.getElementById('job-outputdiv').style.display = 'none';

            // Check the selected value and update content accordingly
            if (selectedValue === 'Finished') {
                for (var i = 0; i < businessOutputDivs.length; i++) {
                    businessOutputDivs[i].style.display = 'block';
                }
            } else if (selectedValue === 'Running') {
                document.getElementById('job-outputdiv').style.display = 'block';
            }
        });
    </script>
    <script type="text/javascript">
        var _validFileExtensions = [".jpg", ".jpeg", ".bmp", ".gif", ".png", ".webp"];

        function ValidateSingleInput(oInput) {
            if (oInput.type == "file") {
                var sFileName = oInput.value;
                // FileSize = oInput.files[0].size;
                filename = oInput.files[0].name;


                if (sFileName.length > 0) {
                    var blnValid = false;
                    for (var j = 0; j < _validFileExtensions.length; j++) {
                        var sCurExtension = _validFileExtensions[j];
                        if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() ==
                            sCurExtension.toLowerCase()) {
                            blnValid = true;
                            break;
                        }
                    }

                    if (!blnValid) {
                        alert("Sorry, " + filename + " is invalid");
                        oInput.value = "";
                        return false;
                    }
                }

            }
            return true;
        }
    </script>
    <script type="text/javascript">
        var $uploadCrop, tempFilename, rawImg, imageId;

        $uploadCrop = $('#upload-demo').croppie({
            viewport: {
                width: 220,
                height: 220,
            },
            boundary: {
                width: 300,

            },
            enableOrientation: true
        });

        function readFile(input) {
            ValidateSingleInput(input);
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('.upload-demo').addClass('ready');
                    $('#cropImagePop').modal('show');
                    rawImg = e.target.result;
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                console.log("Sorry - you're browser doesn't support the FileReader API");
            }
        }

        $(document).on('change', '.imageUpload', function() {
            imageId = $(this).attr('id');
            tempFilename = $(this).val();
            $('#cancelCropBtn').data('id', imageId);
            $('#cropImageBtn').attr('name', $(this).attr('name'));
            readFile(this);
        });

        $(document).on('shown.bs.modal', '#cropImagePop', function() {
            $uploadCrop.croppie('bind', {
                url: rawImg,
            }).then(function() {
                console.log('jQuery bind complete');
            });
        });

        $(document).on('click', '#cropImageBtn', function(ev) {
            $uploadCrop.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function(resp) {
                imageId = $('#cropImageBtn').attr('name');
                if (imageId == 'proof_image') {
                    $('#pimage').attr('src', resp).width(200).height(200).css("display", "block");
                    $('#proofimage').val(resp)
                }
                if (imageId == 'user_image') {
                    $('#uimage').attr('src', resp).width(200).height(200).css("display", "block");
                    $('#userimage').val(resp)
                }
                $('#cropImagePop').modal('hide');
            });
        });
        $(document).on('click', '.rotateImageBtn', function(ev) {
            $uploadCrop.croppie('rotate', parseInt($(this).data('deg')));
        });
    </script>
    <script>
        flatpickr('.flatpickr', {
            enableTime: false,
            defaultDate: null,
            maxDate: "today",
            dateFormat: "d-m-Y",

        })
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            const mobile_number = document.querySelector("#mobile_number");
            window.intlTelInput(mobile_number, {
                initialCountry: "IN",
                hiddenInput: "mobile_number_dialCode",
                nationalMode: false,
                separateDialCode: true,
                formatOnDisplay: false,
                utilsScript: "https://kumarvidhyadham.sklpsbhuj.com/assets/front/vendor/intl-tel/js/utils.js",
            });
            var iti = window.intlTelInputGlobals.getInstance(mobile_number);

            var old_full_mobile_mumber = "";
            if (old_full_mobile_mumber != '') {
                iti.setNumber("+" + old_full_mobile_mumber);
            }


            mobile_number.addEventListener('input', function() {
                var dialcode = iti.getSelectedCountryData().dialCode;

                $("#mobile_number_dialCode").val(dialcode);
                $("#full_mobile_number").val(dialcode + $(this).val());

                if ($('#iSameAsMobileNumber').is(":checked") == true) {
                    var whatsappNumberInput = window.intlTelInputGlobals.getInstance(document.querySelector(
                        "#whatsapp_number"));
                    var newNumber = "+" + $("#mobile_number_dialCode").val() + $("#mobile_number")
                        .val(); // Replace this with your desired value
                    $("#whatsapp_number_dialCode").val($("#mobile_number_dialCode").val());
                    whatsappNumberInput.setNumber($.trim(newNumber));
                    $("#full_mobile_number").val(dialcode + $(this).val());
                }
            });
            mobile_number.addEventListener('countrychange', () => {
                var dialcode = iti.getSelectedCountryData().dialCode;
                $("#mobile_number_dialCode").val(dialcode);

                $("#full_mobile_number").val(dialcode + $("#mobile_number").val());
                if ($('#iSameAsMobileNumber').is(":checked") == true) {
                    var whatsappNumberInput = window.intlTelInputGlobals.getInstance(document.querySelector(
                        "#whatsapp_number"));
                    var newNumber = "+" + $("#mobile_number_dialCode").val() + $("#mobile_number")
                        .val(); // Replace this with your desired value
                    $("#whatsapp_number_dialCode").val($("#mobile_number_dialCode").val());
                    whatsappNumberInput.setNumber($.trim(newNumber));


                }
            });

            const whatsapp_number = document.querySelector("#whatsapp_number");
            window.intlTelInput(whatsapp_number, {
                initialCountry: "IN",
                separateDialCode: true,
                nationalMode: false,
                formatOnDisplay: false,
                utilsScript: "https://kumarvidhyadham.sklpsbhuj.com/assets/front/vendor/intl-tel/js/utils.js",
            });
            var iti1 = window.intlTelInputGlobals.getInstance(whatsapp_number);

            whatsapp_number.addEventListener('input', function() {
                var dialcode = iti1.getSelectedCountryData().dialCode;
                $("#whatsapp_number_dialCode").val(dialcode);
                $("#full_whatsapp_number").val(dialcode + $(this).val());
            });

            whatsapp_number.addEventListener('countrychange', () => {
                var dialcode = iti1.getSelectedCountryData().dialCode;
                $("#whatsapp_number_dialCode").val(dialcode);
                $("#full_whatsapp_number").val(dialcode + $("#whatsapp_number").val());
            });


            var full_whatsapp_number = "";
            if (full_whatsapp_number != '') {
                iti1.setNumber("+" + full_whatsapp_number);
            }
        });


        $("#iSameAsMobileNumber").change(function() {

            if (this.checked) {
                if ($("#mobile_number").val() != '') {
                    $('#whatsapp_number').attr('readonly', true);
                    $('#whatsapp_number').val($("#mobile_number").val());
                    $('#whatsapp_number_dialCode').val($("#mobile_number_dialCode").val());
                    var whatsappNumberInput = window.intlTelInputGlobals.getInstance(document.querySelector(
                        "#whatsapp_number"));
                    var newNumber = "+" + $("#mobile_number_dialCode").val() + $("#mobile_number")
                        .val(); // Replace this with your desired value
                    whatsappNumberInput.setNumber($.trim(newNumber));
                    $("#full_whatsapp_number").val($("#full_mobile_number").val());
                } else {
                    var notyf = new Notyf({
                        position: {
                            x: 'right',
                            y: 'top',
                        }
                    });
                    notyf.error('Please fill Mobile Number First');
                    $(this).prop('checked', false)

                }
            } else {
                $('#whatsapp_number').attr('readonly', false);
                $('#whatsapp_number').val('');
                $('#whatsapp_number_dialCode').val('');
                $("#full_whatsapp_number").val('');
            }
        });
        $("#iSameAsMainAddress").change(function() {

            if (this.checked) {
                if ($("#main_address").val() != '') {
                    $('#current_address').attr('readonly', true);
                    $('#current_address').val($("#main_address").val());
                } else {
                    var notyf = new Notyf({
                        position: {
                            x: 'right',
                            y: 'top',
                        }
                    });
                    notyf.error('Please fill Main Address');
                    $(this).prop('checked', false)
                }
            } else {
                $('#current_address').attr('readonly', false);
                $('#current_address').val('');
            }
        });
        $("#runningaddress").change(function() {

            if (this.checked) {
                if ($("#main_address").val() != '') {
                    $('#current_runningaddress').attr('readonly', true);
                    $('#current_runningaddress').val($("#main_address").val());
                } else {
                    var notyf = new Notyf({
                        position: {
                            x: 'right',
                            y: 'top',
                        }
                    });
                    notyf.error('Please fill Main Address');
                    $(this).prop('checked', false)
                }
            } else {
                $('#current_runningaddress').attr('readonly', false);
                $('#current_runningaddress').val('');
            }
        });
    </script>
    <script type="text/javascript">
        $('#main_address').on('input', function(e) {
            if ($('#iSameAsMainAddress').is(':checked')) {
                $("#current_address").val($(this).val());
            }
        });
        $('#main_address').on('input', function(e) {
            if ($('#runningaddress').is(':checked')) {
                $("#current_runningaddress").val($(this).val());
            }
        });
    </script>
    <script>
        const notyfMe = new Notyf({
            icon: true,
            duration: 6000,
            dismissible: true,
            position: {
                x: 'right',
                y: 'top'
            },
        });

        function errors(message) {
            notyfMe.error({
                message: message,
            });
        }
    </script>
    <script type="text/javascript">
        $('#selectCountry').change(function() {

            if ($(this).val() == 'Finished') {
                $("#selectbusiness").attr("required", true);
                $("#current_runningaddress").attr("required", false);
            } else if ($(this).val() == 'Running') {
                $("#selectbusiness").attr("required", false);
                $("#business_country").attr("required", true);
                $("#current_runningaddress").attr("required", true);
            }
        });

        $('#selectbusiness').change(function() {

            if ($(this).val() == 'Business') {
                $("#business_title").attr("required", true);
                $("#established_year").attr("required", true);
                $("#business_country").attr("required", true);
                $("#business_city").attr("required", true);
                $("#current_address").attr("required", false);
                $("#business_category").attr("required", false);
                $("#total_staff").attr("required", false);
                $("#job_sector").attr("required", false);
                $("#job_city").attr("required", false);
                $("#company_name").attr("required", false);
                $("#designation").attr("required", false);
            } else if ($(this).val() == 'Job') {
                $("#business_title").attr("required", false);
                $("#established_year").attr("required", false);
                $("#business_country").attr("required", false);
                $("#business_city").attr("required", false);
                $("#business_category").attr("required", false);
                $("#total_staff").attr("required", false);
                $("#current_address").attr("required", false);
                $("#job_sector").attr("required", true);
                $("#job_city").attr("required", false);
                $("#company_name").attr("required", false);
                $("#designation").attr("required", false);

            }
        });
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery("input[name='students_work_company']").change(function() {
                if (jQuery("#yesRadio").is(":checked")) {
                    jQuery(".many-resources").show();
                } else {
                    jQuery(".many-resources").hide();
                }
            });
        });
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery("#selectbusiness").change(function() {
                var selectedOption = jQuery(this).val();
                if (selectedOption === "Business") {
                    jQuery(".job-sector").hide();
                    jQuery(".business-sector").show();
                } else if (selectedOption === "Job") {
                    jQuery(".job-sector").show();
                    jQuery(".business-sector").hide();
                }
            });
        });
    </script>
    <script>
        function validateForm() {

            let surname = $("input[name=surname]").val();
            let first_name = $("input[name=first_name]").val();
            let father_name = $("input[name=father_name]").val();
            let mobile_number = $("input[name=mobile_number]").val();
            let user_image = $("input[name=user_image]").val();
            let business_name = $("input[name=business_name]").val();
            let business_city = $("input[name=business_city]").val();
            let address = $("input[name=address]").val();
            let companyname = $("input[name=company_name]").val();
            let jobcity = $("input[name=job_city]").val();
            // var errorMessages = [];
            // var mobilepattern = /^\d{10}$/;

            if (surname !== '') {
                $("#error").text('');
                if (first_name !== '') {
                    $("#error1").text('');
                    if (father_name !== '') {
                        $("#error-father_name").text('');
                        if (mobile_number !== '') {
                            $("#error-mobile_number").text('');
                            if (user_image !== '') {
                                $("#error-user_image").text('');
                                if (business_name !== '') {
                                    $("#error-business_name").text('');
                                    if (business_city !== '') {
                                        $("#error-business_city").text('');
                                        if (address !== '') {
                                            $("#error-address").text('');
                                            if (companyname !== '') {
                                                $("#error-company_name").text('');
                                                if (jobcity !== '') {
                                                    $("#error-job_city").text('');
                                                } else {
                                                    $("#error-job_city").text('please enter job city*');
                                                    $("input[name=job_city]").focus();
                                                }
                                            } else {
                                                $("#error-company_name").text('please enter company name*');
                                                $("input[name=company_name]").focus();
                                            }
                                        } else {
                                            $("#error-address").text('please enter address*');
                                            $("input[name=address]").focus();
                                        }
                                    } else {
                                        $("#error-business_city").text('please enter city*');
                                        $("input[name=business_city]").focus();
                                    }
                                } else {
                                    $("#error-business_name").text('please enter business name');
                                    $("input[name=business_name]").focus();
                                }
                            } else {
                                $("#error-user_image").text('please enter image');
                                $("input[name=user_image]").focus();
                            }
                        } else {
                            $("#error-mobile_number").text('please enter contact');
                            $("input[name=mobile_number]").focus();
                        }
                    } else {
                        $("#error-father_name").text('please enter father name');
                        $("input[name=father_name]").focus();
                    }
                } else {
                    $("#error1").text('please enter first name');
                    $("input[name=first_name]").focus();
                }
            } else {
                $("#error").text('please enter surname');
                $("input[name=surname]").focus();
            }
        }
    </script>

    {{-- <script>
         function validate(){
            let workstatus = $("input[name=work_status]").val();
            let businessname = $("input[name=business_name]").val();


            if(workstatus == "Business"){
               if(businessname !== ""){

               }
            }

         }
    </script> --}}

    {{-- <script>
   function phonenumber(inputtxt)
{
  var phoneno = /^\d{10}$/;
  if((inputtxt.value.match(phoneno))
        {
      return true;
        }
      else
        {
        alert("message");
        return false;
        }
}
</script> --}}


</body>

</html>
