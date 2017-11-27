<?php 
/* 
    Template Name: Template slide 1
    Template Post Type: post, sliders_block
*/
?>
<div class="swiper-slide container-fluid" style="background-image: url(<?= get_field('background'); ?>);">
	<div class="row banner container">
		<div class="wrap-img wrap-img-banner">
			<img src="<?= get_field('banner'); ?>" alt="">
		</div>
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>
	</div>
	<div class="row container">
		<a href="#<?= get_field('link-button'); ?>" class="link-button"><button><?= get_field('button'); ?></button></a>
	</div>
</div>

<div class="pl-modal pl-modal-call modal fade" id="<?= get_field('link-button'); ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="modal-body">
            
            <div class="box-form-modal container wow fadeIn">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                    <div class="row">
                        <div class="col-md-4">
                        <img src="<?= get_template_directory_uri();?>/assets/images/manager.jpg" />
                        </div>
                        <div class="col-md-8">
                        <h3>Здравствуйте!</h3>
                        <h4>Меня зовут Галина, я&nbsp;специалист УСК «Сибиряк»</h4>
                        <p>Оставьте свои контактные данные и&nbsp;я&nbsp;расскажу Вам все&nbsp;подробности акции.</p>
                        </div>
                    </div>
                    <hr>
                    <br>
                    </div>
                </div>
                <div class="row modal-form">
                    <div class="col-sm-8 col-sm-offset-2 col-md-10 col-md-offset-1">
                        <?php echo do_shortcode( get_field('shortcode_form') ); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 text-xs-center">
                        <div class="politik">
                            <h4>Ваши данные под защитой</h4>
                            <a href="#" data-toggle="modal" data-target="#plModal-polit" data-dismiss="modal">Политика конфиденциальности</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
    