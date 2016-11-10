 <a href="{{$Noticia->route}}"> 
              <div class="media home-section-display-item">
                <div class="media-left">

                  <img class="media-object img-rounded" src="{{$Noticia->url_img}}" alt="{{$Noticia->name}}">

                </div>
                <div class="media-body">

                    <div>
                      <h3 style="display:inline-block" class="media-heading">{{$Noticia->name}}</h3>

                      <p style="float:right;text-align:right;display:inline-block"><small><span class="glyphicon glyphicon-bullhorn"></span> {{$Noticia->created_at->format('d-m-Y')}}</small></p>
                    </div>

                    <p class="home-section-display-description-wrapper2">{{$Noticia->description}}</p>

                    <p class="home-section-display-ampliar"><span class="glyphicon glyphicon-plus-sign"></span> ampliar</p>
                </div>
              </div> 
            </a>
<hr class="home-section-display-divider">