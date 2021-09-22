<?php include "top.inc.php"; ?>
<h2 class="m-3">Change Deduction rate </h2>
<div class="col-lg-6">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Repair Table</strong>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Condition</th>
                        <th scope="col">Rate</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $getData = "SELECT * FROM `deductionrate`";
                    $queryData = mysqli_query($connect, $getData);
                    $a = 0;
                    while ($resultData = mysqli_fetch_array($queryData)) {
                        $a++;
                        $case = $resultData['cases'];
                        $rate = $resultData['percentages'];
                        if ($case == 13 or $case == 14 or $case == 15) {
                            $rate = 'RS ' . $resultData['percentages'];
                        } else {
                            $rate = $rate . '%';
                        }
                        $description = $resultData['details'];

                    ?>
                        <tr>
                            <th scope="row"><?php echo $a; ?></th>
                            <td><?php echo $description; ?></td>
                            <td><?php echo $rate; ?></td>
                            <td><a href="edit-rate.php?id=<?php echo $case; ?>">Edit</a></td>
                        </tr><?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php include "buttom.inc.php"; ?>