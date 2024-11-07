@extends('layout')
@section('title', 'Product - PT Indowire Prima Industrindo')
@section('customcss')
<style>
    .vh80{
        height: 80vh !important;
    }

    .center{
        justify-content: center;
        align-items: center;
    }

    
</style>

@endsection

@section('content')
<div class="section">
    <div class="vh80 d-flex text-center center animate__animated animate__fadeInUp">
        <h1>Our Products</h1>
    </div>
    <div class="catalog-holder">
        <div class="container px-5">
            <div class="row">
                <div class="col-lg-3">
                    filter
                </div>
                <div class="col-lg-9">
                    test
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection