<div class="news_run">
    <marquee direction="left" scrollamount="5" onmouseover="this.stop();" onmouseout="this.start();">
        <ul class="ticker-left">
            <li>
                <?php
                    if(!empty( $data[0] )):
                        foreach( $data[0] as $hotnews ):
                ?>
                <span>
                    <?php echo $hotnews->data_hotnews; ?>
                </span>
                <?php endforeach; ?>
                <?php endif;?>
            </li>
        </ul>
    </marquee>
</div>