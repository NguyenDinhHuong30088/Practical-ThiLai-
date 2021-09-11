<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link
        href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap"
        rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <title>Survey</title>
</head>
<body>
<div style="margin: auto; width: 60%">
    <h1 class="text-center p-2">Survey</h1>
    @if(session()->has("success"))
        <div class="alert alert-info">
            {{ session()->get("success") }}
        </div>
    @endif
    <form action="{{url("/surveys")}}" class="needs-validation" method="post" novalidate>
        @csrf
        <div class="position-relative" >
            <label for="validationTooltip01" class="form-label">Name</label>
            <div class="input-group">
                <input name="name" type="text" class="form-control" placeholder="Name" aria-label="Name" id="validationTooltip01" required />
            </div>
            <div class="invalid-feedback">
                Please enter name!
            </div>
        </div>
        <div class="position-relative" style="margin-top: 20px">
            <label for="validationTooltip02" class="form-label">Email</label>
            <div class="input-group">
                <span class="input-group-text" id="email">@</span>
                <input name="email" type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email" id="validationTooltip02" required>
            </div>
            <div class="invalid-feedback">
                Please enter email!
            </div>
        </div>
        <div class="position-relative" style="margin-top: 20px">
            <label for="validationTooltip03" class="form-label">Tel</label>
            <div class="input-group">
                <input name="tel" type="tel" class="form-control" placeholder="Phone number" aria-label="tel" id="validationTooltip03" required>
            </div>
            <div class="invalid-feedback">
                Please enter phone number!
            </div>
        </div>
        <div class="position-relative" style="margin-top: 20px">
            <label for="validationTooltip04" class="form-label">Comment</label>
            <textarea rows="5" name="comment" class="form-control" placeholder="Comment..." id="validationTooltip04" required></textarea>
            <div class="invalid-feedback">
                Please enter phone comment!
            </div>
        </div>
        <div class="position-relative" style="margin-top: 20px">
            <button class="btn btn-outline-primary" type="submit">Submit</button>
        </div>
    </form>
</div>
</body>

<script>
    (function () {
        'use strict'
        var forms = document.querySelectorAll('.needs-validation')
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>

</html>
