<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>POREs Be PURE - Situs Skincare Terlengkap & Terpercaya di Indonesia</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0d95b64c38.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Mali:wght@500&display=swap');
    </style>
</head>

<body style="background-color: #EFEFEF">
    <!-- Title -->
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid px-5">
            <div class="my-3">
                <h1 style="font-family: 'Mali', cursive;">POREs Be PURE</h1>
            </div>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-primary" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="container">
        <!-- Content -->
        <div class="row mt-5 mx-5" id="content"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            loadData();

            function loadData() {
                $.ajax({
                    type: 'GET',
                    url: 'read.php',
                    success: function(data) {
                        $('#content').html(data);
                    }
                });
            }

            // Delete
            $.ajax({
                type: 'POST',
                url: 'delete.php',
                data: {
                    id: $(this).attr("value")
                },
                cache: false,
                success: function(data) {
                    $('#content').html(data);
                }
            });

            // Search Ajax
            $('#search').on('keyup', function() {
                $.ajax({
                    type: 'POST',
                    url: 'search.php',
                    data: {
                        search: $(this).val()
                    },
                    cache: false,
                    success: function(data) {
                        $('#content').html(data);
                    }
                });
            });

            // Filter Ajax
            $('#filter').on('change', function() {
                $.ajax({
                    type: 'POST',
                    url: 'filter.php',
                    data: {
                        filter: $(this).val()
                    },
                    cache: false,
                    success: function(data) {
                        $('#content').html(data);
                    }
                });
            });

            // Sort Ajax
            $('#sort').on('change', function() {
                $.ajax({
                    type: 'POST',
                    url: 'sort.php',
                    data: {
                        sort: $(this).val()
                    },
                    cache: false,
                    success: function(data) {
                        $('#content').html(data);
                    }
                });
            });
        });
    </script>
</body>

</html>