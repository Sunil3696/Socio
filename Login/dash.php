<?php
include 'C:\Xampp\htdocs\socio\navbar\after_nav.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Socio</title>
</head>
<body>
<?php
	include 'C:\Xampp\htdocs\socio\dbconn\dbconn.php';
	$query="SELECT * FROM feeds";
  $result=mysqli_query($db,$query);
	?>
 <?php while($row = mysqli_fetch_array($result)){ 
	?>
	    <tr>;
	    	<div class="container">
   <div class="jumbotron">

           <strong><h4> <td> <?php echo $row['iname'] ?></strong></td><br></h4>
            <h5><td> <?php echo $row['content']?></td><br></h5>
            <?php $id=$row['id']; 
            //echo "$feed";
            ?>

            <li class="fa fa-thumbs-up" style="font-size:24px"></li>&nbsp&nbsp&nbsp&nbsp&nbsp
            <li class="fa fa-comment" style="font-size:24px"></li>&nbsp&nbsp&nbsp&nbsp&nbsp
            <div class="collapse multi-collapse" id="comment" class="btn btn-primary">            
          <br>
        </div>
            <li class="fa fa-share-alt" style="font-size:24px"></li>&nbsp&nbsp&nbsp&nbsp&nbsp
           </div></div>

            </tr>
            <?Php   }?>
            <?php 
          $sql="SELECT  * FROM feeds WHERE  id='$id'";
          $result=mysqli_query($db,$sql);
          while ($row=mysqli_fetch_array($result)) {
            //echo $row['comment'];
            
          }




          ?>
</body>
</html>