<?php
/* Smarty version 3.1.31, created on 2017-12-21 16:18:47
  from "D:\wamp\www\test_smarty\inscription.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a3bdee776a829_50611461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33900c16b4dabc9c80995861232f2169736316b1' => 
    array (
      0 => 'D:\\wamp\\www\\test_smarty\\inscription.html',
      1 => 1513873125,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:includes/bas.inc.php' => 1,
  ),
),false)) {
function content_5a3bdee776a829_50611461 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>


<!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <span class="name"><?php echo $_smarty_tpl->tpl_vars['intitule']->value;?>
</span>
                        <hr class="star-light">
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- Connexion Section -->
    <section>
    <!--  <h1 style='color: red'>Ma vue html smarty </h1> -->

    	<div class="container ce">
    		<div class="row">

    			<form class="col-md-4 col-md-offset-4" action="inscription.php" method="POST">	<!-- on centre le bloc formulaire -->
    				<!--<div class="col-sm-3">  -->

  					<div class="form-group">
  						<label> Adresse e-mail : </label>
  						<input type="email" class="form-control" <?php echo $_smarty_tpl->tpl_vars['value_mail']->value;?>
 name="input_email" aria-describedby="emailHelp" placeholder="nom@exemple.com" <?php echo $_smarty_tpl->tpl_vars['style_err_mail']->value;?>
>
  					</div>
  					<div class="form-group">
  						<label> Mot de passe : </label>
  						<input type="password" class="form-control" <?php echo $_smarty_tpl->tpl_vars['value_pass1']->value;?>
 name="input_password1" placeholder='Entrez le mot de passe' <?php echo $_smarty_tpl->tpl_vars['style_err_pass1']->value;?>
>
  					</div>
            <div class="form-group">
  						<label> Mot de passe : </label>
  						<input type="password" class="form-control" <?php echo $_smarty_tpl->tpl_vars['value_pass2']->value;?>
 name="input_password2" placeholder='Entrez le mot de passe' <?php echo $_smarty_tpl->tpl_vars['style_err_pass2']->value;?>
>
  					</div>
  					<div class="form-group">
  						<button type="submit" class="btn btn-primary btn- pull-right">S'inscrire</button>
  				  </div>
    			</form>

    		</div>
    	</div>
    </section>



<?php $_smarty_tpl->_subTemplateRender('file:includes/bas.inc.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
