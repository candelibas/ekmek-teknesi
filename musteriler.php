<?php include "header.php"; ?>
 
        <div data-role="content">
        


        
        <?php
        
        // view customer
        if(intval(@$_GET['musteri'])):
        
            $query = $db->query("SELECT * FROM musteriler WHERE musteri_id = '" . $_GET['musteri'] . "'")->fetch(PDO::FETCH_ASSOC);
            if ($query):
        ?>
        
        <div class="ui-corner-all custom-corners">
          <div class="ui-bar ui-bar-a">
            <h3><?php print $query['musteri_adi']; ?></h3>
          </div>
          <div class="ui-body ui-body-a">
          
            <p><b>Ekmek Sayısı: </b><?php print $query['musteri_ekmek'] . ' = ' . $query['musteri_ekmek']*$query['musteri_ekmek_katsayi'] . ' TL'; ?></p>
            <p><b>Su Sayısı: </b><?php print $query['musteri_su'] . ' = ' . $query['musteri_su']*$query['musteri_su_katsayi'] . ' TL'; ?></p>
            <p><b>Toplam Borç: </b><?php print $query['musteri_ekmek']*$query['musteri_ekmek_katsayi'] + $query['musteri_su']*$query['musteri_su_katsayi'] . ' TL';?></p>
          </div>
        </div>
                
        <?php
            endif;
        
        else:
        ?>
           
        <a href="#popupAdd" data-rel="popup" data-position-to="window" class="ui-icon-plus ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-check ui-btn-icon-left ui-btn-a" data-transition="pop">Müşteri Ekle</a>
        <div data-role="popup" id="popupAdd" data-theme="a" class="ui-corner-all">
            <form id="add_customer" method="post">
                <div style="padding:10px 20px;">
                    <h3>Müşteri Ekle</h3>
                    <label for="un" class="ui-hidden-accessible">Müşteri Adı:</label>
                    <input type="text" name="musteri_adi" id="form_add_adi" placeholder="Müşteri adı girin efendim" data-theme="a">
                    <input type="text" name="musteri_ekmek" id="un" placeholder="Müşteri ekmek sayısı" data-theme="a">
                    <input type="text" name="musteri_su" id="un" placeholder="Müşteri su sayısı" data-theme="a">
                    <button id="adds" class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-check">Ekle!</button>
                </div>
            </form>
        </div><!-- /add customer -->
          

          
          <table data-role="table" id="table-custom-2" data-mode="columntoggle" class="ui-body-d ui-shadow table-stripe ui-responsive" data-column-btn-theme="b" data-column-btn-text="Ayarlar" data-column-popup-theme="a">
         <thead>
           <tr class="ui-bar-d">
             <th data-priority="2">No</th>
             <th>Müşteri Adı</th>
             <th data-priority="3">Ekmek</th>
             <th data-priority="1">Su</th>
             <th data-priority="5">Toplam</th>
           </tr>
         </thead>
         <tbody>
         <?php
         
         $query = $db->query("SELECT * FROM musteriler ORDER BY musteri_adi ASC", PDO::FETCH_ASSOC);
         if ( $query->rowCount() ):
            foreach( $query as $row ):
         ?>
         
         <tr>
             <th><?php echo $row['musteri_id'];?></th>
             <td><a href="musteriler.php?musteri=<?php echo $row['musteri_id'];?>" data-rel="external"><?php echo $row['musteri_adi'];?></a></td>
             <td><?php echo $row['musteri_ekmek'];?></td>
             <td><?php echo $row['musteri_su'];?></td>
             <td><?php echo $row['musteri_ekmek']*$row['musteri_ekmek_katsayi'] + $row['musteri_su']*$row['musteri_su_katsayi'] . ' TL';?></td>
         </tr>
                        
         <?php
            endforeach;
         endif;
         ?>
           

         </tbody>
       </table>
       
       <?php endif; ?>

        </div><!-- /content -->
        
        
 <?php include "footer.php"; ?>
