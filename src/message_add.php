<?php
if (empty(session_id())) {session_start();}

include_once('_functions.php');
ifUserLogOffRedirect();

// echo '<pre>' . var_export($boards, true) . '</pre>';die;

include('_header.php');
include('_nav.php');

$idTopic = (isset($_GET["idTopic"]) ? $_GET["idTopic"] : null);

?>
<div class="container">
    <div class="row">
        <div class="col-12">
        <form action="message_add_script.php" method="post">
            <div class="form-group">
                <label for="content">Message</label>
                <textarea name="content" class="form-control" id="content" rows="3"></textarea>
            </div>

            <input type="hidden" name="idTopic" value="<?php echo $idTopic; ?>"> 
            
            <div class="text-center">
            <button type="submit"  class="btn btn-primary mb-2">Ajouter</button>
            </div>
            
        </form>
        </div>
    </div>
</div>

<?php
include("_footer.php");
?>
