<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Helper, File, Session, Auth, DB;

class CouponController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return Response
    */
    public function index(Request $request)
    {

        $used = $request->used ? $request->used : 0;
        $query = Coupon::where('used', $used);

        $items = $query->orderBy('id', 'desc')->paginate(20);        
      
        return view('backend.coupon.index', compact( 'items', 'used'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
    public function create(Request $request)
    {          

        return view('backend.coupon.create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  Request  $request
    * @return Response
    */
    public function store(Request $request)
    {
        $dataArr = $request->all();
        
          $this->validate($request,[                                    
            'coupon' => 'required',
            'coupon_value' => 'required',            
        ],
        [                                    
            'coupon.required' => 'Bạn chưa nhập mã coupon',
            'coupon_value.required' => "Bạn chưa nhập giá trị"
        ]);       
        $dataArr['coupon_value'] = str_replace(",", "", $dataArr['coupon_value']);    
        $dataArr['used'] = $request->used ? 1 : 0;
        unset($dataArr['_token']);
        
        DB::table('coupon')->insert($dataArr);        
        
        Session::flash('message', 'Tạo mới thành công');

        return redirect()->route('coupon.index');
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
    public function show($id)
    {
    //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
    public function edit($id)
    {        

        $detail = Coupon::find($id);

        return view('backend.coupon.edit', compact('detail'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  Request  $request
    * @param  int  $id
    * @return Response
    */
    public function update(Request $request)
    {
        $dataArr = $request->all();
        
        $this->validate($request,[                                    
            'coupon' => 'required',
            'coupon_value' => 'required',            
        ],
        [                                    
            'coupon.required' => 'Bạn chưa nhập mã coupon',
            'coupon_value.required' => "Bạn chưa nhập giá trị"
        ]);           
        
        $dataArr['used'] = $request->used ? 1 : 0;
        $dataArr['coupon_value'] = str_replace(",", "", $dataArr['coupon_value']);
        unset($dataArr['_token']);
        DB::table('coupon')->where('id', $dataArr['id'])->update($dataArr);
       
        Session::flash('message', 'Cập nhật thành công');        

        return redirect()->route('coupon.index');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return Response
    */
    public function destroy($id)
    {
        // delete
        $model = Coupon::find($id);
        $model->delete();

        // redirect
        Session::flash('message', 'Xóa thành công');
        return redirect()->route('coupon.index');
    }
}