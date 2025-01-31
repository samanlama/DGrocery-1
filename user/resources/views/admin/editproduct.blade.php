@include ('admin/header')
@include ('admin/sidebar')


<div class="main-content">

    <div class="page-content">

        <!-- start page title -->
        <div class="page-title-box" style="background-color: #cc5500;"  >
            <div class="container-fluid">
             <div class="row align-items-center">
                 <div class="col-sm-6">
                     <div class="page-title">
                         <h4>Edit Product</h4>
                             <ol class="breadcrumb m-0">
                                 <li class="breadcrumb-item"><a href="javascript: void(0);">DG</a></li>
                                 <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                 <li class="breadcrumb-item active">Edit Product</li>
                             </ol>
                     </div>
                 </div>
                 <div class="col-sm-6">
                    <div class="float-end d-none d-sm-block">
                        <a href="" class="btn btn-success">Add Widget</a>
                    </div>
                 </div>
             </div>
            </div>
         </div>
         <!-- end page title -->    


        <div class="container-fluid">

            <div class="page-content-wrapper">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                
                                <div id="addproduct-nav-pills-wizard" class="twitter-bs-wizard">
                                    <ul class="twitter-bs-wizard-nav">
                                        {{-- <li class="nav-item add-product-border">
                                            <a href="#basic-info" class="nav-link" data-toggle="tab">
                                                <span class="step-number">Add Product</span>
                                            </a>
                                        </li> --}}
                                        <!-- <li class="nav-item add-product-border">
                                            <a href="#product-img" class="nav-link" data-toggle="tab">
                                                <span class="step-number">02. Product Img</span>
                                            </a>
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a href="#metadata" class="nav-link" data-toggle="tab">
                                                <span class="step-number">03. Meta Data</span>
                                            </a>
                                        </li> -->
                                    </ul>
                                    <div class="tab-content twitter-bs-wizard-tab-content">
                                        <div >
                                            <h4 class="header-title">Basic Information</h4>
                                            <p class="card-title-desc">Fill all information below</p>

                                            <form>
                                                <div class="mb-3">
                                                    <label class="form-label" for="productname">Product Name</label>
                                                    <input id="productname" name="productname" type="text" class="form-control">
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        
                                                        <div class="mb-3">
                                                            <label class="form-label" for="manufacturername">Manufacturer Name</label>
                                                            <input id="manufacturername" name="manufacturername" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        
                                                        <div class="mb-3">
                                                            <label class="form-label" for="manufacturerbrand">Manufacturer Brand</label>
                                                            <input id="manufacturerbrand" name="manufacturerbrand" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="price">Price</label>
                                                            <input id="price" name="price" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="control-label">Category</label>
                                                            <select class="form-control select2">
                                                                <option>Select</option>
                                                                <option value="EL">Electronic</option>
                                                                <option value="FA">Fashion</option>
                                                                <option value="FI">Fitness</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="control-label">Features</label>
            
                                                            <select class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ...">
                                                                <option value="TO">Touchscreen</option>
                                                                <option value="CF">Call Function</option>
                                                                <option value="NO" selected>Notifications</option>
                                                                <option value="FI" selected>Fitness</option>
                                                                <option value="OU">Outdoor</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="productdesc">Product Description</label>
                                                    <textarea class="form-control" id="productdesc" rows="5"></textarea>
                                                </div>
                                            </form>

                                            <!-- <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                <li class="next"><a href="#"> Product Img <i class="mdi mdi-arrow-right ml-1"></i></a></li>
                                            </ul> -->
            
                                        <!-- </div>
                                        <div class="tab-pane" id="product-img"> -->
                                            <h4 class="header-title">Product Images</h4>
                                            <p class="card-title-desc">Upload product image</p>
                                            <form action="/" method="post" class="dropzone">
                                                <div class="fallback">
                                                    <input name="file" type="file" multiple />
                                                </div>
                
                                                <div class="dz-message needsclick">
                                                    <div class="mb-3">
                                                        <i class="display-4 text-muted mdi mdi-cloud-download-outline"></i>
                                                    </div>
                                                    
                                                    <h4>Drop files here or click to upload.</h4>
                                                </div>
                                            </form>
                                            <!-- <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                <li class="previous"><a href="#"><i class="mdi mdi-arrow-left mr-1"></i> Basic Info</a></li>
                                                <li class="next"><a href="#">Meta Data <i class="mdi mdi-arrow-right ml-1"></i></a></li>
                                            </ul> -->
                                        <!-- </div>
                                        <div class="tab-pane" id="metadata"> -->
                                            <h4 class="header-title">Meta Data</h4>
                                            <p class="card-title-desc">Fill all information below</p>

                                            <form>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="metatitle">Meta title</label>
                                                            <input id="metatitle" name="metatitle" type="text" class="form-control">
                                                        </div>
                                                        
                                                    </div>
            
                                                    <div class="col-sm-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="metakeywords">Meta Keywords</label>
                                                            <input id="metakeywords" name="metakeywords" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="metadescription">Meta Description</label>
                                                    <textarea class="form-control" id="metadescription" rows="5"></textarea>
                                                </div>
                                            </form>

                                            <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                <!-- <li class="previous"><a href="#"><i class="mdi mdi-arrow-left mr-1"></i> Product Img</a></li> -->
                                                <li class="float-end"><a href="#">Save Changes <i class="mdi mdi-arrow-right ml-1"></i></a></li>
                                            </ul>

                                           

                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div>

            
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

  
    
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © Morvin.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
@include ('admin/script')

        </body>
</html>