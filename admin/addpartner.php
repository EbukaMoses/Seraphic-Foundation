 <?php include 'top.php'; ?>
 <!-- partial -->
 <div class="main-panel">
     <div class="content-wrapper">
         <div class="page-header">
             <h3 class="page-title"> ADD VOLUNTEER SECTION </h3>
             <nav aria-label="breadcrumb">
                 <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="#">SHF</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Add Volunteer Section

                     </li>
                 </ol>
             </nav>
         </div>
         <div class="row">
             <div class="col-12 grid-margin stretch-card">
                 <div class="card">
                     <div class="card-body">
                         <form class="forms-sample" action="functions/allcode.php" method="POST"
                             enctype="multipart/form-data">
                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label>Upload Image</label>
                                         <input type="file" name=" upload_profile" class="form-control">
                                     </div>
                                     <div class="form-group">
                                         <label for="exampleInputName1">Full Name: </label>
                                         <input type="text" class="form-control text-white" vlaue="
                                             <?php if(isset($_POST["fullname"]))  echo $_POST["fullname"]?>"
                                             name="fullname" id="exampleInputName1" placeholder="fullname">
                                     </div>
                                     <div class="form-group">
                                         <label for="exampleInputName1">Email: </label>
                                         <input type="email" class="form-control" id="exampleInputName1"
                                             placeholder="Email" name="email" vlaue="
                                             <?php if(isset($_POST["email"]))  echo $_POST["email"]?>">
                                     </div>
                                     <div class="form-group">
                                         <label for="about">Gender</label>
                                         <select class="form-control text-white" id="about" name="gender">
                                             <option value="">--Select--</option>
                                             <option value="male">Male</option>
                                             <option value="female">Female</option>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label for="exampleInputName1">Phone Number 1 (Whatsapp): </label>
                                         <input type="text" class="form-control text-white" id="exampleInputName1"
                                             vlaue="
                                             <?php if(isset($_POST["phone1"]))  echo $_POST["phone1"]?>"
                                             placeholder="Phone Number 1 (Whatsapp)" name="phone1">
                                     </div>
                                     <div class="form-group">
                                         <label for="exampleInputName1">Phone Number 2: </label>
                                         <input type="text" vlaue="
                                             <?php if(isset($_POST["phone2"]))  echo $_POST["phone2"]?>"
                                             class="form-control text-white" id="exampleInputName1"
                                             placeholder="Phone Number 2" name="phone2">
                                     </div>
                                     <h4 class="underline font-weight-bold mt-4">RESIDENTIAL ADDRESS</h4>
                                     <div class="form-group">
                                         <label for="exampleInputName1">Street: </label>
                                         <input type="text" vlaue="
                                             <?php if(isset($_POST["res_street"]))  echo $_POST["res_street"]?>"
                                             class="form-control text-white" id="exampleInputName1" placeholder="Street"
                                             name="res_street">
                                     </div>
                                     <div class="form-group">
                                         <label for="exampleInputName1">Town: </label>
                                         <input type="text" vlaue="
                                             <?php if(isset($_POST["res_town"]))  echo $_POST["res_town"]?>"
                                             class="form-control text-white" id="exampleInputName1" placeholder="Town"
                                             name="res_town">
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label for="exampleInputName1">State: </label>
                                         <input type="text" vlaue="
                                             <?php if(isset($_POST["res_state"]))  echo $_POST["res_state"]?>"
                                             class="form-control text-white" id="exampleInputName1" placeholder="State"
                                             name="res_state">
                                     </div>
                                     <div class="form-group">
                                         <label for="exampleInputName1">Country: </label>
                                         <input type="text" class="form-control text-white" id="exampleInputName1"
                                             vlaue="
                                             <?php if(isset($_POST["res_country"]))  echo $_POST["res_country"]?>"
                                             placeholder="Country" name="res_country">
                                     </div>
                                     <h4 class="underline font-weight-bold mt-4">ADDRESS OF ORIGIN</h4>
                                     <div class="form-group">
                                         <label for="exampleInputName1">Street: </label>
                                         <input type="text" class="form-control text-white" id="exampleInputName1"
                                             vlaue="
                                             <?php if(isset($_POST["orig_street"]))  echo $_POST["orig_street"]?>"
                                             placeholder="Street" name="orig_street">
                                     </div>
                                     <div class="form-group">
                                         <label for="exampleInputName1">Town: </label>
                                         <input type="text" class="form-control text-white" id="exampleInputName1"
                                             vlaue="
                                             <?php if(isset($_POST["orig_town"]))  echo $_POST["orig_town"]?>"
                                             placeholder="Town" name="orig_town">
                                     </div>
                                     <div class="form-group">
                                         <label for="exampleInputName1">State: </label>
                                         <input type="text" class="form-control text-white" id="exampleInputName1"
                                             vlaue="
                                             <?php if(isset($_POST["orig_state"]))  echo $_POST["orig_state"]?>"
                                             placeholder="State" name="orig_state">
                                     </div>
                                     <div class="form-group">
                                         <label for="exampleInputName1">Country: </label>
                                         <input type="text" class="form-control text-white" id="exampleInputName1"
                                             vlaue="
                                             <?php if(isset($_POST["orig_country"]))  echo $_POST["orig_country"]?>"
                                             placeholder="Country" name="orig_country">
                                     </div>
                                     <div class="form-group">
                                         <label for="exampleInputName1">Occupation/Profession: </label>
                                         <input type="text" class="form-control text-white" id="exampleInputName1"
                                             vlaue="
                                             <?php if(isset($_POST["occupation"]))  echo $_POST["occupation"]?>"
                                             placeholder="Occupation/Profession" name="occupation">
                                     </div>
                                     <div class="form-group">
                                         <label for="exampleInputName1">Monthly Vow(Amount): </label>
                                         <input type="text" class="form-control text-white" id="exampleInputName1"
                                             vlaue="
                                             <?php if(isset($_POST["pay"]))  echo $_POST["pay"]?>"
                                             placeholder="Monthly Vow(Amount) e.g #200,000" name="pay">
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <button type="submit" class="btn btn-primary mr-2 mt-4" name="addpart_btn"><i
                                         class="mdi mdi-upload btn-icon-prepend"></i> Upload</button>
                                 <a href="partners.php" class="btn btn-danger mr-2 mt-4"><i
                                         class="mdi mdi-undo"></i>Back</a>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- content-wrapper ends -->
     <?php include 'bottom.php'; ?>