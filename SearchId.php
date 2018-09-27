<?php
 include_once 'Model/dbconnection.php';   
 include_once 'Model/dbfunction.php';
// echo'<div id="spinner" class="spinner" style="display:none;">
//    <img id="img-spinner" src="spinner.gif" alt="Loading"/>
//</div>';
if (isset($_GET['q'])) {
    echo'<br>';
    if (searchIsCandidate()) {
        $info = searchCand();
        if ($info->name!= NULL) {
            echo '<div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">';
            echo '<div class="mytable">
<table class="table-fill">
<thead>
<tr>
    <th class="text-left" style="color: white">Info</th>
<th class="text-left" style="color: white">Value</th>
</tr>
</thead>
<tbody class="table-hover">
<tr>
<td class="text-left">Kaarigar/Organisation</td>
<td class="text-left">Kaarigar</td>
</tr>
<tr>
<td class="text-left">Name</td>
<td class="text-left">' . $info->name . '</td>
</tr>
<tr>
<td class="text-left">Age</td>
<td class="text-left">' . $info->age . '</td>
</tr>
<tr>
<td class="text-left">Profession</td>
<td class="text-left">' . $info->profession . '</td>
</tr>
<tr>
<td class="text-left">Skilled</td>
<td class="text-left">' . $info->skill . '</td>
</tr>
<tr>
<td class="text-left">Certified with KIPS</td>
<td class="text-left">' . $info->cert . '</td>
</tr>
<tr>
<td class="text-left">Adhaar ID</td>
<td class="text-left">' . $info->adhar . '</td>
</tr>
<tr>
<td class="text-left">Phone</td>
<td class="text-left">' . $info->phone . '</td>
</tr>
<tr>
<td class="text-left">Email Address</td>
<td class="text-left">' . $info->email . '</td>
</tr>
<tr>
<td class="text-left">Address</td>
<td class="text-left">' . $info->address . '</td>
</tr>
<tr>
<td class="text-left">Job Location</td>
<td class="text-left">' . $info->loc . '</td>
</tr>
<tr>
<td class="text-left">Job Type</td>
<td class="text-left">' . $info->per . '</td>
</tr>
<tr>
<td class="text-left">Salary Expected</td>
<td class="text-left">' . $info->salary . '</td>
</tr>
<tr>
<td class="text-left">Registration Date</td>
<td class="text-left">' . $info->regDate . '</td>
</tr>
</tbody>
</table> <br><br>
</div>';
            echo'</div></div></div>';
        } else {
            echo '<br><br><div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
 <center><strong>Oops!</strong>Wrong ID check again</center>
</div>';
        }
    } else {
        $info = searchOrg();
        if ($info->name!= NULL) {
            echo '<div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">';
            echo '<div class="mytable">
    <table class="table-fill">
        <thead>
            <tr>
                <th class="text-left" style="color: white">Info</th>
                <th class="text-left" style="color: white">Value</th>
            </tr>
        </thead>
        <tbody class="table-hover">
            <tr>
                <td class="text-left">Kaarigar/Organisation</td>
                <td class="text-left">Organisation</td>
            </tr>
            <tr>
                <td class="text-left">Organisation Name</td>
                <td class="text-left">' . $info->name . '</td>
            </tr>
            <tr>
                <td class="text-left">Project Name</td>
                <td class="text-left">' . $info->project . '</td>
            </tr>
            <tr>
                <td class="text-left">Location</td>
                <td class="text-left">' . $info->loc . '</td>
            </tr>
            <tr>
                <td class="text-left">Phone</td>
                <td class="text-left">' . $info->phone . '</td>
            </tr>
            <tr>
                <td class="text-left">Email Address</td>
                <td class="text-left">' . $info->email . '</td>
            </tr>
            <tr>
                <td class="text-left">Required Employees in :</td>
                <td class="text-left">' . $info->days . '</td>
            </tr>
            <tr>
                <td class="text-left">Phone</td>
                <td class="text-left">' . $info->phone . '</td>
            </tr>
            <tr>
                <td class="text-left">Email Address</td>
                <td class="text-left">' . $info->email . '</td>
            </tr>
                <td class="text-left">Job Location</td>
                <td class="text-left">' . $info->loc . '</td>
            </tr>
            <tr>
                <td class="text-left">Registration Date</td>
                <td class="text-left">' . $info->regDate . '</td>
            </tr>';
            if ($info->elec != 0) {
                echo '<tr>
                <td class="text-left">Electrician</td>
                <td class="text-left">' . $info->elec . '</td>
            </tr>';
            }
            if ($info->plumb != 0) {
                echo '<tr>
                <td class="text-left">Plumber</td>
                <td class="text-left">' . $info->plumb . '</td>
            </tr>';
            }
            if ($info->ac != 0) {
                echo '<tr>
                <td class="text-left">A.C Technician</td>
                <td class="text-left">' . $info->ac . '</td>
            </tr>';
            }
            if ($info->pipe != 0) {
                echo '<tr>
                <td class="text-left">Pipe Fitter</td>
                <td class="text-left">' . $info->pipe . '</td>
            </tr>';
            }
            if ($info->carp != 0) {
                echo '<tr>
                <td class="text-left">Carpenter</td>
                <td class="text-left">' . $info->carp . '</td>
            </tr>';
            }
            if ($info->paint != 0) {
                echo '<tr>
                <td class="text-left">Painter</td>
                <td class="text-left">' . $info->paint . '</td>
            </tr>';
            }
            if ($info->insu != 0) {
                echo '<tr>
                <td class="text-left">Insulator</td>
                <td class="text-left">' . $info->insu . '</td>
            </tr>';
            }
            if ($info->duct != 0) {
                echo '<tr>
                <td class="text-left">Ductman</td>
                <td class="text-left">' . $info->duct . '</td>
            </tr>';
            }
            if ($info->tail != 0) {
                echo '<tr>
                <td class="text-left">Tailor</td>
                <td class="text-left">' . $info->tail . '</td>
            </tr>';
            }
            if ($info->acc != 0) {
                echo '<tr>
                <td class="text-left">Accountant Basic</td>
                <td class="text-left">' . $info->elec . '</td>
            </tr>';
            }
            if ($info->helper != 0) {
                echo '<tr>
                <td class="text-left">Helper</td>
                <td class="text-left">' . $info->helper . '</td>
            </tr>';
            }
            if ($info->crew != 0) {
                echo '<tr>
                <td class="text-left">Electrician</td>
                <td class="text-left">' . $info->crew . '</td>
            </tr>';
            }
            if ($info->cook != 0) {
                echo '<tr>
                <td class="text-left">Electrician</td>
                <td class="text-left">' . $info->cook . '</td>
            </tr>';
            }
            echo '</tbody>
    </table>
    <br>
    <br>
</div>';
            echo'</div></div></div>';
        } else {
            echo '<br><br><div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
 <center><strong>Oops!</strong>Wrong ID check again</center>
</div>';
        }
    }
}else{
     echo '<br><br><div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
 <center><strong>Oops!</strong>Wrong ID check again</center>
</div>';
    
}
?>