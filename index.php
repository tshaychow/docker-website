<html>
    <head>
        <title> Webservice </title>
    </head>

    <body>
        <h2> 
            <?php   
                $json = file_get_contents('testtest');
                $obj = json_decode($json);
                $amount = $obj->output;
                echo  $amount;
            ?>    
        </h2> 
    </body>
