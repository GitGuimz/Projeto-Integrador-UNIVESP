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
            <table width="200" border="1">
              <tbody>
              <div class="btn-container">
            <button name="increase-font" id="increase-font" title="Aumentar fonte">Aumentar Fonte</button>
            <button name="decrease-font" id="decrease-font" title="Diminuir fonte">Diminuir Fonte</button>
        </div>
              </tbody>
            </table>
            <a class="navbar-brand"></a>
            <div class="d-flex">
            <a class="btn btn-danger" href="./Login/entrar.php" role="button">Login</button></a>
          </div>
          </div>
        </nav>
        </div>
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

      <div class="form-group" id="i5a5x">
        <label class="label" id="icnie">CEP</label
        ><input
          type="text"
          name="cep"
          placeholder="Digita aqui o CEP"
          class="input"
          required
        />
      </div>

      <div class="form-group" id="i5a6x">
        <label class="label" id="icnie">Rua</label
        ><input
          type="text"
          name="rua"
          disabled=""
          placeholder="Rua"
          class="input"
          required
        />
      </div>

      <div class="form-group" id="i5a7x">
        <label class="label" id="icnie">Bairro</label
        ><input
          type="text"
          name="bairro"
          disabled=""
          placeholder="Bairro"
          class="input"
          required
        />
      </div>

      <div class="form-group" id="i5a4x">
        <label class="label" id="icnie">Cidade</label
        ><input
          type="text"
          name="cidade"
          disabled=""
          placeholder="Cidade"
          class="input"
          required
        />
      </div>

      <div class="form-group" id="i5a8x">
        <label class="label" id="icnie">Estado</label
        ><input
          type="text"
          name="estado"
          disabled=""
          placeholder="Estado"
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
            NR-10 - Básico Reciclagem C.H. 8h
          </option>
          <option>
            NR-10 - Básico Reciclagem C.H. 16h
          </option>
          <option>
            NR-10 - Básico Formação C.H. 40h
          </option>
          <option>
            NR-10 - SEP Reciclagem C.H. 8h
          </option>
          <option>
            NR-10 - SEP Reciclagem C.H. 16h
          </option>
          <option>
            NR-10 - SEP Formação C.H. 40h
          </option>
          <option>
            NR-11 - Empilhadeira Reciclagem C.H. 8h
          </option>
          <option>
            NR-11 - Empilhadeira Formação C.H. 16h
          </option>
          <option>
            NR-11 - Guincho Canarinho Reciclagem C.H. 8H
          </option>
          <option>
            NR-11 - Guincho Canarinho Formação C.H. 16H
          </option>
          <option>
            NR-11 - Guindauto Reciclagem C.H. 8H
          </option>
          <option>
            NR-11 - Guindauto Formação C.H. 16H
          </option>
          <option>
            NR-11 - Guindauto Formação C.H. 24H
          </option>
          <option>
            NR-11 - Hilo Fixo Reciclagem C.H. 8H
          </option>
          <option>
            NR-11 - Hilo Fixo Formação C.H. 16H
          </option>
          <option>
            NR-11 - Pá Carregadeira Reciclagem C.H. 8H
          </option>
          <option>
            NR-11 - Pá Carregadeira Formação C.H. 16H
          </option>
          <option>
            NR-11 - Ponte Rolante Reciclagem C.H. 8H
          </option>
          <option>
            NR-11 - Ponte Rolante Formação C.H. 16H
          </option>
          <option>
            NR-12 - Injetora Formação C.H. 8H
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
            NR-12 - Roçadeira C.H. 8H
          </option>
          <option>
            NR-13 - Caldeira Reciclagem C.H. 8h
          </option>
          <option>
            NR-13 - Caldeira Reciclagem C.H. 16h
          </option>
          <option>
            NR-13 - Caldeira Formação C.H. 40h
          </option>
          <option>
            NR-13 - Unidades de Processo Reciclagem C.H. 8h
          </option>
          <option>
            NR-13 - Unidades de Processo Reciclagem C.H. 16h
          </option>
          <option>
            NR-13 - Unidades de Processo Formação C.H. 40h
          </option>
          <option>
            NR-18 - Montador de Andaime Formação C.H. 8H
          </option>
          <option>
            NR-18 - PTA Reciclagem C.H. 4h
          </option>
          <option>
            NR-18 - PTA Formação C.H. 4h
          </option>
          <option>
            NR-18 - PTA Formação C.H. 16h
          </option>
          <option>
            NR-18 - Sinaleiro Formação C.H. 16h
          </option>
          <option>
            NR-18 - Trabalho a Quente Formação C.H. 8h
          </option>
          <option>
            NR-20 - Avançado 2 Reciclagem C.H. 4H
          </option>
          <option>
            NR-20 - Avançado 2 Formação C.H. 32H
          </option>
          <option>
            NR-20 - Básico Reciclagem C.H. 4H
          </option>
          <option>
            NR-20 - Básico Formação C.H. 8H
          </option>
          <option>
            NR-20 - Específico Formação C.H. 16H
          </option>
          <option>
          NR-20 - Iniciação Formação C.H. 3H
          </option>
          <option>
          NR-20 - Intermediário Formação C.H. 16H
          </option>
          <option>
          NR-20 - Intermediário Reciclagem C.H. 4H
          </option>
          <option>
          NR-23 - Brigada Agrícola Formação C.H. 8H
          </option>
          <option>
          NR-23 - Brigada Agrícola Reciclagem C.H. 8H
          </option>
          <option>
          NR-23 - Brigada Agrícola Formação C.H. 24H
          </option>
          <option>
          NR-23 - Brigada Agrícola Reciclagem C.H. 12H
          </option>
          <option>
          NR-23 - Brigada Industrial Formação C.H. 24H
          </option>
          <option>
          NR-23 - Brigada Industrial Reciclagem C.H. 12H
          </option>
          <option>
            NR-31 - Agrotóxicos Formação C.H. 20h
          </option>
          <option>
          NR-31 - Agrotóxicos Reciclagem C.H. 20h
          </option>
          <option>
          NR-31.12 - Colhedora Formação C.H. 24h
          </option>
          <option>
          NR-31.12 - Colhedora Reciclagem C.H. 8h
          </option>
          <option>
          NR-31.12 - Máquinas Agrícolas Formação C.H. 24h
          </option>
          <option>
          NR-31.12 - Máquinas Agrícolas Reciclagem C.H. 8h
          </option>
          <option>
          NR-31.12 - Trator Formação C.H. 24h
          </option>
          <option>
          NR-31.12 - Trator Reciclagem C.H. 8h
          </option>
          <option>
          NR-33 - Supervisor Formação C.H. 40h
          </option>
          <option>
          NR-33 - Supervisor Recicalgem C.H. 8h
          </option>
          <option>
          NR-33 - Trabalhador e Vigia Formação C.H. 16h
          </option>
          <option>
          NR-33 - Trabalhador e Vigia Reciclagem C.H. 8h
          </option>
          <option>
          NR-35 - Trabalho em Altura Formação C.H. 8h
          </option>
          <option>
          NR-35 - Trabalho em Altura Reciclagem C.H. 8h
          </option>
          <option>
          Técnicas de Apresentação Formação C.H. 16h
          </option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Período</label>
        <select class="input" name="periodo" id="exampleFormControlSelect2">
          <option value="selecione">Selecione</option>
          <option>Manhã</option>
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
        ><label class="label">O Número de participantes foi adequado?</label>
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
        ><label class="label">A duração total do programa foi adequada?</label>
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
        ><label class="label">Qualidade do material didático</label>
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

      <div id="ij7fc4"><b>Atuação do Instrutor:</b></div>
      <label class="label"
        ><label class="label">Clareza na exposição dos assuntos</label>
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
        ><label class="label">Interação com os participantes</label>
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
        ><label class="label">Domínio do assunto</label>
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
        ><label class="label">Dinâmica em sala de aula</label>
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

      <div id="ivi0xh"><b>Participação / Aplicação do Conteúdo:</b></div>
      <label class="label"
        ><label class="label">Sua participação na sala de aula</label>
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
          >A motivação do grupo para os assuntos abordados</label
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
          >Aplicação dos conteúdos apresentados na sua atuação na empresa</label
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

      <div id="id8t3n"><b>Instalações:</b></div>
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

        <div id="ijdyue"><b>Avaliação Geral:</b></div>
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

      <div id="ikpkuo"><b>Comentários, Criticas e Sugestões:</b></div>
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
		alert(formValid ? "Enviado com Sucesso!" : "Alguma questão ficou sem responder!");
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
        alert("Escolha um Período");
        e.preventDefault();
    }
});
</script>

<script>
(function(){

const cep = document.querySelector("input[name=cep]");

cep.addEventListener('blur', e=> {
    const value = cep.value.replace(/[^0-9]+/, '');
    const url = `https://viacep.com.br/ws/${value}/json/`;
    
    fetch(url)
    .then( response => response.json())
    .then( json => {
        
        if( json.logradouro ) {
          document.querySelector('input[name=rua]').value = json.logradouro;
          document.querySelector('input[name=bairro]').value = json.bairro;
          document.querySelector('input[name=cidade]').value = json.localidade;
          document.querySelector('input[name=estado]').value = json.uf;
        }
    
    });
    
    
});
})();
</script>

<script type="text/javascript">
            window.onload = function() {
                var elementBody = document.querySelector('body');
                var elementBtnIncreaseFont = document.getElementById('increase-font');
                var elementBtnDecreaseFont = document.getElementById('decrease-font');
                // Padrão de tamanho, equivale a 100% do valor definido no Body
                var fontSize = 100;
                // Valor de incremento ou decremento, equivale a 10% do valor do Body
                var increaseDecrease = 10;

                // Evento de click para aumentar a fonte
                elementBtnIncreaseFont.addEventListener('click', function(event) {
                    fontSize = fontSize + increaseDecrease;
                    elementBody.style.fontSize = fontSize + '%';
                });

                // Evento de click para diminuir a fonte
                elementBtnDecreaseFont.addEventListener('click', function(event) {
                    fontSize = fontSize - increaseDecrease;
                    elementBody.style.fontSize = fontSize + '%';
                });
            }
        </script>

</html>
