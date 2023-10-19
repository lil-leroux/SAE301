<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULAIRE</title>
</head>

<body>
    <h2>Create a student</h2>
    <?php echo validation_errors(); ?>
    <?php echo form_open('internships/index') ?>
    <label for="title">Id</label>
    <input type="input" name="id" /><br />
    <label for="title">Last name</label>
    <input type="input" name="lastname" /><br />
    <label for="title">First name</label>
    <input type="input" name="firstname" /><br />
    <label for="title">Email</label>
    <input type="input" name="email" /><br />
    <input type="submit" name="submit" value="Create a student" />
    </form>
</body>

</html>