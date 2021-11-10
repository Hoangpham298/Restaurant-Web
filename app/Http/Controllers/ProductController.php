<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(50); // select * from user order by id desc limit 20 offset 0
        // $data = User::all(); // select * from user

        return view('backend.product.index', [
            'data' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('backend.product.create', [
        'categories' => $categories
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',

        ],[
            'name.required' => 'Bạn cần phải nhập vào tiêu đề',

        ]);
        $product = new Product();
        $product->name = $request->input('name');

        if($request->hasFile('image')){
            $file = $request->file('image');
            $file_name = time().'_'.$file->getClientOriginalName();
            $path_upload = 'upload/product/';
            $file->move($path_upload,$file_name);
            $product->image = $path_upload.$file_name;
        }

        $product->stock = $request->input('stock');
        $product->slug = Str::slug($request->input('name'));
        $product->price = $request->input('price');
        $product->sale = $request->input('sale');
        $product->category_id = $request->input('category_id');


        $is_active = 0;
        if($request->has('is_active')){
            $is_active = $request->input('is_active');
        }
        $product->is_active = $is_active;

        $position = 0;
        if($request->has('position')){
            $position = $request->input('position');
        }
        $product->position = $position;

        $is_hot = 0;
        if($request->has('is_hot')){
            $is_hot = $request->input('is_hot');
        }
        $product->is_hot = $is_hot;

        $product->url =$request->input('url');

        $product->summary = $request->input('summary');
        $product->description = $request->input('description');

        $product->save();



        return redirect()->route('admin.product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        {
            $product = Product::findOrFail($id);
            $categories = Category::all();

            return view('backend.product.edit', [
                'product' => $product,
                'categories' => $categories,
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',

        ],[
            'name.required' => 'Bạn cần phải nhập vào tên sản phẩm',

        ]);

        $product = Product::findorFail($id);; // khởi tạo model
        $product->name = $request->input('name');
        $product->slug = Str::slug($request->input('name'));

        // Thay đổi ảnh
        if ($request->hasFile('new_image')) {
            // xóa file cũ
            @unlink(public_path($product->image));
            // get file mới
            $file = $request->file('new_image');
            // get tên
            $filename = time().'_'.$file->getClientOriginalName();
            // duong dan upload
            $path_upload = 'uploads/product/';
            // upload file
            $request->file('new_image')->move($path_upload,$filename);

            $product->image = $path_upload.$filename;
        }

        $product->stock = $request->input('stock'); // số lượng
        $product->price = $request->input('price');
        $product->sale = $request->input('sale');
        $product->category_id = $request->input('category_id');
        //$product->parent_id = $request->input('parent_id');
//        $product->brand_id = $request->input('brand_id');
//        $product->vendor_id = $request->input('vendor_id');
//        $product->unit = $request->input('unit');

        $position = 0 ;
        if ($request->has('position')){
            $position = $request->input('position');
        }
        $product->position = $position;
//        $product->url = $request->input('url');

        // Trạng thái
        $is_active = 0;
        if ($request->has('is_active')) {//kiem tra is_active co ton tai khong?
            $is_active = $request->input('is_active');
        }

        $product->is_active = $is_active;

        // Sản phẩm Hot
        $is_hot = 0 ;
        if ($request->has('is_hot')){
            $is_hot = $request->input('is_hot');
        }
        $product->is_hot=$is_hot;
        $product->summary = $request->input('summary');
        $product->description = $request->input('description');
        $product->user_id = 0;
        $product->save();

        // chuyển hướng đến trang
        return redirect()->route('admin.product.index');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $isDelete = Product::destroy($id); // true | false

        if ($isDelete) {
            return response()->json(['success' => 1,'message' => 'Thành công']); // { 'success':1, 'message' : 'Thành công' }
        } else {
            return response()->json(['success' => 0,'message' => 'Thất bại']);
        }
    }
}
