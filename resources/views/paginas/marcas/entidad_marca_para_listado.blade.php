 <a href="{{$Marca->route}}"> 
    <div class="row home-section-display-item">
      <div class="media-left col-sm-4">
        <img class="my-media-object img-rounded" src="{{$Marca->url_img}}" alt="{{$Marca->name}}">
      </div>
      <div class="my-media-body col-sm-8">
          <div>
            <p class="visible-xs"><small><span class="glyphicon glyphicon-bullhorn"></span> {{$Marca->created_at->format('d-m-Y')}}</small></p>
            <h3 style="display:inline-block" class="media-heading">{{$Marca->name}}</h3>
            <p class="hidden-xs" style="float:right;text-align:right;display:inline-block"><small><span class="glyphicon glyphicon-bullhorn"></span> {{$Marca->created_at->format('d-m-Y')}}</small></p>

          </div>
          <p class="home-section-display-description-wrapper2">{{$Marca->description}}</p>
          <p class="home-section-display-ampliar"><span class="glyphicon glyphicon-plus-sign"></span> ampliar</p>          
      </div>
    </div> 
</a>
<hr class="home-section-display-divider">