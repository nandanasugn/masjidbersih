<?php
    $this->load->view('menu');
?>
<form method="post" action="<?php echo base_url();?>CPlace/getListNearPlaceWithRadius">
    <table class="table table-bordered">
        <tr>
            <td>Enter radius:</td>
            <td><input type="number" step="any" name="radius" /></td>
        </tr>
        <tr>
            <td>Enter Latitude:</td>
            <td><input type="number" step="any" name="lat" /></td>
        </tr>
        <tr>
            <td>Enter Longitude:</td>
            <td><input type="number" step="any" name="lon" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Submit" /></td>
        </tr>
    </table>
</form>