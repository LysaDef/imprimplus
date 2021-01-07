<!DOCTYPE html>
<html>
    <head>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="icon" href="http://127.0.0.1/prj/imprimplus/page/img/viewers/header_logo.png" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">


        <title><?php echo $GLOBALS['ENV']['APP_NAME'].' — '.$tabTitle; ?></title>
    </head>

    <style>
        .nav__link__bg{


            background: #3D4859;
            margin-right: 15px;
            border-radius: 7px;
            padding: 5px;
            margin-top: 0px;
            font-size: 15px;
            color: white;
            transition: 0.3s all;
        }

        .nav__link__bg:hover {

            transition: 0.3s all;
            color: #3D4859;
            background: white;
        }


        .nav__link__user{

            margin-left: 25px;
            background: #90AA9D;
            margin-right: 15px;
            border-radius: 7px;
            padding: 5px;
            margin-top: 0px;
            font-size: 15px;
            color: white;
            transition: 0.3s all;
        }

        .nav__link__logout{


            background: #FF4255;

            border-radius: 7px;
            padding: 5px;
            margin-top: 0px;
            font-size: 15px;
            color: white;
            transition: 0.3s all;
        }

        .nav__link__logout:hover {


            transition: 0.3s all;
            color: #FF4255;
            background: white;
        }

        .nav__bar__font{

            font-family: "Poppins", sans-serif;

        }

        .navbar-light .navbar-nav .nav-link{

            color: white;

        }


    </style>
    <body>
<br><br>
