<?php require_once 'includes/header.php'; ?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-white">
			<div class="panel-body">
				<div class="remove-messages"></div>
				<div class="div-action pull pull-right" style="padding-bottom:20px;">
					<button class="btn btn-primary button1" data-toggle="modal" data-target="#addBrandModel"> Add Brand </button>
				</div> 
				<table class="table" id="manageBrandTable">
					<thead>
						<tr>							
							<th class="bg-primary text-white">Brand</th>
							<th class="bg-primary text-white">Status</th>
								<th class="bg-primary text-white" style="width:15%;">Set</th>
						</tr>
					</thead>
				</table>
				</div> 
		</div> 
	</div>
</div> 
<div class="modal fade" id="addBrandModel" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	<form class="form-horizontal" id="submitBrandForm" action="php_action/createBrand.php" method="POST">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Add Brand</h4>
	      </div>
	      <div class="modal-body">
			<div id="add-brand-messages"></div>
			 <div class="form-group">
	        	<label for="brandName" class="col-sm-3 control-label">Brand Name </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="brandName" placeholder="Brand Name" name="brandName" autocomplete="off">
				    </div>
	        </div>        	        
	        <div class="form-group">
	        	<label for="brandStatus" class="col-sm-3 control-label">Status: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <select class="form-control" id="brandStatus" name="brandStatus">
				      	<option value="">Set Status</option>
				      	<option value="1">Aktiv</option>
				      	<option value="2">Non Aktiv</option>
				      </select>
				    </div>
				</div> 
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary" id="createBrandBtn" data-loading-text="Loading..." autocomplete="off">Save</button>
	      </div>
     	</form>
    </div>
  </div>
</div>
<div class="modal fade" id="editBrandModel" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	<form class="form-horizontal" id="editBrandForm" action="php_action/editBrand.php" method="POST">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Brand</h4>
	      </div>
	      <div class="modal-body">
	      	<div id="edit-brand-messages"></div>
	      	<div class="modal-loading div-hide" style="width:50px; margin:auto;padding-top:50px; padding-bottom:50px;">
						<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
						<span class="sr-only">Loading...</span>
					</div>
		      <div class="edit-brand-result">
		      	<div class="form-group">
		        	<label for="editBrandName" class="col-sm-3 control-label">Brand Name</label>
		        	<label class="col-sm-1 control-label">: </label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="editBrandName" placeholder="Brand Name" name="editBrandName" autocomplete="off">
					    </div>
		        </div>       	        
		        <div class="form-group">
		        	<label for="editBrandStatus" class="col-sm-3 control-label">Status: </label>
		        	<label class="col-sm-1 control-label">: </label>
					    <div class="col-sm-8">
					      <select class="form-control" id="editBrandStatus" name="editBrandStatus">
					      	<option value="">Set Status</option>
					      	<option value="1">Aktif</option>
					      	<option value="2">Non Aktif</option>
					      </select>
					    </div>
		        </div> 
		      </div>         	        
		    </div> 
	      <div class="modal-footer editBrandFooter">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        
	        <button type="submit" class="btn btn-primary" id="editBrandBtn" data-loading-text="Loading..." autocomplete="off"> Save</button>
	      </div>
	    </form>
	    </div>
    </div>
  </div>
<div class="modal fade" tabindex="-1" role="dialog" id="removeMemberModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"> Delete</h4>
      </div>
      <div class="modal-body">
        <p>Delete this brand ?</p>
      </div>
      <div class="modal-footer removeBrandFooter">
        <button type="button" class="btn btn-default" data-dismiss="modal"> No</button>
        <button type="button" class="btn btn-danger" id="removeBrandBtn" data-loading-text="Loading..."> Yes Delete</button>
      </div>
    </div>
  </div>
</div>
<script src="custom/js/brand.js"></script>
<?php require_once 'includes/footer.php'; ?>