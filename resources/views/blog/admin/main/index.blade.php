@extends('layouts.app_admin')

@section('content')
<section class="content-header">
    @component('blog.admin.components.breadcrump')
        @slot('title')Панель управления??? @endslot
        @slot('parent')Главное!!!!! @endslot
        @slot('active')@endslot
    @endcomponent
</section>
<section class="content">
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-blue">
                <div class="inner">
                <h4>К-во заказов: {{$countOrders}}</h4>
                <p>New Orders</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
                <div class="inner">
                <h4>К-во товаров: {{$countProducts}}</h4>
                <p>товары</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-yellow">
                <div class="inner">
                <h4>К-во пользователей: {{$countUser}}</h4>
                <p>пользователи</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-red">
                <div class="inner">
                <h4>К-во категорий:  {{$countCategory}}</h4>
                <p>категории</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pi-graf"></i>
                </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>


    <div class="col-md-6">
        @include('blog.admin.main.include.orders');
        @include('blog.admin.main.include.recently');
    </div>
</section>

@endsection

