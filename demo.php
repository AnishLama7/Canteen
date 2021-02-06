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
                            <button class="rpbtn">Post Review</button>
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