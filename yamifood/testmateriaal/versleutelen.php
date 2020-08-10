<?php
//versleutelen van gegevens
$versleuteld = password_hash("Danny Lemmens", PASSWORD_BCRYPT);
echo "$versleuteld<br><br>";
//ontsleutelen
if(password_verify('Danny Lemmens', $versleuteld)){
    echo "De code is correct";
}else{
    echo "Foute code";
}

?>




