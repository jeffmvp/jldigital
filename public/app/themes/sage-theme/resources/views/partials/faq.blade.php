<section class="Hero Hero--{!! $hero_type !!}" id='Hero' style="background-image:url({{ $image }})">
    <div class="Container Container--small">
        <div class="row">
            <div class="column column-100 column-center u-aC">
                <h1>{!! $title !!}</h1>
            </div>
        </div>
    </div>
</section>
<section class="Content">
	<div class="Container Container--large">
		<div class="row">
			<div class="column column-100">
                {!! $content !!}
                <a class="Button" href="/blog">Back to All Topics</a>
			</div>
		</div>
	</div>
</section>