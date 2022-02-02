<div class="video-player">
    <div class="video-frame">
        <!-- control vidoe is disable for view only-->
        <video id="myVideo" class="play-multimedia" autoplay></video>
    </div>
</div>
<?php
    $i = 0;
    if(!empty( $data[1] )):
        foreach( $data[1] as $nameVideo ):
?>
<?php $i = $i + 1; ?>
<input type="hidden" id="hiddenVideo<?php echo $i;?>" value="<?php echo $nameVideo->file_video;?>">
    <?php endforeach; ?>
<?php endif;?>

<input type="hidden" id="hiddenContent" value="<?php echo $i;?>">

