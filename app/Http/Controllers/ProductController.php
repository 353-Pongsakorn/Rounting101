<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Inertia\Inertia;




class ProductController extends Controller
{
    private $products = [
        ['id' => 1, 'name' => 'skateboard', 'description' => 'Highly durable, It has a beautiful, modern style.', 'price' => 105, 'image' => 'https://contents.mediadecathlon.com/p2379505/k$1faa81ab0e134c517095770aca62b537/kids-3-7-years-skateboard-play-120-zodiac-niu-oxelo-8640793.jpg?f=1920x0&format=auto'],
        ['id' => 2, 'name' => 'Classic Rollerball Pen', 'description' => 'A luxurious pen with a simple, elegant design that works smoothly.', 'price' => 5, 'image' => 'https://d1o785do8fyxgx.cloudfront.net/stock_item/stock_item_images/images/000/000/559/original/EMP_PEN_ROLLERBALL_GROOVE_TEAL_1_ECOMM_RESIZED.png?1676473644'],
        ['id' => 3, 'name' => 'Book', 'description' => 'Beautiful design, has a lot of pages, suitable for people who need to take a lot of notes.', 'price' => 15, 'image' => 'https://dictionary.cambridge.org/images/thumb/book_noun_001_01679.jpg?version=6.0.43'],
        ['id' => 4, 'name' => 'Plain White Art Paper', 'description' => 'White, ultra-thin paper, suitable for printing.', 'price' => '1 sheet per 1 piece', 'image' => 'https://5.imimg.com/data5/HC/KF/HZ/SELLER-4619430/white-art-paper.jpg'],
        ['id' => 5, 'name' => 'Wine Glass', 'description' => 'Elegant design wine glass Made from strong materials', 'price' => 75, 'image' => 'https://www.barlens.com.au/wp-content/uploads/2019/08/CA0075003-_Wine-Glass-Breeze-350ml1.jpg'],
        ['id' => 6, 'name' => 'Beats Studio Pro Wireless Headphones', 'description' => 'Very beautiful headphones with good bass.', 'price' => 575, 'image' => 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MQTR3?wid=1144&hei=1144&fmt=jpeg&qlt=90&.v=1687660671097'],
        ['id' => 7, 'name' => 'Wilson Nba 29.5" Basketball', 'description' => 'The most beautiful and special basketball', 'price' => 100, 'image' => 'https://target.scene7.com/is/image/Target/GUEST_20affc7e-e0d7-4eb6-a6f3-68d13520f8be?wid=488&hei=488&fmt=pjpeg'],
        ['id' => 8, 'name' => 'Bruton Trendy Sports Shoes For Men', 'description' => 'Shoes with the most beautiful and modern design', 'price' => 750, 'image' => 'https://www.jiomart.com/images/product/original/rvrgwpjvsp/bruton-trendy-sports-shoes-for-men-blue-product-images-rvrgwpjvsp-0-202209021256.jpg?im=Resize=(1000,1000)'],
        ['id' => 9, 'name' => 'Apple Watch Series 10 GPS 42mm', 'description' => 'Beautiful Apple Watch design It is all digital.', 'price' => 849, 'image' => 'https://www.imagineonline.store/cdn/shop/files/Apple_Watch_Series_10_42mm_GPS_Silver_Aluminium_Sport_Band_Denim_PDP_Image_Position_1__en-IN_f7f0d700-c9f3-4393-8459-5cb84603f753.jpg?v=1727257021'],
        ['id' => 10, 'name' => 'Sparkling Infinity Heart Collier Necklace', 'description' => 'A very special necklace Beautiful, luxurious design', 'price' => 499, 'image' => 'https://th.pandora.net/dw/image/v2/BJRN_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dw895eef59/productimages/singlepackshot/362666C01_RGB.jpg?sw=900&sh=900&sm=fit&sfrm=png&bgcolor=F5F5F5'],
    ];
    


    public function index()
{
    $products = Product::all();  // Get all products from the database
    return Inertia::render('Products/Index', ['products' => $products]);
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
         // ตรวจสอบว่า user ได้เข้าสู่ระบบหรือยัง
    if (!auth()->check()) {
        return redirect()->route('login');  // หากยังไม่ได้เข้าสู่ระบบจะไปที่หน้า login
    }

    $product = collect($this->products)->firstWhere('id', $id);

    if (!$product) {
        abort(404, 'Product not found');
    }

    return Inertia::render('Products/Show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
