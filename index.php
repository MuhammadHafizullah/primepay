<?php
include("./header.php");
?>
</head>
<body>
    
<div class="container">
    
    <a href="insert.php" class="btn btn-primary mt-5 m-2">Insert Record</a>
<div class="row">
<table class="table table-bordered">
    <thead>
        <tr>
        <th>Name</th>
        <th>Father Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Actions</th>
        </tr>
    </thead>
    <tbody id="table">

    </tbody>
</table>
</div>
</div>



<script src="./jQuery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // $("#load").on("click",function(e) {
           $.ajax({
            url : "loadData.php",
            type : "POST",
            success: function(data) {
                $("#table").html(data);
            }
        //    }); 
        });
    });
</script>
<?php
include("./footer.php");
?>
