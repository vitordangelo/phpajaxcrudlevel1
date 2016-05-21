<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Read Products</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class='page-header'>
            <h1 id='page-title'>Read Products</h1>
        </div>  

        <div class='margin-bottom-1em overflow-hidden'>
            <div id='read-products' class='btn btn-primary pull-right display-none'>
                <span class='glyphicon glyphicon-list'></span> Read Products
            </div>
         
            <div id='create-product' class='btn btn-primary pull-right'>
                <span class='glyphicon glyphicon-plus'></span> Create Product
            </div>
             
            <div id='loader-image'><img src='images/ajax-loader.gif' /></div>
        </div> 

        <div id='page-content'></div>   

    </div>
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>