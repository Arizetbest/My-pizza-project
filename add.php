<?php
$title = $email = $ingredients = '';

$errors = array('email'=>'','title'=>'','ingredients'=>'');

if(isset($_POST['submit'])){

// check email
if(empty($_POST['email'])){
    $email['email']= 'An email is required <p>';
}else{
    $email = $_POST['email'];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $errors['email']='email must be a valid email address';
    }
    
}

//check title

if(empty($_POST['title'])){
    $title['title']= 'A title is required <p>';
}else{
//using RegEx to validate title. first create a variable and assign it
//the method.
$title = $_POST['title'];//variable title assigned it post
if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
    $errors['title'] = 'Title must contain letters and spaces only';
}
}

//check ingredients

if(empty($_POST['ingredients'])){
    $ingredients['ingredients']= 'Atleast one ingredient is required <p>';
}else{
    $ingredients = $_POST['ingredients'];
    if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\$]*)*$/', $ingredients)){
      $errors['ingredients'] = 'ingredients must be a comma seperated list';
    }
}

if(array_filter($errors)){
    //The above array filter func is used to check if there is error in the form
}else{
    //once there is no error it will redirect the user to index1.php
    header('location: index1.php');
}



}// end of POST check

?>
<DOCTYPE html>
    <html>

<?php include('header.php'); ?>

<section class="container brown-text">
<h4 class="center">Add a Pizza</h4>
<form class="white" action="add.php" method="POST">
    <label>Your Email</label>
    <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
    <div class="red-text"><?php echo $errors['email']; ?></div>
    <label>Pizza Title</label>
    <input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
    <div class="red-text"><?php echo $errors['title']; ?></div>
    <label>Ingredients</label>
    <input type="text" name="ingredients" value="<?php htmlspecialchars($ingredients) ?>">
    <div class="red-text"><?php echo $errors['ingredients']; ?></div>
    <div class="center">
        <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
    </div>
</form>
</section>

<?php include('footer.php'); ?>


    </html>