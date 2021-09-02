<?php 
    $title = 'success';
    require_once 'includes/header.php';
    require_once 'db/conn.php';

    if(isset($_POST['submit'])){
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $speciality = $_POST['speciality'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $contact = $_POST['phone'];
        //call function to insert and track where a record is successfully added or not
        $isSuccess = $crud->insert($fname, $lname, $dob, $email, $contact, $speciality);

        if($isSuccess)
        {
            echo '<h1 class="text-center text-success">Registered successfully.</h1>';
        }
        else
        {
            echo '<h1 class="text-center text-success">There was a problem in processing.</h1>';
        }
    }
?>

    

    <div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $_POST['firstname']." ".$_POST['lastname'];?>
            </h5>
            <h6 class="card=-subtitle mb-2 text-muted">
                <?php echo $_POST['speciality'];?>
            </h6>
            <p class="card-text">Date of Birth: <?php echo $_POST['dob'];?></p>
            <p class="card-text">Email: <?php echo $_POST['email'];?></p>
            <p class="card-text">Phone: <?php echo $_POST['phone'];?></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>

<br>
<br>
<br>
<br>

<?php require_once 'includes/footer.php';?>