<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $about = About::all();

        foreach ($about as $abouts) {
           $title = $abouts->title;
           $keywords = $abouts->keywords;
           $description = $abouts->description;
           $google_code = $abouts->google_code;
           $facrbook_code = $abouts->facrbook_code;
           $orteh_code = $abouts->orteh_code;

          $story_en = $abouts->story_en;
          $story_th = $abouts->story_th;
          $history_en = $abouts->history_en;
          $history_th = $abouts->history_th;

            }



        return view('user.about', compact('about','title','keywords','description','google_code','facrbook_code','orteh_code','story_en','story_th','history_en','history_th'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/About/create');
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
        $input = new about([
            'title' => $request->input('title'),
            'keywords' => $request->input('keywords'),
            'description' => $request->input('description'),
            'google_code' => $request->input('google_code'),
            'facrbook_code' => $request->input('facrbook_code'),
            'orteh_code' => $request->input('orteh_code'),
            'story_en' => $request->input('story_en'),
            'story_th' => $request->input('story_th'),
            'history_en' => $request->input('history_en'),
            'history_th' => $request->input('history_th'),
            'name_en' => $request->input('name_en'),
            'name_th' => $request->input('name_th'),
            'protion_en' => $request->input('protion_en'),
            'protion_th' => $request->input('protion_th'),
            'content_en' => $request->input('content_en'),
            'content_th' => $request->input('content_th'),
            'status' => $request->input('status'),
            'images' => $request->images->getClientOriginalName()
            ]);

          $input->save();
          $input = $request->all();
          $input = request()->images->getClientOriginalName();
          $request->images->move(public_path('/files_upload/About'), $input);


          return redirect('About/show')->with('success', 'ได้ทำการเพิ่มข้อมูลเรียบร้อยแล้ว');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //

        $about = About::all();
        return view('admin/About/index', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about, $id)
    {
        //
        $about = about::find($id);
        return view('admin/About/edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about ,$id)
    {
        //
        // $request->validate([
        //     'title' => 'required',
        //     'keywords' => 'required',
        //     'description' => 'required',
        //     'google_code' => 'required',
        //     'facrbook_code' => 'required',
        //     'orteh_code' => 'required',
        //     'story_en' => 'required',
        //     'story_th' => 'required',
        //     'history_en' => 'required',
        //     'history_th' => 'required',
        //     'name_en' => 'required',
        //     'name_th' => 'required',
        //     'protion_en' => 'required',
        //     'protion_th' => 'required',
        //     'content_en' => 'required',
        //     'content_th' => 'required'
        //   ]);

          $about = about::find($id);
          $about->title = $request->get('title');
          $about->keywords = $request->get('keywords');
          $about->description = $request->get('description');
          $about->google_code = $request->get('google_code');
          $about->facrbook_code = $request->get('facrbook_code');
          $about->orteh_code = $request->get('orteh_code');
          $about->story_en = $request->get('story_en');
          $about->story_th = $request->get('story_th');
          $about->history_en = $request->get('history_en');
          $about->history_th = $request->get('history_th');
          $about->name_en = $request->get('name_en');
          $about->name_th = $request->get('name_th');
          $about->protion_en = $request->get('protion_en');
          $about->protion_th = $request->get('protion_th');
          $about->content_en = $request->get('content_en');
          $about->content_th = $request->get('content_th');
          $about->status = $request->get('status');
          $about->images = $request->get('images');
          
            if ($request->hasfile('images')){
                $file = $request->file('images');
                $extension = $file->getClientOriginalName();
                $filename = time() .'.'. $extension;
                $file->move('files_upload/About', $filename);
                $about->images = $filename;
            }

          $about->save();
        return redirect('About/show')->with('success', 'ได้ทำการแก้ไขข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about, $id)
    {
        //
        $about = about::find($id);
        $about->delete();

        return redirect('/About/show')->with('success', 'ได้ทำการลบข้อมูล เรียบร้อยแล้ว');
    }
}
