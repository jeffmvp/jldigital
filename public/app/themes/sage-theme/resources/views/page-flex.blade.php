@extends('layouts.app')

@section('content')
    @foreach($sections as $section)
      @include('components.' . $section->row_layout, $section->fields)
    @endforeach
@endsection
