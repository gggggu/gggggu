<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


    <div id="info">Загрузка...</div>  
    <script>  
        function json_example()  
        {  
            $.getJSON('http://localhost/rap/ci_rap', function(data) {  
                s  = "";  
                $.each(data, function(key, val) {   
                    s = s + key+' => ' + val + '<br/>'   
                });  
                $("#info").html(s); 
             });
        }  
        // setInterval(json_example, 1000);  
 json_example();
</script>
<?php

echo 33;

?>