<?php
    require_once('topo.php');
?>

<!--  INICIO CONTEUDO LOCAL      -->
<a class="anchor" id="edicao2019"></a>
<div class="container-fluid ">
  <div class="container">
    <?php include 'local_edicao_atual.php';?>
  </div> <!--FIM-CONTAINER -->
</div><!--FIM-LOCAL 2019 container-fluid -->


<!-- INICIO CONTEUDO HOTEIS      -->
<a class="anchor" id="hoteis"></a>
<div class="container-fluid bg-success">
    <div class="container">
        <?php include 'local_hoteis.php';?>
    </div>
</div><!--  FIM CONTEUDO HOTEIS      -->


<!-- INICIO CONTEUDO CARAVANAS      -->
<a class="anchor" id="caravanas"></a>
<div class="container-fluid ">
    <div class="container">
        <?php include 'local_caravanas.php';?>
    </div>
</div><!-- FIM CONTEUDO CARAVANAS -->

<!-- INICIO CONTEUDO RESTAURANTES -->
<a class="anchor" id="restaurantes"></a>
<div class="container-fluid bg-success">
    <div class="container">
        <?php include 'local_restaurantes.php';?>
    </div>
</div><!-- FIM CONTEUDO RESTAURANTES -->

<!-- INICIO CONTEUDO JANTAR FARROUPILHA -->
<a class="anchor" id="jantar_farroupilha"></a>
<div class="container-fluid ">
    <div class="container">
      <h3>Jantar no CTG Farroupilha - <font color="red">Quarta-Feira, 18/09/2019</font></h3>
      <p>O evento social será um jantar no CTG Farroupilha!</p>    
      <h4>Confira programação da semana completa do CTG para a Semana Farroupilha</h4>
      <img class="img-responsive" src="img/jantar_farroupilha.jpeg">   
       <br><br>
    </div>
</div><!-- FIM CONTEUDO JANTAR FARROUPILHA -->

<a class="anchor" id="edicoesAnteriores"></a>
<div class="container-fluid bg-success">
  <div class="container">
      <h3>Edições anteriores</h3>
      <p></p>
      <div class="row">
          <div class="col-md-6" >
            <br>
            <ul class="lista">
                <li><a class="link" href="http://errc.sbc.org.br/2018/">2018  - Pelotas - SENAC </a></li>
                <li><a class="link" href="http://coral.ufsm.br/errc2017/">2017 - Santa Maria - UFSM</a></li>
                <li>2016 - Porto Alegre - SENAC </li>
                <li><a class="link" href="https://www.imed.edu.br/Comunicacao/Eventos/Hotsite/13--errc/">2015 - Passo Fundo - IMED</a></li>
                <li> <td><a class="link" href="https://www.unilasalle.edu.br/errc2014/">2014 - Canoas - Unilasalle</a></td>
                <li>2013 -	Porto Alegre -	PUCRS</li>
                <li>2012 -	Pelotas -	UFPEL</li>
            </ul>
          </div><!-- FIM COLUNA -->
          <div class="col-md-6" >
            <br>
            <ul class="lista">
                <li>2011 -	São Leopoldo -	Unisinos</li>
                <li>2010 -	Alegrete -	Unipampa</li>
                <li>2009 -	Três de Maio	- Setrem</li>
                <li>2008 -	Porto Alegre -	Uniritter</li>
                <li>2007 -	Santa Maria -	UFSM</li>
                <li>2006 -	Passo Fundo -	UPF</li>
            </ul>
          </div> <!-- FIM COLUNA -->
      </div><!-- FIM LINHA -->
      <br>
  </div><!-- FIM CONTAINER -->
</div><!-- FIM CONTAINER-FLUID EDICOES ANTERIORES      -->


<?php
    require_once('rodape.php');
?>
