    
<?php

$conn = mysqli_connect("localhost","root","") or die("CONNECTION_ERROR");
mysqli_select_db($conn,"smartwhiz_db") or die(mysqli_error($conn));
?>
<html>
<head>
    <style>
        
        #body{
            
            padding: 0;
	margin:0;
	background-color: #EAEAEA;
        }
        table{
            
            padding: 2%;
            align-content: center;
            align-items: center;
            
        }
        b{
            margin-top: 0;
            font-size: 25px; 
            margin-left: 10%;
              font-family: serif;
        }
        td{
            
        }
    #div1{
       
     
    font-size: 20px;
    font-weight: 100;
   
       font-family: Perpetua; 
        
    
    
    
    }  #logo
    {
       
        height: 43%;
        width: auto;
        }
        #logo1
    {
       
        height: 40%;
        width: auto;
        margin-left: 0%;
        margin-right: 0%;
        }
        
           #tabs{
        	font-weight: bold;
        	vertical-align: middle;
        	width: 10%;
            font-size:15px;
         
        }
          #navbar{
        	
        
        	font-size: 65%;
        	
        
        	background-color: #D5D8DC;#808B96;
        	
        }
        #main{
            
            height: 70%;
            width: 100%;
            padding-left: 0%;
            margin-left: 2%;
            margin-right: 2%;
            margin-bottom: 2%;
            margin-top: 2%;
            padding-right: %;
            background-color: white;

        }
        
        #divl{
            margin-left: 0%;
            margin-top: 0%;
            border-right-color: black;
            border-right-style: solid;
            
            
            
        }
        #td2{
            vertical-align: top;
            background-color: 
        }
        #divr{
            
            
        }
        </style>
    </head>
    <body id="body">
    
    
	<table id="navbar" align="center">
    <tr >
       <td id="tabs">
           
         <img src="img/log.jpg" id="logo">
        
        
        </td>
       <td id="tabs">
       	 <a href="management.php">MANAGEMENT</a>

       </td>
        <td id="tabs">
       	 <a href="#home">MEDICAL</a>

       </td>
       <td id="tabs">
       	 <a href="#home">ENGINEERING</a>

       </td>
       <td id="tabs">
       	 <a href="#home">LAW</a>

       </td>
       <td id="tabs" >
       	 <a href="#home">STUDY ABROAD</a>

       </td>
       <td id="tabs">
       	 <a href="#home">COUNSELLING</a>

       </td>
      <td>
           
         <img src="img/con1.jpg" id="logo1">
        
        
        </td>
        </tr>
    </table>


<?php

//echo "Successful";
        if(isset($_REQUEST['M001']))
        {
$ret = mysqli_query($conn,"SELECT * FROM college_details where Clg_Id='M001'");
?>
    
        <div id="main"><center>
<table width="80%">
    <tr>
            <td width="20%" >
            <div id="divl">

               <img src ="images/thumb4.PNG" height="230" width="340">
                </div>
    
    </td>
    <td width="60%" id="td2">
                <div id="divr">
                   <pre> 
                 <?php while($row = mysqli_fetch_array($ret,MYSQLI_ASSOC))
{
    
    ?>
    <div id="div1">
<?php    
    echo " <b><u>{$row['Name']}</u></b><br><br><br>";
   
 
    echo "\t\t{$row['Trust']}";echo "\t\t\t\t\t{$row['Establishment']}<br><br>";
    
    
    echo "\t\t{$row['Private/Govt']}";echo "\t\t\t\t\t\t\t\t\t\tAfiliated:  {$row['Afiliated']}<br><br>";
    
    echo "\t\t{$row['Approved_by']}"; echo "\t\t\t\t\t\t\t\t\t\t{$row['Campus']}<br>";
   
    echo "<br><br>\t\t<a href=#> www.itmbusinessschool.com</a>";
    
}
}
   ?>  </div></pre></div></td></tr></table></center></div>
        
        
        <?php
//////////////////////////////////////////////////////////////////////////////
        
         if(isset($_REQUEST['M002']))
        {
$ret = mysqli_query($conn,"SELECT * FROM college_details where Clg_Id='M002'");
?>
    
        <div id="main"><center>
<table width="80%">
    <tr>
            <td width="20%" >
            <div id="divl">

               <img src ="images/thumb4.PNG" height="230" width="340">
                </div>
    
    </td>
    <td width="60%" id="td2">
                <div id="divr">
                   <pre> 
                 <?php while($row = mysqli_fetch_array($ret,MYSQLI_ASSOC))
{
    
    ?>
    <div id="div1">
<?php    
    echo " <b><u>{$row['Name']}</u></b><br><br><br>";
   
 
    echo "\t\t{$row['Trust']}";echo "\t\t\t\t\t{$row['Establishment']}<br><br>";
    
    
    echo "\t\t{$row['Private/Govt']}";echo "\t\t\t\t\t\t\t\t\t\tAfiliated:  {$row['Afiliated']}<br><br>";
    
    echo "\t\t{$row['Approved_by']}"; echo "\t\t\t\t\t\t\t\t\t\t{$row['Campus']}<br>";
   
    echo "<br><br>\t\t<a href=#> www.itmbusinessschool.com</a>";
    
}
}
        
?> </div>

                        
                        </pre>
            </div>
    
    </td>
    </tr>
            </table></center>
        </div>
        
        
         <?php
//////////////////////////////////////////////////////////////////////////////
        
         if(isset($_REQUEST['M003']))
        {
$ret = mysqli_query($conn,"SELECT * FROM college_details where Clg_Id='M003'");
?>
    
        <div id="main"><center>
<table width="80%">
    <tr>
            <td width="20%" >
            <div id="divl">

               <img src ="images/thumb4.PNG" height="230" width="340">
                </div>
    
    </td>
    <td width="60%" id="td2">
                <div id="divr">
                   <pre> 
                 <?php while($row = mysqli_fetch_array($ret,MYSQLI_ASSOC))
{
    
    ?>
    <div id="div1">
<?php    
    echo " <b><u>{$row['Name']}</u></b><br><br><br>";
   
 
    echo "\t\t{$row['Trust']}";echo "\t\t\t\t\t{$row['Establishment']}<br><br>";
    
    
    echo "\t\t{$row['Private/Govt']}";echo "\t\t\t\t\t\t\t\t\t\tAfiliated:  {$row['Afiliated']}<br><br>";
    
    echo "\t\t{$row['Approved_by']}"; echo "\t\t\t\t\t\t\t\t\t\t{$row['Campus']}<br>";
   
    echo "<br><br>\t\t<a href=#> www.itmbusinessschool.com</a>";
    
}
}
        
?> </div>

                        
                        </pre>
            </div>
    
    </td>
    </tr>
            </table></center>
        </div>
        
         <?php
//////////////////////////////////////////////////////////////////////////////
        
         if(isset($_REQUEST['M004']))
        {
$ret = mysqli_query($conn,"SELECT * FROM college_details where Clg_Id='M004'");
?>
    
        <div id="main"><center>
<table width="80%">
    <tr>
            <td width="20%" >
            <div id="divl">

               <img src ="images/thumb4.PNG" height="230" width="340">
                </div>
    
    </td>
    <td width="60%" id="td2">
                <div id="divr">
                   <pre> 
                 <?php while($row = mysqli_fetch_array($ret,MYSQLI_ASSOC))
{
    
    ?>
    <div id="div1">
<?php    
    echo " <b><u>{$row['Name']}</u></b><br><br><br>";
   
 
    echo "\t\t{$row['Trust']}";echo "\t\t\t\t\t{$row['Establishment']}<br><br>";
    
    
    echo "\t\t{$row['Private/Govt']}";echo "\t\t\t\t\t\t\t\t\t\tAfiliated:  {$row['Afiliated']}<br><br>";
    
    echo "\t\t{$row['Approved_by']}"; echo "\t\t\t\t\t\t\t\t\t\t{$row['Campus']}<br>";
   
    echo "<br><br>\t\t<a href=#> www.itmbusinessschool.com</a>";
    
}
}
        
?> </div>

                        
                        </pre>
            </div>
    
    </td>
    </tr>
            </table></center>
        </div>
        
         <?php
//////////////////////////////////////////////////////////////////////////////
        
         if(isset($_REQUEST['M005']))
        {
$ret = mysqli_query($conn,"SELECT * FROM college_details where Clg_Id='M005'");
?>
    
        <div id="main"><center>
<table width="80%">
    <tr>
            <td width="20%" >
            <div id="divl">

               <img src ="images/thumb4.PNG" height="230" width="340">
                </div>
    
    </td>
    <td width="60%" id="td2">
                <div id="divr">
                   <pre> 
                 <?php while($row = mysqli_fetch_array($ret,MYSQLI_ASSOC))
{
    
    ?>
    <div id="div1">
<?php    
    echo " <b><u>{$row['Name']}</u></b><br><br><br>";
   
 
    echo "\t\t{$row['Trust']}";echo "\t\t\t\t\t{$row['Establishment']}<br><br>";
    
    
    echo "\t\t{$row['Private/Govt']}";echo "\t\t\t\t\t\t\t\t\t\tAfiliated:  {$row['Afiliated']}<br><br>";
    
    echo "\t\t{$row['Approved_by']}"; echo "\t\t\t\t\t\t\t\t\t\t{$row['Campus']}<br>";
   
    echo "<br><br>\t\t<a href=#> www.itmbusinessschool.com</a>";
    
}
}
        
?> </div>

                        
                        </pre>
            </div>
    
    </td>
    </tr>
            </table></center>
        </div>
        
        
         <?php
//////////////////////////////////////////////////////////////////////////////
        
         if(isset($_REQUEST['M006']))
        {
$ret = mysqli_query($conn,"SELECT * FROM college_details where Clg_Id='M006'");
?>
    
        <div id="main"><center>
<table width="80%">
    <tr>
            <td width="20%" >
            <div id="divl">

               <img src ="images/thumb4.PNG" height="230" width="340">
                </div>
    
    </td>
    <td width="60%" id="td2">
                <div id="divr">
                   <pre> 
                 <?php while($row = mysqli_fetch_array($ret,MYSQLI_ASSOC))
{
    
    ?>
    <div id="div1">
<?php    
    echo " <b><u>{$row['Name']}</u></b><br><br><br>";
   
 
    echo "\t\t{$row['Trust']}";echo "\t\t\t\t\t{$row['Establishment']}<br><br>";
    
    
    echo "\t\t{$row['Private/Govt']}";echo "\t\t\t\t\t\t\t\t\t\tAfiliated:  {$row['Afiliated']}<br><br>";
    
    echo "\t\t{$row['Approved_by']}"; echo "\t\t\t\t\t\t\t\t\t\t{$row['Campus']}<br>";
   
    echo "<br><br>\t\t<a href=#> www.itmbusinessschool.com</a>";
    
}
}
        
?> </div>

                        
                        </pre>
            </div>
    
    </td>
    </tr>
            </table></center>
        </div>
        
        
         <?php
//////////////////////////////////////////////////////////////////////////////
        
         if(isset($_REQUEST['M007']))
        {
$ret = mysqli_query($conn,"SELECT * FROM college_details where Clg_Id='M007'");
?>
    
        <div id="main"><center>
<table width="80%">
    <tr>
            <td width="20%" >
            <div id="divl">

               <img src ="images/thumb4.PNG" height="230" width="340">
                </div>
    
    </td>
    <td width="60%" id="td2">
                <div id="divr">
                   <pre> 
                 <?php while($row = mysqli_fetch_array($ret,MYSQLI_ASSOC))
{
    
    ?>
    <div id="div1">
<?php    
    echo " <b><u>{$row['Name']}</u></b><br><br><br>";
   
 
    echo "\t\t{$row['Trust']}";echo "\t\t\t\t\t{$row['Establishment']}<br><br>";
    
    
    echo "\t\t{$row['Private/Govt']}";echo "\t\t\t\t\t\t\t\t\t\tAfiliated:  {$row['Afiliated']}<br><br>";
    
    echo "\t\t{$row['Approved_by']}"; echo "\t\t\t\t\t\t\t\t\t\t{$row['Campus']}<br>";
   
    echo "<br><br>\t\t<a href=#> www.itmbusinessschool.com</a>";
    
}
}
        
?> </div>

                        
                        </pre>
            </div>
    
    </td>
    </tr>
            </table></center>
        </div>
        
        
         <?php
//////////////////////////////////////////////////////////////////////////////
        
         if(isset($_REQUEST['M008']))
        {
$ret = mysqli_query($conn,"SELECT * FROM college_details where Clg_Id='M008'");
?>
    
        <div id="main"><center>
<table width="80%">
    <tr>
            <td width="20%" >
            <div id="divl">

               <img src ="images/thumb4.PNG" height="230" width="340">
                </div>
    
    </td>
    <td width="60%" id="td2">
                <div id="divr">
                   <pre> 
                 <?php while($row = mysqli_fetch_array($ret,MYSQLI_ASSOC))
{
    
    ?>
    <div id="div1">
<?php    
    echo " <b><u>{$row['Name']}</u></b><br><br><br>";
   
 
    echo "\t\t{$row['Trust']}";echo "\t\t\t\t\t{$row['Establishment']}<br><br>";
    
    
    echo "\t\t{$row['Private/Govt']}";echo "\t\t\t\t\t\t\t\t\t\tAfiliated:  {$row['Afiliated']}<br><br>";
    
    echo "\t\t{$row['Approved_by']}"; echo "\t\t\t\t\t\t\t\t\t\t{$row['Campus']}<br>";
   
    echo "<br><br>\t\t<a href=#> www.itmbusinessschool.com</a>";
    
}
}
        
?> </div>

                        
                        </pre>
            </div>
    
    </td>
    </tr>
            </table></center>
        </div>
        
        
         <?php
//////////////////////////////////////////////////////////////////////////////
        
         if(isset($_REQUEST['M009']))
        {
$ret = mysqli_query($conn,"SELECT * FROM college_details where Clg_Id='M009'");
?>
    
        <div id="main"><center>
<table width="80%">
    <tr>
            <td width="20%" >
            <div id="divl">

               <img src ="images/thumb4.PNG" height="230" width="340">
                </div>
    
    </td>
    <td width="60%" id="td2">
                <div id="divr">
                   <pre> 
                 <?php while($row = mysqli_fetch_array($ret,MYSQLI_ASSOC))
{
    
    ?>
    <div id="div1">
<?php    
    echo " <b><u>{$row['Name']}</u></b><br><br><br>";
   
 
    echo "\t\t{$row['Trust']}";echo "\t\t\t\t\t{$row['Establishment']}<br><br>";
    
    
    echo "\t\t{$row['Private/Govt']}";echo "\t\t\t\t\t\t\t\t\t\tAfiliated:  {$row['Afiliated']}<br><br>";
    
    echo "\t\t{$row['Approved_by']}"; echo "\t\t\t\t\t\t\t\t\t\t{$row['Campus']}<br>";
   
    echo "<br><br>\t\t<a href=#> www.itmbusinessschool.com</a>";
    
}
}
        
?> </div>

                        
                        </pre>
            </div>
    
    </td>
    </tr>
            </table></center>
        </div>
        
        
        
         <?php
//////////////////////////////////////////////////////////////////////////////
        
         if(isset($_REQUEST['M010']))
        {
$ret = mysqli_query($conn,"SELECT * FROM college_details where Clg_Id='M010'");
?>
    
        <div id="main"><center>
<table width="80%">
    <tr>
            <td width="20%" >
            <div id="divl">

               <img src ="images/thumb4.PNG" height="230" width="340">
                </div>
    
    </td>
    <td width="60%" id="td2">
                <div id="divr">
                   <pre> 
                 <?php while($row = mysqli_fetch_array($ret,MYSQLI_ASSOC))
{
    
    ?>
    <div id="div1">
<?php    
    echo " <b><u>{$row['Name']}</u></b><br><br><br>";
   
 
    echo "\t\t{$row['Trust']}";echo "\t\t\t\t\t{$row['Establishment']}<br><br>";
    
    
    echo "\t\t{$row['Private/Govt']}";echo "\t\t\t\t\t\t\t\t\t\tAfiliated:  {$row['Afiliated']}<br><br>";
    
    echo "\t\t{$row['Approved_by']}"; echo "\t\t\t\t\t\t\t\t\t\t{$row['Campus']}<br>";
   
    echo "<br><br>\t\t<a href=#> www.itmbusinessschool.com</a>";
    
}
}
        
?> </div>

                        
                        </pre>
            </div>
    
    </td>
    </tr>
            </table></center>
        </div>
        
        
        
         <?php
//////////////////////////////////////////////////////////////////////////////
        
         if(isset($_REQUEST['M011']))
        {
$ret = mysqli_query($conn,"SELECT * FROM college_details where Clg_Id='M011'");
?>
    
        <div id="main"><center>
<table width="80%">
    <tr>
            <td width="20%" >
            <div id="divl">

               <img src ="images/thumb4.PNG" height="230" width="340">
                </div>
    
    </td>
    <td width="60%" id="td2">
                <div id="divr">
                   <pre> 
                 <?php while($row = mysqli_fetch_array($ret,MYSQLI_ASSOC))
{
    
    ?>
    <div id="div1">
<?php    
    echo " <b><u>{$row['Name']}</u></b><br><br><br>";
   
 
    echo "\t\t{$row['Trust']}";echo "\t\t\t\t\t{$row['Establishment']}<br><br>";
    
    
    echo "\t\t{$row['Private/Govt']}";echo "\t\t\t\t\t\t\t\t\t\tAfiliated:  {$row['Afiliated']}<br><br>";
    
    echo "\t\t{$row['Approved_by']}"; echo "\t\t\t\t\t\t\t\t\t\t{$row['Campus']}<br>";
   
    echo "<br><br>\t\t<a href=#> www.itmbusinessschool.com</a>";
    
}
}
        
?> </div>

                        
                        </pre>
            </div>
    
    </td>
    </tr>
            </table></center>
        </div>
        
        
        
         <?php
//////////////////////////////////////////////////////////////////////////////
        
         if(isset($_REQUEST['M012']))
        {
$ret = mysqli_query($conn,"SELECT * FROM college_details where Clg_Id='M012'");
?>
    
        <div id="main"><center>
<table width="80%">
    <tr>
            <td width="20%" >
            <div id="divl">

               <img src ="images/thumb4.PNG" height="230" width="340">
                </div>
    
    </td>
    <td width="60%" id="td2">
                <div id="divr">
                   <pre> 
                 <?php while($row = mysqli_fetch_array($ret,MYSQLI_ASSOC))
{
    
    ?>
    <div id="div1">
<?php    
    echo " <b><u>{$row['Name']}</u></b><br><br><br>";
   
 
    echo "\t\t{$row['Trust']}";echo "\t\t\t\t\t{$row['Establishment']}<br><br>";
    
    
    echo "\t\t{$row['Private/Govt']}";echo "\t\t\t\t\t\t\t\t\t\tAfiliated:  {$row['Afiliated']}<br><br>";
    
    echo "\t\t{$row['Approved_by']}"; echo "\t\t\t\t\t\t\t\t\t\t{$row['Campus']}<br>";
   
    echo "<br><br>\t\t<a href=#> www.itmbusinessschool.com</a>";
    
}
}
        
?> </div>

                        
                        </pre>
            </div>
    
    </td>
    </tr>
            </table></center>
        </div>
        
        
         <?php
//////////////////////////////////////////////////////////////////////////////
        
         if(isset($_REQUEST['M013']))
        {
$ret = mysqli_query($conn,"SELECT * FROM college_details where Clg_Id='M013'");
?>
    
        <div id="main"><center>
<table width="80%">
    <tr>
            <td width="20%" >
            <div id="divl">

               <img src ="images/thumb4.PNG" height="230" width="340">
                </div>
    
    </td>
    <td width="60%" id="td2">
                <div id="divr">
                   <pre> 
                 <?php while($row = mysqli_fetch_array($ret,MYSQLI_ASSOC))
{
    
    ?>
    <div id="div1">
<?php    
    echo " <b><u>{$row['Name']}</u></b><br><br><br>";
   
 
    echo "\t\t{$row['Trust']}";echo "\t\t\t\t\t{$row['Establishment']}<br><br>";
    
    
    echo "\t\t{$row['Private/Govt']}";echo "\t\t\t\t\t\t\t\t\t\tAfiliated:  {$row['Afiliated']}<br><br>";
    
    echo "\t\t{$row['Approved_by']}"; echo "\t\t\t\t\t\t\t\t\t\t{$row['Campus']}<br>";
   
    echo "<br><br>\t\t<a href=#> www.itmbusinessschool.com</a>";
    
}
}
        
?> </div>

                        
                        </pre>
            </div>
    
    </td>
    </tr>
            </table></center>
        </div>
        
        
         <?php
//////////////////////////////////////////////////////////////////////////////
        
         if(isset($_REQUEST['M014']))
        {
$ret = mysqli_query($conn,"SELECT * FROM college_details where Clg_Id='M014'");
?>
    
        <div id="main"><center>
<table width="80%">
    <tr>
            <td width="20%" >
            <div id="divl">

               <img src ="images/thumb4.PNG" height="230" width="340">
                </div>
    
    </td>
    <td width="60%" id="td2">
                <div id="divr">
                   <pre> 
                 <?php while($row = mysqli_fetch_array($ret,MYSQLI_ASSOC))
{
    
    ?>
    <div id="div1">
<?php    
    echo " <b><u>{$row['Name']}</u></b><br><br><br>";
   
 
    echo "\t\t{$row['Trust']}";echo "\t\t\t\t\t{$row['Establishment']}<br><br>";
    
    
    echo "\t\t{$row['Private/Govt']}";echo "\t\t\t\t\t\t\t\t\t\tAfiliated:  {$row['Afiliated']}<br><br>";
    
    echo "\t\t{$row['Approved_by']}"; echo "\t\t\t\t\t\t\t\t\t\t{$row['Campus']}<br>";
   
    echo "<br><br>\t\t<a href=#> www.itmbusinessschool.com</a>";
    
}
}
        
?> </div>

                        
                        </pre>
            </div>
    
    </td>
    </tr>
            </table></center>
        </div>
        
        
         <?php
//////////////////////////////////////////////////////////////////////////////
        
         if(isset($_REQUEST['M015']))
        {
$ret = mysqli_query($conn,"SELECT * FROM college_details where Clg_Id='M015'");
?>
    
        <div id="main"><center>
<table width="80%">
    <tr>
            <td width="20%" >
            <div id="divl">

               <img src ="images/thumb4.PNG" height="230" width="340">
                </div>
    
    </td>
    <td width="60%" id="td2">
                <div id="divr">
                   <pre> 
                 <?php while($row = mysqli_fetch_array($ret,MYSQLI_ASSOC))
{
    
    ?>
    <div id="div1">
<?php    
    echo " <b><u>{$row['Name']}</u></b><br><br><br>";
   
 
    echo "\t\t{$row['Trust']}";echo "\t\t\t\t\t{$row['Establishment']}<br><br>";
    
    
    echo "\t\t{$row['Private/Govt']}";echo "\t\t\t\t\t\t\t\t\t\tAfiliated:  {$row['Afiliated']}<br><br>";
    
    echo "\t\t{$row['Approved_by']}"; echo "\t\t\t\t\t\t\t\t\t\t{$row['Campus']}<br>";
   
    echo "<br><br>\t\t<a href=#> www.itmbusinessschool.com</a>";
    
}
}
        
?> </div>

                        
                        </pre>
            </div>
    
    </td>
    </tr>
            </table></center>
        </div>
        
        
         <?php
//////////////////////////////////////////////////////////////////////////////
        
         if(isset($_REQUEST['M016']))
        {
$ret = mysqli_query($conn,"SELECT * FROM college_details where Clg_Id='M016'");
?>
    
        <div id="main"><center>
<table width="80%">
    <tr>
            <td width="20%" >
            <div id="divl">

               <img src ="images/thumb4.PNG" height="230" width="340">
                </div>
    
    </td>
    <td width="60%" id="td2">
                <div id="divr">
                   <pre> 
                 <?php while($row = mysqli_fetch_array($ret,MYSQLI_ASSOC))
{
    
    ?>
    <div id="div1">
<?php    
    echo " <b><u>{$row['Name']}</u></b><br><br><br>";
   
 
    echo "\t\t{$row['Trust']}";echo "\t\t\t\t\t{$row['Establishment']}<br><br>";
    
    
    echo "\t\t{$row['Private/Govt']}";echo "\t\t\t\t\t\t\t\t\t\tAfiliated:  {$row['Afiliated']}<br><br>";
    
    echo "\t\t{$row['Approved_by']}"; echo "\t\t\t\t\t\t\t\t\t\t{$row['Campus']}<br>";
   
    echo "<br><br>\t\t<a href=#> www.itmbusinessschool.com</a>";
    
}
}
        
?> </div>

                        
                        </pre>
            </div>
    
    </td>
    </tr>
            </table></center>
        </div>
        
        
         <?php
//////////////////////////////////////////////////////////////////////////////
        
         if(isset($_REQUEST['M017']))
        {
$ret = mysqli_query($conn,"SELECT * FROM college_details where Clg_Id='M017'");
?>
    
        <div id="main"><center>
<table width="80%">
    <tr>
            <td width="20%" >
            <div id="divl">

               <img src ="images/thumb4.PNG" height="230" width="340">
                </div>
    
    </td>
    <td width="60%" id="td2">
                <div id="divr">
                   <pre> 
                 <?php while($row = mysqli_fetch_array($ret,MYSQLI_ASSOC))
{
    
    ?>
    <div id="div1">
<?php    
    echo " <b><u>{$row['Name']}</u></b><br><br><br>";
   
 
    echo "\t\t{$row['Trust']}";echo "\t\t\t\t\t{$row['Establishment']}<br><br>";
    
    
    echo "\t\t{$row['Private/Govt']}";echo "\t\t\t\t\t\t\t\t\t\tAfiliated:  {$row['Afiliated']}<br><br>";
    
    echo "\t\t{$row['Approved_by']}"; echo "\t\t\t\t\t\t\t\t\t\t{$row['Campus']}<br>";
   
    echo "<br><br>\t\t<a href=#> www.itmbusinessschool.com</a>";
    
}
}
        
?> </div>

                        
                        </pre>
            </div>
    
    </td>
    </tr>
            </table></center>
        </div>
        
        
         <?php
//////////////////////////////////////////////////////////////////////////////
        
         if(isset($_REQUEST['M018']))
        {
$ret = mysqli_query($conn,"SELECT * FROM college_details where Clg_Id='M018'");
?>
    
        <div id="main"><center>
<table width="80%">
    <tr>
            <td width="20%" >
            <div id="divl">

               <img src ="images/thumb4.PNG" height="230" width="340">
                </div>
    
    </td>
    <td width="60%" id="td2">
                <div id="divr">
                   <pre> 
                 <?php while($row = mysqli_fetch_array($ret,MYSQLI_ASSOC))
{
    
    ?>
    <div id="div1">
<?php    
    echo " <b><u>{$row['Name']}</u></b><br><br><br>";
   
 
    echo "\t\t{$row['Trust']}";echo "\t\t\t\t\t{$row['Establishment']}<br><br>";
    
    
    echo "\t\t{$row['Private/Govt']}";echo "\t\t\t\t\t\t\t\t\t\tAfiliated:  {$row['Afiliated']}<br><br>";
    
    echo "\t\t{$row['Approved_by']}"; echo "\t\t\t\t\t\t\t\t\t\t{$row['Campus']}<br>";
   
    echo "<br><br>\t\t<a href=#> www.itmbusinessschool.com</a>";
    
}
}
        
?> </div>

                        
                        </pre>
            </div>
    
    </td>
    </tr>
            </table></center>
        </div>
        
        
         <?php
//////////////////////////////////////////////////////////////////////////////
        
         if(isset($_REQUEST['M019']))
        {
$ret = mysqli_query($conn,"SELECT * FROM college_details where Clg_Id='M019'");
?>
    
        <div id="main"><center>
<table width="80%">
    <tr>
            <td width="20%" >
            <div id="divl">

               <img src ="images/thumb4.PNG" height="230" width="340">
                </div>
    
    </td>
    <td width="60%" id="td2">
                <div id="divr">
                   <pre> 
                 <?php while($row = mysqli_fetch_array($ret,MYSQLI_ASSOC))
{
    
    ?>
    <div id="div1">
<?php    
    echo " <b><u>{$row['Name']}</u></b><br><br><br>";
   
 
    echo "\t\t{$row['Trust']}";echo "\t\t\t\t\t{$row['Establishment']}<br><br>";
    
    
    echo "\t\t{$row['Private/Govt']}";echo "\t\t\t\t\t\t\t\t\t\tAfiliated:  {$row['Afiliated']}<br><br>";
    
    echo "\t\t{$row['Approved_by']}"; echo "\t\t\t\t\t\t\t\t\t\t{$row['Campus']}<br>";
   
    echo "<br><br>\t\t<a href=#> www.itmbusinessschool.com</a>";
    
}
}
        
?> </div>

                        
                        </pre>
            </div>
    
    </td>
    </tr>
            </table></center>
        </div>
        
        
         <?php
//////////////////////////////////////////////////////////////////////////////
        
         if(isset($_REQUEST['M020']))
        {
$ret = mysqli_query($conn,"SELECT * FROM college_details where Clg_Id='M020'");
?>
    
        <div id="main"><center>
<table width="80%">
    <tr>
            <td width="20%" >
            <div id="divl">

               <img src ="images/thumb4.PNG" height="230" width="340">
                </div>
    
    </td>
    <td width="60%" id="td2">
                <div id="divr">
                   <pre> 
                 <?php while($row = mysqli_fetch_array($ret,MYSQLI_ASSOC))
{
    
    ?>
    <div id="div1">
<?php    
    echo " <b><u>{$row['Name']}</u></b><br><br><br>";
   
 
    echo "\t\t{$row['Trust']}";echo "\t\t\t\t\t{$row['Establishment']}<br><br>";
    
    
    echo "\t\t{$row['Private/Govt']}";echo "\t\t\t\t\t\t\t\t\t\tAfiliated:  {$row['Afiliated']}<br><br>";
    
    echo "\t\t{$row['Approved_by']}"; echo "\t\t\t\t\t\t\t\t\t\t{$row['Campus']}<br>";
   
    echo "<br><br>\t\t<a href=#> www.itmbusinessschool.com</a>";
    
}
}
        
?> </div>

                        
                        </pre>
            </div>
    
    </td>
    </tr>
            </table></center>
        </div>
        
        
         <?php
//////////////////////////////////////////////////////////////////////////////
        
         if(isset($_REQUEST['M021']))
        {
$ret = mysqli_query($conn,"SELECT * FROM college_details where Clg_Id='M021'");
?>
    
        <div id="main"><center>
<table width="80%">
    <tr>
            <td width="20%" >
            <div id="divl">

               <img src ="images/thumb4.PNG" height="230" width="340">
                </div>
    
    </td>
    <td width="60%" id="td2">
                <div id="divr">
                   <pre> 
                 <?php while($row = mysqli_fetch_array($ret,MYSQLI_ASSOC))
{
    
    ?>
    <div id="div1">
<?php    
    echo " <b><u>{$row['Name']}</u></b><br><br><br>";
   
 
    echo "\t\t{$row['Trust']}";echo "\t\t\t\t\t{$row['Establishment']}<br><br>";
    
    
    echo "\t\t{$row['Private/Govt']}";echo "\t\t\t\t\t\t\t\t\t\tAfiliated:  {$row['Afiliated']}<br><br>";
    
    echo "\t\t{$row['Approved_by']}"; echo "\t\t\t\t\t\t\t\t\t\t{$row['Campus']}<br>";
   
    echo "<br><br>\t\t<a href=#> www.itmbusinessschool.com</a>";
    
}
}
        
?> </div>

                        
                        </pre>
            </div>
    
    </td>
    </tr>
            </table></center>
        </div>
        
        
        
         <?php
//////////////////////////////////////////////////////////////////////////////
        
         if(isset($_REQUEST['M022']))
        {
$ret = mysqli_query($conn,"SELECT * FROM college_details where Clg_Id='M022'");
?>
    
        <div id="main"><center>
<table width="80%">
    <tr>
            <td width="20%" >
            <div id="divl">

               <img src ="images/thumb4.PNG" height="230" width="340">
                </div>
    
    </td>
    <td width="60%" id="td2">
                <div id="divr">
                   <pre> 
                 <?php while($row = mysqli_fetch_array($ret,MYSQLI_ASSOC))
{
    
    ?>
    <div id="div1">
<?php    
    echo " <b><u>{$row['Name']}</u></b><br><br><br>";
   
 
    echo "\t\t{$row['Trust']}";echo "\t\t\t\t\t{$row['Establishment']}<br><br>";
    
    
    echo "\t\t{$row['Private/Govt']}";echo "\t\t\t\t\t\t\t\t\t\tAfiliated:  {$row['Afiliated']}<br><br>";
    
    echo "\t\t{$row['Approved_by']}"; echo "\t\t\t\t\t\t\t\t\t\t{$row['Campus']}<br>";
   
    echo "<br><br>\t\t<a href=#> www.itmbusinessschool.com</a>";
    
}
}
        
?> </div>

                        
                        </pre>
            </div>
    
    </td>
    </tr>
            </table></center>
        </div>
        
        
         <?php
//////////////////////////////////////////////////////////////////////////////
        
         if(isset($_REQUEST['M023']))
        {
$ret = mysqli_query($conn,"SELECT * FROM college_details where Clg_Id='M023'");
?>
    
        <div id="main"><center>
<table width="80%">
    <tr>
            <td width="20%" >
            <div id="divl">

               <img src ="images/thumb4.PNG" height="230" width="340">
                </div>
    
    </td>
    <td width="60%" id="td2">
                <div id="divr">
                   <pre> 
                 <?php while($row = mysqli_fetch_array($ret,MYSQLI_ASSOC))
{
    
    ?>
    <div id="div1">
<?php    
    echo " <b><u>{$row['Name']}</u></b><br><br><br>";
   
 
    echo "\t\t{$row['Trust']}";echo "\t\t\t\t\t{$row['Establishment']}<br><br>";
    
    
    echo "\t\t{$row['Private/Govt']}";echo "\t\t\t\t\t\t\t\t\t\tAfiliated:  {$row['Afiliated']}<br><br>";
    
    echo "\t\t{$row['Approved_by']}"; echo "\t\t\t\t\t\t\t\t\t\t{$row['Campus']}<br>";
   
    echo "<br><br>\t\t<a href=#> www.itmbusinessschool.com</a>";
    
}
}
        
?> </div>

                        
                        </pre>
            </div>
    
    </td>
    </tr>
            </table></center>
        </div>
        
        
        
         <?php
//////////////////////////////////////////////////////////////////////////////
        
         if(isset($_REQUEST['M024']))
        {
$ret = mysqli_query($conn,"SELECT * FROM college_details where Clg_Id='M024'");
?>
    
        <div id="main"><center>
<table width="80%">
    <tr>
            <td width="20%" >
            <div id="divl">

               <img src ="images/thumb4.PNG" height="230" width="340">
                </div>
    
    </td>
    <td width="60%" id="td2">
                <div id="divr">
                   <pre> 
                 <?php while($row = mysqli_fetch_array($ret,MYSQLI_ASSOC))
{
    
    ?>
    <div id="div1">
<?php    
    echo " <b><u>{$row['Name']}</u></b><br><br><br>";
   
 
    echo "\t\t{$row['Trust']}";echo "\t\t\t\t\t{$row['Establishment']}<br><br>";
    
    
    echo "\t\t{$row['Private/Govt']}";echo "\t\t\t\t\t\t\t\t\t\tAfiliated:  {$row['Afiliated']}<br><br>";
    
    echo "\t\t{$row['Approved_by']}"; echo "\t\t\t\t\t\t\t\t\t\t{$row['Campus']}<br>";
   
    echo "<br><br>\t\t<a href=#> www.itmbusinessschool.com</a>";
    
}
}
        
?> </div>

                        
                        </pre>
            </div>
    
    </td>
    </tr>
            </table></center>
        </div>
        
        
         <?php
//////////////////////////////////////////////////////////////////////////////
        
         if(isset($_REQUEST['M025']))
        {
$ret = mysqli_query($conn,"SELECT * FROM college_details where Clg_Id='M025'");
?>
    
        <div id="main"><center>
<table width="80%">
    <tr>
            <td width="20%" >
            <div id="divl">

               <img src ="images/thumb4.PNG" height="230" width="340">
                </div>
    
    </td>
    <td width="60%" id="td2">
                <div id="divr">
                   <pre> 
                 <?php while($row = mysqli_fetch_array($ret,MYSQLI_ASSOC))
{
    
    ?>
    <div id="div1">
<?php    
    echo " <b><u>{$row['Name']}</u></b><br><br><br>";
   
 
    echo "\t\t{$row['Trust']}";echo "\t\t\t\t\t{$row['Establishment']}<br><br>";
    
    
    echo "\t\t{$row['Private/Govt']}";echo "\t\t\t\t\t\t\t\t\t\tAfiliated:  {$row['Afiliated']}<br><br>";
    
    echo "\t\t{$row['Approved_by']}"; echo "\t\t\t\t\t\t\t\t\t\t{$row['Campus']}<br>";
   
    echo "<br><br>\t\t<a href=#> www.itmbusinessschool.com</a>";
    
}
}
        
?> </div>

                        
                        </pre>
            </div>
    
    </td>
    </tr>
            </table></center>
        </div>
        
        
         <?php
//////////////////////////////////////////////////////////////////////////////
        
         if(isset($_REQUEST['M026']))
        {
$ret = mysqli_query($conn,"SELECT * FROM college_details where Clg_Id='M026'");
?>
    
        <div id="main"><center>
<table width="80%">
    <tr>
            <td width="20%" >
            <div id="divl">

               <img src ="images/thumb4.PNG" height="230" width="340">
                </div>
    
    </td>
    <td width="60%" id="td2">
                <div id="divr">
                   <pre> 
                 <?php while($row = mysqli_fetch_array($ret,MYSQLI_ASSOC))
{
    
    ?>
    <div id="div1">
<?php    
    echo " <b><u>{$row['Name']}</u></b><br><br><br>";
   
 
    echo "\t\t{$row['Trust']}";echo "\t\t\t\t\t{$row['Establishment']}<br><br>";
    
    
    echo "\t\t{$row['Private/Govt']}";echo "\t\t\t\t\t\t\t\t\t\tAfiliated:  {$row['Afiliated']}<br><br>";
    
    echo "\t\t{$row['Approved_by']}"; echo "\t\t\t\t\t\t\t\t\t\t{$row['Campus']}<br>";
   
    echo "<br><br>\t\t<a href=#> www.itmbusinessschool.com</a>";
    
}
}
        
?> </div>

                        
                        </pre>
            </div>
    
    </td>
    </tr>
            </table></center>
        </div>
        
         <?php
//////////////////////////////////////////////////////////////////////////////
        
         if(isset($_REQUEST['M027']))
        {
$ret = mysqli_query($conn,"SELECT * FROM college_details where Clg_Id='M027'");
?>
    
        <div id="main"><center>
<table width="80%">
    <tr>
            <td width="20%" >
            <div id="divl">

               <img src ="images/thumb4.PNG" height="230" width="340">
                </div>
    
    </td>
    <td width="60%" id="td2">
                <div id="divr">
                   <pre> 
                 <?php while($row = mysqli_fetch_array($ret,MYSQLI_ASSOC))
{
    
    ?>
    <div id="div1">
<?php    
    echo " <b><u>{$row['Name']}</u></b><br><br><br>";
   
 
    echo "\t\t{$row['Trust']}";echo "\t\t\t\t\t{$row['Establishment']}<br><br>";
    
    
    echo "\t\t{$row['Private/Govt']}";echo "\t\t\t\t\t\t\t\t\t\tAfiliated:  {$row['Afiliated']}<br><br>";
    
    echo "\t\t{$row['Approved_by']}"; echo "\t\t\t\t\t\t\t\t\t\t{$row['Campus']}<br>";
   
    echo "<br><br>\t\t<a href=#> www.itmbusinessschool.com</a>";
    
}
}
        
?> </div>

                        
                        </pre>
            </div>
    
    </td>
    </tr>
            </table></center>
        </div>
        
        
        
        
                </body>

</html>
