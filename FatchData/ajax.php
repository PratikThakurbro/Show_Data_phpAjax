<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>


<table id = main border="0" cellspacing="0">
    <tr>
        <td id="hered" >
        <h2> PHP With Ajax </h2>
        </td>
    </tr>
    <tr>
        <td id="table-load">
            <input id="butt" type="button" name="button" value="Show Data">
            </td>
    </tr>
    <tr>
       
</td>
    </tr>
    </table>


  <script type="text/javascript">
    $(document).ready(function() {
        $('#butt').on("click", function(e){
            $.ajax({
                url : "ajaxlode.php",
                type: "POST", // GET  by defolt hota hai 
                success :function(data){
                    $("#table-load").html(data); // ye data ko kaha show kar na hai ye bata hai 

                }
            });
        });
    });

    
  </script>

    
</body>
</html>