<!DOCTYPE html>
<html lang="en">

<head>
    @csrf
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$Document}}</title>
</head>

<body>
    <form method="post" action="/profile">
        {{-- Saat form tersubmit, data pada inputan form akan dikirim dan ditampilkan--}}

        @csrf
        <div class="info">
            <div class="address">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nama Anda" required>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>

        </div>
    </form>
</body>

</html>