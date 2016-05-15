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
        <!--link rel="stylesheet" type="text/css" href="styles/css/base.css" /-->
        <link rel="stylesheet" type="text/css" href="styles/css/style.css" />
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
                      <li><a href="{{url('mapa')}}"><span class="glyphicon glyphicon-flag "></span> Cidades</a></li>
                    </ul>
                  </li>
                </ul>
                <form class="navbar-form navbar-left" role="search" method="post" action="{{url('city')}}">
                  <div class="form-group">
                      <!--input type="text" class="form-control placeholder" name="city" placeholder="Pesquisar cidade..."-->
                      <select class="form-control placeholder" name="city">
									  <option>Pesquisar cidade...</option>
									  <option value="Bengo">Bengo</option>
									  <option value="Bie">Bie</option>
									  <option value="Benguela">Benguela</option>
									  <option value="Cabinda">Cabinda</option>
									  <option value="Cunene">Cunene</option>
									  <option value="Huambo">Huambo</option>
									  <option value="Huila">Huila</option>
									  <option value="Luanda">Luanda</option>
									  <option value="Lunda Norte">Lunda Norte</option>
									  <option value="Lunda Sul">Lunda Sul</option>
									  <option value="Malange">Malange</option>
									  <option value="Moxico">Moxico</option>
									  <option value="Namibe">Namibe</option>
									  <option value="Kuando Kubango">Kuando Kubango</option>
									  <option value="Kwanza Norte">Kwanza Norte</option>
									  <option value="Kwanza Sul">Kwanza Sul</option>
									  <option value="Uige">Uige</option>
									  <option value="Zaire">Zaire</option>
									  
									</select>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary">Pesquisar</button>
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
             
          @yield('content')
         
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
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="file" name="foto" class="form-control" placeholder="Carregue uma nova foto" title="Carregue uma foto">
                        </div>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Edite o seu nome">
                        </div>
                        <div class="form-group">
                            <input type="text" name="city" class="form-control" placeholder="Edite a sua cidade">
                        </div>
                        <div class="form-group">
                            <input type="text" name="fone" class="form-control" placeholder="Edite o seu telefone">
                        </div>
                        <div class="form-group">
                            <input type="text" name="birth" class="form-control" placeholder="Edite data do seu aniversario">
                        </div>
                        
                    
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Guardar</button>
                    </form>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    
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
                    <!--div class="switch">
                        <input id="cmn-toggle-1" class="cmn-toggle cmn-toggle-round" type="checkbox">
                        <label for="cmn-toggle-1"></label>
                    </div-->

                    <div class="switch">
                        <input id="cmn-toggle-4" class="cmn-toggle cmn-toggle-round-flat" type="checkbox">
                        <label for="cmn-toggle-4"></label>
                    </div>

                    <!--div class="switch">
                        <input id="cmn-toggle-7" class="cmn-toggle cmn-toggle-yes-no" type="checkbox">
                        <label for="cmn-toggle-7" data-on="Yes" data-off="No"></label>
                    </div-->
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
                  <h4 class="modal-title" id="exampleModalLabel"><h3>Minha agenda</h3></h4>
                </div>
                <div class="modal-body">
                    <div>

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Novo evento</a></li>
                          <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Eventos marcados</a></li>
                          
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                          <div role="tabpanel" class="tab-pane active" id="home">
                              <h4>Agende um novo evento</h4>
                              <form action="" method="post">
                                
                                <div class="form-group">
                                    <input type="text" name="titulo" class="form-control" placeholder="Titulo do evento">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="evento" class="form-control" placeholder="Breve descrição do evento">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="local" class="form-control" placeholder="Local do evento">
                                </div>
                                <div class="form-group">
                                    <input type="date" name="data" class="form-control" placeholder="Data do evento">
                                </div>
                                 
                          </div>
                          <div role="tabpanel" class="tab-pane" id="profile">
                                <h4>Lista dos seus eventos</h4>
                                <ul class="list-group">
                                    <li class="list-group-item">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Morbi leo risus</li>
                                    <li class="list-group-item">Porta ac consectetur ac</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                          </div>
                          
                        </div>

                    </div>
                </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Agendar</button>
                    </form>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    
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
                  <h3 class="modal-title" id="exampleModalLabel">Meu histórico</h3>
                </div>
                <div class="modal-body">
                    <h4>Seu histórico</h4>
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                          <h4 class="list-group-item-heading">List group item heading</h4>
                          <p class="list-group-item-text">
                              jsfkdsfjsdkffk
                          </p>
                        </a>
                        <a href="#" class="list-group-item">
                          <h4 class="list-group-item-heading">List group item heading</h4>
                          <p class="list-group-item-text">
                              kgjskfjsdkfdskf
                          </p>
                        </a>
                        <a href="#" class="list-group-item">
                          <h4 class="list-group-item-heading">List group item heading</h4>
                          <p class="list-group-item-text">
                           jksgjkfgkfgkdfkgfkg
                          </p>
                        </a>
                    </div>
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
    <script src="styles/js/html5shiv.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="styles/js/bootstrap.min.js"></script>
    <script>
       
     </script>
    </body>
</html>
