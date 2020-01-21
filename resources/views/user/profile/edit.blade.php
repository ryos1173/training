@extends('layouts.app')


@section('title', 'BODY追加')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>BODY追加</h2>
                <form action="{{ action('User\ProfileController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="number" class="form-control" name="weight" value="{{ old('weight') }}" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="number" class="form-control" name="bfp" value="{{ old('bfp') }}"　placeholder="体脂肪率">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <textarea class="form-control" name="memo" rows="10"　placeholder="メモ"></textarea>
                        </div>
                    <div class="form-group row">
                        <label class="col-md-2">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
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