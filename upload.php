<?php
   // Edit upload location here

   
   $destination_path = getcwd().DIRECTORY_SEPARATOR;// current directory

  chdir('cvs'); // change durectory

   $destination_path = getcwd().DIRECTORY_SEPARATOR;

   $result = 0;
 
   $target_path = $destination_path . basename( $_FILES['myfile']['name']);

   if(@move_uploaded_file($_FILES['myfile']['tmp_name'], $target_path)) {
      $result = 1;
   }
   
   sleep(1);
?>
<head>
<script language="javascript" type="text/javascript">window.top.window.stopUpload(<?php echo $result; ?>);
</script>   
</head>
