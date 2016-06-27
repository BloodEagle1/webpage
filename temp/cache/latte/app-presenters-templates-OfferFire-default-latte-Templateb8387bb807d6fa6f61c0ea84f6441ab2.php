<?php
// source: C:\wamp\www\bakalarka_web\app\presenters/templates/OfferFire/default.latte

class Templateb8387bb807d6fa6f61c0ea84f6441ab2 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('a250e9e148', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb1451195fc3_content')) { function _lb1451195fc3_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr><h2 class="intro-text text-center">
                    <strong>Tepelná technika</strong>
                </h2>
                <hr>

<?php $iterations = 0; foreach ($offers as $offer) { ?>                <div class="col-lg-12">
                    <div class="col-lg-12 text-center">
                        <h2><small><?php echo Latte\Runtime\Filters::escapeHtml($offer->title, ENT_NOQUOTES) ?></small>
                            <br>

                        </h2>
                        <p align="left"><?php echo Latte\Runtime\Filters::escapeHtml($offer->content, ENT_NOQUOTES) ?>

                        </p> 
                    </div>

                    <div class="col-lg-12">
<?php if ($user->loggedIn) { ?>                <a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("edit", array($offer->id)), ENT_COMPAT) ?>
">Upravit príspevok</a>
<?php } ?>
            </div>
                </div>    
<?php $iterations++; } ?>

                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
                </div><?php
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
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars()) ; 
}}