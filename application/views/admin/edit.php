<?php $title = "Edit Feedback" ?>

<h2>Edit Feedback</h2>
<form action="<?= site_url('admin/store/').$id ?>" method="POST" >
    <?php if ( isset($error) && $error) { ?>
        <div class="alert alert-warning alert-dismissible fade show">
            <?php echo validation_errors(); ?>
        </div>
    <?php } ?>

    <div class="form-group">
        <label for="nameInput">Title</label>
        <input type="text" name="title" class="form-control" id="titleInput" value="<?=$Title?>" placeholder="Enter Title">
    </div>

    <div class="form-group">
        <label for="nameInput">Name</label>
        <input type="text" name="name" class="form-control" id="nameInput" value="<?=$FullName?>" placeholder="Enter Name">
    </div>

    <div class="form-group">
        <label for="emailInput">Email</label>
        <input type="text" name="email" class="form-control" id="emailInput" value="<?=$Email?>" placeholder="Enter Email">
    </div>

    <div class="form-group">
        <label for="phoneInput">Phone Number</label>
        <input type="text" name="phone" class="form-control" id="phoneInput" value="<?=$Phone?>" placeholder="Enter Phone Number">
    </div>

    <div class="form-group">
        <label for="commentInput">Comment</label>
        <textarea name="comment" rows="5" cols="40" class="form-control" id="commentInput" placeholder="Enter Comment"><?=$UserComment?></textarea>
    </div>

    <div class="form-group">
        <label for="priorityInput">Priority</label>
        <select type="text" name="priority" class="form-control" id="priorityInput" placeholder="Select Priority">
            <option value='High' <?php if($Priority == 'High'){ echo ' selected="selected"'; } ?>>High</option>
            <option value='Medium' <?php if($Priority == 'Medium'){ echo ' selected="selected"'; } ?>>Medium</option>
            <option value='Low' <?php if($Priority == 'Low'){ echo ' selected="selected"'; } ?>>Low</option>
        </select>
    </div>

    <div class="form-group">
        <label for="statusInput">Status</label>
        <select type="text" name="status" class="form-control" id="statusInput" placeholder="Select Status">
            <option value='Open' <?php if($IssueStatus == 'Open'){ echo ' selected="selected"'; } ?>>Open</option>
            <option value='In Progress' <?php if($IssueStatus == 'In Progress'){ echo ' selected="selected"'; } ?>>In Progress</option>
            <option value='Awaiting Feedback' <?php if($IssueStatus == 'Awaiting Feedback'){ echo ' selected="selected"'; } ?>>Awaiting Feedback</option>
            <option value='Closed' <?php if($IssueStatus == 'Closed'){ echo ' selected="selected"'; } ?>>Closed</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
