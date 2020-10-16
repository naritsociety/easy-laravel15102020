@extends('layouts.app')
@section('content')
<div class="container">
    <h3>Condition Index</h3>
    <ul>
        @forelse ($events as $event)
            <li>{{ $event }}</li>
        @empty
            <li>No events available</li>
        @endforelse
    </ul>
</div>
@endsection
