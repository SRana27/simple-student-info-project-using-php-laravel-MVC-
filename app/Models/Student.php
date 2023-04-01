<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Symfony\Component\Finder\searchInDirectory;
use function Symfony\Component\String\s;

class Student extends Model
{
    use HasFactory;
    static $info,$update ,$directory,$imageName,$imageUrl,$image,$del;
    public static function store_student_data($request){

        self::$info= new Student();
        self::$info->seid         =$request->seid;
        self::$info->name         =$request->name;
        self::$info->email        =$request->email;
        self::$info->phone        =$request->phone;
        self::$info->course_name  =$request->course_name;
        self::$info->department   =$request->department;
        self::$info->gender       =$request->gender;
        self::$info->image        =self::saveImage($request);
        self::$info->address      =$request->address;
        self::$info->save();

    }


    public static function saveImage($request){

        self::$image=$request->file('image');
        self::$imageName=rand().'.'.self::$image->Extension();
        self::$directory='upload-image/student/';
        self::$imageUrl=self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);
        return self::$imageUrl;

    }

    public static function student_udate_aftter_edit($request){

        self::$update= Student::find($request->student_id);
        self::$update->seid         =$request->seid;
        self::$update->name         =$request->name;
        self::$update->email        =$request->email;
        self::$update->phone        =$request->phone;
        self::$update->course_name  =$request->course_name;
        self::$update->department   =$request->department;
        self::$update->gender       =$request->gender;
        if($request->file('image'))
        {
            if(self::$update->image){
                if(file_exists(self::$update->image)){
                    unlink(self::$update->image);
                    self::$update->image=self::saveImage($request);
                }
            }else{
                self::$update->image=self::saveImage($request);
            }
        }
        self::$update->address      =$request->address;
        self::$update->save();

    }
    public static function student_delete($request){
        self:: $del= Student::find($request->student_id);

            if(self::$del->image) {
                if (file_exists(self::$del->image)) {
                    unlink(self::$del->image);
                }
            }
            self::$del->delete();

    }
}
