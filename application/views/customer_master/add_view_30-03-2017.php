<script src="<?php echo base_url(); ?>application/assets/js/customermaster.js"></script>

 <h2><font color="#5cb85c">Add customer</font></h2>
 <form role="form" method="post" name="addcustomer" id="addcustomer" action="<?php echo base_url(); ?>customermaster/add">

    
      <form role="form" method="post" name="addgarden" id="addgarden">
        <section id="loginBox" style="width:500px;">
      			
		<lable for="err" id="err" style="color:#F30;font-weight: bold"></lable>
                  <br/>
                  <label for="name">Customer Name:
                  <br/>
                  <input type="text" id="name" name="name" style="width:380px;" required="required"/>
                 </label>
                 <br/>
                <label for="tin">VAT Number:
                    <br/>
                     <input type="text" id="tin" name="tin"/>
                 </label>
                
                  <label for="cst">CST Number:
                    <br/>
                    <input type="text" id="cst" name="cst"/>
                 </label>
                  <br/>
                  <label for="pan">PAN Number:
                    <br/>
                     <input type="text" id="pan" name="pan"/>
                 </label>
                 
                   <label for="servicetax">Service Tax Number:
                    <br/>
                     <input type="text" id="servicetax" name="servicetax"/>
                 </label>
                 <br/>
                   <label for="gst">GST Number:
                    <br/>
                     <input type="text" id="gst" name="gst"/>
                 </label>
                 
                  <label for="obal">Opening Balance:
                    <br/>
                      <input type="text" id="obal" name="obal"/>
                 </label>
                
               <!--  <label for="obal">Vat No.:
                  <br/>
                  <input type="text" id="vat_number" name="vat_number" value="<?php echo $bodycontent['data'][0]->vat_number ?>"/>
                 </label>-->
                 <br/>
                   <label for="address">Customer Address:
                    <br/>
                    <textarea cols="42" rows="3" id="address" name="address"></textarea>
                 </label>
                  <br/>
                  <label for="pin">Pin Number:
                    <br/>
                     <input type="text" id="pin" name="pin"/>
                 </label>
                
                 <label for="state">State:
                    <br/>
                     <div id="stateerr">
                     <select name="state" id="state" style="width: 190px">
                    <option value="0">select</option>
                    <?php foreach ($bodycontent as $content) : ?>
                 			<option value="<?php echo $content->id; ?>"><?php echo $content->state_name; ?></option>
    				 <?php endforeach; ?>
                    
                    </select>
                     </div>
                 </label>
                 <br/>
                
                  <label for="telephone">Telephone :
                  <br/>
                  <input type="text" id="txtTelephone" name="txtTelephone" />
                 </label>
                 <label for="credit_days">Credit Days
                     <br/>
                     <input type="text" name="creditdays" id="creditdays" class="creditdays" onkeypress="checkNumeric(this);"/>
                 </label>
                <br/> 
       			 <span class="buttondiv"><div class="save" id="save" align="center">Save</div></span>
         </section>
        
       <!-- <table  width="100%" cellspacing="2" >
        <thead bgcolor="#a6a6a6">
        <tr>
        <th/>
        <th>Bill Number</th>
        <th>Bill Date</th>
        <th>Due Date</th>
        <th>Bill Amount</th>
        <th>Due Amount</th>
        <th> ADD </th>
       
        </tr>
        </thead>
        <tr bgcolor="#a6a6a6" id="addsection">
        <td/>
        <td> <input type="text" id="bnumber" name="bnumber"/></td>
        <td> <input type="text" id="bdate" name="bdate" class="datepicker"/></td>
        <td> <input type="text" id="ddate" name="ddate" class="datepicker"/></td>
        <td> <input type="text" id="bamount" name="bamount"/></td>
        <td> <input type="text" id="damount" name="damount"/></td>
        <td>  <a href="javascript:void(0)" class="opendetail showtooltip" title="click for details" id="adddetail"><img src="<?php echo base_url(); ?>application/assets/images/add.jpg" height="15" width="15" /></a> </th>
         </tr>
        </table> 
         <br/>
        <table id="example2" class="display" width="100%" cellspacing="0" frame="box">
        <thead bgcolor="#a6a6a6">
        <tr>
        <th>Bill Number</th>
        <th>Bill Date</th>
        <th>Due Date</th>
        <th>Bill Amount</th>
        <th>Due Amount</th>
        
       
        </tr>
        </thead>
        <tbody id="mybody" >
       
        </tbody>
        </table>
        <br/> <br/>-->
          
</form>

 

                    


    
    