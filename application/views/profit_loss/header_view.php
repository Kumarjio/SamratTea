<script src="<?php echo base_url(); ?>application/assets/js/profitLoss.js"></script> 
<style>
    #frmsaletaxregister{
       // color:green;
       font-size:14px;
    }
    .form_style{
        width:200px;
        border:1px solid green;
        border-radius:4px ;
    }
    .select_styl{
        width:200px;
        border:1px solid green;
         border-radius:4px ;
    }
   
</style>




 <h1><font color="#5cb85c" style="font-size:28px;">Profit & Loss A/C </font></h1>

 <div id="adddiv">

  <section id="loginBox" style="width:600px;border-radius:10px;">
      <form id="profitlossReg" name="profitlossReg" method="post" action="<?php echo base_url(); ?>profitloss/pdfProfitLoss"  target="_blank">
      <table width="70%" align="center">
          <tr> 
              <td>From Date </td>
              <td>:&nbsp;</td>
              <td> <input type="text" name="fromdate" class=" form_style" id="fromdate" autocomplete="off" value="<?php echo date('d-m-Y',strtotime($bodycontent['fiscalStartDt']));?>" readonly="true" /> </td>
           </tr>
           <tr><td>&nbsp;</td></tr>
           <tr>
              <td>To Date</td>
              <td>:&nbsp;</td>
              <td> <input type="text" name="todate" id="todate" class="datepicker form_style" autocomplete="off" value="<?php echo date("d-m-Y"); ?>" /> </td>
           </tr>
           <tr><td>&nbsp;</td></tr>
           
          <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
          </tr>
      </table>
         
      </form>
    
 <!-- <span class="buttondiv"><div class="save" id="showsaletaxregister" align="center" style="cursor:pointer;"> Show </div></span> -->
  
  <br>
  
   <span class="buttondiv"><div class="save" id="showlossandprofit" align="center" style="cursor:pointer;"> Pdf </div></span> 
  </section>
  
 </div>
 
 
 <!---------------------Voucher Listing Area-------------------------->
 
 
 
 <div class="vouchrlistTabl" id="vouchrlistTabl">
    
    
     <img src="<?php echo base_url(); ?>application/assets/images/loading.gif" id='loader' style=" position: absolute;
    margin: auto;
    top: 50%;
    left: 0;
    right: 0;
    bottom: 0;display:none;"/>
    
     <div id="details"  style="display:none; width:100%;height:100%;" title="Detail">

 </div>

</div>
 
 