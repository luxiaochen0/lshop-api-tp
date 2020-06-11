<?php


namespace app\common;


use Exception;
use think\exception\Handle;

class CustomExceptionHandle extends Handle
{
    public function render(Exception $e)
    {
        if($e instanceof CustomException){
            return ResponseData::responseRes($e->getCode(),$e->getMessage());
        }else{
            return ResponseData::responseRes(500,$e->getMessage());
        }
    }
}