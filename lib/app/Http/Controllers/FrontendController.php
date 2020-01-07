<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MNew;
use App\Models\Category;
use App\Models\MSlide;
use Mail;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function __construct()
    {
    }
    //
    public function getHome()
    {
    	$data['category'] = Category::all();
    	$data['slideheader'] = MSlide::orderBy('slide_id','desc')->take(5)->get();
    	$data['highlight'] = MNew::where('new_highlight',1)->orderBy('new_id','desc')->take(4)->paginate(4);
        $data['navhightlight'] = MNew::where('new_highlight',1)->orderBy('new_id','desc')->take(3)->get();
    	$data['event'] = MNew::where('new_highlight',0)->orderBy('new_id','desc')->take(4)->get();
        $data['footereven'] = MNew::where('new_highlight',0)->orderBy('new_id','desc')->take(3)->get();
    	return view('frontend.home',$data);
    }
    public function getAbout()
    {
        $data['navhightlight'] = MNew::where('new_highlight',1)->orderBy('new_id','desc')->take(3)->get();
        $data['slideheader'] = MSlide::orderBy('slide_id','desc')->take(5)->get();
        $data['category'] = Category::all();
        $data['highlight'] = MNew::where('new_highlight',1)->orderBy('new_id','desc')->take(4)->paginate(4);
        $data['footereven'] = MNew::where('new_highlight',0)->orderBy('new_id','desc')->take(3)->get();
        return view('frontend.about',$data);
    }
    public function getDetail($id)
    {
        $data['navhightlight'] = MNew::where('new_highlight',1)->orderBy('new_id','desc')->take(3)->get();
    	$data['category'] = Category::all();
    	$data['slide'] = MSlide::orderBy('slide_id','desc')->take(5)->get();
    	$data['item'] = MNew::find($id);
    	$data['slideheader'] = MSlide::orderBy('slide_id','desc')->take(5)->get();
    	$data['highlight'] = MNew::where('new_highlight',1)->orderBy('new_id','desc')->take(4)->get();
        $data['footereven'] = MNew::where('new_highlight',0)->orderBy('new_id','desc')->take(3)->get();
    	return view('frontend.details',$data);
    }
    public function getCategory(Request $request, $id, $slug)
    {
        $keyword = !empty($request->keyword) ? $request->keyword : '';
        $data['navhightlight'] = MNew::where('new_highlight',1)->orderBy('new_id','desc')->take(3)->get();
    	$data['highlight'] = MNew::where('new_highlight',1)->orderBy('new_id','desc')->take(4)->get();
    	$data['category'] = Category::all();
    	$data['slideheader'] = MSlide::orderBy('slide_id','desc')->take(5)->get();
    	$data['cateName'] = Category::find($id);
        $data['footereven'] = MNew::where('new_highlight',0)->orderBy('new_id','desc')->take(3)->get();
        $where = [
            ['new_cate', $id]
        ];

        if (!empty($keyword)) {
            $where[] = ['new_title', 'LIKE', '%' . $keyword . '%'];
        }

        $items = DB::table('vp_news')->where($where)->orderBy('new_id','desc')->paginate(4);

    	$data['items'] = $items;
        $data['keyword'] = $keyword;
    
    	return view('frontend.category',$data);
    }
    public function getContact()
    {
        $data['navhightlight'] = MNew::where('new_highlight',1)->orderBy('new_id','desc')->take(3)->get();
        $data['slideheader'] = MSlide::orderBy('slide_id','desc')->take(5)->get();
        $data['category'] = Category::all();
        $data['highlight'] = MNew::where('new_highlight',1)->orderBy('new_id','desc')->take(4)->paginate(4);
        $data['footereven'] = MNew::where('new_highlight',0)->orderBy('new_id','desc')->take(3)->get();
        return view('frontend.contact',$data);
    }
    public function postContact(Request $request)
    {
        $data['info'] = $request->all();
        $email = $request->email;
        Mail::send('frontend.email',$data, function($message) use($email){
            $message->from('nguyentantrung3007@gmail.com','Cty TNHH TM-DV Phát triển Nguồn nhân lực MAJIMECO');
            $message->to($email,$email);
            $message->cc('nguyentantrung3006@gmail.com','Giám đốc điều hành');
            $message->subject('Xác nhận gửi thông tin tư vấn khách hàng');
        });
        return redirect('complete');
    }
    public function getComplete()
    {
         $data['navhightlight'] = MNew::where('new_highlight',1)->orderBy('new_id','desc')->take(3)->get();
        $data['slideheader'] = MSlide::orderBy('slide_id','desc')->take(5)->get();
        $data['category'] = Category::all();
        $data['highlight'] = MNew::where('new_highlight',1)->orderBy('new_id','desc')->take(4)->paginate(4);
        $data['footereven'] = MNew::where('new_highlight',0)->orderBy('new_id','desc')->take(3)->get();
        return view('frontend.complete',$data);
    }
    public function getSearch(Request $request)
    {
        $search = $request->get('search');
        echo '<pre>';
        print_r($search);die;
        $data['category'] = Category::all();
        $data['items'] = MNew::where('new_title','like','%'.$search.'%')->orderBy('new_id')->paginate(5);
        return view('frontend.category',$data);
    }
}
