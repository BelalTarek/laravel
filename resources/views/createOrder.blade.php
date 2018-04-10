@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Order</div>
                <div class="panel-body">
                	{!!Form::open(['action' => 'OrderingController@store', 'method' => 'POST'])!!}
                	{{Form :: radio('Order' , 'OrderOne')}}OrderOne
                	<br />
                	{{Form :: radio('Order' , 'OrderTwo')}}OrderTwo
                	<br />
                	{{Form :: radio('Order' , 'OrderThree')}}OrderThree
                	<br />
                	{{Form :: radio('Order' , 'OrderFour')}}OrderFour
                	<br />
                	{{Form :: bsSubmit('submit')}}
                	{!! Form::close() !!}
                </div>
               

                   

					

					
                </div>
            </div>
        </div>
    </div>
</div>
@endsection