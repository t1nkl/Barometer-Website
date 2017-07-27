<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;
use App\Models\{Article, Tag, Setting};

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request )
    {
        if ($request->input('tag')){
            $tag = Tag::where('slug', $request->input('tag'))->first();
            if($tag) {
                $blogs = $tag->articles;
                $tags = Tag::all();
                $settings = Setting::first();

                return view('blog', compact('blogs', 'tags', 'tag', 'settings'));
            } else {
                abort(404);
            }
        } else {
            $blogs = Article::orderBy("rgt")->get();
            $tags = Tag::all();
            $settings = Setting::first();

            return view('blog', compact('blogs', 'tags', 'settings'));
        }
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $blogs = Article::where('slug', $slug)->first();
        if($blogs) {
            $settings = Setting::first();
            
            return view('blog_single', compact('blogs', 'settings'));
        } else {
            abort(404);
        }
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
