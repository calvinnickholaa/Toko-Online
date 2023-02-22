<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 mx-auto col-lg-6 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form action="<?php echo base_url('registrasi/index') ?>" method="post" class="user">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="nama" id="exampleInputEmail" placeholder="Masukkan Nama Anda">
                                    <?php echo form_error('nama', '<div class="text-danger small ml-2">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" placeholder="Masukkan Username Anda">
                                    <?php echo form_error('username', '<div class="text-danger small ml-2">', '</div>') ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password1" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="password2" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Ulangi Password">
                                    </div>
                                    <?php echo form_error('password1', '<div class="text-danger small ml-4 mt-2">', '</div>') ?>
                                </div>
                                <button type="submit" class="btn btn-sm btn-primary btn-block btn-user">Daftar</button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?php echo base_url('auth/login') ?>">Sudah Punya Akun? Silahkan Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>