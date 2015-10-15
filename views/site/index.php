<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Bbs */
/* @var $form yii\widgets\ActiveForm */
?>

    <!-- Preloader -->

    <div id="preloader">
        <div id="status"></div>
    </div>

    <!-- Home start -->

    <section id="home" class="pfblock-image screen-height">
        <div class="home-overlay"></div>
        <div class="language" id="language">  
            <?=Yii::t('app', 'P0021') ?> 
            <select class="select" id="input" class="form-control" required="required">
                <option value="EN"> <?=Yii::t('app', 'P0023') ?></option>
                <option value="JP"><?=Yii::t('app', 'P0024') ?></option>
                <option value="VI"><?=Yii::t('app', 'P0022') ?></option>
              
            </select>
            
        </div>
        <div class="intro">
            <div class="start"><?=Yii::t('app', 'P0007') ?></div>
            <div class="start"><?=Yii::t('app', 'P0008') ?></div>
            <h1><?=Yii::t('app', 'P0009') ?></h1>
            
        </div>
        

        <a href="#services">
        <div class="scroll-down">
            <span>
                <i class="fa fa-angle-down fa-2x"></i>
            </span>
        </div>
        </a>

    </section>

    <!-- Home end -->

    <!-- Navigation start -->

    <header class="header">

        <nav class="navbar navbar-custom" role="navigation">

            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#home"><?=Yii::t('app', 'P0001') ?></a>
                </div>

                <div class="collapse navbar-collapse" id="custom-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#services"><?=Yii::t('app', 'P0003') ?></a></li>
                        <li><a href="#portfolio"><?=Yii::t('app', 'P0004') ?></a></li>
                        <li><a href="#skills"><?=Yii::t('app', 'P0002') ?></a></li>
<!--                         <li><a href="#testimonials"><?=Yii::t('app', 'P0006') ?></a></li> -->
                        <li><a href="#contact"><?=Yii::t('app', 'P0005') ?></a></li>
                    </ul>
                </div>

            </div><!-- .container -->

        </nav>

    </header>

    <!-- Navigation end -->

    <!-- Services start -->

    <section id="services" class="pfblock pfblock-gray">
        <div class="container">
            <div class="row">

                <div class="col-sm-6 col-sm-offset-3">

                    <div class="pfblock-header wow fadeInUp">
                        <h2 class="pfblock-title"><?=Yii::t('app', 'P0010') ?></h2>
                        <div class="pfblock-line"></div>
                        
                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-sm-3">

                    <div class="iconbox wow slideInLeft">
                        <div class="iconbox-icon">
                            <span class="icon-picture"></span>
                        </div>
                        <div class="iconbox-text">
                            <h3 class="iconbox-title"><?=Yii::t('app', 'P0011') ?></h3>
                            <div class="iconbox-desc">
                                <?=Yii::t('app', 'P0015') ?>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-sm-3">

                    <div class="iconbox wow slideInLeft">
                        <div class="iconbox-icon">
                            <span class="icon-puzzle"></span>
                        </div>
                        <div class="iconbox-text">
                            <h3 class="iconbox-title"><?=Yii::t('app', 'P0012') ?></h3>
                            <div class="iconbox-desc">
                                <?=Yii::t('app', 'P0016') ?>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-sm-3">

                    <div class="iconbox wow slideInRight">
                        <div class="iconbox-icon">
                            <span class="icon-wrench"></span>
                        </div>
                        <div class="iconbox-text">
                            <h3 class="iconbox-title"><?=Yii::t('app', 'P0013') ?></h3>
                            <div class="iconbox-desc">
                                <?=Yii::t('app', 'P0017') ?>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-sm-3">

                    <div class="iconbox wow slideInRight">
                        <div class="iconbox-icon">
                            <span class="icon-pencil"></span>
                        </div>
                        <div class="iconbox-text">
                            <h3 class="iconbox-title"><?=Yii::t('app', 'P0014') ?></h3>
                            <div class="iconbox-desc">
                                <?=Yii::t('app', 'P0018') ?>
                            </div>
                        </div>
                    </div>

                </div>

            </div><!-- .row -->
        </div><!-- .container -->
    </section>

    <!-- Services end -->
    
    <!-- Portfolio start -->

    <section id="portfolio" class="pfblock">
        <div class="container">
            <div class="row">

                <div class="col-sm-6 col-sm-offset-3">

                    <div class="pfblock-header wow fadeInUp">
                        <h2 class="pfblock-title"><?=Yii::t('app', 'P0019') ?></h2>
                        <div class="pfblock-line"></div>
                        <div class="pfblock-subtitle">
                            <?=Yii::t('app', 'P0020') ?>
                        </div>
                    </div>

                </div>

            </div><!-- .row -->
            
            
            <div class="row">
                <?php foreach ($projectResult as $projectResult) { ?>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="grid wow zoomIn">
                            <figure class="effect-bubba">
                                <a href="<?=$projectResult->link?>">
                                <img src="images/project/<?=$projectResult->image?>" alt="img01"/>
                                <figcaption>
                                    <h2><?=$projectResult->name?></h2>
                                    <p><?=$projectResult->getProjectTypeName()?></p>
                                </figcaption>           
                                </a>
                            </figure>
                        </div>
                    </div>   
                <?php } ?>
            </div>
        </div><!-- .contaier -->
    </section>
    <!-- Portfolio end -->
    <!-- Skills start -->
    <section class="pfblock pfblock-gray" id="skills">
            <div class="container">
                <div class="row skills">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="pfblock-header wow fadeInUp">
                                <h2 class="pfblock-title"><?=Yii::t('app', 'P0026') ?></h2>
                                <div class="pfblock-line"></div>
                                <div class="pfblock-subtitle">
                                    <?=Yii::t('app', 'P0027') ?>
                                </div>
                            </div>
                        </div>
                    </div><!-- .row -->
                    <div class="col-sm-6 col-md-3 text-center">
                        <span data-percent="100" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="">100</span>
                        </span>
                        <h3 class="text-center"><?=Yii::t('app', 'P0028') ?></h3>
                    </div>
                    <div class="col-sm-6 col-md-3 text-center">
                        <span data-percent="100" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="">90</span>
                        </span>
                        <h3 class="text-center"><?=Yii::t('app', 'P0029') ?></h3>
                    </div>
                    <div class="col-sm-6 col-md-3 text-center">
                        <span data-percent="100" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="">85</span>
                        </span>
                        <h3 class="text-center"><?=Yii::t('app', 'P0030') ?></h3>
                    </div>
                    <div class="col-sm-6 col-md-3 text-center">
                        <span data-percent="100" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="">95</span>
                        </span>
                        <h3 class="text-center"><?=Yii::t('app', 'P0031') ?></h3>
                    </div>
                    
                </div><!--End row -->
            
            </div>
        
    </section>
    
    <!-- Skills end -->

    <!-- CallToAction start -->

    <section class="calltoaction">
        <div class="container">

            <div class="row">

                <div class="col-md-12 col-lg-12">
                    <h2 class="wow slideInRight" data-wow-delay=".1s"><?=Yii::t('app', 'P0032') ?></h2>
                    <div class="calltoaction-decription wow slideInRight" data-wow-delay=".2s">
                        <?=Yii::t('app', 'P0033') ?>
                    </div>
                </div>

                <div class="col-md-12 col-lg-12 calltoaction-btn wow slideInRight" data-wow-delay=".3s">
                    <a href="#contact" class="btn btn-lg"><?=Yii::t('app', 'P0034') ?></a>
                </div>

            </div><!-- .row -->
        </div><!-- .container -->
    </section>

    <!-- CallToAction end -->

    <!-- Contact start -->

    <section id="contact" class="pfblock">
        <div class="container">
            <div class="row">

                <div class="col-sm-6 col-sm-offset-3">

                    <div class="pfblock-header">
                        <h2 class="pfblock-title"><?=Yii::t('app', 'P0035') ?></h2>
                        <div class="pfblock-line"></div>
                        <div class="pfblock-subtitle">
                           
                        </div>
                    </div>

                </div>

            </div><!-- .row -->

            <div class="row">

                <div class="col-sm-6 col-sm-offset-3">
                    <?php $form = ActiveForm::begin(); ?>
                    <div class="ajax-hidden">
                            <div class="form-group wow fadeInUp">
                                <label class="sr-only" for="c_name"></label>
                                <?= $form->field($model, 'name')->textInput(["id"=>"c_name", "class"=>"form-control","placeholder"=>Yii::t("app", "P0036")])->label(false) ?>
                            </div>
                            <div class="form-group wow fadeInUp" data-wow-delay=".1s">
                                <label class="sr-only" for="c_email"></label>
                                <?= $form->field($model, 'email')->textInput(["id"=>"c_name", "class"=>"form-control","placeholder"=>Yii::t("app", "P0037")])->label(false) ?>
                            </div>

                            <div class="form-group wow fadeInUp" data-wow-delay=".2s">
                                <?= $form->field($model, 'detail')->textArea(["id"=>"c_message", "rows"=>"7","class"=>"form-control","placeholder"=>Yii::t("app", "P0038")])->label(false) ?>
                            </div>
                            <?= Html::submitButton(Yii::t("app", "P0039"), ['class' => 'btn btn-lg btn-block wow fadeInUp',"data-wow-delay"=>".3s"]) ?>
                            <div class="ajax-response"></div>
                    <?php ActiveForm::end(); ?>
                </div>

            </div><!-- .row -->
        </div><!-- .container -->
    </section>

    <!-- Contact end -->

    <!-- Footer start -->

    <footer id="footer">
        <div class="container">
            <div class="row">

                <div class="col-sm-12">

                    <ul class="social-links">
                        <li><a href="index.html#" class="wow fadeInUp"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="index.html#" class="wow fadeInUp" data-wow-delay=".1s"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="index.html#" class="wow fadeInUp" data-wow-delay=".2s"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="index.html#" class="wow fadeInUp" data-wow-delay=".5s"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>

            </div><!-- .row -->
        </div><!-- .container -->
    </footer>

    <!-- Footer end -->

    <!-- Scroll to top -->

    <div class="scroll-up">
        <a href="#home"><i class="fa fa-angle-up"></i></a>
    </div>
    
    <!-- Scroll to top end-->

    <!-- Javascript files -->

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/imagesloaded.pkgd.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.easypiechart.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.cbpQTRotator.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/select.js"></script>
    <script src="js/setValueSelect.js"></script>
</body>
</html>