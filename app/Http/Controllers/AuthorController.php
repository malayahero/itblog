<?php

namespace App\Http\Controllers;
use App\Charts\DashboardChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserUpdate;
use App\Http\Requests\CreatePost;
use App\Http\Requests\CreateMenu;
use App\Post;
use App\Categeories;
use App\Menu;
use App\Comment;
use App\User;
use Carbon\Carbon;
class AuthorController extends Controller
{
    //
	public function __construct(){
		$this->middleware('checkRole:author');
        $this->middleware('auth');
	}
    
    public function dashboard(){
        $posts = Post::where('user_id',Auth::id())->pluck('id')->toArray();
        $allComments = Comment::whereIn('post_id', $posts)->get();
        $todayComments = $allComments->where('created_at','>=',\Carbon\Carbon::today())->count();

        $chart = new DashboardChart;
        $days = $this->generateDateRange(Carbon::now()->subDays(30),Carbon::now());
        $posts = [];

        foreach($days as $day){
            $posts[] = Post::whereDate('created_at',$day)->where('user_id',Auth::id())->count();
        }
          $chart->dataset('Posts','line',$posts);
          $chart->labels($days);

        return view('author.dashboard',compact('allComments','todayComments','chart'));
    }

     private function generateDateRange(Carbon $start_date,Carbon $end_date){
      $dates = [];

      for($date = $start_date;$date->lte($end_date);$date->addDay()){
        $dates[] = $date->format('Y-m-d');
      }
      return $dates;
     }
    public function posts(){
        return view('author.posts');
    }

    public function comments(){
        $posts = Post::where('user_id',Auth::id())->pluck('id')->toArray();
        $comments = Comment::whereIn('post_id', $posts)->get();
        return view('author.comments');    	
    }
    public function newPost(){
        return view('author.newPost');
    }
    public function createPost(CreatePost $request){
        $post = new Post();
        $post->title = $request['title'];
        $post->content = $request['content'];
        $post->user_id = Auth::id();
        // $post->categeories_id = $request['menu'];
        $post->menu_id = 1;
        $post->save();
        return back()->with('success','Post is successfully created');
    }
    public function postEdit($id){
        $post = Post::where('id',$id)->where('user_id',Auth::id())->first();
        return view('author.editPost',compact('post'));
    }
    public function postEditPost(CreatePost $request,$id){
        $post = Post::where('id',$id)->where('user_id',Auth::id())->first();
        $post->title = $request['title'];
        $post->content = $request['content'];
        $post->save();
        return back()->with('success','Post is successfully edit');
    }

    public function deletePost($id){
        $post = Post::where('id',$id)->where('user_id',Auth::id())->first();
        $post->delete();
        return back();
    }

    public function createMenu(){
        return view('author.createmenu',compact('menu'));
    }

    public function newMenuPost(){
        return view('author.newMenuPost',compact('menu'));
    }

    public function createMenuPost(Request $request){
        $menu = new Menu();
        $menu->menu = $request['menu'];
        $menu->user_id = Auth::id();
        $menu->save();
        // return back()->with('Success','Menu Has Been Creator');
        return dd($menu);
    }


    public function createMenuShow($id){
        $menu = Menu::all();
        return view('author.createmenu',compact('menu'));
    }
}
