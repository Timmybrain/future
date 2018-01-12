<?php
$displayable = !empty($_GET['show']) ? $_GET['show'] : "home";
$uri = $_SERVER['SCRIPT_NAME'] . "?show=$displayable";
if ($displayable != "home") {
?>
    <ul class="collection">
    <?php
    $media_folder = glob("../media/$displayable/*");

    foreach ($media_folder as $file_in_folder) {
        ?>
        <li class="collection-item">
            <?php

            //the dealing with image..
            if($displayable == "images") {
                ?>
        <img src="<?= $file_in_folder ?>" alt="image" height="40px" width="30px" class="responsive-img">
        <div class="secondary-content">
            <i class="fa fa-edit blue-text"></i> <a href="?show=<?=$displayable?>&amp;del=<?=$file_in_folder?>"><i class="fa fa-remove red-text"></i></a>
        </div>
        <?php
        }

        //now the audios
        elseif ($displayable == "audios") {
            ?>
            <div class="row">
                <span class="col s4 m4 l4"><?=str_replace("../media/audios/", "", $file_in_folder)?></span>
                <span class="col s8 m8 l8">
                    <audio controls>
                        <source src="<?=$file_in_folder?>" type="audio/mp3">
                    </audio>
                    <div class="secondary-content">
                        <a href="?show=<?=$displayable?>&amp;del=<?=$file_in_folder?>"><i class="fa fa-remove red-text"></i></a>
                    </div>
                </span>
            </div>
            <?php
        }
        ?>

        </li>
    <?php
     }
    ?>
    </ul>
    <?php
}
elseif ($displayable == "home") {
?>
<ul class="collection">
                <?php
                    $media_folder = glob("../media/*");

                    foreach ($media_folder as $folder) {
                        $fold = str_replace("../media/", "", $folder);
                        ?>
                        <a class="collection-item" href="?show=<?=$fold?>">
                           <i class="fa fa-folder"></i> <?= strtoupper($fold) ?>
                        </a>
                <?php

                    }
                ?>
                </ul>
    <?php
}

if(!empty($_GET['del'])) {
    $deletable = $_GET['del'];
    if(file_exists($deletable)) {
        $actionable = unlink( $deletable );
    }
    else {
        $actionable = false;
    }
    unset($deletable);

    if($actionable) {
        $alert = "File succesfully deleted!";
    }
    else {
        $alert = "Unsuccessful: Error deleting file.";
    }
    ?>
    <script>
        alert("<?= $alert ?>");
        window.location.href = "<?=$uri?>";
    </script>
    
    <?php
}
?>
