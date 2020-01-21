@extends('layouts.app')


@section('title', '目標設定')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>目標設定</h2>
                <form action="{{ action('User\GoalController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="number" class="form-control" name="goal" value="{{ old('goal') }}" placeholder="目標の体重">
                        </div>
                    </div>
                    
                    {{ csrf_field() }}
                    <input type="button" onclick="history.back()" value="戻る">
                    <input type="submit" class="btn btn-primary" value="登録">
                </from>
            </div>
        </div>
    </div>
@endsection