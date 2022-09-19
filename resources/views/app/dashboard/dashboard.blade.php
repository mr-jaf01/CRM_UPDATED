@extends('app.dashboard.layout.masterlayout')
@section('title', 'CRM')
@section('content')

<section>
    <h1>{{Session::get('userid')}}</h1>
</section>

@endsection
