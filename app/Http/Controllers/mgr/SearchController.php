<?php

namespace App\Http\Controllers\mgr;

use App\Http\Model\item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends CommonController
{
   public function Search(){

       return view('mgr.search');


    }


    public function searchResult(Request $request)

    {

        $Type=$request->searchType;
        $kwords=$request->keywords;
        $fwzxzk = CommonController::$base_fwzxzk;
        $fwys = CommonController::$base_fwys;
        $cxlx = CommonController::$base_cxlx;

        switch ($Type) {
            case 0:
                $result = item::where('im_fwfh', 'like', '%' . $kwords . '%')->latest('im_cpbh')->paginate(10);
                break;
            case 1:
                $result = item::where('ib_xmmc', 'like', '%' . $kwords . '%')->latest('im_cpbh')->paginate(10);
                break;
            case 2:

                $result = item::where('im_fwjzmj', '<', $kwords)->latest('im_cpbh')->paginate(10);
                break;
            default:
                $result = item::where('im_fwfh', 'like', '%' . $kwords. '%')->latest('im_cpbh')->paginate(10);
        }


        if ($result->isEmpty()) {
            flash('未查询到数据','danger');
            return view('mgr.search');


        } else {
            echo $Type;

           return view('mgr.searchresult', compact('result', 'fwys', 'fwzxzk','cxlx','Type','kwords'));
        }

//dd($result);

   }
}
