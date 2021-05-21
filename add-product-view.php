<div class="row">
          <div class="col-md-6">
            <!-- Error Message -->
            <div class="card mb-20">
              <div class="card-body">
                <h4><i class="fa fa-warning text-red"></i> Please fix fields error before proceeding to next step</h4>
                <div class="callout callout-default" style="margin-bottom: 0!important;">
                  Product Variations is not valid
                </div>
              </div>
            </div>
            
            <form>
              <!-- Options -->
              <div class="card mb-20" id="options">
                <div class="card-header">Options</div>
                <div class="card-body">

                  <div class="form-group">
                    <label for="name">Product Name <span class="font-weight-thin">will appear on the cart & invoice</span></label>
                    <input type="text" class="form-control" id="name" name="name">
                  </div>
                  <div class="form-group">
                    <label for="url">Checkout Page URL</label>
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1">/</span>
                      <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" id="url" name="url">
                    </div>
                    <small class="font-italic">Checkout page URL: <a href="https://yokayuga.orderonline.id/">https://yokayuga.orderonline.id/</a></small>
                  </div>
                  <div class="form-group">
                    <label for="name">Product Code <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Digunakan untuk penamaan kontak di Google Contacts"></i></label>
                    <input type="text" class="form-control" id="name" name="name">
                    <small class="font-italic">Example: product code for "Kelambu Anak Bayi" is KAB</small>
                  </div>
                  <div class="form-group">
                    <label for="category" class="control-label">Product Category</label>
                    <select class="form-control" id="category">
                      <option value="" selected disabled>Select Category</option>
                      <option>Buku</option>
                      <option>Dapur</option>
                      <option>Elektronik</option>
                      <option>Fashion</option>
                    </select>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <select class="form-control" id="collection">
                          <option value="" selected disabled>Select Category</option>
                          <option>Buku</option>
                          <option>Dapur</option>
                          <option>Elektronik</option>
                          <option>Fashion</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <select class="form-control" id="collection">
                          <option value="" selected disabled>Select Category</option>
                          <option>Alam</option>
                          <option>Fotografi</option>
                          <option>Hiburan</option>
                          <option>Humor</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label>Product Collections</label>
                    <select class="form-control select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                      <option>Alabama</option>
                      <option>Alaska</option>
                      <option>California</option>
                      <option>Delaware</option>
                      <option>Tennessee</option>
                      <option>Texas</option>
                      <option>Washington</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="collection" class="control-label">Product Status 
                      <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Disabled: Halaman pemesanan produk tidak dapat dikunjungi, Test Mode: Halaman
                      Pemesanan produk dapat dikunjungi tetapi order yang terjadi tidak akan diproses, Live: Halaman pemesanan produk siap untuk digunakan"></i>
                    </label>
                    <br />
                    <div class="btn-group" data-toggle="buttons">
                      <label class="btn btn-primary active">
                        <input type="radio" name="options" id="option1" checked> Disabled
                      </label>
                      <label class="btn btn-primary">
                        <input type="radio" name="options" id="option2"> Test Mode
                      </label>
                      <label class="btn btn-primary">
                        <input type="radio" name="options" id="option3"> Live
                      </label>
                    </div>
                  </div>

                </div>
              </div>
              <!-- Storefront BELUM DIPAKAI -->
              <!-- <div class="card mb-20" id="storefront">
                <div class="card-header">Storefront</div>
                <div class="card-body">

                  <div class="form-group">
                    <label for="name">Visibility</label><br />
                    <div class="switch-flex">
                      <label class="switch">
                        <input type="checkbox" checked>
                        <span class="switch-slider round"></span>
                      </label>
                      <span class="show-product"> Show product in Storefront</span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="name">Max Quantity</label><br />
                    <div class="switch-flex">
                      <label class="switch">
                        <input type="checkbox" checked>
                        <span class="switch-slider round"></span>
                      </label>
                      <span class="show-product"> Enable</span>
                      <span class="show-product"><input type="number" class="form-control" min="1" value="1"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="name">Description <span class="font-weight-thin">(Explain more about your product)</span></label><br />
                    <textarea class="textarea-description" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>

                </div>
              </div> -->

              <!-- Images -->
              <div class="card mb-20" id="images">
                <div class="card-header">Images</div>
                <div class="card-body">

                  <div class="form-group mb-1">
                    <label class="font-weight-thin">Upload your product images (up to 10 images)</label><br />
                    <!-- <input type="file" id="image"> -->
                    <label class="custom-file-upload">
                      <input type="file"  id="image" />
                      Upload Images
                    </label>
                  </div>
                  <small class="font-italic">You can choose to show or hide product images on Checkout Page section</small>

                </div>
              </div>
              <!-- Pricing -->
              <div class="card mb-20" id="pricing">
                <div class="card-header">Pricing</div>
                <div class="card-body">

                  <label>Product Type <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Apakah produk ini memiliki variasi atau tidak"></i></label><br />
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#simple" aria-controls="simple" role="tab" data-toggle="tab">Simple</a></li>
                    <!-- <li role="presentation"><a href="#variable" aria-controls="variable" role="tab" data-toggle="tab">Variable</a></li> -->
                  </ul>

                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="simple">
                      <div class="form-group mt-100">
                        <label for="price" class="font-weight-thin">Regular Price</label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">Rp</span>
                          <input type="text" class="form-control" placeholder="price" value="0" aria-describedby="basic-addon1" id="price" name="price">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> Sale Price
                          </label>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">Rp</span>
                          <input type="text" class="form-control" placeholder="sale-price" value="0" aria-describedby="basic-addon1" id="sale-price" name="sale-price">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> Schedule Sale Price
                          </label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Date range:</label>
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" class="form-control pull-right" id="reservation">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="cogs" class="font-weight-thin">COGS <span class="text-grey">(optional)</span> 
                          <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Cost of Goods Sold / Harga Pokok"></i>
                        </label>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">Rp</span>
                          <input type="text" class="form-control" placeholder="cogs" value="0" aria-describedby="basic-addon1" id="cogs" name="cogs">
                        </div>
                      </div>

                      <!-- BELUM DIPAKAI -->
                      <!-- <a role="button" data-toggle="collapse" href="#addWholesaleProces" aria-expanded="false" aria-controls="addWholesaleProces">
                        Add Wholesale Prices
                      </a>
                      <div class="collapse" id="addWholesaleProces">
                        <div class="well">
                          <table class="table mb-0">
                            <tr>
                              <td style="text-align: center;">>=</td>
                              <td style="text-align: center;">
                                <input type="number" class="form-control" placeholder="Min. Quantity" min="0">
                              </td>
                              <td style="text-align: center;">=</td>
                              <td style="text-align: center;">
                                <input type="number" class="form-control" placeholder="Price">
                              </td>
                              <td style="text-align: center;">
                                <i class="fa fa-close"></i>
                              </td>
                            </tr>
                            <tr>
                              <td style="text-align: center;">>=</td>
                              <td style="text-align: center;">
                                <input type="number" class="form-control" placeholder="Min. Quantity" min="0">
                              </td>
                              <td style="text-align: center;">=</td>
                              <td style="text-align: center;">
                                <input type="number" class="form-control" placeholder="Price">
                              </td>
                              <td style="text-align: center;">
                                <i class="fa fa-close"></i>
                              </td>
                            </tr>
                            <tr>
                              <td style="text-align: center;">>=</td>
                              <td style="text-align: center;">
                                <input type="number" class="form-control" placeholder="Min. Quantity" min="0">
                              </td>
                              <td style="text-align: center;">=</td>
                              <td style="text-align: center;">
                                <input type="number" class="form-control" placeholder="Price">
                              </td>
                              <td style="text-align: center;">
                                <i class="fa fa-close"></i>
                              </td>
                            </tr>
                            <tr>
                              <td style="text-align: center;">>=</td>
                              <td style="text-align: center;">
                                <input type="number" class="form-control" placeholder="Min. Quantity" min="0">
                              </td>
                              <td style="text-align: center;">=</td>
                              <td style="text-align: center;">
                                <input type="number" class="form-control" placeholder="Price">
                              </td>
                              <td style="text-align: center;">
                                <i class="fa fa-close"></i>
                              </td>
                            </tr>
                            <tr>
                              <td style="text-align: center;">>=</td>
                              <td style="text-align: center;">
                                <input type="number" class="form-control" placeholder="Min. Quantity" min="0">
                              </td>
                              <td style="text-align: center;">=</td>
                              <td style="text-align: center;">
                                <input type="number" class="form-control" placeholder="Price">
                              </td>
                              <td style="text-align: center;">
                                <i class="fa fa-close"></i>
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div> -->
                    </div>

                    <!-- BELUM DIPAKAI -->
                    <!-- <div role="tabpanel" class="tab-pane" id="variable">
                      <div class="form-group mt-100">
                        <label>Multiple Variations</label>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> Do you want to enable multiple variations order?
                          </label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="attribute" class="control-label">Attributes <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Ketik untuk menambah atribut lain"></i></label>
                        <select class="form-control" id="attribute">
                          <option value="" selected disabled>Input or Select Attribute</option>
                          <option>Ukuran</option>
                          <option>Warna</option>
                        </select>
                      </div>
                      <table class="table background-table mb-0">
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-group mb-0">
                                <input type="text" class="form-control" placeholder="warna" value="warna" id="warna" name="warna">
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-group mb-0">
                                <div class="form-group">
                                  <input type="text" placeholder="Input 'Warna' Option" value="Amsterdam,Washington" data-role="tagsinput" id="tags-filter">
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td class="text-right">
                              <div class="form-group mb-0">
                                <button class="btn btn-sm btn-default"><i class="fa fa-close"></i> Remove Attribute</button>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <table class="table background-table">
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-group mb-0">
                                <input type="text" class="form-control" placeholder="ukuran" value="ukuran" id="ukuran" name="ukuran">
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-group mb-0">
                                <div class="form-group">
                                  <input type="text" placeholder="Input 'Ukuran' Option" value="Amsterdam,Washington" data-role="tagsinput" id="tags-filter">
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td class="text-right">
                              <div class="form-group mb-0">
                                <button class="btn btn-sm btn-default"><i class="fa fa-close"></i> Remove Attribute</button>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>

                      <div class="form-group">
                        <label for="variation" class="control-label">Variations Price</label><br />
                        <input type="text" placeholder="No Variations Available" class="form-control" disabled id="variation" name="variation">
                        <table class="table background-table">
                          <tbody>
                            <tr>
                              <td>
                                <label class="control-label">silver - Besar</label>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <div class="input-group" id="warna">
                                        <div class="input-group-addon">Rp</div>
                                        <input type="text" class="form-control" id="exampleInputAmount" placeholder="" value="0">
                                        <div class="input-group-addon">
                                          <button type="button" class="no-button" data-toggle="tooltip" data-placement="top" title="Apply to all variations"><i class="fa fa-clone"></i></button>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="phone" class="control-label">COGS <span class="font-weight-thin text-grey">(optional)</span> <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Cost of Goods Sold / Harga Pokok"></i></label>
                                      <div class="input-group" id="warna">
                                        <div class="input-group-addon">Rp</div>
                                        <input type="text" class="form-control" id="exampleInputAmount" placeholder="" value="0">
                                        <div class="input-group-addon">
                                          <button type="button" class="no-button" data-toggle="tooltip" data-placement="top" title="Apply to all variations"><i class="fa fa-clone"></i></button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <div class="input-group" id="warna">
                                        <div class="input-group-addon">Weight (gr)</div>
                                        <input type="number" min="0" class="form-control" id="exampleInputAmount" placeholder="" value="1000">
                                        <div class="input-group-addon">
                                          <button type="button" class="no-button" data-toggle="tooltip" data-placement="top" title="Apply to all variations"><i class="fa fa-clone"></i></button>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="mt-6">
                                      <div class="text-center">
                                        <button type="button" class="no-button" data-toggle="modal" data-target="#modalWholesale">Add / Edit Wholesale Price</button>
                                        <br>
                                        <small style="color: red;">Wholesale Price Error</small>
                                      </div>

                                      <div class="modal fade" id="modalWholesale" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                              <h4 class="modal-title" id="myModalLabel">Wholesale</h4>
                                            </div>
                                            <div class="modal-body">
                                              <div class="form-group">
                                                <label class="control-label">Normal Price: Rp0</label>
                                                <table class="table">
                                                  <tr>
                                                    <td style="text-align: center;">>=</td>
                                                    <td style="text-align: center;">
                                                      <input type="number" class="form-control" placeholder="Min. Quantity" min="0">
                                                    </td>
                                                    <td style="text-align: center;">=</td>
                                                    <td style="text-align: center;">
                                                      <input type="number" class="form-control" placeholder="Price">
                                                    </td>
                                                    <td style="text-align: center;">
                                                      <i class="fa fa-close"></i>
                                                    </td>
                                                  </tr>
                                                  <tr>
                                                    <td style="text-align: center;">>=</td>
                                                    <td style="text-align: center;">
                                                      <input type="number" class="form-control" placeholder="Min. Quantity" min="0">
                                                    </td>
                                                    <td style="text-align: center;">=</td>
                                                    <td style="text-align: center;">
                                                      <input type="number" class="form-control" placeholder="Price">
                                                    </td>
                                                    <td style="text-align: center;">
                                                      <i class="fa fa-close"></i>
                                                    </td>
                                                  </tr>
                                                  <tr>
                                                    <td style="text-align: center;">>=</td>
                                                    <td style="text-align: center;">
                                                      <input type="number" class="form-control" placeholder="Min. Quantity" min="0">
                                                    </td>
                                                    <td style="text-align: center;">=</td>
                                                    <td style="text-align: center;">
                                                      <input type="number" class="form-control" placeholder="Price">
                                                    </td>
                                                    <td style="text-align: center;">
                                                      <i class="fa fa-close"></i>
                                                    </td>
                                                  </tr>
                                                  <tr>
                                                    <td style="text-align: center;">>=</td>
                                                    <td style="text-align: center;">
                                                      <input type="number" class="form-control" placeholder="Min. Quantity" min="0">
                                                    </td>
                                                    <td style="text-align: center;">=</td>
                                                    <td style="text-align: center;">
                                                      <input type="number" class="form-control" placeholder="Price">
                                                    </td>
                                                    <td style="text-align: center;">
                                                      <i class="fa fa-close"></i>
                                                    </td>
                                                  </tr>
                                                  <tr>
                                                    <td style="text-align: center;">>=</td>
                                                    <td style="text-align: center;">
                                                      <input type="number" class="form-control" placeholder="Min. Quantity" min="0">
                                                    </td>
                                                    <td style="text-align: center;">=</td>
                                                    <td style="text-align: center;">
                                                      <input type="number" class="form-control" placeholder="Price">
                                                    </td>
                                                    <td style="text-align: center;">
                                                      <i class="fa fa-close"></i>
                                                    </td>
                                                  </tr>
                                                </table>
                                              </div>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                              <button type="button" class="btn btn-primary">Ok</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div> -->
                  </div>

                </div>
              </div>
              <!-- Inventory -->
              <div class="card mb-20" id="inventory">
                <div class="card-header">Inventory</div>
                <div class="card-body">

                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Enable Stock Management
                      </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="stock" class="control-label">Stock Quantity</label>
                        <input type="number" class="form-control" placeholder="Stock Quantity" value="0" min="0">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="stock" class="control-label">Allow Backorders? <i class="fa fa-info-circle"></i></label>
                        <select class="form-control" id="stock">
                          <option value="" selected disabled>In Stock</option>
                          <option>Allow</option>
                          <option>Dont Allow</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="stock" class="control-label">Stock Status</label>
                    <select class="form-control" id="stock">
                      <option value="" selected disabled>Select Stock</option>
                      <option>In Stock</option>
                      <option>Out of Stock</option>
                    </select>
                  </div>

                  <div class="inventory mb-10">
                    <div class="row">
                      <div class="col-md-6">
                        <label class="control-label">silver - Besar</label>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group mb-0">
                          <input type="number" class="form-control" placeholder="Stock Quantity" value="0" min="0">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="stock" class="control-label">Allow Backorders? <i class="fa fa-info-circle"></i></label>
                        <select class="form-control" id="stock">
                          <option value="" selected disabled>In Stock</option>
                          <option>Allow</option>
                          <option>Dont Allow</option>
                        </select>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <!-- Bump -->
              <div class="card mb-20" id="bump">
                <div class="card-header">Bump</div>
                <div class="card-body">

                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Do you want to show a bump offer on this product?
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="bump" class="control-label">Bump Product Name <span class="font-weight-thin">will appear on the cart & invoice</span></label>
                    <input type="text" class="form-control" placeholder="" name="bump" id="bump" >
                  </div>
                  <div class="form-group">
                    <label for="price">Price</label>
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1">Rp</span>
                      <input type="text" class="form-control" placeholder="price" value="0" aria-describedby="basic-addon1" id="price" name="price">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="bump-weight">Bump Weight <span class="font-weight-thin">(gr)</span></label>
                    <input type="number" class="form-control" placeholder="bump-weight" value="0" min="0" aria-describedby="basic-addon1" id="bump-weight" name="bump-weight">
                  </div>
                  <div class="form-group">
                    <label>Bump Image</label><br />
                    <label class="custom-file-upload">
                      <input type="file"  id="image" />
                      Upload Image
                    </label>
                  </div>
                  <div class="produk-bump">
                    <div class="border">
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <input type="checkbox" aria-label="...">
                          </span>
                          <input type="text" class="form-control" aria-label="Centang untuk memesan juga" value="Centang untuk memesan juga">
                        </div>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nama Produk Bump Anda + Harga" value="Nama Produk Bump Anda + Harga" aria-describedby="basic-addon1" >
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" placeholder="Penjelasan Tentang Produk Bump Anda Disini" rows="3"></textarea>  
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Shipping -->
              <div class="card mb-20" id="shipping">
                <div class="card-header">Shipping</div>
                <div class="card-body">

                  <div class="form-group mb-1">
                    <label for="bump-weight" class="font-weight-thin">Weight (gr)</label>
                    <input type="number" class="form-control" placeholder="bump-weight" value="0" min="0" aria-describedby="basic-addon1" id="bump-weight" name="bump-weight">
                  </div>
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Do you want to add shipping cost calculation?
                      </label>
                    </div>
                  </div>

                  <label>Shipping Type</label><br />
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#automated" aria-controls="automated" role="tab" data-toggle="tab">Automated</a></li>
                    <li role="presentation"><a href="#flat" aria-controls="flat" role="tab" data-toggle="tab">Flat</a></li>
                    <li role="presentation"><a href="#free" aria-controls="free" role="tab" data-toggle="tab">Free</a></li>
                  </ul>

                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="automated">
                      <div class="form-group mt-100">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> <img src="dist/img/scula/icon-logo.png" width="100px" alt="">
                          </label>
                        </div>
                      </div>

                      <label class="mt-10 mb-0">Shipping Services:</label>
                      <table style="width: 100%;">
                        <tr>
                          <td>
                            <div class="form-group mb-0">
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox"> Regular
                                </label>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="form-group mb-0">
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox"> Next Day
                                </label>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="form-group mb-0">
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox"> Economical
                                </label>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-group mb-0">
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox"> Same Day (Beta) <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Hanya tersedia di kurir POS"></i>
                                </label>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="form-group mb-0">
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox"> Trucking Beta <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Hanya tersedia di kurir JNE"></i>
                                </label>
                              </div>
                            </div>
                          </td>
                        </tr>
                      </table>

                      <label>Ship From:</label>
                      <div class="form-group">
                        <label for="province" class="control-label font-weight-thin">Province</label>
                        <select class="form-control" id="province">
                          <option value="" selected disabled>Province</option>
                          <option>Yogyakarta</option>
                          <option>Jakarta</option>
                          <option>Bali</option>
                          <option>Bandung</option>
                        </select>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="city" class="control-label font-weight-thin">City</label>
                            <select class="form-control" id="city">
                              <option value="" selected disabled>City</option>
                              <option>Sleman</option>
                              <option>Bantul</option>
                              <option>Kulonprogo</option>
                              <option>Gunungkidul</option>
                            </select>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="subdistrict" class="control-label font-weight-thin">Subdistrict</label>
                            <select class="form-control" id="subdistrict">
                              <option value="" selected disabled>Subdistrict</option>
                              <option>Condongcatur</option>
                              <option>Banguntapan</option>
                              <option>Wates</option>
                              <option>Wonosari</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="form-group mb-0">
                        <label for="shipping">Additional Shipping Cost</label>
                        <input type="number" class="form-control" placeholder="shipping" value="0" min="0" aria-describedby="basic-addon1" id="shipping" name="shipping">
                      </div>
                      <small class="font-italic">Additional/Reduction Shipping Price here. (insert negative value to reduce shipping cost)</small>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="flat">
                      <div class="form-group mt-100">
                        <label for="shipping-price" class="font-weight-thin">Flat Shipping Price</label>
                        <input type="text" class="form-control" placeholder="Flat Shipping Price" value="0" id="shipping-price" name="shipping-price">
                      </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="free">

                    </div>
                  </div>
                </div>
              </div>
              <!-- Payment -->
              <div class="card mb-20" id="payment">
                <div class="card-header">Payment</div>
                <div class="card-body">

                  <label class="font-weight-thin">Choose your payment method</label><br />
                  <div class="form-group">
                    <!-- Bank Transfer -->
                    <div class="bank-transfer">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Bank Transfer
                        </label>
                      </div>
                      <button type="button" class="btn-gear" data-toggle="modal" data-target="#bankModal">
                        <i class="fa fa-gear"></i>
                      </button>
                      <!-- Modal -->
                      <div class="modal fade" id="bankModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title" id="myModalLabel">Method Description - Bank Transfer</h4>
                            </div>
                            <div class="modal-body">
                              <div class="form-group">
                                <textarea class="form-control" id="description" placeholder="Description"></textarea>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Ok</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- COD -->
                    <div class="bank-transfer">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> COD
                        </label>
                      </div>
                      <div>
                        <button type="button" class="btn-gear" data-toggle="tooltip" data-placement="top" title="Cash on Delivery"><i class="fa fa-info-circle"></i></button>
                        <button type="button" class="btn-gear" data-toggle="modal" data-target="#codModal">
                          <i class="fa fa-gear"></i>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="codModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Method Description - COD</h4>
                              </div>
                              <div class="modal-body">
                                <div class="form-group">
                                  <textarea class="form-control" id="description" placeholder="Description"></textarea>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Ok</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-payment">
                      <label>COD Settings</label>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="courier" class="control-label">Courier Fee Percentage</label>
                            <div class="input-group" id="courier">
                              <input type="number" min="0" value="0" class="form-control" id="exampleInputAmount" placeholder="Amount">
                              <div class="input-group-addon">%</div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="min-courier">Courier Minimal Fee</label>
                            <input type="number" class="form-control" placeholder="min-courier" value="5000" min="0" aria-describedby="basic-addon1" id="min-courier" name="min-courier">
                          </div>
                          <div class="form-grou">
                            <label>Shipping</label>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox"> Include Shipping
                              </label>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="fee-type" class="control-label">Fee Type</label>
                            <select class="form-control" id="fee-type">
                              <option value="" selected disabled>Type</option>
                              <option>Product Only</option>
                              <option>Product + Shipping</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="min-courier">Courier Maximal Fee</label>
                            <input type="number" class="form-control" placeholder="max-courier" value="15000" min="0" aria-describedby="basic-addon1" id="max-courier" name="max-courier">
                          </div>
                          <div class="form-grou">
                            <label>COD Couriers</label>
                            <br>

                            <label class="font-weight-thin">ID Express</label> <br>
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#kurirModal">Set Couriers</button>
                            <div class="modal fade" id="kurirModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="exampleModalLabel">COD Couriers</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="form-group">
                                      <div class="checkbox">
                                        <label>
                                          <input type="checkbox"> <img src="dist/img/scula/icon-logo.png" width="100px" alt="">
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Ok</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- E-Payment -->
                    <div class="bank-transfer">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> E-Payment
                        </label>
                      </div>
                      <button type="button" class="btn-gear" data-toggle="tooltip" data-placement="top" title="Menggunakan Rekber (Payment Gateway)"><i class="fa fa-info-circle"></i></button>
                    </div>

                    <div class="form-payment">
                      <label>E-Payment Channels</label>
                      <!-- <button type="button" class="btn-gear" data-toggle="tooltip" data-placement="top" title="Cash on Delivery"><i class="fa fa-info-circle"></i></button> -->
                      <div class="payment-transfer">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> <img src="dist/img/scula/visa.png" width="50px" alt=""> &nbsp;Credit Card
                          </label>
                        </div>
                        <div>
                          <button type="button" class="btn-gear" data-toggle="modal" data-target="#codModal">
                            <i class="fa fa-gear"></i>
                          </button>
                          <!-- Modal -->
                          <div class="modal fade" id="codModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <h4 class="modal-title" id="myModalLabel">Channel - Credit Card</h4>
                                </div>
                                <div class="modal-body">
                                  <div class="form-group">
                                    <textarea class="form-control" id="description" placeholder="Description"></textarea>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Ok</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <label class="font-weight-thin">Biaya per transaksi dapat di-check di sini: <a href="">Biaya Transaksi</a></label>

                    </div>
                  </div>

                </div>
              </div>
              <!-- Unique Code -->
              <div class="card mb-20" id="unique">
                <div class="card-header">Unique Code</div>
                <div class="card-body">

                  <label class="font-weight-thin">Set up unique code for each payment</label><br />
                  <div class="form-group mb-1">
                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Enable Unique Code
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label font-weight-thin">Type</label><br />
                    <div class="btn-group" data-toggle="buttons">
                      <label class="btn btn-primary active">
                        <input type="radio" name="options" id="option1" checked> Decrease
                      </label>
                      <label class="btn btn-primary">
                        <input type="radio" name="options" id="option2"> Increase
                      </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="font-weight-thin">Min</label>
                        <input type="number" class="form-control" value="1" min="1" >
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="font-weight-thin">Max</label>
                        <input type="number" class="form-control" value="1" min="999" >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Assign Product to -->
              <div class="card mb-20" id="assign">
                <div class="card-header">Assign Product to</div>
                <div class="card-body">

                  <div>
                    <ul class="nav nav-tabs" role="tablist">
                      <li role="presentation" class="active"><a href="#customer-service" aria-controls="customer-service" role="tab" data-toggle="tab">Customer Service</a></li>
                      <li role="presentation"><a href="#shipper" aria-controls="shipper" role="tab" data-toggle="tab">Shipper</a></li>
                      <li role="presentation"><a href="#admin" aria-controls="admin" role="tab" data-toggle="tab">Admin</a></li>
                    </ul>
                  
                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane active" id="customer-service">
                        <div class="form-group mt-3">
                          <select class="form-control" id="stock">
                            <option value="" selected disabled>Select Customer Service</option>
                            <option>Allow</option>
                            <option>Dont Allow</option>
                          </select>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="no-service">
                              <label class="font-weight-thin">No Customer Service assigned to this product</label>
                            </div>

                            <div class="tab-content">
                              <div role="tabpanel" class="tab-pane active" id="equals">
                                <div class="data-service mb-20">
                                  <label class="font-weight-thin">Putri Naura</label> <button class="btn btn-default"><i class="fa fa-close"></i></button>
                                </div>
                              </div>

                              <div role="tabpanel" class="tab-pane" id="percentage">
                                <div>
                                  <div class="box-slider">
                                    <div class="data-service-2">
                                      <label class="font-weight-thin">Putri Naura</label> <button class="btn btn-default"><i class="fa fa-close"></i></button>
                                    </div>
                                    <div class="padding-slider">
                                      <label style="margin:0 20px 0 0;">61%</label>
                                      <input id="ex1" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14"/>
                                    </div>
                                  </div>
                                  <div class="row text-right mt-10">
                                    <div class="col-md-12">
                                      <label class="font-weight-thin">Total Percentages: <span style="color:red">61%</span> <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Total percentages must be 100%"></i></label>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div role="tabpanel" class="tab-pane" id="fixed">
                                <div>
                                  <div class="box-slider">
                                    <div class="data-service-2">
                                      <label class="font-weight-thin">Putri Naura</label> <button class="btn btn-default"><i class="fa fa-close"></i></button>
                                    </div>
                                    <div class="padding-slider">
                                      <label style="margin:0 20px 0 0;">0</label>
                                      <input id="ex2" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14"/>
                                    </div>
                                  </div>
                                  <div class="row text-right mt-10">
                                    <div class="col-md-12">
                                      <label class="font-weight-thin">Total Rates: <span style="color:red">0</span> <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Total rates must be > 0"></i></label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <label>Order's Distribution</label><br />
                            <ul class="nav nav-tabs order" role="tablist">
                              <li role="presentation" class="active"><a href="#equals" aria-controls="equals" role="tab" data-toggle="tab">Equals</a></li>
                              <li role="presentation"><a href="#percentage" aria-controls="percentage" role="tab" data-toggle="tab">Percentage</a></li>
                              <li role="presentation"><a href="#fixed" aria-controls="fixed" role="tab" data-toggle="tab">Fixed</a></li>
                            </ul>

                          </div>
                        </div>

                      </div>
                      <div role="tabpanel" class="tab-pane" id="shipper">
                        <div class="form-group mt-3">
                          <select class="form-control" id="stock">
                            <option value="" selected disabled>Select Customer Service</option>
                            <option>Allow</option>
                            <option>Dont Allow</option>
                          </select>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="no-service">
                              <label class="font-weight-thin">No Customer Service assigned to this product</label>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div role="tabpanel" class="tab-pane" id="admin">
                        <div class="form-group mt-3">
                          <select class="form-control" id="stock">
                            <option value="" selected disabled>Select Customer Service</option>
                            <option>Allow</option>
                            <option>Dont Allow</option>
                          </select>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="no-service">
                              <label class="font-weight-thin">No Customer Service assigned to this product</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-12 text-right">
                  <a href="checkout.html" class="btn btn-info">Next <i class="fa fa-arrow-right"></i></a>
                </div>
              </div>
            </form>
          </div>

          <div class="col-md-6">
            <form>
              <div class="container-fluid checkout-body">
                <div class="row d-flex">
                  <div class="col checkout-body__form">
                    <div class="image-container">
                      <div class="row">
                        <div class="col-md-6 col-xs-6">
                          <img src="https://cdn.orderonline.id/img/seal_secure_id.png" class="img-fluid" alt="Transaksi Aman">
                        </div>
                        <div class="col-md-6 col-xs-6">
                          <img src="https://cdn.orderonline.id/img/seal_money_back_id.png" class="img-fluid" alt="money_back_id">
                        </div>
                      </div>
                    </div>
      
                    <div class="contact-information">
                      <div class="contact-information-header section-title">
                        <span>Data Penerima:</span>
                      </div>
                      <div class="form-group">
                        <input type="text" name="name" class="form-control" id="field-name" placeholder="Nama Anda" maxlength="160" data-label="Nama" required>
                      </div>
                      <div class="form-group">
                        <input type="tel" name="phone" class="form-control" id="field-phone" placeholder="No. WhatsApp Anda" maxlength="160" data-label="No Handphone/WhatsApp" required>
                      </div>
                      <div class="form-group">
                        <input type="email" name="email" class="form-control" id="field-email" placeholder="Email Anda" maxlength="160" data-label="Email" required>
                      </div>
                      <div class="form-group">
                        <select name="complete_district" class="form-control" placeholder="Masukkan Kota / Kecamatan" title="Masukkan Kota / Kecamatan" data-label="Kota / Kecamatan" required>
                          <option value="" selected disabled>Masukkan Kota / Kecamatan</option>
                          <option>Yogyakarta</option>
                          <option>Sleman</option>
                        </select>
                      </div>
                    </div>
      
                    <div class="payment-information">
                      <div class="payment-information-header section-title">
                        <span>Metode Pembayaran:</span>
                      </div>
                      <div class="ooef-payment-options">
                        <div class="ooef-payment-option">
                          <div class="ooef-payment-option-title">
                            <label class="custom-control custom-radio">
                              <input type="radio" name="ooef_payment_method" class="ooef-payment-method custom-control-input" value="bank_transfer" checked>
                              <div class="custom-control-label">
                                <img src="https://cdn.orderonline.id/icons/payment-bank_transfer.png" alt="bank_transfer">
                                <span>Bank Transfer</span>
                              </div>
                            </label>
                          </div>
                        </div>
                        
                        <div class="ooef-payment-option ">
                          <div class="ooef-payment-option-title">
                            <label class="custom-control custom-radio">
                              <input
                                type="radio"
                                name="ooef_payment_method"
                                class="ooef-payment-method custom-control-input ooef-payment-channels"
                                data-channel="credit_card"
                                value="instant"
                              >
                              <div class="custom-control-label">
                                <img src="https://cdn.orderonline.id/icons/payment-channel-credit_card.png" alt="credit_card">
                                <span>Credit Card</span>
                              </div>
                            </label>
                          </div>
                        </div>
                        
                        <div class="ooef-payment-option ">
                          <div class="ooef-payment-option-title">
                            <label class="custom-control custom-radio">
                              <input
                                type="radio"
                                name="ooef_payment_method"
                                class="ooef-payment-method custom-control-input ooef-payment-channels"
                                data-channel="bca_va"
                                value="instant"
                              >
                              <div class="custom-control-label">
                                <img src="https://cdn.orderonline.id/icons/payment-channel-bca_va.png" alt="bca_va">
                                <span>BCA Virtual Account</span>
                              </div>
                            </label>
                          </div>
                        </div>
                        
                        <div class="ooef-payment-option ">
                          <div class="ooef-payment-option-title">
                            <label class="custom-control custom-radio">
                              <input
                                type="radio"
                                name="ooef_payment_method"
                                class="ooef-payment-method custom-control-input ooef-payment-channels"
                                data-channel="bni_va"
                                value="instant"
                              >
                              <div class="custom-control-label">
                                <img src="https://cdn.orderonline.id/icons/payment-channel-bni_va.png" alt="bni_va">
                                <span>BNI Virtual Account</span>
                              </div>
                            </label>
                          </div>
                        </div>
                        
                        <div class="ooef-payment-option ">
                          <div class="ooef-payment-option-title">
                            <label class="custom-control custom-radio">
                              <input
                                type="radio"
                                name="ooef_payment_method"
                                class="ooef-payment-method custom-control-input ooef-payment-channels"
                                data-channel="gopay"
                                value="instant"
                              >
                              <div class="custom-control-label">
                                <img src="https://cdn.orderonline.id/icons/payment-channel-gopay.png" alt="gopay">
                                <span>GoPay</span>
                              </div>
                            </label>
                          </div>
                        </div>
                        
                        <div class="ooef-payment-option ">
                          <div class="ooef-payment-option-title">
                            <label class="custom-control custom-radio">
                              <input
                                type="radio"
                                name="ooef_payment_method"
                                class="ooef-payment-method custom-control-input ooef-payment-channels"
                                data-channel="shopeepay"
                                value="instant"
                              >
                              <div class="custom-control-label">
                                <img src="https://cdn.orderonline.id/icons/payment-channel-shopeepay.png" alt="shopeepay">
                                <span>ShopeePay</span>
                              </div>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
      
                    <div class="bump-information">
                      <div class="bump-actions d-flex-2">
                        <div class="form-arrow">
                          <img src="https://cdn.orderonline.id/arrow.gif" alt="">
                        </div>
                        <label class="bump-check m-0">
                          <div class="custom-control custom-checkbox large white">
                            <input type="checkbox" class="custom-control-input ooef-check-bump">
                            <div class="custom-control-label pl-10">OrderOnline Personal (1 Tahun)</div>
                          </div>
                        </label>
                      </div>
                      <div class="bump-body">
                        <div class="bump-title">
                          GRATIS biaya langganan 2 BULAN jika berlangganan langsung selama 1 tahun
                        </div>
                        <div class="bump-description">
                          Harga normal OrderOnline Personal 1 tahun adalah Rp1.788.000. Namun jika Anda berlangganan langsung selama 1 tahun, Anda mendapatkan potongan biaya langganan 2 bulan, sehingga cukup bayar Rp1.499.000 saja. Silahkan centang checkbox diatas!
                        </div>
                      </div>
                    </div>
      
                    <div class="checkout-actions">
                      <button type="submit" class="btn btn-block btn-complete-order" id="btn-complete-order">
                        PESAN SEKARANG
                        <span class="material-icons-outlined">keyboard_tab</span>
                      </button>
                    </div>
                  </div>
      
                  <div class="col checkout-body__sidebar">
                    <div class="product-image-slider">
                      <!-- <img src="https://cdn.orderonline.id/uploads/4521001614268094735.png" class="img-responsive"> -->
                      <img src="dist/img/scula/logo.png" class="img-responsive">
                    </div>
      
                    <div class="product-features">
                      <div class="product-features-header section-title mb-20">
                        <span>Yang Anda Dapatkan:</span>
                      </div>
                      
                      <div class="product-feature-item  d-flex-2">
                        <div class="product-feature-item__mark mr-1">
                          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="mark-icon svg-inline--fa fa-check"><path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z" class=""></path></svg>
                        </div>
                        <div class="product-feature-item__content">
                          100% web-based software - Anda tinggal login lewat browser, tidak perlu install atau download apapun.
                        </div>
                      </div>
      
                      <div class="product-feature-item  d-flex-2">
                        <div class="product-feature-item__mark mr-1">
                          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="mark-icon svg-inline--fa fa-check"><path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z" class=""></path></svg>
                        </div>
                        <div class="product-feature-item__content">
                          Gratis support dan updates.
                        </div>
                      </div>
      
                      <div class="product-feature-item  d-flex-2">
                        <div class="product-feature-item__mark mr-1">
                          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="mark-icon svg-inline--fa fa-check"><path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z" class=""></path></svg>
                        </div>
                        <div class="product-feature-item__content">
                          Tutorial lengkap &amp; komunitas Facebook group.
                        </div>
                      </div>
                    </div>
      
                    <div class="order-summary">
                      <div class="order-summary-header">RINCIAN PESANAN:</div>
                      <div class="product-price clearfix">
                        <div class="product-price__name float-left summary-product-name">
                          OrderOnline Personal
                        </div>
                        <div style="display: block;">
                          <div class="product-price-tag float-right">
                            <div class="product-price__price float-right lined-price summary-product-lined-price">Rp. 199.000</div>
                          </div>
                        </div>
                            
                        <div class="product-price-tag order-summary-item-normal float-right">
                          <div class="product-price__price float-right summary-product-price">Rp. 149.000</div>
                        </div>
                      </div>
                    
                      <div class="order-summary-multiple-variations"></div>
      
                      <div class="product-price clearfix">
                        <div class="product-price__name float-left summary-product-bump">
                          OrderOnline Personal (1 Tahun)
                        </div>
                        <div class="product-price-tag float-right">
                          <div class="product-price__price__currency float-left"></div>
                          <div class="product-price__price float-right summary-product-bump-price">Rp1.341.000</div>
                        </div>
                      </div>
                                      
                      <div class="product-price discount-summary-container order-summary-item-discount">
                        <div class="product-price__name discount-summary-text">
                          Diskon
                        </div>
                        <div class="product-price__price discount-summary-text discount-summary-value"></div>
                      </div>
                    
                      <div class="product-price clearfix">
                        <div class="product-price-tag float-left unique-code-summary-text">
                          Kode Unik
                        </div>
                        <div class="product-price__price float-right unique-code-summary-text summary-unique-code-value">Rp 130</div>
                      </div>
                      
                      <div class="total-price product-price clearfix">
                        <div class="product-price__name float-left">Total</div>
                        <div class="product-price-tag float-right">
                          <div class="product-price__price__currency float-left"></div>
                          <div class="product-price__price float-right summary-product-total-price">Rp1.490.130</div>
                        </div>
                      </div>
                    </div>
      
                    <div class="coupon-code">
                      <div class="coupon-header">
                        GUNAKAN KODE KUPON:
                      </div>
                      <div class="form-group">
                        <div class="coupon-container">
                          <div class="input-group">
                            <input type="text" name="coupon" class="form-control" autocomplete="nope" placeholder="Input coupon">
                            <span class="input-group-btn">
                              <button class="btn btn-info" type="submit">Apply</button>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
      
                  </div>
      
                </div>
              </div>
            </form>
          </div>

        </div>