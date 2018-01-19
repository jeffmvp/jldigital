
<section class="GridFour">
    <div class="Container Container--large">
        <div class="row">
            @foreach($items as $item)
                <div class="column column-25">
                    <h3 class="GridFour-title">{{$item->heading}}</h3>
                    <a href="{{$item->link ? $item->link['url'] : ''}}" target="{{$item->link ? $item->link['target'] : ''}}" class="GridFour-card" style="background-image:url('{{$item->background_image}}')">
                        <span class="GridFour-content">
                            {{$item->content}}
                        </span>
                    </a>
                </div> 
            @endforeach
        </div>
    </div>
</section>