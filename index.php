<!DOCTYPE html>  
<?php
include 'trans.php';

$trans = new trans();
$trans->langLocal('TH');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>
        <script src="js/jquery-3.2.0.min.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/flags.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Web muti lang</h3>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li><img src="png/16/Thailand-flag.png"> <?php echo $trans->tr('menu', 'list1'); ?></li>
                                <li><img src="png/16/Japan-flag.png"> <?php echo $trans->tr('menu', 'list2'); ?></li>
                                <li><img src="png/16/Italy-flag.png"> <?php echo $trans->tr('menu', 'list3'); ?></li>
                                <li><img src="png/16/Poland-flag.png"> <?php echo $trans->tr('menu', 'list4'); ?></li>
                            </ul>  
                            <form action="setlocal.php" method="POST">
                                <select name="lang" class="form-control">
                                    <?php
                                    switch ($trans->getLang()) {
                                        case 'th':
                                            echo '<option value="th" selected>TH</option>'
                                            . '<option value="en">EN</option>'
                                            . '<option value="jp">JP</option>';
                                            break;
                                        case 'en':
                                            echo '<option value="th">TH</option>'
                                            . '<option value="en" selected>EN</option>'
                                            . '<option value="jp">JP</option>';
                                            break;
                                        case 'jp':
                                            echo '<option value="th">TH</option>'
                                            . '<option value="en" selected>EN</option>'
                                            . '<option value="jp" selected>JP</option>';
                                            break;
                                        default:
                                            echo '<option value="th" selected>TH</option>'
                                            . '<option value="en">EN</option>'
                                            . '<option value="jp">JP</option>';
                                    }
                                    ?>
                                </select>
                                <br/>
                                <input type="submit" value="Ok" class="btn btn-success">
                            </form>
                            <form action="clear_session.php" method="POST">
                                <input type="submit" value="Clear" class="btn btn-danger">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>


        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>
