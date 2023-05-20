<?php
include("./header.php");
?>
</head>
<body>
    
<div class="container">
    <form id="myForm">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Student Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Father Name</label>
    <input type="text" class="form-control" id="fname">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email" class="form-control" id="mail">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contact</label>
    <input type="number" class="form-control" id="phone">
  </div>
  
  <button type="submit" class="btn btn-primary" id="btn">Submit</button>
    </form>
</div>



<script src="./jQuery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $("#btn").on("click",function(e) {
            e.preventDefault();
            debugger;
            
           $.ajax({
            url : "insertData.php",
            type : "POST",
            data : {name:$("#name").val(), fname:$("#fname").val(), email:$("#email").val(), phone:$("#phone").val()},
            success: function(data) {
                   if (data == 1) {
                    window.location.href = "index.php";
                   }
                   else{
                    alert("data not saved");
                   }
            }
           }); 
        });
    });
</script>
<?php
include("./footer.php");
?>
