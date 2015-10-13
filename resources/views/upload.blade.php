<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>
            <div class="info" style="display: none;">
                <ul class="alert">
                    <li>alert</li>
                </ul>
            </div>
            <form method="post" action="">
                <input type="text" name="name" id="name">
                <input type="submit" value="submit">
            </form>

        </div>
    </body>
    <script type="text/javascript">
        $(document).ready(function() {
            $('form').on('submit', function(e) {
                e.preventDefault();

                var info = $('.info');

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

                        if(!data.success) {
                            $.each(data.errors, function(index, error){
                                info.find('ul').append('<li>'+error+'</li>')
                            });
                            info.show();
                        }
                    }
                });
            });
        });
    </script>
</html>
