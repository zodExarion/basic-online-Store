<x-headerFooter class="bg-gradient-primary d-flex align-items-center">
<div class="container ">
    <div class="row justify-content-center ">
        <div class="col-md-9 col-lg-12 col-xl-10 ">
            <div class="card shadow-lg o-hidden border-0 my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-flex">
                            <div class="flex-grow-1 bg-login-image" style="background-image: url('assets/img/bg.png');"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h4 class="text-dark mb-4">Welcome Back!</h4>
                                </div>
                                <form class="user" method="post" action="{{ route('login') }}" >
                                    @csrf
                                    <div class="mb-3"><input id="exampleInputEmail" class="form-control form-control-user" type="email" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email" /></div>
                                    <div class="mb-3"><input id="exampleInputPassword" class="form-control form-control-user" type="password" placeholder="Password" name="password" /></div>
                                    <div class="mb-3">
                                        <div class="custom-control custom-checkbox small"></div>
                                    </div><button class="btn btn-primary d-block btn-user w-100" type="submit">Login</button>
                                    <hr />
                                </form>
                                <div class="text-center"><a class="small link" href="forgot-password.html">Forgot Password?</a></div>
                                <div class="text-center"><a class="small link" href="/register">Create an Account!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <script>
    $('.user').submit(function (e) {
            e.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                type: 'POST',
                url: '{{ route('login') }}',
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
</script> --}}
</x-headerFooter>