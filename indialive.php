<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Covid-19</title>
    <style></style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <nav class="navbar navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/Covid-19/index.html">
                        <img src="logo.png" alt="" height="30px" class="d-inline-block align-text-top">
                        Covid-19
                    </a>
                </div>
            </nav>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/Covid-19/index.html">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link active" href="/Covid-19/about.html">About</a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Help Line
                        </a>
                        <ul class="dropdown-menu active" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="Oxygen.pdf" target="_break">Emergency Oxygen war room</a>
                            </li>
                            <li><a class="dropdown-item" href="Helpline Number.pdf" target="_break">Control Room</a>
                            </li>
                            <li><a class="dropdown-item" href="faq.pdf" target="_break">FAQ</a></li>
                            <li><a class="dropdown-item" href="What is Covid-19.pdf" target="_break">What is
                                    Covid-19</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/Covid-19/sos.html">SOS</a></li>
                        </ul>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link active"
                            href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public?gclid=CjwKCAjww-CGBhALEiwAQzWxOvMNJx40_8VCMZGaFumspLjvC_6SllKC9spkoS5_ocbkMuyz_SsbUxoC5D8QAvD_BwE"
                            target="_blank">Precautions</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link active" href="https://yashwanthm.github.io/cowin-vaccine-booking/"
                            target="_blank">Vaccine Bookings</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="indialive.php">IndiaLive</a>
                    </li>

                  <!--  <li class="nav-item active">
                        <a class="nav-link active" href="/Covid-19/contact.html">Contact Us</a>
                    </li> -->

                </ul>
                <!--<form class="d-flex" action="https://www.youtube.com/" target="_blank" method="get">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
            </div>
        </div>
    </nav>




<section class="corona_update container-fluid">
    <div class=" mb-3 ">
       <br><br> <h3 class="text-center text-uppercase" style="background-color:red"><marquee>COVID-19 LIVE UPDATES!!!!!</marquee></h3>
    </div>
    <br>
    <div class="table-responsive">
        <table class="table table-bordered table-striped text-center" id="tbval">
            <tr>
                <th class="text-capitalize" style="background-color:dodgerblue">lastupdatedtime</th>
                <th class="text-capitalize" style="background-color:dodgerblue">state</th>
                <th class="text-capitalize" style="background-color:dodgerblue">active</th>
                <th class="text-capitalize" style="background-color:dodgerblue">confirmed</th>
                <th class="text-capitalize" style="background-color:dodgerblue">deaths</th>
                <th class="text-capitalize" style="background-color:dodgerblue">recovered</th>
            </tr>

            <?php

            $data = file_get_contents('https://api.covid19india.org/data.json');
            $coronaupdate = json_decode($data, true);

           // echo "<pre>";

           // print_r($coronaupdate);

           // echo"</pre>";

            $statecount = count($coronaupdate['statewise']);

            $i=1;
            while($i < $statecount){

                ?>

                <tr>
                    <td style="background-color:orange"><?php echo $coronaupdate['statewise'][$i]['lastupdatedtime'] ?></td>
                    <td style="background-color:mediumseagreen"><?php echo $coronaupdate['statewise'][$i]['state'] ?></td>
                    <td style="background-color:yellow"><?php echo $coronaupdate['statewise'][$i]['active'] ?></td>
                    <td style="background-color:violet"><?php echo $coronaupdate['statewise'][$i]['confirmed'] ?></td>
                    <td style="background-color:tomato"><?php echo $coronaupdate['statewise'][$i]['deaths'] ?></td>
                    <td style="background-color:pink"><?php echo $coronaupdate['statewise'][$i]['recovered'] ?></td>
                </tr>

                <?php

                $i++;
            }

            ?>
        </table>
    </div>
    <footer class="my-5 pt-5 text-muted text-center text-small">
        <h5 class="card-title">MADE IN UPES</h5>
        <p class="mb-1">Copyright© 2021–2022 COVID-19</p>
        <a class="nav-link active" href="mailto:queriescovid@gmail.com">Contact Us</a>

    </footer>
</sectio/n>
