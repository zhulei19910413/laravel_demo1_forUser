<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});








//两种路由写法；

//Route::get('member/info','MemberController@info');

//Route::get('member/info', [
//    'uses' => 'MemberController@info',
//    'as'=>'memberinfo'
//]);



Route::get('member/{id}','MemberController@info');

Route::get('test1','StudentController@test1');

Route::get('query1','StudentController@query1');

Route::get('query2','StudentController@query2');

Route::get('query3','StudentController@query3');

Route::get('query4','StudentController@query4');

Route::get('query5','StudentController@query5');

Route::get('orm1','StudentController@orm1');

Route::get('orm2','StudentController@orm2');

Route::get('orm3','StudentController@orm3');

Route::get('orm4','StudentController@orm4');

Route::get('student/request1','StudentController@request1');





//【基础路由】
Route::get('basic1', function () {
    return 'Hello World';
});

Route::post('basic2', function () {
    return 'Basic2';
});

//【多请求路由】
Route::match(['get','post'],'multy1', function () {
    return 'Multy1';
});

//所有类型的请求都可以使用；
Route::any('multy2', function () {
    return 'multy2';
});


//路由参数
//Route::get('user/{id}', function ($id) {
//    return 'user-id-'.$id;
//});

//Route::get('user/{name?}', function ($name = null) {
//    return 'user-name-'.$name;
//});

//Route::get('user/{name?}', function ($name = 'sean') {
//    return 'user-name-'.$name;
//});


//Route::get('user/{name?}', function ($name = 'sean') {
//    return 'user-name-'.$name;
//})->where('name','[A-Za-z]+');


//Route::get('user/{id}/{name?}', function ($id,$name = 'sean') {
//    return 'user-id-'.$id.'-name-'.$name;
//})->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);


//路由别名
//Route::get('user/member-center',['as'=>'center',function () {
//    return 'member-center';
//}]);

//Route::get('user/center',['as'=>'center',function () {
//    return route('center');
//}]);


//路由群组
//Route::group(['prefix'=>'member'],function(){
//
//    Route::get('user/center',['as'=>'center',function () {
//        return route('center');
//    }]);
//
//    Route::any('multy2', function () {
//        return 'member---multy2';
//    });
//
//});


//路由中输出视图；
Route::get('view', function () {
    return view('welcome');
});
