<title>Mynd</title>
<link rel="icon" type="image/ico" href="VSH_Skilaverkefni2_BAJ.png">
<div class="Verslun-Myndir2-2 textiPlayfair">
    <form action="Mynd.php" method="post">
            <label>fullt nafn</label>
            <input type="text" name="fulltnafn" id="fulltnafn" required autofocus placeholder="sláðu inn fullt nafn">

            <label>Sími</label>
            <input type="tel" name="Numer" id="numer" maxlength="7" required placeholder="xxx-xxxx">

            <label>Tölvufang</label>
            <input type="email" name="email" id="email" placeholder="ljosar@example.com">
            
            <label>byrta mynd<input type="radio" name="$radio_kyn" value="byrta"></label>
            
            <label>Fela mynd<input type="radio" name="$radio_kyn" value="fela"><br></label>


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
            </label>
            <input type="submit" value="senda">
    </form>
        </div>