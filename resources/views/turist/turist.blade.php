<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Guia na mão</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Guia turístico na palma da mão">
        <meta name="keywords" content="Guia, Turístico, Turismo,mão, palma, angola, content" />
        <!--styles-->
        <link href="styles/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="styles/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="styles/css/source-style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="styles/css/component.css" />
        <!--link rel="stylesheet" type="text/css" href="styles/css/demo.css" /-->
        <!--fonts-->
        <link href="styles/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lobster:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

        
    </head>
    <body id="page-top" style="background-color:#EEE">
        
             <!-- Navigation -->
             <nav class="navbar navbar-default navbar-fixed-top" style="background-color: #fff">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="modal" data-target="#mobile-modal" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                  <a class="navbar-brand" href="#">GUIA NA MÃO </a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" >
                <ul class="nav navbar-nav">
                  
                     <li><a href="#" title="Notificações"><span class="glyphicon glyphicon-globe"></span></a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MEU GUIA <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#agend-modal" data-toggle="modal"><span class="glyphicon glyphicon-calendar "></span> Minha agenda</a></li>
                      <li><a href="#history-modal" data-toggle="modal"><span class="glyphicon glyphicon-bookmark "> </span> Meu histórico</a></li>
                      <li><a href="#reservation-modal" data-toggle="modal"><span class="glyphicon glyphicon-home "></span> Minha reserva</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="#"><span class="glyphicon glyphicon-map-marker "></span> Guia automático</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="#"><span class="glyphicon glyphicon-flag "></span> Cidades</a></li>
                    </ul>
                  </li>
                </ul>
                  <form class="navbar-form navbar-left" role="search" method="post" action="{{url('/city')}}">
                  <div class="form-group">
                      <input type="text" class="form-control placeholder" name="city" placeholder="Pesquisar cidade...">
                  </div>
                  
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><img src="styles/img/user.png" width="30" height="30" class="img-circle"></a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">FRANCISCO BIZI <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#profile-modal" data-toggle="modal"><span class="glyphicon glyphicon-edit "></span> Editar perfil</a></li>
                      
                      <li><a href="#blocker-modal" data-toggle="modal"><span class="glyphicon glyphicon-ban-circle "></span> Bloquear perfil</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="#setting-modal" data-toggle="modal"><span class="glyphicon glyphicon-cog "></span> Configurações</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="#"><span class="glyphicon glyphicon-off "></span> Terminar sessão</a></li>
                    </ul>
                  </li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
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
          <!--Fim do main class="footer navbar-fixed-bottom"-->
        <footer>
              
                
            
        </footer>
        <!--Mobile-->
        <div class="modal fade" id="mobile-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="exampleModalLabel"><a href="#"><img src="styles/img/user.png" width="30" height="30" class="img-circle"></a> Francisco Bizi</h4>
                </div>
                <div class="modal-body">
                    <!--div style="overflow-y: auto;height: 300px;"-->
                        <ul class="list-group">
                            <form method="post" action="">
                                <li class="list-group-item"><input name="search" class="form-control" placeholder="Pesquisar cidade..."></li>
                          </form>
                          <li class="list-group-item active">Meu Perfil</li>
                          <li class="list-group-item"><a href="#perfil-modal" data-toggle="modal" class="text-muted"><span class="glyphicon glyphicon-edit "></span> Editar perfil</a></li>
                          
                          <li class="list-group-item"><a href="#" class="text-muted"><span class="glyphicon glyphicon-bell "></span> Notificações</a></li>
                          <li class="list-group-item"><a href="#" class="text-muted"><span class="glyphicon glyphicon-ban-circle "></span> Bloquer perfil</a></li>
                          <li class="list-group-item active">Meu Guia</li>
                          <li class="list-group-item"><a href="#" class="text-muted"><span class="glyphicon glyphicon-calendar "></span> Minha agenda</a></li>
                          <li class="list-group-item"><a href="#" class="text-muted"><span class="glyphicon glyphicon-bookmark "> </span> Meu histórico</a></li>
                          <li class="list-group-item"><a href="#" class="text-muted"><span class="glyphicon glyphicon-home "></span> Minha reserva</a></li>
                          <li class="list-group-item"><a href="#" class="text-muted"><span class="glyphicon glyphicon-map-marker "></span> Guia automático</a></li>
                          
                          <li class="list-group-item"><a href="#" class="text-muted"><span class="glyphicon glyphicon-flag "></span> Cidades</a></li>
                          <li class="list-group-item active">Aplicação</li>
                          
                          <li class="list-group-item"><a href="#" class="text-muted"><span class="glyphicon glyphicon-cog "></span> Configurações</a></li>
                          <li class="list-group-item"><a href="#" data-dismiss="modal" class="text-muted"><span class="glyphicon glyphicon-off "></span> Terminar sessão</a></li>

                        </ul>
                    <!--/div-->
                </div>
                
              </div>
            </div>
        </div>
          <!--Fim do mobile-->
          <!--Profile-->
        <div class="modal fade" id="profile-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="exampleModalLabel">Editar perfil</h4>
                </div>
                <div class="modal-body">
                    fdkfskfksf
                </div>
                
              </div>
            </div>
        </div>
            <!--Setting-->
        <div class="modal fade" id="setting-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="exampleModalLabel">Configurar aplicação</h4>
                </div>
                <div class="modal-body">
                    Configurar aplicação
                </div>
                
              </div>
            </div>
        </div>
        <!--Blocker-->
        <div class="modal fade" id="blocker-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="exampleModalLabel">Bloquear perfil</h4>
                </div>
                <div class="modal-body">
                    Bloquear
                </div>
                
              </div>
            </div>
        </div>
        <!--Agend-->
        <div class="modal fade" id="agend-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="exampleModalLabel">Minha agenda</h4>
                </div>
                <div class="modal-body">
                    Angendamento
                </div>
                
              </div>
            </div>
        </div>
        <!--History-->
        <div class="modal fade" id="history-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="exampleModalLabel">Meu histórico</h4>
                </div>
                <div class="modal-body">
                    Meu histórico
                </div>
                
              </div>
            </div>
        </div>
        <!--Reservations-->
        <div class="modal fade" id="reservation-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="exampleModalLabel">Minha reserva</h4>
                </div>
                <div class="modal-body">
                    Minha reserva
                </div>
                
              </div>
            </div>
        </div>
          <!-- jQuery -->
    <script src="styles/js/jquery-1.12.2.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="styles/js/bootstrap.min.js"></script>
    <script>
       
     </script>
    </body>
</html>
