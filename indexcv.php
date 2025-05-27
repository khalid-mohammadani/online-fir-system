<!DOCTYPE html>
<head><link rel="SHORTCUT ICON" href="images/ffir1.psd.png"/>
  <title>Online FIR</title>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
<meta name="generator" content="Web Page Maker">

   <link href="style/style.css" rel="stylesheet" type="text/css" />
   

<script language="javascript" type="text/javascript">

function startUpload(){
      document.getElementById('f1_upload_process').style.visibility = 'visible';
      document.getElementById('f1_upload_form').style.visibility = 'hidden';
      return true;
}

function stopUpload(success){
      var result = '';
      if (success == 1){
         result = '<span class="msg"><font color=009999><b>The file was uploaded successfully!</b></font><\/span><br/><br/>';
      }
      else {
         result = '<span class="emsg"><font color=red>There was an error during file upload!</font><\/span><br/><br/>';
      }
      document.getElementById('f1_upload_process').style.visibility = 'hidden';
      document.getElementById('f1_upload_form').innerHTML = result + '<label>File: <input name="myfile" type="file" size="30" /><\/label><label><input type="submit" name="submitBtn" class="sbtn" value="Upload" /><\/label>';
      document.getElementById('f1_upload_form').style.visibility = 'visible';      
      return true;   
}

</script> 
</head>

<body>
     
 <div id="container">
       <div id="header"><div id="header_left"></div>
            <div id="header_main">Upload your cv</div><div id="header_right"></div></div>
            <div id="content">
                <form action="upload.php" method="post" enctype="multipart/form-data" target="upload_target" onsubmit="startUpload();" >
                     <p id="f1_upload_process">Loading...<br/><img src="loader.gif" /><br/></p>
                     <p id="f1_upload_form" align="center"><br/>
                         <label>File:  
                              <input name="myfile" type="file" size="30" />
                         </label>
                         <label>
                             <input type="submit" name="submitBtn" class="sbtn" value="Upload" />
                         </label>
                     </p>
                     
                     <iframe id="upload_target" name="upload_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
                 </form>
             </div>
             <div id="footer"><a href="index.html" target="_blank" >Online Fir</a></div>
         </div>
                 
</body>   