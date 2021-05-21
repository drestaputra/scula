<div class="row">
          <div class="col-md-6">
            <!-- Error Message -->
            <div class="card mb-100">
              <div class="card-body">
                <h4><i class="fa fa-warning text-red"></i> Please fix fields error before proceeding to next step</h4>
                <div class="callout callout-default" style="margin-bottom: 0!important;">
                  Product Variations is not valid
                </div>
              </div>
            </div>

            <form>
              <!-- Checkout Page Name -->
              <div class="card mb-100" id="checkout">
                <div class="card-header">Checkout Page Name</div>
                <div class="card-body">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Checkout Page 1" value="Checkout Page 1" id="name" name="name">
                  </div>
                </div>
              </div>
              <!-- Template -->
              
              <!-- Header -->
              <div class="card mb-100" id="header">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <div class="form-group">
                    <label class="mb-0">Upload an image to display in the header</label>
                    <br>
                    <small class="mb-100">(This is usually your product or company's logo)</small>
                    <br>
                    <label class="custom-file-upload mt-100">
                      <input type="file" id="image" />
                      <i class="fa fa-image"></i> Select an image
                    </label>

                    <button type="button" class="btn btn-default"><i class="fa fa-trash"></i> Delete</button>
                  </div>
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Do you want to show title on top of your cart?
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Title" value="" id="name" name="name">
                  </div>
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Do you want to show tagline on top of your cart?
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Title" value="" id="name" name="name">
                  </div>

                </div>
              </div>
              <!-- Images -->
              <div class="card mb-100" id="images">
                <div class="card-header">Images</div>
                <div class="card-body">
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Show product images on checkout page?
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Guarantee Seals -->
              <div class="card mb-100" id="guarantee">
                <div class="card-header">Guarantee Seals</div>
                <div class="card-body">
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Do you want to show the guarantee seals at the top of the page?
                      </label>
                    </div>
                  </div>

                  <div class="form-group">
                    <select class="form-control" id="collection">
                      <option value="" selected disabled>Options</option>
                      <option>100% Jaminan Kepuasan</option>
                      <option>Garansi Uang Kembali</option>
                      <option>Enkripsi 256-Bit</option>
                      <option>100% Satisfaction Seal</option>
                      <option>Money Back Guarantee</option>
                      <option>256 Bit Encrypted</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- Product Variation -->
              <div class="card mb-100" id="product">
                <div class="card-header">Product Variation</div>
                <div class="card-body">
                  <div class="form-group">
                    <label class="control-label">Variation Select Type <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Tampilan untuk pemilihan variasi"></i></label><br />
                    <div class="btn-group" data-toggle="buttons">
                      <label class="btn btn-primary active">
                        <input type="radio" name="options" id="option1" checked> Radio
                      </label>
                      <label class="btn btn-primary">
                        <input type="radio" name="options" id="option2"> Dropdown
                      </label>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Requested Fields -->
              <div class="card mb-100" id="requested">
                <div class="card-header">Requested Fields <span style="float:right;"><button type="button" class="no-button" style="float: right;" data-toggle="modal" data-target="#modalRequestedField"><i class="fa fa-cog"></i></button></span></div>
                <!-- Modal -->
                <div class="modal fade" id="modalRequestedField" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Form Display Settings</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <label class="control-label">Mode</label>
                          <select class="form-control" id="mode">
                            <option value="" selected disabled>Options</option>
                            <option>Show All</option>
                            <option>Progressive Form</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label class="control-label">Initial Fields</label>
                          <select class="form-control" id="mode">
                            <option value="" selected disabled>Options</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label class="control-label">Label</label>
                          <select class="form-control" id="mode">
                            <option value="" selected disabled>Options</option>
                            <option>Show Label</option>
                            <option>Hide Label</option>
                          </select>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="card-panel">
                    <div class="row">
                      <div class="col-md-6 col-xs-6">
                        <span class="text-blue font-weight-bold">Mode:</span> Show All
                        <br>
                        <span class="text-blue font-weight-bold">Initial Fields:</span> 3 Fields
                      </div>
                      <div class="col-md-6 col-xs-6"><span class="text-blue font-weight-bold">Label:</span> Hide Label</div>
                    </div>
                  </div>

                  <table>
                    <!-- Name -->
                    <tr>
                      <td>
                        <div class="form-group mb-0">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox">
                            </label>
                          </div>
                        </div>
                      </td>
                      <td style="width: 100%;">
                        <div class="card-panel-2">
                          <label class="mb-0">Nama <span class="text-red">*</span></label>
                          <button type="button" class="no-button" style="float: right;" data-toggle="modal" data-target="#modalName"><i class="fa fa-cog"></i></button>
                          <!-- Modal -->
                          <div class="modal fade" id="modalName" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-body">
                                  <div class="form-group">
                                    <label class="control-label">Label</label>
                                    <input type="text" class="form-control" value="Name">
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label">Placeholder</label>
                                    <input type="text" class="form-control" value="Name">
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!-- No Handphone/WhatsApp -->
                    <tr>
                      <td>
                        <div class="form-group mb-0">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox">
                            </label>
                          </div>
                        </div>
                      </td>
                      <td style="width: 100%;">
                        <div class="card-panel-2">
                          <label class="mb-0">No Handphone/WhatsApp <span class="text-red">*</span></label>
                          <button type="button" class="no-button" style="float: right;" data-toggle="modal" data-target="#modalWA"><i class="fa fa-cog"></i></button>
                          <!-- Modal -->
                          <div class="modal fade" id="modalWA" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-body">
                                  <div class="form-group">
                                    <label class="control-label">Label</label>
                                    <input type="text" class="form-control" value="No Handphone/WhatsApp">
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label">Placeholder</label>
                                    <input type="text" class="form-control" value="No Handphone/WhatsApp">
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!-- Email -->
                    <tr>
                      <td>
                        <div class="form-group mb-0">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox">
                            </label>
                          </div>
                        </div>
                      </td>
                      <td style="width: 100%;">
                        <div class="card-panel-2">
                          <label class="mb-0">Email <span class="text-red">*</span></label>
                          <button type="button" class="no-button" style="float: right;" data-toggle="modal" data-target="#modalEmail"><i class="fa fa-cog"></i></button>
                          <!-- Modal -->
                          <div class="modal fade" id="modalEmail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-body">
                                  <div class="form-group">
                                    <label class="control-label">Required</label>
                                    <select class="form-control" id="required">
                                      <option value="" selected disabled>Options</option>
                                      <option>No</option>
                                      <option>Yes (Required)</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label">Label</label>
                                    <input type="text" class="form-control" value="Email">
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label">Placeholder</label>
                                    <input type="text" class="form-control" value="Email Anda">
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!-- Jumlah Pesanan -->
                    <tr>
                      <td>
                        <div class="form-group mb-0">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox">
                            </label>
                          </div>
                        </div>
                      </td>
                      <td style="width: 100%;">
                        <div class="card-panel-2">
                          <label class="mb-0">Jumlah Pesanan <span class="text-red">*</span></label>
                          <button type="button" class="no-button" style="float: right;" data-toggle="modal" data-target="#modalQty"><i class="fa fa-cog"></i></button>
                          <!-- Modal -->
                          <div class="modal fade" id="modalQty" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-body">
                                  <div class="form-group">
                                    <label class="control-label">Required</label>
                                    <select class="form-control" id="required">
                                      <option value="" selected disabled>Options</option>
                                      <option>No</option>
                                      <option>Yes (Required)</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label">Label</label>
                                    <input type="text" class="form-control" value="Jumlah Pesanan">
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label">Placeholder</label>
                                    <input type="text" class="form-control" value="Jumlah Pesanan">
                                  </div>
                                  <label class="control-label">Quantity</label>
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label class="control-label font-weight-thin">Min</label>
                                        <input type="number" class="form-control" value="1" min="1">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label class="control-label font-weight-thin">Max</label>
                                        <input type="number" class="form-control" value="99" min="1">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label font-weight-thin">Default</label>
                                    <input type="number" class="form-control" value="1" min="1">
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!-- Catatan -->
                    <tr>
                      <td>
                        <div class="form-group mb-0">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox">
                            </label>
                          </div>
                        </div>
                      </td>
                      <td style="width: 100%;">
                        <div class="card-panel-2">
                          <label class="mb-0">Catatan <span class="text-red">*</span></label>
                          <button type="button" class="no-button" style="float: right;" data-toggle="modal" data-target="#modalCatatan"><i class="fa fa-cog"></i></button>
                          <!-- Modal -->
                          <div class="modal fade" id="modalCatatan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-body">
                                  <div class="form-group">
                                    <label class="control-label">Required</label>
                                    <select class="form-control" id="required">
                                      <option value="" selected disabled>Options</option>
                                      <option>No</option>
                                      <option>Yes (Required)</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label">Label</label>
                                    <input type="text" class="form-control" value="Catatan">
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label">Placeholder</label>
                                    <input type="text" class="form-control" value="Masukkan Catatan Pemesanan">
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!-- Alamat Lengkap -->
                    <tr>
                      <td>
                        <div class="form-group mb-0">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox">
                            </label>
                          </div>
                        </div>
                      </td>
                      <td style="width: 100%;">
                        <div class="card-panel-2">
                          <label class="mb-0">Alamat Lengkap <span class="text-red">*</span></label>
                          <button type="button" class="no-button" style="float: right;" data-toggle="modal" data-target="#modalAlamat"><i class="fa fa-cog"></i></button>
                          <!-- Modal -->
                          <div class="modal fade" id="modalAlamat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-body">
                                  <div class="form-group">
                                    <label class="control-label">Field</label>
                                    <select class="form-control" id="required">
                                      <option value="" selected disabled>Options</option>
                                      <option>Input</option>
                                      <option>Textarea</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label">Required</label>
                                    <select class="form-control" id="required">
                                      <option value="" selected disabled>Options</option>
                                      <option>No</option>
                                      <option>Yes (Required)</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label">Label</label>
                                    <input type="text" class="form-control" value="Alamat Lengkap">
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label">Placeholder</label>
                                    <input type="text" class="form-control" value="Alamat Lengkap Anda">
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!-- Provinsi -->
                    <tr>
                      <td>
                        <div class="form-group mb-0">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox">
                            </label>
                          </div>
                        </div>
                      </td>
                      <td style="width: 100%;">
                        <div class="card-panel-2">
                          <label class="mb-0">Provinsi <span class="text-red">*</span></label>
                          <button type="button" class="no-button" style="float: right;" data-toggle="modal" data-target="#modalProvinsi"><i class="fa fa-cog"></i></button>
                          <!-- Modal -->
                          <div class="modal fade" id="modalProvinsi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-body">
                                  <div class="form-group">
                                    <label class="control-label">Required</label>
                                    <select class="form-control" id="required">
                                      <option value="" selected disabled>Options</option>
                                      <option>No</option>
                                      <option>Yes (Required)</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label">Label</label>
                                    <input type="text" class="form-control" value="Provinsi">
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label">Placeholder</label>
                                    <input type="text" class="form-control" value="Pilih Provinsi">
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!-- Kota/Kabupaten -->
                    <tr>
                      <td>
                        <div class="form-group mb-0">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox">
                            </label>
                          </div>
                        </div>
                      </td>
                      <td style="width: 100%;">
                        <div class="card-panel-2">
                          <label class="mb-0">Kota/Kabupaten <span class="text-red">*</span></label>
                          <button type="button" class="no-button" style="float: right;" data-toggle="modal" data-target="#modalKotaKabupaten"><i class="fa fa-cog"></i></button>
                          <!-- Modal -->
                          <div class="modal fade" id="modalKotaKabupaten" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-body">
                                  <div class="form-group">
                                    <label class="control-label">Required</label>
                                    <select class="form-control" id="required">
                                      <option value="" selected disabled>Options</option>
                                      <option>No</option>
                                      <option>Yes (Required)</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label">Label</label>
                                    <input type="text" class="form-control" value="Kota/Kabupaten">
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label">Placeholder</label>
                                    <input type="text" class="form-control" value="Pilih Kota/Kabupaten">
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!-- Kecamatan -->
                    <tr>
                      <td>
                        <div class="form-group mb-0">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox">
                            </label>
                          </div>
                        </div>
                      </td>
                      <td style="width: 100%;">
                        <div class="card-panel-2">
                          <label class="mb-0">Kecamatan <span class="text-red">*</span></label>
                          <button type="button" class="no-button" style="float: right;" data-toggle="modal" data-target="#modalKecamatan"><i class="fa fa-cog"></i></button>
                          <!-- Modal -->
                          <div class="modal fade" id="modalKecamatan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-body">
                                  <div class="form-group">
                                    <label class="control-label">Required</label>
                                    <select class="form-control" id="required">
                                      <option value="" selected disabled>Options</option>
                                      <option>No</option>
                                      <option>Yes (Required)</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label">Label</label>
                                    <input type="text" class="form-control" value="Kecamatan">
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label">Placeholder</label>
                                    <input type="text" class="form-control" value="Pilih Kecamatan">
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!-- Kota / Kecamatan -->
                    <tr>
                      <td>
                        <div class="form-group mb-0">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox">
                            </label>
                          </div>
                        </div>
                      </td>
                      <td style="width: 100%;">
                        <div class="card-panel-2">
                          <label class="mb-0">Kota / Kecamatan <span class="text-red">*</span></label>
                          <button type="button" class="no-button" style="float: right;" data-toggle="modal" data-target="#modalKotaKecamatan"><i class="fa fa-cog"></i></button>
                          <!-- Modal -->
                          <div class="modal fade" id="modalKotaKecamatan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-body">
                                  <div class="form-group">
                                    <label class="control-label">Required</label>
                                    <select class="form-control" id="required">
                                      <option value="" selected disabled>Options</option>
                                      <option>No</option>
                                      <option>Yes (Required)</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label">Label</label>
                                    <input type="text" class="form-control" value="Kota / Kecamatan">
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label">Placeholder</label>
                                    <input type="text" class="form-control" value="Pilih Kota / Kecamatan">
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </table>

                  <div class="row text-right mt-3">
                    <div class="col-md-12">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCustomField">Add Custom Field</button>
                    </div>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="modalCustomField" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel">Custom Field</h4>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label">Field</label>
                                <select class="form-control" id="category">
                                  <option value="" selected disabled>Options</option>
                                  <option>Input</option>
                                  <option>Textarea</option>
                                  <option>Select</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label class="control-label">Required</label>
                                <select class="form-control" id="category">
                                  <option value="" selected disabled>Options</option>
                                  <option>No</option>
                                  <option>Yes (Required)</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label class="control-label">Placeholder</label>
                                <input type="text" class="form-control" value="Custom Field">
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label">Input Type</label>
                                <select class="form-control" id="category">
                                  <option value="" selected disabled>Options</option>
                                  <option>Text</option>
                                  <option>Date</option>
                                  <option>Number</option>
                                  <option>Email</option>
                                  <option>URL</option>
                                  <option>File</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label class="control-label">Label</label>
                                <input type="text" class="form-control" value="Custom Field">
                              </div>
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

                  <div class="alert alert-warning mt-100" role="alert">Untuk menggunakan fitur perhitungan ongkir otomatis, harap aktifkan field Kecamatan</div>
                </div>
              </div>

              <!-- Dropship -->
              <div class="card mb-100" id="dropship">
                <div class="card-header">Dropship</div>
                <div class="card-body">
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Do you want to enable dropship on your cart?
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Buy Button -->
              <div class="card mb-100" id="buy">
                <div class="card-header">Buy Button</div>
                <div class="card-body">
                  <label class="control-label font-weight-thin mb-3">Customize your template's buy button below.</label>
                  <div class="form-group">
                    <button class="btn btn-success btn-block">Beli sekarang</button>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="card-color-green mb-100"></div>
                      <div class="card-color-orange mb-100"></div>
                      <div class="card-color-red mb-100"></div>
                      <div class="card-color-blue mb-100"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label font-weight-thin mb-0">Enter the text for your buy button.</label>
                    <br>
                    <label class="text-grey font-weight-thin mb-3">(Suggestions: 'Buy Now!' or 'Complete Order')</label>
                    <input type="text" class="form-control" value="">
                  </div>
                </div>
              </div>
              <!-- Video -->
              <div class="card mb-100" id="video">
                <div class="card-header">Video</div>
                <div class="card-body">
                  <div class="form-group">
                    <label class="control-label font-weight-thin">Add a video to your sidebar to speak to customers or show off your product.</label>
                    <input type="text" class="form-control" placeholder="Enter your youtube video url here" value="" id="name" name="name">
                  </div>
                </div>
              </div>
              <!-- Content -->
              <div class="card mb-100" id="content">
                <div class="card-header">Content</div>
                <div class="card-body">
                  <div class="form-group">
                    <label class="control-label font-weight-thin">Add checkout page content to explain more about your product</label>
                    <textarea class="form-control" value="" id="name" name="name" rows="3"></textarea>
                  </div>
                </div>
              </div>
              <!-- Coupon Field -->
              <div class="card mb-100" id="coupon">
                <div class="card-header">Coupon Field</div>
                <div class="card-body">
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Do you want to show the coupon field on your cart?
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Bullet Points -->
              <div class="card mb-100" id="bullet">
                <div class="card-header">Bullet Points</div>
                <div class="card-body">
                  <label class="font-weight-thin">Add bullet points to list the benefits or features of your product.</label>
                  <div class="form-group">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Point">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="fa fa-trash"></i> Delete</button>
                      </span>
                    </div>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Point">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="fa fa-trash"></i> Delete</button>
                      </span>
                    </div>
                  </div>
                  <div class="row text-right">
                    <div class="col-md-12">
                      <div class="form-group">
                        <button class="btn btn-primary">Add bullet point</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Order's Summary -->
              <div class="card mb-100" id="order">
                <div class="card-header">Order's Summary</div>
                <div class="card-body">
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Do you want to show order's summary on your cart?
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Testimonials -->
              <div class="card mb-100" id="tertimonial">
                <div class="card-header">Testimonials</div>
                <div class="card-body">
                  <div class="form-group">
                    <label class="control-label font-weight-thin">Add testimonials to increase social proof to attract more customers</label>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <img src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg" class="rounded-circle">
                      <div class="form-group">
                        <label class="custom-file-upload">
                          <input type="file" id="image" />
                          <i class="fa fa-image"></i> Select an image
                        </label>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nama">
                      </div>
                      <div class="form-group">
                        <textarea type="text" class="form-control" rows="3" placeholder="Pesan"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row text-right">
                    <div class="col-md-12">
                      <div class="form-group">
                        <button class="btn btn-primary">Add Testimonial</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- OrderOnline Logo -->
              <div class="card mb-100" id="logo">
                <div class="card-header">OrderOnline Logo</div>
                <div class="card-body">
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Do you want to show the OrderOnline.id logo at the bottom of the page?
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Tracking -->
              <div class="card mb-100" id="tracking">
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
                  <a href="add-product.html" class="btn btn-default">Back</a>
                </div>
                <div class="col-md-6 col-xs-6 text-right">
                  <a href="success-page.html" class="btn btn-info">Next <i class="fa fa-arrow-right"></i></a>
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
                      <div class="product-features-header section-title mb-100">
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