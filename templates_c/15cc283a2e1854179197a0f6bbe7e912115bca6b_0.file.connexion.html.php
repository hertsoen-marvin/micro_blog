<?php
/* Smarty version 3.1.31, created on 2018-01-19 17:32:17
  from "D:\wamp\www\micro_blog\connexion.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a622ba1a18d89_59633707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15cc283a2e1854179197a0f6bbe7e912115bca6b' => 
    array (
      0 => 'D:\\wamp\\www\\micro_blog\\connexion.html',
      1 => 1516382193,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a622ba1a18d89_59633707 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <span class="name">Le fil</span>
                        <hr class="star-light">
                    </div>
                </div>
            </div>
        </div>
    </header>

<!-- Connexion Section -->
<section>
	<div class="container ce">
		<div class="row">
			<form class="col-md-4 col-md-offset-4" action="connexion.php" method="POST">	<!-- on centre le bloc formulaire -->
				<!--<div class="col-sm-3">  -->
					<div class="login-panel panel panel-default">
							<div class="panel-heading"> Veuillez vous authentifier :</div>
							<div class="panel-body">
								<div class="form-group">
								<label> Adresse e-mail : </label>
								<input type="email" class="form-control" name="input_email" aria-describedby="emailHelp" placeholder="nom@exemple.com">
							</div>
							<div class="form-group">
								<label> Mot de passe : </label>
								<input type="password" class="form-control" name="input_password" placeholder="Entrez le mot de passe">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-lg btn-primary btn-block">Entrer</button>
							</div>
						</div>
					</div>
			</form>
		</div>
	</div>
</section>
<?php }
}
