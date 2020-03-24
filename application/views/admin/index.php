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
                    <select type="text" name="priority" class="form-control" id="priority" onchange="search()">
                        <option value=''>All</option>
                        <option value='High'>High</option>
                        <option value='Medium'>Medium</option>
                        <option value='Low'>Low</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select type="text" name="status" class="form-control" id="status" onchange="search()">
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
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                foreach ($query as $row) { 
                    echo '<tr><td>' . $row['Id'] . '</td><td>' . 
                    $row['DateCreated'] . '</td><td>'.$row['Title'] . '</td><td>'. $row['FullName'] . 
                    '</td><td>'.$row['Email'] . '</td><td>'.$row['Phone'] . '</td><td>' . $row['UserComment'] . 
                    '</td><td class="Priority">'.$row['Priority'] . '</td><td class="Status">'.$row['IssueStatus'] . 
                    '</td><td><a href="' . site_url('/admin/edit') . '/' . $row['Id'] .'">Edit</a></td><td><a href="' . 
                    site_url('/admin/delete') . '/' . $row['Id'] .'">Delete</a></td></tr>';
                }
                ?>
                </tbody>    
            </table>
        </div>
    </div>
</section>

<script>
    function search() {

        var table = document.getElementById("feedbackTable");
        var trs = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (var row = 0; row < trs.length; row++) {
            if(testRow(trs[row])){
                trs[row].style.display = "";
            } else {
                trs[row].style.display = "none";
            }
        }
    }

    function testRow(tr) {
        if(filterPriority(tr)){
            if(filterStatus(tr)){
                return filterSearch(tr);
            }
        }
        //unfound
        return false
    }

    function filterSearch(tr) {
        var input = document.getElementById("search");
        var filter = input.value.toUpperCase();

        tds = tr.getElementsByTagName("td");
        if(tds.length<=0){
            //header
            return true;
        }
        for (var j = 0; j < tds.length; j++) {
            var td = tds[j];
            var txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                return true
            }
        }
        //unfound
        return false
    }

    function filterStatus(tr) {
        var input = document.getElementById("status");
        var filter = input.value.toUpperCase();
        
        var status = tr.getElementsByClassName("Status")[0];

        if(!status){
            //header
            return true;
        }

        var txtValue = status.textContent || status.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            return true;
        }
        //unfound
        return false
    }

    function filterPriority(tr) {
        var input = document.getElementById("priority");
        var filter = input.value.toUpperCase();

        var priority = tr.getElementsByClassName("Priority")[0];
        if(!priority){
            //header
            return true;
        }

        if (priority) {
            var txtValue = priority.textContent || priority.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                return true;
            }
        }
        //unfound
        return false
    }
</script>