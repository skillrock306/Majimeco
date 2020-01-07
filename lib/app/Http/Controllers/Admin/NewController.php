<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddNewRequest;
use App\Models\MNew;
use App\Models\Category;
use DB;
class NewController extends Controller
{
    //
    public function getNew()
    {
    	$data['newlist'] = DB::table('vp_news')->join('vp_categories','vp_news.new_cate','=','vp_categories.cate_id')->orderBy('new_id','desc')->paginate(5);
    	return view('backend.new',$data);
    }
    public function getDetailNew($id)
    {
    	$data['item'] = MNew::find($id);
    	return view('backend.detailnew',$data);
    }
    public function getAddNew()
    {
    	$data['catelist'] = Category::all();
    	return view('backend.addnew',$data);
    }
    public function postAddNew(AddNewRequest $request)
    {	
    	$filename = $request->img->getClientOriginalName();
    	$new = new MNew;
    	$new->new_title = $request->title;
    	$new->new_slug = Str::slug($request->title);
    	$new->new_brief = $request->brief;
    	$new->new_description = $request->description;
    	$new->new_img = $filename;
    	$new->new_highlight = $request->highlight;
    	$new->new_cate = $request->cate;
    	$new->new_numberviews = 0;
    	$new->save();
    	$request->img->storeAs('avatar',$filename);
         return Redirect('admin/new');
    }
    public function getEditNew($id)
    {
    	$data['catelist'] = Category::all();
    	$data['new'] = MNew::find($id);
    	return view('backend.editnew',$data);
    }
    public function postEditNew(AddNewRequest $request,$id)
    {
    	$new = new MNew;
    	$arr['new_title'] = $request->title;
    	$arr['new_slug'] = Str::slug($request->title);
    	$arr['new_brief'] = $request->brief;
    	$arr['new_description'] = $request->description;
    	if($request->hasFile('img')){
    		$img = $request->img->getClientOriginalName();
    		$arr['new_img'] = $img;
    		$request->img->storeAs('avatar',$img);
    	}
    	$arr['new_highlight'] = $request->highlight;
    	$arr['new_cate'] = $request->cate;
    	$arr['new_numberviews'] = 0;
    	$new::where('new_id',$id)->update($arr);
    	return redirect('admin/new');
    }
    public function getDeleteNew($id)
    {
    	MNew::destroy($id);
    	return back();
    }
    public function getSearch(Request $request)
    {
        $search = $request->get('search');
        $data['newlist'] = MNew::where('new_title','like','%'.$search.'%')->orderBy('new_id')->paginate(5);
        return view('backend.new',$data);
    }
    public function uploadImageProcess(){

    $destinatonPath = '';
    $filename = '';

    $file = Input::file('image');
    $destinationPath = public_path().'/assets/images/';
    $filename = str_random(6).'_'.$file->getClientOriginalName();
    $uploadSuccess = $file->move($destinationPath, $filename);

    if(Input::hasFile('image')){
        $images = new Images;

        $images->title = Input::get('title');
        $images->path = '/assets/images/' . $filename;
        $image->user_id = Auth::user()->id;

        Session::flash('success_insert','<strong>Upload success</strong>');
        return Redirect::to('user/dashboard');
    }
}
    public function uploadImage(ImageRequest $request)
    {
        try {
            // Đoạn này là đoạn lưu file, file sẽ nằm trong param có tên là 'upload'
            $image = ImageUploader::withFile($request->file('upload'))->save();

            return response()->json([
                'fileName' => basename($image),
                'uploaded' => 1,
                'url' => Storage::disk('public')->url($image),
            ]);
        } catch (Exception $e) {
            return response()->json([
                'uploaded' => 0,
                'error' => [
                    'message' => $e->getMessage(),
                ],
            ]);
        }
    }
}
