@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Product
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'products.store']) !!}

                    @include('pages.products.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js-app-scope)

    IrisCrm.initDualListBox('taxes_list');

@endsection