<?php
include_once '../cliente/topo.php';
include_once'../class/Produtos.class.php';
$objProduto=new Produtos();
$retorno=$objProduto->listas("LIMIT 8");

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
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#"><?php echo $linha['nome']?></a></h3>
												<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
                                                                                    	<div class="add-to-cart">
                                                                                            <a href="?idprodutos=<?php echo $linha['idprodutos']?>&carrinho"><button class="add-to-cart-btn"  onclick="location.href='index.php?idprodutos=<?php echo $linha['idproduto']?>';"><i class="fa fa-shopping-cart"></i> Adicionar</button></a>
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