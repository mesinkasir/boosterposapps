<?php require_once 'php_action/db_connect.php' ?>
<?php require_once 'includes/header.php'; ?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-white">
			<div class="panel-body">
				<div class="remove-messages"></div>
				<div class="div-action pull pull-right" style="padding-bottom:20px;">
					<button class="btn btn-primary button1" data-toggle="modal" id="addProductModalBtn" data-target="#addProductModal"> Add Product </button>
				</div>
				<table class="table" id="manageProductTable">
					<thead>
						<tr>
							<th class="bg-primary text-white" style="width:10%;">Photo</th>							
							<th class="bg-primary text-white">Product</th>
							<th class="bg-primary text-white">Brand</th>
							<th class="bg-primary text-white">Categories</th>
							<th class="bg-primary text-white">Status</th>
							<th class="bg-primary text-white" style="width:15%;">Set</th>
						</tr>
					</thead>
				</table>
			</div> 
		</div> 
	</div>
</div> 
<div class="modal fade" id="addProductModal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	<form class="form-horizontal" id="submitProductForm" action="php_action/createProduct.php" method="POST" enctype="multipart/form-data">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">New Product</h4>
	      </div>
	      <div class="modal-body" style="max-height:450px; overflow:auto;">
	      	<div id="add-product-messages"></div>
	      	<div class="form-group">
	        	<label for="productImage" class="col-sm-3 control-label">Photo / Image </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
							<div id="kv-avatar-errors-1" class="center-block" style="display:none;"></div>							
					    <div class="kv-avatar center-block">					        
					        <input type="file" class="form-control" id="productImage" placeholder="Product name" name="productImage" class="file-loading" style="width:auto;"/>
					    </div>
				    </div>
	        </div>
	        <div class="form-group">
	        	<label for="productName" class="col-sm-3 control-label">Name Product </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="productName" placeholder="Product Name" name="productName" autocomplete="off">
				    </div>
	        </div>
	        <div class="form-group">
	        	<label for="quantity" class="col-sm-3 control-label">Stock </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="quantity" placeholder="Stock" name="quantity" autocomplete="off">
				    </div>
	        </div>
	        <div class="form-group">
	        	<label for="rate" class="col-sm-3 control-label">Sell Price </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="rate" placeholder="Sell price" name="rate" autocomplete="off">
				    </div>
	        </div> 
	        <div class="form-group">
	        	<label for="brandName" class="col-sm-3 control-label">Brand </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <select class="form-control" id="brandName" name="brandName">
				      	<option value="">Set Brand</option>
				      	<?php 
				      	$sql = "SELECT brand_id, brand_name, brand_active, brand_status FROM brands WHERE brand_status = 1 AND brand_active = 1";
								$result = $connect->query($sql);

								while($row = $result->fetch_array()) {
									echo "<option value='".$row[0]."'>".$row[1]."</option>";
								} 
				      	?>
				      </select>
				    </div>
	        </div> 
	        <div class="form-group">
	        	<label for="categoryName" class="col-sm-3 control-label">Categories</label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <select type="text" class="form-control" id="categoryName" placeholder="Select Categories" name="categoryName" >
				      	<option value="">Select Categories</option>
				      	<?php 
				      	$sql = "SELECT categories_id, categories_name, categories_active, categories_status FROM categories WHERE categories_status = 1 AND categories_active = 1";
								$result = $connect->query($sql);

								while($row = $result->fetch_array()) {
									echo "<option value='".$row[0]."'>".$row[1]."</option>";
								}
				      	?>
				      </select>
				    </div>
	        </div> 
	        <div class="form-group">
	        	<label for="productStatus" class="col-sm-3 control-label">Status </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <select class="form-control" id="productStatus" name="productStatus">
				      	<option value="">Set Status</option>
				      	<option value="1">AKtiv</option>
				      	<option value="2">Non Aktiv</option>
				      </select>
				    </div>
	        </div>  	        
	      </div> 
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>
	        <button type="submit" class="btn btn-primary" id="createProductBtn" data-loading-text="Loading..." autocomplete="off"> <i class="glyphicon glyphicon-ok-sign"></i> Save</button>
	      </div>	      
     	</form>	     
    </div>     
  </div>
</div> 
<div class="modal fade" id="editProductModal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Product</h4>
	      </div>
	      <div class="modal-body" style="max-height:450px; overflow:auto;">
	      	<div class="div-loading">
	      		<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
						<span class="sr-only">Loading...</span>
	      	</div>
	      	<div class="div-result">
				  <ul class="nav nav-tabs" role="tablist">
				    <li role="presentation" class="active"><a href="#photo" aria-controls="home" role="tab" data-toggle="tab">Photo / Image</a></li>
				    <li role="presentation"><a href="#productInfo" aria-controls="profile" role="tab" data-toggle="tab">Info Product</a></li>    
				  </ul>
				  <div class="tab-content">
				    <div role="tabpanel" class="tab-pane active" id="photo">
				    	<form action="php_action/editProductImage.php" method="POST" id="updateProductImageForm" class="form-horizontal" enctype="multipart/form-data">
				    	<br />
				    	<div id="edit-productPhoto-messages"></div>
				    	<div class="form-group">
			        	<label for="editProductImage" class="col-sm-3 control-label">Photo Product </label>
			        	<label class="col-sm-1 control-label">: </label>
						    <div class="col-sm-8">							    				   
						      <img src="" id="getProductImage" class="thumbnail rounded-circle" style="width:250px; height:250px;" />
						    </div>
			        </div>  
			      	<div class="form-group">
			        	<label for="editProductImage" class="col-sm-3 control-label">Select Image </label>
			        	<label class="col-sm-1 control-label">: </label>
						    <div class="col-sm-8">
									<div id="kv-avatar-errors-1" class="center-block" style="display:none;"></div>							
							    <div class="kv-avatar center-block">					        
							        <input type="file" class="form-control" id="editProductImage" placeholder="foto Produk" name="editProductImage" class="file-loading" style="width:auto;"/>
							    </div>
						    </div>
			        </div>
			        <div class="modal-footer editProductPhotoFooter">
				        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>
			      </div>
				      </form>
				    </div>
				    <div role="tabpanel" class="tab-pane" id="productInfo">
				    	<form class="form-horizontal" id="editProductForm" action="php_action/editProduct.php" method="POST">				    
				    	<br />

				    	<div id="edit-product-messages"></div>

				    	<div class="form-group">
			        	<label for="editProductName" class="col-sm-3 control-label">Product Name</label>
			        	<label class="col-sm-1 control-label">: </label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control" id="editProductName" placeholder="Name Produk" name="editProductName" autocomplete="off">
						    </div>
			        </div>
			        <div class="form-group">
			        	<label for="editQuantity" class="col-sm-3 control-label">Stock</label>
			        	<label class="col-sm-1 control-label">: </label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control" id="editQuantity" placeholder="Stock" name="editQuantity" autocomplete="off">
						    </div>
			        </div> 
			        <div class="form-group">
			        	<label for="editRate" class="col-sm-3 control-label">Sell Price</label>
			        	<label class="col-sm-1 control-label">: </label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control" id="editRate" placeholder="Input Sell Price" name="editRate" autocomplete="off">
						    </div>
			        </div> 
			        <div class="form-group">
			        	<label for="editBrandName" class="col-sm-3 control-label">Brand</label>
			        	<label class="col-sm-1 control-label">: </label>
						    <div class="col-sm-8">
						      <select class="form-control" id="editBrandName" name="editBrandName">
						      	<option value="">Pilih Merk</option>
						      	<?php 
						      	$sql = "SELECT brand_id, brand_name, brand_active, brand_status FROM brands WHERE brand_status = 1 AND brand_active = 1";
										$result = $connect->query($sql);

										while($row = $result->fetch_array()) {
											echo "<option value='".$row[0]."'>".$row[1]."</option>";
										} 
						      	?>
						      </select>
						    </div>
			        </div>
			        <div class="form-group">
			        	<label for="editCategoryName" class="col-sm-3 control-label">Categories </label>
			        	<label class="col-sm-1 control-label">: </label>
						    <div class="col-sm-8">
						      <select type="text" class="form-control" id="editCategoryName" name="editCategoryName" >
						      	<option value="">Select categories</option>
						      	<?php 
						      	$sql = "SELECT categories_id, categories_name, categories_active, categories_status FROM categories WHERE categories_status = 1 AND categories_active = 1";
										$result = $connect->query($sql);

										while($row = $result->fetch_array()) {
											echo "<option value='".$row[0]."'>".$row[1]."</option>";
										} 
						      	?>
						      </select>
						    </div>
			        </div> 
			        <div class="form-group">
			        	<label for="editProductStatus" class="col-sm-3 control-label">Status</label>
			        	<label class="col-sm-1 control-label">: </label>
						    <div class="col-sm-8">
						      <select class="form-control" id="editProductStatus" name="editProductStatus">
						      	<option value="">Set status</option>
						      	<option value="1">Aktif</option>
						      	<option value="2">Non Aktif</option>
						      </select>
						    </div>
			        </div>
			        <div class="modal-footer editProductFooter">
				        <button type="button" class="btn btn-default" data-dismiss="modal"> Close</button>
				        <button type="submit" class="btn btn-primary" id="editProductBtn" data-loading-text="Loading..."> Save</button>
				      </div>
			        </form> 
				    </div>  
				  </div>
				</div>
	      </div>
    </div>
  </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="removeProductModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Delete</h4>
      </div>
      <div class="modal-body">

      	<div class="removeProductMessages"></div>

        <p>Delete this product ?</p>
      </div>
      <div class="modal-footer removeProductFooter">
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-danger" id="removeProductBtn" data-loading-text="Loading...">Yes</button>
      </div>
    </div>
  </div>
</div>
<script src="custom/js/product.js"></script>
<?php require_once 'includes/footer.php'; ?>