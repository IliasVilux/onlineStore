<?php 
            session_start();
            require "cataleg.php";

            foreach($elMeuCataleg->productesCataleg as $producte) {

                echo '<div class="popup-view">
                    <div class="popup-card">
                        <a><i class="fas fa-times close-btn"></i></a>
                        <section class="popup-producto">
                        <article class="imgProd_popup">
                            <div class="slideshow-container">';
                                foreach ($producte->fotos as $foto) {
                                    echo 
                                    '<div class="mySlides fade">
                                    <img  id="imgBorde" src="' . $foto . '" style="width:50%">
                                    </div>';
                                    }
                                echo '
                            </div>
                        </article>
                        
                        </section>
                    </div>
                </div>';
            };