<!-- For delete  -->

<?php

 if(unlink('upload/'.$_GET['id'].'.json')){
     header('location:index.php?delete=true');
 }
    
  



?>