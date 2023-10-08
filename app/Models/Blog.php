<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    public static $blog,$image,$dir,$imgNewName,$imgUrl;

    public static function saveInfo($request,$id=null){
        if($id !=null){
            self::$blog = Blog::find($id);
        }else{
            self::$blog = new Blog();
        }
        self::$blog->title = $request->title;
        self::$blog->category_id = $request->category_id;
        self::$blog->author_name = $request->author_name;
        self::$blog->description =$request->description;
        if($request->file('image')){
            if (self::$blog->image) {
                if (file_exists(self::$blog->image)) {
                    unlink(self::$blog->image);
                }
            }
            self::$blog->image = self::saveImage($request);
        }
        self::$blog->date = $request->date;
        self::$blog->save();

    }
    private static function saveImage($request){
        self::$image = $request->file('image');
        self::$imgNewName = rand(1000,9999).'.'.self::$image->extension();
        self::$dir ='back-end-assets/images/';
        self::$imgUrl =self::$dir.self::$imgNewName;
        self::$image->move(self::$dir,self::$imgNewName);
        return self::$imgUrl;
    }

    public static function statusCheck($id){
        self::$blog = Blog::find($id);
        if(self::$blog->status==1){
            self::$blog->status = 0;
        }else{
            self::$blog->status =1;
        }
        self::$blog->save();
    }

    public static function deleted($id){
        self::$blog = Blog::find($id);
        if(self::$blog->image){
            if (file_exists(self::$blog->image)){
                unlink(self::$blog->image);
            }
        }
        self::$blog->delete();
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

}
