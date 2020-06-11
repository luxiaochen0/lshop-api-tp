<?php


namespace app\common;


class ResponseData
{
    public static function responseRes($code,$msg,$data=[]){
        return json(['code'=>$code,'msg'=>$msg,'data'=>$data]);
    }
}