<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Symfony\Component\String\s;

class Department extends Model
{
    use HasFactory;
    static $info,$update;
  public static function store_department_data($request){
      self::$info=new Department();
      self::$info->dept_code   =$request->dept_code;
      self::$info->dept_name   =$request->dept_name;
      self::$info->save();
  }
    public static function department_udate_aftter_edit($request){

        self::$update=Department::find($request->dept_id);
        self::$update->dept_code   =$request->dept_code;
        self::$update->dept_name   =$request->dept_name;
        self::$update->save();
    }
}
