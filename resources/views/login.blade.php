<x-headerFooter class="bg-gradient-primary d-flex align-items-center" style="height:100vh;">
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
                                <form class="user" >
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
<script>
    $('.user').submit(function (e) {
            e.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                type: 'POST',
                url: '{{ route('login2') }}',
                data: formData,
                // headers: {
                //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                // },
                success: function (response) {
                    console.log(response);
                    $('#notification-container').append(
                        '<div class="alert alert-success alert-dismissible fade show m-1" role="alert"><strong>Success!</strong> ' +
                        response.message + '.</div>');
                    setTimeout(function () {
                        $('.alert').alert('close');
                    }, 3000);
                    window.location.href = "{{ route('home') }}";
                },
                error: function(xhr, status, error) {
            var response = JSON.parse(xhr.responseText);
            var errorsHtml = '<ul>';
            $.each(response.errors, function(index, value) {
                errorsHtml += '<li>' + value + '</li>';
            });
            errorsHtml += '</ul>';

            
            $('#notification-container').append(
                        '<div class="alert alert-danger alert-dismissible fade show m-1" role="alert"><strong>'+
                            response.message +'</strong> ' + errorsHtml + '.</div>');
                    setTimeout(function () {
                        $('.alert').alert('close');
                    }, 3000);
        }
            });
        });
</script>
</x-headerFooter>