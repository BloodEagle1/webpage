<?php
// source: C:\wamp\www\bakalarka_web\app\presenters/templates/Offer/showT.latte

class Templatedfde1b332a0df67a6881d8453ffa89b6 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('1c8805a1af', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lbf7bf19ab50_content')) { function _lbf7bf19ab50_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr><h2 class="intro-text text-center">
                    <strong>Solar</strong>
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