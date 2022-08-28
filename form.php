<?php
include_once "header.php";
const EMAIL = "info@ecoin.dz";
const PASSWORD = "123";
$email = (isset($_POST['email']))?$_POST['email']:null;
$password = (isset($_POST['password']))?$_POST['password']:null;
$check= (isset($_POST['send']))?$_POST['send']:null;

if($check=='ok'){
    if($email==EMAIL && $password ==PASSWORD){
        //header('Location:admin.php');
        $password = crypt($password, '_J9..rasm');
        echo $password;
    }else{
        header('Location:404.php');
    }

}else{
?>
<div class="container">
    <form action="" method="post">
        <div class="form-group row">
            <label for="email" class="col-sm-1-12 col-form-label"></label>
            <div class="col-sm-1-12">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-sm-1-12 col-form-label"></label>
            <div class="col-sm-1-12">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>
        </div>
        <input type="hidden" name="send" value="ok">
        
        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10 mt-5">
                <button type="submit"  class="btn btn-primary btn-lg">Login</button>
            </div>
        </div>
        
    </form>
</div>




<?php
}
include_once "footer.php";
?>