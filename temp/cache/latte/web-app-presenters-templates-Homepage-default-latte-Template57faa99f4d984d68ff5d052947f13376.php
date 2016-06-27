<?php
// source: C:\wamp\www\web\app\presenters/templates/Homepage/default.latte

class Template57faa99f4d984d68ff5d052947f13376 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('b823c6342e', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block title
//
if (!function_exists($_b->blocks['title'][] = '_lbe3f082566f_title')) { function _lbe3f082566f_title($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>Úvod<?php
}}

//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lbf37c03f5d6_content')) { function _lbf37c03f5d6_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12 text-center">
                <div id="carousel-example-generic" class="carousel slide">
                    <!-- Indicators -->
                    <ol class="carousel-indicators hidden-xs">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>  
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" style="max-height: 550px">
                        <div class="item active">
<?php $iterations = 0; foreach ($galery as $img) { ?>
                                <a href="http://localhost/web/www/reference/?referenceId=<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($img->reference_id), ENT_COMPAT) ?>
"> <?php if ($img->homeImg == 1) { ?><img class="img-responsive img-full" src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ;echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($img->imgUrl), ENT_COMPAT) ?>
" alt=""><?php } ?>
</a>
<?php $iterations++; } ?>
                        </div>
                        <div class="item">
<?php $iterations = 0; foreach ($galery as $img) { ?>
                                <a href="http://localhost/web/www/reference/?referenceId=<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($img->reference_id), ENT_COMPAT) ?>
"><?php if ($img->homeImg == 2) { ?><img class="img-responsive img-full" src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ;echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($img->imgUrl), ENT_COMPAT) ?>
" alt=""><?php } ?>
</a>
<?php $iterations++; } ?>
                        </div>
                        <div class="item">
<?php $iterations = 0; foreach ($galery as $img) { ?>
                                <a href="http://localhost/web/www/reference/?referenceId=<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($img->reference_id), ENT_COMPAT) ?>
"><?php if ($img->homeImg == 3) { ?><img class="img-responsive img-full" src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ;echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($img->imgUrl), ENT_COMPAT) ?>
" alt=""><?php } ?>
</a>
<?php $iterations++; } ?>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="icon-prev"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="icon-next"></span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="col-lg-12">
<?php if ($user->loggedIn) { ?>                        <a class="btn btn-default button" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Homepage:setImgs"), ENT_COMPAT) ?>
">Nastaviť obrázky</a>
<?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"  data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>              
                        </button> 
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="underImg dropdown vykur">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Vykurovanie<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="http://www.ivarsk.sk/sk/rozdelovace-a-podlahove-vykurovanie-rozcestnik">podlahové,stenové, stropné</a></li>
                                    <li><a href="http://www.usske.sk/sk/produkty/radiatory-korad">panelové radiátory</a></li>
                                    <li><a href="http://www.isan.cz/cs/produkty/typy-produktu/koupelnove-radiatory">rebríkové radiátory</a></li>
                                </ul>
                            <li class="underImg dropdown tept">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tepelná technika<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="http://www.ivarsk.sk/sk/produkty-ivar-tt">tepelné čerpadlá, solárne systémy</a></li>
                                    <li><a href="http://www.junkers.sk/junkers-produkty/">plynové kotly, solárne systémy</a></li>
                                    <li><a href="http://www.atmos.eu/">kotly na drevo, pelety</a></li>
                                    <li><a href="http://www.varimatik.cz/">kotly na uhlie</a></li>    
                                </ul>
                            <li class="underImg dropdown voda">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Voda<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="http://www.ivarsk.sk/sk/produkty-gel">úprava a filtrácia</a></li>
                                    <li><a href="http://www.ivarsk.sk/sk/dab-pump-cerpacia-technika">čerpacia technika</a></li>
                                    <li><a href="http://www.pipelife.sk/sk/sortiment/vnutorny-odpad.php">vnútorný odpad</a></li>
                                </ul>
                            <li class="underImg reg"><a href="http://www.ktr-adex.cz/">Regulácia adex</a></li>

                        </ul>
                    </div>
                </nav>
            </div>

        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr><h2 class="intro-text text-center">
                    <strong>Posledná pridaná referencia</strong>
                </h2>
                <hr>
                <div class="clearfix"></div>
<?php $iterations = 0; foreach ($references as $reference) { ?>                <div class="col-lg-12">
                    <div class="col-md-8 text-center">
                        <h2><?php echo Latte\Runtime\Filters::escapeHtml($reference->title, ENT_NOQUOTES) ?>

                            <br>
                            <small><?php echo Latte\Runtime\Filters::escapeHtml($template->date($reference->created_at, 'F j, Y'), ENT_NOQUOTES) ?></small>
                        </h2>                       
                        <p class="text-left pReferences"><strong>Použité technológie: </strong><?php echo $template->truncate($reference->technologies, 60) ?></p> 
                        <p class="text-left pReferences"><strong>Použité zariadenia: </strong><?php echo $template->truncate($reference->devices, 60) ?></p>
                    </div>

<?php $iterations = 0; foreach ($galery as $img) { ?>                    <div class="col-md-4">
<?php if ($reference->id == $img->reference_id && $img->mainImg == 1) { ?>                        <a href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ;echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($img->imgUrl), ENT_COMPAT) ?>" data-lightbox="lalal">
<?php if ($reference->id == $img->reference_id && $img->mainImg == 1) { ?>                            <img src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ;echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($img->imgUrl), ENT_COMPAT) ?>" id="galeryImg" class="responsive" alt="">
<?php } ?>
                        </a>
<?php } ?>
                    </div>
<?php $iterations++; } ?>
                    <div class="col-lg-12 text-center">
                        <a class="btn btn-default btn-lg" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Reference:default", array($reference->id)), ENT_COMPAT) ?>
">Ukázať viac</a>
                    </div>
                </div>
<?php $iterations++; } ?>


            </div>    

            <div class="col-lg-12 text-center">
                <ul class="pager">
                    <li class="next"><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("References:choose"), ENT_COMPAT) ?>
">Prejsť na referencie &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>


<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    });
</script> 




<?php
}}

//
// end of blocks
//

// template extending

$_l->extends = empty($_g->extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $_g->extended = TRUE;

if ($_l->extends) { ob_start();}

// prolog Nette\Bridges\ApplicationLatte\UIMacros

// snippets support
if (empty($_l->extends) && !empty($_control->snippetMode)) {
	return Nette\Bridges\ApplicationLatte\UIRuntime::renderSnippets($_control, $_b, get_defined_vars());
}

//
// main template
//
if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['title']), $_b, get_defined_vars())  ?>

<?php $_l->tmp = $_control->getComponent("flashMessages"); if ($_l->tmp instanceof Nette\Application\UI\IRenderable) $_l->tmp->redrawControl(NULL, FALSE); $_l->tmp->render() ;call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars())  ?>



<?php
}}