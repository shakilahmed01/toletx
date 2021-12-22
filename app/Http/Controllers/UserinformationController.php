<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserInformation;
use Carbon\Carbon;
class UserinformationController extends Controller
{
    //
    function post_user_information(Request $request){

      $user=UserInformation::insertGetId([
        'name'=>$request->name,
        'ncard_number'=>$request->ncard_number,
        'father_name'=>$request->father_name,
        'mother_name'=>$request->mother_name,
        'address'=>$request->address,
        'date_of_birth'=>$request->date_of_birth,
        'p_identity'=>$request->p_identity,
        'gender'=>$request->gender,
        'created_at'   =>Carbon::now()
      ]);
      // if ($request->hasFile('photo')) {
      //     $photo_upload     =  $request ->photo;
      //     $photo_extension  =  $photo_upload -> getClientOriginalExtension();
      //     $photo_name       =  "i_need_user_". $user . "." . $photo_extension;
      //     Image::make($photo_upload)->resize(100,100)->save(base_path('public/uploads/users/'.$photo_name),100);
      //     UserRegistration::find($user)->update([
      //     'photo'          => $photo_name,
      //         ]);
      //       }
      return back()->with('success','User have successfully registered.');
    }
}
