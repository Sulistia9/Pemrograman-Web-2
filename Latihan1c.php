<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Membuat Kotak Berisikan Huruf</title>
</head>

<body>

    <?php
    $a = "A";
    $b = "B";
    $c = "C";
    ?>

    <div class="Kotak">
        <div class="Satu">
            <p><?php echo $a ?></p>
        </div>

        <div class="Dua">
            <p><?php echo $a ?></p>
            <p><?php echo $b ?></p>
        </div>

        <div class="Tiga">
            <p><?php echo $a ?></p>
            <p><?php echo $b ?></p>
            <p><?php echo $c ?></p>
        </div>

        <style type="text/css">
            .Kotak {
                border: 1px solid black;
                width: 148px;
                height: 150px;
                margin-left: 600px;
                margin-top: 230px;
                display: table;
            }

            .Satu {
                border: 2px solid black;
                width: 40px;
                height: 44px;
                margin-left: 4px;
                margin-top: 5px;
                padding-bottom: 3px;
                text-align: center;
            }

            .Dua {
                display: flex;
            }

            .Dua p {
                border: 2px solid black;
                width: 40px;
                height: 33px;
                margin-left: 4px;
                margin-top: 5px;
                padding-bottom: 3px;
                padding-top: 13px;
                text-align: center;
            }

            .Tiga {
                display: flex;
            }

            .Tiga p {
                border: 2px solid black;
                width: 40px;
                height: 33px;
                margin-left: 4px;
                margin-bottom: 5px;
                margin-top: 0px;
                padding-top: 13px;
                text-align: center;
            }
        </style>
    </div>

</body>

</html>
