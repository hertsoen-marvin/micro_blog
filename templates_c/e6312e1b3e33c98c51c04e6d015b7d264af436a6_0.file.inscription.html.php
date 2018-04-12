<?php
/* Smarty version 3.1.31, created on 2018-04-12 19:42:44
  from "D:\wamp\www\micro_blog\inscription.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5acfb6b4d51851_83383162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6312e1b3e33c98c51c04e6d015b7d264af436a6' => 
    array (
      0 => 'D:\\wamp\\www\\micro_blog\\inscription.html',
      1 => 1523562161,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5acfb6b4d51851_83383162 (Smarty_Internal_Template $_smarty_tpl) {
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

            <div class="login-panel panel panel-default">
                <div class="panel-heading"> Complétez les champs requis :
                </div>

                <div class="panel-body">
                  <div class="form-group">
                    <label> Adresse e-mail : </label>
        						<input type="email" class="form-control" <?php echo $_smarty_tpl->tpl_vars['value_mail']->value;?>
 id="input_email" name="input_email" desc="l'Email" aria-describedby="emailHelp" placeholder="nom@exemple.com">
                  </div>
                  <div class="form-group">
        						<label> Mot de passe : </label>
        						<input type="password" class="form-control" <?php echo $_smarty_tpl->tpl_vars['value_pass1']->value;?>
 id="input_password1" name="input_password1" desc="Le mot de passe" placeholder='Entrez le mot de passe' >
        					</div>
                  <div class="form-group">
        						<label> Mot de passe : </label>
        						<input type="password" class="form-control" <?php echo $_smarty_tpl->tpl_vars['value_pass2']->value;?>
 id="input_password2" name="input_password2" desc="La confirmation" placeholder='Confirmez le mote de passe' >
        					</div>
                  <div class="form-group">
        						<button type="submit" id='btn' class="btn btn-primary pull-right">S'inscrire</button>
        				  </div>
                </div>
            </div>
    			</form>

    		</div>
    	</div>
    </section>
    <?php echo '<script'; ?>
 src="inscription.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php }
}
