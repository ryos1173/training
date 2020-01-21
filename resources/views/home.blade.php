@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto text-center">
            <h2>Wellcome to BULK LOG</h2>

            <div class="card">
                <div class="card-header">目標を設定しましょう</div>

                <div class="card-body">
                     <a href="{{ url('/user/profile/goal') }}" class="btn btn-primary">
                                目標設置
                            </a>
                    
                    <!--@if (session('status'))-->
                    <!--    <div class="alert alert-success" role="alert">-->
                    <!--        {{ session('status') }}-->
                    <!--    </div>-->
                    <!--@endif-->

                    <!--You are logged in!-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
