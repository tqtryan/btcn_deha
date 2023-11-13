
<?php
//1
// Nhập số cần kiểm tra
$number = 10;

// Sử dụng toán tử modulo để tính phần dư khi chia cho 2
$remainder = $number % 2;

// Nếu phần dư bằng 0, số đó là số chẵn
if ($remainder == 0) {
  echo "$number là số chẵn";
}
// Ngược lại, số đó là số lẻ
else {
  echo "$number là số lẻ";
}
?>


<?php
//2
// Nhập số n
$n = 10;

// Khởi tạo biến tổng bằng 0
$sum = 0;

// Sử dụng vòng lặp for để duyệt qua các số từ 1 đến n
for ($i = 1; $i <= $n; $i++) {
  // Cộng dồn số hiện tại vào biến tổng
  $sum = $sum + $i;
}

// In ra kết quả
echo "Tổng của các số từ 1 đến $n là $sum";
?>


<?php
//3
// Sử dụng vòng lặp for lồng nhau để duyệt qua các số từ 1 đến 10
for ($i = 1; $i <= 10; $i++) {
  for ($j = 1; $j <= 10; $j++) {
    // Tính và in ra tích của hai số
    $product = $i * $j;
    echo "$i x $j = $product\n";
  }
  // In ra dòng trống để phân cách các bảng
  echo "\n";
}
?>

<?php
//4
// Nhập chuỗi cần kiểm tra
$string = "Hello, this is Trung";

// Nhập từ cần tìm
$word = "Trung";

// Sử dụng hàm strpos để tìm vị trí của từ trong chuỗi
$position = strpos($string, $word);

// Nếu hàm trả về false, tức là không tìm thấy từ
if ($position === false) {
  echo "Chuỗi '$string' không chứa từ '$word'";
}
// Ngược lại, tìm thấy từ
else {
  echo "Chuỗi '$string' chứa từ '$word' ở vị trí $position";
}
?>

<?php
//5
// Nhập mảng cần tìm
$array = array(10, 20, 5, 15, 30, 25);

// Sử dụng hàm max và min để tìm giá trị lớn nhất và nhỏ nhất
$max = max($array);
$min = min($array);

// In ra kết quả
echo "Giá trị lớn nhất trong mảng là $max\n";
echo "Giá trị nhỏ nhất trong mảng là $min";
?>

<?php
//6
// Nhập mảng cần sắp xếp
$array = array(10, 20, 5, 15, 30, 25);

// Sử dụng hàm sort để sắp xếp mảng
sort($array);

// In ra mảng sau khi sắp xếp
echo "Mảng sau khi sắp xếp là:\n";
foreach ($array as $value) {
  echo "$value\n";
}
?>

<?php
//7
// Nhập số cần tính giai thừa
$n = 5;

// Khởi tạo biến giai thừa bằng 1
$factorial = 1;

// Sử dụng vòng lặp for để duyệt qua các số từ 1 đến n
for ($i = 1; $i <= $n; $i++) {
  // Nhân dồn số hiện tại vào biến giai thừa
  $factorial = $factorial * $i;
}

// In ra kết quả
echo "Giai thừa của $n là $factorial";
?>

<?php
//8
// Nhập khoảng cần tìm
$lower = 10;
$upper = 50;

// In ra tiêu đề
echo "Các số nguyên tố trong khoảng từ $lower đến $upper là:\n";

// Sử dụng vòng lặp for để duyệt qua các số trong khoảng
for ($number = $lower; $number <= $upper; $number++) {
  // Khởi tạo biến cờ để kiểm tra số nguyên tố
  $is_prime = true;

  // Sử dụng vòng lặp for để duyệt qua các ước số của số hiện tại
  for ($divisor = 2; $divisor < $number; $divisor++) {
    // Nếu số hiện tại chia hết cho một ước số nào đó, số đó không phải là số nguyên tố
    if ($number % $divisor == 0) {
      $is_prime = false;
      break;
    }
  }

  // Nếu số hiện tại là số nguyên tố, in ra số đó
  if ($is_prime) {
    echo "$number\n";
  }
}
?>

<?php
//9
// Nhập mảng cần tính tổng
$array = array(10, 20, 5, 15, 30, 25);

// Khởi tạo biến tổng bằng 0
$sum = 0;

// Sử dụng vòng lặp foreach để duyệt qua các phần tử của mảng
foreach ($array as $value) {
  // Cộng dồn giá trị của phần tử vào biến tổng
  $sum = $sum + $value;
}

// In ra kết quả
echo "Tổng của các số trong mảng là $sum";
?>

<?php
//10
// Nhập khoảng cần in
$lower = 10;
$upper = 100;

// In ra tiêu đề
echo "Các số Fibonacci trong khoảng từ $lower đến $upper là:\n";

// Khởi tạo hai số Fibonacci đầu tiên
$first = 0;
$second = 1;

// Sử dụng vòng lặp while để tạo ra các số Fibonacci tiếp theo
while ($first <= $upper) {
  // Nếu số Fibonacci hiện tại nằm trong khoảng, in ra số đó
  if ($first >= $lower) {
    echo "$first\n";
  }

  // Cập nhật hai số Fibonacci tiếp theo
  $third = $first + $second;
  $first = $second;
  $second = $third;
}
?>

<?php
//11
// Nhập số cần kiểm tra
$number = 153;

// Khởi tạo biến tổng bằng 0
$sum = 0;

// Lưu số ban đầu vào biến temp
$temp = $number;

// Sử dụng vòng lặp while để tách từng chữ số của số
while ($temp > 0) {
  // Lấy chữ số cuối cùng của số
  $digit = $temp % 10;

  // Cộng dồn lũy thừa bậc 3 của chữ số vào biến tổng
  $sum = $sum + $digit * $digit * $digit;

  // Loại bỏ chữ số cuối cùng của số
  $temp = (int)($temp / 10);
}

// Nếu tổng bằng số ban đầu, số đó là số Armstrong
if ($sum == $number) {
  echo "$number là số Armstrong";
}
// Ngược lại, số đó không phải là số Armstrong
else {
  echo "$number không phải là số Armstrong";
}
?>

<?php
//12
// Nhập mảng cần chèn
$array = array(10, 20, 30, 40, 50);

// Nhập phần tử cần chèn
$element = 25;

// Nhập vị trí cần chèn
$position = 2;

// Sử dụng hàm array_splice để chèn phần tử vào mảng
array_splice($array, $position, 0, $element);

// In ra mảng sau khi chèn
echo "Mảng sau khi chèn là:\n";
foreach ($array as $value) {
  echo "$value\n";
}
?>

<?php
//13
// Nhập mảng cần loại bỏ
$array = array(10, 20, 10, 30, 20, 40, 50);

// Sử dụng hàm array_unique để loại bỏ các phần tử trùng lặp
$array = array_unique($array);

// In ra mảng sau khi loại bỏ
echo "Mảng sau khi loại bỏ là:\n";
foreach ($array as $value) {
  echo "$value\n";
}
?>

<?php
//14
// Nhập mảng cần tìm
$array = array(10, 20, 30, 40, 50);

// Nhập phần tử cần tìm
$element = 30;

// Sử dụng hàm array_search để tìm vị trí của phần tử trong mảng
$position = array_search($element, $array);

// Nếu hàm trả về false, tức là không tìm thấy phần tử
if ($position === false) {
  echo "Không tìm thấy phần tử $element trong mảng";
}
// Ngược lại, tìm thấy phần tử
else {
  echo "Tìm thấy phần tử $element trong mảng ở vị trí $position";
}
?>

<?php
//16
// Nhập chuỗi cần đảo ngược
$string = "Hello, this is Trung";

// Sử dụng hàm strrev để đảo ngược chuỗi
$reversed = strrev($string);

// In ra kết quả
echo "Chuỗi sau khi đảo ngược là: $reversed";
?>

<?php
//17
// Nhập mảng cần tính
$array = array(10, 20, 30, 40, 50);

// Sử dụng hàm count để tính số lượng phần tử trong mảng
$count = count($array);

// In ra kết quả
echo "Số lượng phần tử trong mảng là: $count";
?>

<?php
//18
// Nhập chuỗi cần kiểm tra
$string = "madam";

// Sử dụng hàm strrev để đảo ngược chuỗi
$reversed = strrev($string);

// Nếu chuỗi ban đầu bằng chuỗi đảo ngược, chuỗi đó là chuỗi Palindrome
if ($string == $reversed) {
  echo "$string là chuỗi Palindrome";
}
// Ngược lại, chuỗi đó không phải là chuỗi Palindrome
else {
  echo "$string không phải là chuỗi Palindrome";
}
?>

<?php
//19
// Nhập mảng cần đếm
$array = array(10, 20, 10, 30, 20, 40, 50);

// Nhập phần tử cần đếm
$element = 10;

// Khởi tạo biến đếm bằng 0
$count = 0;

// Sử dụng vòng lặp foreach để duyệt qua các phần tử của mảng
foreach ($array as $value) {
  // Nếu phần tử hiện tại bằng phần tử cần đếm, tăng biến đếm lên 1
  if ($value == $element) {
    $count++;
  }
}

// In ra kết quả
echo "Số lần xuất hiện của phần tử $element trong mảng là: $count";
?>

<?php
//20
// Nhập mảng cần sắp xếp
$array = array(10, 20, 5, 15, 30, 25);

// Sử dụng hàm rsort để sắp xếp mảng
rsort($array);

// In ra mảng sau khi sắp xếp
echo "Mảng sau khi sắp xếp là:\n";
foreach ($array as $value) {
  echo "$value\n";
}
?>

<?php
//21
// Nhập mảng cần thêm
$array = array(10, 20, 30, 40, 50);

// Nhập phần tử cần thêm
$element = 25;

// Sử dụng hàm array_unshift để thêm phần tử vào đầu mảng
array_unshift($array, $element);

// In ra mảng sau khi thêm
echo "Mảng sau khi thêm phần tử vào đầu là:\n";
foreach ($array as $value) {
  echo "$value\n";
}

// Sử dụng hàm array_push để thêm phần tử vào cuối mảng
array_push($array, $element);

// In ra mảng sau khi thêm
echo "Mảng sau khi thêm phần tử vào cuối là:\n";
foreach ($array as $value) {
  echo "$value\n";
}
?>

<?php
//22
// Nhập mảng cần tìm
$array = array(10, 20, 5, 15, 30, 25);

// Sử dụng hàm sort để sắp xếp mảng theo thứ tự tăng dần
sort($array);

// Lấy phần tử cuối cùng của mảng là số lớn nhất
$max = end($array);

// Sử dụng vòng lặp while để tìm phần tử lớn nhất khác với số lớn nhất
while ($max == end($array)) {
  // Loại bỏ phần tử cuối cùng của mảng
  array_pop($array);
}

// Lấy phần tử cuối cùng của mảng sau khi loại bỏ là số lớn thứ hai
$second_max = end($array);

// In ra kết quả
echo "Số lớn thứ hai trong mảng là $second_max";
?>

<?php
//23
// Nhập hai số cần tìm
$a = 12;
$b = 18;

// Khởi tạo biến ước số chung lớn nhất bằng 1
$gcd = 1;

// Sử dụng vòng lặp for để duyệt qua các ước số của hai số
for ($i = 1; $i <= min($a, $b); $i++) {
  // Nếu hai số đều chia hết cho ước số hiện tại, cập nhật biến ước số chung lớn nhất
  if ($a % $i == 0 && $b % $i == 0) {
    $gcd = $i;
  }
}

// Tính bội số chung nhỏ nhất bằng công thức a * b / gcd
$lcm = ($a * $b) / $gcd;

// In ra kết quả
echo "Ước số chung lớn nhất của $a và $b là $gcd\n";
echo "Bội số chung nhỏ nhất của $a và $b là $lcm";
?>

<?php
//24
// Nhập số cần kiểm tra
$number = 28;

// Khởi tạo biến tổng bằng 0
$sum = 0;

// Sử dụng vòng lặp for để duyệt qua các ước số của số
for ($i = 1; $i < $number; $i++) {
  // Nếu số chia hết cho ước số hiện tại, cộng dồn ước số vào biến tổng
  if ($number % $i == 0) {
    $sum = $sum + $i;
  }
}

// Nếu tổng bằng số ban đầu, số đó là số hoàn hảo
if ($sum == $number) {
  echo "$number là số hoàn hảo";
}
// Ngược lại, số đó không phải là số hoàn hảo
else {
  echo "$number không phải là số hoàn hảo";
}
?>

<?php
//25
// Nhập mảng cần tìm
$array = array(10, 20, 5, 15, 30, 25);

// Khởi tạo biến số lẻ lớn nhất bằng null
$max_odd = null;

// Sử dụng vòng lặp foreach để duyệt qua các phần tử của mảng
foreach ($array as $value) {
  // Nếu phần tử hiện tại là số lẻ và lớn hơn biến số lẻ lớn nhất, cập nhật biến số lẻ lớn nhất
  if ($value % 2 == 1 && ($max_odd == null || $value > $max_odd)) {
    $max_odd = $value;
  }
}

// Nếu biến số lẻ lớn nhất không null, in ra kết quả
if ($max_odd != null) {
  echo "Số lẻ lớn nhất trong mảng là $max_odd";
}
// Ngược lại, không có số lẻ nào trong mảng
else {
  echo "Không có số lẻ nào trong mảng";
}
?>

<?php
//26
// Nhập số cần kiểm tra
$number = 17;

// Khởi tạo biến cờ để kiểm tra số nguyên tố
$is_prime = true;

// Sử dụng vòng lặp for để duyệt qua các ước số của số
for ($i = 2; $i < $number; $i++) {
  // Nếu số chia hết cho một ước số nào đó, số đó không phải là số nguyên tố
  if ($number % $i == 0) {
    $is_prime = false;
    break;
  }
}

// Nếu số là số nguyên tố, in ra kết quả
if ($is_prime) {
  echo "$number là số nguyên tố";
}
// Ngược lại, số không phải là số nguyên tố
else {
  echo "$number không phải là số nguyên tố";
}
?>

<?php
//27
// Nhập mảng cần tìm
$array = array(-10, 20, -5, 15, -30, 25);

// Khởi tạo biến số dương lớn nhất bằng null
$max_positive = null;

// Sử dụng vòng lặp foreach để duyệt qua các phần tử của mảng
foreach ($array as $value) {
  // Nếu phần tử hiện tại là số dương và lớn hơn biến số dương lớn nhất, cập nhật biến số dương lớn nhất
  if ($value > 0 && ($max_positive == null || $value > $max_positive)) {
    $max_positive = $value;
  }
}

// Nếu biến số dương lớn nhất không null, in ra kết quả
if ($max_positive != null) {
  echo "Số dương lớn nhất trong mảng là $max_positive";
}
// Ngược lại, không có số dương nào trong mảng
else {
  echo "Không có số dương nào trong mảng";
}
?>

<?php
//28
// Nhập mảng cần tìm
$array = array(-10, 20, -5, 15, -30, 25);

// Khởi tạo biến số âm lớn nhất bằng null
$max_negative = null;

// Sử dụng vòng lặp foreach để duyệt qua các phần tử của mảng
foreach ($array as $value) {
  // Nếu phần tử hiện tại là số âm và lớn hơn biến số âm lớn nhất, cập nhật biến số âm lớn nhất
  if ($value < 0 && ($max_negative == null || $value > $max_negative)) {
    $max_negative = $value;
  }
}

// Nếu biến số âm lớn nhất không null, in ra kết quả
if ($max_negative != null) {
  echo "Số âm lớn nhất trong mảng là $max_negative";
}
// Ngược lại, không có số âm nào trong mảng
else {
  echo "Không có số âm nào trong mảng";
}
?>

<?php
//29
// Nhập số n
$n = 10;

// Khởi tạo biến tổng bằng 0
$sum = 0;

// Sử dụng vòng lặp for để duyệt qua các số từ 1 đến n
for ($i = 1; $i <= $n; $i++) {
  // Nếu số hiện tại là số lẻ, cộng dồn số đó vào biến tổng
  if ($i % 2 == 1) {
    $sum = $sum + $i;
  }
}

// In ra kết quả
echo "Tổng của các số lẻ từ 1 đến $n là $sum";
?>

<?php
//30
// Nhập khoảng cần tìm
$lower = 10;
$upper = 50;

// In ra tiêu đề
echo "Các số chính phương trong khoảng từ $lower đến $upper là:\n";

// Sử dụng vòng lặp for để duyệt qua các số trong khoảng
for ($number = $lower; $number <= $upper; $number++) {
  // Tính căn bậc hai của số hiện tại
  $sqrt = sqrt($number);

  // Nếu căn bậc hai là một số nguyên, số đó là số chính phương
  if ($sqrt == (int)$sqrt) {
    echo "$number\n";
  }
}
?>

<?php
//31
// Nhập chuỗi cha
$parent = "Hello, this is Bing";

// Nhập chuỗi con
$child = "Bing";

// Sử dụng hàm strpos để tìm vị trí của chuỗi con trong chuỗi cha
$position = strpos($parent, $child);

// Nếu hàm trả về false, tức là không tìm thấy chuỗi con
if ($position === false) {
  echo "Chuỗi '$child' không phải là chuỗi con của chuỗi '$parent'";
}
// Ngược lại, tìm thấy chuỗi con
else {
  echo "Chuỗi '$child' là chuỗi con của chuỗi '$parent' ở vị trí $position";
}
?>