<?php
include('./Login/conexao.php');

$nome = $_POST['nome'];
$cidade = $_POST['cidade'];
$empresa = $_POST['empresa'];
$instrutor = $_POST['instrutor'];
$periodo = $_POST['periodo'];
$treinamento = $_POST['treinamento'];
$treinamento1 = $_POST['inlineRadioOptions'];
$treinamento2 = $_POST['inlineRadio1Options'];
$treinamento3 = $_POST['inlineRadio2Options'];
$treinamento4 = $_POST['inlineRadio3Options'];
$treinamento5 = $_POST['inlineRadio4Options'];
$instrutor1 = $_POST['inlineRadio5Options'];
$instrutor2 = $_POST['inlineRadio6Options'];
$instrutor3 = $_POST['inlineRadio7Options'];
$instrutor4 = $_POST['inlineRadio8Options'];
$conteudo1 = $_POST['inlineRadio9Options'];
$conteudo2 = $_POST['inlineRadio10Options'];
$conteudo3 = $_POST['inlineRadio11Options'];
$instalacao1 = $_POST['inlineRadio12Options'];
$instalacao2 = $_POST['inlineRadio13Options'];
$instalacao3 = $_POST['inlineRadio14Options'];
$geral = $_POST['inlineRadio15Options'];
$sugestoes = $_POST['sugestoes'];

$sql = "INSERT INTO formulario1 (nome, cidade, empresa, instrutor, periodo, treinamento, tr1, tr2, tr3, tr4, tr5, inst1, inst2, inst3, inst4, cont1, cont2, cont3, insta1, insta2, insta3, gera, sugestoes, data_treina) VALUES ('$nome', '$cidade', '$empresa', '$instrutor', '$periodo', '$treinamento', '$treinamento1', '$treinamento2', '$treinamento3', '$treinamento4', '$treinamento5', '$instrutor1', '$instrutor2', '$instrutor3', '$instrutor4', '$conteudo1', '$conteudo2', '$conteudo3', '$instalacao1', '$instalacao2', '$instalacao3', '$geral', '$sugestoes', NOW())";

if(mysqli_query($conexao, $sql)){
echo "<script>
window.location.href='./index.php?fnc=$fnc&ans=$linha';
</script>";
}
else{
    echo "erro".mysqli_connect_error($conexao);
    }

    mysqli_close($conexao);

?>