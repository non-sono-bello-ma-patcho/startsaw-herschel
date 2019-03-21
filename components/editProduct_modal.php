<?php

echo '
<div class="modal fade" id="editproduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editmodal">Edit Product <span class="glyphicon glyphicon-pencil"></span></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form name="editProduct" action="php/editProduct.php" enctype="multipart/form-data" method ="post">
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <input type="hidden" name="editproductform">
                                                                <label class="text-muted" for="eID">Product ID</label>
                                                                <div class="input-group">
                                                                    <input type="text" name="eID" id="eID" placeholder="Type a product ID..." class="form-control rightcorners" style="border-top-right-radius: 0 !important; border-bottom-right-radius: 0 !important;" required>
                                                                    <div class="input-group-append">
                                                                        <a href="#" id="editproduct" onclick="load_product()">
                                                                            <span class="input-group-text glyphicon glyphicon-search" style="top: 0!important; border-top-left-radius: 0; border-bottom-left-radius: 0;"></span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="invalid-feedback" id="productifb">No product matches given code</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <label class="text-muted" for="ename">Product Name</label>
                                                                <input type="text" name="ename" id="ename" placeholder="insert product Name..." class="form-control">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="text-muted" for="eprice">Product Price</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="">$</span>
                                                                    </div>
                                                                    <input type="number" value="1000" name="eprice" id="eprice" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-row px-1 mt-2">
                                                            <label for="edescription" class="text-muted">Product Description</label>
                                                            <textarea class="form-control" name="edescription" id="edescription" cols="30"
                                                                      rows="5">Insert Description...</textarea>
                                                        </div>
                                                        <div class="form-row px-1 mt-2">
                                                            <label for="eimg" class="text-muted">Product Image</label>
                                                            <div class="custom-file">
                                                                <input type="file" name="eimg" class="custom-file-input" id="eimg" lang="en">
                                                                <label class="custom-file-label">Select Image</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <input type="submit" value="Edit"  class="btn btn-primary">
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">

                                                </div>

                                            </div>
                                        </div>
                                    </div>
';