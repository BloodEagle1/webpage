<?php
// source: C:\wamp\www\bakalarka_web\app\presenters/templates/Contact/show.latte

class Template232915d24a7603299ff1c07dea7f1fb6 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('77a1ee439d', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb2781c0988e_content')) { function _lb2781c0988e_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Kontakt
                    <strong>Vašo Sloboda</strong>
                </h2>
                <hr>
            </div>
            <div class="col-md-8">
                <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?ll=48.922453,20.540904&z=18&t=m&hl=sk-SK&gl=US&mapclient=apiv3"></iframe>

            </div>
<?php $iterations = 0; foreach ($contacts as $contact) { ?>
                <div class="col-md-4" >
                    <div id="contact">
                        <p>Telefon:
                            <strong><?php echo Latte\Runtime\Filters::escapeHtml($contact->phone, ENT_NOQUOTES) ?></strong>
                        </p>
                        <p>Email:
                            <strong><?php echo Latte\Runtime\Filters::escapeHtml($contact->email, ENT_NOQUOTES) ?></strong>
                        </p>
                        <p>Adresa:
                            <strong><?php echo Latte\Runtime\Filters::escapeHtml($contact->adress, ENT_NOQUOTES) ?></strong>
                        </p>
                    </div>
                    <div id="editForm">
                    <?php if ($user->loggedIn) { $_l->tmp = $_control->getComponent("editForm"); if ($_l->tmp instanceof Nette\Application\UI\IRenderable) $_l->tmp->redrawControl(NULL, FALSE); $_l->tmp->render() ;} ?>

                </div>
<?php if ($user->loggedIn) { ?>                <div id="edit"><a>Upravit</a></div>
<?php } ?>
            </div>  
<?php $iterations++; } ?>
        <div class="clearfix"></div>
    </div>
</div>
</div>

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
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars())  ?>

<?php
}}