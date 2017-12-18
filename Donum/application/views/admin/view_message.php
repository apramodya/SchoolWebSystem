<div class="container">

    <center>
        <div class="table-responsive">
            <table class="table" table-striped table-dark"">
            <thead>
            <tr>

                <th scope="col"><b>ID</b></th>
                <th scope="col"><b>name</b></th>
                <th scope="col"><b>email</b></th>
                <th scope="col"><b>subject</b></th>
                <th scope="col"><b>message</b> </th>

            </tr>
            </thead>
            <tbody>
            <?php
            if($fetch_data->num_rows()>0)
            {
                foreach ($fetch_data->result() as $row)
                {
                    ?>
                    <tr>
                        <td scope="col"><?php echo $row->id; ?> </td>
                        <td><?php echo $row->name;?></td>
                        <td><?php echo $row->email;?></td>
                        <td><?php echo $row->subject;?></td>
                        <td><?php echo $row->message;?></td>
                    </tr>
                    <?php
                }

            }
            else
            {
                ?>
                <tr>
                    <td colspan="4">No data found</td>

                </tr>
                <?php
            }

            ?>
            </tbody>

            </table>



        </div>
    </center>



</div>