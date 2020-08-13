@extends('adminlte::page')

@section('title', 'Show Order')

@section('content_header')
    <h1>Show CustomerToken</h1>
@stop

@section('css')

@stop

@section('js')

@stop

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show CustomerToken</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('orders.index') }}"> Back</a>

            </div>

        </div>

    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="box card box-solid">
            <div class="box-header card-header with-border">
                <i class="fa fa-text-width"></i>

                <h3 class="box-title card-title">
                    CustomerToken Orders
                </h3>
            </div>
            <!-- /.box-header card-header -->
            <div class="box-body card-body">
                @include('orders.table', ['orders' => $customerToken->orders()->get()])</h3>
            </div>
            <!-- /.box-body card-body -->
        </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">


        <div class="box card box-solid">
            <div class="box-header card-header with-border">
                <i class="fa fa-text-width"></i>

                <h3 class="box-title card-title">Id</h3>
            </div>
            <!-- /.box-header card-header -->
            <div class="box-body card-body">
                <blockquote>
                    {{ $customerToken->id }}
                </blockquote>
            </div>
            <!-- /.box-body card-body -->
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="box card box-solid">
            <div class="box-header card-header with-border">
                <i class="fa fa-text-width"></i>

                <h3 class="box-title card-title">name</h3>
            </div>
            <!-- /.box-header card-header -->
            <div class="box-body card-body">
                <blockquote>
                    {{ $customerToken->name }}
                </blockquote>
            </div>
            <!-- /.box-body card-body -->
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="box card box-solid">
            <div class="box-header card-header with-border">
                <i class="fa fa-text-width"></i>

                <h3 class="box-title card-title">email</h3>
            </div>
            <!-- /.box-header card-header -->
            <div class="box-body card-body">
                <blockquote>
                    {{ $customerToken->email }}
                </blockquote>
            </div>
            <!-- /.box-body card-body -->
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="box card box-solid">
            <div class="box-header card-header with-border">
                <i class="fa fa-text-width"></i>

                <h3 class="box-title card-title">cpf</h3>
            </div>
            <!-- /.box-header card-header -->
            <div class="box-body card-body">
                <blockquote>
                    {{ $customerToken->cpf }}
                </blockquote>
            </div>
            <!-- /.box-body card-body -->
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="box card box-solid">
            <div class="box-header card-header with-border">
                <i class="fa fa-text-width"></i>

                <h3 class="box-title card-title">role_id</h3>
            </div>
            <!-- /.box-header card-header -->
            <div class="box-body card-body">
                <blockquote>
                    {{ $customerToken->role_id }}
                </blockquote>
            </div>
            <!-- /.box-body card-body -->
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="box card box-solid">
            <div class="box-header card-header with-border">
                <i class="fa fa-text-width"></i>

                <h3 class="box-title card-title">created_at</h3>
            </div>
            <!-- /.box-header card-header -->
            <div class="box-body card-body">
                <blockquote>
                    {{ $customerToken->created_at }}
                </blockquote>
            </div>
            <!-- /.box-body card-body -->
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="box card box-solid">
            <div class="box-header card-header with-border">
                <i class="fa fa-text-width"></i>

                <h3 class="box-title card-title">updated_at</h3>
            </div>
            <!-- /.box-header card-header -->
            <div class="box-body card-body">
                <blockquote>
                    {{ $customerToken->updated_at }}
                </blockquote>
            </div>
            <!-- /.box-body card-body -->
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="box card box-solid">
            <div class="box-header card-header with-border">
                <i class="fa fa-text-width"></i>

                <h3 class="box-title card-title">score_points</h3>
            </div>
            <!-- /.box-header card-header -->
            <div class="box-body card-body">
                <blockquote>
                    {{ $customerToken->score_points }}
                </blockquote>
            </div>
            <!-- /.box-body card-body -->
        </div>
        </div>
    </div>

@endsection