<section class="container">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="form-group">
                    <label for="search">Search Table</label>
                    <input type="text" name="search" class="form-control" id="search" onkeyup="search()">
                </div>

                <div class="form-group">
                    <label for="priority">Priority</label>
                    <select type="text" name="priority" class="form-control" id="priority" onchange="filterPriority()">
                        <option value=''>All</option>
                        <option value='High'>High</option>
                        <option value='Medium'>Medium</option>
                        <option value='Low'>Low</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select type="text" name="status" class="form-control" id="status" onchange="filterStatus()">
                        <option value=''>All</option>
                        <option value='Open'>Open</option>
                        <option value='In Progress'>In Progress</option>
                        <option value='Awaiting Feedback'>Awaiting Feedback</option>
                        <option value='Closed'>Closed</option>
                    </select>
                </div>
            </div>
            <table id="feedbackTable" class='table table-striped'>
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
                    '</td><td class="Priority">'.$row['Priority'] . '</td><td class="Status">'.$row['IssueStatus'] . '</td><td><a href="' . site_url('/admin/edit') . '/' . $row['Id'] .'">Edit</a></tr>';
                }
                ?>
                </tbody>    
            </table>
        </div>
    </div>
</section>

<script>
    function search() {
        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("search");
        filter = input.value.toUpperCase();
        table = document.getElementById("feedbackTable");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            tds = tr[i].getElementsByTagName("td");
            found = false;
            for (j = 0; j < tds.length; j++) {
                td = tds[j];
                if (!found) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                    found = true;
                } else {
                    tr[i].style.display = "none";
                }
                }
            }
        }
    }

    function filterStatus() {
        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("status");
        filter = input.value.toUpperCase();
        table = document.getElementById("feedbackTable");
        tr = table.getElementsByTagName("tr");

        
        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByClassName("Status")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

    function filterPriority() {
        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("priority");
        filter = input.value.toUpperCase();
        table = document.getElementById("feedbackTable");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByClassName("Priority")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>