@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Détail du prospect
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('pages.leads.show_fields')
                    <a href="{!! route('leads.index') !!}" class="btn btn-default">{{trans('app.general:back')}}</a>
                </div>
            </div>
        </div>
    </div>
@endsection
