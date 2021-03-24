<?php







// $test = array(
// 	'key1'	=> 'value1',
// 	'key2'	=> 'value2',
// 	'key3'	=> 'value3'
// );

// echo "<pre>";
// print_r(serialize($test));
// echo "</pre>";

// (預約)探視日期
// 病人姓名
// 訪客姓名
// 生日
// 身份証字號
// 預的病房
// 時段
// 病床號



// class myclass
// {

// 	public $pro1 = "i`m a class property.";


// 	public function set_property($newval){
// 		$this ->pro1 = $newval;
// 	}

// 	public function get_property(){
// 		return $this -> pro1."<br>";
// 	}
// }

// $my_class = new myclass;

// var_dump($my_class ->get_property());

// var_dump($my_class -> set_property('fuck you'));
// echo $my_class -> get_property();

// $test = array(
// 	0, 1, 2, 3, 4, 5, 6, 7, 8
// );

// $testtest = array(
// 	9, 10, 11, 12
// );

// $arrayconbin[] = $test;
// $arrayconbin[] = $testtest;
// echo "<pre>";
// print_r($arrayconbin);
// echo "</pre>";

// $count = 0;
// foreach($test as $test1){

// 	if(in_array($count,array(0,1,2,8))){
// 		$count++;
// 		continue;
// 	}




// 	echo $test1;



// 	$count++;
// }



// echo "<pre>";
// print_r(preg_match("/^[1-9][0-9]*$/", 55));
// echo "</pre>";


// function my_sort()
// {
// }

// $test = array(
// 	1, 2, 3, 4, 5, 6, 7
// );

// $arr1 = array(5, 6, 1,2,3);

// foreach ($test as $arr => $value) {

// 	if (in_array($value, $arr1)) {
// 		unset($test[$arr]);
// 	}
// }

// foreach ($arr1 as $i) {
// 	array_unshift($test, $i);
// }


// // usort($test, "my_sort");

// echo "<pre>";
// print_r($test);
// echo "</pre>";


// $test = 123;
// $test .= 456;

// echo "<pre>";
// print_r($test);
// echo "</pre>";
/*
Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.

You may assume that each input would have exactly one solution, and you may not use the same element twice.
You can return the answer in any order.
*/

// Brute Force
// class Solution
// {

// 	/**
// 	 * @param Integer[] $nums
// 	 * @param Integer $target
// 	 * @return Integer[]
// 	 */
// 	function twoSum($nums, $target)
// 	{

// 		foreach ($nums as $num => $value) {
// 		}
// 	}
// }

// for (int i = 0; i < nums.length; i++) {
// 	for (int j = i + 1; j < nums.length; j++) {
// 		if (nums[j] == target - nums[i]) {
// 			return new int[] { i, j };
// 		}
// 	}

// $nums = array(1, 2, 5, 8, 9, 55);
// $target = 11;
// $solution = new Solution;

// $solution->twoSum($nums, $target);



/*$str = array(
	'<option value="3A01-A ">3A01-A </option>',
	'<option value="3A01-B ">3A01-B </option>',
	'<option value="3A02-A ">3A02-A </option>',
	'<option value="3A02-B ">3A02-B </option>',
	'<option value="3A03-A ">3A03-A </option>',
	'<option value="3A03-B ">3A03-B </option>',
	'<option value="3A05   ">3A05   </option>',
	'<option value="3A06   ">3A06   </option>',
	'<option value="3A07-A ">3A07-A </option>',
	'<option value="3A07-B ">3A07-B </option>',
	'<option value="3A08-A ">3A08-A </option>',
	'<option value="3A08-B ">3A08-B </option>',
	'<option value="3A09-A ">3A09-A </option>',
	'<option value="3A09-B ">3A09-B </option>',
	'<option value="3A09-C ">3A09-C </option>',
	'<option value="3A09-D ">3A09-D </option>',
	'<option value="3A10-A ">3A10-A </option>',
	'<option value="3A10-B ">3A10-B </option>',
	'<option value="3A10-C ">3A10-C </option>',
	'<option value="3A10-D ">3A10-D </option>',
	'<option value="3A11-A ">3A11-A </option>',
	'<option value="3A11-B ">3A11-B </option>',
	'<option value="3A12-A ">3A12-A </option>',
	'<option value="3A12-B ">3A12-B </option>',
	'<option value="3A13-A ">3A13-A </option>',
	'<option value="3A13-B ">3A13-B </option>',
	'<option value="3A15   ">3A15   </option>',
	'<option value="3A16   ">3A16   </option>',
	'<option value="3A17   ">3A17   </option>',
	'<option value="3A18   ">3A18   </option>',
	'<option value="3A19   ">3A19   </option>',
	'<option value="3A20-A ">3A20-A </option>',
	'<option value="3A20-B ">3A20-B </option>',
	'<option value="3A20-C ">3A20-C </option>'
);

foreach($str as $strs){
    echo strip_tags($strs)."<br>";
}*/
// compare which date is bigger
/*$TodayDate = date("Ymd");
$Deadline = "2020-12-20";

if (strtotime($TodayDate) > strtotime($Deadline))
    echo "還沒有過期";
else
    echo "過期了";
*/

// set the system timezone
//date_default_timezone_set("Asia/Taipei");
//echo date('Y-m-d');
//phpinfo(8);
//header("Content-type:application/pdf");
// It will be called downloaded.pdf
//header("Content-Disposition:attachment;filename=1090730.pdf");
// The PDF source is in original.pdf
//readfile("uploads/1090730.pdf");
