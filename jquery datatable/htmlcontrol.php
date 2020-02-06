

<html>
    
    <head>
        <script src="3.4.1.js" type="text/javascript"></script>
        <script src="jquery.validate.js" type="text/javascript"></script>
        
        <script>
            $(document).ready((function(){
                $("#myform").validate();
            });
        </script>
        <style>
            .error{
                color:red;
            }
        </style>
            
    </head>
    <body>
        
        <form method="post" id="myform">
            
            Name :<input type="text" class="required" name="txt1">
            <br>
            Number : <input type="text" class="required digits" name="txt2">
            <br>
            Email :<input type="text" class="email" name="txt3">
            <br>
            <input type="submit">
            
        </form>
    </body>
</html>
