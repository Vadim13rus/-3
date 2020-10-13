<?php
  

        //задача 1a
        $arr = array ("a","b","c");
        var_dump($arr);
        
        
        //задача 1b
        echo"<br/>". $arr[0]."<br/>".$arr[1] ."<br/>" . $arr[2];

        //задача 1c
        $arr= array("a","b","c","d");
        echo "<br/>". $arr[0]."+". $arr[1].",".$arr[2] ."+". $arr[3];

        //задача 1d
        echo "<br/>";
        $arr=array("2", "5", "3", "9");
            $um = $arr [0] * $arr[1];
            $um2 = $arr [2] * $arr[3];
            $sl=$um+$um2;
            echo $sl; 
            
        //задача 1e
        $arr=array();
        $arr[0]=1;
        $arr[1]=2;
        $arr[2]=3;
        $arr[3]=4;
        $arr[4]=5;



        //задача 1f
        $arr =array ("a"=>1,"b"=>2,"c"=>3);
        echo "<br />". $arr["b"];



        //задача 1g
        $arr =array ("a"=>1, "b"=>2, "c"=>3 );
        $summ =$arr["a"]+$arr["b"]+$arr["c"];
        echo "<br/>". $summ;



        //задача 1h
        $arr=array("Коля"=>"1000$", "Вася"=>"500$", "Петя"=>"200$");
        echo "<br/>". "зарплата Коли".  $arr["Коля"]."<br/>". "зарплата Пети". $arr["Петя"];



        //задача 1i
        $arr=array("1"=>"Понедельник", "2" => "Вторник", "3" => "Среда", "4" => "Четверг", "5" => "Пятница", "6" => "Суббота", "7" => "Воскресенье",);
        echo "<br/>". $arr["2"];
        


        //задача 1j
         $day=$arr["2"];
         echo "<br/>". $day;



        //задача 1k
        $arr = array("cms"=>["joomla", "wordpress", "drupal"], "colors"=>["blue"=>"голубой", "red"=>"красный","green"=>"зеленый"],);
        echo "<br/>". $arr["cms"]["0"]. "," .$arr["cms"]["2"].",".$arr["colors"]["red"]. ",".$arr["colors"]["green"];
            


        //задача 1l
        $arr = array("ru"=>array("понедельник", "вторник","среда","четверг","пятница","суббота","воскресенье"), "en"=>array("monday","tuesday","wednesday","thursday","friday","saturday","sunday"),);
        echo "<br/>". $arr["ru"][0].",".$arr["en"][2];



        //задача 1m
    if($lang=$arr["ru"]){
        $day=$arr["ru"][2];
        echo "<br/>".$day;
    }


        //задача 2a





        //задача 2b

      