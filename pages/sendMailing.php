<?php
if(checkIfUserIsAdmin()){ // check of de user wel geautoriseert is
    if(isset($_POST['title']) && isset($_POST['bericht'])){
        if(!empty($_POST['title']) && !empty($_POST['bericht'])) {
            $query = "SELECT userID FROM GEBRUIKER";
            $result = sqlsrv_query($db->getConn(),$query, array(), array( "Scrollable" => SQLSRV_CURSOR_KEYSET ));
            $totalMailsSend = 0;
            $subject = $_POST['title'];
            $bericht = $_POST['bericht'];
            while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)){
                $mailUser = new User($row['userID']);
                sendMail($mailUser->getEmail(),$subject, $bericht);
                $totalMailsSend++;
            }
            echo "Er zijn in totaal ". $totalMailsSend . " mails verstuurd!";
            echo "<br /><a href='?beheerWebsite' title='Website beheer'>Ga terug naar beheer pagina</a>";
        }else{
            echo "Er ging iets mis met het versturen van het bericht. (error #02)";
        }
    }else{
    ?>
    <form method="post">
        Title: <input type="text" name="title" placeholder="Titel"> <br /> <br />

        <textarea name="bericht" placeholder="Email bericht" rows="10" cols="100">

        </textarea>
        <br /><br/>
        <input type="submit" value="Verstuur mail">

    </form>

<?php
    }
}else{
    echo "Error: er ging iets fout!";
}


?>