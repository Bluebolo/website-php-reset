<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class IndexController extends Controller
{
    public function Index(){
        return view('index');
    }
    public function ArticleIndex(Request $request,$id){
        $check = DB::table('article')
            ->where('artId','=',$id)
            ->get('show')->first();
        if ($check->show == 'no'){
            return view('404');
        }
        $arc_info = DB::table('article')
            ->where('artId','=',$id)
            ->get()->first();
        return view('article.article')->with(['arc'=>$arc_info]);
    }
    public function Archives(Request $request){
        return view('archives');
    }
    public function Links(Request $request){
        return view('links');
    }
    public function About(Request $request){
        return view('about');
    }

    public function DiaryTitle(Request $request,$title){
        $returnTitle = $title;
        return view('diary',['title'=>$returnTitle]);
    }
}
