<!-- Splide -->
<div class="splide-container-poster">
    <div class="splide-wrapper">
        <div id="card-slider" class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                <?php 
                    if(!empty( $data[2] )):
                        foreach( $data[2] as $dataPoster):
                ?>
                    <li class="splide__slide poster-item hvr-shadow fsm">
                        <img src="./assets/poster/<?php echo $dataPoster->file_poster; ?>" class="img-fluid mx-auto d-block zoomable fullimg" />
                    </li>
                    <?php endforeach;?>
                <?php endif;?>
                </ul>
            </div>
        </div>
    </div>
    <!-- Add Pagination -->
    
  </div>