<?php
    if(($_COOKIE["PHPSESSID"] == null)){
      header("Location:./index.php");
  }
  
?>

<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>FindYourPet</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>
<style>

</style>

<body>
    <nav>
        <div class="nav-wrapper" style="background-color: #2C2C8C;">
            <a href="#" class="brand-logo center  white-text">FindYourPet</a>   
        </div>
    </nav>

    <ul id="slide-out" class="sidenav sidenav-fixed" style="background-color: #2C2C8C;">
    <li><div class="user-view">
      <a href="#user"><img class="circle" src="https://www.specialdog.com.br/assets/imgs/cao.png"></a>
      <a href="#name"><span class="white-text name">Administrativo</span></a>
      <a href="#email"><span class="white-text email">email_administrativo@gmail.com</span></a>
    </div></li>
    <li><a href="./home_administrativo.php" class="white-text" ><i class="material-icons white-text">assignment_turned_in</i>Cartões de anuncio</a></li>
    <li><a href="./pedidos_administrativo.php" class="white-text" ><i class="material-icons white-text">assignment</i>Pedidos para anunciar </a></li>
    <li><a href="./usuarios_administrativo.php" class="white-text" ><i class="material-icons white-text">account_circle</i>Usuários administrativos </a></li>
    <li><div class="divider"></div></li>
    <li><a href="./index.php" class="white-text" ><i class="material-icons white-text">power_settings_new</i>Sair </a></li>
  </ul>
  <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>


<div class="row" > 
    <div class="col s3" > </div>
    <div class="col s8" > 
    <div class="section">
      <div class="row">
        <?php
        require_once './DAO/listarDogUsuario.php';
        $array = lista();
        foreach ($array as $value) {
          $nome = $value["nome"];
          $idade = $value["idade"];;
          $sexo = $value["sexo"];
          $animal = $value["animal"];
          $telefone = $value["telefone"];
          $imagem = $value["imagem"];
          $sobre = $value["sobre"];
          $breve_descricao = $value["breve_descricao"];
          $idPet = $value["idPet"];
          $dono = $value["dono"];
          echo
              
         "   
         <div class='col s12 m4 l3'>
         <div class='card hoverable' style='height: 450px;'>
         <div class='card-image' >
         <img class='activator' src='data:image/jpeg;base64,".base64_encode( $imagem )."' style='height: 250px;' />
              <form method='post' name='formDeletar' action='./DAO/excluirDog.php' enctype = 'multipart/form-data'>
                <input type='hidden' name='idPetDeletar' value=$idPet/>
                <button onclick='javascript:formDeletar.submit()'   class='btn-floating halfway-fab' style='background-color: #2C2C8C;'><i class='material-icons'>delete</i></button>
              </form>
                <button onclick='function_editar()'  data-target='modal_edit $idPet'  class='btn-floating modal-trigger halfway-fab left' style='background-color: #2C2C8C;' ><i class='material-icons'>edit</i></button>
              </div>
              <div class='card-content center'>
              <span class='card-title center'> $nome </span>
                <p>$breve_descricao</p>
                <button data-target='modal_card $idPet' class='btn modal-trigger' style='background-color: #2C2C8C;'  onclick='myFunction()'>
                Ver mais sobre </button>
              </div>
            </div>
          </div>
          



          <div id='modal_card $idPet' class='modal'>
    <div class='modal-content' style=' font-size: larger;'>
      <h4 id='modal_nome_item' class='center'> </h4>
      <div class='col s12 m7'>
        <div class='row'>
          <div class='col s6' id='modal_imagem_item'></div>
          <div class='col s6 row center'><span style='font-weight: bolder; ' class='col s6 '>breve_descricao</span>
            <div class='col s6' id='modal_breve_descricao_item'>$breve_descricao</div>
          </div>
          <div class='col s6 row center'><span style='font-weight: bolder;' class='col s6 '>Idade</span>
            <div class='col s6' id='modal_idade_item'>$idade</div>
          </div>
          <div class='col s6 row center'><span style='font-weight: bolder;' class='col s6'>sexo</span>
            <div class='col s6' id='modal_sexo_item'>$sexo</div>
          </div>
          <div class='col s6 row center'><span style='font-weight: bolder;' class='col s6'>animal</span>
            <div class='col s6' id='modal_animal_item'>$animal</div>
          </div>
          <div class='col s6 row center'><span style='font-weight: bolder;' class='col s6'>telefone</span>
            <div class='col s6' id='modal_telefone_item'>$telefone</div>
          </div>
          <div class='col s6 row center'><span style='font-weight: bolder;' class='col s6'>sobre</span>
            <div class='col s6' id='modal_sobre_item'>$sobre</div>
          </div>
        </div>
      </div>

    </div>
  </div>






  <div id='modal_edit $idPet' class='modal'>
    <div class='modal-content'>
    <form method='post' name='formEdicao$idPet' id='formEdicao' action='./DAO/editarDog.php' enctype = 'multipart/form-data'>
      <input type='hidden' name='idPet' value=$idPet/>
      <h4 class='center'>Editar</h4>
      <div class='row'>

        <div class='col s12 m6'>
          <h5>Adicione uma imagem para que possamos conhece-lo</h5>
            <div>
              <input id='imagem' type='file' name='imagem'>
            </div>
            <div id='img-container'>
              <img id='preview' src='data:image/jpeg;base64,".base64_encode( $imagem )."' class='col s12'>
            </div>
        </div>
        <div class='col s12 m6'>
          <div class='row'>
            <div class='input-field col s12'>
              <i class='material-icons prefix'>mode_edit</i>
              <input value=$nome name='nome'id='nome' type='text' class='validate'>
              <label for='nome'>Nome do animal</label>
            </div>
            <div class='input-field col s12'>
              <i class='material-icons prefix'>mode_edit</i>
              <input value=$animal name='animal'id='animal' type='text' class='validate'>
              <label for='animal'>Qual tipo de animal ?</label>
            </div>
            <div class='input-field col s12'>
              <i class='material-icons prefix'>mode_edit</i>
              <input name='sobre'id='sobre' value=$sobre type='text' class='validate'>
              <label for='sobre'>Sobre o animal</label>
            </div>
            <div class='input-field col s12'>
              <i class='material-icons prefix'>mode_edit</i>
              <input value=$idade name='idade'id='idade' type='number' class='validate'>
              <label for='idade'>idade</label>
            </div>
            <div class='input-field col s12'>
              <i class='material-icons prefix'>mode_edit</i>
              <input name='telefone'id='telefone' value=$telefone type='number' class='validate'>
              <label for='telefone'>Contato</label>
            </div>
            <div class='input-field col s12'>
              <i class='material-icons prefix'>mode_edit</i>
              <input name='dono'id='dono' value=$dono type='text' class='validate'>
              <label for='dono'>Nome do dono</label>
            </div>
            <div class='input-field col s12'>
              <i class='material-icons prefix'>mode_edit</i>
              <input name='sexo'id='sexo' value='$sexo' type='text' class='validate'>
              <label for='sexo'>Sexo do animal (carácter único)</label>
            </div>
            <div class='input-field col s12'>
              <i class='material-icons prefix'>mode_edit</i>
              <input name='breve_descricao'id='breve_descricao' value=$breve_descricao type='text' class='validate'>
              <label for='breve_descricao'>Descrição breve, algo mais curto</label>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class='modal-footer'>
      <a href='#!' class='modal-close left waves-effect waves-green btn-flat'>Descartar</a>
      <button onclick='editar$idPet()' class=' waves-effect waves-green btn-flat'>Salvar</button>
    </div>
    </form>
  </div>

            <script>
              function editar$idPet() {
                  document.getElementById('formEdicao$idPet').submit;
              }
            </script>
          ";
        }
        ?>
      </div>
    </div>
  </div>    
    </div>
</div>

 

  

  


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems, options);
        });
    </script>
      <script>
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.modal');
      var instances = M.Modal.init(elems, {});
    });

var item_aberto = null

    function salvar_edicao(){
        console.log(item_aberto)
        fechar_modal('modal_edit')
        M.toast({html: 'Edição salva'})
    }

    function fechar_modal(type){
      document.querySelectorAll("input").forEach(i => i.value = '')
      document.querySelectorAll("select").forEach(i => i.value = '')
      document.querySelectorAll("textarea").forEach(i => i.value = '')
      const elem = document.getElementById(type);
      const instance = M.Modal.init(elem, {});
      return instance ? instance.close() : 0;
    }


    function myFunction(arr) {
      var image = `<img class='activator center' src=${arr.imagem} style='max-height: "100%"; max-width: 400px; ' />`
      document.getElementById("modal_nome_item").innerHTML = arr.nome;
      document.getElementById("modal_imagem_item").innerHTML = image;
      document.getElementById("modal_idade_item").innerHTML = arr.idade;
      document.getElementById("modal_sexo_item").innerHTML = arr.sexo;
      document.getElementById("modal_animal_item").innerHTML = arr.animal;
      document.getElementById("modal_telefone_item").innerHTML = arr.telefone;
      document.getElementById("modal_sobre_item").innerHTML = arr.sobre;
      document.getElementById("modal_breve_descricao_item").innerHTML = arr.breve_descricao;
    }
    function function_deletar(arr){
        M.toast({html: 'Item deletado'})
    }
    
    function function_editar(arr) {
        item_aberto = arr;
        document.getElementById("nome_animal").value = arr.nome;
        document.getElementById("tipo_animal").value = arr.animal;
        document.getElementById("sobre").value = arr.sobre;
        document.getElementById("idade").value = arr.idade;
        document.getElementById("contato").value = arr.telefone;
        document.getElementById("nome_dono").value = arr.nome_animal ? arr.nome_animal : "Nome não Cadastrado";
        document.getElementById("preview").src = arr.imagem;
        document.getElementById("modal_breve_descricao_item").value = arr.breve_descricao;
    }
  </script>
<script> 
  function abri_modal(type) {
      document.querySelectorAll("input").forEach(i => i.value = '')
      document.querySelectorAll("select").forEach(i => i.value = '')
      document.querySelectorAll("textarea").forEach(i => i.value = '')
      const elem = document.getElementById(type);
      const instance = M.Modal.init(elem, {});
      return instance ? instance.open() : 0;
    }
    function readImage() {
      if (this.files && this.files[0]) {
        var file = new FileReader();
        file.onload = function(e) {
          document.getElementById("preview").src = e.target.result;
        };
        file.readAsDataURL(this.files[0]);
      }
    }
    document.getElementById("img-input").addEventListener("change", readImage, false);
</script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
</body>

</html>