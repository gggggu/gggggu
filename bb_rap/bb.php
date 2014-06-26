<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


    <input id='text'>
    <button id='key'>key</button><br>
    <div id='div'></div>
    
    <script>  
        function json_example(value) {
            $.ajax({
                  url: 'http://localhost/rap/ci_rap',
                  dataType: 'json',
                  data : {"id" : value},
                    success: callback
                });
        }  
        function callback(data){
            $('#div').text(data[0]['article'])
             // console.log(data[0]['']) 
        }
      
     $(document).ready(function(){         
         $('#key').on('click', function(){
             var value = $('#text').val();
             json_example(value);
             
         })     
     })
</script>
<?php

// echo 33;

?>