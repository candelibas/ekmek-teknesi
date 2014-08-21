<?php include "header.php"; ?>
 
        <div data-role="content">
        
            <form id="veresiye_ekle" method="post">
        
            <label for="search-basic"><h3>Ekmek veya Su Ekle: Ör: isim ekmek_sayısı su_sayısı</h3></label>

            <textarea name="veresiye_veri" placeholder="Ses ver Türk ailesi..." id="veresiye_veri" ></textarea>
            
            <button id="start_button">
                <img id="start_img" src="img/mic.gif" alt="Start">
            </button>
            
            <a href="#" id="add_veresiyeBtn" class="ui-btn ui-icon-delete ui-btn-icon-plus">Ekle</a>
            
            </form>
        </div><!-- /content -->
        
        
 <?php include "footer.php"; ?>
