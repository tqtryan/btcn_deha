<?php
    //Trắc nghiệm
    #1
    /*
    Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
    [5] => 6
    [6] => 9
) */
    #2 a
    #3 a
    #4 a
    #5 b

    //Tự luận
    #bài1
    // Tạo một hàm generateFibonacci nhận một số nguyên dương n và trả về dãy số Fibonacci đầu tiên có n phần tử
    echo "Bài 1: <br>";
    function generateFibonacci($n) {
        // Khởi tạo một mảng rỗng để lưu kết quả
        $result = [];
        // Kiểm tra nếu n là số dương
        if ($n > 0) {
          // Kiểm tra nếu n lớn hơn 1, thì mới thêm hai phần tử đầu tiên của dãy số Fibonacci là 1 và 2 vào mảng kết quả
          if ($n > 1) {
            array_push($result, 1, 2);
          } else {
            // Nếu n bằng 1, thì chỉ thêm một phần tử là 1 vào mảng kết quả
            array_push($result, 1);
          }
          // Lặp cho đến khi độ dài của mảng kết quả bằng n - 1
          while (count($result) < $n - 1) {
            // Lấy phần tử cuối cùng của mảng kết quả
            $last = end($result);
            // Lấy phần tử gần cuối cùng của mảng kết quả
            $secondLast = prev($result);
            // Thêm tổng của phần tử cuối cùng và phần tử gần cuối cùng vào mảng kết quả
            array_push($result, $last + $secondLast);
          }
        }
        // Trả về mảng kết quả
        return $result;
      }
  $fibonacciSequence = generateFibonacci(10);
  // Hiển thị dãy số Fibonacci đầu tiên có 10 phần tử
  echo "Dãy số Fibonacci đầu tiên có 10 phần tử là: ";
  foreach ($fibonacciSequence as $number) {
echo $number . " ";
}

echo "<hr>";
echo "Bài 2: <br>";
    #bài2
    $students = [
        ["id" => 1, "name" => "Trung", "age" => 20, "grade" => 9.5],
        ["id" => 2, "name" => "Rumie", "age" => 19, "grade" => 8.0],
        ["id" => 3, "name" => "Huy", "age" => 17, "grade" => 9.0],
        ["id" => 4, "name" => "Hà", "age" => 18, "grade" => 7.5],
        ["id" => 5, "name" => "Hưng", "age" => 19, "grade" => 8.5]
      ];
    // Viết hàm để tìm học sinh có điểm cao nhất (grade)
    function findHighestGradeStudent($students) {
        // Khởi tạo một biến để lưu giữ học sinh có điểm cao nhất hiện tại, ban đầu gán bằng học sinh đầu tiên trong mảng
        $highestGradeStudent = $students[0];
        // Lặp qua tất cả các học sinh trong mảng, bắt đầu từ học sinh thứ hai
        for ($i = 1; $i < count($students); $i++) {
          // Nếu học sinh nào có điểm cao hơn học sinh có điểm cao nhất hiện tại, thì cập nhật biến đó
          if ($students[$i]["grade"] > $highestGradeStudent["grade"]) {
            $highestGradeStudent = $students[$i];
          }
        }
        // Trả về biến đó
        return $highestGradeStudent;
      }
      
      // Gọi hàm và in ra kết quả
      print_r(findHighestGradeStudent($students));
?>

    
