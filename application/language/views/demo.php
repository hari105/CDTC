<?php 

foreach($courses as $row)
{ 
echo '<option value="'.$row->courseID.'">'.$row->courseID.' - '.$row->courseName.'</option>';
}
?>