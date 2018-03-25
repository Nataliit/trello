@extends('desks.layouts.desk')

@section('content')
    <desks-list>
        <div class="desks-list" v-for="desk in desks-list">

        </div>
    </desks-list>
@endsection

@section('quick_actions')
    <a href="#" class="btn btn-info btn-sm">Create new desk</a>
@endsection