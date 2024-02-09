<!doctype html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <script>
        function reset() {
            document.forms['main'].action = 'index.php';
            document.forms['main'].submit();
        }
    </script>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Merkliste</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Beschreibung</th>
                            <th scope="col">Datum</th>
                            <th scope="col">Uhrzeit</th>
                            <th scope="col">Erledigt</th>
                            <th scope="col">Aktion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include('control/merkread.php');?>
                    </tbody>
                </table>
                <hr>
                <h2>
                    Neue Notiz anlegen
                </h2>
                <form name="main" action="control/merkcreate.php" method="post">
                    <div class="row">
                        <div class="col-12">
                            <label>Name</label><input class="form-control" name="Name">
                        </div>
                        <div class="col-12">
                            <label>Beschreibung</label><textarea class="form-control" name="Beschreibung" required></textarea>
                        </div>
                        <div class="col-6">
                            <label>Datum</label><input type="date" class="form-control" placeholder="dd-mm-yyyy" name="Datum">
                        </div>
                        <div class="col-6">
                            <label>Uhrzeit</label><input type="time" class="form-control" name="Uhrzeit">
                        </div>
                        <div class="col-12">
                            <br>
                            <button type="submit" class="btn btn-success">Anlegen</button>
                            <button type="button" class="btn btn-danger" onclick="reset();">Zurücksetzen</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>