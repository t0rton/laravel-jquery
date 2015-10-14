<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1>Hello, world!</h1>

    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>
            <div class="info" style="display: none;">
                <ul class="alert"></ul>
            </div>
            <form method="post" action="">
                <input type="text" name="name" id="name" class="form-control">
                <input type="submit" value="submit" class="btn">
            </form>
            <div class="result" style="display: none;">
                <ul></ul>
            </div>
        </div>
    </body>
    <script type="text/javascript">
        $(document).ready(function() {
            $('form').on('submit', function(e) {
                e.preventDefault();

                var info = $('.info');
                var result = $('.result');

                var formData = new FormData();
                formData.append('name', $('#name').val());

                $.ajax({
                    url: 'submit',
                    method: 'post',
                    processData: false,
                    contentType: false,
                    cache: false,
                    data: formData,
                    dataType: 'json',
                    success:function(data) {
                        console.log(data);
                        
                        info.hide().find('ul').empty();
                        result.hide().find('ul').empty();

                        if(!data.success) {
                            $.each(data.errors, function(index, error){
                                info.find('ul').append('<li>'+error+'</li>')
                            });
                            info.show();
                        } else {
                            result.find('ul').append('<li>'+data.result+'</li>');
                            result.show();
                        }
                    }
                });
            });
        });
    </script>
</html>
