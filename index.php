<?php
	include ("includes/connexion.inc.php");
	include ("includes/verif_connexion_user.inc.php");
	include ("includes/haut.inc.php");

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

    <!-- About Section -->
    <section>
        <div class="container">
            <div class="row">
							<?php
								if (isset($_GET['a']) && !empty($_GET['a'])) {
										//	echo var_dump($_GET);

									if($_GET['a'] == 'mod' ){
										//echo 'modification...';
										echo '<form method="GET" action="article.php">';
										?>
												<div class="col-sm-10">
													<div class="form-group">
														<?php echo '<textarea id="message" name="message" class="form-control" placeholder="Message">'.$_GET['contenu'] .'</textarea>'; ?>
														<!-- ajouter le label -->
													</div>
														<input type="hidden"  name="a"  value="mod">
														<?php echo "<input type='hidden'  name='id'  value=" . $_GET['id'] .">" ?>

												</div>
												<div class="col-sm-2">
													<button type="submit" class="btn btn-success btn-lg">Envoyer</button>
												</div>
											</form>
									<?php
									}
								}
								else{
									echo '<form method="POST" action="message.php">';
									?>
												<div class="col-sm-10">
													<div class="form-group">
														<?php
														if ($connecte_util){
															echo '<textarea id="message" name="message" class="form-control" placeholder="Message"></textarea>';
														}
														else{} // sinon on affiche pas l'input de texte
														?>
														<!-- ajouter le label -->
													</div>
												</div>
												<div class="col-sm-2">
													<?php
														if ($connecte_util){echo 	'<button type="submit" class="btn btn-success btn-lg">Envoyer</button>';} // si pas connecté, pas de bouton de validation
												 	?>
												</div>
											</form>
									<?php
								}
							?>
        	</div>

					<?php
	/************************************** Recuperation des messages triés par date ************************************/

						$sql="SELECT * FROM messages ORDER BY date DESC";
						$stmt=$pdo->query($sql);
					?>
					<br /> <br />


          <div class="row">
              <div class="col-md-12">

								<?php while ($data = $stmt->fetch()){
									echo "<blockquote><p>" .$data['contenu'] . "</p><footer>" .date("F j, Y, g:i a",$data['date']) ."</footer></blockquote>";

									if ($connecte_util){
										echo '<a href="article.php?a=sup&id=' . $data['id'] . '", class="btn btn-danger">' . 'Supprimer</a>';
										echo '<a href="index.php?a=mod&id=' . $data['id'] . '&contenu=' . $data['contenu'] .'", class="btn btn-warning">' . 'Modifier</a>';
									}
										//echo date ("d/m/Y H:i:s", /*timestamp - horodateur*/$data ['date']);
									echo '<br /> <br />';
								}
								?>


								<?php //echo $data['contenu']; echo $data['id']; ?>
								
                </div>
            </div>
        </div>
    </section>

<?php
include ("includes/bas.inc.php");
?>
