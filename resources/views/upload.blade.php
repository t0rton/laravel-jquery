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
            <div></div>v class="content">
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
