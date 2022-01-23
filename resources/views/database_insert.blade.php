<form method="post" action="{{ url('database-insert') }}">
    @csrf
    <table>
        <tr>
            <td><input type="text" name="DatabaseUsername" placeholder="Enter UserName"></td>
        </tr>
        <tr>
            <td><input type="text" name="DatabasePassword" placeholder="Enter Password"></td>
        </tr>
        <tr>
            <td><input type="text" name="DatabaseRetypePassword" placeholder="Re-enter password"></td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Click Here">
            </td>
        </tr>
    </table>
</form>
<?php 
//  Git Test
?>
