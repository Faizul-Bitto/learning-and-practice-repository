<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>

<body>
    <h1>Form</h1>

    <form action="{{ route('submitForm') }}" method="POST">
        @csrf

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" placeholder="Name" value="{{ old('name') }}">
        @error('name')
            <p>{{ $message }}</p>
        @enderror

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
        @error('email')
            <p>{{ $message }}</p>
        @enderror

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" placeholder="Password" value="{{ old('password') }}">
        @error('password')
            <p>{{ $message }}</p>
        @enderror

        <label for="password_confirmation"></label>
        <input type="password" name="password_confirmation" id="password_confirmation"
            placeholder="Password Confirmation" value="{{ old('password_confirmation') }}">
        @error('password_confirmation')
            <p>{{ $message }}</p>
        @enderror

        <button type="submit">Submit</button>
    </form>
</body>

</html>
