<?php
include 'inc/header.php';

?>




<div class="panel panel-default">

    <h2> User List <span class="pull-right"> Welcome <strong>Guest
</strong> 
    </span> </h2>

</div>

<div class="panel-body">

<table class = "table table-striped">

<th width="20%">Serial</th>
<th width="20%">Name</th>
<th width="20%">User Name</th>
<th width="20%">Email</th>
<th width="20%">Action</th>

<tr>
<td>01</td>
<td>John Smith</td>
<td>jsmith</td>
<td>jsmith@gmail.com</td>
<td><a class="btn btn-primary" href="profile.php?id">View</a></td>
</tr>

<tr>
<td>02</td>
<td>Albert Michael</td>
<td>amichael</td>
<td>amichael@gmail.com</td>
<td><a class="btn btn-primary" href="profile.php?id">View</a></td>
</tr>

<tr>
<td>03</td>
<td>Bill Spencer</td>
<td>bspencer</td>
<td>bspencer@gmail.com</td>
<td><a class="btn btn-primary" href="profile.php?id">View</a></td>
</tr>



</table>
</div>

<?php
include 'inc/footer.php';

?>
