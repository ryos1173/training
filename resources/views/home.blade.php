@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 text-center">
            <h2>Wellcome to BULK LOG</h2>

            <div class="card">
                <div class="card-header">BODY情報を登録しましょう</div>

                <div class="card-body">
                     <a href="{{ url('/user/profile/create') }}" class="btn btn-primary">
                                BODY作成
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
