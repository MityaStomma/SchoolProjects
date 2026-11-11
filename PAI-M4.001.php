<?php 
//data i czas

// date_default_timezone_set("UTC");

// echo time();
// echo "<br>";
// echo date("d.m.Y H:i:s", 5000);


// $a = getdate();

// echo "<pre>";
//     print_r($a);
// echo "</pre>";

//date_default_timezone_set("America/Yakutat");

// $godzina = (int)date("G");

// if ($godzina<12){
//     echo "dzień dobry";
// }elseif($godzina<18){
//     echo "Miłego popołudnia";
// }else{
//     echo "dobry wieczór";
// }

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona główna</title>
</head>
<body>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident dolorum aliquam numquam libero et corporis totam aspernatur cumque. Nesciunt provident ipsa totam, sit ipsum assumenda impedit veritatis placeat nisi, omnis ratione illo rerum cupiditate voluptates, asperiores nobis eveniet ducimus incidunt porro. Quas iure sed blanditiis at excepturi ut eligendi accusantium accusamus? Vitae earum tempora ea aut! Pariatur rem fugiat maiores ut. Ex vero ea consequuntur qui, inventore soluta nihil quibusdam, optio voluptas ratione non. Repudiandae tempora cum ut nulla earum sapiente voluptatibus sed id, officiis nesciunt illo consequatur dolorem quasi quis ea. Voluptatem velit libero cumque fugiat exercitationem eius temporibus incidunt tempore. Quisquam ratione natus culpa commodi quas, cum aspernatur quaerat, incidunt, temporibus voluptatem necessitatibus? Repellat voluptates cum atque optio! Animi libero vero, minus veritatis a, doloribus rerum nulla cum inventore unde, atque assumenda! Corrupti quisquam maiores repudiandae labore, fugiat vel accusamus cumque est veritatis aspernatur laudantium aut inventore ipsum, quidem quia quaerat doloribus nihil natus iusto quae corporis alias officiis! Fugiat sequi ab ullam culpa quos, voluptate eveniet neque consectetur quae beatae delectus dolorem quia porro corrupti unde explicabo autem soluta dolore numquam eius enim. Voluptatibus sequi quaerat est facilis, eos atque quis consectetur ipsam nulla eum modi voluptates!</p>


    <footer>
        &copy; Acme inc. <?php
            $rok = (int)date("Y");
            if ($rok === 2026){
                echo " 2026";
            }else {
                echo " 2026 - ".$rok;
            }
        ?> 
    </footer>
</body>
</html>