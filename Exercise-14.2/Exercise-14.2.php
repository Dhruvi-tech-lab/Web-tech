<?php 
if(isset($_FILES['image'])){ 
    $file_name = $_FILES['image']['name']; 
    $file_tmp = $_FILES['image']['tmp_name']; 
    
    if(file_exists("upload-images/".$file_name)){ 
        echo "Image already exists - Failed to upload<br>"; 
    } 
    else if(move_uploaded_file($file_tmp,"upload-images/".$file_name)) { 
        echo "Image successfully uploaded!<br>"; 
    } 
    else { 
        echo "Could not upload image!<br>"; 
    } 
    echo "Image name: " . $file_name . "<br><br>"; 
} 

if(isset($_FILES['doc'])) { 
    $file_name = $_FILES['doc']['name']; 
    $file_tmp = $_FILES['doc']['tmp_name']; 
    
    if(file_exists("upload-file/".$file_name)) { 
        echo "Document already exists - Failed to upload<br>"; 
    } 
    else if(move_uploaded_file($file_tmp,"upload-file/".$file_name)) { 
        echo "Document successfully uploaded!<br>"; 
    } 
    else { 
        echo "Could not upload document!<br>"; 
    } 
    echo "Document name: " . $file_name . "<br>"; 
}
?>
