<?php require_once('../view/parts/header.php');?>
<div class="main">
  <h4>Confirmation Page</h4>
  <table border="0" cellpadding="0" cellspacing="0" class="m_5147148471360373373m_7034754035859388040m_243854346431652930template-container" style="border-collapse:collapse!important;width:100%;max-width:600px">
                          <tbody>
                             <tr>
                                <td align="center" valign="top" style="font-weight:normal">
                                   <div style="border-bottom:2px solid #dadada;border-radius:4px;overflow:hidden">
                                      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="m_5147148471360373373m_7034754035859388040m_243854346431652930template-body" style="background-color:#fff;border-collapse:collapse!important">
                                         <tbody>
                                            <tr>
                                               <td valign="top" class="m_5147148471360373373m_7034754035859388040m_243854346431652930header-stripe" style="background:#073e68;display:block;font-weight:normal;height:3px;width:100%"></td>
                                            </tr>
                                            <tr>
                                               <td valign="top" class="m_5147148471360373373m_7034754035859388040m_243854346431652930body-content m_5147148471360373373m_7034754035859388040m_243854346431652930p-b-0" style="color:#434343;font-family:sans-serif;font-size:14px;font-weight:normal;line-height:150%;padding:24px 16px;padding-bottom:0!important;text-align:left">
                                                  <img src="https://ci3.googleusercontent.com/proxy/P_u48ewsTbifrZapf3GhIUUXxtRFGnAH8dm_vKxhfvm0EwEbU_9l_UCjae0MYpook3b2yuFgcJuFzZQ0gsHaKzoT7xw0J-7jkDtzkRczbfluOGIkYXe3uYWb1XVnJ6Mtjjzf8bqkxlt5=s0-d-e1-ft#https://storage.googleapis.com/unicoinemail/Email-SocialMedia/Logo-Registration.png" alt="Unicoin-Mining" width="150px" style="border:0;display:inline;line-height:100%;max-width:150px;outline:none;text-decoration:none" class="m_5147148471360373373CToWUd CToWUd">
                                                  <div class="m_5147148471360373373m_7034754035859388040m_243854346431652930spacer-md" style="display:block;height:20px;width:100%">
                                                     &nbsp;
                                                  </div>
                                                  <h1 style="color:inherit;display:block;font-family:sans-serif;font-size:22px;font-style:normal;font-weight:normal;letter-spacing:normal;line-height:26px;margin:0;text-align:left">Please complete your payment before <?php echo $ordershistory['message']['data'][0]['expiredPaymentDate'];?></h1>
                                               </td>
                                            </tr>
                                            <tr>
                                               <td valign="top" class="m_5147148471360373373m_7034754035859388040m_243854346431652930body-content m_5147148471360373373m_7034754035859388040m_243854346431652930p-t-0 m_5147148471360373373m_7034754035859388040m_243854346431652930p-r-0 m_5147148471360373373m_7034754035859388040m_243854346431652930p-l-0 m_5147148471360373373m_7034754035859388040m_243854346431652930p-b-0" style="color:#434343;font-family:sans-serif;font-size:14px;font-weight:normal;line-height:150%;padding:24px 16px;padding-bottom:0!important;padding-left:0!important;padding-right:0!important;padding-top:0!important;text-align:left">
                                                  <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse!important">
                                                     <tbody>
                                                        <tr>
                                                           <td class="m_5147148471360373373m_7034754035859388040m_243854346431652930row-content" style="font-weight:normal;padding:16px;background-color:#f6f6f6">
                                                              <p class="m_5147148471360373373m_7034754035859388040m_243854346431652930m-b-sm m_5147148471360373373m_7034754035859388040m_243854346431652930text-gray" style="color:#8f8f8f;font-size:16px;font-weight:normal;line-height:24px;margin:0;margin-bottom:8px!important">Dear <?php echo $ordershistory['message']['data'][0]['orderFullName'];?>,</p>
                                                              <h2 class="m_5147148471360373373m_7034754035859388040m_243854346431652930text-normal" style="color:inherit;display:block;font-family:sans-serif;font-size:18px;font-style:normal;font-weight:normal;letter-spacing:normal;line-height:24px;margin:0;text-align:left">Please transfer to</h2>
                                                           </td>
                                                        </tr>
                                                        <tr>
                                                           <td class="m_5147148471360373373m_7034754035859388040m_243854346431652930row-content m_5147148471360373373m_7034754035859388040m_243854346431652930b-t m_5147148471360373373m_7034754035859388040m_243854346431652930p-t-sm m_5147148471360373373m_7034754035859388040m_243854346431652930p-b-sm" style="border-top:1px solid #dadada;font-weight:normal;padding:16px;padding-bottom:8px!important;padding-left:56px;padding-top:8px!important">
                                                              <table width="100%" style="border-collapse:collapse!important">
                                                                 <tbody>
                                                                    <tr>
                                                                       <td style="font-weight:normal">
                                                                          <p class="m_5147148471360373373m_7034754035859388040m_243854346431652930label" style="color:#8f8f8f;font-size:14px;font-weight:normal;line-height:22px;margin:0">Account Number</p>
                                                                          <p class="m_5147148471360373373m_7034754035859388040m_243854346431652930text-bold m_5147148471360373373m_7034754035859388040m_243854346431652930text-number" style="font-size:16px;font-weight:bold;letter-spacing:1px;line-height:24px;margin:0"><?php echo $ordershistory['message']['data'][0]['accountNo'];?></p>
                                                                       </td>
                                                                    </tr>
                                                                 </tbody>
                                                              </table>
                                                           </td>
                                                        </tr>
                                                        <tr>
                                                           <td class="m_5147148471360373373m_7034754035859388040m_243854346431652930row-content m_5147148471360373373m_7034754035859388040m_243854346431652930bg-gray m_5147148471360373373m_7034754035859388040m_243854346431652930p-t-sm m_5147148471360373373m_7034754035859388040m_243854346431652930p-b-sm" style="background-color:#f6f6f6;font-weight:normal;padding:16px;padding-bottom:8px!important;padding-left:56px;padding-top:8px!important">
                                                              <table width="100%" style="border-collapse:collapse!important">
                                                                 <tbody>
                                                                      <tr>
                                                                          <td style="font-weight:normal">
                                                                              <p class="m_5147148471360373373m_7034754035859388040m_243854346431652930label" style="color:#8f8f8f;font-size:14px;font-weight:normal;line-height:22px;margin:0">Account Holder Name</p>
                                                                              <p style="font-size:16px;font-weight:normal;line-height:24px;margin:0"><?php echo $ordershistory['message']['data'][0]['accountName'];?></p>
                                                                          </td>
                                                                          <td style="font-weight:normal;text-align:right;vertical-align:middle">
                                                                              <img src="https://ci6.googleusercontent.com/proxy/3uYuRkSH-k4Uyes722i8D3zp7HQa0z7Z_9j4AqSIZ6-30xpV3Rys527kXoT1qYNQ2dCohb4EbGxumwR0TOAmBPmpYuNefYevotjHA8gpJ2-KZKLY6JUP_AWn=s0-d-e1-ft#https://storage.googleapis.com/unicoinemail/Payment%20Method/bca.png" alt="bca" style="border:0;display:inline;line-height:100%;max-height:32px;max-width:200px;outline:none;text-decoration:none;vertical-align:middle" class="m_5147148471360373373CToWUd CToWUd">
                                                                          </td>
                                                                      </tr>
                                                                 </tbody>
                                                              </table>
                                                           </td>
                                                        </tr>
                                                        <tr>
                                                           <td class="m_5147148471360373373m_7034754035859388040m_243854346431652930row-content m_5147148471360373373m_7034754035859388040m_243854346431652930p-t-sm m_5147148471360373373m_7034754035859388040m_243854346431652930p-b-0" style="font-weight:normal;padding:16px;padding-bottom:0!important;padding-left:56px;padding-top:8px!important">
                                                              <p class="m_5147148471360373373m_7034754035859388040m_243854346431652930label" style="color:#8f8f8f;font-size:14px;font-weight:normal;line-height:22px;margin:0">Total Amount</p>
                                                              <table style="background-color:#fff;border-collapse:collapse!important">
                                                                 <tbody>
                                                                    <tr>
                                                                       <td style="font-size:16px;font-weight:bold;height:32px;letter-spacing:1px;line-height:24px;margin:0"> <?php echo $ordershistory['message']['data'][0]['totalAmountToPaidLeft'];?></td>
                                                                       <td style="font-size:16px;font-weight:bold;height:32px;letter-spacing:1px;line-height:24px;margin:0;background-image:url(https://ci4.googleusercontent.com/proxy/Q4CXWUr5h-273ED_xpSHOHt9MHqSlgoQIFNQqD9LuAVmTh9og-6C_6jKiGFqzCPSnpSPL0rx5P6fTfR-dLH_3q5xAEoRg3Gzdg03BGAS24YLz-AFaKwueqYIzz14q9tcbA=s0-d-e1-ft#https://storage.googleapis.com/unicoinemail/Payment%20Method/background.png);background-position:center bottom;background-size:16px 7px;background-repeat:no-repeat;color:#f96d01;line-height:32px"><?php echo $ordershistory['message']['data'][0]['totalAmountToPaidRight'];?></td>
                                                                    </tr>
                                                                 </tbody>
                                                              </table>
                                                           </td>
                                                        </tr>
                                                        <tr>
                                                           <td class="m_5147148471360373373m_7034754035859388040m_243854346431652930row-content m_5147148471360373373m_7034754035859388040m_243854346431652930bg-yellow m_5147148471360373373m_7034754035859388040m_243854346431652930p-t-sm m_5147148471360373373m_7034754035859388040m_243854346431652930p-b-sm" style="background-color:#ffc412;font-weight:normal;padding:16px;padding-bottom:8px!important;padding-left:56px;padding-top:8px!important">
                                                              <p style="font-size:16px;font-weight:normal;line-height:24px;margin:0"> <b>IMPORTANT!</b> Please transfer until the last 3 digits </p>
                                                           </td>
                                                        </tr>
                                                     </tbody>
                                                  </table>
                                               </td>
                                            </tr>
                                         </tbody>
                                      </table>
                                   </div>
                                   <div class="m_5147148471360373373m_7034754035859388040m_243854346431652930spacer" style="display:block;height:16px;width:100%">
                                      &nbsp;
                                   </div>
                                   <div style="border-bottom:2px solid #dadada;border-radius:4px;overflow:hidden">
                                      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="m_5147148471360373373m_7034754035859388040m_243854346431652930template-body" style="background-color:#fff;border-collapse:collapse!important">
                                         <tbody>
                                            <tr>
                                               <td valign="top" class="m_5147148471360373373m_7034754035859388040m_243854346431652930body-content m_5147148471360373373m_7034754035859388040m_243854346431652930p-b-0" style="color:#434343;font-family:sans-serif;font-size:14px;font-weight:normal;line-height:150%;padding:24px 16px;padding-bottom:0!important;text-align:left">
                                                  <h3 class="m_5147148471360373373m_7034754035859388040m_243854346431652930text-normal m_5147148471360373373m_7034754035859388040m_243854346431652930m-t-0 m_5147148471360373373m_7034754035859388040m_243854346431652930m-b-sm" style="color:inherit;display:block;font-family:sans-serif;font-size:16px;font-style:normal;font-weight:normal;letter-spacing:normal;line-height:24px;margin:0;margin-bottom:8px!important;margin-top:0!important;text-align:left">Completed Your Payment?</h3>
                                                  <p class="m_5147148471360373373m_7034754035859388040m_243854346431652930fm-t-0 m_5147148471360373373m_7034754035859388040m_243854346431652930m-b-sm m_5147148471360373373m_7034754035859388040m_243854346431652930text-gray m_5147148471360373373m_7034754035859388040m_243854346431652930text-sm" style="color:#8f8f8f;font-size:14px;font-weight:normal;line-height:22px;margin:0;margin-bottom:8px!important"> Once your payment is confirmed, your contract will start according the order. </p>
                                                  <div class="m_5147148471360373373m_7034754035859388040m_243854346431652930spacer-xs" style="display:block;height:8px;width:100%">
                                                     &nbsp;
                                                  </div>
                                                  <form action="/confirm/<?php echo $orderid;?>" method="post" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                      <label for="">Upload Your Payment Receipt</label>
                                                      <input type="file" name="imageconfirm" id="" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                      <button class="btn btn-info" type="submit" name="submitupload">I have complete my payment</button>
                                                    </div>
                                                    <?php if(isset($confirmnotify)){echo "<p class='alert alert-success'>".$confirmnotify.'</p>';}?>


                                                  </form>
                                               </td>
                                            </tr>
                                            <tr>
                                               <td valign="top" style="font-weight:normal;height:24px;width:100%">&nbsp;</td>
                                            </tr>
                                         </tbody>
                                      </table>
                                   </div>
                                   <div class="m_5147148471360373373m_7034754035859388040m_243854346431652930spacer" style="display:block;height:16px;width:100%">
                                      &nbsp;
                                   </div>
                                   <div class="m_5147148471360373373m_7034754035859388040m_243854346431652930needHelp m_5147148471360373373m_7034754035859388040m_243854346431652930wrapper m_5147148471360373373m_7034754035859388040m_243854346431652930box-shadow m_5147148471360373373m_7034754035859388040m_243854346431652930rounded-shadow m_5147148471360373373m_7034754035859388040m_243854346431652930overflow-hidden" style="background:#fff;border-bottom:2px solid #dadada;border-radius:4px 4px 6px 6px;overflow:hidden;width:100%">
                                      <table align="center" class="m_5147148471360373373m_7034754035859388040m_243854346431652930container" style="Margin:0 auto;background:0 0;border-collapse:collapse;border-spacing:0;margin:0 auto;padding:0;text-align:inherit;vertical-align:top;width:100%">
                                         <tbody>
                                            <tr style="padding:0;text-align:left;vertical-align:top">
                                               <td style="Margin:0;border-collapse:collapse!important;color:#434343;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.5;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">
                                                  <table class="m_5147148471360373373m_7034754035859388040m_243854346431652930row" style="border-collapse:collapse;border-spacing:0;display:table;padding:0;text-align:left;vertical-align:top;width:100%">
                                                     <tbody>
                                                        <tr style="padding:0;text-align:left;vertical-align:top">
                                                           <th class="m_5147148471360373373m_7034754035859388040m_243854346431652930small-12 m_5147148471360373373m_7034754035859388040m_243854346431652930large-12 m_5147148471360373373m_7034754035859388040m_243854346431652930columns m_5147148471360373373m_7034754035859388040m_243854346431652930first m_5147148471360373373m_7034754035859388040m_243854346431652930last" style="Margin:0 auto;color:#434343;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.5;margin:0 auto;padding:0;padding-bottom:0;padding-left:16px;padding-right:16px;text-align:left;width:584px">
                                                              <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%">
                                                                 <tbody>
                                                                    <tr style="padding:0;text-align:left;vertical-align:top">
                                                                       <th style="Margin:0;color:#434343;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.5;margin:0;padding:0;text-align:left">
                                                                          <table class="m_5147148471360373373m_7034754035859388040m_243854346431652930spacer" style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%">
                                                                             <tbody>
                                                                                <tr style="padding:0;text-align:left;vertical-align:top">
                                                                                   <td height="16px" style="Margin:0;border-collapse:collapse!important;color:#434343;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:16px;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">&nbsp;</td>
                                                                                </tr>
                                                                             </tbody>
                                                                          </table>
                                                                          <h3 class="m_5147148471360373373m_7034754035859388040m_243854346431652930h3" style="Margin:0;Margin-bottom:8px;color:inherit;font-family:Helvetica,Arial,sans-serif;font-size:1.125rem;font-weight:700;letter-spacing:.3px;line-height:26px;margin:0;margin-bottom:8px;padding:0;text-align:left;word-wrap:normal">Detail Order</h3>
                                                                              <table cellspacing="0" cellpadding="0" border="0" width="100%" style="border-collapse:collapse;color:#4f4f4f;border-top:3px solid #c9c9c9;border-bottom:3px solid #c9c9c9;font-size:15px">
                                                                                  <tbody>
                                                                                      <tr>
                                                                                      <td style="padding:5px 0">
                                                                                          <table cellspacing="0" cellpadding="0" border="0" style="border-collapse:collapse">
                                                                                              <tbody>
                                                                                                  <tr>
                                                                                                      <th align="Left" style="padding:10px 0;border-bottom:1px solid #dddddd;color:#666;font-weight:600" width="280">Product</th>
                                                                                                      <th align="Left" style="padding:10px 0;border-bottom:1px solid #dddddd;color:#666;font-weight:600" width="130">Price</th>
                                                                                                      <th align="right" style="padding:10px 0;border-bottom:1px solid #dddddd;color:#666;font-weight:600" width="50">Qty</th>
                                                                                                      <th align="right" style="padding:10px 0;border-bottom:1px solid #dddddd;color:#666;font-weight:600" width="180">Total</th>
                                                                                                  </tr>
                                                                                              </tbody>
                                                                                              <tbody style="vertical-align:top;line-height:1.6em">
                                                                                                  <tr>
                                                                                                      <td align="left" style="padding:10px 0;border-bottom:1px solid #dddddd;color:#666"><?php echo $ordershistory['message']['data'][0]['product'];?></td>
                                                                                                      <td align="Left" style="padding:10px 0;border-bottom:1px solid #dddddd;color:#666"><?php echo $ordershistory['message']['data'][0]['price'];?></td>
                                                                                                      <td align="right" style="padding:10px 0;border-bottom:1px solid #dddddd;color:#666"><?php echo $ordershistory['message']['data'][0]['qty'];?></td>
                                                                                                      <td align="right" style="padding:10px 0;border-bottom:1px solid #dddddd;color:#666"><?php echo $ordershistory['message']['data'][0]['total'];?></td>
                                                                                                  </tr>
                                                                                              </tbody>
                                                                                          </table>
                                                                                      </td>
                                                                                      </tr>
                                                                                      <tr>
                                                                                      <td style="padding:0 0 15px">
                                                                                          <table cellspacing="0" cellpadding="0" border="0" style="border-collapse:collapse">
                                                                                              <tbody>
                                                                                                  <tr>
                                                                                                      <td align="right" width="410" style="font-weight:bold;padding:5px 0;color:#666;font-weight:600">SubTotal</td>
                                                                                                      <td align="right" width="168" style="padding:5px 0;color:#666"><?php echo $ordershistory['message']['data'][0]['subTotal'];?></td>
                                                                                                  </td>
                                                                                                  </tr>
                                                                                                  <tr>
                                                                                                      <td align="right" width="410" style="font-weight:bold;padding:5px 0;color:#666;font-weight:600">Tax</td>
                                                                                                      <td align="right" width="168" style="padding:5px 0;color:#666"><?php echo $ordershistory['message']['data'][0]['tax'];?></td>
                                                                                                  </tr>
                                                                                                  <tr>
                                                                                                      <td align="right" width="410" style="font-weight:bold;padding:5px 0;color:#666;font-weight:600">Unique Number</td>
                                                                                                      <td align="right" width="168" style="padding:5px 0;color:green"><?php echo $ordershistory['message']['data'][0]['uniqueNumber'];?></td>
                                                                                                  </tr>
                                                                                                  <tr>
                                                                                                      <td align="right" width="410" style="font-weight:bold;padding:5px 0;color:#666;font-weight:600">Total</td>
                                                                                                      <td align="right" width="168" style="font-weight:bold;padding:5px 0;color:#666"><?php echo $ordershistory['message']['data'][0]['totalAmountToPaid'];?></td>
                                                                                                  </tr>
                                                                                              </tbody>
                                                                                          </table>
                                                                                      </td>
                                                                                      </tr>
                                                                                  </tbody>
                                                                              </table>

                                                                          <table class="m_5147148471360373373m_7034754035859388040m_243854346431652930spacer" style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%">
                                                                             <tbody>
                                                                                <tr style="padding:0;text-align:left;vertical-align:top">
                                                                                   <td height="20px" style="Margin:0;border-collapse:collapse!important;color:#434343;font-family:Helvetica,Arial,sans-serif;font-size:40px;font-weight:400;line-height:40px;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">&nbsp;</td>
                                                                                </tr>
                                                                             </tbody>
                                                                          </table>
                                                                       </th>
                                                                    </tr>
                                                                 </tbody>
                                                              </table>
                                                           </th>
                                                        </tr>
                                                     </tbody>
                                                  </table>
                                               </td>
                                            </tr>
                                         </tbody>
                                      </table>
                                   </div>
                                   <div class="m_5147148471360373373m_7034754035859388040m_243854346431652930spacer-md" style="display:block;height:24px;width:100%">
                                      &nbsp;
                                   </div>

                                </td>
                             </tr>
                          </tbody>
                       </table>
    <!-- <div class="row">
      <div class="col-4">
        <div class="box-confirmation">
          <form action="/confirm/<?php echo $orderid;?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <input type="file" name="imageconfirm" id="" class="form-control">
            </div>
            <div class="form-group">
              <button class="btn btn-info" type="submit" name="submitupload">Confirm Now</button>
            </div>


          </form>
        </div>

    </div>
  </div> -->
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="js/jquery.ticker.js"></script>


</body>
</html>
