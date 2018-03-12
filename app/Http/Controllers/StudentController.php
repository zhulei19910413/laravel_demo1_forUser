<?php
namespace App\Http\Controllers;

use App\Student;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function test1()
    {

        //新增
//        $bool = DB::insert('insert into student(name,age) value(?,?)',
//            ['imooc',19]);
//        var_dump($bool);


        //更新
//        $num = DB::update('update student set age = ? where name = ?',
//              [20,'sean']);
//        var_dump($num);


        //查询
//        $students = DB::select('select * from student where id >?',
//            [1]);
//        dd($students);

        //删除
//        $num = DB::delete('delete from student where id = ?',
//            [2]);
//         var_dump($num);


    }


    //查询构造器，新增数据；
    public  function  query1()
    {
//        $bool = DB::table('student')->insert(
//          ['name'=>'zhulei','age'=>'18']
//        );
//        var_dump($bool);


//        $id = DB::table('student')->insertGetId(
//            ['name'=>'zhulei','age'=>'19']
//        );
//        var_dump($id);

        $bool = DB::table('student')->insert([
          ['name'=>'zhulei1','age'=>'18'],
          ['name'=>'zhulei2','age'=>'18'],
          ['name'=>'zhulei3','age'=>'18'],
        ]);
        var_dump($bool);
    }

    //查询构造器，更新数据；
    public  function  query2()
    {

//        $num = DB::table('student')
//            ->where('id',12)
//            ->update(['age'=>30]);
//        var_dump($num);


        //自增、自减
//        $num = DB::table('student')->increment('age');
//        $num = DB::table('student')->increment('age',3);
//        $num = DB::table('student')->decrement('age',3);

//        $num = DB::table('student')
//            ->where('id',12)
//            ->decrement('age',3);


        $num = DB::table('student')
            ->where('id',12)
            ->decrement('age' , 3 , ['name'=>'wangbadan']);
        var_dump($num);

    }


    //查询构造器，删除数据；
    public  function  query3()
    {
//        $num = DB::table('student')
//            ->where('id',28)
//            ->delete();

//        $num = DB::table('student')
//            ->where('id','>=',22)
//            ->delete();
//        var_dump($num);


        //清空数据表
//        DB::table('student')->truncate();

    }


    public  function  query4()
    {

        //get
//       $st =  DB::table('student')->get();


        //first
//       $st =  DB::table('student')
//           ->orderBy('id','desc')
//           ->first();


        //where
//        $st =  DB::table('student')
//            ->where('id','>=','5')
//            ->get();


        //whereRaw
//        $st =  DB::table('student')
//            ->whereRaw('id >= ? and age > ?',[5,10])
//            ->get();


        //pluck
//        $st =  DB::table('student')
//            ->whereRaw('id >= ? and age > ?',[5,10])
//            ->pluck('name');


        //select
//        $st =  DB::table('student')
//            ->select('name','id')
//            ->get();


        //chunk(一般1000条)
        DB::table('student')->orderBy('id')->chunk(2, function ($st) {
                var_dump('<pre>',$st);

//            if('条件满足'){
//                return false;
//            }

        });
    }

    //聚合函数
    public  function  query5()
    {

//       $num =  DB::table('student')->count();

//       $num =  DB::table('student')->max('id');

//       $num =  DB::table('student')->min('id');

        //平均
       $num =  DB::table('student')->avg('id');

        //合
//       $num =  DB::table('student')->sum('id');


        var_dump($num);

    }

    //查询构造器；
    public function orm1(){

        //all();
        //$students = Student::all();


        //find();
        //$students = Student::find(3);



        //findOrFail();根据主见查询，没有抛出异常；
        //$students = Student::findOrFail(113);

//        $students = Student::get();
//        $students = Student::where('id','>','13');

        //一次查2条，查多次；
//        Student::chunk(2,function($students){
//            var_dump('<pre>',$students);
//        });


//        聚合函数
//        $students = Student::count();
        $students = Student::where('id','>','10')->max('age');

        dd($students);

    }



    public function orm2(){

        //使用模型新增数据；
//        $students = new Student();
//        $students ->name = 'searn2';
//        $students ->age  = 19;
//        $bool = $students ->save();
//        dd($bool);


//        $student = Student::find(18);
//        echo $student->created_at;
//        echo date('Y-m-d H:i:s',$student->created_at);



        //使用模型方法新增数据;
//        $student = Student::create(
//            ['name'=>'imooc','age'=>18]
//        );
//        dd($student);


        //firstOrCreate(),判断有没有，没有了添加；

//        $stu = Student::firstOrCreate(
//            ['name'=>'imoocssss']
//        );


        //firstOrNew（）以属性查找用户，若没有就建立新的实例，保存自己调用save

        $stu = Student::firstOrNew(
            ['name'=>'imoocssss6']
        );

        $bool = $stu->save();


        dd($bool);




    }




}