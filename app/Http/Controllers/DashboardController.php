<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\HostelTrait;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\Flat;
use App\Models\Parking_Spot;
use App\Models\Hostel;
use App\Models\Office;
use App\Models\Land;
use App\Models\Community_Center;
use App\Models\Shooting_Spot;
use App\Models\Shop;
use App\Models\Factory;
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
          'flat_size'=>$request->flat_size,
          'description'=>$request->description,
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

        return back()->with('success','Flat information have been successfully Added.');
      }

      function list_flat(){
        $lists=Flat::all();
        $trashed_lists=Flat::onlyTrashed()->get();
        return view('Dashboard.flat.list_flat',compact('lists','trashed_lists'));
      }

      function flat_edit($id){
        $list=Flat::findOrFail($id);
        return view('Dashboard.flat.single_flat_list',compact('list'));
      }

      function flat_update(Request $request){

            $flat=Flat::findOrFail($request->id)->update([

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
                $photo_name       =  "toletx_flat_image_". $flat . "." . $photo_extension;
                Image::make($photo_upload)->resize(100,100)->save(base_path('public/uploads/flats/'.$photo_name),100);
                Flat::find($flat)->update([
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

//begin parking spot
        function add_parking_spot(){
          return view('Dashboard.parking_spot.add_parking');
        }

        function post_parking_spot_information(Request $request){

          $parking=Parking_Spot::insertGetId([

            'address'=>$request->address,
            'price'=>$request->price,
            'floor_level'=>$request->floor_level,
            'floor_height'=>$request->floor_height,
            'vehicle_type'=>$request->vehicle_type,
            'description'=>$request->description,
            'photo'=>$request->photo,
            'created_at'   =>Carbon::now()
          ]);
          if ($request->hasFile('photo')) {
              $photo_upload     =  $request ->photo;
              $photo_extension  =  $photo_upload -> getClientOriginalExtension();
              $photo_name       =  "toletx_parking_spot_image_". $parking . "." . $photo_extension;
              Image::make($photo_upload)->resize(100,100)->save(base_path('public/uploads/parkings/'.$photo_name),100);
              Parking_Spot::find($parking)->update([
              'photo'          => $photo_name,
                  ]);
                }

          return back()->with('success','Parking Spot information have been successfully Added.');
        }

        function list_parking_spot(){
          $lists=Parking_Spot::all();
          $trashed_lists=Parking_Spot::onlyTrashed()->get();
          return view('Dashboard.parking_spot.list_parking',compact('lists','trashed_lists'));
        }

        function parking_spot_edit($id){
          $list=Parking_Spot::findOrFail($id);
          return view('Dashboard.parking_spot.single_list_parking',compact('list'));
        }

        function parking_spot_update(Request $request){

              $parking=Parking_Spot::findOrFail($request->id)->update([

                'address'=>$request->address,
                'price'=>$request->price,
                'floor_level'=>$request->floor_level,
                'floor_height'=>$request->floor_height,
                'vehicle_type'=>$request->vehicle_type,
                'description'=>$request->description,

              ]);


              if ($request->hasFile('photo')) {

                  $photo_upload     =  $request ->photo;
                  $photo_extension  =  $photo_upload -> getClientOriginalExtension();
                  $photo_name       =  "toletx_parking_spot_image_". $parking . "." . $photo_extension;
                  Image::make($photo_upload)->resize(100,100)->save(base_path('public/uploads/parkings/'.$photo_name),100);
                  Parking_Spot::find($parking)->update([
                  'photo'          => $photo_name,
                      ]);


                    }
              return back()->with('success','Parking Spot information have been successfully Updated.');
        }

        function parking_spot_delete($id){
            $list=Parking_Spot::findOrFail($id)->delete();
            return back();
          }

        function parking_spot_restore($id){
            Parking_Spot::onlyTrashed()->findOrFail($id)->restore();
            return back();
          }
//end parking spot





//begin hostel


      function add_hostel(){
        return view('Dashboard.hostel.add_hostel');
      }

      function list_hostel(){
        $lists=Hostel::all();
        $trashed_lists=Hostel::onlyTrashed()->get();
        return view('Dashboard.hostel.list_hostel',compact('lists','trashed_lists'));
      }
      function post_hostel_information(Request $request){

        $hostel=Hostel::insertGetId([

          'hostel_name'=>$request->hostel_name,
          'address'=>$request->address,
          'room_size'=>$request->room_size,
          'room_type'=>$request->room_type,
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
            $photo_name       =  "toletx_hostel_image_". $hostel . "." . $photo_extension;
            Image::make($photo_upload)->resize(100,100)->save(base_path('public/uploads/hostels/'.$photo_name),100);
            Hostel::find($hostel)->update([
            'photo'          => $photo_name,
                ]);
              }

        return back()->with('success','Hostel information have been successfully Added.');
      }

      function hostel_edit($id){
        $list=Hostel::findOrFail($id);
        return view('Dashboard.hostel.single_list_hostel',compact('list'));
      }

      function hostel_update(Request $request){

            $hostel=Hostel::findOrFail($request->id)->update([

              'hostel_name'=>$request->hostel_name,
              'address'=>$request->address,
              'room_size'=>$request->room_size,
              'room_type'=>$request->room_type,
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
                $photo_name       =  "toletx_hostel_image_". $hostel . "." . $photo_extension;
                Image::make($photo_upload)->resize(100,100)->save(base_path('public/uploads/hostels/'.$photo_name),100);
                Hostel::find($hostel)->update([
                'photo'          => $photo_name,
                    ]);


                  }
            return back()->with('success','hostel information have been successfully Updated.');
      }

      function hostel_delete($id){
          $list=Hostel::findOrFail($id)->delete();
          return back();
        }

      function hostel_restore($id){
          Hostel::onlyTrashed()->findOrFail($id)->restore();
          return back();
        }
//end hostel







//begin office
      function add_office(){
        return view('Dashboard.office.add_office');
      }

      function post_office_information(Request $request){

        $office=Office::insertGetId([
          'address'=>$request->address,
          'floor_level'=>$request->floor_level,
          'floor_size'=>$request->floor_size,
          'road_width'=>$request->road_width,
          'utilities'=>$request->utilities,
          'interior_condition'=>$request->interior_condition,
          'fire_safety'=>$request->fire_safety,
          'lift'=>$request->lift,
          'emergency_lift'=>$request->emergency_lift,
          'parking'=>$request->parking,
          'price'=>$request->price,
          'photo'=>$request->photo,
          'created_at'   =>Carbon::now()
        ]);
        if ($request->hasFile('photo')) {
            $photo_upload     =  $request ->photo;
            $photo_extension  =  $photo_upload -> getClientOriginalExtension();
            $photo_name       =  "toletx_office_image_". $office . "." . $photo_extension;
            Image::make($photo_upload)->resize(100,100)->save(base_path('public/uploads/offices/'.$photo_name),100);
            Office::find($office)->update([
            'photo'          => $photo_name,
                ]);
              }

        return back()->with('success','office information have been successfully Added.');
      }

      function list_office(){
        $lists=Office::all();
        $trashed_lists=Office::onlyTrashed()->get();
        return view('Dashboard.office.list_office',compact('lists','trashed_lists'));
      }

      function office_edit($id){
        $list=Office::findOrFail($id);
        return view('Dashboard.office.single_office_list',compact('list'));
      }

      function office_update(Request $request){

            $office=Office::findOrFail($request->id)->update([

              'address'=>$request->address,
              'floor_level'=>$request->floor_level,
              'floor_size'=>$request->floor_size,
              'road_width'=>$request->road_width,
              'utilities'=>$request->utilities,
              'interior_condition'=>$request->interior_condition,
              'fire_safety'=>$request->fire_safety,
              'lift'=>$request->lift,
              'emergency_lift'=>$request->emergency_lift,
              'parking'=>$request->parking,
              'price'=>$request->price,



            ]);


            if ($request->hasFile('photo')) {

                $photo_upload     =  $request ->photo;
                $photo_extension  =  $photo_upload -> getClientOriginalExtension();
                $photo_name       =  "toletx_office_image_". $office . "." . $photo_extension;
                Image::make($photo_upload)->resize(100,100)->save(base_path('public/uploads/offices/'.$photo_name),100);
                Office::find($office)->update([
                'photo'          => $photo_name,
                    ]);


                  }
            return back()->with('success','office information have been successfully Updated.');
      }

      function office_delete($id){
          $list=Office::findOrFail($id)->delete();
          return back();
        }

      function office_restore($id){
          Office::onlyTrashed()->findOrFail($id)->restore();
          return back();
        }
//end office





//begin Land
      function add_land(){
        return view('Dashboard.land.add_land');
      }

      function post_land_information(Request $request){

        $land=Land::insertGetId([

          'address'=>$request->address,
          'land_area'=>$request->land_area,
          'vegetations'=>$request->vegetations,
          'road_width'=>$request->road_width,
          'price'=>$request->price,
          'photo'=>$request->photo,
          'created_at'   =>Carbon::now()
        ]);
        if ($request->hasFile('photo')) {
            $photo_upload     =  $request ->photo;
            $photo_extension  =  $photo_upload -> getClientOriginalExtension();
            $photo_name       =  "toletx_land_image_". $land . "." . $photo_extension;
            Image::make($photo_upload)->resize(100,100)->save(base_path('public/uploads/lands/'.$photo_name),100);
            Land::find($land)->update([
            'photo'          => $photo_name,
                ]);
              }

        return back()->with('success','office information have been successfully Added.');
      }

      function list_land(){
        $lists=Land::all();
        $trashed_lists=Land::onlyTrashed()->get();
        return view('Dashboard.land.list_land',compact('lists','trashed_lists'));
      }

      function land_edit($id){
        $list=Land::findOrFail($id);
        return view('Dashboard.land.single_land_list',compact('list'));
      }

      function land_update(Request $request){

            $land=Land::findOrFail($request->id)->update([

              'address'=>$request->address,
              'land_area'=>$request->land_area,
              'vegetations'=>$request->vegetations,
              'road_width'=>$request->road_width,
              'price'=>$request->price,
              'photo'=>$request->photo,



            ]);


            if ($request->hasFile('photo')) {

                $photo_upload     =  $request ->photo;
                $photo_extension  =  $photo_upload -> getClientOriginalExtension();
                $photo_name       =  "toletx_land_image_". $land . "." . $photo_extension;
                Image::make($photo_upload)->resize(100,100)->save(base_path('public/uploads/lands/'.$photo_name),100);
                Land::find($land)->update([
                'photo'          => $photo_name,
                    ]);


                  }
            return back()->with('success','office information have been successfully Updated.');
      }

      function land_delete($id){
          $list=Land::findOrFail($id)->delete();
          return back();
        }

      function land_restore($id){
          Land::onlyTrashed()->findOrFail($id)->restore();
          return back();
        }
//end Land




//begin community center
      function add_community(){
        return view('Dashboard.community_center.add_community_center');
      }

      function post_community_information(Request $request){

        $community=Community_Center::insertGetId([
          'community_name'=>$request->community_name,
          'address'=>$request->address,
          'floor_level'=>$request->floor_level,
          'floor_size'=>$request->floor_size,
          'road_width'=>$request->road_width,
          'utilities'=>$request->utilities,
          'interior_condition'=>$request->interior_condition,
          'fire_safety'=>$request->fire_safety,
          'lift'=>$request->lift,
          'wifi'=>$request->wifi,
          'garden'=>$request->garden,
          'cooking'=>$request->cooking,
          'sitting'=>$request->sitting,
          'parking'=>$request->parking,
          'price'=>$request->price,
          'photo'=>$request->photo,
          'created_at'   =>Carbon::now()
        ]);
        if ($request->hasFile('photo')) {
            $photo_upload     =  $request ->photo;
            $photo_extension  =  $photo_upload -> getClientOriginalExtension();
            $photo_name       =  "toletx_community_image_". $community . "." . $photo_extension;
            Image::make($photo_upload)->resize(100,100)->save(base_path('public/uploads/communities/'.$photo_name),100);
            Community_Center::find($community)->update([
            'photo'          => $photo_name,
                ]);
              }

        return back()->with('success','Community Center information have been successfully Added.');
      }

      function list_community(){
        $lists=Community_Center::all();
        $trashed_lists=Community_Center::onlyTrashed()->get();
        return view('Dashboard.community_center.list_community_center',compact('lists','trashed_lists'));
      }

      function community_edit($id){
        $list=Community_Center::findOrFail($id);
        return view('Dashboard.community_center.single_community_center_list',compact('list'));
      }

      function community_update(Request $request){

            $community=Community_Center::findOrFail($request->id)->update([

              'community_name'=>$request->community_name,
              'address'=>$request->address,
              'floor_level'=>$request->floor_level,
              'floor_size'=>$request->floor_size,
              'road_width'=>$request->road_width,
              'utilities'=>$request->utilities,
              'interior_condition'=>$request->interior_condition,
              'fire_safety'=>$request->fire_safety,
              'lift'=>$request->lift,
              'wifi'=>$request->wifi,
              'garden'=>$request->garden,
              'cooking'=>$request->cooking,
              'sitting'=>$request->sitting,
              'parking'=>$request->parking,
              'price'=>$request->price,



            ]);


            if ($request->hasFile('photo')) {

                $photo_upload     =  $request ->photo;
                $photo_extension  =  $photo_upload -> getClientOriginalExtension();
                $photo_name       =  "toletx_community_image_". $community . "." . $photo_extension;
                Image::make($photo_upload)->resize(100,100)->save(base_path('public/uploads/communities/'.$photo_name),100);
                Community_Center::find($community)->update([
                'photo'          => $photo_name,
                    ]);


                  }
            return back()->with('success','community center information have been successfully Updated.');
      }

      function community_delete($id){
          $list=Community_Center::findOrFail($id)->delete();
          return back();
        }

      function community_restore($id){
          Community_Center::onlyTrashed()->findOrFail($id)->restore();
          return back();
        }
//end community center



//begin shooting spot
      function add_shooting(){
        return view('Dashboard.shooting_spot.add_shooting');
      }

      function post_shooting_information(Request $request){

        $shooting=Shooting_Spot::insertGetId([
          'shooting_name'=>$request->shooting_name,
          'address'=>$request->address,
          'floor_level'=>$request->floor_level,
          'floor_size'=>$request->floor_size,
          'road_width'=>$request->road_width,
          'utilities'=>$request->utilities,
          'building_condition'=>$request->building_condition,
          'fire_safety'=>$request->fire_safety,
          'lift'=>$request->lift,
          'wifi'=>$request->wifi,
          'garden'=>$request->garden,
          'cooking'=>$request->cooking,
          'sitting'=>$request->sitting,
          'parking'=>$request->parking,
          'vegetations'=>$request->vegetations,
          'price'=>$request->price,
          'photo'=>$request->photo,
          'created_at'   =>Carbon::now()
        ]);
        if ($request->hasFile('photo')) {
            $photo_upload     =  $request ->photo;
            $photo_extension  =  $photo_upload -> getClientOriginalExtension();
            $photo_name       =  "toletx_shooting_image_". $shooting . "." . $photo_extension;
            Image::make($photo_upload)->resize(100,100)->save(base_path('public/uploads/shootings/'.$photo_name),100);
            Shooting_Spot::find($shooting)->update([
            'photo'          => $photo_name,
                ]);
              }

        return back()->with('success','Shooting Spot information have been successfully Added.');
      }

      function list_shooting(){
        $lists=Shooting_Spot::all();
        $trashed_lists=Shooting_Spot::onlyTrashed()->get();
        return view('Dashboard.shooting_spot.list_shooting',compact('lists','trashed_lists'));
      }

      function shooting_edit($id){
        $list=Shooting_Spot::findOrFail($id);
        return view('Dashboard.shooting_spot.single_shooting_list',compact('list'));
      }

      function shooting_update(Request $request){

            $shooting=Shooting_Spot::findOrFail($request->id)->update([

              'shooting_name'=>$request->shooting_name,
              'address'=>$request->address,
              'floor_level'=>$request->floor_level,
              'floor_size'=>$request->floor_size,
              'road_width'=>$request->road_width,
              'utilities'=>$request->utilities,
              'building_condition'=>$request->building_condition,
              'fire_safety'=>$request->fire_safety,
              'lift'=>$request->lift,
              'wifi'=>$request->wifi,
              'garden'=>$request->garden,
              'cooking'=>$request->cooking,
              'sitting'=>$request->sitting,
              'parking'=>$request->parking,
              'vegetations'=>$request->vegetations,
              'price'=>$request->price,



            ]);


            if ($request->hasFile('photo')) {

                $photo_upload     =  $request ->photo;
                $photo_extension  =  $photo_upload -> getClientOriginalExtension();
                $photo_name       =  "toletx_shooting_image_". $shooting . "." . $photo_extension;
                Image::make($photo_upload)->resize(100,100)->save(base_path('public/uploads/shootings/'.$photo_name),100);
                Shooting_Spot::find($shooting)->update([
                'photo'          => $photo_name,
                    ]);


                  }
            return back()->with('success','Shooting Spot information have been successfully Updated.');
      }

      function shooting_delete($id){
          $list=Shooting_Spot::findOrFail($id)->delete();
          return back();
        }

      function shooting_restore($id){
          Shooting_Spot::onlyTrashed()->findOrFail($id)->restore();
          return back();
        }
//end shooting spot



//begin shop
      function add_shop(){
        return view('Dashboard.shop.add_shop');
      }

      function post_shop_information(Request $request){

        $shop=Shop::insertGetId([
          'address'=>$request->address,
          'floor_level'=>$request->floor_level,
          'floor_size'=>$request->floor_size,
          'road_width'=>$request->road_width,
          'utilities'=>$request->utilities,
          'building_condition'=>$request->building_condition,
          'fire_safety'=>$request->fire_safety,
          'lift'=>$request->lift,
          'interior_condition'=>$request->interior_condition,
          'parking'=>$request->parking,
          'price'=>$request->price,
          'photo'=>$request->photo,
          'created_at'   =>Carbon::now()
        ]);
        if ($request->hasFile('photo')) {
            $photo_upload     =  $request ->photo;
            $photo_extension  =  $photo_upload -> getClientOriginalExtension();
            $photo_name       =  "toletx_shop_image_". $shop . "." . $photo_extension;
            Image::make($photo_upload)->resize(100,100)->save(base_path('public/uploads/shops/'.$photo_name),100);
            Shop::find($shop)->update([
            'photo'          => $photo_name,
                ]);
              }

        return back()->with('success','Shop information have been successfully Added.');
      }

      function list_shop(){
        $lists=Shop::all();
        $trashed_lists=Shop::onlyTrashed()->get();
        return view('Dashboard.shop.list_shop',compact('lists','trashed_lists'));
      }

      function shop_edit($id){
        $list=Shop::findOrFail($id);
        return view('Dashboard.shop.single_shop_list',compact('list'));
      }

      function shop_update(Request $request){

            $shop=Shop::findOrFail($request->id)->update([

              'address'=>$request->address,
              'floor_level'=>$request->floor_level,
              'floor_size'=>$request->floor_size,
              'road_width'=>$request->road_width,
              'utilities'=>$request->utilities,
              'building_condition'=>$request->building_condition,
              'fire_safety'=>$request->fire_safety,
              'lift'=>$request->lift,
              'wifi'=>$request->wifi,
              'parking'=>$request->parking,
              'interior_condition'=>$request->interior_condition,
              'price'=>$request->price,



            ]);


            if ($request->hasFile('photo')) {

                $photo_upload     =  $request ->photo;
                $photo_extension  =  $photo_upload -> getClientOriginalExtension();
                $photo_name       =  "toletx_shop_image_". $shop . "." . $photo_extension;
                Image::make($photo_upload)->resize(100,100)->save(base_path('public/uploads/shops/'.$photo_name),100);
                Shop::find($shop)->update([
                'photo'          => $photo_name,
                    ]);


                  }
            return back()->with('success','Shop information have been successfully Updated.');
      }

      function shop_delete($id){
          $list=Shop::findOrFail($id)->delete();
          return back();
        }

      function shop_restore($id){
          Shop::onlyTrashed()->findOrFail($id)->restore();
          return back();
        }
//end shop



//begin factory
      function add_factory(){
        return view('Dashboard.factory.add_factory');
      }

      function post_factory_information(Request $request){

        $factory=Factory::insertGetId([
          'factory_name'=>$request->factory_name,
          'address'=>$request->address,
          'floor_level'=>$request->floor_level,
          'floor_size'=>$request->floor_size,
          'road_width'=>$request->road_width,
          'utilities'=>$request->utilities,
          'building_condition'=>$request->building_condition,
          'fire_safety'=>$request->fire_safety,
          'lift'=>$request->lift,
          'interior_condition'=>$request->interior_condition,
          'drainage_system'=>$request->drainage_system,
          'parking'=>$request->parking,
          'price'=>$request->price,
          'photo'=>$request->photo,
          'created_at'   =>Carbon::now()
        ]);
        if ($request->hasFile('photo')) {
            $photo_upload     =  $request ->photo;
            $photo_extension  =  $photo_upload -> getClientOriginalExtension();
            $photo_name       =  "toletx_factory_image_". $factory . "." . $photo_extension;
            Image::make($photo_upload)->resize(100,100)->save(base_path('public/uploads/factories/'.$photo_name),100);
            Factory::find($factory)->update([
            'photo'          => $photo_name,
                ]);
              }

        return back()->with('success','Factory information have been successfully Added.');
      }

      function list_factory(){
        $lists=Factory::all();
        $trashed_lists=Factory::onlyTrashed()->get();
        return view('Dashboard.factory.list_factory',compact('lists','trashed_lists'));
      }

      function factory_edit($id){
        $list=Factory::findOrFail($id);
        return view('Dashboard.factory.single_factory_list',compact('list'));
      }

      function factory_update(Request $request){

            $factory=Factory::findOrFail($request->id)->update([

              'factory_name'=>$request->factory_name,
              'address'=>$request->address,
              'floor_level'=>$request->floor_level,
              'floor_size'=>$request->floor_size,
              'road_width'=>$request->road_width,
              'utilities'=>$request->utilities,
              'building_condition'=>$request->building_condition,
              'fire_safety'=>$request->fire_safety,
              'lift'=>$request->lift,
              'wifi'=>$request->wifi,
              'parking'=>$request->parking,
              'interior_condition'=>$request->interior_condition,
              'drainage_system'=>$request->drainage_system,
              'price'=>$request->price,



            ]);


            if ($request->hasFile('photo')) {

                $photo_upload     =  $request ->photo;
                $photo_extension  =  $photo_upload -> getClientOriginalExtension();
                $photo_name       =  "toletx_factory_image_". $factory . "." . $photo_extension;
                Image::make($photo_upload)->resize(100,100)->save(base_path('public/uploads/factories/'.$photo_name),100);
                Factory::find($factory)->update([
                'photo'          => $photo_name,
                    ]);


                  }
            return back()->with('success','factory information have been successfully Updated.');
      }

      function factory_delete($id){
          $list=Factory::findOrFail($id)->delete();
          return back();
        }

      function factory_restore($id){
          Factory::onlyTrashed()->findOrFail($id)->restore();
          return back();
        }
//end factory
}
