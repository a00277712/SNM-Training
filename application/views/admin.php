<section class="container">
    <div class="row">
        <div class="col-12">
<table class='table table-striped'>
    <thead>
        <tr>
            <th>ID</th>
            <th>Date Created</th>
            <th>Title</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Comment</th>
            <th>Priority</th>
            <th>Status</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
<?php 
    foreach ($query as $row) { 
        echo '<tr><td>' . $row['Id'] . '</td><td>' . 
        $row['DateCreated'] . '</td><td>'.$row['Title'] . '</td><td>'. $row['FullName'] . 
        '</td><td>'.$row['Email'] . '</td><td>'.$row['Phone'] . '</td><td>' . $row['UserComment'] . 
        '</td><td>'.$row['Priority'] . '</td><td>'.$row['IssueStatus'] . '</td><td><a href="' . site_url('/edit') . '/' . $row['Id'] .'">Edit</a></tr>';
    }
?>
    </tbody>
</table>
</div>
    </div>
</section>