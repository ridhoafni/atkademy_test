<!DOCTYPE html>
<html>
<body>

<?php
print_r(str_split("Hello"));
print(count(str_split("Hello")));
$array_s = str_split("Hello");
for($i = 0; $i < count($array_s); $i++){
    print_r(array_keys($array_s[$i]));
}

?>

</body>
</html>