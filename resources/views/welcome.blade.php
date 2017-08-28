@extends('layouts.app')
@section('content')
<router-view data="{{$title}}"></router-view>
@endsection
