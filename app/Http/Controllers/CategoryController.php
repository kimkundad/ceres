<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\product;
use App\Models\images;
use App\Models\subcat;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\branch;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $objs = category::paginate(30);

        // if(isset($objs)){
        //     foreach($objs as $u){
        //         $count = images::where('cat_id', $u->id)->count();
        //         $u->option = $count;
        //     }
        // }

        $objs->setPath('');
        $data['objs'] = $objs;
        return view('admin.category.index', compact('objs'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $branch = branch::where('status', 1)->get();
        $data['branch'] = $branch;
        $data['method'] = "post";
        $data['url'] = url('admin/category');
        return view('admin.category.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function api_post_status_category(Request $request){

        $user = category::findOrFail($request->user_id);

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


    public function store(Request $request)
    {
        //
   
           $this->validate($request, [
            'cat_name' => 'required',
            'image' => 'required',
            'branch' => 'required'
           ]);

           $status = 0;
            if(isset($request['status'])){
                if($request['status'] == 1){
                    $status = 1;
                }
            }

            $image = $request->file('image');

           $path = 'img/cat/';
            $filename = time()."-".$image->getClientOriginalName();
            $image->move($path, $filename);
     
           $objs = new category();
           $objs->cat_name = $request['cat_name'];
           $objs->role_id = $request['branch'];
           $objs->cat_img = $filename;
           $objs->status = $status;
           $objs->save();

           return redirect(url('admin/category'))->with('add_success','เพิ่ม เสร็จเรียบร้อยแล้ว');
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
        $branch = branch::where('status', 1)->get();
        $data['branch'] = $branch;
        $objs = category::find($id);
        $data['url'] = url('admin/category/'.$id);
        $data['method'] = "put";
        $data['objs'] = $objs;
        return view('admin.category.edit', $data);
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
            'cat_name' => 'required',
            'branch' => 'required'
           ]);

           $image = $request->file('image');

           $status = 0;
        if(isset($request['status'])){
            if($request['status'] == 1){
                $status = 1;
            }
        }

        if($image == NULL){
           
           $objs = category::find($id);
           $objs->cat_name = $request['cat_name'];
           $objs->role_id = $request['branch'];
           $objs->status = $status;
           $objs->save();

        }else{

            $objs = DB::table('categories')
            ->where('id', $id)
            ->first();

            if(isset($objs->image)){
              $file_path = 'img/cat/'.$objs->image;
               unlink($file_path);
            }

            $path = 'img/cat/';
          $filename = time()."-".$image->getClientOriginalName();
          $image->move($path, $filename);

          $objs = category::find($id);
           $objs->cat_name = $request['cat_name'];
           $objs->role_id = $request['branch'];
           $objs->cat_img = $filename;
           $objs->status = $status;
           $objs->save();

        }

           
           return redirect(url('admin/category/'.$id.'/edit'))->with('edit_success','คุณทำการเพิ่มอสังหา สำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function del_cat($id)
    {

        $objs = DB::table('categories')
            ->where('id', $id)
            ->first();

            if(isset($objs->image)){
              $file_path = 'img/cat/'.$objs->image;
               unlink($file_path);
            }

        $obj = category::find($id);
        $obj->delete();

        return redirect(url('admin/category/'))->with('del_success','คุณทำการลบอสังหา สำเร็จ');
    }
}
