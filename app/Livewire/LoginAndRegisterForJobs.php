<?php

namespace App\Livewire;

use App\Models\AppliedJob;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class LoginAndRegisterForJobs extends Component
{
    use WithFileUploads;
    public $user_full_name;
    public $company_id;
    public $company_name;
    public $company_logo;
    public $user_email;
    public $user_password;
    public $user_mobile_no;
    public $user_address;
    public $user_resume;
    public $user_work_status;
    public $login_password;
    public $password;
    public $login_email;
    public $credentials;
    public $user_type = "Job Seeker";
    public $activeTab = 'register';

    public $showDialogBox = false;

    public $vendor_credentials;
    public function login()
    {
        $this->validate([
            'login_email' => 'required|email',
            'login_password' => 'required',
        ]);

        $this->credentials = [
            'email' => $this->login_email,
            'password' => $this->login_password,
        ];

        if (Auth::attempt($this->credentials)) {
            return redirect('/Jobs');
        }
        $this->addError('login_email', 'Invalid email or password');
    }

    public function vendorLogin()
    {
        $this->validate([
            'company_id' => 'required',
            'password' => 'required',
        ]);

        $this->vendor_credentials = [
            'company_id' => $this->company_id,
            'password' => $this->password,
        ];
        if (Auth::attempt($this->vendor_credentials)) {
            return redirect('/VendorScreen');
        }
        $this->addError('company_id', 'Invalid company id or password');
    }

    public function register()
    {
        $this->validate([
            'user_full_name' => 'required',
            'user_email' => 'required|email|unique:users,email',
            'user_password' => 'required',
            'user_mobile_no' => 'required',
            'user_address' => 'required',
            'user_type' => 'required'
        ]);
        $resumePath = $this->user_resume->store('resumes', 'public');
        User::create([
            'company_id' => $this->company_id,
            'company_name' => $this->company_name,
            'company_logo' => $this->company_logo,
            'user_type' => $this->user_type,
            'full_name' => $this->user_full_name,
            'email' => $this->user_email,
            'password' => $this->user_password,
            'mobile_no' => $this->user_mobile_no,
            'work_status' => $this->user_work_status,
            'address' => $this->user_address,
            'resume' => $resumePath,
        ]);
        return redirect('/Jobs');
    }

    public function render()
    {
        return view('livewire.login-and-register-for-jobs');
    }
}
