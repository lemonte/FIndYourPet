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
        <li>
            <div class="user-view">
                <a href="#user"><img class="circle" src="https://www.specialdog.com.br/assets/imgs/cao.png"></a>
                <a href="#name"><span class="white-text name">Administrativo</span></a>
                <a href="#email"><span class="white-text email">email_administrativo@gmail.com</span></a>
            </div>
        </li>
        <li><a href="./home_administrativo.php" class="white-text"><i class="material-icons white-text">assignment_turned_in</i>Cartões de anuncio</a></li>
        <li><a href="./pedidos_administrativo.php" class="white-text"><i class="material-icons white-text">assignment</i>Pedidos para anunciar </a></li>
        <li><a href="./usuarios_administrativo.php" class="white-text"><i class="material-icons white-text">account_circle</i>Usuários administrativos </a></li>
        <li>
            <div class="divider"></div>
        </li>
        <li><a href="./index.php" class="white-text"><i class="material-icons white-text">power_settings_new</i>Sair </a></li>
    </ul>
    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    

    <div class="row">
        <div class="col s3"> </div>
        <div class="col s8">
            <div class="section">
            <?php
                if (isset($_GET["msg"])) { 
                    $mensagem = $_GET["msg"];
                    echo "<FONT color=red>$mensagem</FONT>";
                }
            ?>
                <div class="row">
                    <?php
                    

                    require './DAO/listarAdm.php';
                    $array = lista();
                    foreach ($array as $value) {
                        $idConta = $value["idConta"];
                        $nome = $value["nome"];
                        $email = $value["email"];
                        $telefone = $value["telefone"];
                        $imagem = $value["imagem"];
                        echo"   
         <div class='col s12 m4 l3'>
         <div class='card hoverable' style='height: 450px;'>
         <div class='card-image' >
            <img class='activator' src='data:image/jpeg;base64,".base64_encode( $imagem )."' style='height: 250px;' />
                <form method='post' name='formDeletar' action='./DAO/excluirAdm.php' enctype = 'multipart/form-data'>
                    <input type='hidden' name='idContaDeletar' value=$idConta/>
                    <button onclick='javascript:formDeletar.submit()'   class='btn-floating halfway-fab' style='background-color: #2C2C8C;'><i class='material-icons'>delete</i></button>
                </form>
                <button onclick='function_editar()'  data-target='modal_edit $idConta'  class='btn-floating modal-trigger halfway-fab left' style='background-color: #2C2C8C;' ><i class='material-icons'>edit</i></button>
              </div>
              <div class='card-content center'>
              <span class='card-title center'> $nome </span>
                <p>$telefone</p></br>
                <p>$email</p>
                <button data-target='modal_card $idConta' class='btn modal-trigger' style='background-color: #2C2C8C;'  onclick='myFunction()'>
                Ver mais sobre </button>
              </div>
            </div>
          </div>
          
          
          
          <div id='modal_card $idConta' class='modal'>
        <div class='modal-content' style=' font-size: larger;'>
            <h4 id='modal_nome_item' class='center'> </h4>
            <div class='col s12 m7'>
                <div class='row'>
                    <div class='col s12 row center'><span style='font-weight: bolder; ' class='col s6 '>email</span>
                        <div class='col s6' id='modal_email_item'>$email</div>
                    </div>
                    <div class='col s12 row center'><span style='font-weight: bolder;' class='col s6'>telefone</span>
                        <div class='col s6' id='modal_telefone_item'>$telefone</div>
                    </div>
                </div>
            </div>

        </div>
    </div>





    <div id='modal_edit $idConta' class='modal'>
    
    
        <div class='modal-content'>
        <form method='post' name='formEdicao$idConta' id='formEdicao' action='./DAO/editarAdm.php' enctype = 'multipart/form-data'>
            <h4 class='center'>Usuários administrativos</h4>
            <div class='row'>
                <div class='input-field col s12'>
                <input type='hidden' id='idConta'name='idConta' value='$idConta'/>
                    <i class='material-icons prefix'>mode_edit</i>
                    <input value='$nome' id='nome' name='nome' type='text' class='validate'/>
                    <label for='nome'>Nome</label>
                </div>
                <div class='input-field col s12'>
                    <i class='material-icons prefix'>mode_edit</i>
                    <input value='$email' id='email' name='email' type='email' class='validate'/>
                    <label for='email'>Email</label>
                </div>
                <div class='input-field col s12'>
                    <i class='material-icons prefix'>mode_edit</i>
                    <input id='senha' name='senha' placeholder='*******' type='password' class='validate'/>
                    <label for='senha'>Senha</label>
                </div>
                <div class='input-field col s12'>
                    <i class='material-icons prefix'>mode_edit</i>
                    <input id='telefone' name='telefone' value='$telefone' type='text' class='validate'/>
                    <label for='telefone'>Contato</label>
                </div>
            </div>
        </div>
        <div class='modal-footer'>
            <a href='#!' class='modal-close left waves-effect waves-green btn-flat'>Descartar</a>
            <button onclick='editar$idConta()' class=' waves-effect waves-green btn-flat'>Enviar</button>
            </form>
            </div>
            
            </div>
            
            <script>
            function editar$idConta() {
                document.getElementById('formEdicao$idConta').submit;
            }
            </script>
            
            
            
            
            
            ";
            //<input type='submit' value='Salvar'/>
                    }
                    ?>
                    <div class='col s12 m4 l3'>
                        <div class='card hoverable' style='height: 450px;'>
                            <div class="card-image">
                                <img style='height: 250px;' src="data:image/png;base64,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">

                            </div>
                            <div class="card-content center">
                                <span class="card-title center">Novo usuario</span>
                                <p class="white-text">.</p>
                                <p class="white-text">. </p>
                                <button class="btn" onclick="abrir_modal('modal_cadastro')" style='background-color: #2C2C8C;'>
                                    Cadastrar novo usuario </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>







    <div id="modal_cadastro" class="modal">
        <div class="modal-content">
        
            <h4 class="center">Usuários administrativos</h4>
            <div class="row">
                
                    <div class="row">
                        <form method="post" name="formCadastro" action="./DAO/cadastro.php" enctype = "multipart/form-data">
                            <div class="input-field col s12">
                                Foto
                                <input id="imagem" type="file" name="imagemCadastro">
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">mode_edit</i>
                                <input placeholder="Fulano" name="nomeCadastro"id="nome-cadastro" type="text" class="validate">
                                <label for="nome_animal">Nome</label>
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">mode_edit</i>
                                <input placeholder="teste@teste.teste" name="emailCadastro"id="email-cadastro" type="email" class="validate">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">mode_edit</i>
                                <input name="passCadastro"id="senha-cadastro" placeholder="****" type="password" class="validate">
                                <label for="senha">Senha</label>
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">mode_edit</i>
                                <input name="telefoneCadastro"id="contato-cadastro" placeholder="(27)99999999" type="text" class="validate">
                                <label for="contato">Contato</label>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close left waves-effect waves-green btn-flat">Descartar</a>
            <a href='javascript:formCadastro.submit()' class="modal-close waves-effect waves-green btn-flat">Enviar</a>
        </div>
    </div>





    




    






    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems, options);
        });
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.modal');
            var instances = M.Modal.init(elems, {});
        });

        var item_aberto = null

        function salvar_edicao() {
            const nome = document.getElementById("nome").value;
            const email = document.getElementById("email").value;
            const senha = document.getElementById("senha").value;
            const contato = document.getElementById("contato").value;
            console.log(
                '  nome =>' + nome +
                "  email = > " + email +
                "  senha => " + senha +
                "  contato =>" + contato +
                "  status => " + status
            )
            fechar_modal('modal_edit')
            M.toast({
                html: 'Edição salva'
            })
        }

        function salvar_cadastro() {
            const nome = document.getElementById("nome-cadastro").value
            const email = document.getElementById("email-cadastro").value
            const senha = document.getElementById("senha-cadastro").value
            const contato = document.getElementById("contato-cadastro").value
            const status = document.getElementById("status-cadastro").checked
            console.log(
                'nome =>' + nome +
                "email = > " + email +
                "senha => " + senha +
                "contato =>" + contato +
                "status => " + `${status}`
            )
        }


        function fechar_modal(type) {
            document.querySelectorAll("input").forEach(i => i.value = '')
            document.querySelectorAll("select").forEach(i => i.value = '')
            document.querySelectorAll("textarea").forEach(i => i.value = '')
            const elem = document.getElementById(type);
            const instance = M.Modal.init(elem, {});
            return instance ? instance.close() : 0;
        }





        function myFunction(arr) {
            document.getElementById("modal_nome_item").innerHTML = arr.nome;
            document.getElementById("modal_email_item").innerHTML = arr.email;
            document.getElementById("modal_senha_item").innerHTML = arr.senha;
            if (arr.status) {
                document.getElementById("modal_status_item").innerHTML = "Ativa";
            }
            if (!arr.status) {
                document.getElementById("modal_status_item").innerHTML = "Desativa";
            }
            document.getElementById("modal_telefone_item").innerHTML = arr.telefone;
        }




        function function_deletar(arr) {
            M.toast({
                html: 'Item deletado'
            })
        }






        function function_editar(arr) {
            item_aberto = arr;
            if (arr.status) {
                document.getElementById('status').checked = true
            }
            if (!arr.status) {
                document.getElementById('status').checked = false
            }
            document.getElementById("nome").value = arr.nome;
            document.getElementById("email").value = arr.email;
            document.getElementById("senha").value = arr.senha;
            document.getElementById("contato").value = arr.telefone;
            document.getElementById("preview").src = arr.imagem;
        }




        function abrir_modal(type) {
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