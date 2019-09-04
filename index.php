<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body ">
<?php include_once 'meni.php'; ?>

<div class="row pt-5" style=" width: 75%; margin:auto;">
    <?php
    for ($ipr=1; $ipr<=10; $ipr++) { ?>
    <div class="col-md-4 pt-5">
        <div class="card">
            <img class="card-img-top" src="img/card1.jpg" alt="Card image cap">
            <div class="card-block">
                <h4 class="card-title">This is Card #1</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="form-row text-center">
                    <div class="col-12">
                <a href="http://v4-alpha.getbootstrap.com/components/card/" class="btn btn-primary" style="margin:auto;">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <div class="col-md-4 pt-5">
        <div class="card card-inverse card-primary text-center">
            <img class="card-img-top" src="img/card2.jpg" alt="Card image cap">
            <div class="card-block">
                <h4 class="card-title">This is Card #2</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="http://v4-alpha.getbootstrap.com/components/card/" class="btn btn-primary">Learn More</a>
            </div>
        </div>
    </div>


    <div class="col-md-3 pt-5">
        <div class="card card-inverse card-success text-center">
            <img class="card-img-top" src="img/card3.jpg" alt="Card image cap">
            <div class="card-block">
                <h4 class="card-title">This is Card #3</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="http://v4-alpha.getbootstrap.com/components/card/" class="btn btn-primary">Learn More</a>
            </div>
        </div>
    </div>

    <div class="col-md-3 pt-5">
        <div class="card card-inverse card-info text-center">
            <img class="card-img-top" src="img/card4.jpg" alt="Card image cap">
            <div class="card-block">
                <h4 class="card-title">This is Card #4</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="http://v4-alpha.getbootstrap.com/components/card/" class="btn btn-primary">Learn More</a>
            </div>
        </div>
    </div>

</div>
</div>

<div class="table-responsive-sm" style="width:75%; margin: auto">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Heading</th>
            <th scope="col">Heading</th>
            <th scope="col">Heading</th>
            <th scope="col">Heading</th>
            <th scope="col">Heading</th>
            <th scope="col">Heading</th>
            <th scope="col">Heading</th>
            <th scope="col">Heading</th>
            <th scope="col">Heading</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Cell</td>
            <td>Cell</td>
            <td>Cell</td>
            <td>Cell</td>
            <td>Cell</td>
            <td>Cell</td>
            <td>Cell</td>
            <td>Cell</td>
            <td>Cell</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Cell</td>
            <td>Cell</td>
            <td>Cell</td>
            <td>Cell</td>
            <td>Cell</td>
            <td>Cell</td>
            <td>Cell</td>
            <td>Cell</td>
            <td>Cell</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Cell</td>
            <td>Cell</td>
            <td>Cell</td>
            <td>Cell</td>
            <td>Cell</td>
            <td>Cell</td>
            <td>Cell</td>
            <td>Cell</td>
            <td>Cell</td>
        </tr>
        </tbody>
    </table>
</div>


</body>
</html>
