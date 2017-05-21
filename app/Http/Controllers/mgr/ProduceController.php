<?php

namespace App\Http\Controllers\Mgr;

use App\Http\Model\item;
use App\Http\Model\item_base;
use App\Http\Model\produce_pic;
use Intervention\Image\Facades\Image;
use App\Http\Model\area_buss;
use App\Http\Model\city_area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class ProduceController extends CommonController
{
    /*    public function  show($ib_xmbh) {

          //$input=Input::except('_token');
            $area_buss = area_buss::select('a_sqbh', 'a_sq')->get();
            $city_area = city_area::select('c_cqbh', 'c_cqmc')->get();
            $item=item::where('ib_xmbh',$ib_xmbh)->paginate(10);
            //dd($item);
            return view('mgr.item_produce',compact('item','area_buss','city_area'));
        }*/
    public function displayindex($ib_xmbh)
    {


        $ib_xmmc = item_base::where('ib_xmbh', $ib_xmbh)->value('ib_xmmc');
        $fwzxzk = CommonController::$base_fwzxzk;
        $fwys = CommonController::$base_fwys;


        $result = item::where('ib_xmbh', $ib_xmbh)->latest('im_cpbh')->paginate(10);


        //dd($result);

        return view('Mgr.item_produce', compact('result', 'ib_xmmc', 'ib_xmbh', 'fwzxzk', 'fwys'));

    }



//       public function  show($produce) {
//           //$input=Input::except('_token');
//           $area_buss = area_buss::select('a_sqbh', 'a_sqmc')->where('a_type','1')->get();
//            $item=item::where('ib_xmbh',$produce)->paginate(10);
//            //dd($item);
//            return view('mgr.item_produce',compact('item','area_buss'));
//        }


    public function show($im_cpbh)
    {

        $result = item::find($im_cpbh);
        $result['im_fwzxzk'] = CommonController::$base_fwzxzk[$result['im_fwzxzk']];
        $result['im_fwys'] = CommonController::$base_fwys[$result['im_fwys']];
        $result2 = produce_pic::select('im_tpm', 'im_sltm', 'updated_at')->where('im_cpbh', $im_cpbh)->get();
        /*处理附带设备字符串格式*/
        if ($result['im_fwfdsb'] != 'empty') {
            $re = explode('|', $result['im_fwfdsb']);
            $result['im_fwfdsb'] = null;
            foreach ($re as $v) {
                $result['im_fwfdsb'] = $result['im_fwfdsb'] . CommonController::$base_fwfdsb[$v] . '、';
            }
            $result['im_fwfdsb'] = trim($result['im_fwfdsb'], '、');
        } else {
            $result['im_fwfdsb'] = '无';

        }


//        dd($result);
        return view('mgr.produce_form', compact('result', 'result2'));


    }

    public function produceadd($ib_xmbh)
    {
        //$result=Input::all();

        //dd($ib_xmbh);
        $fwys = CommonController::$base_fwys;
        $fwzxzk = CommonController::$base_fwzxzk;
        $fwfdsb = CommonController::$base_fwfdsb;

        $ib_xmmc = item_base::where('ib_xmbh', $ib_xmbh)->value('ib_xmmc');
        // $area_buss = area_buss::select('a_sqbh', 'a_sqmc')->where('a_type','1')->get();
        //dd('$ib_xmbh');
        return view('mgr.produce_add', compact('ib_xmmc', 'fwys', 'fwzxzk', 'fwfdsb', 'ib_xmbh'));

    }


    public function store(Request $request)
    {
        $result = $request->except('_token');
//        if($result['im_fwfdsb']){
//            foreach ($result['im_fwfdsb'] as $k=>$v){
//                if( $k!=$v){
//                    $a1=array_fill_keys($result['im_fwfdsb'],"b");
//                }
//
//
//                )
//
//                $result['im_fwfdsb']  =  array
//
//
//            }
//
//
//        }
        $result['im_fwfdsb'] = isset($result->im_fwfdsb) ? implode("|", $result->im_fwfdsb) : 'empty';

        $result2 = item_base::select('a_sqbh', 'a_sqmc', 'ib_xmmc', 'ib_xmlsh')->where('ib_xmbh', $result['ib_xmbh'])->first();
        $result['a_sqbh'] = $result2->a_sqbh;
        $result['ib_xmmc'] = $result2->ib_xmmc;
        $result['a_sqmc'] = $result2->a_sqmc;
        $result2['ib_xmlsh'] = $result2->ib_xmlsh + 1;
        $result['im_cpbh'] = str_pad($result['ib_xmbh'], 3, "0", STR_PAD_LEFT) . str_pad($result2['ib_xmlsh'], 4, "0", STR_PAD_LEFT);
        //dd($result);
        $item_base = item_base::find($result['ib_xmbh']);
        $item_base->ib_xmlsh = $result2['ib_xmlsh'];
        $item_base->save();
        $result = item::create($result);
        flash('增加信息成功','success');
        return back();

        //$result = array_merge($result2,$result);

        /*将获取的对象数组通过JSON方法转换成标准数组*/
//        $result2 = json_decode(json_encode($result2),TRUE);
//        $result=array_merge($result2,$result);
        // echo $result2['a_sqmc'];


    }

    public function edit($im_id)
    {

        $result = item::find($im_id);

        $fwys = CommonController::$base_fwys;
        $fwzxzk = CommonController::$base_fwzxzk;
        $fwfdsb = CommonController::$base_fwfdsb;
        // dd($result);


        if ($result['im_fwfdsb'] != 'empty') {
            $result['im_fwfdsb'] = explode('|', $result['im_fwfdsb']);
            //dd($result);
        } else {
            $result['im_fwfdsb'] = array(9);

        }

        return view('mgr.produce_edit', compact('result', 'fwys', 'fwzxzk', 'fwfdsb'));


    }


    public function update(Request $request, $im_id)
    {


        $result = $request->except('_token', '_method');
        //$result['im_fwfdsb']=isset($result->im_fwfdsb) ? implode("|",$result->im_fwfdsb):'empty';
        $result['im_fwfdsb'] = isset($result['im_fwfdsb']) ? implode("|", $result['im_fwfdsb']) : 'empty';

        //dd($result);

        $re = item::where('im_id', $im_id)->update($result);


    }

    public function destroy($im_id)
    {
        $re = item::where('im_id', $im_id)->delete();

        if ($re) {
            return back();
        }


    }


    /*ajax文件上传处理*/

    /**
     * @param \Illuminate\Http\Request $request
     */
    public function uploadpic(Request $request)
    {

        $ib_xmbh = substr(strrchr($request->header('Referer'), '/'), 1);
//dd($ib_xmbh);
        $file = $request->file('file');
        $target_dir = public_path('pic\produce\\') . $ib_xmbh;
        $filename = md5($ib_xmbh . '-' . time() . '-' . rand(0, 100)) . '.' . $file->getClientOriginalExtension();

        $fielPath = 'pic\produce\\' . $ib_xmbh . '\\';
        $allfilename = $fielPath . $filename;

        if (!is_dir($target_dir)) {
            mkdir($target_dir);

        }


        $exif = Image::make($file)->exif();// 由于PHP5.6.2EXIF有BUG 所以采用intervention/image的exif()方法读取Orientation信息

        // $file->move($target_dir,$allfilename);


//处理IOS系统文件的上传文件的旋转问题

        $fixPic = imagecreatefromstring(file_get_contents($file));

        if (!empty($exif['Orientation'])) {
            switch ($exif['Orientation']) {
                case 8:
                    $fixPic = imagerotate($fixPic, 90, 0);
                    break;
                case 3:
                    $fixPic = imagerotate($fixPic, 180, 0);
                    break;
                case 6:
                    $fixPic = imagerotate($fixPic, -90, 0);
                    break;
            }
        }

        imagejpeg($fixPic, $target_dir . '\\' . $filename);


//生成缩略图的方法
        $thumbFilename = 's-' . $filename;
        $thumbpic = $target_dir . '\\' . $thumbFilename;
        $thumbpicPath = $fielPath . $thumbFilename;
        $img = Image::make($target_dir . '\\' . $filename);
        $img->resize(100, 100);
        $img->save($thumbpic);
        echo '生成缩略图到' . $thumbpic;


//文件名信息写入数据库方式1

//        $file_pic = new item_pic;
//        $file_pic->im_cpbh=$ib_xmbh;
//        $file_pic->im_tpm=$filename;
//        $file_pic->save();


        //文件名信息写入数据库方式2

        $item_pic['im_cpbh'] = $ib_xmbh;
        $item_pic['im_tpm'] = $allfilename;
        $item_pic['im_sltm'] = $thumbpicPath;
        $re = produce_pic::create($item_pic);

        echo "已新建目录上传文件";


        // dd($file);


    }

    public function uploadproduce(Request $request, $im_cpbh)
    {


        $result = item::find($im_cpbh);
        //dd($result);
        return view('mgr.uploadproduce', compact('result'));

    }


}
