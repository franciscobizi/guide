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
        <!--fonts-->
        <link href="styles/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lobster:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

        
    </head>
    <body id="page-top">
        
             <!-- Navigation -->
             <nav class="navbar navbar-default navbar-fixed-top" style="background-color: #fff;">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="modal" data-target="#modal">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand page-scroll" a href="{{url('/')}}" title="[Home page]">
                            <div class="logtip"><img src="styles/img/handmap.png" width="50" height="50" class="img-circle"></div>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="hidden" id="page-top"></li>
                            <li ><a href="#"><span class="glyphicon glyphicon-user m-color"></span> ENTRAR</a></li>

                            <li ><a href="{{url('/#signup')}}"><span class="glyphicon glyphicon-edit m-color"></span> CADASTRAR-SE</a></li>
                            <li ><a href="#lang"><span class="glyphicon glyphicon-globe m-color"></span> ENG</a></li>

                        </ul>
                    </div>
                </div>
            </nav>
        
          <!--Fim do header-->
        <main>
            
                
            <section class="section-slideshow" style="background-color:#fff;">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="container">
                                <h2 class="text-center text-primari text-muted">Faça o seu login</h2>
                                <div class="break"></div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <div class="f-stayle">
                                        <form method="post" action="{{url('turist')}}">
                                            
                                            <div class="form-group">
                                              
                                                <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Seu e-mail" required>
                                            </div>
                                            <div class="form-group">
                                              
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Sua senha" required>
                                            </div>
                                            <div class="form-group">
                                                <h5>Esqueçeu a sua senha? <a href="#">Link de recuperação</a></h5>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-block">ENTRAR</button>
                                            </div>
                                        </form>
                                        
                                    </div>    
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                        </div>
                    </div>
                </section>
            
        </main>
          <!--Fim do main-->
        <footer class="footer navbar-fixed-bottom">
            
        </footer>
          <!--Fim do footer-->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="exampleModalLabel">Guia na mão</h4>
                </div>
                <div class="modal-body">
                    
                        <ul class="nav navbar-nav navbar-right">
                            <li class="hidden" id="page-top"></li>
                            <li ><a href="{{url('/login')}}" ><span class="glyphicon glyphicon-user m-color"></span> ENTRAR</a></li>

                            <li ><a href="{{url('/#signup')}}"><span class="glyphicon glyphicon-edit m-color"></span> CADASTRAR-SE</a></li>
                            <li ><a href="#lang"><span class="glyphicon glyphicon-globe m-color"></span> ENG</a></li>

                        </ul>
                    
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
