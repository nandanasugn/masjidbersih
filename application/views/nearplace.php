<?php
    $this->load->view('menu');
?>
<table style="width: 800px;" align="center" class="table table-bordered">
    <thread>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Latitude</th>
            <th scope="col">Longitude</th>
            <th scope="col">Distance</th>
        </tr>
    </thread>
    <tbody>
    <?php
        foreach($allplace as $data){
            echo "<tr>";
            echo "<td>".$data['id']."</td>";
            echo "<td>".$data['name']."</td>";
            echo "<td>".$data['address']."</td>";
            echo "<td>".$data['lat']."</td>";
            echo "<td>".$data['lon']."</td>";
            echo "<td>".$data['Distance']."</td>";
            echo "</tr>";
        }
    ?>
    </tbody>