 <a href="{{$Proyecto->route}}"> 
              <div class="media home-section-display-item">
                <div class="media-left">
                  <img class="media-object img-rounded" src="{{$Proyecto->url_img}}" alt="{{$Proyecto->name}}">
                </div>
                <div class="media-body">
                  <h3 class="media-heading">{{$Proyecto->name}}</h3>
                  <p>Fecha: {{$Proyecto->fecha}}</p>
                  <p>Ubicación: {{$Proyecto->ubicacion}}</p>
                  <p>Método de construcción: {{$Proyecto->metodo_de_construccion}}</p>
                  <p class="home-section-display-description-wrapper">{{$Proyecto->description}}</p>
                </div>
              </div> 
            </a>
<hr class="home-section-display-divider">