<?php
require 'application_installer_config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Instalar</title>
    <link rel="shortcut icon" type="image/x-icon" href="../storage/icon/favicon.ico">
    <link href="../../ui/theme/ibilling/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../ui/theme/ibilling/lib/fa/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../ui/theme/ibilling/lib/icheck/skins/all.css" rel="stylesheet">
    <link href="../../ui/lib/css/animate.css" rel="stylesheet">
    <link href="../../ui/lib/toggle/bootstrap-toggle.min.css" rel="stylesheet">
    <link href="../../ui/theme/ibilling/css/style.css?ver=2.0.1" rel="stylesheet">
    <link href="../../ui/theme/ibilling/css/component.css?ver=2.0.1" rel="stylesheet">
    <link href="../../ui/theme/ibilling/css/custom.css" rel="stylesheet">
    <link href="../../ui/lib/icons/css/ibilling_icons.css" rel="stylesheet">
    <link href="../../ui/theme/ibilling/css/material.css" rel="stylesheet">
    <link type='text/css' href='style.css' rel='stylesheet'/>

</head>
<body style='background-color: #FBFBFB;'>
<div id='main-container'>
    <div class='header'>
        <div class="header-box wrapper">
            <div class="hd-logo"><a href="#"><img src="../storage/system/logo.png" alt="Logo"/></a></div>
        </div>

    </div>
    <!--  contents area start  -->
    <div class="col-md-12">

<hr>
<h3>Insira os dados</h3>
<hr>

        <form class="form-horizontal" role="form" id="ib_form">

            <div class="form-group">
                <label class="control-label col-sm-3" for="fullname">Seu Nome Completo:</label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" name="fullname" id="fullname" placeholder="Enter Full Name" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3" for="email">Email:</label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3" for="password">Escolha a senha:</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3" for="confirm_password">Confirme a senha:</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Re Enter password" required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" id="ib_submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </form>

    </div>
</div>

<script src="../../ui/theme/ibilling/js/jquery-1.10.2.js"></script>
<script src="../../ui/theme/ibilling/js/bootstrap.min.js"></script>
<script src="../../ui/lib/blockui.js"></script>
<script src="../../ui/theme/ibilling/lib/bootbox.min.js"></script>

<script type="text/javascript">

    var block_msg = '<div class="md-preloader"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="32" width="32" viewbox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="6"/></svg></div>';

    var ib_submit = $("#ib_submit");
    var ib_box = $("#main-container");

    ib_submit.on('click', function(e) {

        e.preventDefault();
        ib_box.block({message: block_msg});

        $.post("post_profile.php", $('#ib_form').serialize())
            .done(function( data ) {


                if ($.isNumeric(data)) {

                    window.location = '../../index.php';

                }
                else{
                    ib_box.unblock();
                    bootbox.alert(data);
                }


            });

    });

</script>

</body>
</html>

