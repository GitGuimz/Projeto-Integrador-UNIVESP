<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="./css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
  
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
            <a class="btn btn-danger" href="./Login/entrar.php" role="button">Login</button></a>
          </div>
          </div>
        </nav>
                  ></div>
             <div class="navbar navbar-secondary">
        <img src="./images/Logo.png" alt="" />
      </div>
    </header>

    <form class="form" name="form1" id="formid" method="post" action="envia.php" onsubmit="return validateForm();">
      <h1 style="color: #190e5f; text-transform: uppercase">
        Avalie nossa palestra
      </h1>

      <div class="form-group" id="ievqx">
        <label class="label" id="iiufu">Nome</label
        ><input placeholder="Digita aqui seu nome" name="nome" class="input" required />
      </div>

      <div class="form-group" id="i5a4x">
        <label class="label" id="icnie">Cidade</label
        ><input
          type="text"
          name="cidade"
          placeholder="Digita aqui sua cidade"
          class="input"
          required
        />
      </div>

      <div class="form-group" id="ijbq3">
        <label class="label" id="i60dq">Empresa</label
        ><input
          type="text"
          name="empresa"
          placeholder="Digita aqui o nome de sua empresa"
          class="input"
          required
        />
      </div>

      <div class="form-group" id="itjo4h">
        <label class="label" id="if22an">Nome do Instrutor</label
        ><input
          type="text"
          name="instrutor"
          placeholder="Digita aqui o nome do instrutor"
          class="input"
          required
        />
      </div>

      <div class="form-group">
        <label for="exampleFormControlSelect1">Treinamento</label>
        <select class="input" name="treinamento" id="exampleFormControlSelect1">
          <option value="selecione">Selecione</option>
          <option>
            NR-05 - CIPA - C.H. 20h
          </option>
          <option>
            NR-05 - CIPA TR - C.H. 20h
          </option>
          <option>
            NR-10 - B??sico Reciclagem C.H. 8h
          </option>
          <option>
            NR-10 - B??sico Reciclagem C.H. 16h
          </option>
          <option>
            NR-10 - B??sico Forma????o C.H. 40h
          </option>
          <option>
            NR-10 - SEP Reciclagem C.H. 8h
          </option>
          <option>
            NR-10 - SEP Reciclagem C.H. 16h
          </option>
          <option>
            NR-10 - SEP Forma????o C.H. 40h
          </option>
          <option>
            NR-11 - Empilhadeira Reciclagem C.H. 8h
          </option>
          <option>
            NR-11 - Empilhadeira Forma????o C.H. 16h
          </option>
          <option>
            NR-11 - Guincho Canarinho Reciclagem C.H. 8H
          </option>
          <option>
            NR-11 - Guincho Canarinho Forma????o C.H. 16H
          </option>
          <option>
            NR-11 - Guindauto Reciclagem C.H. 8H
          </option>
          <option>
            NR-11 - Guindauto Forma????o C.H. 16H
          </option>
          <option>
            NR-11 - Guindauto Forma????o C.H. 24H
          </option>
          <option>
            NR-11 - Hilo Fixo Reciclagem C.H. 8H
          </option>
          <option>
            NR-11 - Hilo Fixo Forma????o C.H. 16H
          </option>
          <option>
            NR-11 - P?? Carregadeira Reciclagem C.H. 8H
          </option>
          <option>
            NR-11 - P?? Carregadeira Forma????o C.H. 16H
          </option>
          <option>
            NR-11 - Ponte Rolante Reciclagem C.H. 8H
          </option>
          <option>
            NR-11 - Ponte Rolante Forma????o C.H. 16H
          </option>
          <option>
            NR-12 - Injetora Forma????o C.H. 8H
          </option>
          <option>
            NR-12 - Maquinas e Equipamentos C.H. 8H
          </option>
          <option>
            NR-12 - Motopoda C.H. 8H
          </option>
          <option>
            NR-12 - Motoserra C.H. 8H
          </option>
          <option>
            NR-12 - Prensas e Similares C.H. 8H
          </option>
          <option>
            NR-12 - Ro??adeira C.H. 8H
          </option>
          <option>
            NR-13 - Caldeira Reciclagem C.H. 8h
          </option>
          <option>
            NR-13 - Caldeira Reciclagem C.H. 16h
          </option>
          <option>
            NR-13 - Caldeira Forma????o C.H. 40h
          </option>
          <option>
            NR-13 - Unidades de Processo Reciclagem C.H. 8h
          </option>
          <option>
            NR-13 - Unidades de Processo Reciclagem C.H. 16h
          </option>
          <option>
            NR-13 - Unidades de Processo Forma????o C.H. 40h
          </option>
          <option>
            NR-18 - Montador de Andaime Forma????o C.H. 8H
          </option>
          <option>
            NR-18 - PTA Reciclagem C.H. 4h
          </option>
          <option>
            NR-18 - PTA Forma????o C.H. 4h
          </option>
          <option>
            NR-18 - PTA Forma????o C.H. 16h
          </option>
          <option>
            NR-18 - Sinaleiro Forma????o C.H. 16h
          </option>
          <option>
            NR-18 - Trabalho a Quente Forma????o C.H. 8h
          </option>
          <option>
            NR-20 - Avan??ado 2 Reciclagem C.H. 4H
          </option>
          <option>
            NR-20 - Avan??ado 2 Forma????o C.H. 32H
          </option>
          <option>
            NR-20 - B??sico Reciclagem C.H. 4H
          </option>
          <option>
            NR-20 - B??sico Forma????o C.H. 8H
          </option>
          <option>
            NR-20 - Espec??fico Forma????o C.H. 16H
          </option>
          <option>
          NR-20 - Inicia????o Forma????o C.H. 3H
          </option>
          <option>
          NR-20 - Intermedi??rio Forma????o C.H. 16H
          </option>
          <option>
          NR-20 - Intermedi??rio Reciclagem C.H. 4H
          </option>
          <option>
          NR-23 - Brigada Agr??cola Forma????o C.H. 8H
          </option>
          <option>
          NR-23 - Brigada Agr??cola Reciclagem C.H. 8H
          </option>
          <option>
          NR-23 - Brigada Agr??cola Forma????o C.H. 24H
          </option>
          <option>
          NR-23 - Brigada Agr??cola Reciclagem C.H. 12H
          </option>
          <option>
          NR-23 - Brigada Industrial Forma????o C.H. 24H
          </option>
          <option>
          NR-23 - Brigada Industrial Reciclagem C.H. 12H
          </option>
          <option>
            NR-31 - Agrot??xicos Forma????o C.H. 20h
          </option>
          <option>
          NR-31 - Agrot??xicos Reciclagem C.H. 20h
          </option>
          <option>
          NR-31.12 - Colhedora Forma????o C.H. 24h
          </option>
          <option>
          NR-31.12 - Colhedora Reciclagem C.H. 8h
          </option>
          <option>
          NR-31.12 - M??quinas Agr??colas Forma????o C.H. 24h
          </option>
          <option>
          NR-31.12 - M??quinas Agr??colas Reciclagem C.H. 8h
          </option>
          <option>
          NR-31.12 - Trator Forma????o C.H. 24h
          </option>
          <option>
          NR-31.12 - Trator Reciclagem C.H. 8h
          </option>
          <option>
          NR-33 - Supervisor Forma????o C.H. 40h
          </option>
          <option>
          NR-33 - Supervisor Recicalgem C.H. 8h
          </option>
          <option>
          NR-33 - Trabalhador e Vigia Forma????o C.H. 16h
          </option>
          <option>
          NR-33 - Trabalhador e Vigia Reciclagem C.H. 8h
          </option>
          <option>
          NR-35 - Trabalho em Altura Forma????o C.H. 8h
          </option>
          <option>
          NR-35 - Trabalho em Altura Reciclagem C.H. 8h
          </option>
          <option>
          T??cnicas de Apresenta????o Forma????o C.H. 16h
          </option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Per??odo</label>
        <select class="input" name="periodo" id="exampleFormControlSelect2">
          <option value="selecione">Selecione</option>
          <option>Manh??</option>
          <option>Tarde</option>
          <option>Noite</option>
        </select>
      </div>

<div class="questoes">

      <div id="irg5eh"><b>Treinamento:</b></div>
      <label class="label"
        >O treinamento correspondeu as suas expectativas?</label
      >
      <div class="form-check form-check-inline">
        <input
          class="form-check-input"
          type="radio"
          name="inlineRadioOptions"
          id="inlineRadioExpectationRegular"
          value="regular"
        />
        <label class="form-check-label" for="inlineRadioExpectationRegular"
          >Regular</label
        >
      </div>
      <div class="form-check form-check-inline">
        <input
          class="form-check-input"
          type="radio"
          name="inlineRadioOptions"
          id="inlineRadioExpectationGood"
          value="bom"
        />
        <label class="form-check-label" for="inlineRadioExpectationGood"
          >Bom</label
        >
      </div>
      <div class="form-check form-check-inline">
        <input
          class="form-check-input"
          type="radio"
          name="inlineRadioOptions"
          id="inlineRadioExpectationGreat"
          value="excelente"
        />
        <label class="form-check-label" for="inlineRadioExpectationGreat"
          >Excelente</label
        >
      </div>
</div>

<div class="questoes">

      <label class="label"
        ><label class="label">O N??mero de participantes foi adequado?</label>
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio1Options"
            id="inlineRadioParticipantRegular"
            value="regular"
          />
          <label class="form-check-label" for="inlineRadioParticipantRegular"
            >Regular</label
          >
        </div>
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio1Options"
            id="inlineRadioParticipantGood"
            value="bom"
          />
          <label class="form-check-label" for="inlineRadioParticipantGood"
            >Bom</label
          >
        </div>
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio1Options"
            id="inlineRadioParticipantGreat"
            value="excelente"
          />
          <label class="form-check-label" for="inlineRadioParticipantGreat"
            >Excelente</label
          >
        </div></label
      >
</div>

<div class="questoes">

      <label class="label"
        ><label class="label">A dura????o total do programa foi adequada?</label>
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio2Options"
            id="inlineRadio1"
            value="regular"
          />
          <label class="form-check-label" for="inlineRadio1">Regular</label>
        </div>
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio2Options"
            id="inlineRadio2"
            value="bom"
          />
          <label class="form-check-label" for="inlineRadio2">Bom</label>
        </div>
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio2Options"
            id="inlineRadio3"
            value="excelente"
          />
          <label class="form-check-label" for="inlineRadio3">Excelente</label>
        </div></label
      >
</div>

<div class="questoes">

      <label class="label"
        ><label class="label">Qualidade do material did??tico</label>
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio3Options"
            id="inlineRadio1"
            value="regular"
          />
          <label class="form-check-label" for="inlineRadio1">Regular</label>
        </div>
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio3Options"
            id="inlineRadio2"
            value="bom"
          />
          <label class="form-check-label" for="inlineRadio2">Bom</label>
        </div>
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio3Options"
            id="inlineRadio3"
            value="excelente"
          />
          <label class="form-check-label" for="inlineRadio3">Excelente</label>
        </div></label
      >
</div>

<div class="questoes">

      <label class="label"
        ><label class="label">Recursos Utilizados</label>
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio4Options"
            id="inlineRadio1"
            value="regular"
          />
          <label class="form-check-label" for="inlineRadio1">Regular</label>
        </div>
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio4Options"
            id="inlineRadio2"
            value="bom"
          />
          <label class="form-check-label" for="inlineRadio2">Bom</label>
        </div>
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio4Options"
            id="inlineRadio3"
            value="excelente"
          />
          <label class="form-check-label" for="inlineRadio3">Excelente</label>
        </div></label
      >
</div>

<div class="questoes">

      <div id="ij7fc4"><b>Atua????o do Instrutor:</b></div>
      <label class="label"
        ><label class="label">Clareza na exposi????o dos assuntos</label>
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio5Options"
            id="inlineRadio1"
            value="regular"
          />
          <label class="form-check-label" for="inlineRadio1">Regular</label>
        </div>
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio5Options"
            id="inlineRadio2"
            value="bom"
          />
          <label class="form-check-label" for="inlineRadio2">Bom</label>
        </div>
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio5Options"
            id="inlineRadio3"
            value="excelente"
          />
          <label class="form-check-label" for="inlineRadio3">Excelente</label>
        </div></label
      >
</div>

<div class="questoes">

      <label class="label"
        ><label class="label">Intera????o com os participantes</label>
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio6Options"
            id="inlineRadio1"
            value="regular"
          />
          <label class="form-check-label" for="inlineRadio1">Regular</label>
        </div>
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio6Options"
            id="inlineRadio2"
            value="bom"
          />
          <label class="form-check-label" for="inlineRadio2">Bom</label>
        </div>
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio6Options"
            id="inlineRadio3"
            value="excelente"
          />
          <label class="form-check-label" for="inlineRadio3">Excelente</label>
        </div></label
      >
</div>

<div class="questoes">

      <label class="label"
        ><label class="label">Dom??nio do assunto</label>
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio7Options"
            id="inlineRadio1"
            value="regular"
          />
          <label class="form-check-label" for="inlineRadio1">Regular</label>
        </div>
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio7Options"
            id="inlineRadio2"
            value="bom"
          />
          <label class="form-check-label" for="inlineRadio2">Bom</label>
        </div>
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio7Options"
            id="inlineRadio3"
            value="excelente"
          />
          <label class="form-check-label" for="inlineRadio3">Excelente</label>
        </div></label
      >
</div>

<div class="questoes">

      <label class="label"
        ><label class="label">Din??mica em sala de aula</label>
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio8Options"
            id="inlineRadio1"
            value="regular"
          />
          <label class="form-check-label" for="inlineRadio1">Regular</label>
        </div>
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio8Options"
            id="inlineRadio2"
            value="bom"
          />
          <label class="form-check-label" for="inlineRadio2">Bom</label>
        </div>
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio8Options"
            id="inlineRadio3"
            value="excelente"
          />
          <label class="form-check-label" for="inlineRadio3">Excelente</label>
        </div></label
      >
</div>

<div class="questoes">

      <div id="ivi0xh"><b>Participa????o / Aplica????o do Conte??do:</b></div>
      <label class="label"
        ><label class="label">Sua participa????o na sala de aula</label>
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio9Options"
            id="inlineRadio1"
            value="regular"
          />
          <label class="form-check-label" for="inlineRadio1">Regular</label>
        </div>
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio9Options"
            id="inlineRadio2"
            value="bom"
          />
          <label class="form-check-label" for="inlineRadio2">Bom</label>
        </div>
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio9Options"
            id="inlineRadio3"
            value="excelente"
          />
          <label class="form-check-label" for="inlineRadio3">Excelente</label>
        </div></label
      >
</div>

<div class="questoes">

      <label class="label"
        ><label class="label"
          >A motiva????o do grupo para os assuntos abordados</label
        >
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio10Options"
            id="inlineRadio1"
            value="regular"
          />
          <label class="form-check-label" for="inlineRadio1">Regular</label>
        </div>
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio10Options"
            id="inlineRadio2"
            value="bom"
          />
          <label class="form-check-label" for="inlineRadio2">Bom</label>
        </div>
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio10Options"
            id="inlineRadio3"
            value="excelente"
          />
          <label class="form-check-label" for="inlineRadio3">Excelente</label>
        </div></label
      >
</div>

<div class="questoes">

      <label class="label"
        ><label class="label"
          >Aplica????o dos conte??dos apresentados na sua atua????o na empresa</label
        >
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio11Options"
            id="inlineRadio1"
            value="regular"
          />
          <label class="form-check-label" for="inlineRadio1">Regular</label>
        </div>
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio11Options"
            id="inlineRadio2"
            value="bom"
          />
          <label class="form-check-label" for="inlineRadio2">Bom</label>
        </div>
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio11Options"
            id="inlineRadio3"
            value="excelente"
          />
          <label class="form-check-label" for="inlineRadio3">Excelente</label>
        </div></label
      >
</div>

<div class="questoes">

      <div id="id8t3n"><b>Instala????es:</b></div>
      <label class="label"
        ><label class="label">Estrutura da Sala</label>
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio12Options"
            id="inlineRadio1"
            value="regular"
          />
          <label class="form-check-label" for="inlineRadio1">Regular</label>
        </div>
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio12Options"
            id="inlineRadio2"
            value="bom"
          />
          <label class="form-check-label" for="inlineRadio2">Bom</label>
        </div>
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio12Options"
            id="inlineRadio3"
            value="excelente"
          />
          <label class="form-check-label" for="inlineRadio3">Excelente</label>
        </div></label
      >
</div>

<div class="questoes">

      <label class="label"
        ><label class="label">Coffe-break</label>
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio13Options"
            id="inlineRadio1"
            value="regular"
          />
          <label class="form-check-label" for="inlineRadio1">Regular</label>
        </div>
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio13Options"
            id="inlineRadio2"
            value="bom"
          />
          <label class="form-check-label" for="inlineRadio2">Bom</label>
        </div>
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio13Options"
            id="inlineRadio3"
            value="excelente"
          />
          <label class="form-check-label" for="inlineRadio3">Excelente</label>
        </div></label
      >
</div>

<div class="questoes">
  
      <label class="label"
        ><label class="label">Equipamentos</label>
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio14Options"
            id="inlineRadio1"
            value="regular"
          />
          <label class="form-check-label" for="inlineRadio1">Regular</label>
        </div>
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio14Options"
            id="inlineRadio2"
            value="bom"
          />
          <label class="form-check-label" for="inlineRadio2">Bom</label>
        </div>
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadio14Options"
            id="inlineRadio3"
            value="excelente"
          />
          <label class="form-check-label" for="inlineRadio3">Excelente</label>
        </div></label>
</div>

<div class="questoes">

        <div id="ijdyue"><b>Avalia????o Geral:</b></div>
      <div class="form-check form-check-inline">
        <input
          class="form-check-input"
          type="radio"
          name="inlineRadio15Options"
          id="inlineRadio1"
          value="regular"
        />
        <label class="form-check-label" for="inlineRadio1">Regular</label>
      </div>
      <div class="form-check form-check-inline">
        <input
          class="form-check-input"
          type="radio"
          name="inlineRadio15Options"
          id="inlineRadio2"
          value="bom"
        />
        <label class="form-check-label" for="inlineRadio2">Bom</label>
      </div>
      <div class="form-check form-check-inline">
        <input
          class="form-check-input"
          type="radio"
          name="inlineRadio15Options"
          id="inlineRadio3"
          value="excelente"
        />
        <label class="form-check-label" for="inlineRadio3">Excelente</label>
      </div>
</div>

      <div id="ikpkuo"><b>Coment??rios, Criticas e Sugest??es:</b></div>
      <div class="form-group" id="ifrhk">
        <textarea class="textarea" name="sugestoes"></textarea>
      </div>
      <div class="form-group">
        <button type="submit" name="enviar" value="enviar" class="button" id="irhrf">Enviar</button>
      </div>
    </form>

    <footer id="i407v" class="footer-under">
      <div class="footer-container" id="i52gg">
        <span>Desenvolvido para o Projeto integrador da UNIVESP</span>
      </div>
    </footer>

  </body>

  <script>
    function validateForm() {
		var questions = document.getElementsByClassName("questoes"),
			formValid = true;
		for( var j=0; j<questions.length; j++ ) {
			if( !isOneInputChecked(questions[j], "radio") ) {
				formValid = false;
			}
		}
		alert(formValid ? "Enviado com Sucesso!" : "Alguma quest??o ficou sem responder!");
		return formValid;
	}
	function isOneInputChecked(sel) {
		var inputs = sel.getElementsByTagName('input');
		for (var k=0; k<inputs.length; k++) {
			if( inputs[k].checked )
				return true;
		}
		return false;
	}
  </script>

<script>
  var form = document.forms[0], 
    t = document.getElementById("exampleFormControlSelect1");

form.addEventListener('submit', function(e) {
    if(t.options[t.selectedIndex].value == "selecione"){
        alert("Escolha um Treinamento");
        e.preventDefault();
    }
});
</script>

<script>
  var form = document.forms[0], 
    p = document.getElementById("exampleFormControlSelect2");

form.addEventListener('submit', function(e) {
    if(p.options[p.selectedIndex].value == "selecione"){
        alert("Escolha um Per??odo");
        e.preventDefault();
    }
});
</script>

</html>
