<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\ApplyJob;
use App\Models\Business_account;

class BusinessController extends Controller
{
    // Show the form to add a new business
    public function create()
    { $business = Business_account::first();
        return view('business.addBusiness');
    }

    // Process and store the new business
    public function store(Request $request)
    {
        // Validate incoming form data
        $validated = $request->validate([
           'name'=> 'required|string|max:255',                                               
           'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
           'hotline' => 'nullable|string|max:20',
           'customer_mail'=> 'nullable|email|max:255',
           'official_website' => 'nullable|url|max:255',
           'official_facebook' => 'nullable|url|max:255',
           'head_offices' => 'nullable|string|max:500',
           'progress' => 'nullable|string|max:500',
        ]);

        // Store the logo file if it exists and update the path in $validated data
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
            $validated['logo'] = $logoPath;
        }
        if (empty($validated['customer_mail'])) {
            // Lấy email từ bảng business_account (cập nhật logic lấy dữ liệu phù hợp)
            $businessAccount = Business_account::latest()->first(); // Hoặc thêm điều kiện
            $validated['customer_mail'] = $businessAccount->mail ?? null;
        }
        // Create a new record in the businesses table
        Business::create($validated);

        // Redirect back to the form with a success message
        return redirect()->route('login')->with('success', 'Đã tạo thành công, hãy đợi xét duyệt để được đăng bài nhé!');
    }

    public function showLoginForm()
{
    return view('auth.login_business');
}
// public function showLoginForm(Request $request)
// {
    // return redirect()->route('business.dashboard'); // Ví dụ chuyển hướng sau khi login.
// }
     public function showRegisterForm()
    {
        return view('auth.register_business');
    }
    public function createJobforBUS()
    {
        return view('business.createJobForm');
    }
    public function home(Request $request)
    {

        $query = ApplyJob::query();
        // Thêm điều kiện lọc dựa trên input, bỏ qua giá trị mặc định
        if ($request->filled('nameCV')) {
            $query->where('userName', 'like', '%' . $request->input('nameCV') . '%');
        }
        if ($request->filled('stateCV') && $request->input('stateCV') !== '--Trạng thái--') {
            $query->where('state', $request->input('stateCV'));
        }
        if ($request->filled('positionCV')) {
            $query->where('position', 'like', '%' . $request->input('positionCV') . '%');
        }
        if ($request->filled('languageCV') && $request->input('languageCV') !== '--Ngôn ngữ--') {
            $query->where('language', 'like', '%' . $request->input('languageCV') . '%');
        }
        if ($request->filled('experienceCV') && $request->input('experienceCV') !== '--Kinh nghiệm--') {
            $query->where('experience', $request->input('experienceCV'));
        }
        if ($request->filled('interviewDateCV')) {
            $query->where('interviewDate', $request->input('interviewDateCV'));
        }
        // Debug: Hiển thị truy vấn SQL và các bindings
        // dd($query->toSql(), $query->getBindings());
        // Thực thi truy vấn và lấy kết quả
        $results = $query->get();
        return view('business.homeBus', compact('results'))->with('state', '');


    }
public function loginn(Request $request)
{
    $email = $request->input('email');
    $password = $request->input('password');
    if (empty($email) || empty($password)) {
        return redirect()->back()->with('error', 'User Name and Password are required');
    }
    $user = DB::table('business_account')->where('mail', $email)->first();
    if ($user && Hash::check($password, $user->business_password)) {
        Session::put('mail', $user->business_name);
        Session::put('user_id', $user->business_id);
        

            return redirect()->route('business.home');
        
    } else {
        return redirect()->back()->with('error', 'Incorrect User Name or Password');
    }
}
public function login(Request $request)
{
    $email = $request->input('email');
    $password = $request->input('password');

    if (empty($email) || empty($password)) {
        return redirect()->back()->with('error', 'User Name and Password are required');
    }

    // Lấy thông tin user từ bảng business_account
    $user = DB::table('business_account')->where('mail', $email)->first();

    // Kiểm tra user tồn tại và mật khẩu đúng
    if ($user && Hash::check($password, $user->business_password)) {
        // Lấy thông tin business dựa trên user_id
        $business = DB::table('business')->where('customer_mail', $user->mail)->first();

        if ($business) {
            switch ($business->state) {
                case 'Yes':
                    // Đăng nhập thành công, chuyển hướng đến business.home
                    Session::put('mail', $user->business_name);
                    Session::put('user_id', $user->business_id);
                    return redirect()->route('business.home');

                case 'No':
                    // Chuyển hướng đến form addJob
                    return redirect()->route('business.create')->with('error', 'Vui lòng thêm thông tin để được xét duyệt.');

                case 'Waiting':
                    // Hiển thị thông báo
                    return redirect()->back()->with('error', 'Tài khoản của bạn đang được duyệt.');
            }
        } else {
            return redirect()->route('business.create')->with('error', 'Không tìm thấy thông tin doanh nghiệp của bạn. Hãy thêm ngay nhé!');
        }
    } else {
        return redirect()->back()->with('error', 'Incorrect User Name or Password');
    }
}

// app/Http/Controllers/AuthController.php
public function logout(Request $request)
{
    Auth::logout();  // Log the user out
    $request->session()->invalidate();  // Invalidate the session
    $request->session()->regenerateToken();  // Regenerate the CSRF token
    
    return redirect('login');
}
public function businessRegister(Request $request)
{    // Add this line to see if the method is being called

        // Validate input data
        $validated = $request->validate([
             'rg_name' => 'required|max:255',
             'rg_email' => 'required|email|unique:business_account,mail|max:255',
             'rg_password' => 'required|min:6|confirmed',
             'checkAgree' => 'accepted'  
        ]);

        // Create a new user
        $user = Business_account::create([
            'business_name' => $request->rg_name,
            'mail' => $request->rg_email, // Ensure column name matches
            'business_password' => Hash::make($request->rg_password),
            'is_admin' => 2,
        ]);


        return redirect()->route('login')->with('success', 'Đăng ký thành công!');
    
 
}
public function homeBusiness(Request $request)
{
    $query = ApplyJob::query();
// Thêm điều kiện lọc dựa trên input, bỏ qua giá trị mặc định
if ($request->filled('nameCV')) {
    $query->where('userName', 'like', '%' . $request->input('nameCV') . '%');
}
if ($request->filled('stateCV') && $request->input('stateCV') !== '--Trạng thái--') {
    $query->where('state', $request->input('stateCV'));
}
if ($request->filled('positionCV')) {
    $query->where('position', 'like', '%' . $request->input('positionCV') . '%');
}
if ($request->filled('languageCV') && $request->input('languageCV') !== '--Ngôn ngữ--') {
    $query->where('language', 'like', '%' . $request->input('languageCV') . '%');
}
if ($request->filled('experienceCV') && $request->input('experienceCV') !== '--Kinh nghiệm--') {
    $query->where('experience', $request->input('experienceCV'));
}
if ($request->filled('interviewDateCV')) {
    $query->where('interviewDate', $request->input('interviewDateCV'));
}
// Debug: Hiển thị truy vấn SQL và các bindings
// dd($query->toSql(), $query->getBindings());
// Thực thi truy vấn và lấy kết quả
$results = $query->get();
return view('business.homeBusiness', compact('results'))->with('state', '');
}


public function pendingList()
{
    $results = ApplyJob::where('state', 'Waiting')->get();
    return view('business.homeBusiness', compact('results'))->with('state', 'Waiting');
}
    
public function approvedList()
{
    $results = ApplyJob::where('state', 'Yes')->get();
    return view('business.homeBusiness', compact('results'))->with('state', 'Yes');
}
public function interviewList()
{
$state = 'Interview';
$results = ApplyJob::where('state', 'Yes')->get();

return view('business.homeBusiness', compact('results', 'state'));
}


public function updateCv(Request $request)
{
    // Kiểm tra nếu các giá trị cần thiết có trong request
    if ($request->has('cvId') && $request->has('cvState')) {
        $state = $request->input('cvState');
        $id = $request->input('cvId');

        // Cập nhật trạng thái
        $applyJob = ApplyJob::find($id);
        if ($applyJob) {
            $applyJob->state = $state;
            $applyJob->save();
            return response()->json(['message' => 'State updated successfully']);
        } else {
            return response()->json(['message' => 'Apply job not found'], 404);
        }
    }

    // Kiểm tra nếu có thông tin ngày phỏng vấn và ghi chú từ form
    if ($request->has('cvInterviewDate') && $request->has('cvBusinessNote')) {
        $date = $request->input('cvInterviewDate');
        $note = $request->input('cvBusinessNote');
        $id = $request->input('cvId');

        // Cập nhật ngày phỏng vấn và ghi chú
        $applyJob = ApplyJob::find($id);
        if ($applyJob) {
            $applyJob->interviewDate = $date;
            $applyJob->businessNote = $note;
            $applyJob->save();

            // Chuyển hướng về trang admin và thông báo thành công
            
           
        return redirect()->route('homeBusiness', ['action' => 'Yes'])
                             ->with('success', 'CV đã được cập nhật!');
        } else {
            return response()->json(['message' => 'Apply job not found'], 404);
        }
    }

    return response()->json(['message' => 'Invalid data'], 400);
}


}
