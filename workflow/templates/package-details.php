 <style>
 #pill-body1 h1,#pill-body1 h2,#pill-body1 h3,#pill-body1 h4,#pill-body1 h5{background:#F7F7F7;padding:8px 0 8px 40px;font-size:28px;margin-top:10px;}
 #pill-body1 ul{padding:10px 0 10px 30px;border:5px solid #F7F7F7;} #pill-body1 li{display:block;padding:8px 0 8px 8px;color: #666666;font-weight: 600;
  font-size: 18px;}
  .plan-info{line-height:30px; text-align:justify;}
  table td, table th{padding:6px 10px 6px 16px!important;}
  small{font-size:12px;font-style:italic}
 </style>
 <?php
 $pk =array("","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","");
 if(trim($package)<>""){
	 $pdo_connection = Connection::dbConnection();
				 $para = "pk_title:".$package;
				  $trows =  Connection::sqlSelectPara($pdo_connection,"SELECT * FROM package_info WHERE pk_title=:pk_title and pk_remarks=0",$para);
			$pdo_connection = NULL;
			
			if(count($trows)>0){
				foreach($trows as $rows){
					$pk[0] = $rows->pk_id;
					$pk[1] = $rows->pk_title;
					$pk[2] = $rows->pk_image;
					$pk[3] = $rows->pk_place;
					$pk[4] = $rows->pk_cost;
					$pk[5] = $rows->pk_nights;
					$pk[6] = $rows->pk_days;
					$pk[7] = $rows->pk_ltype;
					$pk[8] = $rows->pk_stype;
					$pk[9] = $rows->pk_assist;
					$pk[10] = $rows->pk_gallery;
					$pk[11] = $rows->pk_tags;
					$pk[12] = $rows->pk_img_folder; 
					$pk[13] = $rows->pk_travel;
					$pk[14] = $rows->pk_banner;
					$pk[15] = $rows->pk_country;
					$pk[16] = $rows->pk_city;
					$pk[17] = $rows->pk_inclusions;
					$pk[18] = $rows->pk_exclusions;
				}
			}
			$pdo_connection = NULL;
 }
				  ?>
    <!-- ===============  breadcrumb area start =============== -->
    <div class="breadcrumb breadcrumb-style-one" style="background:url(<?php echo '../';?>images/<?php echo $pk[12]."/".$pk[14]; ?>) no-repeat center;">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h3 class="breadcrumb-title"><?php echo $pk[1]; ?></h3>
                <ul class="d-flex justify-content-center breadcrumb-items">
                    <li class="breadcrumb-item"><a href="">Home</a></li>
                    <li class="breadcrumb-item active"><?php echo $pk[15]; ?></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ===============  breadcrumb area end =============== -->
    <div class="package-details-wrapper pt-76">
        <div class="container">
           <div class="row ">
               <div class="col-lg-8">
                <div class="tour-package-details">
                    <div class="pd-header">
                        <div class=" pd-top row row-cols-lg-4 row-cols-md-2 row-cols-2 gy-4">
                            <div class="col">
                                <div class="pd-single-info">
                                    <div class="info-icon">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#a13520" d="m20.145 8.27l1.563-1.563l-1.414-1.414L18.586 7c-1.05-.63-2.274-1-3.586-1c-3.859 0-7 3.14-7 7s3.141 7 7 7s7-3.14 7-7a6.966 6.966 0 0 0-1.855-4.73zM15 18c-2.757 0-5-2.243-5-5s2.243-5 5-5s5 2.243 5 5s-2.243 5-5 5z"/><path fill="#ecbc08" d="M14 10h2v4h-2zm-1-7h4v2h-4zM3 8h4v2H3zm0 8h4v2H3zm-1-4h3.99v2H2z"/></svg>
                                    </div>
                                    <div class="info">
                                        <h6>Duration</h6>
                                        <span><?php echo $pk[5]." Nights / ".$pk[6]." Days"; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="pd-single-info">
                                    <div class="info-icon">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#a13520" d="M10 21v-3H3l5-5H5l5-5H7l5-5l5 5h-3l5 5h-3l5 5h-7v3h-4Z"/></svg>
                                    </div>
                                    <div class="info">
                                        <h6>Season Type</h6>
                                        <span> <?php
										if($pk[8]<>""){
											$st = explode(",",$pk[8]);
											$season = "";
											for($i=0;$i<count($st);$i++){
												switch($st[$i]){
													case 1: $season = 'All Season '; break;
													case 2: $season .= 'Spring '; break;
													case 3: $season .= 'Summer '; break;	
													case 4: $season .= 'Autumn '; break;	
													case 5: $season .= 'Winter '; break;	
													case 6: $season .='Monsoon';break;
												}
											}
										}
										echo $season;
										?></span>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col">
                                <div class="pd-single-info">
                                    <div class="info-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="#a13520" d="M16 28a5.326 5.326 0 0 1-.671-.044A21.785 21.785 0 0 1 12.033 17H29.95c.024-.332.05-.663.05-1a14 14 0 1 0-14 14Zm11.95-13h-5.987A24.325 24.325 0 0 0 19.21 4.45A12.012 12.012 0 0 1 27.95 15ZM16.67 4.044A21.785 21.785 0 0 1 19.967 15h-7.934A21.785 21.785 0 0 1 15.33 4.044a5.159 5.159 0 0 1 1.342 0Zm-3.881.405A24.328 24.328 0 0 0 10.037 15H4.05a12.013 12.013 0 0 1 8.74-10.55ZM4.05 17h5.987a24.328 24.328 0 0 0 2.753 10.55A12.013 12.013 0 0 1 4.05 17Z"/><path fill="#ecbc08" fill-rule="evenodd" d="m25 25l5 2v-2l-5-2.5V20a1 1 0 0 0-2 0v2.5L18 25v2l5-2v3.5L21 30v1l3-1l3 1v-1l-2-1.5Z"/></svg>
                                    </div>
                                    <div class="info">
                                        <h6>Location</h6>
                                        <span><?php
										switch($pk[7]){
											case 1: echo 'Local'; break;
											case 2: echo 'Domestic'; break;
											case 3: echo 'International'; break;	
										}
										?></span>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="col">
                                <div class="pd-single-info">
                                    <div class="info-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><path fill="#a13520" d="M92.6 21c-32 0-64.04 24-64.04 72L92.6 221l64-128c0-48-32-72-64-72zm282.3 39c-6.9.29-13.6 1.6-19.2 2.8l3.8 17.6c5.6-1.25 11.4-2.04 16.3-2.4zM92.6 61c17.7 0 32 14.33 32 32c0 17.7-14.3 32-32 32c-17.67 0-32-14.3-32-32c0-17.67 14.33-32 32-32zm302.2.2l-3 17.7c4.9 1.03 9.8 2.32 14.1 4.9l8.7-15.8c-6.1-3.25-12.9-6.17-19.8-6.8zm-57.5 6.7c-6.1 2.38-12.2 4.51-17.4 6.6L327 91c5.5-2.34 11.3-4.38 16.2-6.1zM431 81.3L417.3 93c3.6 4.12 6.4 9.2 8.6 13.3l16.1-8.1c-3.4-6.55-6.4-11.51-11-16.9zm-127.8.9c-6.1 3.11-11.1 5.88-16.5 8.6l8.8 15.8c5.2-3 10.9-5.9 15.5-8.2zm-32.3 17.9c-5.3 3.1-10.5 6.2-15.6 9.6l9.8 15c4.9-3.2 10-6.2 15-9.2zM448.2 118c-5.9 1-11.9 1.7-17.8 2.4c.4 5 .1 10.4-.9 14.6l17.5 4.1c1-7.2 1.9-14.6 1.2-21.1zm-208.1 1.7c-5 3.4-9.9 6.9-14.9 10.3l10.4 14.7c4.8-3.5 9.7-6.8 14.6-10.2zm-29.6 21.1c-5 3.6-10.2 7.6-14.5 10.9l10.9 14.3c5.5-4 9.3-7 14.3-10.7zm213 8c-3 4.6-6.5 9.2-10 12.7l13.1 12.5c4.3-5.1 8.9-10.3 12.1-15.5zm-241.8 14.1c-4.9 3.8-9.8 7.7-14.1 11.3l11.4 13.9c4.7-3.9 9.5-7.9 13.9-11.1zM401.1 173c-4.6 3.7-9.4 7.3-13.8 10.3l10.3 14.8c5.3-3.6 10.5-7.5 15-11.1zm-247.4 12.9c-4.7 3.8-9.2 7.8-13.8 11.7l11.7 13.7c4.5-3.9 9-7.8 13.6-11.6zm218.9 7c-5.1 3-10.4 6.1-15.2 8.7l8.6 15.9c5.4-3.3 11.5-6.2 16-9.2zm-246.4 16.6c-4.5 4-8.9 8-13.4 12.1l12.1 13.4c4.4-4 8.9-8 13.3-12zm215.5.4c-5.3 2.6-10.6 5.3-15.9 7.9l7.7 16.2c6.2-3 10.8-5.5 16.4-8.1zm-32 15.4c-5.5 2.5-10.8 4.9-16.4 7.2l7.3 16.5c5.5-2.4 11-4.9 16.5-7.4zM99.6 234c-5.1 4.5-8.65 8-13.3 12.5l12.7 13c4.7-4.5 8.5-8.4 12.9-12.2zm177.3 5.8c-5.5 2.3-11 4.7-16.5 7l7 16.7c5.6-2.3 11.1-4.7 16.6-7.1zm-33.1 14c-5.5 2.4-11 4.8-16.6 7l7 16.7c5.5-2.3 11.1-4.7 16.6-7zm184.8 7.2c-32 0-64 24-64 72l64 128l64-128c0-48-32-72-64-72zm-218 6.8c-5.7 2.6-11.7 5-16.6 7.1l7.1 16.6c5.9-2.5 11.5-4.9 16.5-7.1zM177.4 282c-5.4 2.5-11.7 5.3-16.5 7.5l7.4 16.4c5.9-2.6 11.1-5.2 16.3-7.4zm-33 15c-5.6 2.7-11.4 5.5-16.4 8l8.1 16.1c5.4-2.8 11-5.4 15.9-7.8zm284.2 4c17.7 0 32 14.3 32 32s-14.3 32-32 32s-32-14.3-32-32s14.3-32 32-32zm-316.8 12.3c-5.3 2.9-10.6 5.9-16 9l9 15.6c5.1-3 10.3-5.8 15.5-8.6zM80.1 332c-5.61 3.2-11.03 7.5-15.7 10.6L75.3 357c4.97-3.6 10.32-7.3 14.6-9.9zm-29.9 22.6c-4.8 4.4-9.53 9.5-13.2 13.8l13.7 11.7c3.85-4.7 7.2-8.2 11.7-12.2zm217.8 1.3l1.6 17.9c5.2-.9 10.4-.3 15.6.5l3.1-17.7c-6.6-1-13.6-1.7-20.3-.7zm-37.2 10l6.8 16.7c5.2-2.3 10.6-4.1 16.1-5.8c-1.9-5.7-3.3-11.5-4.8-17.3c-6.3 1.8-12.6 4.2-18.1 6.4zm77.5-.9l-10.2 14.8c4.2 3.1 8.3 6.4 11.6 10.5l13.6-11.8c-5.1-5.2-9-10.1-15-13.5zm-94.5 9c-5.5 2.8-10.8 6-16.1 9.1l9.1 15.5c5.2-2.8 10.3-6.1 15.4-8.8zM26.01 385c-3.02 6.5-5.47 13.5-6.61 19.7l17.7 3.1c1.08-5.7 2.63-9.8 4.9-14.7c-5.49-2.4-10.73-5.3-15.99-8.1zm156.09 7.8c-5.1 3.3-10.1 6.6-15.1 10l10 15c5-3.3 9.9-6.7 14.9-10zm152.7 1.2l-15.1 9.8c3.2 4.8 6.3 9.8 9.2 14.9l15.6-9c-3.5-5.6-6-10.6-9.7-15.7zm-182.7 19c-5 3.3-10 6.5-14.9 10l10 15c4.8-3.5 9.9-6.8 15-10.2zm-114.8 9.5c-5.79 1.2-11.63 2.2-17.45 3.3c1.05 7 3.86 13.8 6.4 19.2l16.25-7.8c-2.17-5-4.23-10.2-5.2-14.7zm316.1 2.8l-15.6 9c3.1 5.4 6.7 11.2 9.6 15.8l15.1-9.7c-3.4-5.3-6.3-10.3-9.1-15.1zm-231 7.5c-5 3.1-9.9 6.1-15.1 9l8.9 15.7c5.3-3.1 10.6-6.2 15.7-9.5zm-71.3 16.3l-12.3 13.2c5.56 5.3 12.42 8.8 19.9 10.4l4-17.5c-4.44-.9-8.59-3.1-11.6-6.1zm41 .3c-5.01 2.3-10.21 4.1-15.6 5.2l4.1 17.6c6.42-1.3 12.46-3.7 18.5-6.2zm280.3 4.8l-13.9 11.3c4.3 5.3 9.6 10.4 14.2 14l11.1-14.2c-4.4-3.4-8.2-7.5-11.4-11.1zm24.1 17.5l-4.5 17.5c7.9 1.6 13.8 2.1 21.2 1.3l-2.2-17.9c-4.9.8-9.7.3-14.5-.9z"/></svg>
                                    </div>
                                    <div class="info">
                                        <h6 ><?php echo $pk[15];?></h6>
                                         <span><?php echo $pk[16];?></span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
    
                        <div class="pd-thumb">
                            <img src="../<?php echo "images/".$pk[12]."/".$pk[2]; ?>" alt="" style="border:5px solid #F9F9F9">
                        </div>

                        <div class="header-bottom">
                            <div class="pd-lavel d-flex justify-content-between align-items-center flex-wrap gap-2">
                                <h5 class="location"><i class="bi bi-geo-alt"></i> <?php echo $pk[3]; ?></h5>
                                <ul class="d-flex align-items-center rating">
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                </ul>
                            </div>
                            <h2 class="pd-title"><?php echo $pk[1]; ?>.</h2>
                        </div>
                    </div>


                    <div class="package-details-tabs mb-5">
                        <ul class="nav nav-pills tab-switchers gap-xxl-4 gap-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="pills-package1" data-bs-toggle="pill" data-bs-target="#pill-body1" type="button" role="tab" aria-controls="pill-body1" aria-selected="true"><i class='bx bxs-error-alt'></i> Important</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-package2" data-bs-toggle="pill" data-bs-target="#pill-body2" type="button" role="tab" aria-controls="pill-body2" aria-selected="false"> <i class="bi bi-file-earmark-spreadsheet"></i> Travel Plan</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-package3" data-bs-toggle="pill" data-bs-target="#pill-body3" type="button" role="tab" aria-controls="pill-body3" aria-selected="false"><i class="bi bi-images"></i> Tour Gallary</button>
                            </li>
                          
                          </ul>

                          <div class="tab-content" id="pills-tabContent">

                             <!-- package info tab -->
                            <div class="tab-pane fade show active package-info-tab mt-3" id="pill-body1" role="tabpanel" aria-labelledby="pills-package1">
                              <!--  <h3 class="d-subtitle">Important</h3> -->
                               <?php echo str_replace("<li>",'<li><i class="bx bxs-log-in-circle"></i> ',str_replace("/n/","<br>",$pk[9]));?>
                                

                                <table class="table package-info-table mb-0 mt-5">
                                    <tbody>
                                    <tr>
                                            <th style="width:140px;">Location</th>
                                            <td><?php echo $pk[15].", ".$pk[16]; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Destination</th>
                                            <td><?php echo $pk[3]; ?></td>
                                        </tr>
                                       <tr>
                                            <th>Cost</th>
                                            <td><small>Start from</small> <i class='bx bx-rupee'></i><?php echo $pk[4]; ?> per person</td>
                                        </tr>
                                        
                                        <tr>
                                            <td colspan="2" class="tour-transport-col"> <div class="tour-transport  d-flex align-items-center justify-content-center"><span><?php echo $pk[13]; ?></span></div> </td>
                                        </tr>
                                      
                                       
                                    </tbody>
                                </table>

    <div class="col-md-12">  
     <table class="table package-info-table mb-0 mt-5">
                                    <tbody>
                                    <tr><td>                          
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><i  class="fa fa-check"></i> Inclusions</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Exclusions</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"><p><?php echo str_replace('<td>','<td><img src="../images/chk.jpg" style="padding-right:10px;">',$pk[17]); ?></p></div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"><p><?php echo str_replace('<td>','<td><img src="../images/chk.jpg" style="padding-right:10px;">',$pk[18]); ?></p></div>
</div>
</td></tr></tbody></table>
</div>

                                
                                
                            </div>

                             <!-- package plans tab -->
                            <div class="tab-pane fade package-plan-tab tab-body mt-3" id="pill-body2" role="tabpanel" aria-labelledby="pills-package2">
                                <h3 class="d-subtitle">Details</h3>
                                  <div class="accordion plans-accordion" id="planAccordion">
                               <?php
							     $para = "pk_id:".$pk[0];
								$pdo_connection = Connection::dbConnection();
				  $trows =  Connection::sqlSelectPara($pdo_connection,"SELECT * FROM package_itinerary WHERE pk_id=:pk_id AND it_remarks=0 ORDER BY it_id",$para);
			$pdo_connection = NULL;
			$i = 1;
			if(count($trows)>0){
				foreach($trows as $rows){
					echo '<div class="accordion-item plans-accordion-single">
                                      <div class="accordion-header" id="planHeading'.$i.'">
                                        <div class="accordion-button"  data-bs-toggle="collapse" data-bs-target="#planCollapse'.$i.'" aria-expanded="true" role="navigation">
                                         
                                          <div class="plan-title">
                                            <h5 style="padding-left:30px;">'.$rows->it_title.'</h5>
                                          </div>
                                        </div>
                                      </div>
                                      <div id="planCollapse'.$i.'" class="accordion-collapse collapse" aria-labelledby="planHeading'.$i.'" data-bs-parent="#planAccordion">
                                        <div class="accordion-body plan-info">
                                            '.str_replace("\n", '<br />',$rows->it_details).'
                                        </div>
                                      </div>
                                    </div>';
									$i++;
				}
			}
							   ?>


                              
                                    
                                    
                                </div>


                            </div>

                            <!-- package gallary tab -->
                            <div class="tab-pane fade package-gallary-tab mt-3" id="pill-body3" role="tabpanel" aria-labelledby="pills-package3">
                                <div class="row g-4">
                                <?php
									if($pk[10]<>""){
										$gal = explode(",",rtrim($pk[10]));
										for($i=0;$i<count($gal);$i++){
											if($gal[$i]<>""){
												if(file_exists("images/".$pk[12].'/'.$gal[$i])){
													echo '<div class="col-6">
                                        <div class="package-gallary-item"><a href="'."../images/".$pk[12].'/'.$gal[$i].'" data-fancybox="gallery" data-caption=""><img src="'."../images/".$pk[12].'/'.$gal[$i].'" alt=""></a></div></div>';
												}
											}
										}
									}
								?>
                                   
                                   
                                </div>
                            </div>
                            
                          </div>
                    </div>
                </div>
               </div>

               <div class="col-lg-4">
                   <div class="package-sidebar">
                    <aside class="package-widget-style-2 widget-form mt-30">
                        <div class="widget-title text-center d-flex justify-content-between">
                            <h4>Enquire </h4>
                            <h3 class="widget-lavel"><small>Start from</small> <i class='bx bx-rupee'></i> <?php echo $pk[4];?> <span>Per Person</span></h3>

                        </div>
                        
                        <div class="widget-body" id="eresult_pd">
                            <form action="#" method="post" id="enquiry-form">
                                <div class="booking-form-wrapper">
									<p class="text-danger">Price mentioned here is indicative purposes only!</p>
                                  <!--  <div class="custom-input-group">
                                        <input type="text" placeholder="Your Full Name" id="ename" name="ename" >
                                    </div>
                                    <div class="custom-input-group">
                                        <input type="email" placeholder="Your Email" id="eemail" name="eemail">
                                    </div>
                                    <div class="custom-input-group">
                                        <input type="tel" placeholder="Phone" id="ephone" name="ephone">
                                    </div>
                                  
                                    <div class="custom-input-group">
                                        <textarea  cols="20" rows="4" placeholder="Your message" id="emsg" name="emsg"></textarea>
                                    </div>
                                    <div class="custom-input-group">
                                        <div class="submite-btn">
                                            <button type="button" id="btnEnq" name="btnEnq" class="btn btn-primary">Enquire Now</button>
                                        </div>
                                     </div>-->
                                     <div class="custom-input-group">
                                        <input type="text" placeholder="Your Your Name" id="ename" name="ename" >
                                    </div>
                                     <div class="custom-input-group">
                                        <input type="text" placeholder="Email ID" id="eemail" name="eemail" >
                                    </div>
                                    <div class="custom-input-group">
                                        <input type="text" placeholder="Travel Location" id="eloc" name="eloc">
                                    </div>
                                    <div class="custom-input-group">
                                        <input type="text" placeholder="Date of Travel / Month" id="edate" name="edate">
                                    </div>
                                  
                                    <div class="custom-input-group">
                                        <input type="text" placeholder="No. of Days" id="edays" name="edays">
                                    </div>
                                     <div class="custom-input-group">
                                        <input type="text" placeholder="No. of Persons" id="eperson" name="eperson">
                                    </div>
                                     <div class="custom-input-group">
                                        <input type="text" placeholder="Contact No." id="econtact" name="econtact">
                                    </div>
                                     <div class="custom-input-group">
                                        <select id="etype" name="etype"><option value="0">Choose Tour Type</option>
                                        <option value="Family">Family</option>
                                        <option value="Friends">Friends</option>
                                        <option value="Honeymoon">Honeymoon</option>
                                        </select>
                                    </div>
                                    <div class="custom-input-group">
                                        <div class="submite-btn">
                                        <div id="eerror_pd"></div>
                                            <button type="button" id="btnPlan_det" name="btnPlan_det" class="btn btn-primary">Send Message</button>
                                        </div>
                                     </div>
                                </div>
                            </form>
                        </div>
                    </aside>
                    
                    <aside class="package-widget-style-2 widget-tag-cloud mt-30">
                        <div class="widget-title text-center">
                            <h4>Short Links</h4>
                        </div>
                        <div class="tag-cloud widget-body">
                        <?php
							$tags = explode(",",$pk[11]);
							if(count($tags)>0){
								for($j=0;$j<count($tags);$j++){
									if($tags[$j]<>""){
										echo '<a href="../'.trim($tags[$j]).'">'.trim($tags[$j]).'</a>';										
									}
								}

							}
						?>
                        </div>
                    </aside>
                   </div>
               </div>
           </div>
        </div>
    </div>