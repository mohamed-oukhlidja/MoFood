<?php
include('../partisals/menu.php')

?>
<!-- main content  -->
<div class="main-content felx">
    <div class="wraper ">
        <h1>Add Admin</h1>
        <br>
        <form action="" method="POST" >
            <table class="addadmin-tbl">
                <tr>
                    <td>Full Name : </td>
                    <td><input type="text" name="FullNmae" id="FullName" placeholder="Enter your Full Name"> </td>
                </tr>
                <tr>
                    <td>User Name : </td>
                    <td><input type="text" name="UserName" id="UserName" placeholder="Enter you Usre Name"> </td>
                </tr>
                <tr>
                    <td>Email : </td>
                    <td><input type="Email" name="UserEmail" id="UserEmail" placeholder="Enter your Email"> </td>
                </tr>
                <tr>
                    <td>Password : </td>
                    <td><input type="password" name="UserPassword" id="UserPassword" placeholder="Enter your Password"> </td>
                </tr>
            </table>
            <br>
            <div class="submitDiv">
            <input type="submit" value="submit" class="btn secondary">
            <input type="button" value="Rest" class="btn danger">

            </div>
            

            
      
        </form>
             
       



    </div>
</div>

<?php
include('../partisals/footer.php');
if(isset ($_POST['submit']))
{
    //button clicked 
    echo'button clicked';
    //get the data from the form 
    echo $FullNmae = $_POST ['FullNmae'];
    

     
}
