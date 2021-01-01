@extends('layouts.app')
@section('content')
<form action="{{action('ProductController@create')}}" method="get">
@csrf
<button type="submit" class="btn btn-success">Adauga</button>
</form>
@include('inc.tableView')
@endsection