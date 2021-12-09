@extends('dashboard.layouts.contentLayoutMaster')

@section('css')
    <link rel="stylesheet" href="{{asset('dashboard/assets/pages/jquery.filer/css/jquery.filer.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('dashboard/assets/pages/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('dashboard/bower_components/select2/css/select2.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('dashboard/pages/catalog/products/addProduct/style.css')}}" type="text/css" />
@endsection

@section('content')

    <form method="post" action="/test">
        {{-- Start product name section--}}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-9 col-md-12">
                        <input type="text"
                               class="form-control product-name-input mt-1 mb-1"
                               placeholder="Enter your product name">
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="row mt-2">
                            <div class="col-lg-4 col-sm-6">
                                <select name="language" class="form-select form-control bordered-select">
                                    <option value="opt1">ar</option>
                                    <option value="opt2">en</option>
                                    <option value="opt3">fr</option>
                                </select>
                            </div>
                            <div class="col-lg-8 col-sm-6">
                                <div class="d-flex justify-content-between toolbar">
                                    <a href="#" class="text-center">
                                        <i class="fa fa-industry"></i>
                                        <p>Sales</p>
                                    </a>
                                    <a href="#" class="text-center">
                                        <i class="fa fa-bars"></i>
                                        <p>Products</p>
                                    </a>
                                    <a href="#" class="text-center">
                                        <i class="fa fa-question-circle"></i>
                                        <p>Help</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- end product name section--}}

        {{-- start Product information Tabs--}}
        <div class="row add-product-information">
            <div class="col-12">
                <ul class="nav nav-tabs  tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#basic-settings" role="tab" aria-selected="true">Basic settings</a>
                    </li>
                    <li class="nav-item quantities-tab">
                        <a class="nav-link" data-bs-toggle="tab" href="#quantities" role="tab" aria-selected="false">Quantities</a>
                    </li>
                    <li class="nav-item combinations-tab d-none">
                        <a class="nav-link" data-bs-toggle="tab" href="#combinations" role="tab" aria-selected="false">Combinations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#shipping" role="tab" aria-selected="false">Shipping</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#pricing" role="tab" aria-selected="false">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#seo" role="tab" aria-selected="false">SEO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#options" role="tab" aria-selected="false">Options</a>
                    </li>
                </ul>


                <div class="tab-content tabs card-block">
                    <div class="tab-pane active" id="basic-settings" role="tabpanel">
                        @include('dashboard.pages.catalog.products.addProduct.tabs.basicSettings')
                    </div>
                    <div class="tab-pane" id="quantities" role="tabpanel">
                        @include('dashboard.pages.catalog.products.addProduct.tabs.quantities')
                    </div>
                    <div class="tab-pane" id="combinations" role="tabpanel">
                        @include('dashboard.pages.catalog.products.addProduct.tabs.combinations')
                    </div>
                    <div class="tab-pane" id="shipping" role="tabpanel">
                        @include('dashboard.pages.catalog.products.addProduct.tabs.shipping')
                    </div>
                    <div class="tab-pane" id="pricing" role="tabpanel">
                        @include('dashboard.pages.catalog.products.addProduct.tabs.pricing')
                    </div>
                    <div class="tab-pane" id="seo" role="tabpanel">
                        @include('dashboard.pages.catalog.products.addProduct.tabs.seo')
                    </div>
                    <div class="tab-pane" id="options" role="tabpanel">
                        @include('dashboard.pages.catalog.products.addProduct.tabs.options')
                    </div>
                </div>
            </div>
        </div>
        {{-- start Product information Tabs--}}
    </form>

    {{-- Start Add Product Footer--}}
    <div class="product-footer d-flex justify-content-between">
        <div class="d-flex justify-content-center align-items-center p-l-40">
            <a href="#">
                <i class="fa fa-trash fa-2x text-muted"></i>
            </a>
            <a href="#" class="btn btn-secondary m-r-20 m-l-20">Preview</a>
            <div>
                <span class="fw-bold">Offline</span>
                <input type="checkbox" class="js-single" checked />
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center p-l-40">
            <div class="btn-group dropdown-split-inverse">
                <button type="button" class="btn btn-primary"><i class="icofont icofont-exchange"></i>Save</button>
                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="visually-hidden">Toggle primary</span>
                </button>
                <div class="dropdown-menu" style="">
                    <a class="dropdown-item waves-effect waves-light" href="#">Duplicate</a>
                    <a class="dropdown-item waves-effect waves-light" href="#">Go to catalog</a>
                    <a class="dropdown-item waves-effect waves-light" href="#">Add new product</a>
                </div>
            </div>
        </div>
    </div>
    {{-- Start Add Product Footer--}}



@endsection


@section('js')
    <!-- File upload js -->
    <script src="{{asset('dashboard/assets/pages/file-upload/dropzone-amd-module.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/pages/ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript" src="{{asset('dashboard/bower_components/select2/js/select2.full.min.js')}}"></script>
    <script src="{{asset('dashboard/pages/catalog/products/addProduct/script.js')}}"></script>
@endsection
