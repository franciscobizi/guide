@extends('turist.layouts.turist')

@section('content')
          <!--Fim do header-->
        <main>
            <div class="padding-Top"></div>
            <article>
                <div class="container-fluid">
                        <div class="row">
                            
                                <div class="col-md-2">
                                    <div class="side-bar">
                                       <div class="wall-post">
                                           <p class="text-uppercase text-muted">gps do guia</p>
                                       <hr>
                                       <ul class="list-group">
                                           <form method="post" action="">
                                               <div class="form-group"><input class="form-control" name="coordiante" placeholder="Insira o destino..."></div>
                                               <div class="form-group"><button class="btn btn-block">Começar</button></div>
                                           </form>
                                        </ul>                   
                                       </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    
                                        <div class="wall-post">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h3 class="text-primari text-muted" style="margin-top: 0px;">Permita-me ser o seu guia!</h3>
                                                    <h5 class="text-primari text-muted" style="margin-top: 0px;"><span class="glyphicon glyphicon-arrow-left"></span> Insira o destino no campo à esquerda.</h5>
                                                    <hr>
                                                    
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    
                                                    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:441px;width:700px;'><div id='gmap_canvas' style='height:441px;width:700px;'></div><div><small><a href="http://embedgooglemaps.com">									embed google map							</a></small></div><div><small><a href="http://proxysitereviews.com/">proxy sites</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:13,center:new google.maps.LatLng(-8.839987599999999,13.289436799999976),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-8.839987599999999,13.289436799999976)});infowindow = new google.maps.InfoWindow({content:'<strong>Guia turístico</strong><br>Luanda, Angola<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                                                    
                                                    <hr>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5 class="text-muted text-justify">
                                                        Aproveite a viagem, porque com o Guia na mão você vai chegar ao destino. Tenha uma boa viagem.
                                                    </h5>
                                                    
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                    
                                </div>
                                <div class="col-md-3">
                                    <div class="side-bar">
                                        
                                        <div class="wall-post">
                                            PANEL PUBLICITÁRIO
                                            <hr>
                                        </div>
                                        <div class="wall-post">
                                            NOVIDADES NA HORA
                                            <hr>
                                        </div>
                                    </div>      
                                    
                                </div>
                            
                        </div>
                </div>
            </article>
            
        </main>
      