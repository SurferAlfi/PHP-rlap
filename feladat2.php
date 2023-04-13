<!DOCTYPE HTML>
<hmtl>
    <head>
        <meta charset="utf-8">
        <title>Űrlap</title>
    </head>
<body>
    <h2>Regisztráció</h2>
    <form action="regisztral.php" method="post"> <!-- Szöveges beviteli mező -->
        
        <label>Név: <input name="nev" type="text"></label><br><br>
        
        <label>E-mail: <input name="email" type="text"></label><br><br>
        
        <label>Születési év: <select name="szulev"> <!-- Lenyíló lista -->
        <!-- Előállítandó HTML kód, PHP-vel: <option value="1900">1900</option> // <option value="1901">1901</option>-->
        <?php for ($ev=1900; $ev<=2010; $ev++) { ?>
        <option value="<?php echo $ev ?>"><?php echo $ev ?></option> <!-- LA "select" elem egy legördülő listát jelenít meg a felhasználónak, és az "option" elemek határozzák meg a lista elemeit. -->
        <?php } ?>
        </select></label>
        
        <label>Születési hónap: <select name="szulho"> <!-- Lenyíló lista -->
        <!-- Előállítandó HTML kód, PHP-vel: <option value="1">1</option> // <option value="2">2</option> -->
        <?php for ($ho=1; $ho<=12; $ho++) { ?>
        <option value="<?php echo $ho ?>"><?php echo $ho ?></option>
        <?php } ?>
        </select></label>
    
        <label>Születési nap: <select name="szulnap"> <!-- Lenyíló lista -->
        <?php for ($nap=1; $nap<=31; $nap++) { ?>
        <option value="<?php echo $nap ?>"><?php echo $nap ?></option>    
        <?php } ?>
        </select></label>
        <br><br>
    
        <fieldset> <!-- A "fieldset" egy HTML elem, amely csoportosítja és elkülöníti az űrlap elemeit. -->
        <legend>Testsúly</legend> <!-- A "fieldset" elem általában egy "legend" elemet is tartalmaz, amely megadja a csoportba tartozó elemek címét vagy alcímét. -->
        <?php for ($suly=0; $suly<=140; $suly+=10) { ?>
        <label><input name="suly" value="<?php echo $suly ?>" type="radio"><?php echo $suly . ' - ' . ($suly+10); ?>
        <br>                                    <!-- radio = csak egy lehet active -->
        </label> 
        <?php } ?>
        </fieldset>
        <br>
        <input value="Űrlap feladása" type="submit">
    </form>
</body>
</html>
