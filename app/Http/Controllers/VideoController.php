<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\video;
use App\Models\category;
use App\Models\branch;

class VideoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $objs = video::paginate(30);

        $objs = DB::table('videos')->select(
            'videos.*',
            'videos.id as id_q',
            'videos.status as status1',
            'videos.created_at as created_ats',
            'categories.*',
            'branches.*',
            )
            ->leftjoin('categories', 'categories.id',  'videos.cat_id')
            ->leftjoin('branches', 'branches.id',  'videos.branch_id')
            ->orderBy('videos.id', 'desc')
            ->paginate(15);

        $objs->setPath('');
        $data['objs'] = $objs;
        return view('admin.video.index', compact('objs'));
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
        $cat = category::where('status', 1)->get();
        $data['cat'] = $cat;
        $data['method'] = "post";
        $data['url'] = url('admin/video');
        return view('admin.video.create', $data);
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
            'video_name' => 'required',
            'branch_id' => 'required',
            'cat_id' => 'required',
            'image' => 'required'
           ]);
           

           $image = $request->file('image');

           $path = 'img/video_img/';
            $filename = time()."-".$image->getClientOriginalName();
            $image->move($path, $filename);

            $status = 0;
        if(isset($request['status'])){
            if($request['status'] == 1){
                $status = 1;
            }
        }

           $objs = new video();
           $objs->video_name = $request['video_name'];
           $objs->video_detail = $request['video_detail'];
           $objs->branch_id = $request['branch_id'];
           $objs->cat_id = $request['cat_id'];
           $objs->video_img = $filename;
           $objs->status = $status;
           $objs->save();

           return redirect(url('admin/video'))->with('add_success','เพิ่ม เสร็จเรียบร้อยแล้ว');

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
        $cat = category::where('status', 1)->get();
        $data['cat'] = $cat;
        $objs = video::find($id);
        $data['url'] = url('admin/video/'.$id);
        $data['method'] = "put";
        $data['objs'] = $objs;
        return view('admin.video.edit', $data);
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
            'video_name' => 'required',
            'branch_id' => 'required',
            'cat_id' => 'required'
           ]);
           

           $image = $request->file('image');

            $status = 0;
            if(isset($request['status'])){
                if($request['status'] == 1){
                    $status = 1;
                }
            }

            if($image == NULL){

           $objs = video::find($id);
           $objs->video_name = $request['video_name'];
           $objs->video_detail = $request['video_detail'];
           $objs->branch_id = $request['branch_id'];
           $objs->cat_id = $request['cat_id'];
           $objs->status = $status;
           $objs->save();

            }else{


                $img = DB::table('videos')
          ->where('id', $id)
          ->first();

          $file_path = 'img/video_img/'.$img->video_img;
          unlink($file_path);

          $path = 'img/video_img/';
          $filename = time()."-".$image->getClientOriginalName();
          $image->move($path, $filename);


                $objs = video::find($id);
           $objs->video_name = $request['video_name'];
           $objs->video_detail = $request['video_detail'];
           $objs->branch_id = $request['branch_id'];
           $objs->cat_id = $request['cat_id'];
           $objs->video_img = $filename;
           $objs->status = $status;
           $objs->save();

            }

            return redirect(url('admin/video/'.$id.'/edit'))->with('edit_success','คุณทำการเพิ่มอสังหา สำเร็จ');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function del_video($id)
    {
        //
        $objs = DB::table('videos')
            ->where('id', $id)
            ->first();

            if(isset($objs->image)){
              $file_path = 'img/video_img/'.$objs->video_img;
               unlink($file_path);
            }

        $obj = video::find($id);
        $obj->delete();

        return redirect(url('admin/video/'))->with('del_success','คุณทำการลบอสังหา สำเร็จ');
    }
}
