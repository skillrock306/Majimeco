<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AddSlideRequest;
use App\Http\Requests\EditSlideRequest;
use App\Models\MSlide;
class SlideController extends Controller
{
    //
    public function getSlide(){
    	$data['slidelist'] = MSlide::all();
    	return view('backend.slide',$data);
    }
    public function getAddSlide(){
    	$data['slidelist'] = MSlide::all();
    	return view('backend.addslide',$data);
    }
    public function postAddSlide(AddSlideRequest $request){
    	$filename = $request->img->getClientOriginalName();
    	$slide = new MSlide;
    	$slide->name = $request->name;
    	$slide->image = $filename;
    	$slide->slug = str::slug($request->name);
    	$slide->save();
    	$request->img->storeAs('avatar',$filename);
    }
    public function getEditSlide(EditSlideRequest $request,$id)
    {
    	$data['slide'] = MSlide::find($id);
    	return view('backend.editslide',$data);
    }
    public function postEditSlide(EditSlideRequest $request,$id)
    {
    	$slide = new MSlide;
    	$arr['name'] = $request->name;
    	if($request->hasFile('img')){
    		$img = $request->img->getClientOriginalName();
    		$arr['image'] = $img;
    		$request->img->storeAs('avatar',$img);
    	}
    	$arr['slug'] = str::slug($request->name);
    	$slide::where('slide_id',$id)->update($arr);
    	return redirect('admin/slide');
    }
    public function getDeleteSlide($id)
    {
    	MSlide::destroy($id);
    	return back();
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
