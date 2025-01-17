<?php

# Đối với chuỗi thông thường thì okay, gần như là dấu " và ' không khác nhau lắm 
$nhaydon = 'aaa';
$nhaykep = "bbb"; 

echo "Nháy đơn: "; var_dump($nhaydon); echo "\n";
echo "Nháy kép: "; var_dump($nhaykep); echo "\n";

# Nhưng trong PHP, nháy đơn không được CHÈN BIẾN VÀO 
# Nháy kép thì được
$name="hoangphuc";
$nhaydon = 'Xin chao $name - hihi';
$nhaykep = "Xin chao $name - hihi";

echo "Nháy đơn: "; var_dump($nhaydon); echo "\n";
echo "Nháy kép: "; var_dump($nhaykep); echo "\n";


# Nháy đơn không thực hiện được các dạng encoding 
# Nháy kép thì được 
$name = "hoangphuchaha";
$nhaydon = 'Đây là chữ A: \x41';
$nhaykep = "Đây là chữ A: \x41";

echo "Nháy đơn: "; var_dump($nhaydon); echo "\n";
echo "Nháy kép: "; var_dump($nhaykep); echo "\n";

# Escape string (Escape quote)
echo "Bắt đầu test escape:\n";
# Cách 1: Dùng nháy đôi
$name="H'Hen Nie";
var_dump($name);

# Cách 2: Dùng escape backslash \' 
$name='H\'Hen Niê';
var_dump($name);

?>