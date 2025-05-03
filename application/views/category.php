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
                        
                        


                        <div class="row">
                            <div class="col-xl-12">
                                <div class="row">

                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-header border-0 align-items-center d-flex pb-0">
                                                <h4 class="card-title mb-0 flex-grow-1">Category</h4>
                                                <div>
                                                    <div class="dropdown">
                                                        <a class="dropdown-toggle text-muted" href="#"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            Today<i class="mdi mdi-chevron-down ms-1"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Yearly</a>
                                                            <a class="dropdown-item" href="#">Monthly</a>
                                                            <a class="dropdown-item" href="#">Weekly</a>
                                                            <a class="dropdown-item" href="#">Today</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="mb-0 mt-2">725,800</h4>
                                                <p class="mb-0 mt-2 text-muted">
                                                    <span class="badge badge-soft-success mb-0">
                                                         <i class="ri-arrow-up-line align-middle"></i>
                                                15.72 % </span> vs. previous month</p>

                                                <div class="mt-3 pt-1">
                                                    <div class="progress progress-lg rounded-pill px-0">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 26%" aria-valuenow="26" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                                <div class="table-responsive mt-3">
                                                    <table class="table align-middle table-centered table-nowrap mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Order Status</th>
                                                                <th scope="col">Orders</th>
                                                                <th scope="col">Returns</th>
                                                                <th scope="col">Earnings</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <a href="javascript:void(0);" class="text-dark">Product Pending</a>
                                                                </td>
                                                                <td>17,351</td>
                                                                <td>2,123</td>
                                                                <td><span class="badge bg-subtle-primary text-primary font-size-11 ms-1"><i class="mdi mdi-arrow-up"></i> 45.3%</span></td>
                                                            </tr><!-- end -->
        
                                                            <tr>
                                                                <td>
                                                                    <a href="javascript:void(0);" class="text-dark">Product Cancelled</a>
                                                                </td>
                                                                <td>67,356</td>
                                                                <td>3,652</td>
                                                                <td><span class="badge bg-subtle-danger text-danger font-size-11 ms-1"><i class="mdi mdi-arrow-down"></i> 14.6%</span></td>
                                                            </tr><!-- end -->
        
        
                                                            <tr>
                                                                <td>
                                                                    <a href="javascript:void(0);" class="text-dark">Product Delivered</a>
                                                                </td>
                                                                <td>67,356</td>
                                                                <td>3,652</td>
                                                                <td><span class="badge bg-subtle-primary text-primary font-size-11 ms-1"><i class="mdi mdi-arrow-up"></i> 14.6%</span></td>
                                                            </tr><!-- end -->
                                                        </tbody><!-- end tbody -->
                                                    </table><!-- end table -->
                                                </div>

                                                <div class="text-center mt-4"><a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light btn-sm">View More <i class="mdi mdi-arrow-right ms-1"></i></a></div>

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