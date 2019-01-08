<!DOCTYPE html>
<html>
<head>
    <title>Mokiniu amzius</title>
    <meta charset="UTF-8">
</head>
<body>
<pre>
<?php

/**
 * Created by PhpStorm.
 * User: toman
 * Date: 2019-01-07
 * Time: 19:26
 */
$students=[
    ["vardas"=> "Jonas",
        "gimimo data" => ['2001-10-3']

    ],
    ["vardas" => "Ona",
        "gimimo data" =>['2000-06-12']
    ],
    ["vardas" => "Ieva",
    "gimimo data" =>['1998-04-30']
    ]
];
function studentAge($students){
    foreach ($students as $student){
        if(is_array($student)){
            foreach($student as $name){
                if(is_array($name)){
                    foreach($name as $dateBirth){
                        $today = date("Y-m-d");
                        $diff = date_diff(date_create($dateBirth), date_create($today));
                        echo "amzius yra " . $diff->format("%y")."\n";
                        if($diff->format("%y")>=18){
                            echo " pilnametis "."\n";
                        }
                    }
                }
                else {
                    echo"<br>" .  $name."\n";

                }
            }
        }
    }
}
studentAge($students);
?>
</pre>
</body>
</html>