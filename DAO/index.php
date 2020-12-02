<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <title>Clínica Médica - Agendamento</title>
    </head>
    <body>

    <form method="post" name="formCadastro" action="cadastrarDog.php" enctype = "multipart/form-data">
            <H1>Clínica Médica - Agendamento</H1>
            <table>
                <tr>
                    <th> Nome </th>
                    <td><input type="text" name="nome" size="40"></td>
                </tr>
                <tr>
                    <th> dono </th>
                    <td><input type="text" name="dono" size="40"></td>
                </tr>
                <tr>
                    <th> breve descricao </th>
                    <td><input type="text" name="breve_descricao" size="40"></td>
                </tr>
                <tr>
                    <th> sobre </th>
                    <td><input type="text" name="sobre" ></td>
                </tr>      
                <tr>
                    <th> idade </th>
                    <td><INPUT type = "number" name = "idade" ></td>
                </tr>
                <tr>
                    <th> sexo </th>
                    <td><input type="text" name="sexo" ></td>
                </tr> 
                <tr>
                    <th> imagem </th>
                    <td><input type="file" name="imagem" ></td>
                </tr>
                <tr>
                    <th> telefone </th>
                    <td><input type="number" name="telefone" ></td>
                </tr> 
                <tr>
                    <th> animal </th>
                    <td><input type="text" name="animal" ></td>
                </tr> 
                <tr>
                    <td><input type="submit" name="btnEnviar" value="Enviar"></td>
                    <td><input type="reset" name="btnLimpar" value="Limpar"></td>
                </tr>
            </table>
        </form>
        <form method="post" name="cadastro" action="cadastro.php" enctype = "multipart/form-data">
            <H1>Clínica Médica - Agendamento</H1>
            <table>
                <tr>
                    <th> Nome </th>
                    <td><input type="text" name="nomeCadastro" size="40"></td>
                </tr>
                <tr>
                    <th> Email </th>
                    <td><input type="email" name="emailCadastro" size="40"></td>
                </tr>
                <tr>
                    <th> Senha </th>
                    <td><input type="password" name="passCadastro" size="40"></td>
                </tr>
                <tr>
                    <th> Telefone </th>
                    <td><input type="number" name="telefoneCadastro" ></td>
                </tr>
                <tr>
                    <th> imagem </th>
                    <td><input type="file" name="imagemCadastro" ></td>
                </tr>
                <tr>
                    <td><input type="submit" name="btnEnviar" value="Enviar"></td>
                    <td><input type="reset" name="btnLimpar" value="Limpar"></td>
                </tr>
            </table>
        </form>
        <?php
            if (isset($_GET["msg"])) { 
                $mensagem = $_GET["msg"];
                echo "<FONT color=red>$mensagem</FONT>";
            }
        ?>
    </body>
</html>