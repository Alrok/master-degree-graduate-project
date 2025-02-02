@extends('layouts.app')

@section('title', __('My shop'))

@section('content')
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-3 col-sm-6">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img style="max-height: 220px" src="{{$product['image']}}" alt="{{$product['name']}}">
                            </div>
                            <h2><a href="{{$product['url']}}">{{$product['name']}}</a></h2>
                            <div class="product-carousel-price">
                                <ins>{{$product['offers']['price'] ?? 0}} {{$product['offers']['priceCurrency'] ?? 'UAH'}}</ins>
                                {{--<del>$999.00</del>--}}
                            </div>

                            <div class="product-option-shop">
                                <a class="go_to_shop_button" data-product_id="{{$product['id']}}" rel="nofollow" href="{{$product['url']}}">Go to shop</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection