<!-- Edit Company profile -->
<div class="modal fade" id="editCompanyProfileModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editCompanyProfileLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="editCompanyProfileLabel"> Edit Company Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/greendenpeak/includes/api/company.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="company_id" value="<?php echo $company['company_id']; ?>" hidden /> 
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input class="form-control" id="compName" placeholder="Company Name" name="company_name" value="<?php echo $company['company_name'] ?? ''; ?>" required />
                        <label for="compName">Company Name</label> 
                    </div>
                    <p class="modal-titles text-center">Select a new Logo</p>
                    <div class="input-group mb-3">
                        <input type="text" name="comp_logo" value="<?php echo $company['company_logo'];?>" hidden/>
                        <input type="file" class="form-control" id="inputGroupFile2" aria-describedby="inputGroupFileAddon05" aria-label="Upload" placeholder="Select a new Picture" name="comp_logo_file" onchange="previewImage(this, 'company-logo-img-preview')" accept="image/*"/>
                        <img id="company-logo-img-preview" class="w-100 mx-auto d-block" src="<?php echo $company['company_logo'];?>" alt="<?php echo $company['company_name'];?>" <?php if($company['company_logo'] === null || $company['company_logo'] === '') echo 'hidden';?> >
                    </div> 
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="compEmail" placeholder="Company Email" name="company_email" value="<?php echo $company['email'] ?? ''; ?>" required />
                        <label for="compEmail">Company Email</label> 
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="compTele" placeholder="Company Telephone Number" name="company_tele" value="<?php echo $company['tel_no'] ?? ''; ?>" required />
                        <label for="compTele">Company Telephone Number</label> 
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="compPhone" placeholder="Company Phone Number" name="company_phone" value="<?php echo $company['phone_no'] ?? ''; ?>" required />
                        <label for="compPhone">Company Phone Number</label> 
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="compAddress" placeholder="Company Address" name="company_address" value="<?php echo $company['address'] ?? ''; ?>" required />
                        <label for="compAddress">Company Phone Number</label> 
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="companyVision" rows="5" placeholder="Company Vision" name="company_vision" style="height:100px;"><?php echo $company['company_vision'] ?? ''; ?></textarea>
                        <label for="companyVision">Company Vision</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="companyMission" rows="5" placeholder="Company Mission" name="company_mission" style="height:100px;"><?php echo $company['company_mission'] ?? ''; ?></textarea>
                        <label for="companyMission">Company Mission</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="companySlogan" rows="5" placeholder="Company Slogan" name="company_slogan" style="height:100px;"><?php echo $company['company_slogan'] ?? ''; ?></textarea>
                        <label for="companySlogan">Company Slogan</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="companyHistory" rows="5" placeholder="Company History" name="company_history" style="height:100px;"><?php echo $company['company_history'] ?? ''; ?></textarea>
                        <label for="companyHistory">Company History</label>
                    </div>
                    <p class="modal-titles text-center">Select a new Photo for Company History</p>
                    <div class="input-group mb-3">
                        <input type="text" name="comp_history_img" value="<?php echo $company['company_history_img'];?>" hidden/>
                        <input type="file" class="form-control" id="inputGroupFile" aria-describedby="inputGroupFileAddon04" aria-label="Upload" placeholder="Select a new Picture" name="comp_history_img" onchange="previewImage(this, 'company-history-img-preview')" accept="image/*"/>
                        <img id="company-history-img-preview" class="w-100 mx-auto d-block" src="<?php echo $company['company_history_img'];?>" alt="<?php echo $company['company_history_img'];?>" <?php if($company['company_history_img'] === null || $company['company_history_img'] === '') echo 'hidden';?> >
                    </div> 
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="companyCoreValues" rows="5" placeholder="Company Core Values" name="company_core_values" style="height:100px;"><?php echo $company['company_core_values'] ?? ''; ?></textarea>
                        <label for="companyCoreValues">Company Core Values</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="compFounder" placeholder="Company Founder" name="company_founder" value="<?php echo $company['company_founder'] ?? ''; ?>" required />
                        <label for="compFounder">Company Founder</label> 
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="method" value="edit_company_information">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Company Social Media Links -->
<div class="modal fade" id="editSocmedModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editSocmedLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editSocmedLabel">Edit Social Media Links</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="my-2" id="div-socmed-collapse-edit">
                    <?php foreach($company_link as $link) {?>
                        <div class="card card-body mb-3">
                            <form action="/greendenpeak/includes/api/company.php" method="POST">
                                <h5 style="text-transform:capitalize;"><?php echo $link['link_name']; ?></h5>
                                <input type="text" id="socmed-id-field" name="socmed_id" value="<?php echo $link['link_id']; ?>" hidden />
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="text-socmed-link" name="socmed_link" placeholder="Social Media Link" value="<?php echo $link['link']; ?>">
                                    <label for="text-socmed-link">Social Media Link</label>
                                </div>
                                <button type="submit" class="btn btn-success w-100" name="method" value="edit_socmed">Save</button>
                            </form>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add New Image Modal -->
<div class="modal fade" id="addImg" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addImgLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addImgLabel">Add New Image</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/greendenpeak/includes/api/company.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input class="form-control" id="newImg" placeholder="New Image" name='img_name' required/>
                        <label for="newImg">Image Name</label>
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" name="img_src" class="form-control" aria-describedby="" aria-label="Upload" placeholder="Select a new Picture" accept="image/*" onchange="previewImage(this,'add-img')" required/>
                        <img id="add-img" class="w-100 mx-auto d-block" src="" />
                    </div>  
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="method" value="add_img">Submit</button>
                </div>
            </form> 
        </div>
    </div>
</div>

<!-- Edit Image -->
<div class="modal fade overflow-y-scroll" id="editImg" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editImgLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editImgLabel">Edit Carousel Image</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/greendenpeak/includes/api/company.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="text" id="img-id-field" name="img_id" hidden />
                    <div class="form-floating mb-3">
                        <input class="form-control" id="edit-img-title" placeholder="Edit Image" name='img_name' required/>
                        <label for="editImg">Image Name</label>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="img_src" id="edit-img-src" hidden/>
                        <input type="file" name="img_src" class="form-control" aria-label="Upload" placeholder="Select a new Picture" accept="image/*" onchange="previewImage(this, 'edit-img-preview')"/>
                        <img id="edit-img-preview" class="w-100 mx-auto d-block" src=""/>
                    </div>  
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="method" value="edit_img">Submit</button>
                </div>
            </form> 
        </div>
    </div>
</div>

<!-- Delete Img Alert -->
<div class="modal fade" id="deleteCarouselImg" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteCarouselImgLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteCarouselImgLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete the image from this list?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <form action="/greendenpeak/includes/api/company.php" method="post">
                    <input type="text" id="delete-carousel-img" name="img_id" hidden>
                    <button type="submit" class="btn btn-primary" name="method" value="delete_img">Yes</button>
                </form>
            </div>
        </div>
    </div>
</div>