<?php

namespace App\Http\Controllers\Blog\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Admin\MainRepository;
use App\Repositories\Admin\ProductRepository;
use App\Repositories\Admin\OrderRepository;


use MetaTag;

class MainController extends AdminBaseController
{
    private $productRepository;
    private $orderRepository;

    public function __construct(){
        parent::__construct();
        $this->productRepository =
            app(ProductRepository::class);
        $this->orderRepository =
            app(OrderRepository::class);
    }

    

    public function index(){
        // page title my admin panel

        $countOrders=MainRepository::getCountOrders();
        $countProducts=MainRepository::getCountProducts();
        $countUser=MainRepository::getCountUsers();
        $countCategory=MainRepository::getCountCategoties();

        $perpage=4;
        
        $last_products=$this->productRepository->getLastProducts($perpage);
        $last_orders=$this->orderRepository->getLastOrders($perpage);
        MetaTag::setTags(['title' => 'Admin panel']);
        return view('blog.admin.main.index',
            compact('countOrders',
              'countProducts',
              'countUser',
              'countCategory',
              'last_products',
              'last_orders'
                )    
            );
    }
}
