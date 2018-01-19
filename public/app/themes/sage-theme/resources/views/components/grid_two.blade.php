
<section class="GridTwo">
    <div class="Container Container--large">
        <div class="row">
            @foreach($items as $item)
                <div class="column column-50">
                    <h3 class="GridTwo-title">{{$item->heading}}</h3>
                    <a href="{{$item->link ? $item->link['url'] : ''}}" target="{{$item->link ? $item->link['target'] : ''}}" class="GridTwo-card" style="background-image:url('{{$item->background_image}}')">
                        <span class="GridTwo-content">
                            {{$item->content}}
                        </span>
                    </a>
                </div> 
            @endforeach
        </div>
    </div>
</section>