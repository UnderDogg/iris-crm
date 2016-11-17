@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Édition d'un produit
        </h1>
   </section>
   <div class="content">
       @include('errors.list')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($product, ['action' => ['ProductController@update', $product->id], 'method' => 'patch']) !!}

                        @include('pages.products.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection

@section('js-app-scope')

    IrisCrm.initDualListBox('taxes_list');
    IrisCrm.initDatePicker('sale_datestart');
    IrisCrm.initDatePicker('sale_dateend');

@endsection
