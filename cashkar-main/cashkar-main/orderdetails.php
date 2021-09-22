<!-- Header start -->
<?php include "./partials/header.php" ?>
<!-- Header end -->

<!-- =========== Main Content =========== -->
<section class="order-details">
    <div class="container">
        <h1>Your Order Details</h1>
        
        <table class="table table-hover table-responsive-md">
            <thead class="thead">
                <tr>
                    <th>S.No</th>
                    <th>Brand Name</th>
                    <th>Model</th>
                    <th>Selling Price</th>
                    <th>Picked Up By</th>
                    <th>Status</th>
                    <th>View</th>
                    <th>Re-schedule</th>
                    <th>Cancel</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Apple</td>
                    <td>iPhone X MAX</td>
                    <td>98000</td>
                    <td>Ibrahim Surya</td>
                    <td>
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td>
                        <a href="#" class="text-dark">
                            <i class="fas fa-eye"></i>
                        </a>
                    </td>
                    <td>
                        <input type="date" class="form-control">
                    </td>
                    <td>
                        <a href="#" class="text-danger">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Samsung</td>
                    <td>M32</td>
                    <td>38000</td>
                    <td>Not picked up</td>
                    <td>
                        <span class="badge badge-warning">Pending</span>
                    </td>
                    <td>
                        <a href="#" class="text-dark">
                            <i class="fas fa-eye"></i>
                        </a>
                    </td>
                    <td>
                        <input type="date" class="form-control">
                    </td>
                    <td>
                        <a href="#" class="text-danger">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>One Plus</td>
                    <td>Nord</td>
                    <td>92000</td>
                    <td>Ibrahim Surya</td>
                    <td>
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td>
                        <a href="#" class="text-dark">
                            <i class="fas fa-eye"></i>
                        </a>
                    </td>
                    <td>
                        <input type="date" class="form-control">
                    </td>
                    <td>
                        <a href="#" class="text-danger">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Samsung</td>
                    <td>M32</td>
                    <td>38000</td>
                    <td>Not picked up</td>
                    <td>
                        <span class="badge badge-danger">Cancelled</span>
                    </td>
                    <td>
                        <a href="#" class="text-dark">
                            <i class="fas fa-eye"></i>
                        </a>
                    </td>
                    <td>
                        <input type="date" class="form-control">
                    </td>
                    <td>
                        <a href="#" class="text-danger">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
<!-- =========== End of Main Content =========== -->

<!-- Footer start -->
<?php include "./partials/footer.php" ?>
<!-- Footer end -->