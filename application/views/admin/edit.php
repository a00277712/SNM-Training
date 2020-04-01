<section class="container">
    <div class="row">
        <div class="col-12">
            <h2>Edit Feedback</h2>
            <form action="<?= site_url('admin/store/').$id ?>" method="POST" >
                <?php if ( isset($error) && $error) { ?>
                    <div class="alert alert-warning alert-dismissible fade show">
                        <?php echo validation_errors(); ?>
                    </div>
                <?php } ?>

                <div class="row">
                    <div class="form-group col-12 col-md-6">
                        <label for="nameInput">Title</label>
                        <input type="text" name="title" class="form-control" id="titleInput" value="<?=$Title?>" placeholder="Enter Title" required>
                    </div>
                    
                    <div class="form-group col-6 col-md-3">
                        <label for="priorityInput">Priority</label>
                        <select type="text" name="priority" class="form-control" id="priorityInput">
                            <option value='High' <?php if($Priority == 'High'){ echo ' selected="selected"'; } ?>>High</option>
                            <option value='Medium' <?php if($Priority == 'Medium'){ echo ' selected="selected"'; } ?>>Medium</option>
                            <option value='Low' <?php if($Priority == 'Low'){ echo ' selected="selected"'; } ?>>Low</option>
                        </select>
                    </div>

                    <div class="form-group col-6 col-md-3">
                        <label for="statusInput">Status</label>
                        <select type="text" name="status" class="form-control" id="statusInput">
                            <option value='Open' <?php if($IssueStatus == 'Open'){ echo ' selected="selected"'; } ?>>Open</option>
                            <option value='In Progress' <?php if($IssueStatus == 'In Progress'){ echo ' selected="selected"'; } ?>>In Progress</option>
                            <option value='Awaiting Feedback' <?php if($IssueStatus == 'Awaiting Feedback'){ echo ' selected="selected"'; } ?>>Awaiting Feedback</option>
                            <option value='Closed' <?php if($IssueStatus == 'Closed'){ echo ' selected="selected"'; } ?>>Closed</option>
                        </select>
                    </div>
                </div>
                    
                <div class="row">
                    <div class="form-group col-12 col-md-6">
                        <label for="nameInput">Name</label>
                        <input type="text" name="name" class="form-control" id="nameInput" value="<?=$FullName?>" placeholder="Enter Name" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-12 col-md-6">
                        <label for="emailInput">Email</label>
                        <input type="email" name="email" class="form-control" id="emailInput" value="<?=$Email?>" placeholder="Enter Email" required>
                    </div>

                    <div class="form-group col-12 col-md-6">
                        <label for="phoneInput">Phone Number</label>
                        <input type="text" name="phone" class="form-control" id="phoneInput" value="<?=$Phone?>" placeholder="Enter Phone Number" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>

            <div class="form-group">
                <label for="commentInput">Original Message</label>
                <textarea name="comment" rows="5" cols="40" class="form-control" id="commentInput" disabled><?=$UserComment?></textarea>
            </div>

            <?php 
                if($Messages){
                    foreach($Messages as $message) {
                        echo '<div class="form-group">
                        <label for="commentInput">From: ' . $message['FullName'] . '</label>
                        <textarea rows="5" cols="40" class="form-control" disabled>'. $message['UserComment'] .'</textarea>
                        </div>';
                    }
                }
            ?>

            <form action="<?= site_url('admin/add_message') . '/' . $Id ?>" method="POST" >
                <?php if ( isset($error) && $error) { ?>
                    <div class="alert alert-warning alert-dismissible fade show">
                        <?php echo validation_errors(); ?>
                    </div>
                <?php } ?>

                <div class="row">
                    <div class="form-group col-12 col-md-6">
                        <label for="nameInput">Name</label>
                        <input type="text" name="fullName" class="form-control" id="fullNameInput" placeholder="Enter Name" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="commentInput">Comment</label>
                    <textarea name="newComment" rows="5" cols="40" class="form-control" id="newCommentInput" placeholder="Enter Comment" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Reply</button>
        </div>
    </div>
</section>