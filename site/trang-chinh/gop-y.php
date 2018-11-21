<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Góp ý</title>
</head>
<body>
	<div class="col-md-12">
                                   	<div class="alert alert-danger">
										<h1>Góp ý</h1>
									</div>
                                    <p class="text-center space25"></p>
<form action="" class="form-horizontal"  enctype="multipart/form-data" id="frmFeedBack" method="post">                                        <div class="row form-group">
                                            <input type="hidden" id="hdFeedBackContent" name="hdFeedBackContent">
                                            <label class="col-sm-4">Họ tên công dân/Tên doanh nghiệp <b class="text-red">*</b></label>
                                            <div class="col-sm-8">
                                                <input style="text-transform:capitalize" type="text" name="txtFullName" id="txtFullName" maxlength="200" data-special="special" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label class="col-sm-4">Email <b class="text-red">*</b></label>
                                            <div class="col-sm-8">
                                                <input type="email" name="txtEmail" id="txtEmail" maxlength="200" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label class="col-sm-4">Điện thoại</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="txtPhoneNumber" id="txtPhoneNumber" maxlength="13" class="form-control" data-type="phone">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label class="col-sm-4">Tiêu đề <b class="text-red">*</b></label>
                                            <div class="col-sm-8">
                                                <input type="text" name="txtFeedBackTitle" id="txtFeedBackTitle" maxlength="200" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label class="col-sm-4">Nội dung <b class="text-red">*</b></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" id="txtFeedBackContent" ></textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="btn-group text-center">
                                            <a href="/" class="btn btn-default">Hủy bỏ</a>
                                            <a tabindex="0" id="btnFeedbackSubmit" class="btn btn-primary">Góp ý</a>
                                        </div>
</form>                                </div>
</body>
</html>