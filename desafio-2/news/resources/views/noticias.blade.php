<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="pt-br"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Desafio - 2</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="" />
  <meta name="description" content="" />
  <meta name="keywords" content=""/>
  <meta name="robots" content="index, follow" />

  <base href="{{ asset('/') }}" />
  


  <!-- Favicon -->
  <link rel="shortcut icon" href="../../favicon.png">


  <!-- CSS -->
  <link rel="stylesheet" href="../../assets/css/geral.css">

  <!--[if (gte IE 6)&(lte IE 8)]>
    <script type="text/javascript" src="selectivizr.js"></script>
    <noscript><link rel="stylesheet" href="[fallback css]" /></noscript>
  <![endif]-->

</head>
<body>
  <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

  <!--[if IE]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->


<section class="conteudo-internas">
  <div class="centraliza">
    <div class="conteudo-esquerda">
      <div class="lista"><!--Lista de Noticias-->
        

        <form id="form_pesquisa" action="" class="form-group row" method="post">
          <div class="col-12 busca">
            <input id="pesquisa_input" type="text" class="form-control col-8" placeholder="Digite sua busca" onkeyup="action_replace()">
            <button type="submit" class="btn btn-primary col-2"> Buscar </button>
          </div>
          
        </form>

        @if($noticias)

        @foreach($noticias as $noticia)

        

        <article class="box-noticia"><!--Notícia-->
            <a href="{{ $noticia -> url}}" >
                <figure>
                    <img src="{{ $noticia -> imagem}}" alt="" >
                </figure>
                <div class="texto-lista-noticias">
                    <span class="data-lista-noticia">{{ $noticia -> data_formatada}}</span>
                    <h1>{{ $noticia -> titulo}}</h1>
                    <p><?php echo substr(strip_tags($noticia -> texto),0,300).' ...'; ?></p>
                </div>
            </a>
        </article><!--Fim Notícia-->
        <hr>
                

         
        @endforeach

        @else

        <div style="text-align: center; margin: 50px;"> NENHUMA NOTÍCIA COM A PALAVRA PESQUISADA FOI ENCONTRADA!</div>


        @endif
          
          
            

            <ul class="pagination">

                <?php 

                    $url_atual = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                    



                    

                    if (strpos($url_atual, 'pagina') !== false) {

                            

                            $page_number = substr($url_atual, strrpos($url_atual, '/') + 1);

                            $previous = $page_number - 1;
                            $next = $page_number + 1;
                            $next2 = $page_number + 2;

                            if($previous <= 0){
                                

                            }

                            if($previous > 0){

                                echo '<li class="page-item">
                                     <a class="page-link" href="/api/noticias/pagina/'.$previous.'" aria-label="Next">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Anterior</span>
                                     </a>
                                  </li>';  


                                echo '<li class="page-item"><a class="page-link" href="/api/noticias/pagina/'.$previous.'">'.$previous.'</a></li>';
                            }

                        
                            echo '
                                  <li class="active page-item"><a class="page-link" href="/api/noticias/pagina/'.$page_number.'">'.$page_number.'</a></li>
                                  <li class="page-item"><a class="page-link" href="/api/noticias/pagina/'.$next.'">'.$next.'</a></li>                                           
                                  ';

                            if($previous <= 0){
                                echo '<li class="page-item"><a class="page-link" href="/api/noticias/pagina/'.$next2.'">'.$next2.'</a></li>';
                            }


                           

                            echo '<li class="page-item">
                                     <a class="page-link" href="/api/noticias/pagina/'.$next.'" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Próxima</span>
                                     </a>
                                  </li>';      


                    }else if(strpos($url_atual, 'pesquisa') == false){

                        echo '<li class="active page-item"><a class="page-link"href="/api/noticias/pagina/1">1</a></li>
                              <li class="page-item"><a class="page-link"href="/api/noticias/pagina/2">2</a></li>
                              <li class="page-item"><a class="page-link"href="/api/noticias/pagina/3">3</a></li>                                           
                              <li class="page-item">
                                   <a class="page-link" href="/api/noticias/pagina/2" aria-label="Next">
                                       <span aria-hidden="true">&raquo;</span>
                                       <span class="sr-only">Próxima</span>
                                   </a>
                              </li>';





                    }


                ?>

                <!--

                <li class="active page-item"><a class="page-link"href="">1</a></li>
                <li class="page-item"><a class="page-link"href="">2</a></li>
                <li class="page-item"><a class="page-link"href="">3</a></li>                                           
                <li class="page-item">
                    <a class="page-link" href="" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>-->
            </ul>

            
            <!--Fim Paginação-->
            
        </div><!--Fim Lista de Noticias-->

    </div> <!-- final conteudo-esquerda -->


</div> <!-- final centraliza -->

</section>

<script type="text/javascript">

    function action_replace(){

        let keyword = document.getElementById('pesquisa_input').value;
        document.getElementById('form_pesquisa').action = "api/noticias/pesquisa/"+keyword; 

    }

</script>



  </body>
</html>