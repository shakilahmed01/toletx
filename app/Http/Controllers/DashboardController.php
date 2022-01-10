<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Hotel;
use App\Models\Room;
use Carbon\Carbon;
use Image;
class DashboardController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    function index(){
      return view('index');
    }

    function admin_index(){
      $user=User::all();
      return view('Dashboard.admin_index',compact('user'));
    }

    function custom_login(){
      return view('Dashboard.custom_login.login');
    }

    function custom_register(){
      return view('Dashboard.custom_login.register');
    }

    function add_hotel(){
      return view('Dashboard.hotel.add_hotel');
    }

    function post_hotel_information(Request $request){

      $hotel=Hotel::insertGetId([
        'hotel_name'=>$request->hotel_name,
        'location'=>$request->location,
        'wifi'=>$request->wifi,
        'bathroom'=>$request->bathroom,
        'cctv'=>$request->cctv,
        'lift'=>$request->lift,
        'furnished'=>$request->furnished,
        'security'=>$request->security,
        'parking'=>$request->parking,
        'price'=>$request->price,
        'guest_count'=>$request->guest_count,
        'photo'=>$request->photo,
        'created_at'   =>Carbon::now()
      ]);
      if ($request->hasFile('photo')) {
          $photo_upload     =  $request ->photo;
          $photo_extension  =  $photo_upload -> getClientOriginalExtension();
          $photo_name       =  "toletx_hotel_image_". $hotel . "." . $photo_extension;
          Image::make($photo_upload)->resize(100,100)->save(base_path('public/uploads/hotels/' .$photo_name),100);
          Hotel::find($hotel)->update([
          'photo'          => $photo_name,
              ]);
            }
      return back()->with('success','Hotel information have been successfully Added.');
    }

    function list_hotel(){
      $lists=Hotel::all();
      $trashed_lists=Hotel::onlyTrashed()->get();
      return view('Dashboard.hotel.list_hotel',compact('lists','trashed_lists'));
    }

    function hotel_edit($id){
      $list=Hotel::findOrFail($id);
      return view('Dashboard.hotel.single_hotel_list',compact('list'));
    }

    function hotel_update(Request $request){

          $hotel= Hotel::findOrFail($request->id)->update([
            'hotel_name'=>$request->hotel_name,
            'location'=>$request->location,
            'wifi'=>$request->wifi,
            'bathroom'=>$request->bathroom,
            'cctv'=>$request->cctv,
            'lift'=>$request->lift,
            'furnished'=>$request->furnished,
            'security'=>$request->security,
            'parking'=>$request->parking,
            'price'=>$request->price,
            'guest_count'=>$request->guest_count,

          ]);


          if ($request->hasFile('photo')) {

              $photo_upload     =  $request ->photo;
              $photo_extension  =  $photo_upload -> getClientOriginalExtension();
              $photo_name       =  "toletx_hotel_image_". $hotel . "." . $photo_extension;
              Image::make($photo_upload)->resize(100,100)->save(base_path('public/uploads/hotels/'.$photo_name),100);
              Hotel::find($hotel)->update([
              'photo'          => $photo_name,
                  ]);


                }
          return back()->with('success','Hotel information have been successfully Updated.');
    }

        function hotel_delete($id){
            $list=Hotel::findOrFail($id)->delete();
            return back();
          }

        function hotel_restore($id){
            Hotel::onlyTrashed()->findOrFail($id)->restore();
            return back();
          }

//begin room
    function add_room(){
      return view('Dashboard.room.add_room');
    }

    function post_room_information(Request $request){

      $room=Room::insertGetId([
        'hotel_name'=>$request->hotel_name,
        'address'=>$request->address,
        'room_size'=>$request->room_size,
        'attached_toilet'=>$request->attached_toilet,
        'utilities'=>$request->utilities,
        'attached_varanda'=>$request->attached_varanda,
        'hot_water'=>$request->hot_water,
        'laundry'=>$request->laundry,
        'ac'=>$request->ac,
        'cable_tv'=>$request->cable_tv,
        'wifi'=>$request->wifi,
        'lift'=>$request->lift,
        'furnished'=>$request->furnished,
        'parking'=>$request->parking,
        'price'=>$request->price,
        'photo'=>$request->photo,
        'created_at'   =>Carbon::now()
      ]);
      if ($request->hasFile('photo')) {
          $photo_upload     =  $request ->photo;
          $photo_extension  =  $photo_upload -> getClientOriginalExtension();
          $photo_name       =  "toletx_hotel_image_". $room . "." . $photo_extension;
          Image::make($photo_upload)->resize(100,100)->save(base_path('public/uploads/rooms/'.$photo_name),100);
          Room::find($room)->update([
          'photo'          => $photo_name,
              ]);
            }

      return back()->with('success','Room information have been successfully Added.');
    }

    function list_room(){
      $lists=Room::all();
      $trashed_lists=Room::onlyTrashed()->get();
      return view('Dashboard.room.list_room',compact('lists','trashed_lists'));
    }

    function room_edit($id){
      $list=Room::findOrFail($id);
      return view('Dashboard.room.single_room_list',compact('list'));
    }

    function room_update(Request $request){

          $room=Room::findOrFail($request->id)->update([
            'hotel_name'=>$request->hotel_name,
            'address'=>$request->address,
            'room_size'=>$request->room_size,
            'attached_toilet'=>$request->attached_toilet,
            'utilities'=>$request->utilities,
            'attached_varanda'=>$request->attached_varanda,
            'hot_water'=>$request->hot_water,
            'laundry'=>$request->laundry,
            'ac'=>$request->ac,
            'cable_tv'=>$request->cable_tv,
            'wifi'=>$request->wifi,
            'lift'=>$request->lift,
            'furnished'=>$request->furnished,
            'parking'=>$request->parking,
            'price'=>$request->price,



          ]);


          if ($request->hasFile('photo')) {

              $photo_upload     =  $request ->photo;
              $photo_extension  =  $photo_upload -> getClientOriginalExtension();
              $photo_name       =  "toletx_hotel_image_". $room . "." . $photo_extension;
              Image::make($photo_upload)->resize(100,100)->save(base_path('public/uploads/rooms/'.$photo_name),100);
              Room::find($room)->update([
              'photo'          => $photo_name,
                  ]);


                }
          return back()->with('success','Room information have been successfully Updated.');
    }

    function room_delete($id){
        $list=Room::findOrFail($id)->delete();
        return back();
      }

    function room_restore($id){
        Room::onlyTrashed()->findOrFail($id)->restore();
        return back();
      }

//end room

//begin flat
      function add_flat(){
        return view('Dashboard.flat.add_flat');
      }

      function post_flat_information(Request $request){

        $flat=Flat::insertGetId([

          'address'=>$request->address,
          'room_size'=>$request->room_size,
          'attached_toilet'=>$request->attached_toilet,
          'utilities'=>$request->utilities,
          'attached_varanda'=>$request->attached_varanda,
          'hot_water'=>$request->hot_water,
          'laundry'=>$request->laundry,
          'ac'=>$request->ac,
          'cable_tv'=>$request->cable_tv,
          'wifi'=>$request->wifi,
          'lift'=>$request->lift,
          'furnished'=>$request->furnished,
          'parking'=>$request->parking,
          'price'=>$request->price,
          'photo'=>$request->photo,
          'created_at'   =>Carbon::now()
        ]);
        if ($request->hasFile('photo')) {
            $photo_upload     =  $request ->photo;
            $photo_extension  =  $photo_upload -> getClientOriginalExtension();
            $photo_name       =  "toletx_flat_image_". $flat . "." . $photo_extension;
            Image::make($photo_upload)->resize(100,100)->save(base_path('public/uploads/flats/'.$photo_name),100);
            Flat::find($flat)->update([
            'photo'          => $photo_name,
                ]);
              }

        return back()->with('success','Room information have been successfully Added.');
      }

      function list_flat(){
        $lists=Flat::all();
        $trashed_lists=Flat::onlyTrashed()->get();
        return view('Dashboard.room.list_room',compact('lists','trashed_lists'));
      }

      function flat_edit($id){
        $list=Flat::findOrFail($id);
        return view('Dashboard.room.single_room_list',compact('list'));
      }

      function flat_update(Request $request){

            $room=Flat::findOrFail($request->id)->update([

              'address'=>$request->address,
              'room_size'=>$request->room_size,
              'attached_toilet'=>$request->attached_toilet,
              'utilities'=>$request->utilities,
              'attached_varanda'=>$request->attached_varanda,
              'hot_water'=>$request->hot_water,
              'laundry'=>$request->laundry,
              'ac'=>$request->ac,
              'cable_tv'=>$request->cable_tv,
              'wifi'=>$request->wifi,
              'lift'=>$request->lift,
              'furnished'=>$request->furnished,
              'parking'=>$request->parking,
              'price'=>$request->price,



            ]);


            if ($request->hasFile('photo')) {

                $photo_upload     =  $request ->photo;
                $photo_extension  =  $photo_upload -> getClientOriginalExtension();
                $photo_name       =  "toletx_flat_image_". $room . "." . $photo_extension;
                Image::make($photo_upload)->resize(100,100)->save(base_path('public/uploads/flats/'.$photo_name),100);
                Flat::find($room)->update([
                'photo'          => $photo_name,
                    ]);


                  }
            return back()->with('success','Flat information have been successfully Updated.');
      }

      function flat_delete($id){
          $list=Flat::findOrFail($id)->delete();
          return back();
        }

      function flat_restore($id){
          Flat::onlyTrashed()->findOrFail($id)->restore();
          return back();
        }
//end flat
}
