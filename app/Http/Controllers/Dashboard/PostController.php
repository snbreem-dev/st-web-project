<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts = Post::all();
        //$posts = DB::table('posts')->get();
        //$posts = DB::table('posts')->limit(10)->get();
        //$posts = DB::table('posts')->where('category_id',2)->get();
        //$posts = DB::table('posts')->where('category_id','<=',2)->get();
        /*$posts = DB::table('posts')->where([
           ['category_id',2],
           ['user_id','>=',5]
        ])->get();*/

        /*$posts = DB::table('posts')
            ->where('user_id',10)
            ->where('category_id',3)
            ->select('title','views')
            ->get();*/

        //$posts = DB::table('posts')->pluck('id');
        //$posts = DB::table('posts')->pluck('title','views');
        //$posts = DB::table('posts')->find(10);
        /*$posts = DB::table('posts')
            ->where('category_id',3)
            ->select('title','views')
            ->orderBy('views','asc')
            ->get();*/
        /*$views_average = DB::table('posts')->avg('views');
        dd($views_average);*/

        /*$views_min = DB::table('posts')->min('views');
        dd($views_min);*/

        /*$views_max = DB::table('posts')->max('views');
        dd($views_max);*/

        /*$posts = DB::table('posts')->orderBy('shares','desc')
            ->chunk(10,function ($items){
            foreach ($items as $item){
                echo $item->shares.' '.$item->title.'<br>';
            }
        });*/
        //$posts = DB::table('posts')->whereIn('category_id',[2,5])->get();
        //$posts = DB::table('posts')->whereBetween('category_id',[2,7])->get();
        //$posts = DB::table('posts')->whereNull('category_id')->get();
        /*$posts = DB::table('posts')
            ->join('categories','categories.id','posts.category_id')
            ->select('posts.title','categories.name','posts.views')->get();
        $posts = DB::table('posts')->skip(10)->take(5)->get();


        $posts = DB::table('posts')->where('category_id',2)->get();
        $posts = DB::table('posts')->where('category_id',2)->first();
        $posts = DB::table('posts')->find(3);
        dd($posts);*/
        /*DB::table('categories')->insert([
           'name' => 'Polictical',
           'code' => 'PLT',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('categories')->insert([
            ['name' => 'Health', 'code' => 'HLT', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Economy', 'code' => 'ECY', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
        ]);

        DB::table('categories')->where('id',22)->update([
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::tomorrow(),
        ]);

        DB::table('posts')->where('id',1)->increment('views',5);
        DB::table('posts')->where('id',1)->decrement('views',4);
        DB::table('comments')->delete();
        DB::table('comments')->truncate();*/

        DB::enableQueryLog();

        $posts = DB::table('posts')->whereIn('category_id',[2,5])->get();

        $posts = DB::table('posts')->where('category_id','<=',2)->get();

        $posts = DB::table('posts')->where([
           ['category_id',2],
           ['user_id','>=',5]
        ])->get();

        dd(DB::getQueryLog());
        return view('dashboard.posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
