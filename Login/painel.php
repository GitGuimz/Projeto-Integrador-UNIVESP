<?php
session_start();
include('verifica_login.php');
include('conexao.php');
$consulta = "SELECT nome, cidade, empresa, instrutor, periodo, treinamento, sugestoes, data_treina FROM formulario1";
$con = $conexao->query($consulta) or die($conexao->error);

$bancotr1r = "SELECT COUNT(tr1) AS tr1r FROM `formulario1` WHERE tr1 = 'Regular' GROUP BY tr1";
$contr1r = $conexao->query($bancotr1r) or die($conexao->error);
$row1 = $contr1r->fetch_assoc();

$bancotr1b = "SELECT COUNT(tr1) AS tr1b FROM `formulario1` WHERE tr1 = 'Bom' GROUP BY tr1";
$contr1b = $conexao->query($bancotr1b) or die($conexao->error);
$row2 = $contr1b->fetch_assoc();

$bancotr1e = "SELECT COUNT(tr1) AS tr1e FROM `formulario1` WHERE tr1 = 'Excelente' GROUP BY tr1";
$contr1e = $conexao->query($bancotr1e) or die($conexao->error);
$row3 = $contr1e->fetch_assoc();

$bancotr2r = "SELECT COUNT(tr2) AS tr2r FROM `formulario1` WHERE tr2 = 'Regular' GROUP BY tr2";
$contr2r = $conexao->query($bancotr2r) or die($conexao->error);
$row4 = $contr2r->fetch_assoc();

$bancotr2b = "SELECT COUNT(tr2) AS tr2b FROM `formulario1` WHERE tr2 = 'Bom' GROUP BY tr2";
$contr2b = $conexao->query($bancotr2b) or die($conexao->error);
$row5 = $contr2b->fetch_assoc();

$bancotr2e = "SELECT COUNT(tr2) AS tr2e FROM `formulario1` WHERE tr2 = 'Excelente' GROUP BY tr2";
$contr2e = $conexao->query($bancotr2e) or die($conexao->error);
$row6 = $contr2e->fetch_assoc();

$bancotr3r = "SELECT COUNT(tr3) AS tr3r FROM `formulario1` WHERE tr3 = 'Regular' GROUP BY tr3";
$contr3r = $conexao->query($bancotr3r) or die($conexao->error);
$row7 = $contr3r->fetch_assoc();

$bancotr3b = "SELECT COUNT(tr3) AS tr3b FROM `formulario1` WHERE tr3 = 'Bom' GROUP BY tr3";
$contr3b = $conexao->query($bancotr3b) or die($conexao->error);
$row8 = $contr3b->fetch_assoc();

$bancotr3e = "SELECT COUNT(tr3) AS tr3e FROM `formulario1` WHERE tr3 = 'Excelente' GROUP BY tr3";
$contr3e = $conexao->query($bancotr3e) or die($conexao->error);
$row9 = $contr3e->fetch_assoc();

$bancotr4r = "SELECT COUNT(tr4) AS tr4r FROM `formulario1` WHERE tr4 = 'Regular' GROUP BY tr4";
$contr4r = $conexao->query($bancotr4r) or die($conexao->error);
$row10 = $contr4r->fetch_assoc();

$bancotr4b = "SELECT COUNT(tr4) AS tr4b FROM `formulario1` WHERE tr4 = 'Bom' GROUP BY tr4";
$contr4b = $conexao->query($bancotr4b) or die($conexao->error);
$row11 = $contr4b->fetch_assoc();

$bancotr4e = "SELECT COUNT(tr4) AS tr4e FROM `formulario1` WHERE tr4 = 'Excelente' GROUP BY tr4";
$contr4e = $conexao->query($bancotr4e) or die($conexao->error);
$row12 = $contr4e->fetch_assoc();

$bancotr5r = "SELECT COUNT(tr5) AS tr5r FROM `formulario1` WHERE tr5 = 'Regular' GROUP BY tr5";
$contr5r = $conexao->query($bancotr5r) or die($conexao->error);
$row13 = $contr5r->fetch_assoc();

$bancotr5b = "SELECT COUNT(tr5) AS tr5b FROM `formulario1` WHERE tr5 = 'Bom' GROUP BY tr5";
$contr5b = $conexao->query($bancotr5b) or die($conexao->error);
$row14 = $contr5b->fetch_assoc();

$bancotr5e = "SELECT COUNT(tr5) AS tr5e FROM `formulario1` WHERE tr5 = 'Excelente' GROUP BY tr5";
$contr5e = $conexao->query($bancotr5e) or die($conexao->error);
$row15 = $contr5e->fetch_assoc();

$bancoinst1r = "SELECT COUNT(inst1) AS inst1r FROM `formulario1` WHERE inst1 = 'Regular' GROUP BY inst1";
$coninst1r = $conexao->query($bancoinst1r) or die($conexao->error);
$row16 = $coninst1r->fetch_assoc();

$bancoinst1b = "SELECT COUNT(inst1) AS inst1b FROM `formulario1` WHERE inst1 = 'Bom' GROUP BY inst1";
$coninst1b = $conexao->query($bancoinst1b) or die($conexao->error);
$row17 = $coninst1b->fetch_assoc();

$bancoinst1e = "SELECT COUNT(inst1) AS inst1e FROM `formulario1` WHERE inst1 = 'Excelente' GROUP BY inst1";
$coninst1e = $conexao->query($bancoinst1e) or die($conexao->error);
$row18 = $coninst1e->fetch_assoc();

$bancoinst2r = "SELECT COUNT(inst2) AS inst2r FROM `formulario1` WHERE inst2 = 'Regular' GROUP BY inst2";
$coninst2r = $conexao->query($bancoinst2r) or die($conexao->error);
$row19 = $coninst2r->fetch_assoc();

$bancoinst2b = "SELECT COUNT(inst2) AS inst2b FROM `formulario1` WHERE inst2 = 'Bom' GROUP BY inst2";
$coninst2b = $conexao->query($bancoinst2b) or die($conexao->error);
$row20 = $coninst2b->fetch_assoc();

$bancoinst2e = "SELECT COUNT(inst2) AS inst2e FROM `formulario1` WHERE inst2 = 'Excelente' GROUP BY inst2";
$coninst2e = $conexao->query($bancoinst2e) or die($conexao->error);
$row21 = $coninst2e->fetch_assoc();

$bancoinst3r = "SELECT COUNT(inst3) AS inst3r FROM `formulario1` WHERE inst3 = 'Regular' GROUP BY inst3";
$coninst3r = $conexao->query($bancoinst3r) or die($conexao->error);
$row22 = $coninst3r->fetch_assoc();

$bancoinst3b = "SELECT COUNT(inst3) AS inst3b FROM `formulario1` WHERE inst3 = 'Bom' GROUP BY inst3";
$coninst3b = $conexao->query($bancoinst3b) or die($conexao->error);
$row23 = $coninst3b->fetch_assoc();

$bancoinst3e = "SELECT COUNT(inst3) AS inst3e FROM `formulario1` WHERE inst3 = 'Excelente' GROUP BY inst3";
$coninst3e = $conexao->query($bancoinst3e) or die($conexao->error);
$row24 = $coninst3e->fetch_assoc();

$bancoinst4r = "SELECT COUNT(inst4) AS inst4r FROM `formulario1` WHERE inst4 = 'Regular' GROUP BY inst4";
$coninst4r = $conexao->query($bancoinst4r) or die($conexao->error);
$row25 = $coninst4r->fetch_assoc();

$bancoinst4b = "SELECT COUNT(inst4) AS inst4b FROM `formulario1` WHERE inst4 = 'Bom' GROUP BY inst4";
$coninst4b = $conexao->query($bancoinst4b) or die($conexao->error);
$row26 = $coninst4b->fetch_assoc();

$bancoinst4e = "SELECT COUNT(inst4) AS inst4e FROM `formulario1` WHERE inst4 = 'Excelente' GROUP BY inst4";
$coninst4e = $conexao->query($bancoinst4e) or die($conexao->error);
$row27 = $coninst4e->fetch_assoc();

$bancocont1r = "SELECT COUNT(cont1) AS cont1r FROM `formulario1` WHERE cont1 = 'Regular' GROUP BY cont1";
$concont1r = $conexao->query($bancocont1r) or die($conexao->error);
$row28 = $concont1r->fetch_assoc();

$bancocont1b = "SELECT COUNT(cont1) AS cont1b FROM `formulario1` WHERE cont1 = 'Bom' GROUP BY cont1";
$concont1b = $conexao->query($bancocont1b) or die($conexao->error);
$row29 = $concont1b->fetch_assoc();

$bancocont1e = "SELECT COUNT(cont1) AS cont1e FROM `formulario1` WHERE cont1 = 'Excelente' GROUP BY cont1";
$concont1e = $conexao->query($bancocont1e) or die($conexao->error);
$row30 = $concont1e->fetch_assoc();

$bancocont2r = "SELECT COUNT(cont2) AS cont2r FROM `formulario1` WHERE cont2 = 'Regular' GROUP BY cont2";
$concont2r = $conexao->query($bancocont2r) or die($conexao->error);
$row31 = $concont2r->fetch_assoc();

$bancocont2b = "SELECT COUNT(cont2) AS cont2b FROM `formulario1` WHERE cont2 = 'Bom' GROUP BY cont2";
$concont2b = $conexao->query($bancocont2b) or die($conexao->error);
$row32 = $concont2b->fetch_assoc();

$bancocont2e = "SELECT COUNT(cont2) AS cont2e FROM `formulario1` WHERE cont2 = 'Excelente' GROUP BY cont2";
$concont2e = $conexao->query($bancocont2e) or die($conexao->error);
$row33 = $concont2e->fetch_assoc();

$bancocont3r = "SELECT COUNT(cont3) AS cont3r FROM `formulario1` WHERE cont3 = 'Regular' GROUP BY cont3";
$concont3r = $conexao->query($bancocont3r) or die($conexao->error);
$row34 = $concont3r->fetch_assoc();

$bancocont3b = "SELECT COUNT(cont3) AS cont3b FROM `formulario1` WHERE cont3 = 'Bom' GROUP BY cont3";
$concont3b = $conexao->query($bancocont3b) or die($conexao->error);
$row35 = $concont3b->fetch_assoc();

$bancocont3e = "SELECT COUNT(cont3) AS cont3e FROM `formulario1` WHERE cont3 = 'Excelente' GROUP BY cont3";
$concont3e = $conexao->query($bancocont3e) or die($conexao->error);
$row36 = $concont3e->fetch_assoc();

$bancoinsta1r = "SELECT COUNT(insta1) AS insta1r FROM `formulario1` WHERE insta1 = 'Regular' GROUP BY insta1";
$coninsta1 = $conexao->query($bancoinsta1r) or die($conexao->error);
$row37 = $coninsta1->fetch_assoc();

$bancoinsta1b = "SELECT COUNT(insta1) AS insta1b FROM `formulario1` WHERE insta1 = 'Bom' GROUP BY insta1";
$coninsta1b = $conexao->query($bancoinsta1b) or die($conexao->error);
$row38 = $coninsta1b->fetch_assoc();

$bancoinsta1e = "SELECT COUNT(insta1) AS insta1e FROM `formulario1` WHERE insta1 = 'Excelente' GROUP BY insta1";
$coninsta1e = $conexao->query($bancoinsta1e) or die($conexao->error);
$row39 = $coninsta1e->fetch_assoc();

$bancoinsta2r = "SELECT COUNT(insta2) AS insta2r FROM `formulario1` WHERE insta2 = 'Regular' GROUP BY insta2";
$coninsta2r = $conexao->query($bancoinsta2r) or die($conexao->error);
$row40 = $coninsta2r->fetch_assoc();

$bancoinsta2b = "SELECT COUNT(insta2) AS insta2b FROM `formulario1` WHERE insta2 = 'Bom' GROUP BY insta2";
$coninsta2b = $conexao->query($bancoinsta2b) or die($conexao->error);
$row41 = $coninsta2b->fetch_assoc();

$bancoinsta2e = "SELECT COUNT(insta2) AS insta2e FROM `formulario1` WHERE insta2 = 'Excelente' GROUP BY insta2";
$coninsta2e = $conexao->query($bancoinsta2e) or die($conexao->error);
$row42 = $coninsta2e->fetch_assoc();

$bancoinsta3r = "SELECT COUNT(insta3) AS insta3r FROM `formulario1` WHERE insta3 = 'Regular' GROUP BY insta3";
$coninsta3r = $conexao->query($bancoinsta3r) or die($conexao->error);
$row43 = $coninsta3r->fetch_assoc();

$bancoinsta3b = "SELECT COUNT(insta3) AS insta3b FROM `formulario1` WHERE insta3 = 'Bom' GROUP BY insta3";
$coninsta3b = $conexao->query($bancoinsta3b) or die($conexao->error);
$row44 = $coninsta3b->fetch_assoc();

$bancoinsta3e = "SELECT COUNT(insta3) AS insta3e FROM `formulario1` WHERE insta3 = 'Excelente' GROUP BY insta3";
$coninsta3e = $conexao->query($bancoinsta3e) or die($conexao->error);
$row45 = $coninsta3e ->fetch_assoc();

$bancogerar = "SELECT COUNT(gera) AS gerar FROM `formulario1` WHERE gera = 'Regular' GROUP BY gera";
$congerar = $conexao->query($bancogerar) or die($conexao->error);
$row46 = $congerar->fetch_assoc();

$bancogerab = "SELECT COUNT(gera) AS gerab FROM `formulario1` WHERE gera = 'Bom' GROUP BY gera";
$congerab = $conexao->query($bancogerab) or die($conexao->error);
$row47 = $congerab->fetch_assoc();

$bancogerae = "SELECT COUNT(gera) AS gerae FROM `formulario1` WHERE gera = 'Excelente' GROUP BY gera";
$congerae = $conexao->query($bancogerae) or die($conexao->error);
$row48 = $congerae->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="../css/style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
     $(document).ready(function() {
    $('#example').DataTable();
} );
     </script>

</head>
<body>
<header id="if9d">
      <div
        data-gjs="navbar"
        id="iua8ib"
        class="navbar navbar-primary"
        style="background-color: #190e5f"
        <nav class="navbar navbar-light bg-light" >
          <div class="container-fluid">
            <a class="navbar-brand"></a>
            <div class="d-flex">
            <a class="btn btn-danger" href="logout.php"" role="button">Logout</button></a>
          </div>
          </div>
        </nav>
                  ></div>
             <div class="navbar navbar-secondary">
        <img src="../images/Logo.png" alt="" />
      </div>
    </header>

<h2>Olá, <?php echo $_SESSION['usuario'];?></h2>

<div class="container">
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Data</th>
                <th>Nome</th>
                <th>Cidade</th>
                <th>Empresa</th>
                <th>Instrutor</th>
                <th>Periodo</th>
                <th>Treinamento</th>
                <th>Comentários, Críticas e Sugestões</th>
            </tr>
        </thead>
        <tbody>
            <?php while($dado = $con->fetch_array()){ ?>
            <tr>
                <td><?php echo date("d/m/Y", strtotime($dado["data_treina"])); ?></td>
                <td><?php echo $dado["nome"]; ?></td>
                <td><?php echo $dado["cidade"]; ?></td>
                <td><?php echo $dado["empresa"]; ?></td>
                <td><?php echo $dado["instrutor"]; ?></td>
                <td><?php echo $dado["periodo"]; ?></td>
                <td><?php echo $dado["treinamento"]; ?></td>
                <td><?php echo $dado["sugestoes"]; ?></td>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
             <th>Data</th>
                <th>Nome</th>
                <th>Cidade</th>
                <th>Empresa</th>
                <th>Instrutor</th>
                <th>Periodo</th>
                <th>Treinamento</th>
                <th>Comentários, Críticas e Sugestões</th>
            </tr>
        </tfoot>
    </table>

    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Itens</th>
      <th scope="col">Regular</th>
      <th scope="col">Bom</th>
      <th scope="col">Excelente</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>O treinamento correspondeu as suas expectativas?</td>
      <td class="regular"><?php echo $row1["tr1r"]; ?></td>
      <td class="bom"><?php echo $row2["tr1b"]; ?></td>
      <td class="excelente"><?php echo $row3["tr1e"]; ?></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>O numero de participantes foi adequado?</td>
      <td class="regular"><?php echo $row4["tr2r"]; ?></td>
      <td class="bom"><?php echo $row5["tr2b"]; ?></td>
      <td class="excelente"><?php echo $row6["tr2e"]; ?></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>A duração total do programa foi adequada?</td>
      <td class="regular"><?php echo $row7["tr3r"]; ?></td>
      <td class="bom"><?php echo $row8["tr3b"]; ?></td>
      <td class="excelente"><?php echo $row9["tr3e"]; ?></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Qualidade do material didático</td>
      <td class="regular"><?php echo $row10["tr4r"]; ?></td>
      <td class="bom"><?php echo $row11["tr4b"]; ?></td>
      <td class="excelente"><?php echo $row12["tr4e"]; ?></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Recursos utilizados</td>
      <td class="regular"><?php echo $row13["tr5r"]; ?></td>
      <td class="bom"><?php echo $row14["tr5b"]; ?></td>
      <td class="excelente"><?php echo $row15["tr5e"]; ?></td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Clareza na exposições dos assuntos</td>
      <td class="regular"><?php echo $row16["inst1r"]; ?></td>
      <td class="bom"><?php echo $row17["inst1b"]; ?></td>
      <td class="excelente"><?php echo $row18["inst1e"]; ?></td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>Interação com os participantes</td>
      <td class="regular"><?php echo $row19["inst2r"]; ?></td>
      <td class="bom"><?php echo $row20["inst2b"]; ?></td>
      <td class="excelente"><?php echo $row21["inst2e"]; ?></td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>Domínio do assunto</td>
      <td class="regular"><?php echo $row22["inst3r"]; ?></td>
      <td class="bom"><?php echo $row23["inst3b"]; ?></td>
      <td class="excelente"><?php echo $row24["inst3e"]; ?></td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>Dinâmica na sala de aula</td>
      <td class="regular"><?php echo $row25["inst4r"]; ?></td>
      <td class="bom"><?php echo $row26["inst4b"]; ?></td>
      <td class="excelente"><?php echo $row27["inst4e"]; ?></td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>Sua participação na sala de aula</td>
      <td class="regular"><?php echo $row28["cont1r"]; ?></td>
      <td class="bom"><?php echo $row29["cont1b"]; ?></td>
      <td class="excelente"><?php echo $row30["cont1e"]; ?></td>
    </tr>
    <tr>
      <th scope="row">11</th>
      <td>A motivação do grupo para os assuntos abordados</td>
      <td class="regular"><?php echo $row31["cont2r"]; ?></td>
      <td class="bom"><?php echo $row32["cont2b"]; ?></td>
      <td class="excelente"><?php echo $row33["cont2e"]; ?></td>
    </tr>
    <tr>
      <th scope="row">12</th>
      <td>Aplicação dos conteúdos apresentados na sua atuação na empresa</td>
      <td class="regular"><?php echo $row34["cont3r"]; ?></td>
      <td class="bom"><?php echo $row35["cont3b"]; ?></td>
      <td class="excelente"><?php echo $row36["cont3e"]; ?></td>
    </tr>
    <tr>
      <th scope="row">13</th>
      <td>Estrutura da Sala</td>
      <td class="regular"><?php echo $row37["insta1r"]; ?></td>
      <td class="bom"><?php echo $row38["insta1b"]; ?></td>
      <td class="excelente"><?php echo $row39["insta1e"]; ?></td>
    </tr>
    <tr>
      <th scope="row">14</th>
      <td>Coffe-break</td>
      <td class="regular"><?php echo $row40["insta2r"]; ?></td>
      <td class="bom"><?php echo $row41["insta2b"]; ?></td>
      <td class="excelente"><?php echo $row42["insta2e"]; ?></td>
    </tr>
    <tr>
      <th scope="row">15</th>
      <td>Equipamentos</td>
      <td class="regular"><?php echo $row43["insta3r"]; ?></td>
      <td class="bom"><?php echo $row44["insta3b"]; ?></td>
      <td class="excelente"><?php echo $row45["insta3e"]; ?></td>
    </tr>
    <tr>
      <th scope="row">16</th>
      <td>Avaliação Geral</td>
      <td class="regular"><?php echo $row46["gerar"]; ?></td>
      <td class="bom"><?php echo $row47["gerab"]; ?></td>
      <td class="excelente"><?php echo $row48["gerae"]; ?></td>
    </tr>
    <tr>
      <th scope="row">Total</th>
      <td>Total</td>
      <td id="totalr"></td>
      <td id="totalb">Total:</td>
      <td id="totale">Total:</td>
    </tr>
  </tbody>
</table>
            </div>

<footer id="i407v" class="footer-under">
      <div class="footer-container" id="i52gg">
        <span>Desenvolvido para o Projeto integrador da UNIVESP</span>
      </div>
    </footer>

    </body>

<script>

var els = document.getElementsByClassName("regular");
  var valorcalculado = 0;
  [].forEach.call(els, function (el) 
  {
    valorcalculado += parseInt(el.innerHTML);
  });

  document.getElementById("totalr").innerHTML = valorcalculado;

  </script>

<script>

var els = document.getElementsByClassName("bom");
  var valorcalculado = 0;
  [].forEach.call(els, function (el) 
  {
    valorcalculado += parseInt(el.innerHTML);
  });

  document.getElementById("totalb").innerHTML = valorcalculado;

  </script>

<script>

var els = document.getElementsByClassName("excelente");
  var valorcalculado = 0;
  [].forEach.call(els, function (el) 
  {
    valorcalculado += parseInt(el.innerHTML);
  });

  document.getElementById("totale").innerHTML = valorcalculado;

  </script>

</html>