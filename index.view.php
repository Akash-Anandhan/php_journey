<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>demo</title>
</head>
<body>

<h1>
    <?php
    if($status == "single"){
        $message = "you are single";
    }
    else{
        $message = "you are not single";
    }
    ?>
    <?= $message; ?>
</h1>
<h2>
    <?php
    foreach($s_data as $item){
        if($item['gender'] == "male"){
            echo "<li>".$item['name']."</li>";
        }
    }?>
</h2>
<p>
    <?php
    foreach($students as $student){
        echo "<li> the name of the student is $student </li>";
    } ?>
    only <?= $students[0]; ?> is a naughty boy
</p>
<!--this block is how to write a funnction in php
in this case ive written a funtioon to filter the s_daata array based on the gender -->
    <?php
    function filterbygender($array, $gender){
        $FilteredArray = [];
        foreach($array as $item){
            if($item['gender'] === $gender){
                $FilteredArray[] = $item;

            }

        }
        return $FilteredArray;
    }
    /*created for genric funtions and learnt to seperate the php file form the html for redudant code*/
    $filterdata = array_filter($s_data, function($data){
        return $data['age']< 20 ;
    })
    ?>
<ul>
    <?php foreach($filterdata as $data) : ?>
        <li>
            <p>
                <?= $data['name']; ?> is a <?= $data['gender']; ?> of <?= $data['age']; ?> years old
            </p>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>