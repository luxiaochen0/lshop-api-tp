<?php


namespace app\index\controller;


use app\common\ResponseData;
use think\Db;

class Goods
{
    public function index()
    {
        $data = Db::table("goods")->paginate(2);
        //throw new \Exception("aaa",400);
        return ResponseData::responseRes(200,'ok',$data);
    }
}