<?php require_once 'includes/header.php'; ?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-white">
			<div class="panel-body">
				<div class="remove-messages"></div>
				<div class="div-action pull pull-right" style="padding-bottom:20px;">
					<button class="btn btn-primary button1" data-toggle="modal" id="addCategoriesModalBtn" data-target="#addCategoriesModal"> New Categories </button>
				</div> 
				<table class="table" id="manageCategoriesTable">
					<thead>
						<tr>							
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
<div class="modal fade" id="addCategoriesModal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">

    	<form class="form-horizontal" id="submitCategoriesForm" action="php_action/createCategories.php" method="POST">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Add Categories</h4>
	      </div>
	      <div class="modal-body">

	      	<div id="add-categories-messages"></div>

	        <div class="form-group">
	        	<label for="categoriesName" class="col-sm-4 control-label">Categories name </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-7">
				      <input type="text" class="form-control" id="categoriesName" placeholder="Categories Name" name="categoriesName" autocomplete="off">
				    </div>
	        </div>          	        
	        <div class="form-group">
	        	<label for="categoriesStatus" class="col-sm-4 control-label">Status </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-7">
				      <select class="form-control" id="categoriesStatus" name="categoriesStatus">
				      	<option value="">Set Status</option>
				      	<option value="1">Aktif</option>
				      	<option value="2">Non Aktif</option>
				      </select>
				    </div>
	        </div>  	        
	      </div> 
	      
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>
	        
	        <button type="submit" class="btn btn-primary" id="createCategoriesBtn" data-loading-text="Loading..." autocomplete="off"> <i class="glyphicon glyphicon-ok-sign"></i> Save</button>
	      </div> 	      
     	</form>
    </div> 
  </div> 
</div> 
<div class="modal fade" id="editCategoriesModal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	<form class="form-horizontal" id="editCategoriesForm" action="php_action/editCategories.php" method="POST">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Edit Categories</h4>
	      </div>
	      <div class="modal-body">
	      	<div id="edit-categories-messages"></div>
	      	<div class="modal-loading div-hide" style="width:50px; margin:auto;padding-top:50px; padding-bottom:50px;">
						<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
						<span class="sr-only">Loading...</span>
					</div>
		      <div class="edit-categories-result">
		      	<div class="form-group">
		        	<label for="editCategoriesName" class="col-sm-4 control-label">Categories Name </label>
		        	<label class="col-sm-1 control-label">: </label>
					    <div class="col-sm-7">
					      <input type="text" class="form-control" id="editCategoriesName" placeholder="Categories name" name="editCategoriesName" autocomplete="off">
					    </div>
		        </div>       	        
		        <div class="form-group">
		        	<label for="editCategoriesStatus" class="col-sm-4 control-label">Status </label>
		        	<label class="col-sm-1 control-label">: </label>
					    <div class="col-sm-7">
					      <select class="form-control" id="editCategoriesStatus" name="editCategoriesStatus">
					      	<option value="">Set Status</option>
					      	<option value="1">Aktif</option>
					      	<option value="2">Non Aktif</option>
					      </select>
					    </div>
		        </div>	 
		      </div> 
	      </div> 
	      <div class="modal-footer editCategoriesFooter">
	        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>
	        <button type="submit" class="btn btn-primary" id="editCategoriesBtn" data-loading-text="Loading..." autocomplete="off"> <i class="glyphicon glyphicon-ok-sign"></i> Save</button>
	      </div>
     	</form>
    </div>
  </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="removeCategoriesModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="glyphicon glyphicon-trash"></i> Hapus Kategori</h4>
      </div>
      <div class="modal-body">
        <p>Delete this categories ?</p>
      </div>
      <div class="modal-footer removeCategoriesFooter">
        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> No</button>
        <button type="button" class="btn btn-danger" id="removeCategoriesBtn" data-loading-text="Loading..."> <i class="glyphicon glyphicon-trash"></i> Delete</button>
      </div>
    </div>
  </div>
</div>
<script src="custom/js/categories.js"></script>
<?php require_once 'includes/footer.php'; ?>