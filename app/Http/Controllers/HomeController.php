<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class HomeController extends GeneralController
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products  = Product::where(['is_active'=>1])->limit(9)
            ->orderBy('id','desc')
            ->orderBy('position','ASC')
            ->get();

        return view('frontend.home.index',[
        'newProducts' => $products
            ]);
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function about()
    {
        $products  = Product::where(['is_active'=>1])->limit(9)
            ->orderBy('id','desc')
            ->orderBy('position','ASC')
            ->get();
        return view('frontend.about',[
            'newProducts' => $products
        ]);
    }
    public function stuff()
    {
        return view('frontend.stuff');
    }
    public function gallery()
    {
        return view('frontend.gallery');
    }
    public function reservation()
    {
        return view('frontend.reservation');
    }
    public function category($id)
    {

        $category = Category::where(['id' => $id])->first();

        $products_by_cat = Product::where(['is_active' => 1,'category_id' => $category->id ])
            ->orderBy('id', 'desc')
            ->paginate(12);

        return view('frontend.category',
            [
            'products_by_cat' => $products_by_cat,
            'category' => $category,
        ]);

    }
    public function article()
    {
        $categories = Category::where([
            'type' => 2,
            'is_active' => 0,
            'parent_id' => 0
        ])->orderBy('position', 'ASC')->get();

//         $articles = Article::latest()->paginate(5);
//        $articles = Article::where('is_active', 1)->orderBy('position', 'ASC')->orderBy('id', 'DESC')->get();
        $articles = Article::where('is_active', 0)->orderBy('position', 'DESC')->orderBy('id', 'DESC')->paginate(3);

        $articles_limit = Article::where('is_active',0)->orderBy('position', 'ASC')->orderBy('id', 'ASC')->limit(3)->get();

//        dd($articles_limit);

        return view('frontend.article', [
            'articles' => $articles,
            'categories' => $categories,
            'limit' => $articles_limit
        ]);

    }
    public function detailArticle($slug)
    {
        $article = Article::where([
            'slug' => $slug,
            'is_active' => '0'
        ])->first();
        $sameArticles  = Article::where([
            ['is_active', '=', 0],
            ['id','<>',$article->id]
        ])->orderBy('id','desc')
            ->orderBy('position','ASC')
            ->limit(4)
            ->get();
//        if(!$article){
//            return view('errors.404');
//        }
        return view('frontend.detailArticle',[
            'article' => $article,
            'sameArticles' => $sameArticles
        ]);
    }

    public function detailProduct($slug)
    {
        $product = Product::where(['is_active' => 1,'slug' => $slug])->first();

        $sameProducts  = Product::where([
            ['is_active', '=', 1],
            ['id','<>',$product->id],
            ['category_id','=',$product->category_id]
        ])->orderBy('id','desc')
            ->orderBy('position','ASC')
            ->limit(4)
            ->get();

        return view('frontend.detailProduct',[
            'product' => $product,
            'sameProducts' => $sameProducts
        ]);
    }

    public function getProductsByCategory(Request $request, $slug)
    {
        $filter_price = $request->query('gia');
        $filter_sort = $request->query('sap-sep');

        $branch_ids = [];

        // step 1 : lấy chi tiết thể loại
        $cate = Category::where([['slug' => $slug]])->first();

        if ($cate) {
            // step 1.1 Check danh mục cha -> lấy toàn bộ danh mục con để where In
            $ids = []; // mảng lưu toàn id của danh mục cha + id - danh mục con

            $ids[] = $cate->id; // 1
            $child_categories = []; // lưu danh mục con

            foreach ($this->categories as $child) {
                if ($child->parent_id == $cate->id) {
                    $ids[] = $child->id; // thêm id của danh mục con vào mảng ids
                    $child_categories[] = $child;
                }
            } // ids = 1,7,8,9,11

            // step 2 : lấy list sản phẩm theo thể loại
            //$list_products = Product::where(['is_active' => 1])
            //                    ->whereIn('category_id' , $ids)
            //                    ->latest()
            //                    ->paginate(16);

            $query = DB::table('products')->select('*')
                ->whereIn('category_id', $ids)
                ->where('is_active', '=', 1);


            // Lọc theo giá
            if ($filter_price) {
                $arr_price = explode('-', $filter_price);
                if ($arr_price) {
                    $min_price = (int)$arr_price[0];
                    $max_price = (int)$arr_price[1];

                    if ($min_price > 0) {
                        $query->where('sale', '>=' , $min_price);
                    }

                    if ($max_price > 0) {
                        $query->where('sale', '<=' , $max_price);
                    }
                }
            }

            // Sắp sếp
            if ($filter_sort) {
                if ($filter_sort == 'noi-bat') {
                    $query->orderBy('is_hot', 'DESC');
                } elseif ($filter_sort == 'ban-chay-nhat') {
                    $query->orderBy('is_hot', 'DESC');
                } elseif ($filter_sort == 'gia-thap-den-cao') {
                    $query->orderBy('sale', 'ASC');
                } elseif ($filter_sort == 'gia-cao-den-thap') {
                    $query->orderBy('sale', 'DESC');
                }

            } else {
                $query->orderBy('id', 'DESC');
            }

            $list_products = $query->paginate(16);;

            return view('home.category',[
                'category' => $cate,
                'products' => $list_products,
                'filter_sort' => $filter_sort,
                'filter_price' => $filter_price ? $filter_price : '',

            ]);

        } else {
            return $this->notfound();
        }
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
