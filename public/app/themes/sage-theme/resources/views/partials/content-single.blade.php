<section class="Hero Hero--{!! $hero_type !!}" id='Hero' style="background-image:url({{ $image }})">
    <div class="Container Container--small">
        <div class="row">
            <div class="column column-100 column-center u-aC">
                <h1>{!! $title !!}</h1>
                <span class="Hero-quote"><span class="Hero-date">{!!$date!!}</span> <span class="Hero-cat"> / {!!$implode!!}</span></span>
            </div>
        </div>
    </div>
</section>
<section class="Content">
	<div class="Container Container--large">
		<div class="row">
			<div class="column column-100">
                {!! $content !!}
                <a class="Button" href="/blog">Back to All Stories</a>
			</div>
		</div>
	</div>
</section>