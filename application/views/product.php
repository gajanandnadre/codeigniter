<?php


?>

<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesdesign.in/tocly/layouts/5.3.1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Nov 2023 08:52:23 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>Dashboard | Tocly - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
		<base href="<?=base_url()?>">
	 
	 
	 <?php  $this->load->view('links'); ?>
	 
	 
	 
</head>	 
	 
<?php  $this->load->view('header'); ?>
	
            <div class="main-content">


                <div class="page-content">
                    <div class="container-fluid">
                       <?php if($this->session->flashdata('succMsg')){ ?>
                            <div class="alert alert-success">
                                <?= $this->session->flashdata('succMsg') ?> 
                            </div>
                      <?php }  ?>
                      <?php if($this->session->flashdata('errMsg')){ ?>
                            <div class="alert alert-success">
                                <?= $this->session->flashdata('errMsg') ?> 
                            </div>
                      <?php }  ?>


                        <div class="row">
                            <div class="col-xl-12">
                                <div class="row">

                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-header border-0 align-items-center d-flex pb-0">
                                                <h4 class="card-title mb-0 flex-grow-1">Product</h4>
                                                <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light btn-sm">View More <i class="mdi mdi-arrow-right ms-1"></i></a>
                                            </div>
                                            <div class="card-body">
                                        <h5 class="card-title">Floating labels</h5>
                                        <p class="card-title-desc">Create beautifully simple form labels that float over your input fields.</p>

                                        <?= form_open_multipart() ?>                                           
                                            <div class="row">
                                               <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="number" class="form-control" value="<?= set_value('pro_id',$pro_id) ?>" name="pro_id"  id="floatingFirstnameInput" placeholder="Product name" readonly>
                                                        <label for="floatingFirstnameInput">Product ID</label>
                                                    </div>
                                                    <?= form_error('pro_id')?>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select" onchange="get_categories(this.value)" name="category" id="floatingSelectGrid">
                                                            <option value="" selected>Select</option>
                                                            <?php foreach($categories as $cat){ ?>
                                                            <option value=" <?=$cat->cate_id ?>"  
                                                            > <?= $cat->cate_name?> </option>
                                                          <?php  } ?>
                                                        </select>
                                                        <label for="floatingSelectGrid">Category</label>
                                                    </div>
                                                    <?= form_error('category')?>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select subcate" name="sub_category" id="floatingSelectGrid">
                                                            <option value="" selected>Select</option>
                                                            
                                                        </select>
                                                        <label for="floatingSelectGrid"> Sub Category</label>
                                                    </div>
                                                    <?= form_error('sub_category')?>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="pro_name"  id="floatingFirstnameInput" placeholder="Product name">
                                                        <label for="floatingFirstnameInput">Product name</label>
                                                    </div>
                                                    <?= form_error('pro_name')?>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="brand"  id="floatingFirstnameInput" placeholder="">
                                                        <label for="floatingFirstnameInput"> Product Brand </label>
                                                    </div>
                                                    <?= form_error('brand')?>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select" name="featured" id="floatingSelectGrid">
                                                            <option value="" selected>Select </option>
                                                            <option value="1">Deal of the month </option>
                                                            <option value="2">New arrival</option>
                                                        </select>
                                                        <label for="floatingSelectGrid">Featured</label>
                                                    </div>
                                                    <?= form_error('featured')?>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <textarea class="form-control" name="highlight" id="floatingSelectGrid">
                                                            
                                                         </textarea>
                                                        <label for="floatingSelectGrid">Highlights</label>
                                                    </div>
                                                    <?= form_error('highlight')?>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <textarea class="form-control" name="description" id="floatingSelectGrid">
                                                            
                                                         </textarea>
                                                        <label for="floatingSelectGrid">Description</label>
                                                    </div>
                                                    <?= form_error('description')?>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="number" class="form-control" name="stock"  id="floatingFirstnameInput" placeholder="Product name">
                                                        <label for="floatingFirstnameInput">Product Stock</label>
                                                    </div>
                                                    <?= form_error('stock')?>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="number" class="form-control" name="mrp"  id="floatingFirstnameInput" placeholder="Product name">
                                                        <label for="floatingFirstnameInput">Product MRP</label>
                                                    </div>
                                                    <?= form_error('mrp')?>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="number" class="form-control" name="selling_price"  id="floatingFirstnameInput" placeholder="Product name">
                                                        <label for="floatingFirstnameInput">Product Price</label>
                                                    </div>
                                                    <?= form_error('selling_price')?>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="meta_title"  id="floatingFirstnameInput" placeholder="">
                                                        <label for="floatingFirstnameInput"> Meta Title </label>
                                                    </div>
                                                    <?= form_error('meta_title')?>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="meta_keywords"  id="floatingFirstnameInput" placeholder="">
                                                        <label for="floatingFirstnameInput"> Meta Keywords </label>
                                                    </div>
                                                    <?= form_error('meta_keywords')?>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="meta_desc"  id="floatingFirstnameInput" placeholder="">
                                                        <label for="floatingFirstnameInput"> Meta Description </label>
                                                    </div>
                                                    <?= form_error('meta_desc')?>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="file" class="form-control" name="pro_main_image"  id="floatingFirstnameInput" placeholder="">
                                                        <label for="floatingFirstnameInput">Product Image</label>
                                                    </div>
                                                    <?= form_error('pro_main_image')?>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="file" class="form-control" name="gallery_image"  id="floatingFirstnameInput" placeholder="">
                                                        <label for="floatingFirstnameInput">Product Gallary Image</label>
                                                    </div>
                                                    <?= form_error('gallery_image')?>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select" name="status" id="floatingSelectGrid">
                                                            <option value="" selected>Select </option>
                                                            <option value="1">Active</option>
                                                            <option value="0">Deactive</option>
                                                        </select>
                                                        <label for="floatingSelectGrid">Status</label>
                                                    </div>
                                                    <?= form_error('status')?>
                                                </div>
                                            </div>
                                         
                                            <div>
                                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                                            </div>
                                        <?= form_close() ?>
                                    </div>

                                        </div>
                                    </div>

                                   
                                </div>
                            </div>

                          

                        </div>
                        <!-- END ROW -->

                       

                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


				
	 <?php  $this->load->view('footer'); ?>