<section class="Slider">
	<div class="Container Container--large">
		<div class="row">
			@foreach($items as $item)
			<div class="column column-100 Slider-column">
				<a href="{{$item->link ? $item->link['url'] : ''}}" target="{{$item->link ? $item->link['target'] : ''}}" class="Slider-card"
				 style="background-image:url('{{$item->background_image}}')">
					<span class="Slider-content">
						{!!$item->content!!}
					</span>
				</a>
			</div>
			@endforeach
		</div>
	</div>
</section>