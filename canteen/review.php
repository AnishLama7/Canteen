<?php 
  require_once 'includes/init.php';
  require_once 'includes/user_check.php';
  require_once 'includes/student_check.php';
  require_once 'includes/db_connection.php';
  $title = 'Review';
  include 'templates/header.php';
 ?>

 <div class="container">
     <div class="rating-review">
         <div class="tri table-flex">
             <table>
                 <tbody>
                     <tr>
                         <td>
                             <div class="rnb rvl1">
                                 <h3>1.5/5</h3>
                             </div>
                             <div class="pdt rate">
                                 <div class="pro-rating">
                                     <div class="clearfix rating mart8">
                                         <div class="rating-star">
                                             <div class="grey-star"></div>
                                             <div class="filled-star" style="width: 60%">
                                                </div>     
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="rnrn">
                                 <p class="rars">No Review</p>
                             </div>
                         </td>
                         <td>
                             <div class="rph">
                                 <div class="rnpb">
                                     <label>5<i class="fa fa-star"></i></label>
                                     <div class="ropb">
                                        <div class="ripb" style="width: 20%"></div>
                                     </div>
                                     <div class="label">(1)</div>
                                 </div>

                                  <div class="rnpb">
                                     <label>4<i class="fa fa-star"></i></label>
                                     <div class="ropb">
                                        <div class="ripb" style="width: 20%"></div>
                                     </div>
                                     <div class="label">(10)</div>
                                 </div>

                                  <div class="rnpb">
                                     <label>3<i class="fa fa-star"></i></label>
                                     <div class="ropb">
                                        <div class="ripb" style="width: 20%"></div>
                                     </div>
                                     <div class="label">(15)</div>
                                 </div>

                                  <div class="rnpb">
                                     <label>2<i class="fa fa-star"></i></label>
                                     <div class="ropb">
                                        <div class="ripb" style="width: 20%"></div>
                                     </div>
                                     <div class="label">(11)</div>
                                 </div>

                                  <div class="rnpb">
                                     <label>1<i class="fa fa-star"></i></label>
                                     <div class="ropb">
                                        <div class="ripb" style="width: 40%"></div>
                                     </div>
                                     <div class="label">(13)</div>
                                 </div>
                             </div>
                         </td>
                         <td>
                             <div class="rvb">
                                 <p>Please Review this item</p>
                                 <button class="rbtn opmd">Add Review</button>
                             </div>
                         </td>
                     </tr>
                 </tbody>
             </table>
             <div class="review-modal">
                 <div class="review-bg"></div>
                 <div class="rmp">
                     <div class="rpc">
                         <span><i class="far fa-times"></i></span>
                     </div>
                     <div class="rps" align="center">
                         <i class="fa fa-star" data-index="0" style="display:none;"></i>
                         <i class="fa fa-star" data-index="1"></i>
                         <i class="fa fa-star" data-index="2"></i>
                         <i class="fa fa-star" data-index="3"></i>
                         <i class="fa fa-star" data-index="4"></i>
                         <i class="fa fa-star" data-index="5"></i>
                     </div>
                     <input type="hidden" value="" class="starRateV">
                     <input type="hidden" value="" class="rateDate">
                     <div class="rptf" align="center">
                         <textarea class="rateMsg" placeholder="Post your review for this item.."></textarea>
                     </div>
                     <div class="rate-error" align="center"></div>
                     <div class="rpsb" align="center">
                         <button class="rpbtn">Post Review</button>
                     </div>
                 </div>
             </div>
         </div>
         <div class="bri">
             <div class="uscm">
                 <div class="uscms-secs">
                     <div class="us-img">
                         <p></p>
                     </div>
                     <div class="uscms">
                         <div class="us-rate">
                             <div class="pdt rate">
                                 <div class="pro-rating">
                                     <div class="clearfix rating mart8">
                                         <div class="rating-star">
                                             <div class="grey-star"></div>
                                             <div class="filled-star" style="width: 60%">
                                                </div>     
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="us-cmt">
                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                             tempor incididunt ut labore et dolore magna aliqua.</p>
                         </div>
                          <div class="us-rn">
                              <p><i>By <span class="cmnm">Bright</span> on <span class="cmdt">Jan 21 2020</span></i></p>
                          </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

