<?php include_once('messagehead.php'); ?>
<?php include_once('messageheader.php'); ?>
<?php include_once('messagesidebar.php'); ?>
<?php include_once('messagescript.php'); ?>
<section class="content-wrapper">
    <section class="content-header">
<!--        main row-->
        <div class="row">
            <div class="col-md-12">

<!--                guardian details-->
                <div class="box box-primary">
                    <div class="box-header  with-border">
                        <h3 class="box-title">Message </h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Student Id:</label>
                                <input type="email" class="form-control" id="parentNameTxt" placeholder="Enter Student Id">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Student Name:</label>
                                <input type="email" class="form-control" id="parentNameTxt" placeholder="Enter Studenr Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Message:</label>
                                <textarea class="form-control" id="motherAddressTxt" rows="3" placeholder="Enter messege here"></textarea>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>

                    </form>
                </div><!-- /.box -->
            </div>
        </div>
        <div>
        </div>
    </section>
</section>
<?php include_once('../admincommon/footer.php'); ?>
