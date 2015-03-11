<?php
if(checkIfUserIsAdmin()){ // check of de user wel geautoriseert is
    ?>
    <form method="post">
        Title: <input type="text" name="title" placeholder="Titel"> <br /> <br />

        <textarea name="bericht" placeholder="Email bericht">

        </textarea>

    </form>

<?php
}else{
    echo "Error: er ging iets fout!";
}
?>