<?php
include('../partisals/menu.php')

?>
<!-- main content  -->
<div class="main-content felx">
    <div class="wraper">
        <h1>Manage Admins</h1>
        <br>
        <input type="button" class="btn primery" value="Add Admin" name="add-admin">

        <table class="admin-tbl">
            <tr>
                <th>Serial Number</th>
                <th>Full Name</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Actions</th>
            </tr>
            <tr>
                <td>1</td>
                <td>MOHMED OUKHLIDJA</td>
                <td>PECASSO</td>
                <td> MOHAMAD@GMAIL;COM</td>
                <td>123</td>
                <td>
                    <input type="button" class="btn secondary" value="Update Admin" name="update-admin">
                    <input type="button" class="btn danger" value="Delete Admin" name="delete-admin">

                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>MOHMED OUKHLIDJA</td>
                <td>PECASSO</td>
                <td> MOHAMAD@GMAIL;COM</td>
                <td>123</td>
                <td>
                    <input type="button" class="btn secondary" value="Update Admin" name="update-admin">
                    <input type="button" class="btn danger" value="Delete Admin" name="delete-admin">

                </td>
            </tr>   
            <tr>
                <td>3</td>
                <td>MOHMED OUKHLIDJA</td>
                <td>PECASSO</td>
                <td> MOHAMAD@GMAIL;COM</td>
                <td>123</td>
                <td>
                    <input type="button" class="btn secondary" value="Update Admin" name="update-admin">
                    <input type="button" class="btn danger" value="Delete Admin" name="delete-admin">

                </td>
            </tr>
            


        </table>



    </div>
</div>
<?php
include('../partisals/footer.php')

?>