<?php
namespace app\admin\controller;
use think\Controller;
use think\Requset;
use think\Db;
use app\admin\model\Category;
//定义当前类所在命名空间
//定义控制器名(和文件名要一致)
class TestController extends Controller {
	public function index(){
		dump(Db::table("tp_category")->select() ); 
	}
	public function model(){
		$catModel =new /* \app\admin\model\*/Category;
		$data = $catModel->getPk/*limit(2,2)->select*/();
		// $data = $catModel->getTableInfo('tp_article','fields');
		// $data = $catModel->paginate(2)->each(function($item, $key){
		//     $item['nickname'] = 'think';
		//     return $item;
		// });;
		dump($data);
	}
}