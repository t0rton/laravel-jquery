@extends('layouts.default')
@section('content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Forms
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-edit"></i> Forms
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
    	<div class="col-lg-6">

    		{!! Form::open(['url' => 'save']) !!}
            <!-- <form role="form"> -->

                <div class="form-group">
                	{!! Form::label('name', 'Name:') !!}
                	{!! Form::input('text', 'name', null, ['class'=>'form-control']) !!}
                </div>

                <button type="submit" class="btn btn-default">Submit Button</button>
                <button type="reset" class="btn btn-default">Reset Button</button>

            {!! Form::close() !!}
            </form>

        </div>
    </div>
@stop