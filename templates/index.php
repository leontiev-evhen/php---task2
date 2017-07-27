<DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Course PHP -  Task 2</title>

        <!-- Bootstrap -->
        <link href="<?php echo PATH;?>templates/css/bootstrap.min.css" rel="stylesheet">

        <!-- My style -->
        <link href="<?php echo PATH;?>templates/css/style.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container mt-50">
            <?php if (isset($error))
            { ?>

                <div class="row">
                    <div class="col-md-12">

                        <?php echo $error;?>

                    </div>
                </div>

            <?php } ?>
            <div class="row">
                <h2>Calculator</h2>

                    <?php
                    if(empty($error) && !empty($data))
                    {
                        foreach ($data as $key=>$items)
                        {
                            switch ($key)
                            {
                                case 'plus': ?>
                                        <div class="col-md-6">
                                            plus
                                        </div>
                                        <div class="col-md-6">
                                            <?php echo $data['plus']['num1'] .' + '. $data['plus']['num2'] .' = '. $data['plus']['result']; ?>
                                        </div>
                                    <?php
                                    break;

                                case 'minus': ?>
                                    <div class="col-md-6">
                                        minus
                                    </div>
                                    <div class="col-md-6">
                                        <?php echo $data['minus']['num1'] .' - '. $data['minus']['num2'] .' = '. $data['minus']['result']; ?>
                                    </div>
                                    <?php
                                    break;

                                case 'multiply': ?>
                                    <div class="col-md-6">
                                        multiply
                                    </div>
                                    <div class="col-md-6">
                                        <?php echo $data['multiply']['num1'] .' * '. $data['multiply']['num2'] .' = '. $data['multiply']['result']; ?>
                                    </div>
                                    <?php
                                    break;

                                case 'division': ?>
                                    <div class="col-md-6">
                                        division
                                    </div>
                                    <div class="col-md-6">
                                        <?php echo $data['division']['num1'] .' / '. $data['division']['num2'] .' = '. $data['division']['result']; ?>
                                    </div>
                                    <?php
                                    break;
                                
                                case 'sqrt': ?>
                                    <div class="col-md-6">
                                        sqrt
                                    </div>
                                    <div class="col-md-6">
                                        <?php echo $data['sqrt']['num'] .' = '. $data['sqrt']['result']; ?>
                                    </div>
                                    <?php
                                    break;

                                case 'percent': ?>
                                <div class="col-md-6">
                                    percent
                                </div>
                                <div class="col-md-6">
                                    <?php echo $data['percent']['num1'] .' % '. $data['percent']['num2'] .' = '. $data['percent']['result']; ?>
                                </div>
                                <?php
                                break;

                                case 'memory': ?>
                                    <div class="col-md-6">
                                        memory
                                    </div>
                                    <div class="col-md-6">
                                        <?php echo $data['memory']['num1'] .' * '. $data['memory']['num2'] .' - '. $data['memory']['num3'] .' * '. $data['memory']['num4'].' = '. $data['memory']['result']; ?>
                                    </div>
                                    <?php
                                    break;
                            }
                        }
                    }
                    ?>


            </div>


        </div>
         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         <!-- Include all compiled plugins (below), or include individual files as needed -->
         <script src="<?php echo PATH;?>templates/js/bootstrap.min.js"></script>

    </body>
</html>

