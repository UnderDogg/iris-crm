@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Product
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('pages.products.show_fields')
                    <a href="{!! route('products.index') !!}" class="btn btn-default">{{trans('app.general:back')}}</a>
                </div>
            </div>
        </div>
    </div>
@endsection
