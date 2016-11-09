 <a href="{{$Noticia->route}}"> 
              <div class="media home-section-display-item">
                <div class="media-left">
                  <img class="media-object img-rounded" src="{{$Noticia->url_img}}" alt="{{$Noticia->name}}">
                </div>
                <div class="media-body">
                  <h3 class="media-heading">{{$Noticia->name}}</h3>
                  <p style="text-align:right"><small>Publicado el {{$Noticia->created_at->format('d-m-Y')}}</small></p>
                  <p class="home-section-display-description-wrapper">{{$Noticia->description}}</p>
                </div>
              </div> 
            </a>
<hr class="home-section-display-divider">