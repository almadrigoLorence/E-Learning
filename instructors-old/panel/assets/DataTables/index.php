<!doctype html>
<html>
    <head>
        <title>Datatable AJAX pagination with PHP and PDO</title>
        <!-- Datatable CSS -->
        <link href='DataTables/datatables.min.css' rel='stylesheet' type='text/css'>

        <!-- jQuery Library -->
        <script src="jquery-3.3.1.min.js"></script>
        
        <!-- Datatable JS -->
        <script src="DataTables/datatables.min.js"></script>
        
    </head>
    <body >


        <div class="container-fluid">
    
            <!-- Table -->
            <table id='empTable' class='display dataTable'>
                <thead>
                <tr>
                    <th>Student name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Course ID</th>
                    <th>City</th>
                </tr>
                </thead>
                
            </table>
        </div>
        
        <!-- Script -->
        <script>
        $(document).ready(function(){
            $('#empTable').DataTable({
                'processing': true,
                'serverSide': true,
                'serverMethod': 'post',
                'ajax': {
                    'url':'ajaxfile.php'
                },
                'columns': [
                    { data: 'emp_name' },
                    { data: 'email' },
                    { data: 'gender' },
                    { data: 'salary' },
                    { data: 'city' },
                ]
            });
        });
        </script>
    </body>

</html>
