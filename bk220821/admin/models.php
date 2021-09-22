<?php include "top.inc.php"; ?>
<div class="col-lg-12">
    <div>
        
        <h2>Model List</h2>
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <a href="edit-mbl.php?action=add" class="btn btn-outline-secondary">Add New</a>
                <form class="form-inline mt-2" method="POST" autocomplete="off">
                  <div class="form-group mx-sm-3 mb-2">
                    <label for="addVariant" class="sr-only">Enter Model code to make its Variant</label>
                    <input type="text" name="modelCode" class="form-control" id="addVariant" placeholder="Variant of :">
                  </div>
                  <button type="submit" class="btn btn-primary mb-2" name="addVariant">Add Variant</button>
               </form>
            </div>
            <div class="col-lg-6 col-sm-12">
                <h4>Search</h4>
                    <small>Tips:<br>
                    1. Type Brand: brand name to search with brand <br>
                    2. Type Code: model code to search with model code of device<br>
                    3. Type Model: model name to search with model name of device
                    </small>
                <form class="form-inline" method="POST" autocomplete="off">
                    
                  <div class="form-group mx-sm-3 mb-2">
                    <label for="addVariant" class="sr-only">Enter Model code to make its Variant</label>
                    <input type="text" name="searchQuery" class="form-control" id="search" placeholder="search with: search string">
                  </div>
                  <button type="submit" class="btn btn-success mb-2" name="searchBtn">Search</button>
               </form>
            </div>
        </div>
        
       <?php 
       if(isset($_POST['addVariant'])){
           $modelCode = $_POST['modelCode'];
           header("location:add-variation.php?mcode=$modelCode");
       }
       ?>
    </div><br>
    <div class="card">
        <div class="card-header">
            <?php 
            if(isset($_GET['action']) and isset($_GET['success'])){
                if($_GET['action'] == 'delete'){
                    if($_GET['success'] == 'true'){
                        echo "
                        <div class='alert alert-success p-3'>
                        Data Delete Success.
                        </div>
                        ";
                    }else{
                    echo "
                        <div class='alert alert-danger p-3'>
                        Unable to delete data. Maybe Data does not exist.
                        </div>
                        ";
                    }
                }else {
                    if($_GET['success'] == 'true'){
                        echo "
                        <div class='alert alert-success p-3'>
                        Data Updated successfully.
                        </div>
                        ";
                    }else{
                    echo "
                        <div class='alert alert-danger p-3'>
                        Unable to update data. Internal Problem.
                        </div>
                        ";
                    }
                }
            }
            ?>
            <strong class="card-title">List of all models</strong>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Model Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Storage</th>
                        <th scope="col">Model Code</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    //doing search to the model
                    if(isset($_POST['searchBtn'])){
                        $string = $_POST['searchQuery'];
                        $string = explode(":",$string);
                        // print_r($string);
                        $searchString = trim($string[1]);
                        if($string[0] == 'Brand'){
                            $searchInto = "brand";
                        }else if($string[0] == 'Code'){
                            $searchInto = "modelCode";
                        }else if($string[0] == 'Model'){
                             $searchInto = "model_name";
                        }else{
                            echo "<div class='alert alert-warning p-2'>
                            Please use search operator to search
                            </div>
                            ";
                        }
                        
                        $searchQuery = "SELECT * FROM model where $searchInto LIKE '%$searchString%'";
                        $querySearch = mysqli_query($connect,$searchQuery);
                        if(mysqli_num_rows($querySearch) == 0){
                            echo "<div class='alert alert-warning p-2'>
                            No Model found for ".$searchString."
                            </div>
                            ";
                        }else{
                            $a = 0;
                        while($resultBox = mysqli_fetch_array($querySearch)){
                            $a++;
                            $modelId = $resultBox['id'];
                            $brand = $resultBox['brand'];
                            $modelName = $resultBox['model_name'];
                            $price = $resultBox['price'];
                            $storage = $resultBox['storage'];
                            $modelCode = $resultBox['modelCode'];
                        ?>
                    <tr>
                        <th scope="row"><?php echo $a; ?></th>
                        <td><?php echo $brand; ?></td>
                        <td><?php echo $modelName; ?></td>
                        <td><?php echo $price; ?></td>
                        <td><?php echo $storage.'GB'; ?></td>
                        <td><?php echo $modelCode; ?></td>
                        <td>
                            <a href="edit-mbl.php?mid=<?php echo $modelId;?>&action=edit">Edit</a> /
                            <a href="del-mbl.php?mid=<?php echo $modelId;?>&action=delete">Delete</a>
                            
                        </td>
                    </tr>
                    <?php
                    }
                        }
                        //ends search section
                    }else{
                        
                    $sqlModel = "SELECT * FROM model ORDER BY `id`DESC";
                    $queryModel = mysqli_query($connect,$sqlModel);
                    $getRows = mysqli_num_rows($queryModel);
                    // echo $getRows;
                    if ($getRows > 0) {
                        $a = 0;
                        while($resultBox = mysqli_fetch_array($queryModel)){
                            $a++;
                            $modelId = $resultBox['id'];
                            $brand = $resultBox['brand'];
                            $modelName = $resultBox['model_name'];
                            $price = $resultBox['price'];
                            $storage = $resultBox['storage'];
                            $modelCode = $resultBox['modelCode'];
                        ?>
                    <tr>
                        <th scope="row"><?php echo $a; ?></th>
                        <td><?php echo $brand; ?></td>
                        <td><?php echo $modelName; ?></td>
                        <td><?php echo $price; ?></td>
                        <td><?php echo $storage.'GB'; ?></td>
                        <td><?php echo $modelCode; ?></td>
                        <td>
                            <a href="edit-mbl.php?mid=<?php echo $modelId;?>&action=edit">Edit</a> /
                            <a href="del-mbl.php?mid=<?php echo $modelId;?>&action=delete">Delete</a>
                            
                        </td>
                    </tr>
                    <?php
                    }
                }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php include "buttom.inc.php"; ?>