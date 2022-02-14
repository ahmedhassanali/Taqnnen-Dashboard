@extends('layouts.simple.master')
@section('title', 'Video Chat')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>@lang('')</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Chat</li>
<li class="breadcrumb-item active"> Chat</li>
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
        <div class="b-0">
            <object type="text/html" data="https://taqneen.com/wp-content/plugins/supportboard/supportboard/admin.php?fbclid=IwAR0xLbLxJLDJ6aL83AdHYdfh3WXtxdPqUIg5KVB0dB2_HbXcxj_UUWo31Nw"
            width="800px" height="600px" style="overflow:auto; ridge ">
            </object>
         </div>
	</div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/fullscreen.js')}}"></script>
@endsection
