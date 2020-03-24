<section class="container">
    <div class="row">
        <div class="col-12">
            <h2>Contact Us</h2>
            <form action="<?= site_url('contact/store') ?>" method="POST" >
                <?php if ( isset($error) && $error) { ?>
                    <div class="alert alert-warning alert-dismissible fade show">
                        <?php echo validation_errors(); ?>
                    </div>
                <?php } ?>

                <div class="row">
                    <div class="form-group col-12 col-md-6">
                        <label for="nameInput">Name</label>
                        <input type="text" name="name" class="form-control" id="nameInput" value="<?php echo set_value('name'); ?>" placeholder="Enter Name" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-12 col-md-6">
                        <label for="emailInput">Email</label>
                        <input type="email" name="email" class="form-control" id="emailInput" value="<?php echo set_value('email'); ?>" placeholder="Enter Email" required>
                    </div>

                    <div class="form-group col-12 col-md-6">
                        <label for="phoneInput">Phone Number</label>
                        <input type="text" name="phone" class="form-control" id="phoneInput" value="<?php echo set_value('phone'); ?>" placeholder="Enter Phone Number" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="commentInput">Comment</label>
                    <textarea name="comment" rows="5" cols="40" class="form-control" id="commentInput" value="<?php echo set_value('comment'); ?>" placeholder="Enter Comment" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</section>