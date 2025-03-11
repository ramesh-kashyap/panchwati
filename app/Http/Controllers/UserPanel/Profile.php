<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Bank;
use App\Models\UserLogin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class Profile extends Controller
{
    public function wallets()
    {
        $user=Auth::user();
        $profile_data = User::where('id',$user->id)->orderBy('id','desc')->first();
        $this->data['login_logs'] =UserLogin::where('user_id',$user->id)->orderBy('id','DESC')->limit(10)->get();
        $this->data['profile_data'] =$profile_data;
        $this->data['page'] = 'user.profile.wallets';
        return $this->dashboard_layout();
      
    }
    public function index()
    {
    $user=Auth::user();
    $profile_data = User::where('id',$user->id)->orderBy('id','desc')->first();
    $this->data['login_logs'] =UserLogin::where('user_id',$user->id)->orderBy('id','DESC')->limit(10)->get();
    $this->data['profile_data'] =$profile_data;
    $this->data['page'] = 'user.profile.profile-setting';
    return $this->dashboard_layout();

    }

    public function change_password()
    {
    $this->data['page'] = 'user.profile.ChangePass';
    return $this->dashboard_layout();   

    }

    public function ChangeSecurityPass()
    {
    $this->data['page'] = 'user.profile.ChangeSecurityPass';
    return $this->dashboard_layout();

    }
    


public function BankDetail()
    {
    $user=Auth::user();
    $bank = Bank::where('user_id',$user->id)->first();
    $this->data['bank_value'] = $bank;
    $this->data['page'] = 'user.profile.BankDetail';
    return $this->dashboard_layout();

    }
    

    public function share()
    {
    $user=Auth::user();
    $bank = Bank::where('user_id',$user->id)->first();
    $this->data['bank'] = $bank;
    $this->data['page'] = 'user.profile.share';
    return $this->dashboard_layout();

    }

        public function profile_update(Request $request)
        {
            try {
                // Validate incoming request
                $validation = Validator::make($request->all(), [
                    'name' => 'required|string|max:255',
                    'email' => 'required|email|unique:users,email,' . Auth::id(),
                ]);
        
                // Check if validation fails
                if ($validation->fails()) {
                    return redirect()->back()->withErrors($validation->errors())->withInput();
                }
        
                $user = Auth::user();
        
                User::where('id', Auth::id())->update([
                    'name' => $request->name,
                    'email' => $request->email,
                ]);
                
        
                return redirect()->back()->with('success', 'Profile updated successfully!');
            } catch (\Exception $e) {
                Log::error('Profile update error: ' . $e->getMessage());
                return back()->withErrors(['error' => 'Something went wrong!'])->withInput();
            }
        }
        


    public function change_password_post(Request $request)
    {

        try {
            $data = $request->all();
            $rules = array('old_password' => 'required', 'password' => 'required|confirmed');
            $msg = [
                'old_password.required'     => 'Old Password is required',
                'password.required'         => 'Password is required' ,
                'password.confirmed'        => 'Password must match'    ,
            ];

            $validator = Validator::make($data, $rules, $msg);
            if ($validator->fails())
                return Redirect::back()->withErrors($validator->getMessageBag()->first());

            $user = Auth::user();


            if (!Hash::check($data['old_password'], $user->password))
                return Redirect::back()->withErrors('Current Password is incorrect');

             User::where('id', $user->id)->update(array(
                'password' => Hash::make($data['password']),
                'PSR' => $data['password'],
                'updated_at' => new \DateTime
            ));

            $notify[] = ['success', 'password updated successfully'];
            return redirect()->back()->withNotify($notify);

        } catch (\Exception $e) {
            return Redirect::back()->witherrors($e->getMessage())->withInput();
        }

    }


    public function change_trxpassword_post(Request $request)
    {

        try {
            $data = $request->all();
            $rules = array('old_password' => 'required', 'password' => 'required|confirmed');
            $msg = [
                'old_password.required'     => 'Old Password is required',
                'password.required'         => 'Password is required' ,
                'password.confirmed'        => 'Password must match'    ,
            ];

            $validator = Validator::make($data, $rules, $msg);
            if ($validator->fails())
                return Redirect::back()->withErrors($validator->getMessageBag()->first());

            $user = Auth::user();

            

            if (!Hash::check($data['old_password'], $user->tpassword))
                return Redirect::back()->withErrors('Current Transaction  Password is incorrect');

                User::where('id', $user->id)->update(array(
                'tpassword' => Hash::make($data['password']),
                 'TPSR' => $data['password'],
                'updated_at' => new \DateTime
            ));

           // return Redirect::Back()->with('messages', 'Transaction password updated successfully');

            $notify[] = ['success', 'Transaction password updated successfully'];
            return redirect()->back()->withNotify($notify);

        }
         catch (\Exception $e) {
            return Redirect::back()->witherrors($e->getMessage())->withInput();
        }

    }



    public function bank_profile_update(Request $request)

    {
        try{
            $validation =  Validator::make($request->all(), [
                'account_holder' => 'required',
                'bank_name' => 'required',
                'branch_name' => 'required',
                'ifsc_code' => 'required',
                'account_number' => 'required',

            ]);
            if($validation->fails()) {
                Log::info($validation->getMessageBag()->first());
                return Redirect::back()->withErrors($validation->getMessageBag()->first())->withInput();
            }

            $id=Auth::user()->id;

             $check_exist=Bank::where('user_id', $id)->first();

             $bank_array=array(

                 'user_id'=>$id,
                 'bank_name'=>$request->bank_name,
                 'account_holder'=>$request->account_holder,
                 'branch_name'=>$request->branch_name,
                //  'pancard_no'=>$request->pancard_no,
                 'account_no'=>$request->account_number,
                 'ifsc_code'=>$request->ifsc_code,
             );

             if (!$check_exist)
             {

              $bank=Bank::create($bank_array);
            }
            else
            {
                $bank= Bank::where('user_id', $id)->update($bank_array);
            }




        $notify[] = ['success', 'Bank Updated successfully'];
        return redirect()->back()->withNotify($notify);

          }
           catch(\Exception $e){
            Log::info('error here');
            Log::info($e->getMessage());
            print_r($e->getMessage());
            die("hi");
            return back()->withErrors('error', $e->getMessage())->withInput();

        }
    }




}
