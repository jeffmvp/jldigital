@extends('layouts.app')

@section('content')
<?php 
$pages = get_pages(); 


?>
<section class="Content">
<div class="Container Container--large">
  <div class="row">
    <div class="column column-100">
      @if (!have_posts())
        <h1>{!! App::title() !!}</h1>
        <div class="alert alert-warning">
          {{ __('Sorry, but the page you were trying to view does not exist.', 'sage') }}
          @php (wp_nav_menu($params))
        </div>
      @endif
    </div>
  </div>
</div>
</section>
@endsection