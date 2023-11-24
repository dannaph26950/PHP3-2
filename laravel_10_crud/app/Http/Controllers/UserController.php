<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public $data=[
//         'title' => "ROLLING DOWN ",
//        'content' => "TIE ME DOWN",
//        'footer' => "STAR WALKIN",
];
    public function home()
    {


//    CÁCH 1: KHoi tao 1 mang de dua bien vao
//    $dataView=[
//        'titleData'=>$title,
//        'contentData'=>$content,
//        'footerData'=>$footer,
//    ];
//    return view('home',$dataView);


//        CÁCH 2 : SỬ DỤNG HANDLE COMPACT : gom tất cả các biến thanhf mảng

//        return view('home',compact('title','content','footer'));

//            CÁCH 3 : SỬ DỤNG WITH KHỞI TẠO MẢNG
//        return view('home')->with(['title' => $title, 'content' => $content, 'footer' => $footer]);


//        CÁCH 4: ĐƯA TẤT CAR CÁC BIẾN VÀO MẢNG TẬM THỜI
//        Đưa tất cả các biến vào mảng ngoài func
        $title="ADADADADA";
        $content="adasdadaa";
        $footer="adasdasdadsda";

        $this->data['title'] = $title;
        $this->data['content'] = $content;
        $this->data['footer'] = $footer;

        $this->data['dataArr'] = [
            [
                'n'=>'1    ',
                'name' => 'Phpne',
                'price' => '10',
                'active' => '0',
            ], [
                'n'=>'2',
                'name' => 'Phpne',
                'price' => '10',
                'active' => '1',
            ], [
                'n'=>'3',
                'name' => 'Phpne',
                'price' => '10',
                'active' => '0',
            ]
        ];
        return view('home', $this->data);

    }


}
