<?php
include 'conecta.php';
$sql = "SELECT*FROM teste";
$qr = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lista de Usuarios</title>
        <style>
         
            body {
                font-family:Arial, Helvetica, sans-serif;
            }

            table { 
                width:700px;
                margin:0 auto;
                border-spacing:0;
                border-right:1px solid #ccc;
                border-bottom:1px solid #ccc;
            }

            caption {
                font-size:130%;
                font-weight:bold;
                padding:5px 0;
                background-color:beige;
                border:1px solid #ccc;
                border-bottom:none;
            }

            tr, td, th {
                border:thin solid #ccc;
                border-bottom:none;
                border-right:none;
                padding:5px;
            }

            td { 
                text-align:center;
            }

            th {
                text-align:left;
            }

            thead th {
                text-align:center;
                background-color:#E0E0E0;
            }

            thead tr th:first-child {
                text-align:left;
            }

            tfoot td {
                font-size:.9em;
                color:#666;
            }

            tbody tr:nth-child(even) {
                background-color: beige;
                
            }
            a{
                text-decoration: none;
                color: red;
                display: block}
            
            #aq:hover{ background-color:crimson;}
            
            a:hover{ background-color:crimso; color: white;}
            
            #mostrar,#esconder{
                    width:100px;
                    color:#FFF;
                    background:linear-gradient(top, #F33, #933 );
                    background:-webkit-linear-gradient(top, #F33, #933 );
                    background:-moz-linear-gradient(top, #F33, #933 );
                    border:1px solid #333;
                    cursor:pointer;
            }
            
           
        
        </style>
        <script src="jquery-3.2.1.min.js"></script>
            <script>
                $( function(e) {			
                    $('#mostrar').click( mostrarObjeto )
                    $('#esconder').click( esconderObjeto )
                })

                function esconderObjeto() {
                    $('#janela').hide(3000);			
                }

                function mostrarObjeto() {
                    $('#janela').show(3000);
                }

        
            </script>        

    </head>
    <body>
        
        <input type="button" id="mostrar" 	value="Mostrar" />
        <input type="button" id="esconder" 	value="Esconder" />
        <div id="janela">
            <table>
                <caption id=aq><a  href="formulario.php">Novo Usuairo</a></caption>
                <caption >Todos os Usuarios</caption>
                    <tr>
                        <th>Codigo</th>
                        <th>Nome</th>
                        <th>Idade</th>
                        <th>E-mail</th>
                        <th>CPF</th>
                        <th>Editar</th>
                        <th>Deletar</th>
                    </tr>
                    <?php
                        while($res = mysqli_fetch_array($qr)){
                    ?>
                    <tr>
                        <td><?php echo $res['id'];?></td>
                        <td><?php echo $res['nome'];?></td>
                        <td><?php echo $res['idade'];?></td>
                        <td><?php echo $res['email'];?></td>
                        <td><?php echo $res['cpf'];?></td>
                      	<td><?php echo "<a href=editar.php?id=".$res['id'].">"?><img src="edit-159218_960_720.png" width="30px" height="30px"></td>
                        <td><?php echo "<a href=deletar.php?id=".$res['id'].">"?><img src="delete-icon-1.png" width="30px" height="30px"></td>
                </tr>
                  <?php } ?> 
            </table>
        </div>
 	</body>

</html>