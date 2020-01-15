@extends('layouts.app')

@section('content')
<h1>トレマネ</h1>
    <div class="row">
        <div class="col col-md-4">
            <nav class="panel panel-success">
            <div class="pan。el-heading">{{ Auth::user()->name }}さんのマイページ</div>
            <div class="panel-body">
            </div>
            </nav>
        </div>
    </div>
@endsection

