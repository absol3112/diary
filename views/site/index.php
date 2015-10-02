<?php

/* @var $this yii\web\View */

$this->title = 'This is my diary';
?>
<header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 style="color:#fff"><?=Yii::t('app', 'P0006') ?></h1>
                <hr>
                <p>
                    
                </p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll"><?=Yii::t('app', 'P0007') ?></a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading"><?=Yii::t('app', 'P0013') ?></h2>
                    <hr class="light">
                    <p class="text-faded"><?=Yii::t('app', 'P0005') ?></p>
                    <a href="#services" class="btn btn-default btn-xl page-scroll"><?=Yii::t('app', 'P0014') ?></a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?=Yii::t('app', 'P0010') ?></h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
            <?php foreach ($introduceModel[0]->getAttributes() as $key => $value) { ?>
                <?php if ($key == "name_id") {
                    continue;
                }else{ ?>
                
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-diamond wow bounceIn text-primary"></i>
                            <h3><?=$introduceModel[0]->getAttributeLabel($key)?></h3>
                            <p class="text-muted">
                            <?php if ($key=="sex") {
                                ($value == 0) ? $value = Yii::t('app', 'P0019') : $value = Yii::t('app', 'P0020') ;
                            } ?> 
                            <?php if ($key=="birth") {
                                $value = date("Y") - date($value);
                                $value = $value . " " . Yii::t('app', 'P0021') ;
                            } ?>
                            <?php if ($key=="job" && $value =='Developer') {
                                $value = Yii::t('app', 'P0022') ;
                            } ?>
                            <?php if ($key=="name" && $value =='Nguyen Chi Thang') {
                                $value = Yii::t('app', 'P0023') ;
                            } ?>
                                <?=$value?>
                            </p>
                        </div>
                    </div>
                
            <?php }} ?>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#portfolio" class="btn btn-primary btn-xl page-scroll"><?=Yii::t('app', 'P0015') ?></a>
                </div>
            </div>
        </div>

    </section>

    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
        <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?=Yii::t('app', 'P0011') ?></h2>
                    <hr class="primary">
                </div>
        <?php foreach ($projectModel as $projectModel) {?>     
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                    <?php if (empty($projectModel->image)) {?>
                        <img src="img/project/empty.gif" class="img-responsive" alt="">
                    <?php }else{ ?>
                        <img src="img/project/<?=$projectModel->image?>" class="img-responsive" alt="">
                    <?php } ?>
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    <?=$projectModel->type?>
                                </div>
                                <div class="project-name">
                                    <?=$projectModel->project_name?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>

    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading"><?=Yii::t('app', 'P0016') ?></h2>
                    <hr class="primary">
                    <p><?=Yii::t('app', 'P0017') ?></p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <script type="text/javascript" src="http://www.skypeassets.com/i/scom/js/skype-uri.js"></script>
                    <div id="SkypeButton_Call_absol3112_1"></div>
                    <script type="text/javascript">
                        Skype.ui({
                          "name": "call",
                          "element": "SkypeButton_Call_absol3112_1",
                          "participants": ["absol3112"],
                          "imageSize": 32
                        });
                      </script>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <div><a href="mailto:absol3112@gmail.com">absol3112@gmail.com</a></div>
                </div>
            </div>
        </div>
    </section>
    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <a href="#" class="btn btn-default btn-xl wow tada"><?=Yii::t('app', 'P0018') ?></a>
            </div>
        </div>
    </aside>