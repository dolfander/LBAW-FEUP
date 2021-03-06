@extends('layouts.app')

@section('content')

<ol style="margin-bottom:15px;" class="p_breadcrumb breadcrumb">
        <li class="breadcrumb-item h6"><a href="/">Home</a></li>
        <li class="breadcrumb-item active h6">{{$category->name}}</li>
    </ol>
<hr>


<div id="search-container" class="container-fluid">
        <div class="row justify-content-center">
            @each('partials.other_product',$products_paginate, 'product')
    </div>
</div>


{{$products_paginate->links()}}

@endsection
