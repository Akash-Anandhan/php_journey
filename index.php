<?php
$name = "akash";
$status = "singles";
$students = ["akash", "john", "mathew", "kill monger"];
$s_data = [
    ['name' => "akash",
        'age' => 18,
        'gender' => "female",],
    ['name' => "karthik",
        'age' => 18,
        'gender' => "male",],
    ['name' => "sathosh",
        'age' => 18,
        'gender' => "male",],
    ['name' => "jacob",
        'age' => 18,
        'gender' => "female",]
];
/*this block is how to write a funnction in php
in this case ive written a funtioon to filter the s_daata array based on the gender */
function filterbygender($array, $gender)
{
    $FilteredArray = [];
    foreach ($array as $item) {
        if ($item['gender'] === $gender) {
            $FilteredArray[] = $item;

        }

    }
    return $FilteredArray;
}

/*created for genric funtions and learnt to seperate the php file form the html for redudant code*/
$filterdata = array_filter($s_data, function ($data) {
    return $data['age'] < 20;
});

 require "index.view.php";



