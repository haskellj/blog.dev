@extends('layouts.master')
@section('content')
			{{-- Note: no semi-scolons after blade commands --}}
    <h1>Hello, <?= $name; ?>!</h1>
    <p>Here's something else: <?= $another; ?></p>
@stop