@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-4 mx-auto text-center">
            <h2 class="mypage">BULK LOG</h2>
            <div class="card">
                <div class="card-header">{{ Auth::user()->name }}さんのマイページ</div>

                <div class="card-body">
                    <h4>現在の体重</h4>
                    <span class="weight">{{ $body->weight }}Kg</span>
                     <h4>目標体重</h4>
                    <span class="weight">{{ $goal->goal }}Kg</span>
                </div>
            </div>
            
    <div class="row">
        <div class="col-md-12 mt-5 mx-auto text-center">
            <div class="card">
                <div class="card-header"><img alt="" src="/images/pen1.png">記録を追加する</div>
                <div class="card-body">
                    <a href="{{ url('/user/profile/create') }}" class="btn btn-primary">
                                BODY記録する
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12 mt-5 mx-auto text-center">
            <div class="card">
                <div class="card-header"><img alt="" src="/images/memo1.png">これまでの記録</div>
                <div class="card-body">
                    <a href="{{ url('/user/profile/index') }}" class="btn btn-primary">
                    記録表
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection

