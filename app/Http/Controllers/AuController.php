<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\branch;
use App\Models\category;
use App\Models\video;

class AuController extends Controller
{
    //
    public function account(){

        $objs = DB::table('users')->select(
            'users.*',
            'users.id as id_q',
            'users.name as names',
            'users.status as status1',
            'users.created_at as created_ats',
            'role_user.*',
            'roles.*',
            'roles.name as name1',
            'branches.*',
            )
            ->leftjoin('role_user', 'role_user.user_id',  'users.id')
            ->leftjoin('roles', 'roles.id',  'role_user.role_id')
            ->leftjoin('branches', 'branches.id',  'users.shop_id')
            ->where('users.id', Auth::user()->id)
            ->first();

            $data['objs'] = $objs;

        return view('user.index', $data);

    }

    public function settings(){

        $objs = DB::table('users')->select(
            'users.*',
            'users.id as id_q',
            'users.name as names',
            'users.status as status1',
            'users.created_at as created_ats',
            'role_user.*',
            'roles.*',
            'roles.name as name1',
            'branches.*',
            )
            ->leftjoin('role_user', 'role_user.user_id',  'users.id')
            ->leftjoin('roles', 'roles.id',  'role_user.role_id')
            ->leftjoin('branches', 'branches.id',  'users.shop_id')
            ->where('users.id', Auth::user()->id)
            ->first();

            $data['objs'] = $objs;

        return view('user.settings', $data);
    }

    public function post_setting(Request $request){

        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required'],
            'phone' => 'required'
        ]);

        return redirect(url('account'))->with('add_success','เพิ่ม เสร็จเรียบร้อยแล้ว');

    }


    public function account_video(){

        $objs = DB::table('users')->select(
            'users.*',
            'users.id as id_q',
            'users.name as names',
            'users.status as status1',
            'users.created_at as created_ats',
            'role_user.*',
            'roles.*',
            'roles.name as name1',
            'branches.*',
            )
            ->leftjoin('role_user', 'role_user.user_id',  'users.id')
            ->leftjoin('roles', 'roles.id',  'role_user.role_id')
            ->leftjoin('branches', 'branches.id',  'users.shop_id')
            ->where('users.id', Auth::user()->id)
            ->first();

            $data['objs'] = $objs;

        $vdo = category::where('role_id', $objs->shop_id)->paginate(12);
            $data['vdo'] = $vdo;

        return view('user.account_video', $data);
    }


    public function account_video_detail($id){

        $objs = DB::table('users')->select(
            'users.*',
            'users.id as id_q',
            'users.name as names',
            'users.status as status1',
            'users.created_at as created_ats',
            'role_user.*',
            'roles.*',
            'roles.name as name1',
            'branches.*',
            )
            ->leftjoin('role_user', 'role_user.user_id',  'users.id')
            ->leftjoin('roles', 'roles.id',  'role_user.role_id')
            ->leftjoin('branches', 'branches.id',  'users.shop_id')
            ->where('users.id', Auth::user()->id)
            ->first();

        $vdo = category::where('role_id', $objs->shop_id)->where('id', $id)->first();

        $list = video::where('branch_id', $objs->shop_id)->where('cat_id', $id)->paginate(30);
        $list->setPath('');
   
        return view('user.account_video_detail', compact('objs', 'list', 'vdo'));

    }



}
