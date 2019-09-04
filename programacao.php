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
        <h3><u>Palestras confirmadas</u></h3>
        <a class="anchor" id="palestras_renato"></a>
        <h3> Threat Hunting - A evolução do SOC (por Renato Fontana)</h3>
        <p>
        <b>Descrição:</b> As técnicas e métodos para análise de incidentes evoluíram rapidamente nos últimos anos, porém algumas organizações ainda seguem um modelo antiquado e passivo de resposta a incidentes. Em tais cenários analistas ainda dependem de alertas de segurança baseados em IOCs, porém este é somente o primeiro pilar investigativo para detecção de ameaças.
        <br>
        Threat Hunting é considerado como o próximo passo da evolução de um Security Operations Center e tem como principal abordagem a busca iterativa, compreensão e identificação de perfís adversário que possam ter obtido algum tipo de acesso à rede.
        <br>
        Nessa palestra discutiremos os mais recentes métodos para análise exploratória de dados, caça de ameaças e identificação de perfis atacantes.
        </p>
        <p>
        <b>Minibio:</b> Analista de Segurança de Redes, Resposta a Incidentes e Threat Hunter. MSc System and Network Engineering - Forensics, University of Amsterdam. 
        </p>

        <br>
        <a class="anchor" id="palestras_tiago"></a>
        <h3> IPv6: conceitos, desafios e vantagens para a Internet das coisas (por Tiago Sanchotene)</h3>
        <p><b>Data:</b> 17/09/2019</p>
        <p>
        <b>Descrição:</b> A disponibilidade de IPv4 está com os dias contados. Com o surgimento e rápido crescimento da Internet das coisas (IoT), a tendência é a disponibilidade de IPv4 acabar ainda mais cedo. IPv6 é a alternativa existente para resolver o problema da disponibilidade de endereços IP. A palestra irá apresentar os principais conceitos de IPv6 e tentar responder perguntas como: (a) Qual é o status da implementação do IPv6 no Brasil? (b) Quais são os desafios para a utilização de IPv6 em IoT? (c) Quais são as vantagens de utilização de IPv6 em equipamentos da Internet das coisas?
        </p>
        <p>
        <b>Minibio:</b> Consultor técnico de ISPs. Empreendedor. CEO da Raptor Engenharia e Inovação Tecnológica.
        </p>
        
        
        <br>
        <a class="anchor" id="palestras_roben"></a>
        <h3>Blockchain em IoT: tendências e riscos (por Roben Lunardi)</h3>
        <p><b>Data:</b> 17/09/2019</p>
        <p>
        <b>Descrição:</b> Blockchain é um conceito que surgiu e se popularizou com a criptomoeda Bitcoin, porém ganhou novas proporções. Atualmente, diferentes blockchains foram propostas, com os mais diferentes usos. Em específico no contexto de Internet das Coisas (IoT), blockchain pode trazer muitos benefícios no que se refere à integridade e não repúdio das informações produzidas por diferentes dispositivos. Para isso, a palestra apresentará os principais avanços para a adoção de blockchains em IoT, as principais abordagens propostas pela academia, e as tendências de mercado. Ainda serão discutidos problemas, benefícios, e áreas onde Blockchain em IoT possui potencial para expansão. Adicionalmente, serão discutidos novos conceitos trazidos pelas blockchains como o uso de Smart Contracts e Tokens no contexto de IoT. 
        </p>
        <p>
        <b>Minibio:</b> Possui bacharelado em Ciência da Computação pela Universidade Federal de Santa Maria (UFSM) e mestrado em Computação pela Universidade Federal do Rio Grande do Sul (UFRGS). Atualmente é professor do Instituto Federal de Educação, Ciência e Tecnologia do Rio Grande do Sul - Campus Restinga (IFRS - Campus Restinga) e doutorando em Ciência da Comptação pela Pontifícia Universidade Católica do Rio Grande do Sul (PUCRS). Tem experiência na área de Ciência da Computação, com ênfase em Redes de Computadores, Segurança de Sistemas e Internet das Coisas (IoT), atuando principalmente nos seguintes temas: Blockchain, Segurança de Redes de Computadores, Gerência de Redes de Computadores, e Robótica Educacional. Participou de diferentes projetos com Blockchain, sendo um dos autores da SpeedyChain (registrada no INPI). Ainda, realizou intercâmbio - financiado pela Australian Academy of Science - na University of New South Wales (UNSW) para pesquisar blockchains em IoT.
        </p>
        
        
       <!-- <br>
        <a class="anchor" id="palestras_william"></a>
        <h3> Como funciona a internet que eu uso? (por William Magerl)</h3>
        <p><b>Data:</b> a ser definida</p>
        <p>
        <b>Descrição:</b> A internet do nosso dia a dia não é baseada somente na resolução de nomes (DNS) e acesso ao conteúdo pelo endereço IP. Sua  rede social e seus dados podem estar a milhares de quilômetros da sua casa. Mas como esse acesso é feito? Essa palestra tem o intuito de mostrar como a internet funciona e está distribuída.  ISP's, IX, BGP: Todos esses tópicos tem uma grande influência na sua experiência de navegação. Vamos explora-los juntos.
        </p>
        <p>
        <b>Minibio:</b> Analista de redes de computadores no Ponto de Presença da RNP no Rio Grande de Sul (PoP-RS/RNP), responsável pela rede MetroPOA. Graduado em redes de computadores pela Univates. Certificação CCNA e JNCIA.
        </p>
        --> 
        
        <br>
        <a class="anchor" id="palestras_conterato"></a>
        <h3> A Importância das Certificações para os Profissionais de TIC (por Marcelo Conterato)</h3>
        <p><b>Data:</b> 18/09/2019</p>
        <p>
        <b>Descrição:</b> O diploma de um curso superior nem sempre é o bastante em um mercado de trabalho cada vez mais competitivo. Para conquistar maior destaque e oportunidades na carreira, é importante investir em certificações para maior qualificação profissional, se aperfeiçoar e expandir seus conhecimentos. As certificações são a garantia de que a pessoa possui um conhecimento aprofundado sobre determinada tecnologia. Mais do que isso, também demonstram que o profissional busca atualizar-se e aprimorar-se, ou seja, são um sinal de dedicação, interesse e esforço.
        </p>
        
        <p>
        <b>Minibio:</b> Engenheiro de Redes Senior na Divisão de Gerência de Redes da Brigada Militar, Doutorando no PPGCC/PUCRS, Cisco Instructor Training e AWS Academy Instructor. Possui as certificações CCENT, CCNA R&S, CCNP R&S, CCNA CyberOps , CCNA Security, CCAI, Cisco ITQ, ISO/IEC 27001, ITIL, MCSA,  AWS Certified Cloud Practitioner.
        </p>

        <br>
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
