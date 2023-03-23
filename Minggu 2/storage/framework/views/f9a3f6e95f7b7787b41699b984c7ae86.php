<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo csrf_field(); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($Document); ?></title>
</head>

<body>
    <form method="post" action="/profile">
        

        <?php echo csrf_field(); ?>
        <div class="info">
            <div class="address">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nama Anda" required>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>

        </div>
    </form>
</body>

</html><?php /**PATH F:\Project\Project smt 4\Workshop_Website\Minggu 2\resources\views/login.blade.php ENDPATH**/ ?>