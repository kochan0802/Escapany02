<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coach;

class CoachController extends Controller {

    public function select(Request $req){

        //値を取得
        $category_name = $req->input('category_name');
        $personality = $req->input('personality');

        // 検索QUERY
        $query = Coach::query();

        //結合
        $query->join('categories', function ($query) use ($req) {
            $query->on('coaches.category_id', '=', 'categories.category_id');
        });

        // もし「ジャンル名」があれば
        if(!empty($category_name)){
            $query->where('category_name','like','%'.$category_name.'%');
        }

        // もし「16personality」があれば
        if(!empty($personality)){
            $query->where('address','like','%'.$personality.'%');
        }

        // ページネーション
        $coaches = $query->paginate(5);

        // ビューへ渡す値を配列に格納
        $hash = array(
            'category_name' => $category_name, //pass parameter to pager
            'personality' => $personality, //pass parameter to pager
            'coaches' => $coaches, //Eloquent
        );

        return view('coach.list')->with($hash);
    }
}