<?php
    require_once('topo.php');
?>

<a class="anchor" id="visaogeral"></a>
<div class="container-fluid ">
    <div class="container">
        <br><br>
        <h2>Visão geral</h2>
        <p>
          <img class="img-responsive" src="img/cronograma.png">   
        </p>
        <br>
		<h3><a href="https://sol.sbc.org.br/index.php/errc/issue/view/495">Anais do ERRC publicados no SBC OpenLib</a></h3>
    </div>
	
</div>

<a class="anchor" id="melhorestrabalhos"></a>
<div class="container-fluid ">
    <div class="container">
        <br>
        <h2>Melhores Trabalhos da ERRC 2019</h2>
        <p>
            <?php include 'programacao_melhores_errc.php';?>
        </p>
        <br>
    </div>
</div>

<a class="anchor" id="sessoesTecnicas"></a>
<div class="container-fluid bg-success">
    <div class="container">
        <br><br>
        <h2>Sessões Técnicas</h2>
        <p>
            <?php include 'programacao_sessoes_errc.php';?>
        </p>
        <br><br>
    </div>
</div>


<a class="anchor" id="resumos"></a>
<div class="container-fluid">
    <div class="container">
        <br><br>
        <h2>Resumos estendidos - ERRC e WRSeg</h2>
        <p>
            <?php include 'programacao_resumos.php';?>
        </p>
        <br>
    </div>
</div>


<a class="anchor" id="palestras"></a>
<div class="container-fluid bg-success">
    <div class="container">
        <br><br>
        <h2>Palestras</h2>
        <p>
            <?php include 'programacao_palestras.php';?>
        </p>
        <br><br>
    </div>
</div>
 

<a class="anchor" id="minicursos"></a>
<div class="container-fluid ">
    <div class="container">
        <br><br>
        <h2>Minicursos</h2>
            <?php include 'programacao_minicursos.php';?>
        <br><br>
    </div>
</div>


<a class="anchor" id="oficinas"></a>
<div class="container-fluid bg-success">
    <div class="container">      
        <br><br>
        <h2>Oficinas</h2>
            <?php include 'programacao_oficinas.php';?>
        <br><br>
    </div>
</div>
 

<?php
    require_once('rodape.php');
?>
