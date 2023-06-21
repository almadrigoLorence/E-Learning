<div class="app-main__outer">
    <div id="refreshData">
    <div class="app-main__inner">
<!--             <div class="app-page-title" style="background-color: white; color: black;">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="fa fa-users-cog fa-1x">
                            </i>
                        </div>
                        <div>Change Current Password
                        </div>
                    </div>
                    <div class="page-title-actions">
                       
                        <div class="d-inline-block dropdown">
                           <img src="assets/images/icon.png" height="30%" width="50%" style="border-radius: 5px;">
                        </div>
                    </div>   
                 </div>
            </div>           
 -->
<!--         <form name="frmChange" method="post" action=""
        onSubmit="return validatePassword()">
        <div style="width: 500px;">
            <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
            <table border="0" cellpadding="10" cellspacing="0"
                width="500" align="center" class="tblSaveForm">
                <tr class="tableheader">
                    <td colspan="2">Change Password</td>
                </tr>
                <tr>
                    <td width="40%"><label>Current Password</label></td>
                    <td width="60%"><input type="password"
                        name="currentPassword" class="txtField" /><span
                        id="currentPassword" class="required"></span></td>
                </tr>
                <tr>
                    <td><label>New Password</label></td>
                    <td><input type="password" name="newPassword"
                        class="txtField" /><span id="newPassword"
                        class="required"></span></td>
                </tr>
                <td><label>Confirm Password</label></td>
                <td><input type="password" name="confirmPassword"
                    class="txtField"/><span id="confirmPassword"
                    class="required"></span></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit"
                        value="Submit" class="btnSubmit"></td>
                </tr>
            </table>
        </div>
        </form> -->
            <div class="col-md-6">
               <div class="main-card pb-3 mb-3 card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h5 class="card-title">PERSONAL SETTING/</h5>
                                                <h2><strong>Change Password</strong></h2>
                                                <span class="text-hide" id="WrongPass" style="color: red;"><i class="fa fa-exclamation"></i>Password Doesnt Match or Wrong Input Old Password</span>
                                            </div>
                                        </div>
                                    </div>
                                    <form class="cform" name="frmChange" method="post" 
                                     id="changePassword">
                                     <input type="hidden" name="adminid" value="<?php echo $_SESSION['admin']['admin_id'];?>">
                                        <div class="pb-2">
                                            <div class="col-md-12">
                                                <div>
                                                    <label class="font-weight-bold">OLD PASSWORD</label>
                                                    <input type="password" name="currentPassword" id="currentPassword" class="form-control cinput" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pb-2">
                                            <div class="col-md-12">
                                                <div>
                                                    <label class="font-weight-bold">NEW PASSWORD</label>
                                                    <input type="password" name="newPassword" id="newPassword" class="form-control cinput" pattern=".{4,}"   required title="4 characters minimum" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pb-2">
                                            <div class="col-md-12">
                                                <div>
                                                    <label class="font-weight-bold">CONFIRM PASSWORD</label>
                                                    <input type="password" name="confirmPassword" id="confirmPassword" class="form-control cinput" pattern=".{4,}"   required title="4 characters minimum" required >
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="pt-3">   
                                            <div class="float-right">
                                                <button class="btn" type="submit" name="submit">Save Settings</button>
                                            </div>
                                        </div>
                                    </form>
                </div>
            </div>
  </div>
                        </div>
                    </div>