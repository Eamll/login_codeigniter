<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">

</head>

<body>
    <div class="container d-flex justify-content-center mt-5">
        <div class="col-md-4">
            <h4 class="text-center">Sign in</h4>
            <hr>
            <form action="<?=base_url('auth/check')?>" method="post">
                <?=csrf_field();?>

                <?php if(!empty(session()->getFlashdata('fail'))):?>
                <div class="alert alert-danger"><?=session()->getFlashdata('fail');?></div>
                <?php endif ?>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter your email"
                        value="<?=set_value('email')?>">
                    <span class=" text-danger"><?= isset($validation) 
                    ? display_error($validation, 'email') :'
                    '?>
                    </span>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control mb-2" name="password" placeholder="Enter password" />
                    <span class=" text-danger"><?= isset($validation) 
                    ? display_error($validation, 'password') :'
                    '?>
                    </span>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Sign In</button>
                </div>
                <br>
                <a href="<?= site_url('auth/register') ?>">Don't have an account? Sign Up!</a>
            </form>
        </div>
    </div>
</body>

</html>