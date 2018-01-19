<section class="GridThree">
	<div class="Container Container--large">
		<div class="row">
			<div class="column column-50">
				<a href="{{$items[0]->link ? $items[0]->link['url'] : ''}}" target="{{$items[0]->link ? $items[0]->link['target'] : ''}}" class="GridThree-card"
				 style="background-image:url('{{$items[0]->background_image}}')">
					<span class="GridThree-content">
						{!!$items[0]->content!!}
					</span>
				</a>
			</div>
			<div class="column column-50">
				<a href="{{$items[1]->link ? $items[1]->link['url'] : ''}}" target="{{$items[1]->link ? $items[1]->link['target'] : ''}}" class="GridThree-card"
				 style="background-image:url('{{$items[1]->background_image}}')">
					<span class="GridThree-content">
						{!!$items[1]->content!!}
					</span>
				</a>
				<a href="{{$items[2]->link ? $items[2]->link['url'] : ''}}" target="{{$items[2]->link ? $items[2]->link['target'] : ''}}" class="GridThree-card"
				 style="background-image:url('{{$items[2]->background_image}}')">
					<span class="GridThree-content">
						{!!$items[2]->content!!}
					</span>
				</a>
			</div>
		</div>
	</div>
</section>