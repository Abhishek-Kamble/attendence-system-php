<?php
    $title = 'Index';
    require_once 'includes/header.php';
    require_once 'db/conn.php'
?>
    
    <h1 class="text-center">Registration system</h1>

    <form method="post" action="success.php">
        <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstname" name="firstname">
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastname" name="lastname">
        </div>
        <div class="mb-3">
            <label for="dob" class="form-label">Date of birth</label>
            <input type="text" class="form-control" id="dob" name="dob">
        </div>
        <div class="mb-3">
            <label for="speciality" class="form-label">Area of Experties</label>
            <select class="form-select" id="speciality" name="speciality">
                <option selected>Choose...</option>
                <option value="1">IT specialist</option>
                <option value="2">Web Developer</option>
                <option value="3">Software Developer</option>
                <option value="4">Database Admin</option>
                <option value="5">Other..</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Contact Number</label>
            <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp">
            <div id="phoneHelp" class="form-text">We'll never share your contact no. with anyone else.</div>
        </div>
        <button type="submit"name="submit" class="btn btn-primary btn-block">Submit</button>
    </form>

<?php require_once 'includes/footer.php'?>