<!DOCTYPE html>
<html lang="en">
<head>
  <title>Invoice</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
.font-poppins{
    font-family: 'Poppins', sans-serif;
}
   .invoice-header{
       overflow:none;
       height:28vh;
       display:flex!important;
       background: #00b09b;  /* fallback for old browsers */
       background: -webkit-linear-gradient(to right, #96c93d, #00b09b);  /* Chrome 10-25, Safari 5.1-6 */
       background: linear-gradient(to left, #49f2f8, #ff9800); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
   } 
   .invoice-footer{
       display:flex!important;
       background: #00b09b;  /* fallback for old browsers */
       background: -webkit-linear-gradient(to right, #96c93d, #00b09b);  /* Chrome 10-25, Safari 5.1-6 */
       background: linear-gradient(to left, #49f2f8, #ff9800); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
   }
   .invoice-body{
       height:fit-content!important;
        align-items:center!important;
        justify-content:center!important;
    margin-top: -22vh!important;
    /*margin-left: 12%!important;*/
   }
   .font-size-20{
       font-size:20px;
   }
   .ico-set{
    width:38px; 
    height:38px;
    font-size:23px;
    padding-top:6px;
   }
   .flx{
       display:flex;
   }
   .space-around{
       justify-content:space-around;
   }
   .border-invoice{
       border:3px dashed #49f2f8;
   } 
   .center-center{
       justify-content:center;
   }
   .footer-btn-txt{
       font-size:15px;
       font-weight:600;
   }
</style>
</head>
<body>
    <div class="container">
        <div class="col-10 mx-auto mt-2">
            <div class="invoice-header">
            </div>
             <div class="invoice-body col-9 mx-auto bg-light mt-4 mb-2">
                    <div class="invoice-site-logo mx-auto my-3 col-5 flx">
                       <img src="https://cashkar.in/images/Cashkar Website Logo.png" height="75" width="auto">
                    </div>
                    <div class="invoice-main-section border-invoice p-2">
                        <h4 class="font-poppins text-center text-uppercase font-size-20">Purchase Recipt</h4>
                        <div class="invoice-header-info flx col-12 space-around">
                            <p>Service No: <span style="color:#ff9800;">4161335</span></p>
                            <p>Date: <span style="color:#ff9800;">2020 Nov 20</span></p>
                        </div>
                        <!-- bill table -->
                        <div class="bill-table p-0">
                            <table class="table table-hover table-bordered ">
                              <thead>
                                <tr class="text-center">
                                  <th scope="col" colspan="1">Purchaser</th>
                                  <th scope="col" colspan="2">Seller</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="text-center">
                                      <!--Purchaser-->
                                      <p class="m-0">KALASH MOBILE CENTER</p>
                                      <p>N-WING. FLAT NO. 103, GOKUL
WILLAGE, SHANTI PARK, MIRA ROAD
EAST THANE,Mumbai, Maharashtra401107, India</p>
                                  </td>
                                  <td  class="text-center">
                                      <!--seller-->
                                      <p class="m-0">Jitendra Gupta </p>
                                      <p>13 Nehru Nagar .Vm Road , Nehru
Nagar,Airport Area,Juhu,Mumbai ,near
mithibai collge vile parle west,
Maharashtra,
400056, Mumbai, Maharashtra, 400056, India</p>
                                  </td>
                                </tr>
                                
                              </tbody>
                            </table>
                            <!--Item table-->
                            <table class="table table-hover table-bordered ">
                              <thead>
                                <tr class="text-center">
                                  <th scope="col" colspan="1">Item</th>
                                  <th scope="col" colspan="1">Price</th>
                                  <th scope="col" colspan="1">Payment Method</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="text-center">
                                      <!--item details-->
                                      <p class="m-0">Oneplus 7T PRO (8 GB/256 GB)
(IMEI No / Serial No: 869344042152753) </p>
                                      
                                  </td>
                                  <td  class="text-center">
                                      <!--selling price-->
                                      <p class="m-0">21000 </p>
                                      
                                  </td>
                                  <td  class="text-center">
                                      <!-- payment method-->
                                      <p class="m-0">Cash </p>
                                  </td>
                                </tr>
                                
                              </tbody>
                            </table>
                            <p class="text-center text-muted"><small>This is Computer auto generated bill so no sign required.</small></p>
                        </div>
                    </div>
                </div>
            <div class="invoice-footer p-1 flx center-center mb-4">
                <div class="footer-inner">
                    <center>
                <img src="https://cashkar.in/images/Cashkar Website Logo.png" width="auto" height="75px" />
                </center>
                <p class="footer-btn-txt">Sell Ipads | Sell Laptops | Repair Phones | Blogs</p>
                <p class="text-center text-light">
                <a href="https://www.facebook.com/cashkarindia/" class="text-light"><i class="fab fa-facebook-f ico-set" style="border-radius:50%;border:1px solid white"></i></a>
                <a href="https://twitter.com/cash_kar/" class="text-light"><i class="fab fa-twitter ico-set" style="border-radius:50%;border:1px solid white"></i></a>
                <a href="https://www.linkedin.com/company/gadgetz-co" class="text-light"><i class="fab fa-linkedin-in ico-set" style="border-radius:50%;border:1px solid white"></i></a>
                <a href="https://in.pinterest.com/gadgetzco/" class="text-light"><i class="fab fa-pinterest-p ico-set" style="border-radius:50%;border:1px solid white"></i></a>
                <a href="https://www.youtube.com/channel/UC_KLJFYMI0Vky_XJ9Hr74ug" class="text-light"><i class="fab fa-youtube ico-set" style="border-radius:50%;border:1px solid white"></i></a>
                <a href="https://www.instagram.com/cash_kar/" class="text-light"><i class="fab fa-instagram ico-set" style="border-radius:50%;border:1px solid white"></i></a>
                </p>
                </div>
            </div><br>
        </div>
    </div>
</body>
</html>