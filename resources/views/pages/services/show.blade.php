@extends('layouts.app')

@section('breadcrumbs')
    {!! Breadcrumbs::render('service', $service) !!}
@endsection

@section('content')
    <section class="content-header">
        <h1>
            Détail du service
        </h1>
    </section>
    <div class="content">
        @include('pages.services.show_fields')
        <a href="{!! action('ServiceController@index') !!}" class="btn btn-lg btn-flat bg-blue"><i class="fa fa-chevron-circle-left"></i> {{trans('app.general:back')}}</a>
    </div>
@endsection
