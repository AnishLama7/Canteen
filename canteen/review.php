<?php 
  require_once 'includes/init.php';
  require_once 'includes/user_check.php';
  require_once 'includes/student_check.php';
  require_once 'includes/db_connection.php';
  $title = 'Review';
  include 'templates/header.php';
 ?>

 <div class="container my-4">
     <div class="row">
      <div class="col-sm-4">
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
    </div>

    <div class="col-sm-4">
        <div class="progress">
            <label>5&nbsp;</label>
          <div class="progress-bar bg-warning" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
        </div><br>
        <div class="progress">
            <label>4&nbsp;</label>
          <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div><br>
        <div class="progress">
            <label>3&nbsp;</label>
          <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
        </div><br>
        <div class="progress">
            <label>2&nbsp;</label>
          <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </div><br>
        <div class="progress">
            <label>1&nbsp;</label>
          <div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>


    <div class="col-sm-4">
        <div class="col text-center">
            <h3>Post a review</h3><br>
            <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal">Add Review</button>

              <!-- Modal -->
              <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Rate/Add your review...</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">

                      <form>
                        <div class="rmp">
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
                     <textarea class="form-control" id="msg" placeholder="Add your review for this item.."></textarea><br>
                            <button class="btn btn-success">Post Review</button>
                 </div>
                      </form>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                  </div>
        
                </div>
              </div>
        </div>
    </div>

    <div class="review-modal">
                 <div class="review-bg"></div>
             </div>
         </div>

         <br><br><hr><br>

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
                                             <div class="filled-star" style="width: 50%">
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

 <?php include 'templates/footer.php'?>

 
     

