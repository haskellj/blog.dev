@extends('layouts.master')		{{-- Note: the period is the file path symbol, don't 											use a back-slash for folder paths --}}
@section('content')
			{{-- Note: no semi-scolons after blade commands --}}
    <h1>Hello, {{{$name}}}!</h1>
    <p>Here's something blade: {{{$another}}}</p>
@stop