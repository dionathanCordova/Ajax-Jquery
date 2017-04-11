<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajax request with jQuery</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
    
</head>
<body>
<main>
    <?php require_once 'test2.php';$test = new Get();?>
    <section class="container"> 
        <h1>Ajax request with jQuery</h1>
        <span id="msg"><?php echo $test->info();?></span><br><br>
        <form id="AjaxRequest" method="GET">
        
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" placeholder="Name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label>Telephone</label>
                <input type="text" class="form-control" name="tel" placeholder="Telephone">
            </div>
            <button type="submit" class="btn btn-info" name="sub">Submit</button>
        </form>
        <?php 
        require_once 'test2.php';
        
       
        echo $test->selectIgual();
        
        // echo $test->getNome();
        // echo "<br>" . empty($_POST);
        // echo "<br>" . $_GET["name"];
        ?>
    </section>
</main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>