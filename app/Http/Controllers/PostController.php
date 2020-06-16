<?php

namespace App\Http\Controllers;

use App\Log;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
        return view('home',compact('posts'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {


        $post->logs()->create([
            'post_id'=>$post->id,
            'user_id'=>Auth::id(),
            'gender'=>Auth::user()->gender,
            'date'=>date('y-m-d'),
            ]);
            $post->loadCount('logs');
            $post->logs = $post->logs()->get()->groupBy(['gender']);

            // dd($post);
            // $logmale = Log::select(DB::raw('count(id) as `data`' ),DB::raw('date'))->where('gender','male')->groupby('date')->latest()->get();
            // $logfemale = Log::select(DB::raw('count(id) as `data`' ),DB::raw('date'))->where('gender','female')->groupby('date')->latest()->get();



        return view('post',compact(['post']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }

    public function viewsChart(){

    }
}
