@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Wellcome to トレマネ</h2>
            <div class="card">
                <div class="card-header">MY BODY情報を登録しましょう</div>

                <div class="card-body">
                     <a href="{{ route('login') }}" class="btn btn-primary">
                                MY BODY作成
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
