<?php


namespace app\index\controller;


use app\common\ResponseData;
use think\Db;

class Goods
{
    public function index()
    {
        $data = Db::table("goods")->select();
        //throw new \Exception("aaa",400);
        return ResponseData::responseRes(200,'ok',$data);
    }
}