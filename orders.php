<?php 
require_once 'php_action/db_connect.php'; 
require_once 'includes/header.php'; 
if($_GET['o'] == 'add') { 
	echo "<div class='div-request div-hide'>add</div>";
}
?>
<script src="custom/js/order.js"></script>
<div class="panel panel-white">
	<div class="panel-body">
			
		<?php if($_GET['o'] == 'add') { 
		
			?>			
						<div class="success-messages"></div> 
  		<form class="form-horizontal" method="POST" action="php_action/createOrder.php" id="createOrderForm">
			  <div class="form-group masthead-followup row m-3">
			  <div class="col-12 col-md-2">
			    <label for="orderDate" class="col-sm-2 control-label">Date </label>
				</div>
			    <div class="col-12 col-md-6">
			      <input type="text" class="form-control" id="orderDate" name="orderDate" autocomplete="off" />
			    </div>
			  </div> 
			  <div class="form-group masthead-followup row m-3">
			  <div class="col-12 col-md-2">
			    <label for="clientName" class="col-sm-2 control-label">Customer</label>
				</div>
				<div class="col-12 col-md-6">
			      <input type="text" class="form-control" id="clientName" name="clientName" placeholder="Input Customer" autocomplete="off" />
			    </div>
			  </div> 
			  <div class="form-group masthead-followup row m-3">
			  <div class="col-12 col-md-2">
			    <label for="clientContact" class="col-sm-2 control-label">Notes</label>
				</div>
				<div class="col-12 col-md-6">
			      <input type="text" class="form-control" id="clientContact" name="clientContact" placeholder="Note / address / phone" autocomplete="off" />
			    </div>
			  </div>
			  <br/>
			  <table class="table" id="productTable">
			  	<thead>
			  		<tr>			  			
			  			<th class="bg-primary text-white" style="width:35%;">ITEM </th>
			  			<th class="bg-primary text-white" style="width:20%;">PRICE</th>
			  			<th class="bg-primary text-white" style="width:6%;">&nbsp;&nbsp;QTY</th>			  			
			  			<th class="bg-primary text-white" style="width:25%;">&nbsp; &nbsp; &nbsp;TOTAL</th>			  			
			  			<th class="bg-primary text-white" style="width:10%;">ACTION</th>
			  		</tr>
			  	</thead>
			  	<tbody>
			  		<?php
			  		$arrayNumber = 0;
			  		for($x = 1; $x < 2; $x++) { ?>
			  			<tr id="row<?php echo $x; ?>" class="<?php echo $arrayNumber; ?>">			  				
			  				<td style="margin-left:20px;">
			  					<div class="form-group">

			  					<select class="form-control" name="productName[]" id="productName<?php echo $x; ?>" onchange="getProductData(<?php echo $x; ?>)" >
			  						<option value="">Select Product</option>
			  						<?php
			  							$productSql = "SELECT * FROM product WHERE active = 1 AND status = 1 AND quantity != 0";
			  							$productData = $connect->query($productSql);

			  							while($row = $productData->fetch_array()) {									 		
			  								echo "<option value='".$row['product_id']."' id='changeProduct".$row['product_id']."'>".$row['product_name']."</option>";
										 	} // /while 

			  						?>
		  						</select>
			  					</div>
			  				</td>
			  				<td style="padding-left:20px;">			  					
			  					<input type="text" name="rate[]" id="rate<?php echo $x; ?>" autocomplete="off" disabled="true" class="form-control" />			  					
			  					<input type="hidden" name="rateValue[]" id="rateValue<?php echo $x; ?>" autocomplete="off" class="form-control" />			  					
			  				</td>
			  				<td style="padding-left:20px;">
			  					<div class="form-group">
			  					<input type="number" name="quantity[]" id="quantity<?php echo $x; ?>" onkeyup="getTotal(<?php echo $x ?>)" autocomplete="off" class="form-control" min="1" />
			  					</div>
			  				</td>
			  				<td style="padding-left:20px;">			  					
			  					<input type="text" name="total[]" id="total<?php echo $x; ?>" autocomplete="off" class="form-control" disabled="true" />			  					
			  					<input type="hidden" name="totalValue[]" id="totalValue<?php echo $x; ?>" autocomplete="off" class="form-control" />			  					
			  				</td>
			  				<td>
							  <button type="button" class="btn btn-primary btn-sm" onclick="addRow()" id="addRowBtn" data-loading-text="Loading..."> + </button>
			  					<button class="btn btn-danger btn-sm removeProductRowBtn" type="button" id="removeProductRowBtn" onclick="removeProductRow(<?php echo $x; ?>)"> x </button>
							</td>
			  			</tr>
		  			<?php
		  			$arrayNumber++;
			  		} 
			  		?>
			  	</tbody>			  	
			  </table>
			  <div class="col-12 col-md-6 bg-primary text-white">
			  <br/>
			  	 <div class="form-group masthead-followup row m-0">
				    <label for="subTotal" class="col-sm-3 p-3 md-3  control-label">SUB TOTAL</label>
				    <div class="col-sm-9 p-3 md-3 ">
				      <input type="text" class="form-control" id="subTotal" name="subTotal" disabled="true" />
				      <input type="hidden" class="form-control" id="subTotalValue" name="subTotalValue" />
				   </div>
				  </div>
				  
				  <div class="form-group masthead-followup row m-0">
				    <label for="vat" class="col-sm-3 control-label p-3 md-3 ">TAX</label>
				    <div class="col-sm-9 p-3 md-3 ">
				      <input type="text" class="form-control" id="vat" name="vat" disabled="true" />
				      <input type="hidden" class="form-control" id="vatValue" name="vatValue" />
				    </div>
				  </div>		  
				  <div class="form-group masthead-followup row m-0">
				    <label for="totalAmount" class="col-sm-3 p-3 md-3  control-label">TOTAL+TAX</label>
				    <div class="col-sm-9 p-3 md-3 ">
				      <input type="text" class="form-control" id="totalAmount" name="totalAmount" disabled="true"/>
				      <input type="hidden" class="form-control" id="totalAmountValue" name="totalAmountValue" />
				    </div>
				  </div>	  
				  <div class="form-group masthead-followup row m-0">
				    <label for="discount" class="col-sm-3 p-3 md-3 control-label">DISCOUNT</label>
				    <div class="col-sm-9 p-3 md-3 ">
				      <input type="text" class="text-white form-control" id="discount" name="discount" onkeyup="discountFunc()" autocomplete="off" />
				    </div>
				  </div>
				  <div class="form-group masthead-followup row m-0">
				    <label for="grandTotal" class="col-sm-3 p-3 md-3 control-label">TOTAL</label>
				    <div class="col-sm-9 p-3 md-3">
				      <input type="text" class="form-control" id="grandTotal" name="grandTotal" disabled="true" />
				      <input type="hidden" class="form-control" id="grandTotalValue" name="grandTotalValue" />
					  <br/></div>
				  </div>	  
			  </div> 

			  <div class="col-12 col-md-6 bg-primary text-white">
			  <br>
			  	<div class="form-group masthead-followup row m-0">
				    <label for="paid" class="col-sm-3 p-3 md-3 control-label">PAYMENT</label>
				    <div class="col-sm-9 p-3 md-3 ">
				      <input type="text" class="text-white form-control" id="paid" name="paid" autocomplete="off" onkeyup="paidAmount()" />
				    </div>
				  </div> 
				  <div class="form-group masthead-followup row m-0">
				    <label for="due" class="col-sm-3 p-3 md-3  control-label">CHANGE</label>
				    <div class="col-sm-9 p-3 md-3 ">
				      <input type="text" class="form-control" id="due" name="due" disabled="true" />
				      <input type="hidden" class="form-control" id="dueValue" name="dueValue" />
				    </div>
				  </div> 
				  <div class="form-group masthead-followup row m-0">
				    <label for="clientContact" class="col-sm-3 p-3 md-3  control-label">TYPE</label>
				    <div class="col-sm-9 p-3 md-3 ">
				      <select class="form-control" name="paymentType" id="paymentType">
				      	<option value="">Payment Method</option>
				      	<option value="1">Cheque</option>
				      	<option value="2">Cash</option>
				      	<option value="3">Card</option>
				      </select>
				    </div>
				  </div>		  
				  <div class="form-group masthead-followup row m-0">
				    <label for="clientContact" class="col-sm-3 p-3 md-3  control-label">STATUS</label>
				    <div class="col-sm-9 p-3 md-3 ">
				      <select class="form-control" name="paymentStatus" id="paymentStatus">
				      	<option value="">choose status</option>
				      	<option value="1">PAID</option>
				      	<option value="2">Down Payment</option>
				      	<option value="3">Credit</option>
				      </select>
				    </div>
					</div>
					<div class="masthead-followup row m-0 submitButtonFooter">
				    <div class="col-sm-10 p-3 md-3 control-label">
					<button type="submit" id="createOrderBtn" data-loading-text="Loading..." class="btn btn-warning btn-lg btn-block shadow"><i class="glyphicon glyphicon-ok-sign"></i> TRANSACTION & PRINT</button>
					</div>
				    <div class="col-sm-2 p-3 md-5">
					<button type="reset" class="btn btn-danger btn-sm" onclick="resetOrderForm()"> C </button>	
					<br/><br/> <br/>  </div>
				  </div>
			  </div> 
			</form>
	
			  			
			
			</form>
			<?php
		} // /get order else  ?>
	</div> 
</div>

<?php require_once 'includes/footer.php'; ?>