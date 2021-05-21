<div class="row">
          <div class="col-md-6">
            <!-- Error Message -->
            <div class="card mb-20">
              <div class="card-body">
                <h4><i class="fa fa-warning text-red"></i> Please fix fields error before proceeding to next step</h4>
                <div class="callout callout-default" style="margin-bottom: 0!important;">
                  URL cannot be empty and must be a valid url
                </div>
              </div>
            </div>

            <form>
              <!-- When purchase is complete -->
              <div class="card mb-20" id="purchase">
                <div class="card-header">When purchase is complete...</div>
                <div class="card-body">
                  <div class="form-group">
                    <select class="form-control" id="collection">
                      <option value="" selected disabled>Select Actions</option>
                      <option>Show Success Page</option>
                      <option>Redirect to custom URL</option>
                      <option>Redirect to WhatsApp (Random)</option>
                      <option>Redirect to WhatsApp (CS Number)</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="url">Enter your custom URL</label>
                    <input type="text" class="form-control" placeholder="https://example.com" aria-describedby="basic-addon1" id="url" name="url">
                  </div>

                  <label class="font-weight-thin">WhatsApp Numbers</label><br>
                  <small>The system will randomize the WhatsApp redirect</small>
                  <div class="form-group">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="62xxx">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="fa fa-trash"></i></button>
                      </span>
                    </div>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="62xxx">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="fa fa-trash"></i></button>
                      </span>
                    </div>
                    <div class="row text-right mt-100">
                      <div class="col-md-12">
                        <div class="form-group">
                          <button class="btn btn-primary">Add Whatsapp Number</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Headline Text -->
              <div class="card mb-20" id="headline">
                <div class="card-header">Headline Text</div>
                <div class="card-body">
                  <label class="font-weight-thin">Enter your success page's heading below</label>
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Do you want to show title on top of success page?
                      </label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label">Success Title</label>
                    <input type="text" class="form-control" placeholder="Title" value="" id="name" name="name">
                  </div>

                  <div class="form-group">
                    <label class="control-label">Enter your headline</label>
                    <input type="text" class="form-control" placeholder="" value="Terimakasih sudah melakukan order {{product_name}}" id="name" name="name">
                  </div>
                </div>
              </div>
              <!-- Video -->
              <div class="card mb-20" id="video">
                <div class="card-header">Video</div>
                <div class="card-body">
                  <div class="form-group">
                    <label class="control-label font-weight-thin">Add a video to your success page below</label>
                    <br>
                    <label class="control-label">Enter YouTube Video URL</label>
                    <input type="text" class="form-control" placeholder="" value="" id="name" name="name">
                  </div>
                </div>
              </div>
              <!-- Body Text -->
              <div class="card mb-20" id="bodytext">
                <div class="card-header">Body Text</div>
                <div class="card-body">
                  <label class="control-label font-weight-thin">Edit your success page's content and link below</label>
                  <br>
                  <label class="control-label">Enter some text to display on the success page</label>
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#bank_transfer" aria-controls="bank_transfer" role="tab" data-toggle="tab">Bank Transfer</a></li>
                    <li role="presentation"><a href="#cod" aria-controls="cod" role="tab" data-toggle="tab">COD</a></li>
                    <li role="presentation"><a href="#payment" aria-controls="payment" role="tab" data-toggle="tab">E-Payment</a></li>
                  </ul>

                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="bank_transfer">
                      <div class="form-group mt-100">
                        <textarea class="form-control" rows="4" placeholder="bank">
                          Untuk menyelesaikan proses order, silahkan transfer sejumlah {{total_price}} ke salah satu bank berikut ini: {{bank_accounts}} Konfirmasikan pembayaran anda di: {{payment_link}}
                        </textarea>
                      </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="cod">
                      <div class="form-group mt-100">
                        <textarea class="form-control" rows="4" placeholder="bank">
                          Orderan anda kini kami proses, silahkan tunggu kedatangan kurir dalam 2-4 hari kedepan dan siapkan pembayaran senilai
                        {{total_price}}
                        untuk dibayarkan ke kurir langsung.
                        </textarea>
                      </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="payment">
                      <div class="form-group mt-100">
                        <textarea class="form-control" rows="4" placeholder="bank">
                          <h4>Selamat, pembayaranmu berhasil!</h4>
                          Total Bayar {{total_price}}
                          Pesanan Anda akan segera kami proses
                        </textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Tracking -->
              <div class="card mb-20" id="tracking">
                <div class="card-header">Tracking</div>
                <div class="card-body">
                  <label class="control-label">Facebook Pixel</label>
                  
                  <div class="form-group">
                    <label class="control-label font-weight-thin">Pixel IDs</label>
                    <select class="form-control" id="collection">
                      <option value="" selected disabled>Input or Select Pixel ID</option>
                      <option>082762343856435893</option>
                      <option>485853458934659</option>
                      <option>328946329462394</option>
                      <option>343849328462923489</option>
                    </select>
                  </div>
                  
                  <div class="form-group">
                    <label class="control-label font-weight-thin">Pixel Events</label>
                    <table style="width: 100%;">
                      <!-- ViewContent -->
                      <tr>
                        <td style="width: 100%;">
                          <div class="card-panel-2">
                            <label class="mb-0 font-weight-thin">ViewContent</label>
                            <div style="float: right;">
                              <button type="button" class="no-button" data-toggle="modal" data-target="#modalView"><i class="fa fa-cog"></i></button>
                              <button class="no-button" type="button"><i class="fa fa-close"></i></button>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="modalView" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Pixel Event Settings</h4>
                                  </div>
                                  <div class="modal-body">
                                    <label class="control-label font-weight-thin">Event:</label>
                                    <table style="width: 100%;">
                                      <tr>
                                        <td>
                                          <input type="text" class="form-control" value="value" disabled>
                                        </td>
                                        <td style="padding: 5px;">
                                          <select class="form-control" id="category">
                                            <option value="" selected disabled>Param Value</option>
                                            <option>{{total_price}}</option>
                                            <option>{{product_price}}</option>
                                            <option>{{product_name}}</option>
                                            <option>{{product_category_full}}</option>
                                          </select>
                                        </td>
                                        <td>
                                          <button type="button" class="btn btn-default"><i class="fa fa-trash"></i></button>
                                        </td>
                                      </tr>

                                      <tr>
                                        <td>
                                          <input type="text" class="form-control" value="currency" disabled>
                                        </td>
                                        <td style="padding: 5px;">
                                          <input type="text" class="form-control" value="" placeholder="Param Value">
                                        </td>
                                        <td>
                                          <button type="button" class="btn btn-default"><i class="fa fa-trash"></i></button>
                                        </td>
                                      </tr>

                                      <tr>
                                        <td>
                                          <input type="text" class="form-control" value="content_name" disabled>
                                        </td>
                                        <td style="padding: 5px;">
                                          <select class="form-control" id="category">
                                            <option value="" selected disabled>Param Value</option>
                                            <option>{{total_price}}</option>
                                            <option>{{product_price}}</option>
                                            <option>{{product_name}}</option>
                                            <option>{{product_category_full}}</option>
                                          </select>
                                        </td>
                                        <td>
                                          <button type="button" class="btn btn-default"><i class="fa fa-trash"></i></button>
                                        </td>
                                      </tr>

                                      <tr>
                                        <td>
                                          <input type="text" class="form-control" value="content_category" disabled>
                                        </td>
                                        <td style="padding: 5px;">
                                          <select class="form-control" id="category">
                                            <option value="" selected disabled>Param Value</option>
                                            <option>{{total_price}}</option>
                                            <option>{{product_price}}</option>
                                            <option>{{product_name}}</option>
                                            <option>{{product_category_full}}</option>
                                          </select>
                                        </td>
                                        <td>
                                          <button type="button" class="btn btn-default"><i class="fa fa-trash"></i></button>
                                        </td>
                                      </tr>
                                    </table>

                                    <div class="form-group mt-100">
                                      <label class="control-label font-weight-thin">Add More Parameter</label>
                                      <select class="form-control" id="category">
                                        <option value="" selected disabled>Select or type to add new param</option>
                                        <option>value</option>
                                        <option>currency</option>
                                        <option>content_name</option>
                                        <option>content_category</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary">Save</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      
                      <tr>
                        <td style="width: 100%;">
                          <div class="card-panel-2">
                            <label class="mb-0 font-weight-thin">AddToWishlist</label>
                            <div style="float: right;">
                              <button type="button" class="no-button" data-toggle="modal" data-target="#modalAddToWishlist"><i class="fa fa-cog"></i></button>
                              <button class="no-button" type="button"><i class="fa fa-close"></i></button>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="modalAddToWishlist" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Pixel Event Settings</h4>
                                  </div>
                                  <div class="modal-body">
                                    <label class="control-label font-weight-thin">Event:</label>
                                    <table style="width: 100%;">
                                      <tr>
                                        <td>
                                          <input type="text" class="form-control" value="value" disabled>
                                        </td>
                                        <td style="padding: 5px;">
                                          <select class="form-control" id="category">
                                            <option value="" selected disabled>Param Value</option>
                                            <option>{{total_price}}</option>
                                            <option>{{product_price}}</option>
                                            <option>{{product_name}}</option>
                                            <option>{{product_category_full}}</option>
                                          </select>
                                        </td>
                                        <td>
                                          <button type="button" class="btn btn-default"><i class="fa fa-trash"></i></button>
                                        </td>
                                      </tr>

                                      <tr>
                                        <td>
                                          <input type="text" class="form-control" value="currency" disabled>
                                        </td>
                                        <td style="padding: 5px;">
                                          <input type="text" class="form-control" value="" placeholder="Param Value">
                                        </td>
                                        <td>
                                          <button type="button" class="btn btn-default"><i class="fa fa-trash"></i></button>
                                        </td>
                                      </tr>

                                      <tr>
                                        <td>
                                          <input type="text" class="form-control" value="content_name" disabled>
                                        </td>
                                        <td style="padding: 5px;">
                                          <select class="form-control" id="category">
                                            <option value="" selected disabled>Param Value</option>
                                            <option>{{total_price}}</option>
                                            <option>{{product_price}}</option>
                                            <option>{{product_name}}</option>
                                            <option>{{product_category_full}}</option>
                                          </select>
                                        </td>
                                        <td>
                                          <button type="button" class="btn btn-default"><i class="fa fa-trash"></i></button>
                                        </td>
                                      </tr>

                                      <tr>
                                        <td>
                                          <input type="text" class="form-control" value="content_category" disabled>
                                        </td>
                                        <td style="padding: 5px;">
                                          <select class="form-control" id="category">
                                            <option value="" selected disabled>Param Value</option>
                                            <option>{{total_price}}</option>
                                            <option>{{product_price}}</option>
                                            <option>{{product_name}}</option>
                                            <option>{{product_category_full}}</option>
                                          </select>
                                        </td>
                                        <td>
                                          <button type="button" class="btn btn-default"><i class="fa fa-trash"></i></button>
                                        </td>
                                      </tr>
                                    </table>

                                    <div class="form-group mt-100">
                                      <label class="control-label font-weight-thin">Add More Parameter</label>
                                      <select class="form-control" id="category">
                                        <option value="" selected disabled>Select or type to add new param</option>
                                        <option>value</option>
                                        <option>currency</option>
                                        <option>content_name</option>
                                        <option>content_category</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary">Save</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </div>
  
                  <div class="form-group">
                    <select class="form-control" id="collection">
                      <option value="" selected disabled>Input or Select Pixel Events</option>
                      <option>Add Payment Info</option>
                      <option>Add To Cart</option>
                      <option>Add To Whislist</option>
                      <option>Lead</option>
                    </select>
                  </div>

                  <label class="control-label">Google Tag Manager</label>
                  <br>
                  <label class="control-label font-weight-thin">GTM IDs</label>
                  <tr>
                    <td style="width: 100%;">
                      <div class="card-panel-2">
                        <label class="mb-0 font-weight-thin">GTM-M6VTWFM</label>
                        <div style="float: right;">
                          <button class="no-button" type="button"><i class="fa fa-close"></i></button>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 100%;">
                      <div class="card-panel-2">
                        <label class="mb-0 font-weight-thin">GTM-M6VTWFM</label>
                        <div style="float: right;">
                          <button class="no-button" type="button"><i class="fa fa-close"></i></button>
                        </div>
                      </div>
                    </td>
                  </tr>

                  <div class="form-group mt-100">
                    <select class="form-control" id="collection">
                      <option value="" selected disabled>Input or Select GTM ID</option>
                      <option>GTM-MMHGFU</option>
                      <option>GTM-MMHGFU</option>
                      <option>GTM-MMHGFU</option>
                      <option>GTM-MMHGFU</option>
                    </select>
                  </div>

                  <label class="control-label">TikTok Pixel</label>
                  <br>
                  <label class="control-label font-weight-thin">TikTok Pixel IDs</label>
                  <tr>
                    <td style="width: 100%;">
                      <div class="card-panel-2">
                        <label class="mb-0 font-weight-thin">Tiktok</label>
                        <div style="float: right;">
                          <button class="no-button" type="button"><i class="fa fa-close"></i></button>
                        </div>
                      </div>
                    </td>
                  </tr>

                  <div class="form-group mt-100">
                    <select class="form-control" id="collection">
                      <option value="" selected disabled>Input or Tiktok Pixel ID</option>
                      <option>Tiktok</option>
                      <option>Tiktok</option>
                      <option>Tiktok</option>
                      <option>Tiktok</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 col-xs-6">
                  <a href="checkout.html" class="btn btn-default">Back</a>
                </div>
                <div class="col-md-6 col-xs-6 text-right">
                  <button type="submit" class="btn btn-info"><i class="fa fa-check"></i> Save &amp; get URL</button>
                </div>
              </div>
            </form>
          </div>

          <div class="col-md-6">
            <form>
              <div class="container-fluid checkout-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="preview-success text-center">
                      <h3 class="mt-0"><b>Terimakasih sudah melakukan order kompor</b></h3>

                      <div class="success-body mt-20">
                        <p>Untuk menyelesaikan proses order, silahkan transfer sejumlah</p>
                        <p class="harga">Rp1.250.000</p>
                        <p>ke salah satu bank berikut ini:</p>

                        <div class="bank">
                          <div class="row">
                            <div class="col-md-8 col-md-offset-3 body-bank">
                              <img src="https://cdn.orderonline.id/icons/payment-channel-bca_va.png" alt="" class="img-responsive auto" />
                              <div class="bank-account">
                                No. Rek. 73548376496395
                              </div>
                              <div class="bank-name">
                                Atas Nama: <b>Rizhan</b>
                              </div>
                            </div>
                          </div>
                        </div>

                        <p>
                          Konfirmasikan pembayaran anda di: <span class="text-blue"><b>Konfirmasi Pembayaran</b></span>
                        </p>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </form>
          </div>
        </div>