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
                                           <h3 class="text-primari" style="margin-top: 0px;" >{{$city}}</h3>
                                       <hr>
                                       <ul class="list-group">
                                           <li class="list-group-item"><a href="#" class="text-muted"><span class="glyphicon glyphicon-header "></span> História</a></li>
                                           <li class="list-group-item"><a href="#" class="text-muted"><span class="glyphicon glyphicon-home "></span> Hospedarias</a></li>
                                           <li class="list-group-item"><a href="#" class="text-muted"><span class="glyphicon glyphicon-cutlery "></span> Restaurantes</a></li>
                                           
                                           <li class="list-group-item"><a href="#" class="text-muted"><span class="glyphicon glyphicon-heart "></span> Pontos turisticos</a></li>
                                           <li class="list-group-item"><a href="#" class="text-muted"><span class="glyphicon glyphicon-earphone"></span> Taxis locais</a></li>
                                        </ul>                   
                                       </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    
                                        <div class="wall-post">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h3 class="text-primari" style="margin-top: 0px;">Cidade de {{$city}}</h3>
                                                    <hr>
                                                    
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    
                                                    <img src="styles/img/1.jpg" class="img-responsive">
                                                    
                                                    <hr>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5 class="text-muted text-justify">
                                                        Luanda é a capital e a maior cidade de Angola. Localizada na costa do Oceano Atlântico, é também o principal porto e centro económico do país. Constitui um município subdividido em seis distritos urbanos e é também a capital da província homónima.
                                                    </h5>
                                                    <p class="text-muted">Fundação: 1575</p>
                                                    <p class="text-muted">Área: 113 km²</p>
                                                    <p class="text-muted">Elevação: 6 m</p>
                                                    <p class="text-muted">Tempo: 29 °C, vento SE a 8 km/h, umidade de 74%</p>
                                                    <p class="text-muted">Hora local: terça-feira, 10:52</p>
                                                    <p class="text-muted">População: 2,776 milhões (2005)</p>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                    
                                </div>
                                <div class="col-md-3">
                                    <div class="side-bar">
                                        
                                        <div class="wall-post">
                                            <h3 class="text-primari" style="margin-top: 0px;">Nosso turismo</h3>
                                            <hr>
                                        </div>
                                        <div class="wall-post">
                                            <h3 class="text-primari" style="margin-top: 0px;">Novidades na hora</h3>
                                            <hr>
                                        </div>
                                    </div>      
                                    
                                </div>
                            
                        </div>
                </div>
            </article>
            
        </main>
       