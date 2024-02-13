<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\branch;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $objs = branch::paginate(30);

        if(isset($objs)){
            foreach($objs as $u){
                $count = User::where('shop_id', $u->id)->count();
                $u->option = $count;
            }
        }

        $objs->setPath('');
        $data['objs'] = $objs;
        return view('admin.branch.index', compact('objs'));
    }


    public function api_post_status_branch(Request $request){

        $user = branch::findOrFail($request->user_id);

              if($user->status == 1){
                  $user->status = 0;
              } else {
                  $user->status = 1;
              }


      return response()->json([
      'data' => [
        'success' => $user->save(),
      ]
    ]);

     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['method'] = "post";
        $data['url'] = url('admin/branch');
        return view('admin.branch.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'b_name' => 'required'
           ]);

        $status = 0;
        if(isset($request['status'])){
            if($request['status'] == 1){
                $status = 1;
            }
        }

           $objs = new branch();
           $objs->b_name = $request['b_name'];
           $objs->status = $status;
           $objs->save();

           return redirect(url('admin/branch'))->with('add_success','เพิ่ม เสร็จเรียบร้อยแล้ว');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $objs = branch::find($id);
        $data['url'] = url('admin/branch/'.$id);
        $data['method'] = "put";
        $data['objs'] = $objs;
        return view('admin.branch.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'b_name' => 'required'
           ]);

           $status = 0;
            if(isset($request['status'])){
                if($request['status'] == 1){
                    $status = 1;
                }
            }


                $objs = branch::find($id);
                $objs->b_name = $request['b_name'];
                $objs->status = $status;
                $objs->save();

            return redirect(url('admin/branch/'.$id.'/edit'))->with('edit_success','คุณทำการเพิ่มอสังหา สำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function del_branch($id)
    {
        //

        $obj = branch::find($id);
        $obj->delete();

        return redirect(url('admin/branch/'))->with('del_success','คุณทำการลบอสังหา สำเร็จ');
    }
}
