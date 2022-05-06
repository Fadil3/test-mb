<?php
include('dbconnection.php');
?>
<table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tittle</th>                       
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                     <?php
                    $ret=mysqli_query($db,"select * from image");
                    $cnt=1;
                    $row=mysqli_num_rows($ret);
                    if($row>0){
                    while ($row=mysqli_fetch_array($ret)) {
                    
                    ?>
                    <!--Fetch the Records -->
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php  echo $row['tittle'];?></td>
                        <td><?php  echo $row['image'];?></td>
                        <td>
                            <a href="update.php?editid=<?php echo htmlentities ($row['id']);?>" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a> 
                        </td>
                    </tr>
                    <?php 
                    $cnt=$cnt+1;
                    } } else {?>
                    <tr>
                        <th style="text-align:center; color:red;" colspan="6">No Record Found</th>
                    </tr>
<?php } ?>                 
              
</tbody>
 </table>