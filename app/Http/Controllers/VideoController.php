<?php

namespace App\Http\Controllers;

use App\Models\Video;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use PhpParser\Node\Stmt\Return_;


class VideoController extends Controller
{
    public function listVideo()
    {
        $videos = video::all();
        return view('list-video',compact('videos'));
    }
    public  function index(){
        $videos = video::all();
        return view('videos', compact('videos'));
    }
    public function add()
    {
        return view('add');
        
    }
    public function management()
    {
        return view('video-management');
        
    }
    public function store(Request $request)
    {
        If ($request->isMethod('POST')){
            $newVideo = new Video();
            $newVideo->name = $request->name;
            $newVideo->video_url = $request->video_url;
            $newVideo->description =$request->description;
            $newVideo->category =$request->category;
            $newVideo->save();
            Return redirect()->route('management')
            -> with('success', 'Video created successfully.');
        }
    }
    public function edit($id)
    {
        $video = Video::find($id);
        return view('update', ['video'=>$video]);
    }
    Public function update(Request $request)
    {
        If($request->isMethod('POST')){
            $video = Video::find($request->id);
            if ($video != null){
                $video->name = $request->name;
                $video->category = $request->category;
                $video->description = $request->description;
                $video->video_url = $request->video_url;
                $video->save();
                return redirect()->route('management')
                ->with('success', 'Video updated successfully');
            }
            else
            {
                return redirect()->route('management')
                ->with('Error', ' Video not update');

            }

        }
    }
    public function destroy($id)
    {
        $video = Video::find($id);
        $video->delete();
        return redirect()-> route('management')
        ->with('success', 'Video deleted successfully');
    }
    
    public function show($id)
    {
    $video = Video::find($id);
    $relatedVideos = DB::table('video')->where('description', $video->description)->get(4);
    return view('video-single' ,['video'=>$video, 'videoRelated'=> $relatedVideos]);
    }
    
}
