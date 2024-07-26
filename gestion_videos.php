<!doctype html>
<html lang="en">
    <head>
        <title>gestion</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

      
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <?php
      include("config2.php");

      if(isset($_POST['video_upload'])){
        $maxsize = 5242880;
        $nombre_file =$_FILES['file_video']['name'];

        $image_info = explode(".", $nombre_file);
        $nombre=format_uri($image_info[0]);
        $image_type =end($image_info);
        $file_video=$nombre."-".rand(10,999).".".$image_type;
         
             $target_dir="videos/";
             $target_file =$target_dir.$target_video;


        $videoFileType= strtolower(pathinfo($nombre_file,PATHINFO_EXTENSION));
        
        $extensions_arr = array("mp4", "avi", "3gp", "mov", "mpeg");

        if(in_array($videoFileType,$extensions_arr)){
          
            if(($_FILES['file_video']['size']>=$maxsize)|| ($_FILES['file_video']["size"]==0)){
            $error="archivo demasiado grande. El archivo debe ser menor de 5MB";

            }else{
                if(move_uploaded_file($_FILES['file_video']['tmp_name'], $target_file)){
                   
             $nombre =htmlentities($_POST['nombre']);
             
             $query = $db->prepare("INSERT INTO `videos`(`nombre`,`ubicacion`) VALUES  (:nombre,:ubicacion)");
             
             $query->bindparam(":nombre", $nombre);
             $query->bindparam(":ubicacion",$file_video);
             $query->execute();
               if($query->rowCount()>0){
                header("location: index.php?estado=ok");
               }

                 }

            }
            }else{
                $error="la extension del archivo es invalido";
            }
      }

?>
    </head>

    <body>
       <main role="main" class="flex-shrink-0">

       <div class="container">
        <div class="row">
            <h3>SUBIR VIDEOS</h3>
        </div>
        <hr>
                      <?php
           if(isset($error)){
            echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
           }

           ?>

           <!-?php
             if(isset($_GET["estado"])){
                echo'<div class="alert alert-success"role="alert"> video subido correctamente <div>';
             }

          ?>

         <div class="row">
          <form method="post" action="" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre de video</label>
                 <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" placeholder="Ingrese nombre">
            </div>
            <div class="form-group">
                  <label for="exampleInputEmail1">video</label>
             
            <div class="custom-file mt-3 mb-3">
             <input  name="file_video"  type="file" class="custom-file-input" id="customFile" required>
             <label  class="custom-file-label selected"      for="customFile"></label>
            </div>
            <script>
            $(".custom-file-input").on("change", function(){
              var fileName = $(this).val().split("\\").pop();
              $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
            </script>
            </div>


             <button type="submit" class="btn btn-primary" name="video_upload">Subir Video</button>
          </form>




         </div>

        
       

      




       </div>

       </main> 












        <!-- Bootstrap JavaScript Libraries -->
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
