<?php
    require_once('topo.php');
?>

<!--         INICIO CONTEUDO WRSEG      -->
<a class="anchor" id="visaogeral"></a>
<div class="container-fluid">
    <div class="container">
        
        <br><br><br>
        <h3>
            <center>
            4&ordm; Workshop Regional de Seguran&ccedil;a da
            Informa&ccedil;&atilde;o e de Sistemas Computacionais
            <br>
            WRSeg 2019
            </center>
        </h3>

        <p>
        O Workshop Regional de Seguran&ccedil;a da
        Informa&ccedil;&atilde;o e de Sistemas Computacionais (WRSeg),
        evento integrante da Escola Regional de Redes de Computadores (ERRC),
        &eacute; um f&oacute;rum para discuss&atilde;o e
        apresenta&ccedil;&atilde;o de trabalhos cient&iacute;ficos
        e t&eacute;cnicos nas &aacute;reas de seguran&ccedil;a da
        informa&ccedil;&atilde;o e de sistemas computacionais. Este
        f&oacute;rum visa promover a reuni&atilde;o de pesquisadores e
        profissionais interessados no desenvolvimento da &aacute;rea,
        fomentando o debate e a troca de experi&ecirc;ncias.
        </p>
        <h3>Visão geral</h3>
        <p>
          <img class="img-responsive" src="img/cronograma.png">   
        </p>
    </div>
</div>

 

<a class="anchor" id="melhorestrabalhos"></a>
<div class="container-fluid ">
    <div class="container">
        <br><br><br><br>
        <h2>Melhores Trabalhos da WRSeg 2019</h2>
        <p>
            <?php include 'programacao_melhores_wrseg.php';?>
        </p>
        <br><br>
    </div>
</div>

<a class="anchor" id="sessoesTecnicas"></a>
<div class="container-fluid bg-success">
    <div class="container">
        <br><br><br><br>
        <h2>Sessões Técnicas da WRSeg 2019</h2>
        <p>
            <?php include 'programacao_sessoes_wrseg.php';?>
        </p>
        <br><br>
    </div>
</div>


<a class="anchor" id="resumos"></a>
<div class="container-fluid">
    <div class="container">
        <br><br><br><br>
        <h2>Resumos estendidos - ERRC e WRSeg</h2>
        <p>
            <?php include 'programacao_resumos.php';?>
        </p>
        <br><br>
    </div>
</div>




<a class="anchor" id="chamada"></a>
<div class="container-fluid bg-success">
    <div class="container">

<?php
    require_once('chamada_de_trabalhos.php');
?>

    </div> <!-- fim container --> 
</div> <!-- fim container fluid --> 

<div class="container-fluid">
    <div class="container">
        <h3>Tópicos de interesse (lista não exaustiva)</h3>
        
        <div class="row">
            <div class="col-md-6" >
                <br>
                <ul class="lista">
                <li>Anonimato e privacidade computacional</li>
                <li>Análise de códigos maliciosos</li>
                <li>Análise de protocolos de segurança</li>
                <li>Auditoria e análise de riscos em sistemas</li>
                <li>Autenticação e gestão de identidades</li>
                <li>Controle de acesso: modelos e mecanismos</li>
                <li>Criminalística e forense computacional</li>
                <li>Criptografia e criptoanálise: algoritmos, protocolos, técnicas e aplicações</li>
                <li>Gestão de Identidades</li>
                <li>Gestão de segurança da informação</li>   
                <li>Hardware seguro</li>
                <li>Incidentes de segurança: prevenção, detecção e resposta</li>
                
                </ul>
            </div><!-- col --> 
            <div class="col-md-6">
                <br>
                <ul class="lista">
                <li>Proteção de propriedade intelectual e DRM</li>  
                <li>Segurança em aplicações (redes sociais, IoT, ...)</li>
                <li>Segurança em computação ubíqua/pervasiva</li>
                <li>Segurança em internet das coisas</li>
                <li>Segurança em redes</li>
                <li>Segurança em sistemas distribuídos e paralelos</li>
                <li>Segurança em sistemas embarcados</li>
                <li>Segurança em sistemas móveis e embarcados</li>
                <li>Segurança em sistemas operacionais</li>
                <li>Segurança situacional</li>
                <li>Software seguro: desenvolvimento, testes e certificação</li>
                <li>Técnicas e sistemas para identificação biométrica</li>
                <li>Votação eletrônica segura</li>
                </ul>
            </div><!-- col --> 
        </div><!-- row --> 
        <br><br>
    </div> <!-- fim container --> 
</div> <!-- fim container fluid --> 

<div class="container-fluid bg-success">
    <div class="container">
        <h3>Submiss&atilde;o de Trabalhos</h3>
        <p>
        Ser&atilde;o aceitos trabalhos em duas modalidades: artigos
        completos de no m&aacute;ximo 6 (seis) p&aacute;ginas e resumos
        de no m&aacute;ximo 2 (duas) p&aacute;ginas. O
        n&uacute;mero m&aacute;ximo de p&aacute;ginas para ambas as
        modalidades inclui resumo, abstract, figuras, refer&ecirc;ncias e
        anexos. O texto pode ser escrito nos idiomas portugu&ecirc;s,
        espanhol ou ingl&ecirc;s, seguindo os formatos (LaTeX e Word)
        dispon&iacute;veis no site da SBC, atrav&eacute;s do
        endere&ccedil;o <a href="http://www.sbc.org.br">http://www.sbc.org.br</a> (menu Documentos,
        Publica&ccedil;&otilde;es/Templates para Artigos e
        Cap&iacute;tulos de Livros). A submiss&atilde;o de trabalhos
        ser&aacute; exclusivamente eletr&ocirc;nica.
        <br>
        <br>
        As submissões serão exclusivamente online através do link <a href="https://errc.sbc.org.br/2019/wrseg/submissoes">https://errc.sbc.org.br/2019/wrseg/submissoes</a>.
        </p>
    </div> <!-- fim container --> 
</div> <!-- fim container fluid --> 

<div class="container-fluid">
    <div class="container">
        <?php include 'sugestoes_autores.php';?>
    </div> <!-- fim container --> 
</div> <!-- fim container fluid --> 

<div class="container-fluid bg-success">
    <div class="container">
        <h3>Comit&ecirc; de Programa</h3>
        <ul class="lista">
            <?php include 'tpc_wrseg2019.php';?>
        </ul>
        <br><br>
    </div> <!-- fim container --> 
</div> <!-- fim container fluid --> 

<?php
    require_once('rodape.php');
?>
