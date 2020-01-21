@extends('layouts.app')
@section('title', 'BODY記録')

@section('content')
    <div class="container">
        <div class="row">
            <h2>BODY記録</h2>
        </div>

        <div class="row">
            <div class="col-md-12 mx-auto mt-4">
                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>日時</th>
                                <th>体重</th>
                                <th>体脂肪率</th>
                                <th>メモ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $body)
                                <tr>
                                    <th>{{ $body->created_at->format('Y.m.d') }}</th>
                                    <td>{{ $body->weight, 100 }}</td>
                                    <td>{{ $body->bfp, 100 }}</td>
                                    <td>{{ $body->memo, 100 }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <input type="button" onclick="history.back()" value="戻る">
                </div>
            </div>
        </div>
    </div>
@endsection
