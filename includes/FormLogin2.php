<div class="Verslun-Myndir2-2 textiPlayfair">
    <?php
    $fulltnafn = $_post['fulltnafn'];
    $simanumer = $_post['numer'];
    $email = $_post['email'];
    ?>
            <label>Eigandi: $fulltnafn</label>

            <label>Sími eiganda: $simanumer</label>

            <label>Netfang Eiganda: $email</label>
            
            


            <label>Stærðir eru í metrum lengd * hæð</label>
            <select>
                <option>1x0,5</option>
                <option>2x1</option>
                <option>3x1,5</option>
                <option>4x2</option>
                <option>5x2,5</option>
                <option>6x3</option>
            </select>
            <label>
                Comments
                <textarea name="comments"></textarea>
            </label></div>
