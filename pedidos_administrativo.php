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
        $array = array(
          '{"nome":"Joao", "idade":15,"breve_descricao" : "Ele precisa de um novo lar", "sobre" : "cachorro muito docil e muito simpatico, adora brincar", "sexo": "M", "animal": "cachorro", "telefone" : "27988109108", "imagem" : "https://i.insider.com/5484d9d1eab8ea3017b17e29?width=600&format=jpeg&auto=webp"}',
          '{"nome":"Joao", "idade":15, "breve_descricao" : "Ele precisa de um novo lar","sobre" : "cachorro muito docil e muito simpatico, adora brincar", "sexo": "M", "animal": "cachorro", "telefone" : "27988109108", "imagem" : "data:image/jpeg;base64,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"}',
          '{"nome":"Joao", "idade":15,"breve_descricao" : "Ele precisa de um novo lar", "sobre" : "cachorro muito docil e muito simpatico, adora brincar", "sexo": "M", "animal": "cachorro", "telefone" : "27988109108", "imagem" : "https://www.nationalgeographic.com/content/dam/animals/thumbs/rights-exempt/mammals/d/domestic-dog_thumb.jpg"}'
          );
        foreach ($array as $value) {
          $arr = json_decode($value, true);
          $nome = $arr["nome"];
          $idade = $arr["idade"];;
          $sexo = $arr["sexo"];
          $animal = $arr["animal"];
          $telefone = $arr["telefone"];
          $imagem = $arr["imagem"];
          $sobre = $arr["sobre"];
          $breve_descricao = $arr["breve_descricao"];
          print(
              
         "   
         <div class='col s12 m4 l3'>
            <div class='card hoverable' style='height: 450px;'>
              <div class='card-image' >
              <img class='activator' src=$imagem style='height: 250px;' />
                <button onclick='function_deletar($value)'   class='btn-floating halfway-fab' style='background-color: #2C2C8C;'><i class='material-icons'>delete</i></button>
                <button onclick='function_aceitar($value)'  data-target='modal_edit'  class='btn-floating modal-trigger halfway-fab left' style='background-color: #2C2C8C;' ><i class='material-icons'>check</i></button>
              </div>
              <div class='card-content center'>
              <span class='card-title center'> $nome </span>
                <p>$breve_descricao</p>
                <button data-target='modal_card' class='btn modal-trigger' style='background-color: #2C2C8C;'  onclick='myFunction($value)'>
                Ver mais sobre </button>
              </div>
            </div>
          </div>"
        );
        }
        ?>
      </div>
    </div>
  </div>    
    </div>
</div>

 

  <div id='modal_card' class='modal'>
    <div class='modal-content' style=" font-size: larger;">
      <h4 id="modal_nome_item" class="center"> </h4>
      <div class='col s12 m7'>
        <div class='row'>
          <div class='col s6' id="modal_imagem_item"></div>
          <div class='col s6 row center'><span style='font-weight: bolder; ' class="col s6 ">breve_descricao</span>
            <div class="col s6" id="modal_breve_descricao_item"></div>
          </div>
          <div class='col s6 row center'><span style='font-weight: bolder;' class="col s6 ">Idade</span>
            <div class="col s6" id="modal_idade_item"></div>
          </div>
          <div class='col s6 row center'><span style='font-weight: bolder;' class="col s6">sexo</span>
            <div class="col s6" id="modal_sexo_item"></div>
          </div>
          <div class='col s6 row center'><span style='font-weight: bolder;' class="col s6">animal</span>
            <div class="col s6" id="modal_animal_item"></div>
          </div>
          <div class='col s6 row center'><span style='font-weight: bolder;' class="col s6">telefone</span>
            <div class="col s6" id="modal_telefone_item"></div>
          </div>
          <div class='col s6 row center'><span style='font-weight: bolder;' class="col s6">sobre</span>
            <div class="col s6" id="modal_sobre_item"></div>
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


   function function_aceitar(arr){
       console.log(arr)
    M.toast({html: 'Item aceito'})
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