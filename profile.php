<?php
include 'inc/header.php';

?>




<div class="panel panel-default">

    <h2> User Profile <span class="pull-right"><a class="btn btn-primary" href="index.php"> Back</a> </h2>

</div>

<div class="panel-body">

<div style="max-width: 600px; margin:0 auto">


<form action=" " method="POST">

    <div class="form-group">
        <label for="name">Your Name </label>
        <input type="text" id="name" name="name" class="form-control" value="John Smith" />

    </div>

    <div class="form-group">
        <label for="username"> User Name </label>
        <input type="text" id="username" name="username" class="form-control" value="jsmith" />

    </div>

    <div class="form-group">
        <label for="email">Email Address </label>
        <input type="text" id="email" name="email" class="form-control" value="jsmith@gmail.com" />

        <br>

<button type="submit" name="update" class="btn btn-success">Update</button>

    </div>


   

      
        

    


</form>

</div>
</div>

<?php
include 'inc/footer.php';

?>