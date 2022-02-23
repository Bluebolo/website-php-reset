<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ApiController extends Controller
{
    public function getArticle(Request $request)
    {
        $get_num = $request['nums'];
        $_arc = DB::table('article')
            ->where('show', '=', 'yes')
            ->orderBy('artId', 'desc')
            ->get(['artId', 'artTitle', 'artTime'])
            ->take($get_num);
        return response()
            ->json(['arc' => $_arc, $get_num]);
    }

    public function GetMdMenu()
    {
        $menu = scandir(public_path('/md'));
        array_splice($menu,0,2);
//        mb_convert_encoding($menu[1], 'utf8','utf8');

        $file = array();
        for ($i = 0; $i < count($menu); $i++) {
            $menu[$i] = iconv("gbk","utf-8",$menu[$i]);
            $menu[$i] = iconv("utf-8","gbk",$menu[$i]);
            $file[$i] = [$menu[$i]];
        }
//        $f = json_encode($file,JSON_UNESCAPED_UNICODE);
        return response()->json($file);
    }
}
