@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Édition d'une taxe
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tax, ['route' => ['taxes.update', $tax->id], 'method' => 'patch']) !!}

                        @include('pages.taxes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
