<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body >
        
<div class="container" style="margin-top: 300px;margin-left:600px; margin-right:100px;border: 2px solid  black; text-align:center;width: 500px;background-color: darksalmon " >


<form name="login" style="align-content:center";>
       
            <tr>
                <th scope="row"><h2>Usuario</h2></th>
                <td>
                    <span class="cnt">
                        <input name="usuario" type="text" class="Input" value="" size="20" />
                    </span>
                </td>
            </tr>
            


			
			<tr>
                <th scope="row"><h2>Email</h2></th>
                <td>
                    <span class="cnt">
                        <input name="password" type="text" class="Input" value="" size="20" />
                    </span>
                </td>
            </tr>
        
               <br><br>
                    <span class="cnt">
                        <input value="Entrar" target="_parent" onclick="Login()" type="button" class="btn btn-danger" />
                    </span>
                </td>
            </tr>







            <tr>
                <th scope="row"><input type="reset" name="Borrar" id="Borrar" value="Reset" class="btn btn-danger" /></th>
            </tr>
        </table>
    </form>




	




  </div>
</div>















</div>

<script>
  function Login(){
    var usuario=document.login.usuario.value;
    var password=document.login.password.value;

    if(usuario=="carlos"&& password=="carloslopez@clformacion.es"){
        window.location="usuario2.php";
    }





  }





</script>









        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
