<!-- menu content -->
<ul>
    <li><a href="?nieuws" title="Nieuws">Nieuws</a></li>
    <li><a href="?acties" title="Acties">Acties</a> </li>
    <li><a href="?aboutUs" title="Over ons">Over&nbsp;ons</a></li>
    <li><a href="?vacatures" title="Vacatures">Vacatures</a></li>
    <li>Webshop
        <ul>
            <li><a href="?producten" title="Producten">Producten</a></li>
            <li><a href="?winkelwagen" title="Winkelwagen">Winkelwagen</a></li>
            <li><a href="?afrekenen" title="Afrekenen">Afrekenen</a></li>
            <?php
            if(checkIfUserIsAdmin()){
                    ?>
                    <li><a href="?beheerWebsite" title="Website beheren">Website&nbsp;Beheren</a></li>
                <?php

            }
            ?>
        </ul>
    </li>
</ul>
<!-- end menu content -->