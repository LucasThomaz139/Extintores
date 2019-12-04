<?php
include_once '../cliente/topo.php';
include_once'../class/Produtos.class.php';
$linha = new Produtos();
$retorno= $linha->listas("LIMIT 8");

?>
	
<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
									 <?php
                                                                            foreach($retorno as $linha){


                                                                            ?>	
                                                                            
                                                                            <!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="../imagem/<?php echo $linha['imagem'];?>" alt="">
												
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#"><?php echo $linha['tipo']?></a></h3>
												
												
												
											</div>
                                                                                    	<div class="add-to-cart">
                                                                                           
                                                                                            <a href="descre.php?idprodutos=<?php echo $linha['idprodutos']?>"><button type="submit" href="descre.php?idprodutos=<?php $linha['idprodutos']?>" >reservar</button></a>
                                                                                            <a href="descre.php?idprodutos=<?php echo $linha['idprodutos']?>"><button type="submit" href="descre.php?idprodutos=<?php $linha['idprodutos']?>" >detalhe</button></a>
											</div>
										</div>
                                                                            <?php
                                                                            }
                                                                            ?>
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->


		
<?php
include_once 'rodape.php';
?>