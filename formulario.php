<html>
    <head>
        <title>Novo Usuario</title>
        <style>
                html {
                    background-color:#F4F4F4;
                    font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
                    font-size:12px;
                }

                body {
                    width:560px;
                    height: 400px;
                    border:1px solid #ddd;
                    margin:10px auto;
                    background-color:#FFF;
                    padding:10px 30px;
                    border-radius:5px;
                }

                h2 {
                    font-family:Georgia, "Times New Roman", Times, serif;
                    font-size:30px;
                    font-style:italic;
                    letter-spacing:-0.05em;
                    color:#C63;
                    margin:2px 0 15px;
                    text-shadow:1px 1px 2px #666;
                }

                input {
                    display:block;
                    margin-bottom:20px;
                    border:1px solid #999;
                    padding:8px;
                    border-radius:3px;
                }

                input:focus {
                    border:1px solid #ccc;
                    outline:none;
                }

                input[type=submit] {
                    width:100px;
                    color:#FFF;
                    background:linear-gradient(top, #F33, #933 );
                    background:-webkit-linear-gradient(top, #F33, #933 );
                    background:-moz-linear-gradient(top, #F33, #933 );
                    border:1px solid #333;
                    cursor:pointer;
                }
        
        </style>
    </head>
    <body>
        <h2>Novo Usuario</h2>
        <form action="form.php" method="post">
            <label >Nome completo</label>
            <input type="text" name="nome" required autofocus >
                        
             
            <label>Idade</label>
            <input type="text"  name="idade" >
			
			<label >E-mail</label>
            <input type="email"  name="email" >

            
            <label>CPF</label>
            <input type="text"  name="cpf">
            
            <input type="submit" value="Cadastrar">  
        </form>
    
    </body>
</html>