<x-headerFooter class="bg-gradient-primary d-flex align-items-center">
<div class="container">
    <div class="card shadow-lg o-hidden border-0 my-5">
        <div class="card-body p-0">
            <div class="row">
                <div class="col-lg-5 d-none d-lg-flex">
                    <div class="flex-grow-1 bg-register-image" style="background-image: url('dogs/image2.jpeg');"></div>
                </div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h4 class="text-dark mb-4">Create an Account!</h4>
                        </div>
                        <form class="user" method="post">
                            @csrf
                            <div class="mb-3">
                                <input id="exampleFirstName" class="form-control form-control-user" type="text" placeholder="Name" name="name" />
                               
                            </div>
                            <div class="mb-3"><input id="exampleInputEmail" class="form-control form-control-user" type="email" aria-describedby="emailHelp" placeholder="Email Address" name="email" /></div>
                            <div class="row mb-3">
                                <div class="col-sm-6 mb-3 mb-sm-0"><input id="examplePasswordInput" class="form-control form-control-user" type="password" placeholder="Password" name="password" /></div>
                                <div class="col-sm-6"><input id="exampleRepeatPasswordInput" class="form-control form-control-user" type="password" placeholder="Repeat Password" name="password_repeat" /></div>
                            </div><button class="btn btn-primary d-block btn-user w-100" type="submit">Register Account</button>
                            
                            <hr />
                        </form>
                        <div class="text-center"><a class="small" href="forgot-password.html">Forgot Password?</a></div>
                        <div class="text-center"><a class="small" href="login.html">Already have an account? Login!</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('.user').submit(function (e) {
            e.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                type: 'POST',
                url: '{{ route('register') }}',
                data: formData,
                success: function (response) {
                    console.log(response);
                    $('#notification-container').append(
                        '<div class="alert alert-success alert-dismissible fade show m-1" role="alert"><strong>Success!</strong> ' +
                        response.message + '.</div>');
                    setTimeout(function () {
                        $('.alert').alert('close');
                    }, 3000);

                },
                error: function (response) {
                    console.log(response);
                }
            });
        });
</script>
</x-headerFooter>