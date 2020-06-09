<html>
    <head>
        <title> Webservice </title>
    </head>

    <body>
        <h2> 
            <?php   



                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, 'ser-services');
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $output = curl_exec($ch);
                curl_close($ch);     
                echo $output;

               
            ?>    
        </h2> 
    </body>
