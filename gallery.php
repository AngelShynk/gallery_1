<?php
/**
 * Created by PhpStorm.
 * User: Angel
 * Date: 09.10.2017
 * Time: 19:07
 */
$uploadfile1 = "files/gallery1/".$_FILES['somename']['name'];
$uploadfile2 = "files/gallery2/".$_FILES['somename']['name'];

/**if(!empty($_FILES)){

    if($_POST['dir']== gallery1){
        move_uploaded_file($_FILES['somename']['tmp_name'], $uploadfile1);
        echo 'FALE WAS DOWNLOADED IN GALLERY 1';
    }
    else{
        move_uploaded_file($_FILES['somename']['tmp_name'], $uploadfile2);
        echo 'FALE WAS DOWNLOADED IN GALLERY 2';

    }

}
**/
switch ($_POST['dir']){
    case gallery1:
        move_uploaded_file($_FILES['somename']['tmp_name'], $uploadfile1);
        echo 'File ' .$uploadfile1 = "files/gallery1/".$_FILES['somename']['name']
        . ' was uploaded in gallery 1' . '<br>';
        //echo 'FILE WAS DOWNLOADED IN GALLERY 1';

        break;
    case gallery2:
        move_uploaded_file($_FILES['somename']['tmp_name'], $uploadfile2);
        echo 'File ' .$uploadfile2. ' was uploaded in gallery 2' . '<br>';

        //  echo 'FILE WAS DOWNLOADED IN GALLERY 2';

        break;
}

function showGallery($dirName)
{
   $handle = opendir("files/" .$dirName);
    while (false !== ($entery = readdir($handle))) {
       if($entery =='.'or $entery =='..'){
           continue;
       }
       echo '<div class="galleryImg"><img height="200" src="'."files/" .$dirName.'/'.$entery.'"></div>';
    }

        closedir($handle);

}

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Gallery</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,500" rel="stylesheet">
    </head>
    <body>

<!--button class="add">Добавить</button>
<div class="forma">
    <div id="name" req='true'-->
        <form action = "" method = "post" enctype = 'multipart/form-data'>
        <input type="file" name="somename" />
        <select name="dir" id="">
            <option class="form" value="gallery1">gallery 1</option>
            <option class="form" value="gallery2">gallery 2</option>
        </select>
        <input  class="form" type = "submit" value = "Загрузить" />
        </form>
    <!--/div>
</div-->

    </body>
</html>
<?php
echo "<div><h3>Gallery 1 </h3></div><br>" ;
showGallery(gallery1);

echo "<div><h3>Gallery 2 </h3></div><br>" ;
showGallery(gallery2);
?>
<script>
    $(".add").click(function(){
        var links = $("[req='true']").length;
        $("#name").clone().attr('id', 'name' + links).appendTo(".forma");
    });
</script>
