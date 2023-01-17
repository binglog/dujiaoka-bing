@extends('bing.layouts.default')

@section('content')
<div class="col-7 text-white bill mt-5">

    <div class="card text-bg-dark mb-3 text-center">
    <div class="card-header">似乎遇到了一点问题~</div>
    <div class="card-body">
        <h5 class="card-title">{{ $content }}</h5>
        @if(!$url)
            <a href="javascript:history.back(-1);"  class="btn btn-outline-warning">{{ __('dujiaoka.callback') }}</a>
        @else
            <a href="{{ $url }}"  class="btn btn-outline-warning">{{ __('dujiaoka.callback') }}</a>
        @endif
    </div>
    </div>
</div>
@stop
