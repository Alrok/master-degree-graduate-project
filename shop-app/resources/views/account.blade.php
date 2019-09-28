@extends('layouts.app')

@section('title', __('Account'))

@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center" style="padding: 40px">
                        <h3>Hello {{ Auth::user()->name }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
