<?php

    require('../inc/db_config.php');
    require('../inc/essentials.php');
    adminLogin();

    if(isset($_POST['add_image']))
{
    $img_r = uploadImage($_FILES['picture'], CAROUSEL_FOLDER);

    if($img_r == 'inv_image'){
        echo $img_r;
    }
    else if($img_r == 'inv_size'){
        echo $img_r;
    }
    else if($img_r == 'upd_failed'){
        echo $img_r;
    }
    else{
        $query = "INSERT INTO carousel (image) VALUES (?)";
        $values = [$img_r];
        $result = insert($query, $values, 's');

        echo $result; // should return 1 on success
    }
}

    if(isset($_POST['get_carousel']))
{
    $result = selectAll('carousel');

    while($row = mysqli_fetch_assoc($result))
    {
        $path = CAROUSEL_IMAGE_PATH;

        echo <<<data
        <div class="col-md-2 mb-3">
            <div class="card bg-dark text-white">
                <img src="$path$row[image]" class="card-img">
                <div class="card-img-overlay text-end">
                    <button type="button" onclick="rem_image($row[sr_no])" class="btn btn-danger btn-sm shadow-none">
                        <i class="bi bi-trash3"></i> Delete
                    </button>
                </div>
            </div>
        </div>
        data;
    }
}

    if(isset($_POST['rem_image']))
{
    $frm_data = filteration($_POST);
    $values = [$frm_data['rem_image']];

    $pre_q = "SELECT * FROM carousel WHERE sr_no=?";
    $res = select($pre_q, $values, 'i');
    $img = mysqli_fetch_assoc($res);

    if(deleteImage($img['image'], CAROUSEL_FOLDER)){
        $q = "DELETE FROM carousel WHERE sr_no=?";
        $result = delete($q, $values, 'i');
        echo $result;
    }
    else{
        echo 0;
    }
}
    
?>