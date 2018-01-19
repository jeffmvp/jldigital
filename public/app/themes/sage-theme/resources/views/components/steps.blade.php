<section class="Steps">
	<div class="Container Container--large">
		<div class="row row-no-padding">
			@foreach ($items as $item)
			<div class="column column-33 Steps-single">
				<div class="Steps-heading">
					{!! $item->step_heading !!}
				</div>
				<div class="Steps-content">
					<span class="Steps-numbering">
						{!! $item->step_numbering !!}
					</span>
					{!! $item->content !!}
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>