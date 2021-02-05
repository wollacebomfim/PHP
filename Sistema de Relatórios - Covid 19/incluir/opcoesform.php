    <div class="row container">
    <form action="./funcao/cadastrar.php" method="POST" >

    <!-- FORMULARIO -->
    <fieldset class="formulario"> 
    <h5 class="light center">Preencha o formulario</h5>
    <br>
    <div class="input-field col s6">
    <i class="material-icons prefix">account_circle</i>
    <input type="text" name="nome"  placeholder="NOME DO PROPONENTE \ RAZÃO SOCIAL " autofocus required>
    <label for="nome">Nome do proponente \ razão Social</label>
    </div>

    <div class="input-field col s6">
    <i class="material-icons prefix">account_circle</i>
    <input type="text" name="nomedaoutraparte"   placeholder="NOME DO OUTRA PARTE \ RAZÃO SOCIAL " required>
    <label for="nomedaoutraparte">Nome da outra parte \ razão Social</label>
    </div>

    <div class="input-field col s6">
    <i class="material-icons prefix">account_circle</i>
    <input type="text" name="ramoatividadeproponente"   placeholder="RAMO DA ATIVIDADE DO PROPONENTE" required>
    <label for="ramoatividadeproponente">Ramo da atividade do proponente</label>
    </div>

    <div class="input-field col s6">
    <i class="material-icons prefix">account_circle</i>
    <input type="text" name="ramoatividadeoutraparte"   placeholder="RAMO DA ATIVIDADE DA OUTRA PARTE" required>
    <label for="ramoatividadeoutraparte">Ramo da atividade da outra parte</label>
    </div>

    <div class="input-field col s6">
    <i class="material-icons prefix">attach_money</i>
    <input type="text" name="valorprestacao"   placeholder="VALOR DA PRESTAÇÃO" required>
    <label for="valorprestacao">Valor da prestação</label>
    </div> 

    <div class="input-field col s6">
    <i class="material-icons prefix">panorama_vertical</i>
    <input type="text" name="objeto"   placeholder="OBJETO DO CONTRATO" required >
    <label for="objeto">Objeto do contrato</label>
    </div>

    <div class="input-field col s6">
    <i class="material-icons prefix"> date_range</i>
    <select name="dataaditivo" >
    <option value="" disabled selected> Selecione a data</option>
    <option value="As partes firmaram um aditivo em data anterior ao reconhecimento do estado de calamidade pública no Brasil em decorrência da pandemia da COVID-19.">Antes de 22/03/2020</option>
    <option value="A celebração do aditivo em data posterior ao início da pandemia pode ser um obstáculo à revisão do contrato, uma vez que já repactuados os seus termos. Faz-se relevante verificar a existência de cláusula específica sobre os seus efeitos.">Depois de 22/03/2020</option>
    <option value="">Sem aditivo</option>
    </select>
    <label for="dataaditivo">Data do último aditivo, se houver:</label>
    </div>

    <div class="input-field col s6">
    <i class="material-icons prefix">date_range</i>
    <select class="js-example-basic-single form-control" id="cliente" name="datacontrato">
    <option value="" disabled selected> Selecione a data</option>
    <option value="">Antes de 22/03/2020</option>
    <option value="Para os contratos firmados após 22/03/2020, será bastante desafiador comprovar que a pandemia da Covid-19 e/ou seus efeitos caracterizam eventos supervenientes extraordinários e/ou imprevisíveis, o que pode obstar a aplicação dos institutos da força maior/caso fortuito ou das teorias da imprevisão/onerosidade excessiva. Nesses casos, tem-se que demonstrar que as partes não possuíam, nem deviam possuir, a ciência dos riscos envolvidos no momento da assinatura do termo contratual, não sendo suficiente a alegação genérica de que foram afetadas pela pandemia.<br><br>Nesse sentido, a jurisprudência nacional já reconheceu que “o estado de pandemia não pode, por si só, servir de apoio para revisão dos negócios firmados.” (TJ-SP - AI: 20931483620208260000 SP 2093148-36.2020.8.26.0000, Relator: Afonso Bráz, Data de Julgamento: 26/06/2020, 17ª Câmara de Direito Privado, Data de Publicação: 26/06/2020)."> Depois de 22/03/2020</option>
    </select>
    <label for="dataaditivo">Data de celebração do contrato:</label>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
$('select').on('change', function(){ 
  if( $(this).find('option:selected').text().indexOf('Depois') > 0) {
    alert('Para os contratos firmados após 22/03/2020, será bastante desafiador comprovar que a pandemia da Covid-19 e/ou seus efeitos caracterizam eventos supervenientes extraordinários e/ou imprevisíveis, o que pode obstar a aplicação dos institutos da força maior/caso fortuito ou das teorias da imprevisão/onerosidade excessiva.\n\nNesses casos, tem-se que demonstrar que as partes não possuíam, nem deviam possuir, a ciência dos riscos envolvidos no momento da assinatura do termo contratual, não sendo suficiente a alegação genérica de que foram afetadas pela pandemia.');
  }
});
</script>



    <div class="input-field col s8">
    <i class="material-icons prefix">date_range</i>
    <select name="datavencimento" >
    <option value="" disabled selected>Data de vencimento da primeira prestação cuja revisão se requer:</option>
    <option value="A proponente alega que o vencimento da prestação cuja revisão requerer ocorreu em data anterior ao reconhecimento do estado de calamidade pública no Brasil em decorrência da pandemia da COVID-19.<br><br>Assim, a dificuldade de cumprimento da obrigação não tem nexo de causalidade com a crise provocada pela pandemia. Nesse sentido, vide:<br><br>Queda do faturamento da locatária, em razão das medidas de prevenção e contenção da Covid-19, que não autorizam a revogação da liminar, especialmente porque o inadimplemento ocorreu antes da pandemia. Decisão mantida. Recurso desprovido.(TJ-SP - AI: 20970673320208260000 SP 2097067-33.2020.8.26.0000, Relator: Pedro Baccarat, Data de Julgamento: 02/07/2020, 36ª Câmara de Direito Privado, Data de Publicação: 02/07/2020).">Antes de 22/03/2020</option>
    <option value="A proponente alega que o vencimento da prestação cuja revisão requerer ocorreu em data posterior ao reconhecimento do estado de calamidade pública no Brasil em decorrência da pandemia da COVID-19.<br><br>Assim, é verossímil a alegação de dificuldade de cumprimento da obrigação em razão da crise provocada pela pandemia.">Depois de 22/03/2020</option>
    </select>
    <label for="datavencimento">Data de vencimento da primeira prestação cuja revisão se requer:</label>
    </div>

    <div class="input-field col s8">
    <i class="material-icons prefix">date_range</i>
    <select name="datacumprimento" >
    <option value="" disabled selected> Selecione</option>
    <option value="Como a parte não estava em mora no momento da ocorrência do evento extraordinário, a priori, inexiste óbice para requerer a revisão das prestações.">Sim</option>
    <option value="Tendo em vista que a proponente já estava em mora no momento da ocorrência do evento extraordinário, será remota a possibilidade de reconhecimento das excludentes de responsabilidade civil ou a aplicação das teorias da imprevisão e da força maior. O Superior Tribunal de Justiça posiciona-se no sentido de que não poderá a parte estar em mora ao tentar pleitear a revisão ou extinção do contrato em razão do desequilíbrio (STJ. REsp 1.581.075 PA, relator: ministro MOURA RIBEIRO, Data de Publicação: DJe 22.03.19).">Não</option>
    <option value="">Não se aplica</option>
    </select>
    <label for="datavencimento">A última prestação do contrato que venceu antes de 22/03/2020 foi adimplida?</label>
  
    </div>

    </fieldset>

    <br>



<!-- FORMS GERAIS -->
<fieldset class="formulario">

<h5 class="light center">Selecione os campos abaixo </h5>

<br>
    <div class="input-field col s7">
    <i class="material-icons prefix">thumbs_up_down</i>
    <select name="renegociar" >
    <option value="" disabled selected>Já houve tentativa de renegocição com a parte contrária ?</option>
    <option value="">Sim</option>
    <option value="<b>Tentativa de renegociação</b><br><br>Alguns Tribunais têm entendido a ausência de tentativa de negociação prévia como obstáculo à concessão do pleito de revisão ou extinção do contrato, conforme pode ser extraído dos julgados abaixo:'Observo, contudo, que a conduta da agravante, ao não se dispor a negociar em concreto com a agravada, viola os princípios da boa-fé objetiva, da colaboração e da solidariedade social' (TJ-DF 07092833920208070000, Relator: HECTOR VALVERDE, 5ª Turma Cível, Data de Publicação: 05/05/2020)'Desobrigação de pagamento que pelo regime legal não pode ser imposta ao credor pelo Juiz, devendo decorrer de ato negocial entre as partes ou por força de especial disposição legal' (TJ-SP - AI: 20806466520208260000 SP 2080646-65.2020.8.26.0000, Relator: Arantes Theodoro, Data de Julgamento: 06/05/2020, 36ª Câmara de Direito Privado, Data de Publicação: 06/05/2020).">Não</option>
    </select>
    <label for="renegociar">Já houve tentativa de renegocição com a parte contrária ?</label>
    </div>


  <div class="input-field col s7">
  <i class="material-icons prefix">chrome_reader_mode</i>
  <select name ="natureza" >
  <option value="" disabled selected>Selecione a natureza da obrigação</option>
  <option value="<b>Obrigação de pagar</b><br><br><p>Nas hipóteses de a obrigação cuja revisão se requer ser de pagar, os Tribunais têm entendido não serem aplicáveis as teorias de caso fortuíto e força maior. Vide abaixo:<br><br>“No caso, ainda que se considere a pandemia uma situação cujos efeitos não era possível evitar ou impedir, a verdade é que, em princípio, a obrigação da agravante de pagar certa quantia pela reprodução gráfica de materiais não é impossível. Poder-se-ia falar em difícil, excessiva, mas não juridicamente irrealizável. Assim, não há falar em afastamento de sua responsabilidade pela dívida.” (TJ-SP - AI: 21570064120208260000 SP 2157006-41.2020.8.26.0000, Relator: José Tarciso Beraldo, Data de Julgamento: 14/07/2020, 37ª Câmara de Direito Privado, Data de Publicação: 14/07/2020)<br><br>“A obrigação pecuniária é autônoma ou especial, relativamente às demais previstas no CC/02, considerando que, embora esteja o devedor vinculado a uma prestação de dar, o dinheiro não é coisa, apenas corresponde ao preço das coisas. No que tange à teoria do risco, diferentemente do que ocorre com as obrigações de dar coisa certa ou incerta, a interpretação sistemática do CC/02, influenciada pelas normas processuais, permite afirmar, com relação à prestação pecuniária, que, até a efetiva entrega do dinheiro ao credor, não poderá o devedor alegar, contra aquele, a perda da quantia devida, ainda que por força maior ou caso fortuito, inclusive porque se trata de bem móvel fungível.” (STJ - REsp: 1705305 SP 2016/0004071-4, Relator: Ministra NANCY ANDRIGHI, Data de Julgamento: 22/05/2018, T3 - TERCEIRA TURMA, Data de Publicação: DJe 24/05/2018 RB vol. 654 p. 224 RT vol. 995 p. 805)<br><br>É possível, entretanto, o enquadramento nas teorias da imprevisão e onerosidade excessiva.</p>">Obrigação de pagar</option>
  <option value="<b>Obrigação de dar, fazer ou não fazer</b><br><br><p>Como a obrigação é de dar, fazer ou não fazer, é possível a aplicação das teorias da imprevisão/onerosidade excessiva e caso fortuíto/força maior, sendo recomendada a análise casuística de cada uma delas. Nesse sentido, observe-se:<br><br>“Contudo, é necessária cautela na análise da situação emergencial ora vivenciada, em especial à luz da razoabilidade e do bom senso que o momento exige, de modo a evitar intuitos de aproveitamento e/ou abuso de direito de quaisquer dos envolvidos nas relações econômicas. Isto é, a situação excepcional do COVID-19 não pode servir como um pretexto genérico para se deixar de cumprir obrigações ou para não fazer com que o processo alcance sua finalidade, sob pena de se contribuir para o agravamento ainda maior da situação econômica, em face dos reflexos causados em todos os envolvidos e na sociedade como um todo. (TJ-SP - AGT: 20632706620208260000 SP 2063270-66.2020.8.26.0000, Relator: Alexandre Lazzarini, Data de Julgamento: 22/04/2020, 1ª Câmara Reservada de Direito Empresarial, Data de Publicação: 22/04/2020)”.</p>">Obrigação de dar coisa</option>
  <option value="<b>Obrigação de dar, fazer ou não fazer</b><br><br><p>Como a obrigação é de dar, fazer ou não fazer, é possível a aplicação das teorias da imprevisão/onerosidade excessiva e caso fortuíto/força maior, sendo recomendada a análise casuística de cada uma delas. Nesse sentido, observe-se:<br><br>“Contudo, é necessária cautela na análise da situação emergencial ora vivenciada, em especial à luz da razoabilidade e do bom senso que o momento exige, de modo a evitar intuitos de aproveitamento e/ou abuso de direito de quaisquer dos envolvidos nas relações econômicas. Isto é, a situação excepcional do COVID-19 não pode servir como um pretexto genérico para se deixar de cumprir obrigações ou para não fazer com que o processo alcance sua finalidade, sob pena de se contribuir para o agravamento ainda maior da situação econômica, em face dos reflexos causados em todos os envolvidos e na sociedade como um todo. (TJ-SP - AGT: 20632706620208260000 SP 2063270-66.2020.8.26.0000, Relator: Alexandre Lazzarini, Data de Julgamento: 22/04/2020, 1ª Câmara Reservada de Direito Empresarial, Data de Publicação: 22/04/2020)”.</p>">Obrigação de fazer ou não fazer</option>
  </select>
  <label for="natureza">Selecione a natureza da obrigação</label>
  </div>

      <div class="input-field col s8">
      <i class="material-icons prefix">local_atm</i>
      <select name="contratoprestacao" >
      <option value="" disabled selected>O contrato é de execução continuada ou por um só ato no futuro?</option>
      <option value="<b>Contrato não é de prestações continuadas ou diferidas</b><br><br>Como o contrato não é de prestações continuadas ou diferidas, não são aplicáveis as teorias da imprevisão e onerosidade excessiva. Assim dispõe o art. 478 do Código Civil e se manifestam os tribunais pátrios. Observe-se:<br><br>“Na hipótese vertente, a obrigação foi assumida no momento da subscrição do instrumento contratual, isto é, instantaneamente, e não de forma diferida no tempo. Observa-se, portanto, que a obrigação é única, apenas fracionam-se as prestações, até porque a prestação periódica e singular não constitui objeto de obrigação distinta.Com efeito, a venda da academia teve data certa e, uma vez concluída, na mesma linha de intelecção apontada pela Corte de origem, não pode ser desfeita pela simples desistência de uma das partes, não havendo falar em possibilidade de resilição, afastando-se, de igual modo, as violações aos arts 473 e 478 do Código Civil.(STJ - REsp: 1773478 DF 2017/0280308-1, R elator: Ministro LUIS FELIPE SALOMÃO, Data de Publicação: DJ 18/12/2018)<br>Para aplicação das teorias de caso fortuíto e força maior, não é relevante a natureza das prestações (se continuada ou diferida).">Execução em um só ato no futuro</option>
      <option value="<b>Contrato de execução continuada ou em um só ato no futuro</b><br><br>Como o contrato é de execução continuada ou em um só ato no futuro, podem ser aplicáveis as teorias da imprevisão e onerosidade excessiva. Assim dispõe o art. 478 do Código Civil e se manifestam os tribunais pátrios. Observe-se:<br><br>Na hipótese vertente, a obrigação foi assumida no momento da subscrição do instrumento contratual, isto é, instantaneamente, e não de forma diferida no tempo. Observa-se, portanto, que a obrigação é única, apenas fracionam-se as prestações, até porque a prestação periódica e singular não constitui objeto de obrigação distinta. Com efeito, a venda da academia teve data certa e, uma vez concluída, na mesma linha de intelecção apontada pela Corte de origem, não pode ser desfeita pela simples desistência de uma das partes, não havendo falar em possibilidade de resilição, afastando-se, de igual modo, as violações aos arts 473 e 478 do Código Civil.<br><br>(STJ - REsp: 1773478 DF 2017/0280308-1, Relator: Ministro LUIS FELIPE SALOMÃO, Data de Publicação: DJ 18/12/2018)<br><br>Para aplicação das teorias de caso fortuito e força maior, não é relevante a natureza da execução (se continuada ou imediata).">Execução continuada</option>
      <option value="<b>Contrato não é de prestações continuadas ou diferidas</b><br><br>Como o contrato não é de prestações continuadas ou diferidas, não são aplicáveis as teorias da imprevisão e onerosidade excessiva. Assim dispõe o art. 478 do Código Civil e se manifestam os tribunais pátrios. Observe-se:<br><br>“Na hipótese vertente, a obrigação foi assumida no momento da subscrição do instrumento contratual, isto é, instantaneamente, e não de forma diferida no tempo. Observa-se, portanto, que a obrigação é única, apenas fracionam-se as prestações, até porque a prestação periódica e singular não constitui objeto de obrigação distinta.Com efeito, a venda da academia teve data certa e, uma vez concluída, na mesma linha de intelecção apontada pela Corte de origem, não pode ser desfeita pela simples desistência de uma das partes, não havendo falar em possibilidade de resilição, afastando-se, de igual modo, as violações aos arts 473 e 478 do Código Civil.(STJ - REsp: 1773478 DF 2017/0280308-1, R elator: Ministro LUIS FELIPE SALOMÃO, Data de Publicação: DJ 18/12/2018)<br><br>Para aplicação das teorias de caso fortuíto e força maior, não é relevante a natureza das prestações (se continuada ou diferida).">Não</option>
      </select>
      <label for="contratoprestacao">O contrato é de execução continuada ou por um só ato no futuro?</label>
      </div>

      </fieldset>
      <br>



    <!-- FORMS GERAIS -->
    <fieldset class="formulario">
    <h5 class="light center">O que causou a impossibilidade ou excessiva dificuldade no cumprimento  dessa obrigação?</h5>
    <br>
    <label>   
    <input name="escolha" type="radio" id="1" />
    <span>Queda de faturamento / Inadimplemento de clientes / Restrição de funcionamento</span>
    </label></br>
    <label>   
    <input name="escolha" type="radio" id="2"/>
    <span>Proibição por ato do poder público / Fechamento de fronteira</span>
    </label></br>
    <label>   
     <input name="escolha" type="radio" id="3"  />
    <span>Falecimento</span>
    </label></br>
    <label>   
    <input  name="obrigacao"    type="radio" value="<b>Oscilação de preço / variação cambial</b><br><br>O atual posicionameto do STJ é de que a oscilação de preço ocorrida após a celebração do contrato, inclusive a decorrente de variação cambial, não evidencia acontecimento extraordinário e imprevisível apto a propiciar a revisão da obrigação (STJ. AgInt nos EDcl no AREsp n. 784.056-SP). Ressalta-se, por cautela, que o STJ, em demandas promovidas por consumidores que tiveram a sua capacidade de pagamento afetada em razão da desvalorização da moeda ocorrida no final dos anos 90, chegou a reconhecer a configuração da onerosidade excessiva (STJ. AgRg no REsp n. 716702-RS).">
    <span>Oscilação de preço / variação cambial</span>
    </label></br>
    <label>   
    <input name="obrigacao1"    type="radio" value="<b>Ausência de insumo ou mão de obra</b><br><br>A rigor, a ausência de insumo ou de mão de obra nao se enquadra nas teorias de onerosidade excessiva/imprevisão e caso fortuito/força maior, tratando-se de risco inerente ao próprio negócio. Nesse sentido, vide abaixo.<br><br>“A alegação de que o atraso na conclusão da obra foi causado por fortes chuvas, escassez de mão-de-obra e material de construção não configura excludente de reponsabilidade por caso fortuito e força maior, pois, ainda que não provocados diretamente pelas apelantes, constituem fortuito interno, isto é riscos inerentes à atividade empresarial por elas desenvolvida” (TJ-PE - AC: 4588889 PE, Relator: Alberto Nogueira Virgínio, Data de Julgamento: 18/09/2019, 2ª Câmara Cível, Data de Publicação: 21/10/2019)." />
    <span>Ausência de insumo ou mão de obra</span>
    </label></br>
    <label>   
    <input name="obrigacao2"   type="radio"  value="<b>Preecimento de outro na causa de impossibilidade ou excessiva dificuldade no cumprimento de obrigação</b><br><br>A causa da impossibilidade ou excessiva dificuldade no cumprimento da obrigação apontada não consta ainda no nosso banco de dados. Agradecemos a indicação. Atualizaremos em breve. Até lá, sugerimos que preencha novamente o relatório indicando alguma causa similar." />
    <span>Outro</span>
    </label>

    </fieldset>
    <br>

     <!-- ANALISE FINANCEIRA -->
    <fieldset class="hide" id="pergunta-1">

    <div class="input-field col s12">
    <i class="material-icons prefix">trending_down</i>
    <select name="quedarecebimento" >
    <option value="" disabled selected>Qual foi a queda no faturamento comparando os meses da pandemia com os mesmos meses em 2019?</option>
    <option value="<b>Faturamento</b><br><br>A queda do faturamento de até 30% (trinta por cento) pode ser entendida pelo Poder Judiciário como risco inerente à atividade, não se aplicando, nesta hipótese, as teorias da imprevisão ou onerosidade excessiva. Assim, inclusive, já foi entendido em casos de queda de fatuamento superior ao percentual indicado. Nesse sentido, observe-se: <br><br>Queda no faturamento que ultrapassa o percentual de 70%. O impacto no ramo estabelecimento do agravante é possível, mas, para o negócio do agravante, não foi determinado inteiramente o fechamento total. Em tal quadro, ainda não se antevê, ainda, a ocorrência de risco de dano grave, irreversível ou de impossível reparação para ensejar, agora, guarida à suspensão pedida sem prévia oitiva da parte adversa. (TJ-SP - AI: 21198311320208260000 SP 2119831-13.2020.8.26.0000, Relator: Adilson de Araujo, Data de Julgamento: 22/06/2020, 31ª Câmara de Direito Privado, Data de Publicação: 22/06/2020).">até 30%</option>
    <option value="<b>Faturamento</b><br><br>A redução do faturamento da proponente superior a 30% (trinta por cento) pode legitimar a revisão do contrato pelo Poder Judiciário, com base nas teorias da imprevisão e onerosidade excessiva. Observe-se:<br><br>Queda de faturamento de mais de 50%. Desembargador deferiu a liminar para determinar ao banco agravado (SAFRA) que restituísse, imediatamente, 90% (noventa por cento) do limite do crédito empresarial contratado, recebendo o agravante o valor total do ajuste de um milhão de reais. (TJ-DF 07107237020208070000, Relator: MARIO-ZAM BELMIRO, 8ª Turma Cível, Data de Publicação: 12/05/2020)<br>Tal presunção, todavia, não é absoluta, merecendo análise casuística. Nesse sentido, vide:<br>Queda no faturamento que ultrapassa o percentual de 70%. O impacto no ramo estabelecimento do agravante é possível, mas, para o negócio do agravante, não foi determinado inteiramente o fechamento total. Em tal quadro, ainda não se antevê, ainda, a ocorrência de risco de dano grave, irreversível ou de impossível reparação para ensejar, agora, guarida à suspensão pedida sem prévia oitiva da parte adversa. (TJ-SP - AI: 21198311320208260000 SP 2119831-13.2020.8.26.0000, Relator: Adilson de Araujo, Data de Julgamento: 22/06/2020, 31ª Câmara de Direito Privado, Data de Publicação: 22/06/2020).">acima de 30%</option>
    <option value="<b>Faturamento</b><br><br>Os Tribunais têm exigido, para aplicação das teorias da imprevisão e da onerosidade excessiva, a efetiva comprovação do impacto direto da pandemia na atividade da parte e a excessiva onerosidade da prestação. É ônus da parte proponente acostar documentação probatória da queda no faturamento. Nesse sentido, vide:<br><br>Impactos da pandemia de Covid-19 que devem ser analisados casuisticamente. Ausência de provas concretas da queda de faturamento ou da atividade empresarial. (TJ-SP - AGT: 20777184420208260000 SP 2077718-44.2020.8.26.0000, Relator: Pereira Calças, Data de Julgamento: 19/05/2020, 1ª Câmara Reservada de Direito Empresarial, Data de Publicação: 19/05/2020) <br><br>Conquanto a agravante-autora afirme que, em decorrência do fechamento da loja física ante a pandemia do novo coronavírus, o seu faturamento tenha sido reduzido drasticamente, em aproximados 85%, não há prova inequívoca de que tal circunstância a impeça de arcar com o aluguel mensal na importância supracitada. Mais ainda quando há vendas on-line.  (TJ-DF 07095631020208070000, Relator: VERA ANDRIGHI, 6ª Turma Cível, Data de Publicação: 08/05/2020).">a empresa não comprovou</option>
    </select>
    <label for="quedarecebimento">Qual foi a queda no faturamento comparando os meses da pandemia com os mesmos meses em 2019?</label>
    </div>

    <div class="input-field col s8">
    <i class="material-icons prefix">trending_up</i>
    <select name="quedafaturamento" >
    <option value="" disabled selected>Houve aumento no percentual de inadimplemento?</option>
    <option value="<b>Inadimplemento</b><br><br>O aumento do percentual de inadimplemento de até 30% (trinta por cento), por si só, tende a ser entendido como risco inerente à atividade, não se aplicando, nesta hipótese, as teorias da imprevisão ou onerosidade excessiva.">Sim, de até 30%</option>
    <option value="<b>Inadimplemento</b><br><br>O aumento do inadimplemento, ainda que superior a 30% (trinta por cento) não é reconhecido pelo STJ como hipótese de configuração das teorias da onerosidade excessiva e imprevisão, por se tratar de risco inerente à atividade. Deve-se, todavia, ponderar que se trata de uma crise sem precedentes na história recente, não sendo prudente basear-se tão somente em tal jurisprudência. Para melhor apreciação, o inadimplemento deve ser analisado em conjunto com outros indicadores, como faturamento e custo.">Sim, acima de 30%</option>
    <option value="">Não</option>
    <option value="<b>Inadimplemento</b><br><br>Os Tribunais têm exigido, para aplicação das teorias da imprevisão e da onerosidade excessiva, a efetiva comprovação do impacto direto da pandemia na atividade da parte e a excessiva onerosidade da prestação. É ônus da parte proponente acostar documentação probatória da queda no faturamento. Nesse sentido, vide:<br><br>Impactos da pandemia de Covid-19 que devem ser analisados casuisticamente. Ausência de provas concretas da queda de faturamento ou da atividade empresarial. (TJ-SP - AGT: 20777184420208260000 SP 2077718-44.2020.8.26.0000, Relator: Pereira Calças, Data de Julgamento: 19/05/2020, 1ª Câmara Reservada de Direito Empresarial, Data de Publicação: 19/05/2020) <br><br>Conquanto a agravante-autora afirme que, em decorrência do fechamento da loja física ante a pandemia do novo coronavírus, o seu faturamento tenha sido reduzido drasticamente, em aproximados 85%, não há prova inequívoca de que tal circunstância a impeça de arcar com o aluguel mensal na importância supracitada. Mais ainda quando há vendas on-line.  (TJ-DF 07095631020208070000, Relator: VERA ANDRIGHI, 6ª Turma Cível, Data de Publicação: 08/05/2020).">A empresa não comprovou</option>
    </select>
    <label for="quedafaturamento">Houve aumento no percentual de inadimplemento?</label>
    </div>


    <div class="input-field col s12">
    <i class="material-icons prefix">trending_down</i>
    <select name="custosdespesas" >
    <option value="" disabled selected>Houve queda nos custos e despesas (somados) comparando os meses da pandemia com os mesmos meses em 2019?</option>
    <option value="<b>Custos e despesas</b><br><br>Considerando a sinalização da redução dos custos e das despesas, deve ser verificado o efetivo reflexo da redução do faturamento ou do aumento de inadimplemento na capacidade de pagamento da empresa proponente. ">Sim</option>
    <option value="<b>Custos e despesas</b><br><br>Considerando a sinalização de ausência de queda dos custos e das despesas, aliada à redução do faturamento ou ao aumento de inadimplemento, induz a conclusão de dimunição da capacidade de pagamento. Embora não venha sendo reconhecida pelo STJ como hipótese de configuração das teorias da onerosidade excessiva e imprevisão, por se tratar de risco inerente à atividade, a crise decorrente da pandemia apresenta dimensões inéditas, não sendo prudente basear-se tão somente em tal jurisprudência.">Não</option>
    <option value="<b>Custos e despesas</b><br><br>Os Tribunais têm exigido, para aplicação das teorias da imprevisão e da onerosidade excessiva, a efetiva comprovação do impacto direto da pandemia na atividade da parte e a excessiva onerosidade da prestação. É ônus da parte proponente acostar documentação probatória da queda no faturamento. Nesse sentido, vide:<br><br>Impactos da pandemia de Covid-19 que devem ser analisados casuisticamente. Ausência de provas concretas da queda de faturamento ou da atividade empresarial. (TJ-SP - AGT: 20777184420208260000 SP 2077718-44.2020.8.26.0000, Relator: Pereira Calças, Data de Julgamento: 19/05/2020, 1ª Câmara Reservada de Direito Empresarial, Data de Publicação: 19/05/2020) <br>Conquanto a agravante-autora afirme que, em decorrência do fechamento da loja física ante a pandemia do novo coronavírus, o seu faturamento tenha sido reduzido drasticamente, em aproximados 85%, não há prova inequívoca de que tal circunstância a impeça de arcar com o aluguel mensal na importância supracitada. Mais ainda quando há vendas on-line.  (TJ-DF 07095631020208070000, Relator: VERA ANDRIGHI, 6ª Turma Cível, Data de Publicação: 08/05/2020).">A empresa não comprovou</option>
    </select>
    <label for="custosdespesas">Houve queda nos custos e despesas (somados) comparando os meses da pandemia com os mesmos meses em 2019?</label>
    </div>

    <div class="input-field col s12">
    <i class="material-icons prefix">attach_money</i>
    <select name="recursos" >
    <option value="" disabled selected>A empresa proponente possui recurso em caixa, conta corrente, aplicação financeira e outras disponibilidades?</option>
    <option value="<b>Disponibilidade financeira</b><br><br>Deve-se registrar que as disponibilidades financeiras devem ser consideradas para fins de verificação da capacidade de pagamento.">Sim</option>
    <option value="<b>Disponibilidade financeira</b><br><br>Cabe ressaltar que a empresa proponente não apresenta disponibilidade financeira relevante para reforço da capacidade de pagamento.">Não</option>
    </select>
    <label for="recursos">A empresa proponente possui recurso em caixa, conta corrente, aplicação financeira e outras disponibilidades?</label>
    </div>

     
    <div class="input-field col s12">
    <i class="material-icons prefix">thumbs_up_down</i>
    <select name="partes">
    <option value="" disabled selected>A outra parte foi também impactada pela COVID?</option>
    <option value="<b>Impacto na outra parte</b><br><br>À luz do art. 478 do Código Civil, é pressuposto para aplicação da teoria da onerosidade excessiva a existência de extrema vantagem para a outra parte. Nesse sentido, não se pode deixar de avaliar o impacto da crise e da revisão pleiteada na situação ecônomica-financeira da outra parte. Nesse sentido, vide abaixo:<br><br>“Em relação à onerosidade excessiva alegada, verifica-se que a teoria da imprevisão autoriza a revisão das obrigações contratuais apenas quando há onerosidade excessiva decorrente da superveniência de um evento imprevisível, alterador da base econômica objetiva do contrato. No entanto, no presente caso, a alteração afetou ambos os contratantes, razão pela qual inaplicável a teoria na hipótese (STJ - REsp: 1632842 RS 2013/0145178-2, Relator: Ministro PAULO DE TARSO SANSEVERINO, Data de Publicação: DJ 31/03/2017).”<br><br>“Não cabe redução da prestação ou alteração do modo de pagamento com fundamento na Teoria da Onerosidade Excessiva do Código Civil (art. 480 do CC), porquanto a atual retração da atividade econômica ensejada por distanciamento social não teve o condão de impor extrema vantagem para a parte ré (art. e 478 do CC).“ 2062931-10.2020.8.26.0000 – TJSP.">Sim</option>
    <option value="<b>Impacto na outra parte</b><br><br>À luz do art. 478 do Código Civil, é pressuposto para aplicação da teoria da onerosidade excessiva a existência de extrema vantagem para a outra parte. Nesse sentido, não se pode deixar de avaliar o impacto da crise e da revisão pleiteada na situação ecônomica-financeira da outra parte. Nesse sentido, vide abaixo:<br><br>“Em relação à onerosidade excessiva alegada, verifica-se que a teoria da imprevisão autoriza a revisão das obrigações contratuais apenas quando há onerosidade excessiva decorrente da superveniência de um evento imprevisível, alterador da base econômica objetiva do contrato. No entanto, no presente caso, a alteração afetou ambos os contratantes, razão pela qual inaplicável a teoria na hipótese (STJ - REsp: 1632842 RS 2013/0145178-2, Relator: Ministro PAULO DE TARSO SANSEVERINO, Data de Publicação: DJ 31/03/2017).”<br><br>“Não cabe redução da prestação ou alteração do modo de pagamento com fundamento na Teoria da Onerosidade Excessiva do Código Civil (art. 480 do CC), porquanto a atual retração da atividade econômica ensejada por distanciamento social não teve o condão de impor extrema vantagem para a parte ré (art. e 478 do CC).“ 2062931-10.2020.8.26.0000 – TJSP.">Não</option>
    </select>
    <label for="partes">A outra parte foi também impactada pela COVID?</label>
    </div>

    </fieldset>
       
       <br>
       
       <!-- CASO FORTUITO -->
    <fieldset class="hide" id="pergunta-2"> 

    <div class="input-field col s8">
    <i class="material-icons prefix">assignment_late</i>
    <select name="comprovacaoimpossibilidade">
    <option value="" disabled selected>Há comprovação da impossibilidade?</option>
    <option value="<b>Comprovação da impossibilidade</b><br<br>Em razão da comprovação da impossibilidade de cumprimento por ato proibitivo do poder público ou fechamento de fonteira, os Tribunais têm decidido pela aplicabilidade das teorias de caso fortuito ou força maior.">Sim</option>
    <option value="<b>Comprovação da impossibilidade</b><br><br>Embora os Tribunais entendam pela aplicabilidade das teorias de caso fortuito ou força maior quando a impossibilidade do cumprimento resulta de ato proibitivo do poder público ou fechamento de fronteira, faz-se para tanto imprescindível a sua comprovação. No caso em análise a parte não se desincumbiu de tal ônus, não merecendo acolhida o seu pleito.">Não</option>
    </select>
    <label for="comprovacaoimpossibilidade">Há comprovação da impossibilidade?</label>
    </div>
    
    <div class="input-field col s12">
    <i class="material-icons prefix">accessibility</i>
    <select name="valorproponente">
    <option value="" disabled selected>O proponente já recebeu algum valor/bem, aplicação como contraprestação a sua obrigação ?</option>
    <option value="Uma vez extinta a obrigação “o devedor deverá restituir ao credor o que porventura recebeu anteriormente, e, havendo recusa da parte deste, poderá recobrar o indevido'¹, sob pena de enriquecimento ilícito. DINIZ, Maria Helena. Curso de direito civil brasileiro, 2- volume: teoria geral obrigações — 22. ed. rev. e atual— São Paulo: Saraiva, 2007'. ">Sim</option>
    <option value="">Não</option>   
    </select>
    <label for="valorproponente">O proponente já recebeu algum valor/bem, aplicação como contraprestação a sua obrigação ?</label>
    </div>

    </fieldset>
    <br>
        <!-- FALECIMENTO -->
    <fieldset class="hide" id="pergunta-3"> 

    <div class="input-field col s5">
    <i class="material-icons prefix">content_paste</i>
    <select name="prestacao">
    <option value="" disabled selected>A prestação era personalissima?</option>
    <option value="Tratando-se de obrigação personalíssima, o falecimento da parte ocasiona a  extinção da obrigação contratual com efeito ex-nunc. ">Sim</option>
    <option value="Não se tratando de obrigação personalíssima, o falecimento não gera a extinção do contrato, pois ele poderá ser cumprido por terceiro. ">Não</option>
    </select>
    <label for="prestacao">A prestação era personalissima?</label>
    </div>

    </fieldset>
    <br>
    <center>
<input type="submit" value="gerar relatório" class="btn blue">
<input type="reset" value="limpar" class="btn red"></center>

    </form>
    </div>