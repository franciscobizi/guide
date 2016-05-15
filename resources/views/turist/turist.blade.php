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
                                       
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    
                                        <div class="wall-post">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <form method="post" action="" enctype="multipart/form-data">
                                                        <span class="glyphicon glyphicon-picture "></span>
                                                        <div class="upload">
                                                            <input type="file" name="upload"/>
                                                            
                                                        </div>
                                                        
                                                    <!--a href="#"><span class="glyphicon glyphicon-picture "></span> Adicionar foto ou video</a-->
                                                    <hr>
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    
                                                        <div class="form-group">
                                                            <textarea class="form-control" rows="4">Partilhe a emoção da sua viagem aqui...</textarea>
                                                        </div>
                                                    
                                                    <hr>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="text-right"><button class="btn btn-primary">Partilhar</button></div>
                                                    </form>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="wall-post">
                                            
                                            <button type="button" class="close pull-right" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    
                                                        <a href="#"><img src="styles/img/user.png" width="50" height="50" class="img-rounded"></a>
                                                       <hr>
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    
                                                        
                                                    
                                                  <hr>  
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                   
                                                            <span class="fa fa-facebook"></span> 
                                                        
                                                            <span class="fa fa-google-plus"></span> 
                                                       
                                                            <span class="fa fa-star"></span>
                                                            <div style="padding: 5px"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <form method="post" action="" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                            <textarea class="form-control" rows="1">Deixe o seu comentário...</textarea>
                                                    </div>
                                                    </form>
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
       