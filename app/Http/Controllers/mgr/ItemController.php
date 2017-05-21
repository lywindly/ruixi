<?php

namespace App\Http\Controllers\Mgr;

use App\Http\Model\area_buss;
use App\Http\Model\item_base;
use App\Http\Model\item_pic;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class ItemController extends CommonController
{


    public function index(Request $request)
    {

        $area_buss = area_buss::select('a_sqbh', 'a_sqmc')->where('a_type', '1')->get();

        $xmfj = CommonController::$base_xmfj;
        $xmlx = CommonController::$base_xmlx;

        $result = item_base::select('a_sqmc', 'ib_xmbh', 'ib_xmmc', 'ib_xmlsh', 'ib_xmfj', 'ib_xmlx', 'updated_at')
            ->latest('ib_xmbh')->paginate(10);

        return view('mgr.item', compact('result', 'area_buss', 'xmfj', 'xmlx'));



    }


    public function search(Request $request)
    {

        $xmfj = CommonController::$base_xmfj;
        $xmlx = CommonController::$base_xmlx;

        $area_buss = area_buss::select('a_sqbh', 'a_sqmc')->where('a_type', '1')->get();
//        $result = item_base::where('a_sqbh', $request->a_sqbh)->orderBy('ib_xmbh', 'DESC')->paginate(10);

        $result = item_base::where('a_sqbh', $request->a_sqbh)->latest('ib_xmbh')->paginate(15);

        return view('mgr.item_search', compact('result', 'area_buss', 'xmfj', 'xmlx'));

    }

    public function show($ib_xmbh)
    {

        $xmfj = CommonController::$base_xmfj;
        $xmlx = CommonController::$base_xmlx;
        $result = item_base::find($ib_xmbh);
        $result2 = item_pic::select('im_tpm', 'im_sltm', 'updated_at')->where('im_cpbh', $ib_xmbh)->get();
        //dd($result2);
        return view('mgr.item_form', compact('result', 'xmfj', 'xmlx', 'result2'));


    }


    public function create(Request $request)
    {

        $area_buss = area_buss::select('a_sqbh', 'a_sqmc')->where('a_type', '1')->get();

        $xmfj = CommonController::$base_xmfj;
        $xmlx = CommonController::$base_xmlx;

        return view('mgr.item_add_sq', compact('area_buss', 'xmfj', 'xmlx'));

    }


    public function store(Request $request)

    {


        $result = $request->except('_token');

        //$temp = area_buss::select('a_sqmc')->where('a_sqbh', $result['a_sqbh'])->first();
        //$result['a_sqmc'] = area_buss::select('a_sqmc')->where('a_sqbh', $result['a_sqbh'])->value('a_sqmc');

        $result['a_sqmc'] = area_buss::select('a_sqmc')->where('a_sqbh', $result['a_sqbh'])->first()['a_sqmc'];

        //dd($result);


        $result['ib_xmpy'] = CommonController::encode($result['ib_xmmc']);

         $result=item_base::create($result);
        flash('增加信息成功','success');
         return back();

        //list($result['a_sqbh'],$result['a_sqmc']) = explode('_', $result['a_sqbh']);
//


//dd($result);
        //

        //$result = item_base::where('a_sqbh', $request->a_sqbh)->orderBy('ib_xmbh', 'DESC')->paginate(10);

        //             return redirect('/item/create');

        /*
                        if(!$result['ib_xmbh']){

                        }else{
                            $result=null;
                            $area_buss = area_buss::select('a_sqbh', 'a_sqmc')->where('a_type','1')->get();
                            $result = item_base::where('a_sqbh', $request->a_sqbh)->orderBy('ib_xmbh', 'DESC')->paginate(10);

                            return view('mgr.item_search', compact('area_buss', 'result'));
                        }*/

    }




    public function edit($ib_xmbh)
    {


        $area_buss = area_buss::select('a_sqbh', 'a_sqmc')->where('a_type', '1')->get();
        $xmfj = CommonController::$base_xmfj;
        $xmlx = CommonController::$base_xmlx;
        $result = item_base::find($ib_xmbh);
        return view('mgr.item_edit_sq', compact('result', 'area_buss', 'xmfj', 'xmlx'));


    }

    public function update(Request $request, $ib_xmbh)
    {


        $result = $request->except('_token', '_method');

        $result['a_sqmc'] = area_buss::select('a_sqmc')->where('a_sqbh', $result['a_sqbh'])->value('a_sqmc');

        $result['ib_xmpy'] = CommonController::encode($result['ib_xmmc']);

//        dd($result);

        $re = item_base::where('ib_xmbh', $ib_xmbh)->update($result);


    }

    public function destroy($ib_xmbh)
    {
        $re = item_base::where('ib_xmbh', $ib_xmbh)->delete();

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

        $file = $request->file('file');
        $target_dir = public_path('pic\item\\') . $ib_xmbh;
        $filename = md5($ib_xmbh . '-' . time() . '-' . rand(0, 100)) . '.' . $file->getClientOriginalExtension();

        $fielPath = 'pic\item\\' . $ib_xmbh . '\\';
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
        /*
        $file_pic = new item_pic;
        $file_pic->im_cpbh=$ib_xmbh;
        $file_pic->im_tpm=$filename;
        $file_pic->save();*/


//文件名信息写入数据库方式2
        $item_pic['im_cpbh'] = $ib_xmbh;
        $item_pic['im_tpm'] = $allfilename;
        $item_pic['im_sltm'] = $thumbpicPath;
        $re = item_pic::create($item_pic);

        echo "已新建目录上传文件";


        // dd($file);


    }

    public function uploaditem(Request $request, $ib_xmbh)
    {


        $result = item_base::find($ib_xmbh);
        //dd($result);
        return view('mgr.uploaditem', compact('result'));

    }


}



