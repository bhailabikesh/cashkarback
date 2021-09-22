<?php 
$city = $_GET['city'];
if($city != 'Mumbai'){
    echo '<div class="row">
                        <div class="col-lg-6 col-sm-6 col-12 m-auto">
                            <img src="https://cashkar.in/images/cityNotAva.svg" alt="not avaible"/>
                            <h3 class="font-work-sans text-center">Sorry! We are only provide sevice in Mumbai</h3>
                        </div>
            
                    </div>';
}
?>